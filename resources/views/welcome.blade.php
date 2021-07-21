<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class="flex items-center">
                    <a href="{{ route('jquery.index') }}" alt="jQuery Example">
                        <img src="/img/jquery-logo.gif" class="h-64 mx-8"/>
                    </a>
                    =>
                    <a href="{{ route('vue.index') }}" alt="Vue Example">
                        <img src="/img/vue-logo.png" class="h-64 mx-8"/>
                    </a>
                </div>
                <a class="block text-center my-10 hover:underline" href="{{ route('emergency.index') }}">Emergency!</a>
            </div>
        </div>
    </body>
</html>
