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
            <div class="row" style="margin-top: 100px;">
                <div class="col">
                    <h1 class="text-center">Daftar Buku</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Gambar Buku</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($buku as $book) : ?>
                            <tr class="text-center">
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="/assets/buku/<?= $book['gambar']; ?>" alt="" class="gmbr"/></td>
                                <td><?= $book['judul']; ?></td>
                                <td>
                                    <a href="/buku/<?= $book['slug']; ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?= $this->endSection(); ?>
