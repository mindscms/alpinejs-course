<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-300 text-gray-700">

<div class="container mx-auto px-4"
     {{--x-data="{ quote: 'Updated Awesome quote!' }"--}}
     x-data="{ quote: '' }"
     x-init="
        fetch('https://api.kanye.rest')
        .then(response => response.json())
        .then(data => quote = data.quote)
     "
>


    <div
        class="flex items-center text-center justify-center h-screen text-2xl italic"
        x-text="`&quot;${quote}&quot;`"
    >

    </div>
</div>

</body>
</html>
