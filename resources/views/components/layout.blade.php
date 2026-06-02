<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAsUlEQVR4AexUMQ6AMAis/tHFzZe5ufhIhcSQSK4VhtaQYHqxwmGO0zKXn68UoB246ItYQDS4LLXMkWItQBKjNlDAdpwFwSoK1XIM1UMBiNgrlgLSgbAO8DBBcB+WWA7wMLHAY0MsBzydWbmxHNjXpVhg7Z55sRxgxQ8muiNQ2LfCOuBrs8FOB9IB6EBt2DT+pVfKUw8FvN7W+UELQMMFxWqyEBfFpF4LkMSoTXcBX43cAAAA//9I694ZAAAABklEQVQDAM2sXEH18prvAAAAAElFTkSuQmCC" type="image/png">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAsUlEQVR4AexUMQ6AMAis/tHFzZe5ufhIhcSQSK4VhtaQYHqxwmGO0zKXn68UoB246ItYQDS4LLXMkWItQBKjNlDAdpwFwSoK1XIM1UMBiNgrlgLSgbAO8DBBcB+WWA7wMLHAY0MsBzydWbmxHNjXpVhg7Z55sRxgxQ8muiNQ2LfCOuBrs8FOB9IB6EBt2DT+pVfKUw8FvN7W+UELQMMFxWqyEBfFpF4LkMSoTXcBX43cAAAA//9I694ZAAAABklEQVQDAM2sXEH18prvAAAAAElFTkSuQmCC">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="relative habit-bg min-h-screen flex flex-col justify-between font-sans text-slate-800 antialiased">
    {{-- header --}}
    <x-header />

    {{ $slot }}

    {{-- footer --}}
    <x-footer />

    {{-- toast --}}
    <x-toast />
</body>

</html>
