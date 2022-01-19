<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    @include('partials.header')

    <main>
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
    </main>

    @include('partials.footer')
</body>
</html>