@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">Paathshala</h1>
    <div class="container">
        <div class="row">
            @foreach($albums as $album)
                <div class="col-md-4">
                            <img width="100%" height="300px" src="{{ asset('/images/gallery/'.$album->image) }}">
                    <a href="{{route('gallery',$album->id)}}"><h4>{{$album->title}}</h4></a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')

