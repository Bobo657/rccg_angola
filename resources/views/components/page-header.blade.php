@props(['title', 'intro' => null, 'image' => null, 'imageAlt' => '', 'pos' => 'object-[50%_12%]'])
<header class="relative isolate overflow-hidden bg-brand-900 text-white on-dark">
    @if($image)
        <img src="/img/{{ $image }}.webp" alt="{{ $imageAlt }}" class="absolute inset-0 -z-20 h-full w-full object-cover {{ $pos }} opacity-45" fetchpriority="high">
    @endif
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-brand-950 via-brand-900/70 to-brand-900/40"></div>
    <div class="mx-auto max-w-7xl px-4 pb-14 pt-16 sm:px-6 md:pb-20 md:pt-24 lg:px-8">
        <h1 class="max-w-3xl text-4xl font-bold sm:text-5xl md:text-6xl" data-reveal>{{ $title }}</h1>
        @if($intro)
            <p class="mt-5 max-w-2xl text-lg text-brand-100" data-reveal style="--i:1">{{ $intro }}</p>
        @endif
    </div>
</header>
