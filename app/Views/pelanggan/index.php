<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Daftar Pelanggan</h1>

    <div class="table-responsive"> <!-- Membuat tabel responsif -->
        <table class="table table-hover table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Dibuat Pada</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($pelanggan) > 0): ?>
                    <?php foreach ($pelanggan as $i => $p): ?>
                        <tr class="align-middle"> <!-- Menambah class align-middle agar teks di tengah -->
                            <td><?= $i + 1 ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= date('d-m-Y H:i:s', strtotime($p['dibuat_pada'])); ?></td> <!-- Format tanggal -->
                            <td>
                                <a href="/pelanggan/edit/<?= $p['id']; ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="/pelanggan/delete/<?= $p['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada pelanggan ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    /* Memberikan padding dan margin lebih untuk membuat teks lebih nyaman dilihat */
    th, td {
        padding: 15px;
        text-align: center;
    }

    /* Membuat efek hover di baris tabel */
    tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.3s;
    }

    /* Desain tombol yang lebih menarik */
    .btn {
        transition: all 0.2s;
    }

    .btn-warning:hover {
        background-color: #ffc107;
        border-color: #ffc107;
        color: white;
    }

    .btn-danger:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }
</style>

<?= $this->endSection() ?>
