<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <ul>
                @foreach ($trains as $train)
                    
                <li>
                    {{$train -> company}}
                    {{$train -> departure_station}}
                    {{$train -> arrival_station}}
                    {{$train -> departure_time}}
                    {{$train -> arrival_time}}
                    {{$train -> train_code}}
                    {{$train -> carriage_count}}
                </li>
                @endforeach
            </ul>

        </div>
    </main>

</body>

</html>