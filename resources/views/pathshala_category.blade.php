@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">Paathshala</h1>
    <div class="container">
        <div class="row">
            <h2>{{ $category->cxategory }}</h2>  
        </div>
        <div class="row">
            @foreach($videos as $video)
            <div class="col-md-4">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$video->url}}">
                </iframe>
                <h4>{{$video->title}}</h4>
                <p>{{$video->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')

