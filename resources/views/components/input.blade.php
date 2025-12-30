@props([
    'label' => '',
    'type' => 'text',
    'name',
    'placeholder' => '',
])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block mb-1 text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge([
            'class' =>
                'w-full rounded-lg border px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500
                ' . ($errors->has($name)
                    ? 'border-red-500 focus:ring-red-500'
                    : 'border-gray-300')
        ]) }}
    >

    @error($name)
        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>
