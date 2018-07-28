@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">{{ $blog->title }}</h1>
    <a style="position: absolute; top: 80px; right: 20px; color: red;" href="{{ route('blog.index') }}"><img src={{asset('images/cross.png')}} width="30px"></a>
    <div class="container" style="background-color: rgba(255,255,255,0.95); padding-top: 40px; padding-bottom: 40px;">
        <div class="row">
            <div class="text-center">
                <img width="500px" src="{{ asset('/images/blog/'.$blog->image)}}" style="padding-bottom: 30px;">
                <h3 style="color: black; padding-bottom: 20px;">{{ $blog->created_at }}</h3>
                <p style="color: black;">{!! substr($blog->content,50) !!}</p>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
