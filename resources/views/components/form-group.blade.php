@props(['label', 'error' => null])
<div {{ $attributes }} x-data x-id="['input']">
    <label x-bind:for="$id('input')" for="first-name" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    {{ $slot }}

    @if ($error)
        <div class="mt-1 text-rose-500 text-sm">{{ $error }}</div>
    @endif
</div>
