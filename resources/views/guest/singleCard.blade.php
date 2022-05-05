@extends('layouts.app')

@section('main-content')
    <div id="image-card">
        <div class="container">
            <img src="{{$comicsData['thumb']}}" alt="{{$comicsData['title']}}">
        </div>
    </div>
    <div id="description-card" class="container">

        <div class="heading-card">
            <div class="col-left">
                <h1>{{$comicsData['title']}}</h1>
                <div class="label">
                    <p>U.S. Price: <span>{{$comicsData['price']}}</span></p>
                    <div class="label-left">
                        <p>AVAILABLE</p>
                        <span>Check Availability</span>
                    </div>
                </div>
                <p class="description">{{$comicsData['description']}}</p>
            </div>
            <div class="col-right">
                <img src="{{ asset('img/adv.jpg') }}" alt="">
            </div>
        </div>

        <div class="sub-heading-card">
            talenti e specifiche
        </div>
    </div>
    @dump($comicsData)
@endsection
