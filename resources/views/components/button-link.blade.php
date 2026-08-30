@props([
    'url' => '/',
    'active' => true,
    'icon' => null,
    'bgColor' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'block' => false,
])

<a href="{{ $url }}"
    class="{{ $bgColor }} {{ $hoverClass }} {{ $textClass }} px-4 py-2 rounded hover:shadow-md transition duration-300 flex items-center space-x-2 {{ $block ? 'block' : ''}}">
    @if($icon) 
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    <span>{{ $slot }}</span>
</a>