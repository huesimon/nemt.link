<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @livewireStyles

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="antialiased">
    <div class="flex flex-row h-screen">
        <div class="bg-red-300 w-64 flex flex-col justify-between p-4">
            Menu items
        </div>
        <div class="bg-green-300 w-screen flex flex-col space-y-2 p-4">
            <livewire:link-list-item />
            <livewire:link-list-item />
            <livewire:link-list-item />
            <div class="bg-blue-300">
                links
            </div>
        </div>
    </div>
</body>
<!-- Scripts -->
@livewireScripts
<script src=" {{ mix('js/app.js') }}" defer>
</script>

</html>