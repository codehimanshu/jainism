@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 class="text-center">BLOG</h1>
    <hr width="5%" style="border-bottom: 2px solid #fff;">
    <div class="container" style="padding-top: 40px;">
        <div class="row" class="blog_card">
            @foreach($blogs as $blog)
            <div class="col-md-6">
                <div>
                    <a style="text-decoration: none;" href="{{ route('blog.show', $blog->id) }}">
                        <img width="100%" height="300px" src="{{ asset('/images/blog/'.$blog->image)}}">
                        <div style="margin-top: -20px; background-color: #fff; padding-top: 30px; padding-bottom: 20px; color: black;">
                            <h2 class="text-center">{{ $blog->title }}</h2>
                            <p class="text-center" style="padding: 10px">{!! substr($blog->content,0,200) !!}</p>
                            <h3 class="text-center"> {{ $blog->created_at }}</h3>
                        </div>
                    </a>
                </div>
                <br/>
            </div>
            @endforeach
        </div>
    </div>
    <center>{{$blogs->links()}}</center>
</section>
@include('layouts.footer')
