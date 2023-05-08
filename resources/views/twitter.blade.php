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
            <div class="fixed">
                <x-menu.item icon="twitter" route="#"></x-menu.item>
                <x-menu.item icon="home" route="#" title="Home" />
                <x-menu.item icon="explore" route="#" title="Explorer" />
                <x-menu.item icon="notification" route="#" title="Notifications" />
                <x-menu.item icon="message" route="#" title="Messages" />
                <x-menu.item icon="bookmarks" route="#" title="Bookmarks" />
                <x-menu.item icon="twitter-blue" route="/subscribe" title="Twitter Blue" />
                <x-menu.item icon="organization" route="/verified-organization" title="Verified Orgs" />
                <x-menu.item icon="profile" route="#" title="Profile" />
                <x-menu.item icon="more" route="#" title="More" />
                <x-menu.button-tweet title="Tweet" />

            </div>

        </div>
        {{-- End Menu --}}

        {{-- TIMELINE --}}
        <div class="col-span-2 border-x-2 border-lines relative">

            <x-timeline.home />

            <livewire:tweet.create />

            <livewire:tweet.timeline />

        </div>
        {{-- END TIMELINE --}}

        {{-- RIGHT SIDE --}}
        <div class="mt-2 pl-6 space-y-6">
            <div class="flex relative">
                <x-icons.search class="absolute mt-[15px] ml-5 w-5 fill-neutral-500" />
                <input type="text" placeholder="Search Twitter"
                    class="
                        bg-neutral-900 rounded-full font-bold
                        focus:outline-none shadow h-12 px-14
                        border-none w-full
                   ">
            </div>

            {{-- Relevant People --}}
            <div class="rounded-2xl border-lines border-[0.625px] min-h-40 px-4 py-2">
                <div class="font-extrabold text-xl">Relevant People</div>
                <div class="flex align-top space-x-2 mt-4">
                    <div>
                        <img alt="Pinguim Academy" draggable="true" class="rounded-full"
                            src="https://pbs.twimg.com/profile_images/1441217650680500231/NtMy9zs5_normal.jpg" />
                    </div>

                    <div class="w-full">
                        <div class="flex justify-between w-full">
                            <div>
                                <div class="text-white font-bold text-base">Rafael Lunardelli</div>
                                <div class="text-sm text-neutral-500 font-semibold">@r2luna</div>
                            </div>
                            <div class="flex items-center">
                                <x-timeline.follow>Follow</x-timeline.follow>
                            </div>
                        </div>
                        <div class="text-[15px] mt-1">
                            Helping developers learn faster
                            @iCodeThis
                            - 💻 YouTube: http://youtube.com/florinpop
                        </div>
                        <div class="flex items-center justify-between w-4/5 -ml-3 mt-1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl min-h-40 pt-2 bg-neutral-900">
                <div class="font-extrabold text-xl mb-6 px-4">What's happening</div>
                <div class="">
                    <div class="px-4 py-3 cursor-pointer hover:bg-neutral-800">
                        <div class="flex items-center justify-between relative">
                            <span class="text-sm text-neutral-500">Sports · Trending</span>
                            <x-timeline.btn icon="dots" color="blue" class="absolute right-1" />
                        </div>
                        <div class="text-white font-bold">
                            De Bruyne
                        </div>
                        <div class="text-sm text-neutral-500">
                            Trending with <span class="text-twitter">#MCFC</span>
                        </div>
                    </div>

                    <div class="px-4 py-3 cursor-pointer hover:bg-neutral-800 space-y-px">
                        <div class="flex items-center justify-between relative">
                            <span class="text-sm text-neutral-500">Politics · Trending</span>
                            <x-timeline.btn icon="dots" color="blue" class="absolute right-1" />
                        </div>
                        <div class="text-white font-bold">Melania</div>
                        <div class="text-sm text-neutral-500">
                            Trending with <span class="text-twitter">First Lady</span>
                        </div>
                    </div>

                    <div class="px-4 py-4 cursor-pointer hover:bg-neutral-800 rounded-b-xl text-twitter">
                        Show more
                    </div>
                </div>
            </div>

            <div class="text-sm text-neutral-500 flex gap-2 flex-wrap pl-4">
                <a href="#" class="hover:underline">Terms of Service</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Cookie Policy</a>
                <a href="#" class="hover:underline">Accessibility</a>
                <a href="#" class="hover:underline">Ads info</a>
                <a href="#" class="hover:underline flex items-center ">More
                    <x-icons.dots class="ml-1 h-4 fill-gray-500" />
                </a>
                <span>© 2023 X Corp.</span>
            </div>
        </div>
        {{-- END RIGHT SIDE --}}

    </div>
    @livewireScripts()
</body>

</html>
