{{-- Pakai layout utama, semua isi di bawah masuk ke @yield('content') di layout --}}
@extends('layouts.app')

{{-- Mengisi @yield('title') di layout --}}
@section('title', 'Login - Sego Cokot')

{{-- Awal isi halaman --}}
@section('content')
<div class="flex justify-center px-4 py-16">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 border-t-8 border-orange-500">
        <img src="{{ asset('images/logo.png') }}" alt="Logo Segokot" class="w-24 h-24 mx-auto mb-4 object-cover rounded-full">
        <h1 class="text-2xl font-bold text-orange-600 text-center">SEGOKOT</h1>
        <p class="text-sm text-gray-500 text-center mb-6">Solusi Sat-Set Sarapan Pagi!</p>

        {{-- Tampilkan pesan error kalau login gagal (dikirim dari controller dengan ->with('error', ...)) --}}
        @if (session('error'))
            <div class="bg-red-100 text-red-700 text-sm rounded px-4 py-2 mb-4">
                {{ session('error') }}
            </div>
        @endif

        {{-- Form dikirim dengan POST ke route login.proses --}}
        <form action="{{ route('login.proses') }}" method="POST" class="space-y-4">

            {{-- @csrf wajib ada di form POST, kalau tidak halaman error 419 --}}
            @csrf

            <div>
                <label for="username" class="block text-sm font-semibold mb-1">Username</label>
                {{-- name="username" -> nama inilah yang dibaca controller lewat $request->input('username') --}}
                <input type="text" id="username" name="username" required
                        class="w-full border border-amber-300 rounded px-3 py-2">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold mb-1">Password</label>
                <input type="password" id="password" name="password" required
                        class="w-full border border-amber-300 rounded px-3 py-2">
            </div>

            <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded">
                Masuk
            </button>
        </form>

    </div>
</div>
@endsection