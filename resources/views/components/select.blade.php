@props([
    'options' => [],
    'selected' => null,
    'placeholder' => null,
])

<select x-bind:id="$id('input')"
    {{ $attributes->class('mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm
focus:outline-none focus:ring-main-500 focus:border-main-500 sm:text-sm') }}>
    >
    @if ($placeholder)
        <option disabled selected>{{ $placeholder }}</option>
    @endif
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" @if($value === $selected) selected @endif>{{ $label }}</option>
    @endforeach
</select>
