{{-- Pakai layout utama, isi di bawah masuk ke @yield('content') di layout --}}
@extends('layouts.app')

{{-- Mengisi judul tab browser (@yield('title') di layout) --}}
@section('title', 'Dashboard - Sego Cokot')

@section('content')
{{-- max-w-5xl mx-auto = lebar konten dibatasi dan diletakkan di tengah. px-4 py-8 = jarak dalam kiri-kanan dan atas-bawah --}}
<div class="max-w-5xl mx-auto px-4 py-8">

    {{-- 1. BANNER SELAMAT DATANG
        bg-orange-400 = latar oranye, rounded-xl = sudut membulat besar,
        p-6 = jarak dalam, mb-6 = jarak ke elemen di bawahnya --}}
    <div class="bg-orange-400 rounded-xl p-6 mb-6">
        {{-- $username berasal dari controller (hasil dibaca dari URL ?username=...) --}}
        <h1 class="text-2xl md:text-3xl font-bold text-white">Selamat datang, {{ ucfirst($username) }}! 👋</h1>
        <p class="text-white mt-1">Berikut ringkasan bisnis Nasi Cokot Ayam Suwir hari ini.</p>
    </div>

    {{-- 2. GRID KARTU RINGKASAN
        grid-cols-1 = 1 kolom di mobile, sm:grid-cols-2 = 2 kolom di tablet, lg:grid-cols-4 = 4 kolom di desktop
        gap-4 = jarak antar kartu --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

        {{-- Desain kartu: bg-white = latar putih, rounded-lg = sudut membulat, shadow-md = bayangan halus,
            p-5 = jarak dalam, border-l-4 = garis tebal hanya di sisi kiri (warnanya diatur per kartu) --}}

        {{-- Kartu 1: Jumlah Produk (garis kiri merah) --}}
        <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-red-500">
            <p class="text-sm text-gray-500">Jumlah Produk</p>
            {{-- Nilai ini dihitung di controller dengan count(), bukan ditulis manual --}}
            <p class="text-2xl font-bold text-orange-500">{{ $jumlah_produk }}</p>
        </div>

        {{-- Kartu 2: Total Stok (garis kiri kuning) --}}
        <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-yellow-400">
            <p class="text-sm text-gray-500">Total Stok</p>
            <p class="text-2xl font-bold text-orange-500">{{ $total_stok }} porsi</p>
        </div>

        {{-- Kartu 3: Total Terjual (garis kiri oranye gelap) --}}
        <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-orange-700">
            <p class="text-sm text-gray-500">Total Terjual</p>
            <p class="text-2xl font-bold text-orange-500">{{ $total_terjual }} porsi</p>
        </div>

        {{-- Kartu 4: Total Pendapatan (garis kiri dan nilai berwarna hijau) --}}
        <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-green-500">
            <p class="text-sm text-gray-500">Total Pendapatan</p>
            {{-- number_format(angka, 0, ',', '.') = tanpa desimal, pemisah desimal koma, pemisah ribuan titik.
                Contoh: 1565000 menjadi 1.565.000 --}}
            <p class="text-2xl font-bold text-green-600">Rp {{ number_format($total_pendapatan, 0, ',', '.') }}</p>
        </div>

    </div>

    {{-- 3. TOMBOL DI TENGAH
         flex justify-center = isi div ini (tombol) diletakkan di tengah secara horizontal, mt-8 = jarak dari kartu --}}
    <div class="flex justify-center mt-8">
        {{-- route('pengelolaan', ['username' => $username]) menghasilkan /pengelolaan?username=...
             sehingga username tetap terbawa ke halaman berikutnya --}}
        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
           class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-3 rounded-lg">
            Lihat Pengelolaan Stok & Penjualan →
        </a>
    </div>

</div>
@endsection