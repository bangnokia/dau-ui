@aware(['error'])

@props(['readonly' => false])
<textarea
    x-bind:id="$id('input')"
    {{ $attributes->class([
        'focus:ring-main-500 focus:border-main-500 block w-full shadow-sm sm:text-sm rounded-md',
        'border-rose-500' => $error,
        'border-gray-300' => !$error
    ])->merge(['rows' => 3]) }}
    @if ($readonly) readonly @endif
>{{ $slot }}</textarea>
