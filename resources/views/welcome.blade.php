<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BCE </title>

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
    <x-hero></x-hero>
    <x-common.section id="what-we-do" bgColor="bg-gray-50" padding="py-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-bce-blue mb-4">Comprehensive Engineering and Environmental Solutions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">BCE is a global leader in pollution control, systems engineering, and advanced manufacturing. We offer end-to-end services, including design, fabrication, installation, and proactive maintenance. Our clients count on us to solve complex environmental challenges while enhancing operational performance.</p>
            </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <x-common.icon-box icon="engineering"></x-common.icon-box>
            <x-common.icon-box
                title="Custom Manufacturing & Fabrication"
                description="High-precision fabrication with ASME-certified quality standards."
                icon="box"
                bgColor="bg-blue-50"
                titleColor="text-blue-800"
                iconColor="text-blue-600"
                padding="p-8"
                shadow="shadow-lg"
                iconSize="h-10 w-10"
            ></x-common.icon-box>
            <x-common.icon-box
                title="Custom Manufacturing & Fabrication"
                description="High-precision fabrication with ASME-certified quality standards."
                icon="box"
                bgColor="bg-white"
                titleColor="text-blue-800"
                iconColor="text-blue-600"
                padding="p-8"
                shadow="shadow-lg"
                iconSize="h-10 w-10"
            ></x-common.icon-box>
            <x-common.icon-box
                title="Custom Manufacturing & Fabrication"
                description="High-precision fabrication with ASME-certified quality standards."
                icon="box"
                bgColor="bg-blue-50"
                titleColor="text-blue-800"
                iconColor="text-blue-600"
                padding="p-8"
                shadow="shadow-lg"
                iconSize="h-10 w-10"
            ></x-common.icon-box>
        </div>
    </x-common.section>
</body>

</html>