@extends('layouts.app')

@section('judul', 'Informasi Pembelian - Toko Ibrahim')

@section('isi')
    <section class="card">
        <h2>Informasi Pembelian</h2>
        <p><span class="badge red">{{ $pesan }}</span></p>
        <p>Pembelian belum dapat diproses. Silakan periksa produk dan jumlah pembelian.</p>
        <a class="button" href="{{ route('produk.index') }}">Kembali ke daftar produk</a>
    </section>
@endsection
