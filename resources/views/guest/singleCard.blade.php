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
                <img src="{{ asset('img/adv.jpg') }}" alt="adv image">
            </div>
        </div>

        <div class="sub-heading-card">
            <div class="container">
                <div class="talent">
                    <h1>Talent</h1>
                    <ul>
                        <li>
                            <div class="title">
                                Art by:
                            </div>
                            <div class="result">
                                @foreach ($comicsData['artists'] as $element)
                                    {{ $element.', ' }}
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                Written by:
                            </div>
                            <div class="result">
                                @foreach ($comicsData['writers'] as $element)
                                    {{ $element.', ' }}
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="specs">
                    <h1>Specs</h1>
                    <ul>
                        <li>
                            <div class="title">
                                Series:
                            </div>
                            <div class="result">
                                {{ strtoupper($comicsData['series']) }}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                U.S. Price:
                            </div>
                            <div class="result">
                                {{$comicsData['price']}}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                On Sale Date:
                            </div>
                            <div class="result">
                                {{$comicsData['sale_date']}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @dump($comicsData['artists'])
@endsection
