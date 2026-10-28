<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul', 'Toko Ibrahim')</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f3f6fb; color: #202938; }
        header { background: #163b65; color: white; padding: 22px 16px; }
        header h1 { margin: 0 0 12px; font-size: 25px; }
        nav { display: flex; flex-wrap: wrap; gap: 10px; }
        nav a { color: white; text-decoration: none; background: #285783; padding: 9px 12px; border-radius: 7px; }
        main { max-width: 980px; margin: 22px auto; padding: 0 14px; min-height: 55vh; }
        .card { background: white; padding: 18px; margin-bottom: 16px; border-radius: 12px; box-shadow: 0 2px 8px #172b4d12; }
        h2 { margin-top: 0; color: #163b65; }
        .muted { color: #5b6574; }
        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(190px, 1fr)); gap: 12px; }
        .stat { background: #edf5ff; border-left: 4px solid #2874b9; padding: 14px; border-radius: 8px; }
        .stat strong { display: block; margin-top: 7px; font-size: 18px; }
        .table-wrap { overflow-x: auto; background: white; border-radius: 10px; }
        table { width: 100%; border-collapse: collapse; min-width: 620px; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #e4e9f0; }
        th { background: #eaf1f9; }
        .badge { display: inline-block; border-radius: 20px; padding: 5px 9px; font-size: 12px; font-weight: bold; }
        .green { background: #d8f5e3; color: #176438; }
        .yellow { background: #fff0c2; color: #795600; }
        .red { background: #ffe0e0; color: #9b2222; }
        .button { display: inline-block; padding: 9px 12px; border-radius: 7px; background: #1769aa; color: white; text-decoration: none; }
        .button.secondary { background: #596579; }
        footer { text-align: center; padding: 18px 12px; background: #163b65; color: white; font-size: 14px; }
        .receipt { border: 2px dashed #aab7c8; }
        @media (max-width: 480px) { header h1 { font-size: 22px; } main { margin-top: 14px; } }
    </style>
</head>
<body>
<header>
    <h1>Toko Ibrahim</h1>
    <nav>
        <a href="{{ route('toko.beranda') }}">Beranda</a>
        <a href="{{ route('produk.index') }}">Produk</a>
    </nav>
</header>
<main>
    @yield('isi')
</main>
<footer>
    Nama: Ibrahim Maulana R | No. Absen: 15
</footer>
</body>
</html>
