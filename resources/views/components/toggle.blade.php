@props(['checked' => false])

<div x-data="{id: $id('toggle'), checked: @js($checked)}">
    <button
        type="button"
        class="group relative w-12 px-1 py-1 inline-flex rounded-full transition cursor-pointer
        focus:outline-none focus:ring-2 focus:ring-main-500"
        x-bind:class="checked ? 'bg-main-600' : 'bg-gray-200'"
        x-on:click="checked = !checked"
    >

    <span class="w-5 h-5 rounded-full transition bg-white"
          x-bind:class="checked ? 'translate-x-5' : 'translate-x-0'"
          aria-hidden="true"></span>
    </button>

    <input type="checkbox" class="hidden" x-model="checked" x-bind:id="id">
</div>
