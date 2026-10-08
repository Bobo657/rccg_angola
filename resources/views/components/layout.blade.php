@props([
    'title' => null,
    'description' => null,
    'keywords' => null,
    'image' => 'og.jpg',
    'noindex' => false,
    'overlay' => false,
])
@php
    $church = config('church');
    $siteName = $church['name'];
    $pageTitle = $title ? $title.' | '.$siteName.' – '.$church['tagline'] : $siteName.' – '.$church['full_name'].', Luanda, Angola';
    $metaDescription = $description ?: $church['description'];
    $metaKeywords = $keywords ?: $church['keywords'];
    $canonical = url()->current();
    $ogImage = url('/img/'.ltrim($image, '/'));

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Church',
        'name' => 'RCCG Resurrection Ground Parish',
        'alternateName' => [$siteName, $church['full_name']],
        'url' => url('/'),
        'logo' => url('/img/logo.png'),
        'image' => url('/img/og.jpg'),
        'description' => $church['description'],
        'telephone' => config('app.phone'),
        'email' => config('app.email'),
        'foundingDate' => '2013-10-06',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Avenida Deolinda Rodrigues, Distrito Urbano Rangel',
            'addressLocality' => 'Luanda',
            'addressCountry' => 'AO',
        ],
        'parentOrganization' => ['@type' => 'Organization', 'name' => 'The Redeemed Christian Church of God'],
        'openingHoursSpecification' => [
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Sunday', 'opens' => '08:00', 'closes' => '11:30'],
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Tuesday', 'opens' => '18:00', 'closes' => '19:30'],
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Thursday', 'opens' => '18:00', 'closes' => '19:30'],
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <meta name="author" content="{{ $church['full_name'] }}">
    <meta name="robots" content="{{ $noindex ? 'noindex, nofollow' : 'index, follow, max-image-preview:large' }}">
    <meta name="theme-color" content="#28166f">
    <link rel="canonical" href="{{ $canonical }}">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="{{ url('/sitemap.xml') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <link rel="icon" href="/images/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">

    <link rel="preload" href="/fonts/site/youngserif.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/site/figtree.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/site.css') }}?v={{ @filemtime(public_path('css/site.css')) }}">
    <script>document.documentElement.classList.add('js')</script>

    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>
<body class="min-h-[100dvh] pb-[4.75rem] antialiased lg:pb-0">
<!--
THESIS: A parish doorstep, not a brochure. The first screen answers where, when and who, in the seal's own indigo, and the rest of the site is the people behind it. Refuses the stock church template (slider, centered hero, three icon cards).
OWN-WORLD: Seal indigo #28166F as large committed fields (hero, schedule, vision, footer) on an indigo-tinted off-white; Young Serif display (warm, sturdy, unhurried) with Figtree text; hairline rules; photographs of real parish life; no gradients on type, no cream.
STORY: A first-time visitor in Luanda learns who RCCG Resurrection Ground Parish is, sees the real weekly schedule and address, meets a pastor, and taps to call or get directions.
FIRST VIEWPORT: Full-bleed choir photograph under an indigo scrim, nav floating over it. Left-aligned headline, Sunday time line, Plan your visit + Call buttons. A glass strip anchors the bottom: the next gathering (live from the schedule), address with directions, phone.
FORM: Brief-pinned (modern church site in the Santi/Deeds pattern family; existing content only). No concept seed used.
FINISH: unreviewed and undocumented is unfinished; this build ends with the finish review, the verdict, DESIGN.md, and every shipping raster carrying its provenance
-->
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[60] focus:rounded-full focus:bg-white focus:px-5 focus:py-3 focus:font-semibold focus:text-brand-900">Skip to content</a>

@php
    $link = 'nav-link rounded-full px-3.5 py-2 text-[0.95rem] font-medium xl:px-4';
    $telHref = 'tel:'.preg_replace('/\s+/', '', config('app.phone'));
@endphp
<header id="site-header" class="site-header {{ $overlay ? 'z-50' : 'sticky top-0 z-50' }}" data-overlay="{{ $overlay ? 'true' : 'false' }}" data-solid="{{ $overlay ? 'false' : 'true' }}">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-4 px-4 sm:px-6 md:h-20 lg:px-8">
        <a href="{{ route('home') }}" class="nav-brand flex items-center gap-3" aria-label="{{ $siteName }} home">
            <span class="rounded-full bg-white p-0.5"><img src="/img/logo.png" alt="" width="250" height="251" class="h-9 w-9 md:h-11 md:w-11"></span>
            <span class="leading-tight">
                <span class="block font-display text-lg">RCCG Angola</span>
                <small class="hidden text-xs sm:block">Resurrection Ground Parish</small>
            </span>
        </a>

        <nav class="hidden items-center gap-1 lg:flex" aria-label="Main">
            <a href="{{ route('home') }}" class="{{ $link }}" @if(request()->routeIs('home')) aria-current="page" @endif>Home</a>
            <a href="{{ route('about') }}" class="{{ $link }}" @if(request()->routeIs('about')) aria-current="page" @endif>About</a>
            <a href="{{ route('our_beliefs') }}" class="{{ $link }}" @if(request()->routeIs('our_beliefs')) aria-current="page" @endif>Beliefs</a>
            <a href="{{ route('our_history') }}" class="{{ $link }}" @if(request()->routeIs('our_history')) aria-current="page" @endif>History</a>
            <a href="{{ route('gallery') }}" class="{{ $link }}" @if(request()->routeIs('gallery')) aria-current="page" @endif>Gallery</a>
            <a href="{{ route('contact') }}" class="{{ $link }}" @if(request()->routeIs('contact')) aria-current="page" @endif>Contact</a>
            <x-button :href="route('visit')" class="nav-cta ml-3 !min-h-11 !py-2">Plan your visit</x-button>
        </nav>

        <button type="button" id="menu-toggle" class="nav-toggle inline-flex h-11 w-11 items-center justify-center rounded-full lg:hidden" aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu">
            <x-icon name="menu" :size="22" data-icon="open" />
            <x-icon name="x" :size="22" data-icon="close" class="hidden" />
        </button>
    </div>

    <div id="mobile-menu" class="grid grid-rows-[0fr] bg-paper text-ink transition-[grid-template-rows] duration-500 ease-out-expo lg:hidden">
        <div class="overflow-hidden">
            <nav class="mx-auto max-w-7xl px-4 pb-6 pt-2 sm:px-6" aria-label="Mobile">
                <ul class="divide-y divide-line">
                    @foreach($church['pages'] as $p)
                        <li>
                            <a href="{{ route($p['route']) }}" class="flex min-h-12 items-center justify-between py-3 text-lg font-medium {{ request()->routeIs($p['route']) ? 'text-brand-700' : 'text-ink' }}" @if(request()->routeIs($p['route'])) aria-current="page" @endif>
                                {{ $p['label'] }} <x-icon name="arrow-right" :size="18" class="text-brand-400" />
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>

<main id="main">
    {{ $slot }}
</main>

<footer class="on-dark bg-brand-950 text-brand-100">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 md:grid-cols-12 lg:px-8 lg:py-20">
        <div class="md:col-span-5">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-4" aria-label="{{ $siteName }} home">
                <span class="rounded-full bg-white p-1.5"><img src="/img/logo.png" alt="" width="250" height="251" class="h-14 w-14" loading="lazy"></span>
                <span class="font-display text-2xl font-bold text-white">RCCG Angola</span>
            </a>
            <p class="mt-6 max-w-md text-brand-200">{{ $church['full_name'] }}. Founded {{ $church['founded'] }} and pioneered by {{ $church['coordinator']['name'] }}, Country Coordinator of RCCG Angola.</p>
            <p class="mt-6 max-w-md font-display text-xl font-semibold text-white">Love. Unity. Peace.</p>
        </div>

        <div class="md:col-span-3">
            <h2 class="font-sans text-sm font-semibold uppercase tracking-wider text-brand-300">Visit us</h2>
            <address class="mt-5 space-y-4 not-italic">
                <p class="flex gap-3"><x-icon name="map-pin" class="mt-1 shrink-0 text-brand-300" /><span>{{ config('app.address') }}</span></p>
                <p><a class="flex gap-3 hover:text-white" href="tel:{{ preg_replace('/\s+/', '', config('app.phone')) }}"><x-icon name="phone" class="mt-1 shrink-0 text-brand-300" />{{ config('app.phone') }}</a></p>
                <p><a class="flex gap-3 break-all hover:text-white" href="mailto:{{ config('app.email') }}"><x-icon name="mail" class="mt-1 shrink-0 text-brand-300" />{{ config('app.email') }}</a></p>
            </address>
            <p class="mt-6 text-sm text-brand-200"><span class="font-semibold text-white">Sundays</span> Main service 9:05 – 11:30</p>
        </div>

        <nav class="md:col-span-4" aria-label="Footer">
            <h2 class="font-sans text-sm font-semibold uppercase tracking-wider text-brand-300">Explore</h2>
            <ul class="mt-5 grid grid-cols-2 gap-x-6 gap-y-3">
                @foreach($church['pages'] as $p)
                    <li><a href="{{ route($p['route']) }}" class="inline-flex min-h-8 items-center hover:text-white hover:underline hover:underline-offset-4">{{ $p['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="border-t border-white/10">
        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-6 text-sm text-brand-300 sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
            <p>&copy; {{ date('Y') }} {{ $church['full_name'] }}. All rights reserved.</p>
            <p>Part of The Redeemed Christian Church of God</p>
        </div>
    </div>
</footer>

<div class="fixed inset-x-0 bottom-0 z-40 border-t border-line bg-paper/95 pb-[env(safe-area-inset-bottom)] backdrop-blur lg:hidden" role="region" aria-label="Quick actions">
    <div class="mx-auto grid max-w-md grid-cols-2 gap-2 p-3">
        <x-button :href="$telHref" icon="phone" class="!min-h-12">Call us</x-button>
        <x-button :href="$church['maps_url']" variant="outline" icon="navigation" :external="true" class="!min-h-12 text-brand-800">Directions</x-button>
    </div>
</div>

<script src="/js/site.js" defer></script>
</body>
</html>
