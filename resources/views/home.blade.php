<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        .widget {
            display: table;
            margin: auto;
            padding: 20px 30px;
            background: white;
            font-family: 'Roboto', sans-serif;
            width: 50%;
            text-align: center;
        }

        .widget-title {
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #222;
            font-size: 24px;
            padding-left: 15px;
            margin-bottom: 20px;
            margin-top: 40px;
            width: 100%;
            text-decoration: none;
        }

        .widget-list {
            padding: 0;
            list-style: none;
        }

        .widget-list a {
            text-decoration: none;
            outline: none;
            display: block;
            padding: 6px 0;
            letter-spacing: 1px;
            font-size: 18px;
            transition: .3s linear;
        }

        .active {
            color: #b99d61;
            font-weight: bold;
        }
    </style>
</head>

<body>



    <div class="widget">

        <h3 class="widget-title">
                <a href="{{ route('home') }}" class="widget-title">
                    Главная страница
                </a>
        </h3>
        <hr style="margin:20px">

        <ul class="widget-list">
            @if ($city == "msk")
            <li><a href="{{ route('city', ['city' => 'msk']) }}" class="active">Москва</a></li>
            @else
            <li><a href="{{ route('city', ['city' => 'msk']) }}">Москва</a></li>
            @endif

            @if ($city == 'kzn')
            <li><a href="{{ route('city', ['city' => 'kzn']) }}" class="active">Казань</a></li>
            @else
            <li><a href="{{ route('city', ['city' => 'kzn']) }}">Казань</a></li>
            @endif

            @if ($city == 'stv')
            <li><a href="{{ route('city', ['city' => 'stv']) }}" class="active">Ставрополь</a></li>
            @else
            <li><a href="{{ route('city', ['city' => 'stv']) }}">Ставрополь</a></li>
            @endif

            @if ($city == 'smr')
            <li><a href="{{ route('city', ['city' => 'smr']) }}" class="active">Самара</a></li>
            @else
            <li><a href="{{ route('city', ['city' => 'smr']) }}">Самара</a></li>
            @endif
        </ul>

    </div>
</body>

</html>