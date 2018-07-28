@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 class="text-center">Paathshala</h1>
    <hr width="5%" style="border-bottom: 2px solid #fff;"/>
    <div class="container" style="padding-top: 40px;">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <a style="text-decoration: none;" href="{{ route('pathshala.category', $category->id) }}">
                    <div class="card">
                        <img width="100%" height="300px" src="{{ asset('/images/pathshala/'.$category->image) }}">
                        <div style="background-color: #fff; margin-top: -20px; padding-top: 30px; padding-bottom: 20px;">
                            <h4 style="color: black;" class="text-center">{{ $category->category }}</h4>
                        </div>
                        <br/>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')
