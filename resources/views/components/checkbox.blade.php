<label class="inline-flex items-center gap-2">
    <input
        type="checkbox"
        name="{{ $attributes->get('name') }}"
        value="1"
        {{ old($attributes->get('name')) ? 'checked' : '' }}
        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">

    <span class="text-sm text-gray-700">
        {{ $slot }}
    </span>
</label>
