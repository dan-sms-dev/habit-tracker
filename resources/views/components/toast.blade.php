@php
    $type = session()->has('success') ? 'success' : (session()->has('error') ? 'error' : 'warning');
    $message = session()->get($type);
    $styles = [
        'success' => 'bg-emerald-50 text-emerald-700',
        'error' => 'bg-red-50 text-red-700',
        'warning' => 'bg-amber-50 text-amber-700',
    ];
@endphp

@if (session()->has('success') || session()->has('error') || session()->has('warning'))
    <div
        class="fixed top-6 right-6 z-50 habit-toast p-4 mb-4 flex gap-2 items-center max-w-sm {{ $styles[$type] }}">

        <x-dynamic-component :component="'icons.' . $type" class="mt-4" />

        <p>
            {{ $message }}
        </p>
    </div>

    <script>
        setTimeout(() => {
            const toast = document.querySelector('.habit-toast');
            if (toast) {
                toast.remove();
            }
        }, 3000);
    </script>
@endif
