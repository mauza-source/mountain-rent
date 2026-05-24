<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Alat Gunung - M.A OUTDOOR Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h3 class="text-center border-bottom pb-3 mb-4 text-dark" style="font-weight: 700;">
                        <i class="fa-solid fa-folder-plus text-primary me-2"></i>Tambah Alat Baru
                    </h3>
                    
                    <form action="/product/store" method="POST">
                        @csrf 
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Nama Alat Gunung</label>
                            <input type="text" name="nama_alat" class="form-control form-control-lg" placeholder="Masukkan nama alat (cth: Tenda 4P)" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Harga Sewa / Hari (Rp)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light fw-bold text-secondary">Rp</span>
                                <input type="number" name="harga_sewa" class="form-control form-control-lg" placeholder="50000" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">Jumlah Stok</label>
                            <input type="number" name="stok" class="form-control form-control-lg" placeholder="10" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-lg w-100 mb-3 shadow-sm fw-bold">
                            <i class="fa-solid fa-floppy-disk me-2"></i>Simpan Alat Gunung
                        </button>
                        <a href="/" class="btn btn-light btn-md w-100 text-secondary border fw-semibold">
                            <i class="fa-solid fa-arrow-left me-2"></i>Kembali ke Daftar
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>