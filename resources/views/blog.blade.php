@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">Blog</h1>
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-4">
                <a href="{{ route('blog.show', $blog->id) }}"><h2>{{ $blog->title }}</h2></a>
                <p>{!! substr($blog->content,0,200) !!}</p>
                <img width="300px" src="{{ asset('/images/blog/'.$blog->image)}}">
                {{ $blog->created_at }}
            </div>
            @endforeach
        </div>
    </div>
    <center>{{$blogs->links()}}</center>
</section>
@include('layouts.footer')

