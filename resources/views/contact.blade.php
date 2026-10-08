@php
    $church = config('church');
    $tel = 'tel:'.preg_replace('/\s+/', '', config('app.phone'));
@endphp
<x-layout
    title="Contact"
    description="Contact RCCG Resurrection Ground Parish in Luanda, Angola. Call {{ config('app.phone') }}, email us or visit us at Distrito Urbano Rangel, Avenida Deolinda Rodrigues."
    keywords="contact RCCG Angola, RCCG Luanda phone, RCCG Resurrection Ground Parish address, church contact Luanda, Rangel Luanda church address"
>
    <x-page-header title="Contact us" intro="Have any questions? You can talk to someone, no matter what the challenge is." />

    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-5">
                <dl class="divide-y divide-line border-y border-line">
                    <div class="flex gap-4 py-6" data-reveal>
                        <x-icon name="phone" :size="24" class="mt-1 shrink-0 text-brand-600" />
                        <div><dt class="text-sm text-muted">Call us</dt><dd class="mt-1 font-display text-2xl font-semibold"><a href="{{ $tel }}" class="hover:text-brand-700">{{ config('app.phone') }}</a></dd></div>
                    </div>
                    <div class="flex gap-4 py-6" data-reveal style="--i:1">
                        <x-icon name="mail" :size="24" class="mt-1 shrink-0 text-brand-600" />
                        <div><dt class="text-sm text-muted">Email</dt><dd class="mt-1 break-all text-lg font-semibold"><a href="mailto:{{ config('app.email') }}" class="hover:text-brand-700">{{ config('app.email') }}</a></dd></div>
                    </div>
                    <div class="flex gap-4 py-6" data-reveal style="--i:2">
                        <x-icon name="map-pin" :size="24" class="mt-1 shrink-0 text-brand-600" />
                        <div>
                            <dt class="text-sm text-muted">Address</dt>
                            <dd class="mt-1 text-lg font-semibold"><address class="not-italic">{{ config('app.address') }}</address></dd>
                            <a href="{{ $church['maps_url'] }}" target="_blank" rel="noopener" class="mt-2 inline-flex items-center gap-1.5 font-semibold text-brand-800 underline underline-offset-4">Get directions <x-icon name="arrow-up-right" :size="16" /></a>
                        </div>
                    </div>
                    <div class="flex gap-4 py-6" data-reveal style="--i:3">
                        <x-icon name="clock" :size="24" class="mt-1 shrink-0 text-brand-600" />
                        <div><dt class="text-sm text-muted">Main Sunday service</dt><dd class="mt-1 text-lg font-semibold">9:05 – 11:30 <a href="{{ route('visit') }}" class="ml-2 text-base font-semibold text-brand-800 underline underline-offset-4">All programs</a></dd></div>
                    </div>
                </dl>
            </div>
            <div class="lg:col-span-7" data-reveal style="--i:1">
                <div class="overflow-hidden rounded-2xl border border-line bg-brand-50">
                    <iframe title="Map showing the parish location in Rangel, Luanda" class="aspect-[4/3] w-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps?q={{ urlencode('Distrito Urbano Rangel, Avenida Deolinda Rodrigues, Luanda, Angola') }}&output=embed"></iframe>
                </div>
                <p class="mt-3 text-sm text-muted">Map provided by Google Maps.</p>
            </div>
        </div>
    </section>
</x-layout>
