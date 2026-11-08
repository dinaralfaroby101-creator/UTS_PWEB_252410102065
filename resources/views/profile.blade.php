@extends('layouts.app')

@section('title', 'Profile - Sego Cokot')

@section('content')
<div class="max-w-md mx-auto px-4 py-8">

    <div class="rounded-2xl shadow-lg overflow-hidden">

        {{-- BAGIAN ATAS (header profil) --}}
        <div class="bg-orange-400 py-10 text-center">

            {{-- Avatar Foto --}}
            <div class="w-24 h-24 mx-auto mb-3">
                <img src="{{ asset('images/fotoku.jpg') }}" alt="Foto {{ $username }}" class="w-full h-full object-cover rounded-full border-4 border-white shadow-md">
            </div>

            {{-- Nama dari parameter --}}
            <h1 class="text-2xl font-bold text-white">{{ ucfirst($username) }}</h1>

            <p class="text-white/80 text-sm mt-1">Pengelola Nasi Cokot Ayam Suwir</p>
        </div>

        {{-- BAGIAN BAWAH (informasi usaha dari Controller) --}}
        <div class="bg-white p-6">

            <h2 class="text-lg font-bold text-orange-500 mb-2">Informasi Usaha</h2>

            <div class="flex justify-between py-3 border-b text-sm">
                <span class="text-gray-500">Nama Usaha</span>
                <span class="font-bold text-gray-900">{{ $info_usaha['nama_usaha'] }}</span>
            </div>

            <div class="flex justify-between py-3 border-b text-sm">
                <span class="text-gray-500">Jenis Usaha</span>
                <span class="font-bold text-gray-900">{{ $info_usaha['jenis_usaha'] }}</span>
            </div>

            <div class="flex justify-between py-3 border-b text-sm">
                <span class="text-gray-500">Jam Operasional</span>
                <span class="font-bold text-gray-900">{{ $info_usaha['jam_buka'] }}</span>
            </div>

            <div class="flex justify-between py-3 text-sm">
                <span class="text-gray-500">Harga Mulai</span>
                <span class="font-bold text-gray-900">{{ $info_usaha['harga_mulai'] }}</span>
            </div>

        </div>

    </div>

</div>
@endsection