<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.A OUTDOR Rent - Penyewaan Alat Gunung</title>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f4f6f9; padding: 40px; margin: 0; }
        .container { max-width: 850px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; text-align: center; margin-bottom: 5px; }
        .subtitle { text-align: center; color: #7f8c8d; margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #2c3e50; color: white; }
        tr:hover { background-color: #f5f5f5; }
        .btn-edit { background-color: #f39c12; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-size: 13px; font-weight: bold; margin-right: 5px; }
        .btn-edit:hover { background-color: #d35400; }
        .btn-delete { background-color: #e74c3c; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-size: 13px; font-weight: bold; }
        .btn-delete:hover { background-color: #c0392b; }
    </style>
</head>
<body>
    <div class="container">
        <h1>M.A OUTDOR Rent</h1>
        <p class="subtitle">Daftar Alat Gunung yang Tersedia</p>

        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 12px; border-radius: 5px; margin-bottom: 20px; text-align: center; font-weight: bold;">
                {{ session('success') }}
            </div>
        @endif

        <div style="text-align: right; margin-bottom: 15px;">
            <a href="/product/create" style="background-color: #2980b9; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold;">+ Tambah Alat Baru</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alat</th>
                    <th>Harga Sewa / Hari</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_alat }}</td>
                    <td>Rp {{ number_format($item->harga_sewa, 0, ',', '.') }}</td>
                    <td>{{ $item->stok }} unit</td>
                    <td>
                        <a href="/product/edit/{{ $item->id }}" class="btn-edit">Edit</a>
                        
                        <a href="/product/delete/{{ $item->id }}" class="btn-delete" onclick="return confirm('Yakin ingin menghapus alat ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>