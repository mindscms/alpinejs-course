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

    <div class="container mx-auto p-4 mb-4" x-data="{ tab: 'tab1' }">
        <h2 class="text-2xl font-bold">Tabs</h2>

        <ul class="flex border-b mt-6">
            <li class="-mb-px mr-1">
                <a href="#"
                   @click.prevent="tab = 'tab1'"
                   class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800"
                   :class="{ 'font-semibold rounded-t bg-white text-blue-700 border-l border-r border-t' : tab === 'tab1' }"
                >
                    Tab 1
                </a>
            </li>

            <li class="-mb-px mr-1">
                <a href="#"
                   class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800"
                   :class="{ 'font-semibold rounded-t bg-white text-blue-700 border-l border-r border-t' : tab === 'tab2' }"
                   @click.prevent="tab = 'tab2'"
                >
                    Tab 2
                </a>
            </li>

            <li class="-mb-px mr-1">
                <a href="#"
                   class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800"
                   :class="{ 'font-semibold rounded-t bg-white text-blue-700 border-l border-r border-t' : tab === 'tab3' }"
                   @click.prevent="tab = 'tab3'"
                >
                    Tab 3
                </a>
            </li>
        </ul>

        <div class="content bg-white px-4 py-4 border-l border-r border-t pt-4">
            <div x-show="tab === 'tab1'">
                Tab 1, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>

            <div x-show="tab === 'tab2'">
                Tab 2, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>

            <div x-show="tab === 'tab3'">
                Tab 3, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>


    </div>

</body>
</html>
