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
    <header class="border-t-4 border-blue-700 bg-white shadow-md">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <ul class="flex">
                <li><a href="/dropdown">Home</a></li>
            </ul>


            <div class="relative" x-data="{ isOpen: false }">
                <button
                    class="flex items-center focus:outline-none"
                    @click="isOpen = !isOpen"
                    @keydown.escape="isOpen = false"
                >
                    <img src="{{ asset('images/avatar.png') }}" alt="Avatar Image" class="w-8 h-8 rounded-full">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path class="heroicon-ui" d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z"/>
                    </svg>

                </button>

                <ul
                    {{--x-show.transition.duration.1000ms.opacity="isOpen"--}}
                    {{--x-show.transition.duration.1000ms.scale.5="isOpen"--}}
                    {{--x-show.transition.duration.1000ms.scale.5.origin.top.right="isOpen"--}}
                    {{--x-show.transition.in.duration.1000ms.opacity.scale.5.origin.top.right="isOpen"--}}
                    x-show.transition.in.duration.1000ms.opacity.scale.5.origin.top.right.out.duration.1000ms.opacity.scale.5.origin.top.right="isOpen"


                    class="absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 right-0 z-20"
                    @click.away="isOpen = false"
                    {{--
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    --}}
                >

                    <li>
                        <a href="/dropdown" class="flex items-center px-3 py-3 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                            </svg>
                            <span class="block px-4">Account</span>
                        </a>
                    </li>

                    <li>
                        <a href="/dropdown" class="flex items-center px-3 py-3 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <span class="block px-4">Settings</span>
                        </a>
                    </li>

                    <li class="border-t border-gray-300">
                        <a href="/dropdown" class="flex items-center px-3 py-3 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui" d="M4.93 19.07A10 10 0 1 1 19.07 4.93 10 10 0 0 1 4.93 19.07zm1.41-1.41A8 8 0 1 0 17.66 6.34 8 8 0 0 0 6.34 17.66zM13.41 12l1.42 1.41a1 1 0 1 1-1.42 1.42L12 13.4l-1.41 1.42a1 1 0 1 1-1.42-1.42L10.6 12l-1.42-1.41a1 1 0 1 1 1.42-1.42L12 10.6l1.41-1.42a1 1 0 1 1 1.42 1.42L13.4 12z"/>
                            </svg>
                            <span class="block px-4">Logout</span>
                        </a>
                    </li>

                </ul>


            </div>



        </nav>




    </header>

</body>
</html>
