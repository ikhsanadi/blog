<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Perpustakaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://picsum.photos/1920/1080?grayscale');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .hero-content {
            z-index: 1;
        }
        .feature-icon {
            font-size: 3rem;
            color: #0d6efd;
            margin-bottom: 1rem;
            transition: transform 0.3s;
        }
        .card {
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        }
        .card:hover .feature-icon {
            transform: scale(1.1);
        }
        .navbar {
            transition: all 0.3s;
            padding: 1rem 0;
        }
        .navbar-scrolled {
            background-color: #212529 !important;
            padding: 0.5rem 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .bg-transparent {
            background-color: transparent !important;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="bi bi-book-half me-2"></i>SIPERPUSTAKAAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#koleksi">Koleksi</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="{{ url('/sesi') }}" class="btn btn-primary px-4">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container hero-content" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="display-3 fw-bold mb-4">Jelajahi Dunia Pengetahuan</h1>
            <p class="lead mb-5">Sistem Informasi Perpustakaan Modern untuk memudahkan akses buku,<br>jurnal, dan referensi ilmiah bagi seluruh civitas akademika.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ url('/sesi') }}" class="btn btn-primary btn-lg px-5 shadow-lg">Mulai Sekarang</a>
                <a href="#fitur" class="btn btn-outline-light btn-lg px-5">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Kenapa Memilih Kami?</h2>
                <p class="text-muted">Fasilitas terbaik untuk menunjang kegiatan literasi Anda</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-journal-bookmark"></i>
                        </div>
                        <h4 class="card-title">Koleksi Lengkap</h4>
                        <p class="card-text text-muted">Akses ribuan judul buku fisik dan digital dari berbagai kategori ilmu pengetahuan.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h4 class="card-title">Akses Digital</h4>
                        <p class="card-text text-muted">Baca e-book dan jurnal ilmiah kapan saja dan di mana saja melalui perangkat Anda.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4 class="card-title">Layanan 24/7</h4>
                        <p class="card-text text-muted">Sistem peminjaman dan pengembalian yang terintegrasi secara online memudahkan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <div class="row" id="stats-section">
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="100">
                    <h2 class="fw-bold display-4 counter" data-target="10000">0</h2>
                    <p class="fs-5">Buku Tersedia</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="200">
                    <h2 class="fw-bold display-4 counter" data-target="5000">0</h2>
                    <p class="fs-5">Anggota Aktif</p>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="300">
                    <h2 class="fw-bold display-4">24 Jam</h2>
                    <p class="fs-5">Akses Online</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Sistem Informasi Perpustakaan. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            once: true,
            duration: 1000,
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('navbar-scrolled');
                document.querySelector('.navbar').classList.remove('bg-transparent');
            } else {
                document.querySelector('.navbar').classList.remove('navbar-scrolled');
                document.querySelector('.navbar').classList.add('bg-transparent');
            }
        });

        // Animated Counters
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the slower

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    
                    // Lower inc to slow and higher to slow
                    const inc = target / speed;

                    if (count < target) {
                        // Add inc to count and output in counter
                        counter.innerText = Math.ceil(count + inc);
                        // Call function every ms
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target + "+";
                    }
                };
                updateCount();
            });
        }

        // Trigger animation when stats section is in view
        let options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        }

        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        observer.observe(document.querySelector('#stats-section'));

    </script>
</body>
</html>
