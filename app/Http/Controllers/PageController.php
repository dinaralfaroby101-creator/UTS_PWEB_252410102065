<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // SUMBER DATA TUNGGAL: semua data produk ditulis di satu tempat ini saja.
    private function dataProduk()
    {
        return [
            ['nama' => 'Nasi Cokot Ayam Suwir Normal',  'harga' => 5000, 'stok' => 30, 'terjual' => 100],
            ['nama' => 'Nasi Cokot Sosis Telur Normal', 'harga' => 5000, 'stok' => 10, 'terjual' => 52],
            ['nama' => 'Nasi Cokot Ayam Suwir Jumbo',   'harga' => 8000, 'stok' => 20, 'terjual' => 60],
            ['nama' => 'Nasi Cokot Sosis Telur Jumbo',  'harga' => 8000, 'stok' => 10, 'terjual' => 50],
        ];
    }

    // Menampilkan halaman form login
    public function showLogin()
    {
        return view('login');
    }

    // Memproses form login (dikirim dengan method POST)
    public function login(Request $request)
    {
        // Ambil isi input "username" dan "password" dari form
        $username = $request->input('username');
        $password = $request->input('password');

        // Cek apakah username dan password sesuai (data ditulis langsung, tanpa database)
        if ($username == 'dinar' && $password == 'segokotowner') {
            // Benar -> pindah ke dashboard sambil membawa username lewat URL
            return redirect()->route('dashboard', ['username' => $username]);
        }

        // Salah -> kembali ke halaman login membawa pesan error
        return back()->with('error', 'Username atau password salah!');
    }

    // Menampilkan halaman dashboard
    public function dashboard(Request $request)
    {
        // Ambil username dari URL (?username=...)
        $username = $request->query('username');

        // Kalau username kosong (misal URL dibuka langsung), kembali ke login
        if (!$username) {
            return redirect()->route('login');
        }

        // Ambil data produk dari fungsi private (sumber data yang sama dengan halaman pengelolaan)
        $produk = $this->dataProduk();

        // Siapkan variabel penampung hasil hitungan, awalnya semua 0
        $total_stok = 0;
        $total_terjual = 0;
        $total_pendapatan = 0;

        // count() = menghitung banyak isi array, berarti jumlah produk
        $jumlah_produk = count($produk);

        foreach ($produk as $item) {
            // Tambahkan stok produk ini ke total stok
            $total_stok += $item['stok'];

            // Tambahkan jumlah terjual produk ini ke total terjual
            $total_terjual += $item['terjual'];

            // Pendapatan 1 produk = harga x jumlah terjual, lalu ditambahkan ke total pendapatan
            $total_pendapatan += $item['harga'] * $item['terjual'];
        }

        return view('dashboard', compact(
            'username',
            'jumlah_produk',
            'total_stok',
            'total_terjual',
            'total_pendapatan'
        ));
    }

    // Menampilkan halaman pengelolaan
    public function pengelolaan(Request $request)
    {
        // Ambil username dari URL
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login');
        }

        // Ambil data produk dari fungsi private yang sama dengan dashboard
        $produk = $this->dataProduk();

        // Kirim $username dan $produk ke file pengelolaan.blade.php
        return view('pengelolaan', [
            'username' => $username,
            'produk'   => $produk,
        ]);
    }

    // Menampilkan halaman profile
    public function profile(Request $request)
    {
        // 1. Ambil username dari URL parameter
        $username = $request->query('username');

        // Jika username tidak ada di URL, tendang kembali ke halaman login
        if (!$username) {
            return redirect()->route('login');
        }

        $info_usaha = [
            'nama_usaha'  => 'Segokot',
            'jenis_usaha' => 'Kuliner (Nasi Cokot)',
            'jam_buka'    => '06.00 - 10.00 WIB',
            'harga_mulai' => 'Rp 5.000'
        ];

        return view('profile', compact('username', 'info_usaha'));
    }
}