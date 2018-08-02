@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">Gallery</h1>
    <div class="container">
        <div class="row">
            @foreach($albums as $album)
                <div class="col-md-4">
                    <a href="{{route('gallery',$album->id)}}" style="text-decoration: none;">
                            <img width="100%" height="300px" src="{{ asset('/images/gallery/'.$album->image) }}">
                            <div style="margin-top: -20px; background-color: #fff; padding-top: 30px; padding-bottom: 20px; color: black;">
                            <h2 class="text-center">{{ $album->title }}</h2>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')

