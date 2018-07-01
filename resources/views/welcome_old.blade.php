@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach($countries as $country)
                    <a href="{{route('country.show',$country->id)}}">{{$country->name}}</a>
                    @if($country->image)
                        <img src="{{ asset('img/'.$country->image) }}">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
