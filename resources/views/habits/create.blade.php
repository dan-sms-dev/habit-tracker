<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">
      <h1 class="font-bold text-3xl text-center">
        cadastrar novo hábito
      </h1>
      <form action="{{ route('habits.store') }}" method="POST">
        @csrf

        <section class="habit-shadow-lg bg-white max-w-[600px] mx-auto p-8 pb-8  mt-4">
        <div class="flex flex-col gap-2 mb-2">

          <label for="name" class="text-xl">
            Nome do hábito
          </label>

          <input
            type="text"
            name="name"
            placeholder="Ex: ler 10 páginas de um livro..."
            class="bg-white habit-btn habit-shadow-lg text-bold p-2">

        </div>
        @error('name')
          <p class="text-red-500 text-sm font-bold text-center">
            {{ $message }}
          </p>
        @enderror

        <button type="submit" class="bg-habit-blue habit-btn habit-shadow-lg text-bold p-2 w-full">
          Cadastrar hábito
        </button>
        </section>
      </form>
    </main>
</x-layout>
