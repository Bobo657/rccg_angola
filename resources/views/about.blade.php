@php $church = config('church'); @endphp
<x-layout
    title="About us"
    description="About RCCG Resurrection Ground Parish: founded 6 October 2013 by Pastor Joseph Okenwa, Country Coordinator of RCCG Angola. Our core objective, mandate and parishes across Luanda."
    keywords="about RCCG Angola, RCCG Resurrection Ground Parish history, Pastor Joseph Okenwa, RCCG parishes Luanda, Redeemed Christian Church of God Angola mission, church planting Angola"
>
    <x-page-header title="About us" intro="A parish of The Redeemed Christian Church of God, planted in Luanda in 2013." image="year-opening" image-alt="A pastor preaching at the parish year-opening service" pos="object-[50%_0%]" />

    <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-7">
                <h2 class="text-4xl font-bold text-brand-900 sm:text-5xl" data-reveal>Who we are</h2>
                <div class="reading mt-6 text-muted" data-reveal style="--i:1">
                    <p>RCCG Resurrection Ground Parish was founded on the 6th of October, 2013 and was pioneered by {{ $church['coordinator']['name'] }}, who is also the Country Coordinator of The Redeemed Christian Church of God Angola.</p>
                    <p>It is an arm of the big body of The Redeemed Christian Church of God. Her mother Parish is {{ $church['mother_parish'] }}.</p>
                </div>
            </div>
            <aside class="lg:col-span-5" data-reveal style="--i:1">
                <div class="rounded-2xl bg-brand-50 p-8">
                    <h3 class="text-2xl font-bold text-brand-900">Pastor in charge of the parish</h3>
                    <dl class="mt-5 space-y-3">
                        <div><dt class="text-sm text-muted">Name</dt><dd class="font-semibold">{{ $church['parishes'][0]['pastor'] }}</dd></div>
                        <div><dt class="text-sm text-muted">Phone</dt><dd class="font-semibold"><a class="hover:underline" href="tel:{{ preg_replace('/\s+/', '', config('app.phone')) }}">{{ config('app.phone') }}</a></dd></div>
                        <div><dt class="text-sm text-muted">Email</dt><dd class="break-all font-semibold"><a class="hover:underline" href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></dd></div>
                    </dl>
                </div>
            </aside>
        </div>
    </section>

    <section class="on-dark bg-brand-800 text-white">
        <div class="mx-auto grid max-w-7xl gap-12 px-4 py-20 sm:px-6 lg:grid-cols-12 lg:gap-16 lg:px-8 lg:py-28">
            <div class="lg:col-span-6">
                <h2 class="text-3xl font-bold sm:text-4xl" data-reveal>Our core objective</h2>
                <p class="mt-6 text-xl leading-relaxed text-brand-100" data-reveal style="--i:1">{{ $church['core_objective'] }}</p>
            </div>
            <div class="lg:col-span-6">
                <h2 class="text-3xl font-bold sm:text-4xl" data-reveal>Our mandate</h2>
                <dl class="mt-6 space-y-6 text-brand-100" data-reveal style="--i:1">
                    <div><dt class="font-display text-xl font-semibold text-white">Church planting and evangelism</dt><dd class="mt-1">To effect prompt implementation of the growth programs of the Redeemed Christian Church of God on church planting and house fellowship development at the grass root level.</dd></div>
                    <div><dd>{{ $church['mandate'] }}</dd></div>
                </dl>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
        <h2 class="text-4xl font-bold text-brand-900 sm:text-5xl" data-reveal>Parishes under us</h2>
        <p class="reading mt-4 text-muted" data-reveal style="--i:1">Come and be part of our wonderful family. Join the destiny moulders as we together make the difference the world is looking for. Just call {{ config('app.phone') }}.</p>
        <div class="mt-10"><x-parish-list /></div>
    </section>
</x-layout>
