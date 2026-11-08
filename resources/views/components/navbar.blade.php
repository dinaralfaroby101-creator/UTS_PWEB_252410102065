{{-- Komponen navbar. @props menerima data $username dari pemanggilnya (<x-navbar :username="...">) --}}
@props(['username'])

<nav class="bg-orange-500 text-white shadow">
    <div class="max-w-5xl mx-auto px-4 py-3 flex flex-col md:flex-row md:items-center md:justify-between gap-2">

        {{-- Nama usaha, kalau diklik kembali ke dashboard --}}
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="font-bold text-lg">
            <div class="flex items-center space-x-3">
                <!-- Atur ukuran logo dengan h-10 (height) dan w-auto -->
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto rounded-full">
                <span class="text-xl font-bold text-white">SEGOKOT</span>
            </div>
        </a>

        <div class="flex flex-wrap items-center gap-4 text-sm">
            {{-- Setiap link membawa ?username= supaya username tidak hilang saat pindah halaman --}}
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-yellow-200">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="hover:text-yellow-200">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="hover:text-yellow-200">Profile</a>

            {{-- Tombol keluar: kembali ke halaman login --}}
            <a href="{{ route('login') }}" class="bg-red-600 text-white px-3 py-1 rounded font-semibold">Keluar</a>
        </div>

    </div>
</nav>