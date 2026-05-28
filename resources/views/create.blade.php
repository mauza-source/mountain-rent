<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Alat Outdoor | Foresta Premium</title>
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
        
        /* BOKS UTAMA DIBUAT LEBIH TERANG DIKIT DAN KONTRAS */
        .form-card { 
            background-color: #1e2533 !important; /* Menaikkan warna dasar card biar tidak terlalu hitam */
            border: 2px solid #3b4252 !important; /* Border diperjelas abu terang */
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

        /* BOKS INPUT BERUBAH TOTAL JADI PUTIH BERSIH / TERANG BIAR JELAS KELIHAN */
        .form-control { 
            background-color: #ffffff !important; /* Dipaksa jadi background putih bersih */
            border: 2px solid #cbd5e1 !important; 
            color: #0f172a !important; /* Teks ketikan lu jadi hitam tajam */
            border-radius: 12px !important; 
            font-weight: 600 !important;
            padding: 12px 16px !important;
            transition: all 0.2s ease;
        }

        /* EFEK PAS LU KLIK KURSOR DI INPUT */
        .form-control:focus { 
            background-color: #ffffff !important;
            border-color: #22c55e !important; 
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.3) !important; 
            color: #0f172a !important;
        }

        /* PLACEHOLDER / CONTOH TEKS DI DALAM INPUT JADI ABU JELAS */
        .form-control::placeholder {
            color: #64748b !important; /* Teks contoh jadi abu-abu gelap kontras di atas bg putih */
            font-weight: 500 !important;
        }

        /* Tombol upload file bawaan */
        .form-control::file-selector-button {
            background-color: #1e293b !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 6px !important;
            padding: 4px 12px !important;
            margin-right: 10px !important;
        }

        /* TOMBOL SIMPAN GREEN GLOW */
        .btn-save { 
            background: linear-gradient(135deg, #22c55e, #16a34a) !important;
            color: #ffffff !important; 
            font-weight: 700 !important; 
            letter-spacing: 0.5px;
            border-radius: 12px !important; 
            border: none !important; 
            padding: 14px !important;
            transition: all 0.3s ease;
        }
        
        .btn-save:hover { 
            background: linear-gradient(135deg, #4ade80, #22c55e) !important;
            box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4) !important;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container py-5" style="max-width: 580px;">
        <div class="mb-4 text-start">
            <a href="/admin" class="back-link">← Kembali ke Dashboard</a>
            <h2 class="fw-bold mt-3 text-white" style="letter-spacing: -0.5px;">Tambah Alat Baru</h2>
            <p class="small text-muted" style="color: #cbd5e1 !important;">Lengkapi detail spesifikasi logistik outdoor dengan standar premium.</p>
        </div>

        <div class="form-card">
            <form action="{{ url('/product/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label-custom d-block">NAMA ALAT KELENGKAPAN</label>
                    <input type="text" class="form-control" name="nama_alat" placeholder="Merek, tipe, atau kapasitas alat..." required>
                </div>

                <div class="mb-3">
                    <label class="form-label-custom d-block">HARGA SEWA / HARI (RP)</label>
                    <input type="number" class="form-control" name="harga_sewa" placeholder="Nominal tanpa titik (misal: 50000)" required>
                </div>

                <div class="mb-3">
                    <label class="form-label-custom d-block">STOK BARANG (UNIT)</label>
                    <input type="number" class="form-control" name="stok" placeholder="Jumlah unit yang siap sewa..." required>
                </div>

                <div class="mb-4">
                    <label class="form-label-custom d-block">UPLOAD GAMBAR PRODUK</label>
                    <input type="file" class="form-control" name="gambar" accept="image/*">
                    <div class="mt-2" style="font-size: 0.75rem; color: #cbd5e1 !important;">*Kosongkan jika ingin memakai visual jalan gunung default.</div>
                </div>

                <button type="submit" class="btn btn-save w-100 shadow-sm mt-2">Simpan ke Katalog</button>
            </form>
        </div>
    </div>
</body>
</html>