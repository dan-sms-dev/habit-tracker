<x-layout>
    <main class="py-10 px-4">
        <section class="habit-panel max-w-[600px] mx-auto p-8 mt-4">
            <h1 class="text-3xl font-semibold mb-4 tracking-tight text-slate-950">
                Faça login
            </h1>

            <p class="mb-4 text-slate-600">
                Insira seus dados para acessar sua conta.
            </p>

            <form
              action="{{ route('auth.login') }}"
              method="POST"
              class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-4">

                    <label for="email" class="font-medium text-slate-700">
                        Email
                    </label>

                    <input type="email" name="email" placeholder="seu@email.com"
                        class="habit-input @error('email') border-red-500 @enderror">

                </div>
                @error('email')
                    <p class="text-red-600 text-sm font-semibold text-center">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex flex-col gap-2 mb-4">

                    <label for="password" class="font-medium text-slate-700">
                        Senha
                    </label>

                    <div class="relative">
                        <input id="login-password" type="password" name="password" placeholder="********"
                            class="habit-input pr-12 w-full @error('password') border-red-500 @enderror">

                        <button
                            type="button"
                            data-toggle-password
                            data-target="login-password"
                            class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer text-slate-500 hover:text-habit-blue"
                            aria-label="Mostrar senha">
                            <span data-eye-open class="hidden">
                                <x-icons.eye />
                            </span>
                            <span data-eye-closed>
                                <x-icons.eye-closed />
                            </span>
                        </button>
                    </div>

                </div>
                @error('password')
                    <p class="text-red-600 text-sm font-semibold text-center">
                        {{ $message }}
                    </p>
                @enderror

                <button type="submit" class="habit-btn habit-primary p-3 mt-2">
                    Entrar
                </button>
            </form>

            <p class="text-center mt-4 text-slate-600">
                Não tem uma conta? <a href="{{ route('site.register') }}" class="habit-footer-link">Registrar-se</a>
            </p>

        </section>
    </main>

    <script>
        document.querySelectorAll('[data-toggle-password]').forEach((button) => {
            button.addEventListener('click', () => {
                const input = document.getElementById(button.dataset.target);

                if (!input) {
                    return;
                }

                const isPassword = input.type === 'password';

                input.type = isPassword ? 'text' : 'password';
                button.setAttribute('aria-label', isPassword ? 'Ocultar senha' : 'Mostrar senha');
                button.querySelector('[data-eye-open]')?.classList.toggle('hidden', !isPassword);
                button.querySelector('[data-eye-closed]')?.classList.toggle('hidden', isPassword);
            });
        });
    </script>
</x-layout>
