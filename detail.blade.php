@extends('layouts.app')

@section('judul', 'Detail Produk - Toko Ibrahim')

@section('isi')
    <section class="card">
        @if ($produk)
            <h2>Detail Produk</h2>
            <p><strong>ID Produk:</strong> {{ $produk['id'] }}</p>
            <p><strong>Nama:</strong> {{ $produk['nama'] }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($produk['harga'], 0, ',', '.') }}</p>
            <p><strong>Stok:</strong> {{ $produk['stok'] }}</p>
            @if ($produk['stok'] > 0)
                <p><span class="badge green">Produk dapat dibeli</span></p>
            @else
                <p><span class="badge red">Stok habis</span></p>
            @endif
            <a class="button" href="{{ route('pembelian.struk', ['id' => $produk['id'], 'jumlah' => 1]) }}">Beli 1 unit (uji)</a>
        @else
            <h2>Produk tidak ditemukan</h2>
            <p class="muted">ID produk yang kamu cari tidak tersedia di daftar Toko Ibrahim.</p>
        @endif
        <p><a class="button secondary" href="{{ route('produk.index') }}">Kembali ke daftar produk</a></p>
    </section>
@endsection
