<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Nama: Ibrahim Maulana R | No. Absen: 15
class TokoController extends Controller
{
    private function daftarProduk(): array
    {
        return [
            ['id' => 1, 'nama' => 'Headset BassPro', 'harga' => 75000, 'stok' => 8],
            ['id' => 2, 'nama' => 'Mouse KlikMax', 'harga' => 45000, 'stok' => 3],
            ['id' => 3, 'nama' => 'Keyboard NeoType', 'harga' => 150000, 'stok' => 0],
            ['id' => 4, 'nama' => 'Kabel Data Flexi', 'harga' => 25000, 'stok' => 12],
            ['id' => 5, 'nama' => 'Speaker MiniBoom', 'harga' => 120000, 'stok' => 5],
            ['id' => 6, 'nama' => 'Powerbank DayaPlus', 'harga' => 200000, 'stok' => 2],
        ];
    }

    public function beranda()
    {
        $produk = $this->daftarProduk();
        $jumlahJenis = count($produk);
        $totalNilaiStok = 0;

        foreach ($produk as $item) {
            $totalNilaiStok += $item['harga'] * $item['stok'];
        }

        $produkTermurah = $produk[0];
        $produkTermahal = $produk[0];

        foreach ($produk as $item) {
            if ($item['harga'] < $produkTermurah['harga']) {
                $produkTermurah = $item;
            }
            if ($item['harga'] > $produkTermahal['harga']) {
                $produkTermahal = $item;
            }
        }

        return view('beranda', [
            'namaToko' => 'Toko Ibrahim',
            'jumlahJenis' => $jumlahJenis,
            'totalNilaiStok' => $totalNilaiStok,
            'produkTermurah' => $produkTermurah,
            'produkTermahal' => $produkTermahal,
        ]);
    }

    public function produk()
    {
        return view('produk.index', [
            'daftarProduk' => $this->daftarProduk(),
        ]);
    }

    public function detail($id)
    {
        $produk = $this->daftarProduk();
        $produkDitemukan = null;

        foreach ($produk as $item) {
            if ($item['id'] == $id) {
                $produkDitemukan = $item;
                break;
            }
        }

        return view('produk.detail', [
            'produk' => $produkDitemukan,
        ]);
    }

    public function beli($id, $jumlah)
    {
        $produkDitemukan = null;

        foreach ($this->daftarProduk() as $item) {
            if ($item['id'] == $id) {
                $produkDitemukan = $item;
                break;
            }
        }

        if (!$produkDitemukan) {
            return view('pembelian.error', [
                'pesan' => 'Produk tidak ditemukan.',
            ]);
        }

        if ((int) $jumlah < 1) {
            return view('pembelian.error', [
                'pesan' => 'Jumlah pembelian harus minimal 1.',
            ]);
        }

        if ((int) $jumlah > $produkDitemukan['stok']) {
            return view('pembelian.error', [
                'pesan' => 'Stok tidak cukup.',
            ]);
        }

        $subtotal = $produkDitemukan['harga'] * (int) $jumlah;
        $diskon = $subtotal >= 100000 ? $subtotal * 0.10 : 0;
        $totalBayar = $subtotal - $diskon;

        return view('pembelian.struk', [
            'produk' => $produkDitemukan,
            'jumlah' => (int) $jumlah,
            'subtotal' => $subtotal,
            'diskon' => $diskon,
            'totalBayar' => $totalBayar,
        ]);
    }
}
