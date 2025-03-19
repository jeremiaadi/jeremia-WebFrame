<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

    <header>
        <h1>Selamat Datang di Portofolio Saya</h1>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Proyek</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Halo, Saya [Nama Anda]</h2>
        <p>Web Developer | UI/UX Designer | Freelancer</p>
        <a href="#" class="btn">Lihat Proyek</a>
    </section>

    <section class="projects">
        <h2>Proyek Terbaru</h2>
        <div class="project-list">
            <div class="project">
                <h3>Proyek 1</h3>
                <p>Deskripsi singkat proyek.</p>
            </div>
            <div class="project">
                <h3>Proyek 2</h3>
                <p>Deskripsi singkat proyek.</p>
            </div>
            <div class="project">
                <h3>Proyek 3</h3>
                <p>Deskripsi singkat proyek.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; <?= date('Y'); ?> Portofolio Saya. Dibuat dengan ❤️</p>
    </footer>

</body>
</html>
