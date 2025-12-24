<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'BCE') }} </title>
    <link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @livewireStyles
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
    
    @if(session('success'))
    <x-flash type="success"
        :title="session('success-title', 'Success')"
        :message="session('success')" />
    @endif

    @if ($errors->any())
    <x-flash type="error"
        title="Validation Error"
        :message="$errors->all()" />
    @endif
    <main>
        {{$slot}}
    </main>
    <x-footer></x-footer>
    
       
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('closeModal', () => {
            // This will close any modal by resetting the selectedItemId
            Livewire.emit('resetSelectedItemId');
        });
        
        Livewire.on('costAdded', () => {
            // Refresh the items table
            Livewire.emit('refresh');
        });
    });

</script>
 @livewireScripts
</body>

</html>