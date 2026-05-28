<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.A OUTDOOR | Premium Trekking & Camping Gear Rental</title>
    
    <!-- Bootstrap 5 + Font Awesome Icons + Google Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f8fafc;
            color: #1e293b;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* HEADER FIXED GLASSMORPHISM FULL WIDTH */
        .sticky-header-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgba(12, 31, 22, 0.55); 
            backdrop-filter: blur(14px); 
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(82, 183, 136, 0.15); 
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
        }

        /* 1. TOP BAR STYLING */
        .top-bar-custom {
            background-color: rgba(0, 0, 0, 0.2); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 8px 0;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.95);
        }
        .top-bar-info i {
            color: #5cf772 !important; 
            text-shadow: 0 0 8px rgba(92, 247, 114, 0.4);
        }
        .btn-top-promo {
            background-color: #5cf772; 
            color: #114217;
            font-weight: 700;
            font-size: 0.75rem;
            padding: 4px 14px;
            border-radius: 20px;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }
        .btn-top-promo:hover {
            background-color: #ffffff;
            color: #1b4332;
            transform: translateY(-1px);
        }

        /* 2. NAVBAR STYLING */
        .foresta-nav {
            background-color: transparent !important; 
            padding: 10px 0;
        }
        .foresta-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.25s ease;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2); 
        }
        .foresta-nav .nav-link:hover {
            color: #5cf772 !important; 
        }

        /* FITUR DROPDOWN MENU KATEGORI CUSTOM ALA M.A OUTDOOR */
        .dropdown-menu-custom {
            background-color: #112a20 !important; /* Warna gelap emerald padat */
            border: 1px solid rgba(82, 183, 136, 0.3) !important;
            border-radius: 12px !important;
            padding: 10px 0 !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4) !important;
            max-height: 400px;
            overflow-y: auto;
            width: 260px;
        }
        .dropdown-menu-custom .dropdown-item {
            color: rgba(255, 255, 255, 0.85) !important;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 10px 20px;
            transition: all 0.2s ease;
        }
        .dropdown-menu-custom .dropdown-item:hover {
            background-color: #1b4332 !important;
            color: #5cf772 !important;
            padding-left: 25px;
        }
        /* Scrollbar kustom untuk dropdown kategori */
        .dropdown-menu-custom::-webkit-scrollbar {
            width: 6px;
        }
        .dropdown-menu-custom::-webkit-scrollbar-thumb {
            background: #2d6a4f;
            border-radius: 10px;
        }

        .btn-masuk {
            color: #ffffff !important;
            font-weight: 600;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.2s;
        }
        .btn-masuk:hover {
            color: #5cf772 !important;
        }
        .cart-box {
            background-color: #ffffff;
            color: #1b4332;
            padding: 8px 14px;
            border-radius: 8px;
            position: relative;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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

        /* 3. HERO SECTION */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center 60%;
            background-attachment: scroll; 
            padding: 200px 0 170px 0; 
            color: #ffffff;
        }
        .hero-sub {
            color: #5cf772; 
            font-weight: 700;
            font-size: 1.1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .hero-title {
            font-size: 3.3rem;
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.2;
        }
        .checklist-item {
            font-weight: 600;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.15);
            padding: 6px 16px;
            border-radius: 30px;
            backdrop-filter: blur(4px);
        }
        .checklist-item i {
            color: #5cf772;
        }

        /* 4. FLOATING SEARCH BAR */
        .floating-search-bar {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            margin-top: -65px;
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
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .search-input-text {
            font-weight: 600;
            color: #1e293b;
            border: none;
            padding: 0;
            width: 100%;
            font-size: 0.95rem;
            background: transparent;
        }
        .search-input-text:focus {
            outline: none;
        }
        .btn-foresta-search {
            background-color: #1b4332; 
            color: #ffffff;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            padding: 14px 28px;
            width: 100%;
            transition: all 0.2s;
        }
        .btn-foresta-search:hover {
            background-color: #40916c;
            transform: translateY(-1px);
        }

        /* 5. BRAND BADGES SECTION */
        .brand-section {
            padding: 60px 0 40px 0;
            background-color: #ffffff;
        }
        .brand-title {
            font-size: 1.8rem;
            font-weight: 800;
            color: #0f172a;
        }
        .brand-badge-custom {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #475569;
            font-size: 1rem;
            letter-spacing: 0.5px;
            transition: all 0.2s;
        }
        .brand-badge-custom:hover {
            background-color: #1b4332;
            color: #ffffff;
            border-color: #1b4332;
            transform: translateY(-2px);
        }

        /* 6. KATALOG STYLING */
        .section-header-flex {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 30px;
        }
        .btn-view-more {
            background-color: #1b4332;
            color: white;
            font-weight: 600;
            padding: 10px 22px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s;
        }
        .btn-view-more:hover {
            background-color: #40916c;
            color: white;
        }
        .product-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }
        .product-img-box {
            height: 230px;
            background-color: #f1f5f9;
            overflow: hidden;
        }
        .btn-order {
            background-color: #1b4332;
            color: #ffffff;
            font-weight: 600;
            border-radius: 10px;
            text-align: center;
            padding: 12px;
            display: block;
            text-decoration: none;
            transition: background 0.2s;
        }
        .btn-order:hover {
            background-color: #112a20;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <!-- PEMBUNGKUS HEADER GLASSMORPHISM FULL-WIDTH POJOK -->
    <div class="sticky-header-wrapper">
        
        <!-- ROW 1: TOP BAR KONTAK -->
        <div class="top-bar-custom w-100">
            <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
                <div class="top-bar-info d-flex gap-4">
                    <span><i class="fa-solid fa-phone me-2"></i> 62 896-0698-1787</span>
                    <span><i class="fa-solid fa-envelope me-2"></i> maoutdoorrent@gmail.com</span>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <span class="small">Lebih dari <b style="color: #5cf772 !important;">500+</b> perlengkapan muncak steril</span>
                    <a href="#katalog-section" class="btn-top-promo">Lihat <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <!-- ROW 2: NAVBAR UTAMA -->
        <nav class="navbar navbar-expand-lg foresta-nav">
            <div class="container-fluid px-4">
                <a class="navbar-brand d-flex align-items-center gap-2 text-white fw-bold" href="#">
                    <!-- SVG LOGO GUNUNG REALISTIS -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 70" width="56" height="30" fill="none" class="text-white" style="display: inline-block; vertical-align: middle;">
                        <path d="M10 60 L38 28 L54 44 L68 28 L82 42 L112 12 L150 60 Z" fill="rgba(255,255,255,0.05)" stroke="#ffffff" stroke-width="2.5" stroke-linejoin="round"/>
                        <path d="M30 38 L54 18 L88 48" stroke="#ffffff" stroke-width="1.8" stroke-linejoin="round" stroke-linecap="round" opacity="0.8"/>
                        <path d="M85 30 L112 12 L128 32" stroke="#ffffff" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"/>
                        <path d="M38 28 L44 40 M68 28 L64 36 M112 12 L104 32 M112 12 L118 28" stroke="#ffffff" stroke-width="1.2" opacity="0.7"/>
                        <path d="M18 60 L18 52 M24 60 L24 49 M30 60 L30 53 M36 60 L36 48 M42 60 L42 51 M48 60 L48 54 M54 60 L54 49 M60 60 L60 52 M66 60 L66 47 M72 60 L72 53 M78 60 L78 50 M84 60 L84 54 M90 60 L90 48 M96 60 L96 52 M102 60 L102 55 M108 60 L108 49 M114 60 L114 53 M120 60 L120 47 M126 60 L126 51 M132 60 L132 54 M138 60 L138 49 M144 60 L144 53" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="5" y1="60" x2="155" y2="60" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                    <span style="letter-spacing: 0.5px; font-size: 1.25rem; margin-left: 2px; font-weight: 800;"><span style="color: #5cf772;">M.A</span> OUTDOOR</span>
                </a>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-4 gap-2">
                        <!-- FITUR DROPDOWN KATEGORI ALAT AKTIF ALA FORESTA -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kategori Alat
                            </a>
                            <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#katalog-section">Perlengkapan Masak & Makan</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Tenda 6 Orang</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Tenda 4 Orang</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Tenda 2-3 Orang</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Trekking Pole</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Sepatu & Sandal Trekking</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Semi Carrier 35L - 45L</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Sleeping Bag & Matras</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Jaket Puffer / Down</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Kamera & Drone & Mic</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Power Bank & Kabel</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Jaket Outer Layer</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Aksesoris Hiking & Camping</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Meja & Kursi</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Jaket Midlayer</a></li>
                                <li><a class="dropdown-item" href="#katalog-section">Lampu & Senter Kepala</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#katalog-section">Panduan Sewa</a></li>
                        <li class="nav-item"><a class="nav-link" href="#katalog-section">Hubungi Kami</a></li>
                    </ul>
                </div>

                <div class="d-flex align-items-center gap-4">
                    <a href="/admin" class="btn-masuk"><i class="fa-regular fa-user me-1"></i> Dashboard</a>
                    <a href="#" class="text-decoration-none">
                        <div class="cart-box">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <span class="cart-badge">0</span>
                        </div>
                    </a>
                </div>
            </div>
        </nav>

    </div>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-start">
                    <div class="hero-sub mb-2">Eksplorasi Alam Bebas Tanpa Batas</div>
                    <h1 class="hero-title mb-4">Sewa Perlengkapan Outdoor<br>Premium & Terpercaya</h1>
                    
                    <div class="d-flex flex-wrap gap-3 mt-2">
                        <div class="checklist-item"><i class="fa-solid fa-shield-halved"></i> Alat Higienis & Steril</div>
                        <div class="checklist-item"><i class="fa-solid fa-bolt"></i> Transaksi Praktis Cepat</div>
                        <div class="checklist-item"><i class="fa-solid fa-tags"></i> Harga Kompetitif</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOATING FILTER BOOKING -->
    <section class="container">
        <div class="floating-search-bar">
            <div class="row align-items-center g-3">
                <div class="col-md-3 search-divider">
                    <div class="input-label">Destinasi Gunung</div>
                    <input type="text" class="search-input-text" placeholder="Contoh: Merbabu, Gede, Prau">
                </div>
                <div class="col-md-2 search-divider">
                    <div class="input-label">Durasi Trip</div>
                    <select class="search-input-text">
                        <option>2 Hari 1 Malam</option>
                        <option>3 Hari 2 Malam</option>
                        <option>4 Hari 3 Malam</option>
                    </select>
                </div>
                <div class="col-md-3 search-divider">
                    <div class="input-label">Tanggal Mulai Muncak</div>
                    <div class="fw-bold text-dark small mt-1"><i class="fa-regular fa-calendar text-muted me-2"></i>Kam, 28 Mei 2026</div>
                </div>
                <div class="col-md-2 search-divider">
                    <div class="input-label">Kategori Gear</div>
                    <input type="text" class="search-input-text" placeholder="Tenda, carrier, dll...">
                </div>
                <div class="col-md-2">
                    <button class="btn-foresta-search d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-solid fa-circle-check"></i> Cek Kuota
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION BRAND LOGO BADGES -->
    <section class="brand-section">
        <div class="container">
            <h3 class="brand-title text-start mb-1">Brand Resmi</h3>
            <p class="text-muted text-start mb-4">Menyediakan deretan produsen alat muncak dengan standar mutu ekspedisi internasional.</p>
            
            <div class="row g-3 row-cols-2 row-cols-md-4 row-cols-lg-6">
                <div class="col"><div class="brand-badge-custom">EIGER GEAR</div></div>
                <div class="col"><div class="brand-badge-custom">DEUTER</div></div>
                <div class="col"><div class="brand-badge-custom">CONSINA</div></div>
                <div class="col"><div class="brand-badge-custom">NATUREHIKE</div></div>
                <div class="col"><div class="brand-badge-custom">AREI OUTDOOR</div></div>
                <div class="col"><div class="brand-badge-custom">OSPREY</div></div>
            </div>
        </div>
    </section>

    <!-- KATALOG UTAMA DARI DATABASE -->
    <main class="container my-5" id="katalog-section">
        <div class="section-header-flex">
            <div class="text-start">
                <h3 class="fw-bold text-dark mb-1">Pilihan Terbaik Minggu Ini!</h3>
                <p class="text-muted mb-0">Gear pilihan pendaki, siap temani petualanganmu di alam bebas.</p>
            </div>
            <div>
                <a href="#katalog-section" class="btn-view-more">Lihat Lainnya <i class="fa-solid fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach($products as $item)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card product-card h-100 d-flex flex-column">
                    <div class="product-img-box">
                        @if(isset($item->gambar) && $item->gambar && file_exists(public_path('uploads/' . $item->gambar)))
                            <img src="{{ asset('uploads/' . $item->gambar) }}" alt="{{ $item->nama_alat }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <img src="{{ asset('images/default_mountain.jpg') }}" alt="Default" style="width: 100%; height: 100%; object-fit: cover;">
                        @endif
                    </div>
                    
                    <div class="card-body p-4 d-flex flex-column flex-grow-1">
                        <h5 class="fw-bold text-dark mb-2" style="font-size: 1.1rem;">{{ $item->nama_alat }}</h5>
                        <div class="text-muted small mb-4">Kondisi siap muncak, telah melalui proses cuci steril higienis setelah pemakaian.</div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top mb-3">
                            <div>
                                <span class="text-muted d-block small" style="font-size: 0.7rem;">TARIF / HARI</span>
                                <span class="fw-bold text-success fs-5">Rp {{ number_format($item->harga_sewa, 0, ',', '.') }}<span class="text-muted fw-normal" style="font-size: 0.75rem;">/hari</span></span>
                            </div>
                            <div class="text-end">
                                <span class="badge bg-success-subtle text-success border px-2 py-1.5" style="font-size: 0.8rem;">Ready: {{ $item->stok }} Unit</span>
                            </div>
                        </div>
                        
                        <a href="https://wa.me/6289606981787?text=Halo%20MA%20Outdoor%2C%20saya%20mau%20sewa%20*{{ urlencode($item->nama_alat) }}*" target="_blank" class="btn-order">
                            Sewa Sekarang
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="text-center py-4 bg-white border-top">
        <p class="small text-muted mb-0">&copy; 2026 M.A OUTDOOR. Built Custom & Authentic.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>