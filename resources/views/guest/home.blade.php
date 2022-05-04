@extends('layouts.app')

@section('home-content')
<div id="main-content">
    <div id="jumbotron">
    </div>
    <div class="album">
        <div class="album-card">
            {{--<div class="album-image">
                <img :src="singleCard.thumb" :alt="singleCard.series">
            </div>
            <h4>{{singleCard.series}}</h4>--}}
        </div>
    </div>
    <a href="#" class="load-more">load more</a>
</div>
@endsection
