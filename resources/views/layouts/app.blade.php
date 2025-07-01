<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/contact-form.js'])
</head>
<body class="bg-gray-100">
<div class="min-h-screen">
    <main class="container mx-auto py-8 px-4">
        @yield('content')
    </main>
</div>
</body>
</html>
