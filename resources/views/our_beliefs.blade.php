@php
    $beliefs = require resource_path('content/beliefs.php');
    $small = ['Of', 'And', 'The', 'In', 'To', 'Or', 'By'];
    $nice = function (string $t) use ($small) {
        $t = \Illuminate\Support\Str::title(mb_strtolower($t));
        foreach ($small as $w) {
            $t = preg_replace('/(?<=\s)'.$w.'(?=\s)/u', mb_strtolower($w), $t);
        }
        return $t;
    };
    $items = collect($beliefs)->map(fn ($b, $i) => $b + ['id' => 'b'.($i + 1).'-'.\Illuminate\Support\Str::slug($b['title']), 'label' => $nice($b['title'])]);
@endphp
<x-layout
    title="Our beliefs"
    description="What RCCG believes: the Bible, God, Jesus Christ, the Holy Spirit, repentance, baptism, holiness, prayer, healing, the second coming of Christ and eternal life."
    keywords="RCCG beliefs, what RCCG believes, Redeemed Christian Church of God doctrine, RCCG statement of faith, Christian beliefs Angola, baptism holy spirit holiness RCCG"
>
    <x-page-header title="Our beliefs" intro="The Bible is the written and revealed will of God. This is what we hold and teach." image="pastor-pulpit" image-alt="A pastor preaching from the pulpit" />

    <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-12 lg:gap-16 lg:px-8 lg:py-24">
        <aside class="lg:col-span-4">
            <details class="group rounded-2xl border border-line bg-white lg:sticky lg:top-28 lg:max-h-[calc(100dvh-8rem)] lg:overflow-y-auto" open>
                <summary class="flex cursor-pointer list-none items-center justify-between px-5 py-4 font-display text-lg font-semibold text-brand-900 lg:pointer-events-none">
                    Jump to a topic <x-icon name="chevron-down" class="transition-transform group-open:rotate-180 lg:hidden" />
                </summary>
                <ol class="toc border-t border-line px-2 py-2 text-sm">
                    @foreach($items as $b)
                        <li><a href="#{{ $b['id'] }}" class="block rounded-lg px-3 py-2 hover:bg-brand-50 hover:text-brand-900">{{ $b['label'] }}</a></li>
                    @endforeach
                </ol>
            </details>
        </aside>

        <div class="lg:col-span-8">
            @foreach($items as $b)
                <section id="{{ $b['id'] }}" class="border-t border-line py-10 first:border-t-0 first:pt-0">
                    <h2 class="text-2xl font-bold text-brand-900 sm:text-3xl">{{ $b['label'] }}</h2>
                    <div class="reading mt-4 text-ink/85">
                        @foreach($b['body'] as $p)
                            <p>{{ $p }}</p>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>
    </div>
</x-layout>
