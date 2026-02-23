<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ROG INDONESIA</title>
    <meta name="description" content="Toko Online ROG Indonesia - Menjual PC, Laptop, dan Phone Gaming Terbaik">
    <meta name="keywords" content="ROG, PC, Laptop, Phone, Gaming, Indonesia">

    <!-- Favicons -->
    <link href="assets/img/iconrog.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex justify-content-between align-items-center">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Add your logo image here -->
                <img src="assets/img/iconrog.png" alt="Logo" style="height: 50px; width: auto;">
                <!-- Adjust height as needed -->
                <h1 class="sitename">ROG Indonesia</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul class="d-flex justify-content-end">
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Produk</a></li> <!-- Corrected href -->
                    @if(!Auth::check())
                        <li><a class="getstarted scrollto" href="/admin">Login</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b class="text-primary">{{ Auth::user()->email }}</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="p-2 bg-info text-bold">Level: {{ Auth::user()->role }}</li>
                                <li class="p-2 text-bold"><a href="/admin">Panel Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="p-2">
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn btn-outline-success" type="submit">Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(!Auth::check())
                        <li><a class="cta-btn" href="/register">Get Started</a></li>
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- .navbar -->
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/back.png" alt="" data-aos="fade-in">

            <div class="container d-flex flex-column align-items-center">
                <h2 data-aos="fade-up" data-aos-delay="100">ROG Indonesia</h2>
                <p data-aos="fade-up" data-aos-delay="200">Toko Online ROG Indonesia - Menjual PC, Laptop, dan Phone
                    Gaming Terbaik</p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="/register" class="btn-get-started">Get Started</a>
                    <a href="https://youtu.be/qLjtVfXG4dY?si=U6rvvhOTfByNjPpN"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3>Keanggunan dan Kualitas dalam Setiap Karya</h3>
                        <img src="assets/img/rog.jpg" class="img-fluid rounded-4 mb-4" alt="ROG Indonesia About">
                        <p>ROG Indonesia adalah salah satu toko online terlengkap di Indonesia yang menjual PC, laptop,
                            dan phone gaming terbaik.</p>
                        <p>Dengan koleksi produk yang luas dan harga yang kompetitif, kami menjadi pilihan utama bagi
                            mereka yang mencari produk gaming berkualitas. Kami juga menawarkan layanan pengiriman yang
                            cepat dan aman, sehingga Anda dapat menikmati produk impian Anda tanpa harus meninggalkan
                            rumah.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                "Gaming adalah seni, dan kami adalah seniman." - ROG Indonesia
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Desain ikonik yang tak lekang oleh
                                        waktu.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Material berkualitas tinggi untuk
                                        kenyamanan maksimal.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Inovasi dalam setiap koleksi,
                                        menciptakan tren baru.</span></li>
                            </ul>
                            <p>
                                Setiap koleksi kami adalah perwujudan dari keanggunan dan keunikan. Dari PC gaming
                                hingga phone gaming, ROG Indonesia menawarkan sesuatu untuk setiap kesempatan.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/About.jpg" class="img-fluid rounded-4"
                                    alt="ROG Indonesia Collection">
                                <a href="https://youtu.be/Z7U6rIuTNyU?si=MNqdsD-23327KEg3"
                                    class="glightbox pulsating-play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="500"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Pelanggan Puas</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1500"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Proyek Desain</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="3000"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Jam Dukungan Pelanggan</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Desainer Berpengalaman</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Kami</h2>
                <p>Layanan Unggulan ROG Indonesia<br></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/motherboard.png" class="img-fluid" alt="PC Gaming">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a href="#portfolio" class="stretched-link">
                                    <h3>PC Gaming</h3>
                                </a>
                                <p>PC gaming yang kuat dan tangguh untuk pengalaman gaming yang luar biasa.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/laptop.png" class="img-fluid" alt="Laptop Gaming">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <a href="#portfolio" class="stretched-link">
                                    <h3>Laptop Gaming</h3>
                                </a>
                                <p>Laptop gaming yang ringan dan kuat untuk pengalaman gaming yang fleksibel.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/phone.png" class="img-fluid" alt="Phone Gaming">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-easel"></i>
                                </div>
                                <a href="#portfolio" class="stretched-link">
                                    <h3>Phone Gaming</h3>
                                </a>
                                <p>Phone gaming yang cepat dan responsif untuk pengalaman gaming yang menyenangkan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="Client 1">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="Client 2">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="Client 3">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="Client 4">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="Client 5">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="Client 6">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Services 2 Section -->
        <section id="services-2" class="services-2 section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Kami</h2>
                <p>JELAJAHI LAYANAN KAMI</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-briefcase icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Kustomisasi PC</a></h4>
                                <p class="description">Kustomisasi PC sesuai dengan selera dan gaya Anda.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-card-checklist icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Konsultasi Gaming</a></h4>
                                <p class="description">Dapatkan saran dari ahli gaming untuk penampilan yang sempurna.
                                </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-bar-chart icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Pengalaman Gaming Pribadi</a></h4>
                                <p class="description">Nikmati pengalaman gaming yang eksklusif dan pribadi.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-binoculars icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Perawatan PC</a></h4>
                                <p class="description">Layanan perawatan untuk menjaga PC Anda tetap dalam kondisi
                                    terbaik.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-brightness-high icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Pengiriman Internasional</a></h4>
                                <p class="description">Kami menawarkan pengiriman internasional untuk kenyamanan Anda.
                                </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex position-relative h-100">
                            <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Event Khusus</a></h4>
                                <p class="description">Ikuti event khusus dan peluncuran koleksi terbaru kami.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services 2 Section -->


        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Produk Tersedia</h2>
                <p>Daftar Produk ROG Indonesia</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($produk->unique('jenis') as $p)
                            <li data-filter=".{{$p->jenis}}">{{$p->jenis}}</li>
                        @endforeach
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <!-- Product Items -->
                        @foreach ($produk as $p)
                            @php
                                $imgName = 'rog.jpg'; // fallback
                                $jenis = strtolower($p->jenis);
                                if ($jenis == 'laptop') {
                                    $imgName = 'laptop.png';
                                } elseif ($jenis == 'phone') {
                                    $imgName = 'phone.png';
                                } elseif ($jenis == 'komputer' || $jenis == 'pc') {
                                    $imgName = 'motherboard.png';
                                }
                            @endphp
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{$p->jenis}}">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('assets/img/' . $imgName) }}" class="img-fluid" alt="{{ $p->nama }}"
                                        width="600px" height="600px">
                                    <div class="portfolio-info">
                                        <h4>{{$p->nama}}</h4>
                                        <p>{{$p->tipe}}</p>
                                        <div class="portfolio-links">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalShow{{ $p->kode }}"
                                                class="portfolio-lightbox" title="{{ $p->nama . ' ' . $p->tipe }}">
                                                <i class="bi bi-zoom-in"></i>Show
                                            </a>


                                            <!-- Modal BELI SEKARANG -->
                                            @if (Auth::check() && Auth::user()->role == 'Guest')
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#ModalBeli{{ $p->kode }}" title="Pesan">
                                                    <i class="bi bi-link-45deg"></i>BELI SEKARANG
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for SHOW -->
                            <div class="modal fade" id="ModalShow{{ $p->kode }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $p->tipe }}</h1>
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $p->nama }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('assets/img/' . $imgName) }}" class="img-fluid"
                                                alt="{{ $p->nama }}">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Adding Purchase -->
                            <div class="modal fade" id="ModalBeli{{ $p->kode }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pembelian</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body clearfix">
                                            <div class="card">
                                                <img src="{{ asset('assets/img/' . $imgName) }}" class="card-img-top"
                                                    alt="{{ $p->nama }}">
                                                <div class="card-body">
                                                    <h5 class="card-title">Deskripsi :</h5>
                                                    <p class="card-text">Nama : {{ $p->nama }}</p>
                                                    <p class="card-text">Tipe : {{ $p->tipe }}</p>
                                                    <p class="card-text">Jenis : {{ $p->jenis }}</p>
                                                    <p class="card-text">Harga :
                                                        Rp.{{ number_format($p->harga, 0, ',', '.') }}</p>
                                                    <p class="card-text">Stok : {{ $p->stok }}</p>
                                                    <form action="/pembelian/storeinput" method="post"
                                                        class="form-floating">
                                                        @csrf
                                                        <input type="hidden" name="kodeproduk" value="{{ $p->id }}">
                                                        <input type="hidden" name="harga" value="{{ $p->harga }}">

                                                        <p>Banyak<label for="floatingInputValue"></label></p>
                                                        <div class="form-floating p-1">
                                                            <input type="number" name="banyak" required="required"
                                                                class="form-control" min="1">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Beli</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Team Section -->
            <section id="team" class="team section light-background">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Personal</h2>
                    <p>CHECK OUR Personal</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-5">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="pic"><img src="assets/img/team/myself.jpeg" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Syafikh AL</h4>
                                    <span>Executive Manager</span>
                                    <div class="social">
                                        <a href="https://www.threads.net/@syafikh_al"><i class="bi bi-threads"></i></a>
                                        <a href="https://www.tiktok.com/@syaa_al09?_t=ZS-8tope99WZEd&_r=1"><i
                                                class="bi bi-tiktok"></i></a>
                                        <a href="https://www.instagram.com/syafikh_al?igshid=dzd2dWdhdDFmdjFn"><i
                                                class="bi bi-instagram"></i></a>
                                        <a
                                            href="https://www.linkedin.com/in/maulana-syafikh-alkhudri-524702350?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                    </div>

                </div>

            </section><!-- /Team Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Syafikh AL</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jalan Cempaka Indah No29</p>
                        <p>DKI Jakarta</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+628568025957</span></p>
                        <p><strong>Email:</strong> <span>Syafikh@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Produk</a></li>

                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="/">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="##portfolio">Web Portofolio</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#team">Web Personal</a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Newsletter</h4>
                    <p>Subscribe to newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p> 2025 <span>Copyright</span> <strong class="px-1 sitename">ROG Indonesia</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">Syafikh AL</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>