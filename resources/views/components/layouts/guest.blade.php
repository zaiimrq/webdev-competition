<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/custom.js'])
    @livewireStyles()
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/feather-icons/dist/feather.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-green-50 to-teal-50">

    {{ $slot }}

    @include('partials.guest-footer')

    @livewireScriptConfig()
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');

            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
    </script>
</body>

</html>
