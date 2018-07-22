@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">Paathshala</h1>
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <a href="{{ route('pathshala.category', $category->id) }}"><h4>{{ $category->category }}</h4></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')

