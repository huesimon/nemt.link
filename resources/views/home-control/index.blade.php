<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Photo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased bg-gray-200">
    <nav class="flex flex-row-reverse bg-white p-3 border border-b shadow px-8">
        <div x-data="{ open: false }" class="relative inline-block text-left">
            <div>
                <button type="button" @click="open = !open"
                    class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                    id="options-menu" aria-expanded="true" aria-haspopup="true">
                    Options
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <!--
            Dropdown menu, show/hide based on menu state.
        
            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
            <div x-show="open" @click.away="open = false"
                class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
                role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                <div class="py-1" role="none">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                        role="menuitem">Account settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                        role="menuitem">Support</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                        role="menuitem">License</a>
                    <form method="POST" action="#" role="none">
                        <button type="submit"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                            role="menuitem">
                            Sign out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <main class="flex justify-center">
        <div id="content" class="flex flex-col space-y-4">
            <div class="flex flex-col mt-8">
                <label for="text" class="block text-sm font-medium text-gray-700">Text to speech</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input type="text" name="text" id="text"
                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md"
                        placeholder="Text here">
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <div class="inline-block">
                            <button type="button"
                                class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-r-md  bg-blue-500 hover:bg-blue-600 hover:shadow-lg">Send</button>
                        </div>
                    </div>
                </div>
                <div id="recent-texts" class="mt-4 ml-3">
                    <ul class="">
                        <li>
                            <span class="font-semibold">12:30 | </span>
                            <span class="">Simon: hey</span>
                        </li>
                        <li>
                            <span class="font-semibold">12:30 | </span>
                            <span class="">Simon: hey</span>
                        </li>
                        <li>
                            <span class="font-semibold">12:30 | </span>
                            <span class="">Simon: hey</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="upload-file" class="">
                <label for="text" class="block text-sm font-medium text-gray-700">Display on TV</label>
                <div class="flex flex-col items-center flex-grow mb-3">
                    <label
                        class="w-full flex flex-col items-center px-4 py-6 bg-blue-400 uppercase rounded-lg cursor-pointer hover:bg-blue hover:text-white">
                        <span class="mt-2 text-base leading-normal">Select a file</span>
                        <input type='file' class="hidden" />
                    </label>
                </div>
                <div id="recent-images" class="grid grid-cols-3 gap-4 mt-4">
                    <div class="bg-blue-300 h-20 w-20"></div>
                    <div class="bg-blue-300 h-20 w-20"></div>
                    <div class="bg-blue-300 h-20 w-20"></div>
                    <div class="bg-blue-300 h-20 w-20"></div>
                    <div class="bg-blue-300 h-20 w-20"></div>
                    <div class="bg-blue-300 h-20 w-20"></div>
                </div>
            </div>
            <div id="text-to-speech" class="bg-green-300">
                hey
            </div>
        </div>
    </main>
    @livewireScripts
</body>

</html>