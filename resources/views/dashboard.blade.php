<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">

        {{-- NAVBAR --}}
        <x-navbar />

        <div class="flex flex-col gap-5 items-start">
            <x-title>
                {{ Carbon\Carbon::now()->locale('pt_BR')->translatedFormat('l, d \de F \de Y') }}
            </x-title>

            <ul class="flex flex-col gap-3 w-full">
                @forelse ($habits as $item)
                    <li class="habit-card p-4">
                        <form action="{{ route('habits.toggle', $item->id) }}" method="POST"
                            class="flex gap-3 items-center" id="form-{{ $item->id }}">
                            @csrf
                            <input type="checkbox" class="habit-check w-5 h-5 cursor-pointer"
                                {{ $item->wasCompletedToday() ? 'checked' : '' }}
                                onchange="document.getElementById('form-{{ $item->id }}').submit()" />
                            <p class="font-semibold text-lg text-slate-900">
                                {{ $item->name }}
                            </p>
                        </form>
                    </li>
                @empty
                    <div class="habit-card p-6 text-center text-slate-600">
                        <p>
                            Ainda não há hábitos cadastrados.
                        </p>
                        <a href="{{ route('habits.create') }}"
                            class="habit-btn habit-primary px-4 py-2 mt-4">
                            Cadastrar novo hábito
                        </a>
                    </div>
                @endforelse
            </ul>

            <a href="{{ route('habits.create') }}" class="habit-btn habit-primary px-4 py-2">
                + Adicionar hábito
            </a>

        </div>
    </main>
</x-layout>
