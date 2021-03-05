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

    <div class="container mx-auto px-4 mt-4" x-data="{ image: 'image1' }">
        <div>
            <img src="{{ asset('images/01.jpg') }}" alt="Image 1" x-show="image === 'image1'">
            <img src="{{ asset('images/02.jpg') }}" alt="Image 2" x-show="image === 'image2'">
            <img src="{{ asset('images/03.jpg') }}" alt="Image 3" x-show="image === 'image3'">
        </div>

        <div class="flex items-center mt-4">
            <a href="#"
               class="border border-transparent hover:border-blue-500"
               :class="{ 'border-blue-500' : image === 'image1' }"
               @click.prevent="image = 'image1'"
            >
                <img src="{{ asset('images/01.jpg') }}" alt="Image 1" class="w-12">
            </a>

            <a href="#"
               class="border border-transparent hover:border-blue-500"
               :class="{ 'border-blue-500' : image === 'image2' }"
               @click.prevent="image = 'image2'"
            >
                <img src="{{ asset('images/02.jpg') }}" alt="Image 2" class="w-12">
            </a>

            <a href="#"
               class="border border-transparent hover:border-blue-500"
               :class="{ 'border-blue-500' : image === 'image3' }"
               @click.prevent="image = 'image3'"
            >
                <img src="{{ asset('images/03.jpg') }}" alt="Image 3" class="w-12">
            </a>
        </div>


    </div>

</body>
</html>
