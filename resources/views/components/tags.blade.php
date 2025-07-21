@props([
    'tag',
    'size' => 'base'
])

@php
    $class = "bg-white/10 rounded-xl hover:bg-white/25 transition-colors duration-300 mx-1";
    
    if ($size == 'base') {
        $class .= " px-5 py-2 text-sm";
    }
    elseif ($size == 'small') {
        $class .= " px-3 py-1 text-2xs";
    }
@endphp

<a href="{{ url('/tags/' . urlencode(trim($tag->name))) }}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $tag->name }}
</a>
