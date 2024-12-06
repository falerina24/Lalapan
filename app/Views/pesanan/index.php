<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <!-- Heading -->
    <h1 class="mb-4 text-center text-primary">Daftar Pesanan</h1>

    <!-- Button Tambah Pesanan -->
    <div class="text-right mb-4">
        <a href="/pesanan/create" class="btn btn-success btn-lg">
            <i class="fas fa-plus"></i> Tambah Pesanan
        </a>
    </div>

    <!-- Tabel Pesanan -->
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Meja</th>
                    <th>Pelanggan</th>
                    <th>Menu Makanan</th>
                    <th>Total Harga</th>
                    <th>Waktu Pesanan</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($items) > 0): ?>
                    <?php foreach ($items as $i => $p): ?>
                        <tr>
                            <!-- Kolom No -->
                            <td><?= $i + 1 ?></td>

                            <!-- Kolom Meja -->
                            <td><?= isset($p['nomor_meja']) ? $p['nomor_meja'] : '<span class="badge badge-secondary">Tidak ada</span>'; ?></td>

                            <!-- Kolom Pelanggan -->
                            <td><?= isset($p['nama']) ? $p['nama'] : '<span class="badge badge-secondary">Tidak ada</span>'; ?></td>

                            <!-- Kolom Produk -->
                            <td>
                                <ul class="list-unstyled">
                                    <?php foreach ($p['detail'] as $d): ?>
                                        <li><?= $d['nama']; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>

                            <!-- Kolom Total -->
                            <td>Rp. <?= isset($p['total']) ? number_format($p['total'], 0, ',', '.') : '<span class="badge badge-secondary">Tidak ada</span>'; ?></td>

                            <!-- Kolom Waktu Pesanan -->
                            <td><?= date('d-m-Y H:i:s', strtotime($p['waktu_pesanan'])); ?></td>

                            <!-- Kolom Status -->
                            <td>
                                <span class="badge badge-<?php
                                                            echo ($p['status'] == 'selesai') ? 'success' : (($p['status'] == 'pending') ? 'warning' : 'danger'); ?>">
                                    <?= ucfirst($p['status']); ?>
                                </span>
                            </td>

                            <!-- Kolom Aksi -->
                            <td class="text-center">
                                <a href="/pesanan/detail/<?= $p['id_pesanan']; ?>" class="btn btn-primary btn-sm mb-1">
                                    <i class="fas fa-eye"></i> Detail
                                </a>
                                <!-- Uncomment for Edit and Delete options -->
                                <!--
                                <a href="/pesanan/edit/<?= $p['id_pesanan']; ?>" class="btn btn-warning btn-sm mb-1">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="/pesanan/delete/<?= $p['id_pesanan']; ?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah Anda yakin?');">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                                -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada pesanan ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>