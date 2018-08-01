@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">Gallery</h1>
    <div class="container">
        <div class="row">
            <h2>{{ $album->title }}</h2>  
        </div>
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-md-4">
                <img width="100%" height="300px" src="{{ asset('/images/gallery/'.$gallery->image) }}">
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')

