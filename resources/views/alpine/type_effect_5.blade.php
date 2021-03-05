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
                textArray: ['Alpine JS is Pretty Library', 'Alpine JS Course By Minds CMS', 'You have to Learn It!'],
                textIndex: 0,
                charIndex: 0,
                pauseStart: 500,
                pauseEnd: 1500,
                cursorSpeed: 400,
                typeSpeed: 75,
                direction: 'forward',
            }"
            x-init="(() => {

                let typingInterval = setInterval(startType, $data.typeSpeed);

                function startType() {
                    let current = $data.textArray[ $data.textIndex ];
                    if ($data.charIndex > current.length) {
                        $data.direction = 'backward';

                        clearInterval(typingInterval);

                        setTimeout(function() {
                            typingInterval = setInterval(startType, $data.typeSpeed);
                        }, $data.pauseEnd);
                    }

                    $data.text = current.substring(0, $data.charIndex);
                    if ($data.direction == 'forward') {
                        $data.charIndex += 1;
                    } else {
                        if ($data.charIndex === 0) {
                            $data.direction = 'forward';
                            clearInterval(typingInterval);

                            setTimeout(function() {

                                $data.textIndex += 1;
                                if ( $data.textIndex >= $data.textArray.length ) {
                                    $data.textIndex = 0;
                                }

                                typingInterval = setInterval(startType, $data.typeSpeed);
                            }, $data.pauseStart);
                        }

                        $data.charIndex -= 1;
                    }
                }

                setInterval(function() {
                    if ($refs.cursor.classList.contains('hidden')){
                        $refs.cursor.classList.remove('hidden');
                    } else {
                        $refs.cursor.classList.add('hidden');
                    }

                }, $data.cursorSpeed);

            })()">

            <div class="relative h-auto">
                <h1 class="text-7xl font-bold" x-text="text"></h1>
                <span class="absolute right-0 top-0 h-full w-5 -mr-8 bg-black" x-ref="cursor"></span>
            </div>
        </div>


    </div>

</body>
</html>
