<header class="bg-white/90 border-b border-habit-border backdrop-blur">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-4 p-4">
        {{-- logo --}}
        <div class="flex items-center gap-2">
            <a href="{{ route('habits.index') }}" class="habit-btn habit-primary h-9 w-9 text-sm tracking-wide">
                HT
            </a>
            <p class="font-semibold text-slate-900">
                Habit Tracker
            </p>
        </div>
        {{-- github --}}
        <div class="flex items-center gap-4">
            @auth
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="habit-btn habit-secondary px-4 py-2">
                        Sair
                    </button>
                </form>
            @endauth

            @guest
                <div class="flex gap-2">
                    <a href="{{ route('site.register') }}" class="habit-btn habit-secondary px-4 py-2">
                        Cadastrar-se
                    </a>

                    <a href="{{ route('login') }}" class="habit-btn habit-primary px-4 py-2">
                        Logar
                    </a>
                </div>
            @endguest

            {{-- GitHub --}}
            <a href="https://github.com/dan-sms-dev" target="_blank" rel="noopener noreferrer"
                class="habit-btn habit-secondary h-9 w-9">
                <x-icons.git />
            </a>
        </div>
    </div>
</header>
