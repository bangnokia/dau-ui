<li x-on:click="open = false"
    x-on:mouseover="idx = Array.prototype.indexOf.call($root.querySelectorAll('.daui-dropdown-item'), $el)"
    tabindex="-1"
    {{ $attributes->class('
    daui-dropdown-item px-3 py-2 block w-full rounded text-left
    hover:bg-main-500 hover:text-white
    focus:outline-none focus:bg-main-500 focus:text-white
    ') }}
>
    <a href="">
        {{ $slot }}
    </a>
</li>
