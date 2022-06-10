@props(['name', 'options' => [], 'selected' => null])

<div {{ $attributes }}>
    @foreach($options as $value => $label)
        <x-d::radio :label="$label"
                    value="{{ $value }}"
                    name="{{ $name }}"
                    :checked="$selected === $value"
        />
    @endforeach
</div>
