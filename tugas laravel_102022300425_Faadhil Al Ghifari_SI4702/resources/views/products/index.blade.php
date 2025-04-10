<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: left; }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
