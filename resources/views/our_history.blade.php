@php $history = require resource_path('content/history.php'); @endphp
<x-layout
    title="Our history"
    description="The story of The Redeemed Christian Church of God: from Pa Akindayomi's Glory of God Fellowship in Lagos in 1952 to Pastor Enoch Adejare Adeboye and a worldwide church."
    keywords="RCCG history, history of Redeemed Christian Church of God, Pa Akindayomi, Pastor Enoch Adeboye, RCCG founder, Glory of God Fellowship, RCCG Lagos 1952"
>
    <x-page-header title="Our history" intro="How the Redeemed Christian Church of God began, and the covenant it was built on." image="history-ministers" image-alt="A minister preaching at a lectern" />

    <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-12 lg:gap-16 lg:px-8 lg:py-24">
        <div class="lg:col-span-4">
            <x-photo name="history-ministers" sizes="(min-width:1024px) 380px, 100vw" alt="A minister preaching at a lectern" class="aspect-[4/5] max-w-sm rounded-2xl lg:sticky lg:top-28" pos="object-top" />
        </div>
        <article class="reading text-ink/85 lg:col-span-8">
            @foreach($history as $i => $p)
                <p @class(['text-xl leading-relaxed text-ink' => $i === 0])>{{ $p }}</p>
            @endforeach
        </article>
    </div>
</x-layout>
