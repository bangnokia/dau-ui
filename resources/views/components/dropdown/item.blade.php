<button x-on:click="open = false"
        type="button"
    {{ $attributes->class('px-3 py-2 block w-full rounded text-left hover:bg-main-500 hover:text-white') }}>
    {{ $slot }}
</button>
