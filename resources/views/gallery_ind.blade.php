@include('layouts.header')
@include('layouts.navbar')
<section id="contact" style="padding-top: 100px;">
    <h1 style=" padding-bottom: 50px;" class="text-center">{{$album->title}}</h1>
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-md-4">
                <button type="button" data-toggle="modal" data-target="#{{$gallery->id}}">
                <img width="100%" height="300px" src="{{ asset('/images/gallery/'.$gallery->image) }}">
                </button>
            </div>
            <div id="{{$gallery->id}}" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 90vw; height: 90vh; background-color: black;">
                    <!-- Modal content-->
                    <div class="modal-content" style="height: 90vh; width: 90vw;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img style="width: 85vw; height: 70vh;" src="{{ asset('/images/gallery/'.$gallery->image) }}">    
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')
