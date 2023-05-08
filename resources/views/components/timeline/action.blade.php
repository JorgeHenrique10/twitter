@props(['icon', 'color' => 'blue', 'counter' => null])
<div class="group text-sm center">

    <div
        {{ $attributes->class([
            'flex justify-center  p-2 rounded-full group-hover:bg-opacity-30 cursor-pointer  space-x-1',
            'group-hover:bg-twitter' => $color == 'twitter',
            'group-hover:bg-gray-600' => $color == 'gray',
            'group-hover:bg-blue-600' => $color == 'blue',
            'group-hover:bg-green-600' => $color == 'green',
            'group-hover:bg-pink-600' => $color == 'pink',
        ]) }}>
        <x-dynamic-component :component="'icons.' . $icon"
            {{ $attributes->class([
                'w-5',
                'fill-gray-500 group-hover:fill-blue-400' => $color == 'blue',
                'fill-gray-500 group-hover:fill-green-400' => $color == 'green',
                'fill-gray-500 group-hover:fill-pink-400' => $color == 'pink',
            ]) }}>
        </x-dynamic-component>

        @if ($counter)
            <div
                {{ $attributes->class([
                    'text-gray-500 mb-px',
                    'group-hover:text-twitter' => $color == 'twitter',
                    'group-hover:text-gray-400' => $color == 'gray',
                    'group-hover:text-blue-400' => $color == 'blue',
                    'group-hover:text-green-400' => $color == 'green',
                    'group-hover:text-pink-400' => $color == 'pink',
                ]) }}>
                {{ $counter }}
            </div>
        @endif

    </div>
</div>
