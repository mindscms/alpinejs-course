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

    <div class="w-screen h-screen flex items-center justify-center">
        <div
            class="max-w-7xl mx-auto text-center"
            x-data="{
                text: '',
                textArray: ['Alpine JS is Pretty Library'],
                textIndex: 0,
                charIndex: 0,
                typeSpeed: 100,
            }"
            x-init="setInterval(function() {

                let current = $data.textArray[ $data.textIndex ];
                $data.text = current.substring(0, $data.charIndex);
                $data.charIndex += 1;

            }, $data.typeSpeed);"
        >

            <h1 class="text-7xl font-bold" x-text="text"></h1>

        </div>


    </div>

</body>
</html>
