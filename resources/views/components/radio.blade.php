@props(['label' => null, 'checked' => false])

<div class="inline-flex items-center"
     @if ($label) x-data x-id="['radio']" @endif>
    <input type="radio"
           x-bind:id="$id('radio')"
           @if ($checked) checked @endif
        {{ $attributes->class('focus:ring-main-500 h-4 w-4 text-main-600 border-gray-300') }} />
    @if ($label)
        <label class="ml-2 text-sm text-gray-600" x-bind:for="$id('radio')">{{ $label }}</label>
    @endif
</div>

