<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">

        <x-navbar />

            <x-title>
                Configurar meus hábitos
            </x-title>
            <ul class="flex flex-col gap-2 mt-2">
                @forelse ($habits as $item)
                    <li class="flex gap-2 items-center justify-between w-full">
                        <div class="habit-shadow-lg p-2 bg-[#FFDAAC] w-full">
                            <p class="font-bold text-lg ">
                                {{ $item->name }}
                            </p>
                        </div>
                        {{-- EDIT --}}
                        <a class="bg-white habit-shadow-lg p-2 border text-black hover:opacity-60 cursor-pointer"
                            href="{{ route('habits.edit', $item->id) }}">
                            <x-icons.edit />
                        </a>
                        {{-- DELETE --}}
                        <form action="{{ route('habits.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 habit-shadow-lg border text-white p-2 hover:opacity-60 cursor-pointer">
                                <x-icons.trash />
                            </button>
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
    </main>
</x-layout>
