@extends('layouts.app')

@section('judul', 'Daftar Produk - Toko Ibrahim')

@section('isi')
    <section class="card">
        <h2>Daftar Produk</h2>
        <p class="muted">Berikut enam produk aksesori teknologi yang tersedia di Toko Ibrahim.</p>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarProduk as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                            <td>{{ $item['stok'] }}</td>
                            <td>
                                @if ($item['stok'] == 0)
                                    <span class="badge red">Habis</span>
                                @elseif ($item['stok'] <= 4)
                                    <span class="badge yellow">Menipis</span>
                                @else
                                    <span class="badge green">Tersedia</span>
                                @endif
                            </td>
                            <td><a class="button" href="{{ route('produk.detail', ['id' => $item['id']]) }}">Lihat</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
