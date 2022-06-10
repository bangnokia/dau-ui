@props(['name', 'options'])
<div {{ $attributes }}>
    @foreach($options as $value => $label)
        <x-d::radio :label="$label" value="{{ $value }}" name="{{ $name }}" />
    @endforeach
</div>
