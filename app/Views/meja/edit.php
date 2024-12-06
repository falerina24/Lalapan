<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Edit Meja</h1>
    <form action="/meja/update/<?= $meja['id']; ?>" method="post">
        <div class="form-group">
            <label for="nomor_meja">Nomor Meja:</label>
            <input type="text" id="nomor_meja" name="nomor_meja" class="form-control" value="<?= $meja['nomor_meja']; ?>" required>
        </div>

        <div class="form-group">
            <label for="kapasitas">Kapasitas:</label>
            <input type="number" id="kapasitas" name="kapasitas" class="form-control" value="<?= $meja['kapasitas']; ?>" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" class="form-control" required>
                <option value="tersedia" <?= $meja['status'] == 'tersedia' ? 'selected' : ''; ?>>Tersedia</option>
                <option value="terisi" <?= $meja['status'] == 'terisi' ? 'selected' : ''; ?>>Terisi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/meja" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection() ?>