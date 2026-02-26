<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/id--6Da3AO_logos.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="flex flex-col min-h-screen">

    @include('components.header')

    {{-- Nội dung chính --}}
    <main class="flex-grow">
        @yield('content')
        ĐÂY LÀ NỘI DUNG CHÍNH
    </main>

    @include('components.rimager-wrapper')
    @include('components.footer')

</body>
</html>
