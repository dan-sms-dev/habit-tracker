<div>
    <nav>
        <ul class="flex flex-wrap gap-2 items-center">
            <li>
                <a href="{{ route('habits.index') }}"
                    class="habit-nav-link {{ Route::is('habits.index') ? 'habit-nav-link-active' : '' }}">
                    Hoje
                </a>
            </li>
            <li>
                <a href="{{ route('habits.history') }}"
                    class="habit-nav-link {{ Route::is('habits.history') ? 'habit-nav-link-active' : '' }}">
                    Histórico
                </a>
            </li>
            <li>
                <a href="{{ route('habits.settings') }}"
                    class="habit-nav-link {{ Route::is('habits.settings') ? 'habit-nav-link-active' : '' }}">
                    Gerenciar hábitos
                </a>
            </li>
        </ul>
    </nav>
</div>
