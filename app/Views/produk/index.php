<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <!-- Heading -->
    <h1 class="mb-4 text-center text-primary">Menu</h1>

    <!-- Button Tambah Produk -->
    <div class="text-right mb-4">
        <a href="/produk/create" class="btn btn-success btn-lg">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>

    <!-- Tabel Produk -->
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="bg-dark text-white text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Membuat array untuk memetakan kategori
                $kategoriMap = [];
                foreach ($kategori as $k) {
                    $kategoriMap[$k['id']] = $k['nama'];
                }
                ?>
                <?php foreach ($produk as $i => $p): ?>
                    <tr>
                        <!-- Kolom No -->
                        <td class="text-center"><?= $i + 1 ?></td>

                        <!-- Kolom Nama -->
                        <td><?= htmlspecialchars($p['nama'], ENT_QUOTES, 'UTF-8'); ?></td>

                        <!-- Kolom Deskripsi -->
                        <td><?= htmlspecialchars($p['deskripsi'], ENT_QUOTES, 'UTF-8'); ?></td>

                        <!-- Kolom Harga -->
                        <td>Rp. <?= number_format($p['harga'], 0, ',', '.'); ?></td>

                        <!-- Kolom Kategori -->
                        <td><?= isset($kategoriMap[$p['kategori_id']]) ? $kategoriMap[$p['kategori_id']] : '<span class="badge badge-secondary">Kategori Tidak Ditemukan</span>'; ?></td>

                        <!-- Kolom Aksi -->
                        <td class="text-center">
                            <a href="/produk/edit/<?= $p['id']; ?>" class="btn btn-warning btn-sm mb-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="/produk/delete/<?= $p['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
