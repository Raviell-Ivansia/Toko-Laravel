@extends('layouts.app')

@section('judul', 'Beranda - Toko Ibrahim')

@section('isi')
    <section class="card">
        <h2>Selamat datang di {{ $namaToko }}!</h2>
        <p class="muted">Temukan aksesori teknologi pilihan dengan harga bersahabat dan informasi stok yang jelas.</p>
        <a class="button" href="{{ route('produk.index') }}">Lihat Daftar Produk</a>
    </section>

    <section class="card">
        <h2>Ringkasan Toko</h2>
        <div class="stats">
            <div class="stat">
                Jumlah jenis produk
                <strong>{{ $jumlahJenis }} produk</strong>
            </div>
            <div class="stat">
                Total nilai stok
                <strong>Rp {{ number_format($totalNilaiStok, 0, ',', '.') }}</strong>
            </div>
            <div class="stat">
                Produk termurah
                <strong>{{ $produkTermurah['nama'] }}</strong>
                <span>Rp {{ number_format($produkTermurah['harga'], 0, ',', '.') }}</span>
            </div>
            <div class="stat">
                Produk termahal
                <strong>{{ $produkTermahal['nama'] }}</strong>
                <span>Rp {{ number_format($produkTermahal['harga'], 0, ',', '.') }}</span>
            </div>
        </div>
    </section>
@endsection
