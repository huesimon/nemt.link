<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Photo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
</head>

<body class="antialiased bg-gray-200">
    <nav class="flex flex-row justify-between items-center bg-white p-3 border border-b shadow px-8">
        <div>Logo</div>
        {{-- <div class="hidden lg:block relative"> --}}
        <div class="relative">
            <div class="absolute top-0 left-0 flex items-center h-full">
                <div class="text-xs text-gray-400 px-2 ml-2">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            <input type="text" class="rounded bg-gray-50 placeholder-gray-400 w-72 px-3 py-1 text-sm text-center"
                placeholder="Search">
        </div>

        <div class="flex flex-row items-center space-x-2">
            <span class="bg-blue-400 text-white rounded p-1 text-sm font-semibold">Log in</span>
            <span class="text-blue-400 font-semibold text-sm">Sign up</span>
        </div>
    </nav>
    <main class="px-12">
        {{-- {{ $slot }} --}}
        <div id="profile-section" class="flex flex-row mt-8 justify-center">
            <div class="w-20 h-20 sm:w-40 sm:h-40 flex-none bg-blue-600 rounded-full"></div>
            <div class="flex flex-col ml-12">
                <div class="flex flex-row items-center space-x-3">
                    <h2 class="text-3xl font-thin">seguratom</h2>
                    <div>
                        *
                    </div>
                    <div>
                        <span class="bg-blue-400 text-white rounded p-1 text-sm font-semibold">Follow</span>
                    </div>
                </div>
                <div class="hidden sm:flex flex-col sm:flex-row sm:items-center sm:space-x-14 mt-4 text-sm">
                    <div class="flex flex-row space-x-2">
                        <span class="font-bold">2,976</span>
                        <p>posts</p>
                    </div>
                    <div class="flex flex-row space-x-2">
                        <span class="font-bold">1.4m</span>
                        <p>followers</p>
                    </div>
                    <div class="flex flex-row space-x-2">
                        <span class="font-bold">1,548</span>
                        <p>following</p>
                    </div>
                </div>
                <div>About</div>
            </div>
        </div>
        <div id="content">

        </div>
    </main>
    @livewireScripts
</body>

</html>