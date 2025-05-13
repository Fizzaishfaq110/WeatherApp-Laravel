{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Open Weather App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>

        </style>
    @endif
</head>

<body>
    <div>
        <h1>Weather App</h1>

        <label class="label" for="city">Enter city name</label>
        <form method="get" action="{{ route('weather') }}">
            <input type="text" name="city" class="input" placeholder="e.g., London" id="city"
                autocomplete="off" value="{{ $city }}">
            <button type="submit" class="btn btn-default">Get Weather</button>
        </form>
    </div>
    @if ($error)
        <div class="alert" style="color: var(--accent-1); margin-top: 1em;">{{ $error }}</div>
    @elseif (!empty($weatherData))
        <h2>Weather in {{ $weatherData['name'] }}</h2>
        <table>
            <tr>
                <th>Temperature</th>
                <td>{{ $weatherData['main']['temp'] }} °C</td>
            </tr>
            <tr>
                <th>Weather</th>
                <td>{{ $weatherData['weather'][0]['description'] }}</td>
            </tr>
            <tr>
                <th>Humidity</th>
                <td>{{ $weatherData['main']['humidity'] }}%</td>
            </tr>
            <tr>
                <th>Wind Speed</th>
                <td>{{ $weatherData['wind']['speed'] }} m/s</td>
            </tr>
        </table>
    @endif
    </div>
</body>

</html> --}}
