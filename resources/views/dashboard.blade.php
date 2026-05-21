<x-layout>
    <main class="max-w-5xl mx-auto py-10 min-h-[calc(100vh-160px)] px-4">

        {{-- NAVBAR --}}
        <x-navbar />

        <div>
            <h2 class="text-lg mt-8 mb-2">
                {{ date('d/m/Y') }}
            </h2>

            <ul class="flex flex-col gap-2">
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
            </div>
    </main>
</x-layout>
