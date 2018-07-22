@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">Blog</h1>
    <a href="{{ route('blog.index') }}">Back</a>
    <div class="container">
        <div class="row">
            <a href="{{ route('blog.show', $blog->id) }}"><h2>{{ $blog->title }}</h2></a>
            <p>{!! substr($blog->content,50) !!}</p>
            <img width="500px" src="{{ asset('/images/blog/'.$blog->image)}}">
            {{ $blog->created_at }}
        </div>
    </div>

</section>
@include('layouts.footer')

