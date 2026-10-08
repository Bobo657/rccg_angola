@php
    $photos = [
        ['choir', 'Youth choir ministering during their Youth Weekend.'],
        ['mens-group', "The Great Men of Valor from Resurrection Ground Parish take a group photo after the Men's Weekend celebration."],
        ['womens-weekend', "The Country Coordinator of RCCG Angola blessing the Good Women of Resurrection Ground Parish during their Women's Weekend celebration."],
        ['youth-group', 'A group of youths of Resurrection Ground Parish with their President and Vice President after the Youth Weekend.'],
        ['mens-choir', "The Excellent Men's Choir giving a special number before the message at the Men's Weekend."],
        ['sanctuary', 'The sanctuary at Resurrection Ground Parish.'],
        ['year-opening', 'The year-opening service, 2022.'],
        ['congregation', 'Members of the congregation during a service.'],
        ['service-gathering', 'Pastors and members gathered at a service.'],
        ['building', 'The parish building.'],
        ['studio-1', 'In the studio.'],
        ['studio-2', 'In the studio.'],
        ['studio-3', 'In the studio.'],
    ];
@endphp
<x-layout
    title="Gallery"
    description="Photos from RCCG Resurrection Ground Parish in Luanda: Youth Weekend, Men's Weekend, Women's Weekend, worship, choirs and parish life."
    keywords="RCCG Angola photos, RCCG Resurrection Ground Parish gallery, church photos Luanda, youth weekend, men's weekend, women's weekend, church choir Luanda"
>
    <x-page-header title="Gallery" intro="Worship, weekends and everyday life at Resurrection Ground Parish." image="mens-group" image-alt="Men of the parish gathered outside the church" />

    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <ul class="columns-1 gap-5 sm:columns-2 lg:columns-3">
            @foreach($photos as $i => [$name, $caption])
                <li class="mb-5 break-inside-avoid" data-reveal style="--i:{{ $i % 3 }}">
                    <button type="button" class="photo group block w-full overflow-hidden rounded-xl bg-brand-100 text-left" data-lightbox data-src="/img/{{ $name }}.webp" data-alt="{{ $caption }}" aria-label="Open photo: {{ $caption }}">
                        <x-photo :name="$name" sizes="(min-width:1024px) 400px, (min-width:640px) 50vw, 100vw" :alt="$caption" class="rounded-xl" />
                    </button>
                    <p class="mt-2 text-sm text-muted">{{ $caption }}</p>
                </li>
            @endforeach
        </ul>
    </section>

    <dialog id="lightbox" class="m-auto max-h-[94dvh] w-[min(94vw,1100px)] rounded-2xl bg-brand-950 p-0 text-white backdrop:bg-brand-950/90" aria-label="Photo viewer">
        <div class="relative">
            <img src="data:image/gif;base64,R0lGODlhAQABAAIAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7" alt="" class="max-h-[76dvh] w-full object-contain">
            <button type="button" data-close class="absolute right-3 top-3 inline-flex h-11 w-11 items-center justify-center rounded-full bg-brand-900/80 text-white hover:bg-brand-700" aria-label="Close photo"><x-icon name="x" /></button>
            <button type="button" data-prev class="absolute left-3 top-1/2 inline-flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-brand-900/80 text-white hover:bg-brand-700" aria-label="Previous photo"><x-icon name="chevron-left" :size="24" /></button>
            <button type="button" data-next class="absolute right-3 top-1/2 inline-flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-brand-900/80 text-white hover:bg-brand-700" aria-label="Next photo"><x-icon name="chevron-right" :size="24" /></button>
            <div class="flex items-start justify-between gap-4 px-5 py-4 text-sm text-brand-100">
                <p data-caption></p>
                <p data-count class="shrink-0 tabular-nums text-brand-300"></p>
            </div>
        </div>
    </dialog>
</x-layout>
