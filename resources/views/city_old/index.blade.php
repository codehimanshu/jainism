@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>{{$country->image}}</h2>
                @foreach($cities as $city)
                    <a href="{{route('city.show',$city->id)}}">{{$city->name}}</a>
                    @if($city->image)
                        <img src="{{ asset('img/'.$city->image) }}">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
