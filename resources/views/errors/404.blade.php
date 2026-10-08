<x-layout title="Page not found" :noindex="true">
    <section class="mx-auto max-w-3xl px-4 py-28 sm:px-6 lg:py-36">
        <h1 class="text-5xl font-bold text-brand-900 sm:text-6xl">We could not find that page</h1>
        <p class="mt-6 max-w-xl text-lg text-muted">The link may be old or mistyped. Here are some places to start.</p>
        <div class="mt-10 flex flex-wrap gap-3">
            <x-button :href="route('home')">Go to the home page</x-button>
            <x-button :href="route('visit')" variant="outline" class="text-brand-800">Plan your visit</x-button>
        </div>
    </section>
</x-layout>
