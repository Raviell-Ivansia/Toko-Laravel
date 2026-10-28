@extends('layouts.app')

@section('judul', 'Struk Pembelian - Toko Ibrahim')

@section('isi')
    <section class="card receipt">
        <h2>Struk Pembelian</h2>
        <p class="muted">Toko Ibrahim</p>
        <hr>
        <p><strong>Nama produk:</strong> {{ $produk['nama'] }}</p>
        <p><strong>Harga satuan:</strong> Rp {{ number_format($produk['harga'], 0, ',', '.') }}</p>
        <p><strong>Jumlah:</strong> {{ $jumlah }}</p>
        <p><strong>Subtotal:</strong> Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
        <p><strong>Diskon:</strong> Rp {{ number_format($diskon, 0, ',', '.') }}
            @if ($diskon > 0)
                (10%)
            @else
                (0%)
            @endif
        </p>
        <hr>
        <h2>Total bayar: Rp {{ number_format($totalBayar, 0, ',', '.') }}</h2>
        <p class="muted">Terima kasih telah berbelanja di Toko Ibrahim.</p>
        <a class="button" href="{{ route('produk.index') }}">Kembali ke daftar produk</a>
    </section>
@endsection
