@props(['icon'])

<div class="flex justify-center items-center p-2 rounded-full hover:bg-twitter hover:bg-opacity-30">
    <x-dynamic-component :component="'icons.' . $icon" />
</div>
