<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Detail Pesanan</h1>
    <ul>
        <li>Nama Pelanggan: <?= $items['nama'] ?></li>
        <li>No Meja: <?= $items['nomor_meja'] ?></li>
        <li>Total Harga: <?= $items['total'] ?></li>
        <li>Waktu Pesanan: <?= date('d-m-Y H:i:s', strtotime($items['waktu_pesanan'])); ?></li>
        <li>Status Pesanan: <?= $items['status'] ?></li>
    </ul>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah Yang Di Pesan </th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($items['detail']) > 0): ?>
                <?php foreach ($items['detail'] as $i => $p): ?>
                    <tr>

                        <td><?= $i + 1 ?></td>
                        <td><?= isset($p['nama']) ? $p['nama'] : 'Tidak ada'; ?></td>
                        <td><?= isset($p['harga']) ? $p['harga'] : 'Tidak ada'; ?></td>
                        <td><?= isset($p['kuantitas']) ? $p['kuantitas'] : 'Tidak ada'; ?></td>


                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada pesanan ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="/pesanan" class="btn btn-primary mb-3">Back</a>
    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mb-3 float-right">Bayar Sekarang</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/pembayaran/store" method="post">
                        <div class="form-group">
                            <label for="exampleInputPembayaran">Total Pembayaran</label>
                            <input name="jumlah" type="number" class="form-control" id="exampleInputPembayaran">
                        </div>
                        <input name="pesanan_id" type="number" hidden class="form-control" value="<?= $items['pesanan_id'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Bayar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>