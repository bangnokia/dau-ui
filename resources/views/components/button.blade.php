@props(['type' => 'button'])
<button type="{{ $type }}" {{ $attributes->class('rounded px-4 py-2 text-sm
border border-gray-300 rounded hover:bg-gray-100
 focus:outline-none focus:ring-2 focus:ring-main-500
 disabled:bg-gray-200 disabled:text-gray-300 disabled:bg-opacity-50 disabled:cursor-not-allowed
 ')
}}>
    {{ $slot }}
</button>
