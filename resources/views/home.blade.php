<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda :: M.A OUTDOOR | Sewa Tenda, Carrier & Gear Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; font-size: 24px; color: #a3e635 !important; }
        .hero-section { 
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1200&q=80'); 
            background-size: cover; 
            background-position: center; 
            min-height: 80vh;
            display: flex;
            align-items: center;
            color: white; 
        }
        .hero-card {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            border-radius: 20px;
            padding: 40px;
            max-width: 650px;
            margin: 0 auto;
        }
        .product-card { 
            border: none; 
            border-radius: 15px; 
            transition: transform 0.3s, box-shadow 0.3s; 
            overflow: hidden; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        }
        .product-card:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .btn-custom-green {
            background-color: #a3e635;
            color: #1e293b;
            font-weight: bold;
        }
        .btn-custom-green:hover {
            background-color: #84cc16;
            color: #1e293b;
        }
        .total-box {
            background-color: #f1f5f9;
            border-radius: 8px;
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            display: none;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fa-solid fa-mountain-sun me-2"></i>M.A OUTDOOR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-3">
                        <a class="nav-link active fw-semibold" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin" class="btn btn-custom-green px-4 shadow-sm">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <div class="hero-card shadow">
                <h1 class="display-4 fw-bold mb-3">Rental Alat Pendakian</h1>
                <p class="lead mb-4">Sewa alat outdoor terbaik untuk petualanganmu dengan harga terjangkau dan kualitas prima.</p>
                <a href="#katalog" class="btn btn-custom-green btn-lg px-5 shadow">Lihat Katalog Barang</a>
            </div>
        </div>
    </header>

    <section class="container py-5" id="katalog">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Katalog Perlengkapan Outdoor</h2>
            <p class="text-muted">Peralatan siap pakai untuk menemani perjalanan mendaki gunungmu</p>
            <div class="mx-auto" style="height: 4px; width: 60px; background-color: #a3e635; border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            @foreach($products as $item)
            <div class="col-md-4">
                <div class="card product-card h-100" id="item-card-{{ $item->id }}">
                    <img src="https://picsum.photos/500/350?random={{ $item->id }}" class="card-img-top" alt="Gear Outdoor" style="height: 220px; object-fit: cover;">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark mb-2">{{ $item->nama_alat }}</h5>
                        <p class="card-text text-muted small mb-3">Kondisi sangat bersih, terawat, dan siap digunakan untuk menghadapi medan jalur pendakian ekstrim.</p>
                        
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top mb-3">
                            <div>
                                <span class="text-muted d-block small">Harga Sewa:</span>
                                <span class="text-success fw-bold fs-5">Rp {{ number_format($item->harga_sewa, 0, ',', '.') }}<small class="text-muted fs-6">/hari</small></span>
                            </div>
                            <div>
                                @if($item->stok > 0)
                                    <span class="badge bg-success-subtle text-success border border-success px-2 py-2">Ready: {{ $item->stok }} Unit</span>
                                @else
                                    <span class="badge bg-danger-subtle text-danger border border-danger px-2 py-2">Kosong</span>
                                @endif
                            </div>
                        </div>

                        @if($item->stok > 0)
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-secondary mb-1">Mulai</label>
                                    <input type="date" class="form-control form-control-sm date-start" data-id="{{ $item->id }}" data-price="{{ $item->harga_sewa }}" data-name="{{ $item->nama_alat }}">
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-bold text-secondary mb-1">Selesai</label>
                                    <input type="date" class="form-control form-control-sm date-end" data-id="{{ $item->id }}" data-price="{{ $item->harga_sewa }}" data-name="{{ $item->nama_alat }}">
                                </div>
                            </div>

                            <div class="total-box mb-3 text-center text-dark id-total-box-{{ $item->id }}">
                                Total: <span class="text-success id-total-text-{{ $item->id }}">Rp 0</span> (<span class="id-days-text-{{ $item->id }}">0</span> Hari)
                            </div>

                            <a href="https://api.whatsapp.com/send?phone=6281234567890&text=Halo%20Admin%20M.A%20OUTDOOR,%20saya%20ingin%20menyewa%20*{{ urlencode($item->nama_alat) }}*." 
                               target="_blank" 
                               class="btn btn-success w-100 py-2 fw-bold mt-auto shadow-sm id-btn-wa-{{ $item->id }}">
                                <i class="fa-brands fa-whatsapp me-2 fs-5"></i>Sewa Sekarang
                            </a>
                        @else
                            <button class="btn btn-secondary w-100 py-2 fw-bold mt-auto" disabled>
                                <i class="fa-solid fa-ban me-2"></i>Stok Habis
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p class="mb-0 small">&copy; 2026 M.A OUTDOOR Rent. All Rights Reserved. Explore the World safely.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelectorAll('.date-start, .date-end').forEach(input => {
            input.addEventListener('change', function() {
                const id = this.getAttribute('data-id');
                const price = parseInt(this.getAttribute('data-price'));
                const name = this.getAttribute('data-name');
                
                const card = document.getElementById(`item-card-${id}`);
                const startVal = card.querySelector('.date-start').value;
                const endVal = card.querySelector('.date-end').value;
                
                if (startVal && endVal) {
                    const start = new Date(startVal);
                    const end = new Date(endVal);
                    
                    // Hitung selisih hari
                    const timeDiff = end.getTime() - start.getTime();
                    const days = Math.ceil(timeDiff / (1000 * 3600 * 24));
                    
                    const totalBox = card.querySelector(`.id-total-box-${id}`);
                    const totalText = card.querySelector(`.id-total-text-${id}`);
                    const daysText = card.querySelector(`.id-days-text-${id}`);
                    const btnWa = card.querySelector(`.id-btn-wa-${id}`);
                    
                    if (days > 0) {
                        const totalPrice = price * days;
                        const formattedPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(totalPrice);
                        
                        // Tampilkan kotak total harga
                        totalBox.style.display = 'block';
                        totalText.innerText = formattedPrice;
                        daysText.innerText = days;
                        
                        // Format teks kirim ke WhatsApp secara dinamis
                        const textMessage = `Halo Admin M.A OUTDOOR, saya ingin menyewa *${name}*.\n\n` +
                                            `🗓️ *Tanggal Mulai:* ${startVal}\n` +
                                            `🗓️ *Tanggal Selesai:* ${endVal}\n` +
                                            `⏱️ *Durasi:* ${days} Hari\n` +
                                            `💰 *Total Biaya:* ${formattedPrice}\n\n` +
                                            `Apakah unit tersebut tersedia untuk disewa? Terima kasih.`;
                        
                        btnWa.href = `https://api.whatsapp.com/send?phone=6281234567890&text=${encodeURIComponent(textMessage)}`;
                    } else {
                        // Jika tanggal selesai mendahului tanggal mulai
                        totalBox.style.display = 'block';
                        totalText.innerText = "Error Tanggal";
                        daysText.innerText = "0";
                        btnWa.removeAttribute('href');
                    }
                }
            });
        });
    </script>
</body>
</html>