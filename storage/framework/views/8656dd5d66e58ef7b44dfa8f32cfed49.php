<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['habit', 'year' => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['habit', 'year' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
  $selectedYear = $year ?? now()->year;
  $weeks = App\Models\Habit::generateYearGrid($selectedYear)
?>

<div class="mb-6">
    <h2 class="font-semibold text-lg text-slate-900">
        <?php echo e($habit->name); ?>

    </h2>

    
    <div class="habit-card p-4 mt-2 overflow-x-auto">
        <div class="flex gap-1 justify-between w-full min-w-[620px]">
            <?php $__currentLoopData = $weeks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col gap-1">
                    <?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($day === null): ?>
                            
                            <div class="w-3 h-3"></div>
                        <?php else: ?>
                            <div class="w-3 h-3 rounded-sm cursor-pointer transition hover:ring-2 hover:ring-habit-blue/30
                       <?php echo e($habit->wasCompletedOnDate($day) ? 'bg-habit-blue' : 'bg-slate-200'); ?>"
                                title="<?php echo e($day->format('d/m/Y')); ?> - <?php echo e($day->translatedFormat('l')); ?>"></div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    
    <div class="flex items-center gap-4 mt-2 text-sm text-slate-500">
        <div class="flex items-center gap-1.5">
            <div class="w-3 h-3 bg-slate-200 rounded-sm"></div>
            <span>Não feito</span>
        </div>
        <div class="flex items-center gap-1.5">
            <div class="w-3 h-3 bg-habit-blue rounded-sm"></div>
            <span>Feito</span>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Almir\first-project\resources\views/components/contribution.blade.php ENDPATH**/ ?>