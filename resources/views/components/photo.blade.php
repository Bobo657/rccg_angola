@props(['name', 'alt', 'eager' => false, 'sizes' => '100vw', 'fit' => 'object-cover', 'pos' => 'object-center'])
@php
    $file = public_path("img/{$name}.webp");
    [$w, $h] = is_file($file) ? array_slice(getimagesize($file), 0, 2) : [1200, 800];
@endphp
<div {{ $attributes->class(['photo overflow-hidden bg-brand-100']) }}>
    <img src="/img/{{ $name }}.webp" alt="{{ $alt }}" width="{{ $w }}" height="{{ $h }}"
         sizes="{{ $sizes }}" @if(! $eager) loading="lazy" decoding="async" @else fetchpriority="high" @endif
         class="h-full w-full {{ $fit }} {{ $pos }}">
</div>
