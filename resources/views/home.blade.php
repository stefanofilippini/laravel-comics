@extends('layouts.main')

@section('main-content')
<div class="dark-bg-1">
    <div class="container d-flex f-dir-column">
        <div class="cards d-flex f-wrap space-between align-items-center">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                    <h4>{{ $card['series'] }}</h4>
                </div>
            @endforeach
        </div>
        <a class="btn" href="/">LOAD MORE</a>
    </div>
</div>

@endsection