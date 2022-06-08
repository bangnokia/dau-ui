@aware(['error'])

@props(['readonly' => false])
<label
    tabindex="0"
    x-bind:for="$id('input')"
    {{ $attributes->class([
        'mt-1 border border-gray-300 px-2 py-1.5 outline outline-1 outline-transparent focus:outline-main-500 focus:border-main-500 block w-full shadow-sm sm:text-sm rounded-md',
        'border-rose-500' => $error,
        'border-gray-300' => !$error
    ]) }}>
    <input
        x-bind:id="$id('input')"
        class="w-full focus:outline-none"
        type="file"
        tabindex="-1"
        @if ($readonly) readonly @endif
    >
</label>
