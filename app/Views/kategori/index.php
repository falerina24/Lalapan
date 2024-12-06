<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <center>
        <h1 class="mb-4">Kategori Menu</h1>
    </center>
    
    <a href="/kategori/create" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah
    </a>

    <div class="table-responsive"> <!-- Membuat tabel responsif -->
        <table class="table table-hover table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Dibuat Pada</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($kategori)): ?>
                    <?php foreach ($kategori as $i => $k): ?>
                        <tr class="align-middle"> <!-- Menambah class align-middle agar teks di tengah -->
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($k['nama'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= date('Y-m-d H:i:s', strtotime($k['dibuat_pada'])); ?></td>
                            <td>
                                <a href="/kategori/edit/<?= $k['id']; ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="/kategori/delete/<?= $k['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada kategori ditemukan.</td>
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
