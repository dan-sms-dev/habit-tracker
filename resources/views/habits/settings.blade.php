<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">

        <x-navbar />

            <x-title>
                Configurar meus hábitos
            </x-title>
            <ul class="flex flex-col gap-3 mt-4">
                @forelse ($habits as $item)
                    <li class="flex gap-2 items-center justify-between w-full">
                        <div class="habit-card p-4 w-full">
                            <p class="font-semibold text-lg text-slate-900">
                                {{ $item->name }}
                            </p>
                        </div>
                        {{-- EDIT --}}
                        <a class="habit-btn habit-secondary p-3 hover:opacity-80"
                            href="{{ route('habits.edit', $item->id) }}"
                            aria-label="Editar hábito">
                            <x-icons.edit />
                        </a>
                        {{-- DELETE --}}
                        <form action="{{ route('habits.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="habit-btn habit-danger p-3 hover:opacity-90"
                                aria-label="Excluir hábito">
                                <x-icons.trash />
                            </button>
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
    </main>
</x-layout>
