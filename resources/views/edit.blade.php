<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Alat Gunung - M.A OUTDOOR Rent</title>
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
                        <i class="fa-solid fa-pen-to-square text-warning me-2"></i>Edit Data Alat
                    </h3>
                    
                    <form action="/product/update/{{ $product->id }}" method="POST">
                        @csrf 
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Nama Alat Gunung</label>
                            <input type="text" name="nama_alat" class="form-control form-control-lg" value="{{ $product->nama_alat }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Harga Sewa / Hari (Rp)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light fw-bold text-secondary">Rp</span>
                                <input type="number" name="harga_sewa" class="form-control form-control-lg" value="{{ $product->harga_sewa }}" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">Jumlah Stok</label>
                            <input type="number" name="stok" class="form-control form-control-lg" value="{{ $product->stok }}" required>
                        </div>

                        <button type="submit" class="btn btn-warning text-white btn-lg w-100 mb-3 shadow-sm fw-bold">
                            <i class="fa-solid fa-rotate me-2"></i>Update Alat Gunung
                        </button>
                        <a href="/" class="btn btn-light btn-md w-100 text-secondary border fw-semibold">
                            <i class="fa-solid fa-xmark me-2"></i>Batal / Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>