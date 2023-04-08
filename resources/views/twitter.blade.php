<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles()
    </head>
    <body class="font-sans antialiased h-full bg-black">

       <div class="container grid grid-cols-4 m-auto h-full text-[#d6d9db]">
        {{-- Menu --}}
        <div class="flex flex-col text-xl font-extrabold space-y-3 pt-1">
            <x-menu.item icon="twitter" route="#"></x-menu.item>
            <x-menu.item icon="home" route="#" title="Home"/>
            <x-menu.item icon="explore" route="#" title="Explorer"/>
            <x-menu.item icon="notification" route="#" title="Notifications"/>
            <x-menu.item icon="message" route="#" title="Messages"/>
            <x-menu.item icon="twitter-blue" route="#" title="Twitter Blue"/>
            <x-menu.item icon="profile" route="#" title="Profile"/>
            <x-menu.item icon="more" route="#" title="More"/>
            <x-menu.button-tweet title="Tweet"/>

        </div>
        {{-- End Menu --}}
        <div class="col-span-2 border-x-2 border-[#2f3336]">Timeline</div>
        <div class="">As</div>

       </div>
        @livewireScripts()
    </body>
</html>
