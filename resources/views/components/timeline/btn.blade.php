@props(['icon', 'color' => 'twitter'])

<div
    {{ $attributes->class([
        'hover:bg-twitter',
        'flex justify-center items-center p-2 rounded-full hover:bg-opacity-30 cursor-pointer',
    ]) }}>
    <x-dynamic-component :component="'icons.' . $icon" :color="$color" />
</div>
