<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">

        {{-- NAVBAR --}}
        <x-navbar />

        <div class="flex flex-col gap-4 items-start">
            <x-title>
                {{ Carbon\Carbon::now()->locale('pt_BR')->translatedFormat('l, d \de F \de Y') }}
            </x-title>

            <ul class="flex flex-col gap-2 w-full">
                @forelse ($habits as $item)
                    <li class="habit-shadow-lg p-2 bg-[#FFDAAC]">
                        <form action="{{ route('habits.toggle', $item->id) }}" method="POST"
                            class="flex gap-2 items-center" id="form-{{ $item->id }}">
                            @csrf
                            <input type="checkbox" class="w-5 h-5 cursor-pointer"
                                {{ $item->wasCompletedToday() ? 'checked' : '' }}
                                onchange="document.getElementById('form-{{ $item->id }}').submit()" />
                            <p class="font-bold text-lg ">
                                {{ $item->name }}
                            </p>
                        </form>
                    </li>
                @empty
                    <p class="text-center">
                        Ainda não há hábitos cadastrados.
                    </p>
                    <a href="{{ route('habits.create') }}"
                        class="bg-blue-500 text-white text-center px-3 py-1 rounded-md ">
                        Cadastre um novo hábito
                    </a>
                @endforelse
            </ul>

            <a href="{{ route('habits.create') }}" class="p-2 habit-btn habit-shadow-lg bg-habit-blue">
                + Adicionar hábito
            </a>

        </div>
    </main>
</x-layout>
