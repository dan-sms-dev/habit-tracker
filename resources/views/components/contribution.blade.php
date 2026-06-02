@props(['habit', 'year' => null])

@php
  $selectedYear = $year ?? now()->year;
  $weeks = App\Models\Habit::generateYearGrid($selectedYear)
@endphp

<div class="mb-6">
    <h2 class="font-semibold text-lg text-slate-900">
        {{ $habit->name }}
    </h2>

    {{-- GRID --}}
    <div class="habit-card p-4 mt-2 overflow-x-auto">
        <div class="flex gap-1 justify-between w-full min-w-[620px]">
            @foreach ($weeks as $week)
                <div class="flex flex-col gap-1">
                    @foreach ($week as $day)
                        @if ($day === null)
                            {{-- Espaço vazio para alinhar semanas --}}
                            <div class="w-3 h-3"></div>
                        @else
                            <div class="w-3 h-3 rounded-sm cursor-pointer transition hover:ring-2 hover:ring-habit-blue/30
                       {{ $habit->wasCompletedOnDate($day) ? 'bg-habit-blue' : 'bg-slate-200' }}"
                                title="{{ $day->format('d/m/Y') }} - {{ $day->translatedFormat('l') }}"></div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    {{-- LEGENDA --}}
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
