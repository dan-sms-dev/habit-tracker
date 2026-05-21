<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Acompanhe seus hábitos','resume' => 'Acompanhe, visualize, gerencie e celebre cada pequena vitória na construção dos seus hábitos diários.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Acompanhe seus hábitos','resume' => 'Acompanhe, visualize, gerencie e celebre cada pequena vitória na construção dos seus hábitos diários.']); ?>
    <main class="max-w-5xl mx-auto py-10 px-4">
        
        <section class="py-20 flex flex-col items-center gap-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center leading-tight">
                Veja seus hábitos ganharem vida
            </h1>

            <p class="text-center text-lg max-w-2xl">
                Construa a versão que você quer ser, <span class="inline-block bg-habit-blue p-0.5 font-mono px-1 -skew-x-12 text-white">um dia de cada vez</span>.
                Acompanhe, visualize e celebre cada pequena vitória.
            </p>

            <a href="<?php echo e(auth()->check() ? route('habits.index') : route('site.register')); ?>"
                class="habit-shadow-lg habit-btn bg-habit-blue px-6 py-3 mt-6">
                Começar Agora
            </a>
        </section>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Almir\first-project\resources\views/home.blade.php ENDPATH**/ ?>