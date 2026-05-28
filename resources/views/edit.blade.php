<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Alat Outdoor | Foresta Premium</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            background: linear-gradient(rgba(11, 12, 14, 0.7), rgba(11, 12, 14, 0.85)), 
                        url('https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #ffffff !important; 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .back-link {
            color: #ffffff !important;
            opacity: 0.7;
            font-weight: 500;
            text-decoration: none;
            font-size: 0.85rem;
            transition: all 0.2s;
        }
        .back-link:hover {
            opacity: 1;
            color: #4ade80 !important;
        }
        
        .form-card { 
            background-color: #1e2533 !important; 
            border: 2px solid #3b4252 !important; 
            border-radius: 24px; 
            padding: 40px; 
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.8);
        }

        .form-label-custom {
            color: #ffffff !important;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        .form-control { 
            background-color: #ffffff !important; 
            border: 2px solid #cbd5e1 !important; 
            color: #0f172a !important; 
            border-radius: 12px !important; 
            font-weight: 600 !important;
            padding: 12px 16px !important;
            transition: all 0.2s ease;
        }

        .form-control:focus { 
            background-color: #ffffff !important;
            border-color: #eab308 !important; 
            box-shadow: 0 0 0 4px rgba(234, 179, 8, 0.3) !important; 
            color: #0f172a !important;
        }

        .btn-update { 
            background: linear-gradient(135deg, #eab308, #ca8a04) !important;
            color: #ffffff !important; 
            font-weight: 700 !important; 
            letter-spacing: 0.5px;
            border-radius: 12px !important; 
            border: none !important; 
            padding: 14px !important;
            transition: all 0.3s ease;
        }
        
        .btn-update:hover { 
            background: linear-gradient(135deg, #facc15, #eab308) !important;
            box-shadow: 0 10px 25px rgba(234, 179, 8, 0.4) !important;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container py-5" style="max-width: 580px;">
        <div class="mb-4 text-start">
            <a href="/admin" class="back-link">← Batal & Kembali</a>
            <h2 class="fw-bold mt-3 text-warning" style="letter-spacing: -0.5px;">Edit Data Alat</h2>
            <p class="small text-muted" style="color: #cbd5e1 !important;">Perbarui tarif harga sewa harian atau sisa persediaan unit logistik.</p>
        </div>

        <div class="form-card">
            <form action="{{ url('/product/'.$product->id.'/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label-custom d-block">NAMA ALAT KELENGKAPAN</label>
                    <input type="text" class="form-control" name="nama_alat" value="{{ $product->nama_alat }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label-custom d-block">HARGA SEWA / HARI (RP)</label>
                    <input type="number" class="form-control" name="harga_sewa" value="{{ $product->harga_sewa }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label-custom d-block">STOK BARANG (UNIT)</label>
                    <input type="number" class="form-control" name="stok" value="{{ $product->stok }}" required>
                </div>

                <div class="mb-4">
                    <label class="form-label-custom d-block">GANTI GAMBAR PRODUK</label>
                    <input type="file" class="form-control" name="gambar" accept="image/*">
                    @if(isset($product->gambar) && $product->gambar)
                        <div class="text-warning mt-2 small fw-semibold">File sekarang: {{ $product->gambar }}</div>
                    @endif
                </div>

                <button type="submit" class="btn btn-update w-100 shadow-sm mt-2">Perbarui Data Alat</button>
            </form>
        </div>
    </div>
</body>
</html>