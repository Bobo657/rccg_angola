@php
    $church = config('church');
    $tel = 'tel:'.preg_replace('/\s+/', '', config('app.phone'));
    $next = \App\Support\NextGathering::find();
@endphp
<x-layout
    :overlay="true"
    description="Welcome to RCCG Resurrection Ground Parish in Luanda, Angola. Join us on Sundays from 9:05, find our address, meet our pastors and get in touch."
>
    {{-- Hero --}}
    <section class="on-dark relative isolate flex min-h-[100dvh] flex-col overflow-hidden bg-brand-950 text-white" aria-labelledby="hero-title">
        <img src="/img/choir.webp" alt="The Resurrection Ground Parish youth choir in white, singing together during Youth Weekend" width="1600" height="1200"
             class="hero-bg absolute inset-0 -z-20 h-full w-full object-cover object-[50%_28%]" fetchpriority="high">
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(95deg,rgba(18,11,52,0.94)_0%,rgba(28,16,82,0.78)_42%,rgba(28,16,82,0.28)_100%)] max-md:bg-[linear-gradient(180deg,rgba(18,11,52,0.8)_0%,rgba(18,11,52,0.72)_55%,rgba(18,11,52,0.9)_100%)]"></div>
        <div class="absolute inset-x-0 bottom-0 -z-10 h-2/5 bg-gradient-to-t from-brand-950/90 to-transparent"></div>
        <div class="absolute inset-x-0 top-0 -z-10 h-1/3 bg-gradient-to-b from-brand-950/80 to-transparent"></div>

        <div class="mx-auto flex w-full max-w-7xl flex-1 flex-col justify-end px-4 pb-8 pt-28 sm:px-6 md:pb-12 lg:px-8">
            <div class="max-w-2xl">
                <h1 id="hero-title" class="text-[2.5rem] sm:text-5xl lg:text-[4.1rem]" data-reveal>
                    You are welcome at Resurrection Ground Parish
                </h1>
                <p class="mt-5 max-w-xl text-lg text-white/85" data-reveal style="--i:1">
                    The Redeemed Christian Church of God in Luanda, Angola. It is a great privilege to have you visiting, and we hope to have you as part of our wonderful family.
                </p>
                <p class="mt-4 flex items-center gap-2 font-medium text-white" data-reveal style="--i:2">
                    <x-icon name="clock" :size="18" class="text-brand-300" />
                    <span>Sundays 9:05 – 11:30, Rangel, Luanda</span>
                </p>
                <div class="mt-8 flex flex-wrap gap-3" data-reveal style="--i:3">
                    <x-button :href="route('visit')" variant="light">Plan your visit</x-button>
                    <x-button :href="$tel" variant="outline" icon="phone" class="hidden text-white lg:inline-flex">Call us</x-button>
                </div>
            </div>

            {{-- Where and when, always in the first screen --}}
            <div class="glass mt-10 grid overflow-hidden rounded-2xl md:mt-14 md:grid-cols-[1.25fr_1.35fr_1fr] md:divide-x md:divide-white/15 max-md:divide-y max-md:divide-white/15" data-reveal style="--i:4">
                <div class="flex gap-4 p-5 sm:p-7">
                    <span class="mt-2 shrink-0"><span class="dot-live" @if($next && $next['live']) data-live="true" @endif></span></span>
                    <div>
                        <h2 class="font-sans text-sm font-semibold text-brand-200">{{ $next && $next['live'] ? 'Happening now' : 'Next gathering' }}</h2>
                        @if($next)
                            <p class="mt-1 font-display text-3xl sm:text-4xl">{{ $next['live'] ? $next['time'] : $next['label'] }}</p>
                            <p class="mt-1 text-sm text-white/80">{{ $next['name'] }} &middot; <a href="#week" class="font-semibold underline underline-offset-4 hover:text-white">All programs</a></p>
                        @else
                            <p class="mt-1 font-display text-3xl">Sundays 9:05</p>
                        @endif
                    </div>
                </div>
                <div class="flex gap-4 p-5 sm:p-7">
                    <x-icon name="map-pin" :size="24" class="mt-1 shrink-0 text-brand-300" />
                    <div>
                        <h2 class="font-sans text-sm font-semibold text-brand-200">Find us</h2>
                        <p class="mt-1 text-lg font-medium leading-snug">{{ config('app.address') }}</p>
                        <a href="{{ $church['maps_url'] }}" target="_blank" rel="noopener" class="mt-2 inline-flex min-h-8 items-center gap-1.5 text-sm font-semibold underline underline-offset-4 hover:text-brand-200">Get directions <x-icon name="arrow-up-right" :size="16" /></a>
                    </div>
                </div>
                <div class="flex gap-4 p-5 sm:p-7">
                    <x-icon name="phone" :size="24" class="mt-1 shrink-0 text-brand-300" />
                    <div>
                        <h2 class="font-sans text-sm font-semibold text-brand-200">Talk to someone</h2>
                        <a href="{{ $tel }}" class="mt-1 block font-display text-2xl hover:text-brand-200">{{ config('app.phone') }}</a>
                        <p class="mt-1 text-sm text-white/80">Whatever the challenge is.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Who we are --}}
    <section class="mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
        <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-7" data-reveal>
                <x-photo name="sanctuary" sizes="(min-width:1024px) 700px, 100vw"
                         alt="The sanctuary at Resurrection Ground Parish with rows of chairs, blue curtains and the RCCG emblem"
                         class="aspect-[4/3] rounded-2xl" />
            </div>
            <div class="lg:col-span-5">
                <h2 class="text-4xl font-bold text-brand-900 sm:text-5xl" data-reveal>A parish of the Redeemed Christian Church of God</h2>
                <div class="reading mt-6 text-muted" data-reveal style="--i:1">
                    <p>RCCG Resurrection Ground Parish was founded on the 6th of October, 2013 and was pioneered by {{ $church['coordinator']['name'] }}, who is also the Country Coordinator of The Redeemed Christian Church of God Angola.</p>
                    <p>It is an arm of the big body of The Redeemed Christian Church of God.</p>
                </div>
                <div class="mt-8 flex flex-wrap gap-x-8 gap-y-3 text-[0.95rem] font-semibold" data-reveal style="--i:2">
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-brand-800 underline-offset-4 hover:underline">More about us <x-icon name="arrow-right" :size="18" /></a>
                    <a href="{{ route('our_beliefs') }}" class="inline-flex items-center gap-2 text-brand-800 underline-offset-4 hover:underline">What we believe <x-icon name="arrow-right" :size="18" /></a>
                </div>
            </div>
        </div>
    </section>

    {{-- The week --}}
    <section id="week" class="on-dark bg-brand-800 text-white" aria-labelledby="week-title">
        <div class="mx-auto grid max-w-7xl gap-12 px-4 py-20 sm:px-6 lg:grid-cols-12 lg:gap-16 lg:px-8 lg:py-28">
            <div class="lg:col-span-5">
                <h2 id="week-title" class="text-4xl font-bold sm:text-5xl" data-reveal>Our week at the parish</h2>
                <p class="mt-5 max-w-md text-lg text-brand-200" data-reveal style="--i:1">Come on Sunday, or join us during the week. Everyone is welcome at every program.</p>
                <div class="mt-8" data-reveal style="--i:2">
                    <x-button :href="route('visit')" variant="light">How to find us</x-button>
                </div>
            </div>
            <div class="lg:col-span-7">
                <x-schedule dark />
            </div>
        </div>
    </section>

    {{-- Mission --}}
    <section class="mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-6">
                <h2 class="text-4xl font-bold text-brand-900 sm:text-5xl lg:text-6xl" data-reveal>
                    Our primary mission is to make heaven, and to take as many people as possible too.
                </h2>
                <p class="reading mt-8 text-muted" data-reveal style="--i:1">{{ $church['core_objective'] }}</p>
            </div>
            <div class="lg:col-span-6 lg:pt-4">
                <h3 class="text-2xl font-bold text-brand-900" data-reveal>Mission and vision of RCCG</h3>
                <ol class="mt-6 divide-y divide-line border-y border-line">
                    @foreach($church['vision'] as $i => $v)
                        <li class="grid grid-cols-[2.25rem_1fr] gap-3 py-4" data-reveal style="--i:{{ $i % 3 }}">
                            <span class="font-display text-lg font-bold text-brand-500">{{ $i + 1 }}</span>
                            <span class="text-ink/90">{{ $v }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    {{-- Parish life --}}
    <section class="bg-brand-50 py-24 lg:py-32" aria-labelledby="life-title">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-end justify-between gap-6">
                <h2 id="life-title" class="max-w-2xl text-4xl font-bold text-brand-900 sm:text-5xl" data-reveal>Parish life, as it happens</h2>
                <a href="{{ route('gallery') }}" class="inline-flex items-center gap-2 font-semibold text-brand-800 underline-offset-4 hover:underline" data-reveal>See the gallery <x-icon name="arrow-right" :size="18" /></a>
            </div>

            <div class="mt-12 grid gap-x-6 gap-y-10 md:grid-cols-12">
                <figure class="md:col-span-7" data-reveal>
                    <x-photo name="mens-group" sizes="(min-width:768px) 700px, 100vw" alt="Men of Resurrection Ground Parish in matching grey suits, posing together outside the church" class="aspect-[16/10] rounded-xl" />
                    <figcaption class="mt-3 max-w-xl text-sm text-muted">The Great Men of Valor from Resurrection Ground Parish take a group photo after the Men's Weekend celebration.</figcaption>
                </figure>
                <figure class="md:col-span-5 md:mt-16" data-reveal style="--i:1">
                    <x-photo name="womens-weekend" sizes="(min-width:768px) 500px, 100vw" alt="The Country Coordinator blessing women of the parish during Women's Weekend" class="aspect-[4/3] rounded-xl md:aspect-[4/4.2]" />
                    <figcaption class="mt-3 text-sm text-muted">The Country Coordinator of RCCG Angola blessing the Good Women of Resurrection Ground Parish during their Women's Weekend celebration.</figcaption>
                </figure>
                <figure class="md:col-span-5" data-reveal>
                    <x-photo name="mens-choir" sizes="(min-width:768px) 500px, 100vw" alt="Men's choir singing together at a lectern during Men's Weekend" class="aspect-[4/3] rounded-xl" />
                    <figcaption class="mt-3 text-sm text-muted">The Excellent Men's Choir giving a special number before the message at the Men's Weekend.</figcaption>
                </figure>
                <figure class="md:col-span-7 md:-mt-8" data-reveal style="--i:1">
                    <div class="photo overflow-hidden rounded-xl bg-brand-950">
                        <video class="aspect-video w-full" controls preload="none" playsinline poster="/img/choir.webp" aria-label="Worship session at Resurrection Ground Parish">
                            <source src="/images/praise.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <figcaption class="mt-3 max-w-xl text-sm text-muted">Worship session at Resurrection Ground Parish. The worship sessions are spiritually electrifying and refreshing.</figcaption>
                </figure>
            </div>
        </div>
    </section>

    {{-- Leadership --}}
    <section class="mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32" aria-labelledby="lead-title">
        <div class="grid items-center gap-10 lg:grid-cols-12 lg:gap-12">
            <x-photo :name="$church['coordinator']['photo']" sizes="(min-width:1024px) 440px, 100vw"
                     :alt="$church['coordinator']['name'].', Country Coordinator of RCCG Angola'"
                     class="aspect-[4/5] w-full max-w-[16rem] rounded-2xl lg:col-span-5 lg:max-w-xs" fit="object-cover" pos="object-top" data-reveal />
            <div class="lg:col-span-7 lg:pl-6">
                <h2 id="lead-title" class="text-4xl font-bold text-brand-900 sm:text-5xl" data-reveal>{{ $church['coordinator']['short_name'] }}</h2>
                <p class="mt-2 text-lg font-medium text-brand-600" data-reveal>{{ $church['coordinator']['role'] }}</p>
                <blockquote class="mt-8 border-t border-line pt-8 font-display text-2xl font-semibold leading-snug text-ink sm:text-3xl" data-reveal style="--i:1">
                    We will pursue these objectives until every Nation in the world is reached for the Lord Jesus Christ.
                </blockquote>
                <div class="mt-8 flex flex-wrap gap-x-8 gap-y-3 font-semibold text-brand-800" data-reveal style="--i:2">
                    <a href="tel:{{ preg_replace('/\s+/', '', $church['coordinator']['phone']) }}" class="inline-flex items-center gap-2 hover:underline"><x-icon name="phone" :size="18" /> {{ $church['coordinator']['phone'] }}</a>
                    <a href="mailto:{{ $church['coordinator']['email'] }}" class="inline-flex items-center gap-2 break-all hover:underline"><x-icon name="mail" :size="18" /> {{ $church['coordinator']['email'] }}</a>
                </div>
            </div>
        </div>

        <div class="mt-24" id="parishes">
            <h2 class="text-3xl font-bold text-brand-900 sm:text-4xl" data-reveal>Our pastors and parishes</h2>
            <div class="mt-8"><x-parish-list /></div>
        </div>
    </section>

    {{-- Giving --}}
    <section class="border-y border-line bg-white" aria-labelledby="give-title">
        <div class="mx-auto grid max-w-7xl gap-10 px-4 py-20 sm:px-6 lg:grid-cols-12 lg:gap-16 lg:px-8 lg:py-24">
            <h2 id="give-title" class="text-4xl font-bold text-brand-900 sm:text-5xl lg:col-span-5" data-reveal>Your generosity helps build the church</h2>
            <div class="reading text-muted lg:col-span-7" data-reveal style="--i:1">
                <p>The generosity and commitment of God's people contribute immensely to the church's achievement and its strength. This is evident through the countless volunteer effort by those serving in church services and through those who financially support the church and its plans.</p>
                <p>The church believes in the Biblical principle of tithing in Malachi 3:10. If you would like to take a step of faith to give to the church, there are several options. Call us and we will gladly explain them.</p>
                <div class="mt-8">
                    <x-button :href="$tel" icon="phone">Call to ask about giving</x-button>
                </div>
            </div>
        </div>
    </section>

    {{-- Close --}}
    <section class="on-dark relative isolate overflow-hidden bg-brand-900 text-white">
        <img src="/img/year-opening.webp" alt="A pastor preaching at the parish's year-opening service" width="1600" height="1067" loading="lazy" class="absolute inset-0 -z-20 h-full w-full object-cover object-[50%_6%]">
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(18,11,52,0.94)_0%,rgba(28,16,82,0.8)_38%,rgba(28,16,82,0.3)_70%,rgba(28,16,82,0.45)_100%)] max-md:bg-brand-950/80"></div>
        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 lg:py-36">
            <h2 class="max-w-xl text-4xl sm:text-5xl lg:text-6xl" data-reveal>Come and be part of our wonderful family</h2>
            <p class="mt-6 max-w-md text-lg text-brand-100" data-reveal style="--i:1">Join the destiny moulders as we together make the difference the world is looking for.</p>
            <div class="mt-10 flex flex-wrap gap-3" data-reveal style="--i:2">
                <x-button :href="route('visit')" variant="light">Plan your visit</x-button>
                <x-button :href="route('contact')" variant="outline" icon="mail">Contact us</x-button>
            </div>
        </div>
    </section>
</x-layout>
