@props(['type' => 'button'])
<button type="{{ $type }}" {{
    $attributes->class('rounded px-4 py-2 text-sm border border-gray-300 rounded hover:bg-gray-100')
}}>
    {{ $slot }}
</button>
