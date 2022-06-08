@aware(['error'])

@props(['readonly' => false])

<input
    x-bind:id="$id('input')"
    {{ $attributes->class([
        'border border-gray-300 px-3 py-2 outline outline-1 outline-transparent focus:outline-main-500 focus:border-main-500 block w-full shadow-sm sm:text-sm rounded-md',
        'border-rose-500' => $error,
        'border-gray-300' => !$error
    ]) }}
    type="file"
    @if ($readonly) readonly @endif
>
