@props(['align' => 'left'])

<div x-data="{
        open: false,
        idx: -1,
        itemsCount: 0,
        items: null,
        init() {
            this.items = this.$el.querySelectorAll('.daui-dropdown-item');
            this.itemsCount = this.items.length;
            $watch('idx', value => $root.querySelectorAll('.daui-dropdown-item')[value].focus());
        },
        next() {
            if (this.idx < this.itemsCount - 1) this.idx += 1;
        },
        prev() {
            if (this.idx > 0) this.idx -= 1;
        },
        selectItem() {
            this.open = false;
            this.items[this.idx].click();
        },
    }"
     class="inline-block"
     x-on:click.outside="open = false"
     x-on:keyup.down="next"
     x-on:keyup.up="prev"
     x-on:keyup.enter="selectItem"
>
    <div @class([ 'relative', 'text-left' => $align === 'left', 'text-right' => $align === 'right', ])>
        <x-d::button x-on:click="open = !open">
            Menu
            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
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
        <ul
            @class([
               "absolute top-1 p-1 w-56 text-sm border border-gray-300 rounded-md z-40 bg-white",
               'right-0' => $align === 'right',
               'left-0' => $align === 'left',
           ])
        >
            @foreach(range(1,5) as $item)
                <x-d::dropdown.item>Item {{ $item }}</x-d::dropdown.item>
            @endforeach
        </ul>
    </div>

</div>

