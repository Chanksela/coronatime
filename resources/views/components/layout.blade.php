<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coronatime</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite ('resources/css/app.css')

</head>

<body {{ $attributes(['class' => 'ml-4 sm:ml-24']) }}>
    {{ $slot }}
</body>

</html>
