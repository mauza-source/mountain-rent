<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - M.A OUTDOOR Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { background-color: #2c3e50; min-height: 100vh; color: white; }
        .sidebar a { color: #bdc3c7; text-decoration: none; display: block; padding: 15px 20px; font-weight: 600; }
        .sidebar a:hover, .sidebar a.active { background-color: #34495e; color: white; border-left: 4px solid #3498db; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 px-0 sidebar shadow shadow-sm">
            <div class="p-4 border-bottom border-secondary">
                <h5 class="mb-0 text-white fw-bold"><i class="fa-solid fa-mountain me-2"></i>Admin Panel</h5>
            </div>
            <a href="/admin" class="active"><i class="fa-solid fa-gauge me-2"></i>Dashboard</a>
            <a href="/product/create"><i class="fa-solid fa-plus me-2"></i>Tambah Alat</a>
            <a href="/" target="_blank"><i class="fa-solid fa-earth-americas me-2"></i> Lihat Web Utama</a>
        </div>

        <div class="col-md-10 p-4">
            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <div>
                        <h2 class="text-dark mb-1" style="font-weight: 700;">Dashboard Manajemen Inventaris</h2>
                        <p class="text-muted mb-0">Selamat datang kembali, Admin M.A OUTDOOR Rent</p>
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover align-middle table-striped border">
                        <thead>
                            <tr class="table-dark">
                                <th class="py-3 px-3">No</th>
                                <th class="py-3">Nama Alat Gunung</th>
                                <th class="py-3">Harga Sewa / Hari</th>
                                <th class="py-3">Status Stok</th>
                                <th class="py-3 text-center">Aksi</th>
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
                                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">{{ $item->stok }} Unit Ready</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1">Kosong</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="/product/edit/{{ $item->id }}" class="btn btn-warning btn-sm text-white px-3 fw-semibold me-1">
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
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>