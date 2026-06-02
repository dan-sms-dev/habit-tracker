<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">
        <h1 class="text-3xl font-semibold mb-4 text-center tracking-tight text-slate-950">
            Editar hábito
        </h1>
        <form action="{{ route('habits.update', $habit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <section class="habit-panel max-w-[600px] mx-auto p-8 flex flex-col gap-4 mt-6">
                <div class="flex flex-col gap-2 mb-2">

                    <label for="name" class="font-medium text-slate-700">
                        Nome do hábito
                    </label>

                    <input type="text" name="name" placeholder="Ex: ler 10 páginas de um livro..."
                        class="habit-input @error('name') border-red-500 @enderror"
                        value="{{ $habit->name }}">

                </div>
                @error('name')
                    <p class="text-red-600 text-sm font-semibold text-center">
                        {{ $message }}
                    </p>
                @enderror

                <button type="submit" class="habit-btn habit-primary p-3 w-full">
                    Salvar alterações
                </button>
            </section>
        </form>
    </main>
</x-layout>
