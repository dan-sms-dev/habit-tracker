<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">

        <x-navbar />

        <x-title>
            Histórico de hábitos
        </x-title>

        <div class="my-4 flex flex-wrap gap-2">
            @foreach ($availableYears as $year)
                <a href="{{ route('habits.history', ['year' => $year]) }}"
                    class="habit-btn px-4 py-2 {{ $selectedYear == $year ? 'habit-primary' : 'habit-secondary' }}">
                    {{ $year }}
                </a>
            @endforeach
        </div>

        @forelse($habits as $habit)
            <x-contribution :$habit :year="$selectedYear" />
        @empty
            <div class="habit-card p-6 text-slate-600">
                <p>
                    Nenhum hábito para exibir histórico.
                </p>
                <a href="{{ route('habits.create') }}" class="habit-footer-link">
                    Crie um novo hábito
                </a>
            </div>
        @endforelse

    </main>
</x-layout>
