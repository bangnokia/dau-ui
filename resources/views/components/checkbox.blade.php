@props(['label' => null])

<div {{ $attributes->class('inline-flex items-center') }}
     @if ($label) x-data x-id="['checkbox']" @endif>
    <input type="checkbox"
           x-bind:id="$id('checkbox')"
        {{ $attributes->class('focus:ring-main-500 h-4 w-4 text-main-600 border-gray-300 rounded') }} />
    @if ($label)
        <label class="ml-2 text-sm text-gray-600" x-bind:for="$id('checkbox')">{{ $label }}</label>
    @endif
</div>
