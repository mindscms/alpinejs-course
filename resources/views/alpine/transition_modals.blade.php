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
<div class="container mx-auto px-4 xl:px-64 my-12">
    <h2 class="text-2xl font-bold">Modal</h2>

    <div x-data="{ isOpen: false }">

        <button
            class="bg-blue-700 text-white px-4 py-4 mt-4 text-sm rounded"
            @click="isOpen = true
            $nextTick(() => $refs.modalCloseBtn.focus())
            "
        >
            Open Modal
        </button>


        <div
            style="background-color: rgba(0, 0, 0, .5)"
            class="mx-auto absolute top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >

            <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto">
                <div class="bg-white rounded p-8">
                    <h1 class="text-2xl font-bold mb-3">Modal Example</h1>

                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                    <div class="mt-4">
                        <button
                            class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded"
                            @click="isOpen = false"
                            x-ref="modalCloseBtn"
                        >
                            Close me
                        </button>
                    </div>

                </div>


            </div>

        </div>




    </div>




</div>


</body>
</html>
