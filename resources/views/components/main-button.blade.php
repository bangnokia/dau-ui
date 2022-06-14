@props(['type' => 'button'])
<button type="{{ $type }}" {{  $attributes->class('
        px-4 py-2 inline-flex items-center bg-main-500 rounded text-sm text-white
        border border-main-500 hover:bg-main-600
        focus:outline-none focus:ring-2 focus:ring-main-500
        disabled:bg-opacity-50 disabled:cursor-not-allowed
        ') }}
>
    {{ $slot }}
</button>

