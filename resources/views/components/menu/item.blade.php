@props([
    'route',
    'title' => null,
    'icon'
])

<div class=" hover:bg-slate-800 rounded-full p-2 mr-auto flex items-center">
    <a href="{{$route}}" class="flex">
        <x-dynamic-component :component="'icons.'. $icon"/>
        @if ($title)
            <div class="pl-4 pr-4">
                {{$title}}
            </div>
        @endif
    </a>
</div>
