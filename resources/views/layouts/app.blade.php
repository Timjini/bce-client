<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'BCE') }} </title>

    <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bce-blue': '#003366',
                        'bce-light-blue': '#0066cc',
                        'bce-steel': '#4d4d4d',
                        'bce-accent': '#ff6600',
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="">
    @include('layouts.navigation')
    <main>
        {{$slot}}
    </main>
    <x-footer></x-footer>
</body>

</html>