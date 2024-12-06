<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <!-- Judul Halaman -->
    <h1 class="mb-4 text-center text-primary">Detail Pesanan</h1>
    
    <!-- Informasi Pesanan -->
    <div class="mb-4">
        <ul class="list-unstyled">
            <li><strong>Nama Pelanggan:</strong> <?= htmlspecialchars($items['nama_pelanggan'], ENT_QUOTES, 'UTF-8') ?></li>
            <li><strong>Total Tagihan:</strong> Rp. <?= number_format($items['total_tagihan'], 0, ',', '.') ?></li>
            <li><strong>Jumlah Pembayaran:</strong> Rp. <?= number_format($items['jumlah_dibayar'], 0, ',', '.') ?></li>
            <li><strong>Kembalian:</strong> Rp. <?= number_format($items['kembalian'], 0, ',', '.') ?></li>
            <li><strong>Nomor Meja:</strong> <?= htmlspecialchars($items['nomor_meja'], ENT_QUOTES, 'UTF-8') ?></li>
            <li><strong>Waktu Pembayaran:</strong> <?= date('d-m-Y H:i:s', strtotime($items['waktu_pembayaran'])); ?></li>
        </ul>
    </div>

    <!-- Tabel Rincian Pesanan -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody class="text-capitalize">
                <?php if (count($items['detail']) > 0): ?>
                    <?php foreach ($items['detail'] as $i => $p): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($p['nama'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td>Rp. <?= number_format($p['harga'], 0, ',', '.') ?></td>
                            <td><?= htmlspecialchars($p['kuantitas'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($p['nama_kategori'], ENT_QUOTES, 'UTF-8') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada pesanan ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Tombol Kembali -->
    <div class="text-right">
        <a href="/pembayaran" class="btn btn-primary mb-3">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>
</div>

<?= $this->endSection() ?>
