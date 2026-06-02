<x-layout title="Acompanhe seus hábitos" resume="Acompanhe, visualize e gerencie seus hábitos diários com clareza.">
    <main class="max-w-5xl mx-auto py-10 px-4">
        {{-- HERO --}}
        <section class="py-20 flex flex-col items-center gap-6">
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-habit-blue">
                Controle de rotina
            </p>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-center leading-tight tracking-tight text-slate-950">
                Acompanhe seus hábitos com mais clareza
            </h1>

            <p class="text-center text-lg max-w-2xl text-slate-600">
                Organize sua rotina diária, visualize consistência ao longo do tempo e mantenha o foco no que importa.
            </p>

            <a href="{{ auth()->check() ? route('habits.index') : route('site.register') }}"
                class="habit-btn habit-primary px-6 py-3 mt-4">
                Começar agora
            </a>
        </section>
    </main>
</x-layout>
