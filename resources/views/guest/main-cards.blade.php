@extends('layouts.app')

@section('main-content')
<div id="main-content">
<div class="album">
    @foreach ($comicsData as $index => $element)
        <div class="album-card">
            <div class="album-image">
                <img src="{{ asset($element['thumb']) }}" alt="{{$element['series']}}">
            </div>
            <a href="{{ route('guest-singlecard', ['index' => $index]) }}">
                <h4>{{$element['series']}}</h4>
            </a>
        </div>
    @endforeach
</div>
</div>
<a href="#" class="load-more">load more</a>
<div id="main-bottom">
    <div class="container">
        <ul>
            @foreach ($mainBottomData as $element)
            <li>
                <a href="{{$element['url']}}">
                    <img src="{{ asset($element['image']) }}" alt="{{$element['text']}}">
                    <p>{{$element['text']}}</p>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
