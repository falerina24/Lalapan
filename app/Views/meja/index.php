<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <!-- Judul Halaman -->
    <h1 class="mb-4 text-center text-primary font-weight-bold">Daftar Meja</h1>

    <!-- Tombol Tambah Meja -->
    <div class="text-right mb-4">
        <a href="/meja/create" class="btn btn-success btn-lg">
            <i class="fas fa-plus"></i> Tambah Meja
        </a>
    </div>

    <!-- Tabel Daftar Meja -->
    <div class="table-responsive">
        <table class="table table-hover table-bordered shadow-sm">
            <thead class="bg-dark text-white text-center">
                <tr>
                    <th>ID</th>
                    <th>Nomor Meja</th>
                    <th>Kapasitas</th>
                    <th>Status Meja</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if (count($meja) > 0): ?>
                <?php foreach ($meja as $i => $m): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $m['nomor_meja']; ?></td>
                        <td><?= $m['kapasitas']; ?> Orang</td>
                        <td><?= $m['status']; ?></td>
                        <td>
                            <a href="/meja/edit/<?= $m['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/meja/delete/<?= $m['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">Tidak ada meja ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
