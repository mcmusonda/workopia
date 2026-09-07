@props([
    'id', 
    'name', 
    'required' => false, 
    'label' => null,
    ])

<div class="mb-4">
    @if($label)
        <label class="block text-gray-700" for="{{ $id }}">{{ $label }}</label>
    @endif
    <input
        {{ $required ? 'required' : '' }}
        type="file"
        id="{{ $id }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        class="w-fill px-4 py-2 rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
        @error('name') border-red-500 @enderror" />
    @error($name)
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>