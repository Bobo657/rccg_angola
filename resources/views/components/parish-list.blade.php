@php
    $parishes = collect(config('church.parishes'));
    $hq = $parishes->firstWhere('headquarters', true) ?? $parishes->first();
    $others = $parishes->reject(fn ($p) => $p === $hq)->values();
    $tel = fn ($n) => 'tel:'.preg_replace('/\s+/', '', $n);
@endphp
<div class="@container">
    <div class="grid gap-5 @3xl:grid-cols-[minmax(0,5fr)_minmax(0,7fr)]">
        {{-- Headquarters --}}
        <article class="on-dark relative flex flex-col overflow-hidden rounded-2xl bg-brand-800 text-white" data-reveal>
            <div class="relative min-h-72 flex-1">
                <x-photo :name="$hq['photo']" sizes="(min-width:768px) 480px, 100vw" :alt="$hq['pastor']" class="absolute inset-0 h-full w-full" pos="object-top" />
            </div>
            <div class="flex flex-col p-6 sm:p-8">
                <p class="inline-flex w-fit items-center rounded-full bg-white/12 px-3 py-1 text-xs font-semibold text-brand-100 ring-1 ring-white/20">Headquarters</p>
                <h3 class="mt-3 text-2xl leading-tight sm:text-[1.7rem]">{{ $hq['pastor'] }}</h3>
                @isset($hq['role'])<p class="mt-1 text-sm text-brand-200">{{ $hq['role'] }}</p>@endisset
                <div class="mt-5 border-t border-white/15 pt-5">
                    <p class="font-display text-xl">{{ $hq['name'] }}</p>
                    <p class="mt-1 flex items-center gap-1.5 text-sm text-brand-200"><x-icon name="map-pin" :size="16" /> {{ $hq['place'] }}</p>
                </div>
                <div class="pt-6">
                    <x-button :href="$tel($hq['phone'])" variant="light" icon="phone" class="w-full tabular-nums sm:w-auto">{{ $hq['phone'] }}</x-button>
                </div>
            </div>
        </article>

        {{-- Other parishes --}}
        <div class="grid content-start gap-5">
            @foreach($others as $i => $p)
                <article class="flex overflow-hidden rounded-2xl border border-line bg-white transition duration-500 ease-out-expo hover:-translate-y-0.5 hover:border-brand-300 hover:shadow-[0_24px_40px_-28px_rgba(40,22,111,0.45)]" data-reveal style="--i:{{ $i }}">
                    <x-photo :name="$p['photo']" sizes="176px" :alt="$p['pastor']" class="aspect-[4/5] w-28 shrink-0 self-stretch sm:w-40 @3xl:w-44" pos="object-top" />
                    <div class="flex min-w-0 flex-1 flex-col justify-center gap-3 p-4 sm:p-6">
                        <div>
                            <h3 class="text-xl leading-snug text-brand-900 sm:text-2xl">{{ $p['pastor'] }}</h3>
                            <p class="mt-2 font-medium text-ink">{{ $p['name'] }}</p>
                            <p class="mt-0.5 flex items-center gap-1.5 text-sm text-muted"><x-icon name="map-pin" :size="16" class="shrink-0 text-brand-400" /> {{ $p['place'] }}</p>
                        </div>
                        <a href="{{ $tel($p['phone']) }}" class="inline-flex min-h-11 w-fit items-center gap-2 rounded-full bg-brand-50 px-4 text-sm font-semibold tabular-nums text-brand-900 transition-colors hover:bg-brand-100">
                            <x-icon name="phone" :size="16" /> {{ $p['phone'] }}
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</div>
