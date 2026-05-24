<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.A OUTDOOR Rent - Penyewaan Alat Gunung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; font-size: 24px; letter-spacing: 1px; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
        .table th { background-color: #2c3e50 !important; color: white; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fa-solid fa-mountain shadow-sm me-2"></i>M.A OUTDOOR Rent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/"><i class="fa-solid fa-boxes-stacked me-1"></i> Daftar Alat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                <div>
                    <h2 class="text-dark mb-1" style="font-weight: 700;">Daftar Inventaris</h2>
                    <p class="text-muted mb-0">Kelola data alat gunung yang tersedia untuk disewakan</p>
                </div>
                <a href="/product/create" class="btn btn-primary px-4 py-2 shadow-sm" style="font-weight: 600;">
                    <i class="fa-solid fa-plus me-2"></i>Tambah Alat Baru
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i>{{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle table-striped border">
                    <thead>
                        <tr>
                            <th class="py-3 px-3" style="width: 8%;">No</th>
                            <th class="py-3">Nama Alat Gunung</th>
                            <th class="py-3">Harga Sewa / Hari</th>
                            <th class="py-3">Status Stok</th>
                            <th class="py-3 text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $key => $item)
                        <tr>
                            <td class="fw-bold px-3">{{ $key + 1 }}</td>
                            <td class="fw-semibold text-secondary">{{ $item->nama_alat }}</td>
                            <td class="text-success fw-bold">Rp {{ number_format($item->harga_sewa, 0, ',', '.') }}</td>
                            <td>
                                @if($item->stok > 0)
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">{{ $item->stok }} Unit Tersedia</span>
                                @else
                                    <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1">Stok Habis</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="/product/edit/{{ $item->id }}" class="btn btn-warning btn-sm me-1 px-3 text-white fw-semibold">
                                    <i class="fa-solid fa-pen-to-square me-1"></i>Edit
                                </a>
                                <a href="/product/delete/{{ $item->id }}" class="btn btn-danger btn-sm px-3 fw-semibold" onclick="return confirm('Yakin ingin menghapus alat ini?')">
                                    <i class="fa-solid fa-trash me-1"></i>Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>