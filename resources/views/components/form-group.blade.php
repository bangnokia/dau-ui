@props(['label', 'error' => null])

<div {{ $attributes }}
     @if ($label) x-data x-id="['input']" @endif
>
    @if ($label)
        <label x-bind:for="$id('input')"
               class="mb-1.5 block text-sm font-medium text-gray-700">{{ $label }}</label>
    @endif
    {{ $slot }}
    @if ($error)
        <div class="mt-1 text-rose-500 text-sm">{{ $error }}</div>
    @endif
</div>
