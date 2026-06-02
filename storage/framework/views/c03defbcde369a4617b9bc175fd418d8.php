<div>
    <nav>
        <ul class="flex flex-wrap gap-2 items-center">
            <li>
                <a href="<?php echo e(route('habits.index')); ?>"
                    class="habit-nav-link <?php echo e(Route::is('habits.index') ? 'habit-nav-link-active' : ''); ?>">
                    Hoje
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('habits.history')); ?>"
                    class="habit-nav-link <?php echo e(Route::is('habits.history') ? 'habit-nav-link-active' : ''); ?>">
                    Histórico
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('habits.settings')); ?>"
                    class="habit-nav-link <?php echo e(Route::is('habits.settings') ? 'habit-nav-link-active' : ''); ?>">
                    Gerenciar hábitos
                </a>
            </li>
        </ul>
    </nav>
</div>
<?php /**PATH C:\Users\Almir\first-project\resources\views/components/navbar.blade.php ENDPATH**/ ?>