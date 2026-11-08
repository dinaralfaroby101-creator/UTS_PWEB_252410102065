@extends('layouts.app')
@section('title', 'Pengelolaan - Sego Cokot')
@section('content')
<div class="max-w-5xl mx-auto px-4 py-8">

    @include('partials.judul-halaman', [
        'judul'      => 'Pengelolaan Stok & Penjualan',
        'keterangan' => 'Data produk Sego Cokot, dikelola oleh ' . $username,
    ])

    {{-- overflow-x-auto supaya tabel bisa digeser di layar kecil --}}
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-orange-500 text-white">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama Produk</th>
                    <th class="px-4 py-3">Harga</th>
                    <th class="px-4 py-3">Stok</th>
                    <th class="px-4 py-3">Terjual</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($produk as $item)
                    <tr class="border-b even:bg-amber-50 hover:bg-orange-100">
                        {{-- $loop->iteration = nomor urut otomatis (1, 2, 3, ...) --}}
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        {{-- Mengambil isi array lewat nama kuncinya --}}
                        <td class="px-4 py-3 font-semibold">{{ $item['nama'] }}</td>
                        {{-- number_format = mengubah 5000 menjadi 5.000 --}}
                        <td class="px-4 py-3">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                        <td class="px-4 py-3">{{ $item['stok'] }}</td>
                        <td class="px-4 py-3">{{ $item['terjual'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection