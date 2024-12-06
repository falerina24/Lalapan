<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1 class="my-4">Halaman Dashboard</h1>
    <div class="row">
        
        <!-- Jumlah Pelanggan -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 shadow-lg rounded-lg" style="transition: transform .2s;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold">Jumlah Pelanggan</span>
                    <i class="fas fa-user fa-2x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title display-4"><?= $jumlah_pelanggan ?></h5>
                    <p class="card-text">Total pelanggan terdaftar.</p>
                </div>
            </div>
        </div>

        <!-- Jumlah Produk -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 shadow-lg rounded-lg" style="transition: transform .2s;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold">Jumlah Menu</span>
                    <i class="fas fa-book fa-2x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title display-4"><?= $jumlah_produk ?></h5>
                    <p class="card-text">Total Menu Yang Tersedia.</p>
                </div>
            </div>
        </div>

        <!-- Jumlah Pesanan -->
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3 shadow-lg rounded-lg" style="transition: transform .2s;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold">Jumlah Pesanan</span>
                    <i class="fas fa-shopping-cart fa-2x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title display-4"><?= $jumlah_pesanan ?></h5>
                    <p class="card-text">Total pesanan yang dibuat.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    /* Menambahkan efek hover untuk setiap kartu */
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Border radius untuk kartu */
    .card {
        border-radius: 15px;
    }

    /* Font stylish untuk judul */
    h5.card-title {
        font-family: 'Poppins', sans-serif;
        font-size: 2rem;
        font-weight: 700;
    }

    /* Margin untuk judul dashboard */
    h1 {
        font-family: 'Roboto', sans-serif;
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 20px;
    }
</style>

<?= $this->endSection() ?>
