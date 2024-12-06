<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <!-- Judul Halaman -->
    <h1 class="mb-4 text-center text-primary">Daftar Pembayaran</h1>

    <div class="text-right mb-4">
        <a href="/pembayaran/create" class="btn btn-success btn-lg">
            <i class="fas fa-plus"></i> Tambah Pembayaran
        </a>
    </div>

    <!-- Tabel Pembayaran -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Total Tagihan</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Kembalian</th>
                    <th>Nomor Meja</th>
                    <th>Waktu Pembayaran</th>
                    <th>Produk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-capitalize">
                <?php if (count($data) > 0): ?>
                    <?php foreach ($data as $i => $p): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($p['nama_pelanggan'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td>Rp. <?= number_format($p['total_tagihan'], 0, ',', '.') ?></td>
                            <td>Rp. <?= number_format($p['jumlah_dibayar'], 0, ',', '.') ?></td>
                            <td>Rp. <?= number_format($p['kembalian'], 0, ',', '.') ?></td>
                            <td class="text-center"><?= htmlspecialchars($p['nomor_meja'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= date('d-m-Y H:i:s', strtotime($p['waktu_pembayaran'])) ?></td>
                            <td>
                                <ul class="list-unstyled mb-0">
                                    <?php foreach ($p['items'] as $d): ?>
                                        <li><?= htmlspecialchars($d['nama'], ENT_QUOTES, 'UTF-8') ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                            <td>
                                <a href="/pembayaran/detail/<?= $p['pembayaran_id']; ?>" class="btn btn-info btn-sm" title="Lihat Detail Pembayaran" aria-label="Lihat Detail Pembayaran">
                                    <i class="fas fa-info-circle"></i> Detail
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada pembayaran ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>