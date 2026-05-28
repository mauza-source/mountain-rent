<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peralatan :: M.A OUTDOOR</title>
    
    <!-- Bootstrap 5 + Font Awesome Icons + Google Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2 family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f8fafc;
            color: #1e293b;
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding-top: 135px; /* Jarak agar konten tidak tertutup header transparan fixed */
        }

        /* HEADER FIXED GLASSMORPHISM FULL WIDTH POJOK */
        .sticky-header-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgba(12, 31, 22, 0.65); 
            backdrop-filter: blur(14px); 
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(82, 183, 136, 0.15); 
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
        }

        /* TOP BAR KONTAK */
        .top-bar-custom {
            background-color: rgba(0, 0, 0, 0.2); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 8px 0;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.95);
        }
        .top-bar-info i {
            color: #5cf772 !important; 
        }
        .btn-top-promo {
            background-color: #5cf772; 
            color: #114217;
            font-weight: 700;
            font-size: 0.75rem;
            padding: 4px 14px;
            border-radius: 20px;
            text-decoration: none;
            transition: all 0.2s;
        }

        /* NAVBAR */
        .foresta-nav {
            background-color: transparent !important; 
            padding: 10px 0;
        }
        .foresta-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .foresta-nav .nav-link:hover, .foresta-nav .active-nav {
            color: #5cf772 !important; 
        }
        .btn-masuk {
            color: #ffffff !important;
            font-weight: 600;
            text-decoration: none;
        }
        .cart-box {
            background-color: #ffffff;
            color: #1b4332;
            padding: 8px 14px;
            border-radius: 8px;
            position: relative;
            font-weight: 600;
        }
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #ef4444;
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 50%;
        }

        /* SMALL BANNER DAFTAR PERALATAN (COMPACT ALAMI) */
        .small-hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.55)), 
                        url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center 60%;
            padding: 60px 0 90px 0;
            color: #ffffff;
            text-center: center;
        }

        /* PANEL CARI FLOATING DI HALAMAN PRODUK */
        .product-search-bar {
            background-color: #ffffff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-top: -45px;
            position: relative;
            z-index: 20;
            border: 1px solid #e2e8f0;
        }
        .search-divider {
            border-right: 1px solid #e2e8f0;
        }
        .input-label {
            font-size: 0.75rem;
            font-weight: 700;
            color: #64748b;
            margin-bottom: 4px;
            text-transform: uppercase;
        }
        .search-inner-text {
            font-weight: 600;
            color: #1e293b;
            border: none;
            width: 100%;
            font-size: 0.9rem;
            background: transparent;
        }
        .search-inner-text:focus {
            outline: none;
        }
        .btn-action-search {
            background-color: #52b788;
            color: white;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            padding: 12px;
            width: 100%;
        }

        /* SIDEBAR KATEGORI KIRI BERGAYA CHECKBOX */
        .sidebar-card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 24px;
            position: sticky;
            top: 150px;
        }
        .sidebar-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .filter-group {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 5px;
        }
        .filter-checkbox-label {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 0;
            color: #475569;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: color 0.2s;
        }
        .filter-checkbox-label:hover {
            color: #1b4332;
        }
        .filter-checkbox-label input {
            accent-color: #1b4332;
            width: 16px;
            height: 16px;
        }

        /* INPUT SEARCH BAR TENGAH */
        .center-search-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 10px 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 24px;
        }
        .center-search-box input {
            border: none;
            width: 100%;
            font-size: 0.9rem;
            outline: none;
        }

        /* KATALOG PRODUK GRID */
        .grid-product-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            overflow: hidden;
            transition: all 0.2s;
        }
        .grid-product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.04);
        }
        .grid-img-box {
            height: 180px;
            background-color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }
        .grid-img-box img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }
        .btn-grid-order {
            background-color: #1b4332;
            color: white;
            font-weight: 600;
            text-decoration: none;
            padding: 8px;
            border-radius: 8px;
            display: block;
            text-align: center;
            font-size: 0.85rem;
            transition: background 0.2s;
        }
        .btn-grid-order:hover {
            background-color: #112a20;
            color: white;
        }
    </style>
