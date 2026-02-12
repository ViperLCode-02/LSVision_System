<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LSVision') }} - Enterprise Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Flowbite CSS (optional - if you want their components) -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    
    <style>
        /* Add your custom color variables */
        :root {
            --color-brand: #3b82f6;
            --color-heading: #111827;
            --color-body: #4b5563;
            --color-neutral-primary: #ffffff;
            --color-neutral-primary-medium: #f9fafb;
            --color-neutral-secondary-soft: #f3f4f6;
            --color-neutral-tertiary: #e5e7eb;
            --color-neutral-tertiary-medium: #f3f4f6;
            --color-default: #e5e7eb;
            --color-default-medium: #d1d5db;
        }
        
        .bg-neutral-primary { background-color: var(--color-neutral-primary); }
        .bg-neutral-primary-medium { background-color: var(--color-neutral-primary-medium); }
        .bg-neutral-secondary-soft { background-color: var(--color-neutral-secondary-soft); }
        .bg-neutral-tertiary-medium { background-color: var(--color-neutral-tertiary-medium); }
        .bg-brand { background-color: var(--color-brand); }
        .text-heading { color: var(--color-heading); }
        .text-body { color: var(--color-body); }
        .text-fg-brand { color: var(--color-brand); }
        .border-default { border-color: var(--color-default); }
        .border-default-medium { border-color: var(--color-default-medium); }
        .rounded-base { border-radius: 0.5rem; }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    @include('layouts.enterprise.navigation')

    <!-- Page Content -->
    <main class="pt-20">
        {{ $slot }}
    </main>

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    
    @stack('scripts')
</body>
</html>