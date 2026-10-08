@php
    $church = config('church');
    $tel = 'tel:'.preg_replace('/\s+/', '', config('app.phone'));
@endphp
<x-layout
    title="Plan your visit"
    description="Plan your visit to RCCG Resurrection Ground Parish in Luanda, Angola: Sunday service 9:05 to 11:30, weekly programs, our address in Rangel and who to call."
    keywords="visit RCCG Luanda, church service times Luanda, Sunday service Luanda, RCCG Resurrection Ground Parish address, church in Rangel Luanda, new to church Luanda"
>
    <x-page-header title="Plan your visit" intro="Everything you need before you come: when we meet, where to find us, and who to call." image="building" image-alt="The Resurrection Ground Parish building in Luanda" />

    <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-5">
                <h2 class="text-4xl font-bold text-brand-900 sm:text-5xl" data-reveal>When we meet</h2>
                <p class="reading mt-5 text-muted" data-reveal style="--i:1">Sunday is the heart of our week. The main service runs from 9:05 until 11:30, with Sunday School before it. You are also welcome at any of our weekday programs.</p>
            </div>
            <div class="lg:col-span-7"><x-schedule /></div>
        </div>
    </section>

    <section class="on-dark bg-brand-800 text-white">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-20 sm:px-6 lg:grid-cols-12 lg:gap-16 lg:px-8 lg:py-28">
            <div class="lg:col-span-5">
                <h2 class="text-4xl font-bold sm:text-5xl" data-reveal>Where to find us</h2>
                <address class="mt-6 text-xl not-italic leading-relaxed text-brand-100" data-reveal style="--i:1">{{ config('app.address') }}</address>
                <div class="mt-8 flex flex-wrap gap-3" data-reveal style="--i:2">
                    <x-button :href="$church['maps_url']" variant="light" icon="navigation" :external="true">Get directions</x-button>
                    <x-button :href="$tel" variant="outline" icon="phone">{{ config('app.phone') }}</x-button>
                </div>
                <p class="mt-6 max-w-md text-brand-200" data-reveal style="--i:3">Not sure about parking or the best way to arrive? Call us and someone will help.</p>
            </div>
            <x-photo name="building" sizes="(min-width:1024px) 700px, 100vw" alt="The parish building: a large hall with glass doors, a paved forecourt and potted plants" class="aspect-[4/3] rounded-2xl lg:col-span-7" data-reveal />
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
            <h2 class="text-4xl font-bold text-brand-900 sm:text-5xl lg:col-span-5" data-reveal>What to expect</h2>
            <div class="reading text-muted lg:col-span-7" data-reveal style="--i:1">
                <p>A warm welcome. Our worship sessions are spiritually electrifying and refreshing, and the Word of God is taught from the Bible. Sunday School runs from 8:30 and the main service begins at 9:05.</p>
                <p>You do not need to know anyone. Tell the first person you meet that you are visiting, or call ahead and we will be glad to meet you.</p>
                <p>Curious about what we teach? Read <a href="{{ route('our_beliefs') }}" class="font-semibold text-brand-800 underline underline-offset-4">what we believe</a> and <a href="{{ route('our_history') }}" class="font-semibold text-brand-800 underline underline-offset-4">where the Redeemed Christian Church of God began</a>.</p>
            </div>
        </div>
    </section>

    <section class="border-y border-line bg-white">
        <div class="mx-auto grid max-w-7xl items-center gap-10 px-4 py-20 sm:px-6 lg:grid-cols-12 lg:gap-16 lg:px-8">
            <div class="lg:col-span-5">
                <h2 class="text-4xl font-bold text-brand-900" data-reveal>Who to contact</h2>
                <p class="reading mt-4 text-muted" data-reveal style="--i:1">Pastor in charge of the parish: {{ $church['parishes'][0]['pastor'] }}.</p>
                <ul class="mt-6 space-y-3 font-semibold text-brand-800" data-reveal style="--i:2">
                    <li><a href="{{ $tel }}" class="inline-flex min-h-11 items-center gap-3 hover:underline"><x-icon name="phone" /> {{ config('app.phone') }}</a></li>
                    <li><a href="mailto:{{ config('app.email') }}" class="inline-flex min-h-11 items-center gap-3 break-all hover:underline"><x-icon name="mail" /> {{ config('app.email') }}</a></li>
                </ul>
            </div>
            <div class="lg:col-span-7">
                <p class="mb-4 font-display text-xl font-semibold text-brand-900" data-reveal>Other parishes across Luanda</p>
                <x-parish-list />
            </div>
        </div>
    </section>
</x-layout>
