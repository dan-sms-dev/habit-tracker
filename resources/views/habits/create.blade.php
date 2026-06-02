<x-layout>
    <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full">
      <h1 class="font-semibold text-3xl text-center tracking-tight text-slate-950">
        Cadastrar novo hábito
      </h1>
      <form action="{{ route('habits.store') }}" method="POST">
        @csrf

        <section class="habit-panel max-w-[600px] mx-auto p-8 mt-6">
        <div class="flex flex-col gap-2 mb-4">

          <label for="name" class="font-medium text-slate-700">
            Nome do hábito
          </label>

          <input
            type="text"
            name="name"
            placeholder="Ex: ler 10 páginas de um livro..."
            class="habit-input">

        </div>
        @error('name')
          <p class="text-red-600 text-sm font-semibold text-center mb-3">
            {{ $message }}
          </p>
        @enderror

        <button type="submit" class="habit-btn habit-primary p-3 w-full">
          Cadastrar hábito
        </button>
        </section>
      </form>
    </main>
</x-layout>
