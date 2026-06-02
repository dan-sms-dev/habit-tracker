<header class="bg-white/90 border-b border-habit-border backdrop-blur">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-4 p-4">
        
        <div class="flex items-center gap-2">
            <a href="<?php echo e(route('habits.index')); ?>" class="habit-btn habit-primary h-9 w-9 text-sm tracking-wide">
                HT
            </a>
            <p class="font-semibold text-slate-900">
                Habit Tracker
            </p>
        </div>
        
        <div class="flex items-center gap-4">
            <?php if(auth()->guard()->check()): ?>
                <form action="<?php echo e(route('auth.logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="habit-btn habit-secondary px-4 py-2">
                        Sair
                    </button>
                </form>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
                <div class="flex gap-2">
                    <a href="<?php echo e(route('site.register')); ?>" class="habit-btn habit-secondary px-4 py-2">
                        Cadastrar-se
                    </a>

                    <a href="<?php echo e(route('login')); ?>" class="habit-btn habit-primary px-4 py-2">
                        Logar
                    </a>
                </div>
            <?php endif; ?>

            
            <a href="https://github.com/dan-sms-dev" target="_blank" rel="noopener noreferrer"
                class="habit-btn habit-secondary h-9 w-9">
                <?php if (isset($component)) { $__componentOriginala3f20daecaa04c09a7cf018162601d50 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3f20daecaa04c09a7cf018162601d50 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.git','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.git'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala3f20daecaa04c09a7cf018162601d50)): ?>
<?php $attributes = $__attributesOriginala3f20daecaa04c09a7cf018162601d50; ?>
<?php unset($__attributesOriginala3f20daecaa04c09a7cf018162601d50); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3f20daecaa04c09a7cf018162601d50)): ?>
<?php $component = $__componentOriginala3f20daecaa04c09a7cf018162601d50; ?>
<?php unset($__componentOriginala3f20daecaa04c09a7cf018162601d50); ?>
<?php endif; ?>
            </a>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\Almir\first-project\resources\views/components/header.blade.php ENDPATH**/ ?>