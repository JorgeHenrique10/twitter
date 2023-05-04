@props(['name', 'verified' => false, 'verifiedOrg'])

<div class="pl-4 pt-2 pb-2 border-b-2 border-lines">

    <section class="flex flex-row space-x-4 items-start">
        <div class=" min-w-[48px] max-w-[48px]">
            <img class="rounded-full hover:opacity-80 cursor-pointer"
                src="https://pbs.twimg.com/profile_images/1562631561690107905/tOkWnifg_400x400.jpg" alt="teste">
        </div>
        <div class="flex flex-col">
            <div class="flex space-x-4 items-end">
                <div class="font-bold text-lg">
                    <span class="flex items-center space-x-2">
                        <span> {{ $name }} </span>
                        @if ($verified)
                            <x-icons.verified />
                        @endif

                        @if ($verifiedOrg)
                            <x-icons.verifiedOrg />
                        @endif
                    </span>
                </div>
                <div class="text-base text-[#71767b] tracking-tight">
                    <span>@NetflixBrasil · 4h</span>
                </div>
            </div>
            <div class="text-white text-base pb-2">
                <span>{{ $slot }}</span>
            </div>
            <div class="flex space-x-8">

                <x-timeline.btn icon="media" />
                <x-timeline.btn icon="media" />
                <x-timeline.btn icon="media" />
                <x-timeline.btn icon="media" />
                <x-timeline.btn icon="media" />
                <x-timeline.btn icon="media" />

            </div>
        </div>
    </section>

</div>
