<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Alat Gunung - M.A OUTDOR Rent</title>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f4f6f9; padding: 40px; margin: 0; }
        .container { max-width: 500px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 25px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #34495e; font-weight: bold; }
        input[type="text"], input[type="number"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        .btn-submit { width: 100%; padding: 12px; background-color: #27ae60; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; font-weight: bold; margin-top: 10px; }
        .btn-submit:hover { background-color: #219653; }
        .btn-back { display: block; text-align: center; margin-top: 15px; color: #7f8c8d; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Alat Gunung Baru</h2>
        
        <form action="/product/store" method="POST">
            @csrf 
            
            <div class="form-group">
                <label>Nama Alat Gunung</label>
                <input type="text" name="nama_alat" placeholder="Contoh: Kompor Portable" required>
            </div>

            <div class="form-group">
                <label>Harga Sewa / Hari (Rp)</label>
                <input type="number" name="harga_sewa" placeholder="Contoh: 10000" required>
            </div>

            <div class="form-group">
                <label>Jumlah Stok</label>
                <input type="number" name="stok" placeholder="Contoh: 5" required>
            </div>

            <button type="submit" class="btn-submit">Simpan Alat Gunung</button>
            <a href="/" class="btn-back">← Kembali ke Daftar</a>
        </form>
    </div>
</body>
</html>