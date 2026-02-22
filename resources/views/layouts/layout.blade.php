<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.jpg') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="flex flex-col min-h-screen">

    @include('layouts.header')

    {{-- Nội dung chính --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>
</html>
