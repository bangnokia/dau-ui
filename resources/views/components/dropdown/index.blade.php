@props(['align' => 'left'])

<div x-data="{open: false}" class="inline-block" x-on:click.outside="open = false">
    <div @class([
    'relative',
    'text-left' => $align === 'left',
    'text-right' => $align === 'right',
])>
        <x-d::button x-on:click="open = !open">
            Options <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </x-d::button>
    </div>
    <div class="relative h-0" style="display: none" x-show="open"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-90"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-90"
    >
        <div
             @class([
                "absolute top-1 p-1 w-56 text-sm border border-gray-300 rounded-md z-40 bg-white",
                'right-0' => $align === 'right',
                'left-0' => $align === 'left',
            ])
        >
            @foreach(range(1,5) as $item)
               <x-d::dropdown.item>Item {{ $item }}</x-d::dropdown.item>
            @endforeach
        </div>
    </div>

</div>

