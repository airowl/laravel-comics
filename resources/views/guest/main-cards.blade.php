@extends('layouts.app')

@section('main-content')
<div id="main-content">
    <div id="jumbotron">
    </div>
    <div class="album">
        @foreach ($comicsData as $element)
            <div class="album-card">
                <div class="album-image">
                    <img src="{{$element['thumb']}}" alt="{{$element['series']}}">
                </div>
                <h4>{{$element['series']}}</h4>
            </div>
        @endforeach
    </div>
    <a href="#" class="load-more">load more</a>
</div>
@endsection
