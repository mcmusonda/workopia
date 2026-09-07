@props([
    'id',
    'name',
    'label' => null,
    'value' => '',
    'placeholder' => '',
    'rows' => '7',
    'cols' => '60'
])

<div class="mb-4">
    @if($label)
        <label class="block text-gray-700" for="{{ $id }}">{{ $label }}</label>
    @endif
    <textarea name="{{ $name }}" id="{{ $id }}" cols="{{ $cols }}" rows="$rows" class="w-fill px-4 py-2 border rounded focus:outline-none @error($name) border-red-500 @enderror" placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>

    @error($name) 
        <p class="border-red-500  text-sm mt-1">{{ $message }}</p>
    @enderror
</div>