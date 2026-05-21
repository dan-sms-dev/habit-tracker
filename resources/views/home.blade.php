<x-layout title="Acompanhe seus hábitos" resume="Acompanhe, visualize, gerencie e celebre cada pequena vitória na construção dos seus hábitos diários.">
    <main class="max-w-5xl mx-auto py-10 px-4">
        {{-- HERO --}}
        <section class="py-20 flex flex-col items-center gap-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center leading-tight">
                Veja seus hábitos ganharem vida
            </h1>

            <p class="text-center text-lg max-w-2xl">
                Construa a versão que você quer ser, <span class="inline-block bg-habit-blue p-0.5 font-mono px-1 -skew-x-12 text-white">um dia de cada vez</span>.
                Acompanhe, visualize e celebre cada pequena vitória.
            </p>

            <a href="{{ auth()->check() ? route('habits.index') : route('site.register') }}"
                class="habit-shadow-lg habit-btn bg-habit-blue px-6 py-3 mt-6">
                Começar Agora
            </a>
        </section>
    </main>
</x-layout>
