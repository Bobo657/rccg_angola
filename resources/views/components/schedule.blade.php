@props(['dark' => false])
@php
    $line = $dark ? 'divide-white/15 border-white/15' : 'divide-line border-line';
    $soft = $dark ? 'text-brand-300' : 'text-muted';
    $time = $dark ? 'text-brand-100' : 'text-brand-700';
@endphp
<ul class="divide-y border-y {{ $line }}">
    @foreach(config('church.programs') as $i => $p)
        <li class="grid gap-1 py-5 sm:grid-cols-12 sm:items-baseline sm:gap-4" data-reveal style="--i:{{ $i % 4 }}">
            <p class="text-sm sm:col-span-3 {{ $soft }}">{{ $p['when'] }}</p>
            <p class="font-display text-xl font-semibold sm:col-span-6 {{ ($p['main'] ?? false) ? 'sm:text-2xl' : '' }}">{{ $p['name'] }}</p>
            <p class="font-display text-xl tabular-nums sm:col-span-3 sm:text-right {{ $time }}">{{ $p['time'] }}</p>
        </li>
    @endforeach
</ul>
