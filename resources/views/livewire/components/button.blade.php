@php
    $variant = $variant ?? 'primary';
    $size = $size ?? 'md';
    $href = $href ?? '#';
    $label = $label ?? $text ?? '';
    $class = $class ?? '';
    
    $baseClass = 'inline-block font-semibold rounded-full transition duration-300 ease-in-out shadow-lg';
    $colorClass = match ($variant) {
        'primary' => 'bg-green-700 hover:bg-green-800 text-white',
        'secondary' => 'bg-white hover:bg-gray-200 text-green-700',
        'danger' => 'bg-red-600 hover:bg-red-500 text-white',
        default => 'bg-gray-300 hover:bg-gray-200 text-gray-800',
    };
    $sizeClass = match ($size) {
        'sm' => 'px-3 py-1 text-sm',
        'md' => 'px-4 py-2 text-base',
        'lg' => 'px-5 py-3 text-lg',
        default => 'px-4 py-2 text-base',
    };
@endphp

<a href="{{ $href }}" class="{{ $baseClass }} {{ $colorClass }} {{ $sizeClass }} {{ $class }}">
    {{ $label }}</a>
