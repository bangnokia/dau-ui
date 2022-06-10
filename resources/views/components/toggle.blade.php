@props(['checked' => false])
<label
    type="button"
    class="relative w-12 px-1 py-1 inline-flex rounded-full transition"
    x-data="{checked: @js($checked)}"
    x-bind:class="checked ? 'bg-main-600' : 'bg-gray-200'"
>
    <input type="checkbox" class="hidden peer" x-model="checked">
    <span
        class="w-5 h-5 rounded-full transition bg-white translate-x-0 peer-checked:translate-x-5"
        aria-hidden="true"></span>
</label>
