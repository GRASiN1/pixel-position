@props(['class' => ''])

@php
    $baseClasses = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-400';
    $classes = "$baseClasses $class";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>