</head>
<body>

    <!-- PEMBUNGKUS HEADER GLASSMORPHISM -->
    <div class="sticky-header-wrapper">
        <div class="top-bar-custom w-100">
            <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
                <div class="top-bar-info d-flex gap-4">
                    <span><i class="fa-solid fa-phone me-2"></i> 62 896-0698-1787</span>
                    <span><i class="fa-solid fa-envelope me-2"></i> maoutdoorrent@gmail.com</span>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <span class="small">Lebih dari <b style="color: #5cf772 !important;">500+</b> perlengkapan muncak steril</span>
                    <a href="#" class="btn-top-promo">Promo <i class="fa-solid fa-tags"></i></a>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg foresta-nav">
            <div class="container-fluid px-4">
                <a class="navbar-brand d-flex align-items-center gap-2 text-white fw-bold" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 70" width="56" height="30" fill="none" class="text-white">
                        <path d="M10 60 L38 28 L54 44 L68 28 L82 42 L112 12 L150 60 Z" fill="rgba(255,255,255,0.05)" stroke="#ffffff" stroke-width="2.5" stroke-linejoin="round"/>
                        <path d="M30 38 L54 18 L88 48" stroke="#ffffff" stroke-width="1.8" stroke-linejoin="round" opacity="0.8"/>
                        <path d="M85 30 L112 12 L128 32" stroke="#ffffff" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M18 60 L18 52 M24 60 L24 49 M30 60 L30 53 M36 60 L36 48 M42 60 L42 51 M48 60 L48 54 M54 60 L54 49 M60 60 L60 52 M66 60 L66 47 M72 60 L72 53 M78 60 L78 50 M84 60 L84 54 M90 60 L90 48 M96 60 L96 52 M102 60 L102 55 M108 60 L108 49 M114 60 L114 53 M120 60 L120 47 M126 60 L126 51 M132 60 L132 54 M138 60 L138 49 M144 60 L144 53" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="5" y1="60" x2="155" y2="60" stroke="#ffffff" stroke-width="2.5"/>
                    </svg>
                    <span style="letter-spacing: 0.5px; font-size: 1.25rem; font-weight: 800;"><span style="color: #5cf772;">M.A</span> OUTDOOR</span>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-4 gap-2">
                        <li class="nav-item"><a class="nav-link active-nav" href="#">Kategori Alat</a></li>
                        <li class="nav-item"><a class="nav-link" href="/">Panduan Sewa</a></li>
                        <li class="nav-item"><a class="nav-link" href="/">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-4">
                    <a href="/admin" class="btn-masuk"><i class="fa-regular fa-user me-1"></i> Dashboard</a>
                    <div class="cart-box"><i class="fa-solid fa-basket-shopping"></i><span class="cart-badge">0</span></div>
                </div>
            </div>
        </nav>
    </div>

    <!-- BANNER KECIL DAFTAR PERALATAN PERSIS SCREENSHOT -->
    <section class="small-hero-section text-center">
        <div class="container">
            <h2 class="fw-bold mb-2 fs-1" style="letter-spacing: -0.5px;">Daftar Peralatan</h2>
            <p class="opacity-75 small">Cari peralatan camping murah dan steril di sini.</p>
        </div>
    </section>

    <!-- FLOATING SEARCH BAR HALAMAN PRODUK -->
    <div class="container mb-5">
        <div class="product-search-bar">
            <div class="row align-items-center g-3">
                <div class="col-md-3 search-divider">
                    <div class="input-label">Tgl Ambil</div>
                    <div class="fw-bold small text-dark"><i class="fa-regular fa-calendar me-2 text-muted"></i>Kam, 28 Mei 2026</div>
                </div>
                <div class="col-md-3 search-divider">
                    <div class="input-label">Durasi Trip</div>
                    <select class="search-inner-text">
                        <option>3 Hari 2 Malam</option>
                        <option>5 Hari 4 Malam</option>
                    </select>
                </div>
                <div class="col-md-3 search-divider">
                    <div class="input-label">Maks. Pengembalian</div>
                    <div class="text-muted small fw-medium"><i class="fa-regular fa-calendar me-2"></i>Tentukan Tanggal</div>
                </div>
                <div class="col-md-3">
                    <button class="btn-action-search"><i class="fa-solid fa-magnifying-glass me-1"></i> Cari Unit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN BODY: SIDEBAR KATEGORI VS GRID KATALOG BARANG -->
    <div class="container-fluid px-4 mb-5">
        <div class="row g-4">
            
            <!-- SISI KIRI: SIDEBAR CHECKBOX FILTER KATEGORI -->
            <div class="col-12 col-lg-3">
                <div class="sidebar-card">
                    <div class="sidebar-title">
                        <span>Kategori</span>
                        <i class="fa-solid fa-chevron-down opacity-50 fs-6"></i>
                    </div>
                    <div class="filter-group">
                        <label class="filter-checkbox-label"><input type="checkbox"> Aksesoris Hiking & Camping</label>
                        <label class="filter-checkbox-label"><input type="checkbox"> Carrier 50L - 100L</label>
                        <label class="filter-checkbox-label"><input type="checkbox"> Tenda 4 Orang Dome</label>
                        <label class="filter-checkbox-label"><input type="checkbox"> Sleeping Bag & Matras</label>
                        <label class="filter-checkbox-label"><input type="checkbox"> Flysheet & Jas Hujan</label>
                        <label class="filter-checkbox-label"><input type="checkbox"> Trekking Pole Alat Makan</label>
                        <label class="filter-checkbox-label"><input type="checkbox"> Lampu & Senter Kepala</label>
                        <label class="filter-checkbox-label"><input type="checkbox"> Sepatu Gunung Premium</label>
                    </div>
                </div>
            </div>

            <!-- SISI KANAN: INPUT CARI BARANG & LOOPING PRODUK DARI DATABASE -->
            <div class="col-12 col-lg-9">
                
                <!-- Input Box Cari Barang Tengah -->
                <div class="center-search-box">
                    <i class="fa-solid fa-magnifying-glass text-muted"></i>
                    <input type="text" placeholder="Cari nama alat kelengkapan outdoor...">
                </div>

                <!-- Perulangan Card Data Database -->
                <div class="row g-3">
                    @foreach($products as $item)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="grid-product-card h-100 d-flex flex-column">
                            <div class="grid-img-box">
                                @if(isset($item->gambar) && $item->gambar && file_exists(public_path('uploads/' . $item->gambar)))
                                    <img src="{{ asset('uploads/' . $item->gambar) }}" alt="{{ $item->nama_alat }}">
                                @else
                                    <img src="{{ asset('images/default_mountain.jpg') }}" alt="Default">
                                @endif
                            </div>
                            <div class="p-3 d-flex flex-column flex-grow-1 text-start">
                                <h6 class="fw-bold text-dark text-truncate mb-1" style="font-size: 0.9rem;">{{ $item->nama_alat }}</h6>
                                <p class="text-muted small mb-3" style="font-size: 0.75rem;">Stok Tersedia: {{ $item->stok }} Unit</p>
                                
                                <div class="mt-auto">
                                    <div class="text-success fw-bold small mb-2" style="font-size: 0.85rem;">
                                        Rp {{ number_format($item->harga_sewa, 0, ',', '.') }}<span class="text-muted fw-normal" style="font-size: 0.7rem;">/hari</span>
                                    </div>
                                    <a href="https://wa.me/6289606981787?text=Saya%20ingin%20sewa%20{{ urlencode($item->nama_alat) }}" target="_blank" class="btn-grid-order">
                                        Sewa Gear
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>