@extends('layouts.main')

@section('main-content')
    <h1>
                HOMEPAGE
    </h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo corporis delectus. Doloremque illo molestias magni dignissimos quia, ab eos iure autem laboriosam qui dolores consequatur! Veritatis quos necessitatibus praesentium.
    </p>

    <h2>
        Welcome {{ $user }}
    </h2>

    @if (! empty($genres))
        <h3>I NOSTRI GENERI</h3>
        <ul>
            @foreach ($genres as $genre)
                <li>{{ $genre }}</li>
            @endforeach
        </ul>
    @else
        <h3>NON CI SONO GENERI</h3>
    @endif
@endsection