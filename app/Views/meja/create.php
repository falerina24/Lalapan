<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Tambah Meja</h1>
    <form action="/meja/store" method="post">
        <div class="form-group">
            <label for="nomor_meja">Nomor Meja:</label>
            <input type="text" id="nomor_meja" name="nomor_meja" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kapasitas">Kapasitas:</label>
            <input type="number" id="kapasitas" name="kapasitas" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Status Meja:</label>
            <select id="status" name="status" class="form-control" required>
                <option value="tersedia">Tersedia</option>
                <option value="terisi">Terisi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/meja" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection() ?>