<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sego Cokot')</title>

    <!-- menggunakan tailwind agar tidak pelu install apa apa -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-amber-50 min-h-screen flex flex-col">

    @if (!empty($username))
        {{-- Memanggil Blade Component navbar, username dikirim sebagai atribut --}}
        <x-navbar :username="$username" />
    @endif

    {{-- Tempat isi halaman. Isinya berasal dari @section('content') di tiap view --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Memanggil Blade Component footer --}}
    <x-footer />

</body>
</html>