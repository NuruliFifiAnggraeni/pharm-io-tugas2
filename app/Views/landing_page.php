<!DOCTYPE html>
<html lang="id">
<head>
    <!-- META TAGS: Sangat penting untuk SEO dan Mobile-First -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page MVP untuk produk bisnis digital. Dibangun dengan Bootstrap 5 dan HTML5 Semantik untuk performa SEO maksimal.">
    
    <title>PHARM.IO | BWD Sesi 2</title>

    <!-- BOOTSTRAP 5 CDN: Mengimpor "Rak Etalase Dinamis" tanpa perlu menulis CSS manual -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FONT & ICONS: Meningkatkan UI/UX Bisnis -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* CSS KUSTOM MINIMALIS: Praktik CSS Box Model (Margin, Border, Padding) */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F0F4F2; 
        }

        header.bg-primary {
           background-color: #2D5A43 !important;
        }

        .box-model-demo {
            padding: 30px;
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
            border-radius: 15px;
            background-color: white;
            transition: all 0.3s ease;
        }

        .box-model-demo:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(45, 90, 67, 0.15);
        }

        .text-primary, .navbar-brand i {
            color: #2D5A43 !important;
        }

        .btn-primary {
            background-color: #2D5A43 !important;
            border-color: #2D5A43 !important;
        }
    </style>
</head>
<body>

    <!-- SEMANTIC TAG: <nav> memberi tahu Google bahwa ini adalah menu navigasi utama -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-hand-holding-medical"></i> PHARM.IO </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#produk">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SEMANTIC TAG: <header> sebagai area "Hero/Papan Reklame" utama web -->
    <header class=" bg-primary text-white text-center py-5">
        <div class="container py-5">
            <h1 class="display-4">PHARM.IO</h1>
            <p class="lead mt-3">Solusi Farmasi Digital: Hidup Sehat, Terkelola Lebih Baik</p>
            <a href="#produk" class="btn btn-light btn-lg mt-3 fw-bold text-primary">Layanan Kami</a>
        </div>
    </header>

    <!-- SEMANTIC TAG: <main> membungkus seluruh konten inti/jualan utama -->
    <main>
        
        <!-- SEMANTIC TAG: <section> membagi area web menjadi bagian-bagian logis -->
        <section id="produk" class="container my-5 py-4">
            <div class="text-center mb-5">
                <h2>Layanan Unggulan Kami</h2>
                <p class="text-muted">Apoteker, Delivery Kilat & E-Resep Digital</p>
            </div>

            <!-- BOOTSTRAP GRID (Baris) -->
            <div class="row g-4">
                
                <!-- BOOTSTRAP GRID (Kolom): 
                     col-12 = Ambil 12 kolom penuh di HP (Mobile First)
                     col-md-4 = Ambil 4 kolom di layar medium/Laptop (12/4 = 3 kotak sejajar) 
                -->
                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-user-doctor fa-3x text-primary mb-3"></i>
                        <h3>Apoteker 24/7</h3>
                        <p class="text-muted">Konsultasi obat kapan saja langsung dari smartphone Anda dengan ahlinya.</p>
                    </div>
                </article>

                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-truck-fast fa-3x text-primary mb-3"></i>
                        <h3>Delivery Kilat</h3>
                        <p class="text-muted">Obat resep dan umum sampai di depan pintu rumah dalam waktu kurang dari 1 jam.</p>
                    </div>
                </article>

                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-file-prescription fa-3x text-primary mb-3"></i>
                        <h3>E-Resep Digital</h3>
                        <p class="text-muted">Simpan dan kelola riwayat resep dokter Anda secara digital, aman, dan rapi.</p>
                    </div>
                </article>

            </div>
        </section>

        <!-- SECURE FORM SECTION -->
        <section id="kontak" class="bg-white py-5 border-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="text-center mb-4">
                            <h2>Hubungi PHARM.IO</h2>
                            <p class="text-muted">Butuh konsultasi obat atau informasi layanan kesehatan? Hubungi tim kami sekarang!</p>
                        </div>

                        <!-- Form Bisnis: Akan dihubungkan ke PHP/CodeIgniter di pertemuan UAS -->
                        <form action="#" method="POST" class="p-4 border rounded shadow-sm bg-light">
                            
                            <div class="mb-3">
                                <label for="namaLengkap" class="form-label fw-bold">Nama Lengkap</label>
                                <!-- INPUT TEXT BIASA -->
                                <input type="text" class="form-control" id="namaLengkap" placeholder="Cth: nur azizah" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailBisnis" class="form-label fw-bold">Email Pasien / Umum</label>
                                <input type="email" class="form-control" id="emailBisnis" placeholder="contoh: fifi@gmail.com" required>
                                <div class="form-text">Gunakan email aktif (Gmail/Yahoo/Lainnya) untuk menerima balasan dari apoteker kami.</div>
                            </div>

                            <div class="mb-4">
                                <label for="nomorTelepon" class="form-label fw-bold">Nomor WhatsApp</label>
                                <!-- SECURE INPUT: type="tel" otomatis memunculkan Numpad (angka) di HP -->
                                <input type="tel" class="form-control" id="nomorTelepon" placeholder="08123456789" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Kirim Permintaan <i class="fa-solid fa-paper-plane ms-1"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- SEMANTIC TAG: <footer> area penutup yang memberitahu bot ini adalah akhir dokumen -->
    <footer class="bg-dark text-light text-center py-4">
        <div class="container">
            <p class="mb-0">&copy;Nuruli Fifi Anggraeni-032 2026 Cakrawala Digital Business. <strong>BWD04 - Sesi 2</strong>.</p>
        </div>
    </footer>

    <!-- BOOTSTRAP JS BUNDLE: Diperlukan untuk interaktivitas komponen seperti Navbar Mobile -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>