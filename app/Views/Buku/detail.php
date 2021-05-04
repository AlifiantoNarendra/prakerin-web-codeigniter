<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class='container'>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Daftar Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5">Detail Buku</h1>
                <div class="card mb-3 mt-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/assets/buku/<?= $buku['gambar']; ?>" alt="..." width="180">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ms-3">
                                <h3 class="card-title"><?= $buku['judul']; ?></h3>
                                <p class="card-text mt-3"><b>Penulis : </b><?= $buku['penulis']; ?></p>
                                <p class="card-text mt-3"><b>Penerbit : </b><?= $buku['penerbit']; ?></p>
                                <a href="" class="btn btn-success" style="width: 100px;">Edit</a>
                                <a href="" class="btn btn-danger" style="width: 100px;">Hapus</a>
                                <br><br>
                                <a href="/buku" class="btn btn-primary" style="width: 210px;">Kembali ke Daftar Buku</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>