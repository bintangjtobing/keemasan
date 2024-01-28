@extends('welcome')
@section('title', 'Homepage')
@section('content')
    <!-- Hero
          ============================================= -->
    <section id="slider" class="slider-element"
        style="background: #4315412b url('demos/finance/images/hero-bg.png') center bottom no-repeat; background-size: 100% auto;">

        <div class="container">
            <div class="row align-items-md-end">
                <div class="col-lg-5 align-self-center flex-column py-6">
                    <h1 class="hero-title display-4 fw-bold color font-body"><b>#InvestasiMudah</b>
                        dan <b>terpercaya</b> Bersama KEEMASANID</h1>
                    <p class="my-5">Keemasaan tempat yang tepat untuk Anda melakukan investasi emas.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="iconlist mb-0">
                                <li class="mb-2"><i class="bi-check-lg text-smaller bg-color-2 color"></i>
                                    Damas
                                </li>
                                <div class="layanan-header">Berbagai produk emas dengan kualitas terbaik</div>
                                <li class="mb-2"><i class="bi-check-lg text-smaller bg-color-2 color"></i>
                                    Nyimas</li>
                                <div class="layanan-header">Program nyicil emas dengan cara yang mudah</div>
                                <li class="mb-2"><i class="bi-check-lg text-smaller bg-color-2 color"></i>
                                    Gemas</li>
                                <div class="layanan-header">Solusi gadai emas</div>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="iconlist mb-0">
                                <li class="mb-2"><i class="bi-check-lg text-smaller bg-color-2 color"></i>
                                    Kemas</li>
                                <div class="layanan-header">Cara cerdas untuk mendapatkan keuntungan maksimal dari
                                    kenaikan harga emas</div>
                                <li class="mb-2"><i class="bi-check-lg text-smaller bg-color-2 color"></i>
                                    Bimas</li>
                                <div class="layanan-header">Untuk memastikan ketersedian stok emas dan stabilisasi
                                    harga emas</div>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 dotted-bg">
                    <img src="keemasan/header.png" alt="Image 1"
                        class="d-flex align-self-end mt-5 z-1 mx-auto w-75 position-relative">
                </div>
            </div>
        </div>

    </section>

    <!-- Content
        ============================================= -->
    <section id="content">
        <div class="content-wrap py-5">

            <div class="container mw-md py-5">
                <div class="row justify-content-between align-items-center col-mb-30">
                    <div class="col-md-2 text-center">
                        <h3 class="display-2 fw-light mb-2 color">4.8</h3>
                        <div class="mb-2 color-2">
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                        </div>
                        <span>20,321 Ratings</span>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-uppercase font-body ls-2 color-2">About Keemasan</h5>
                        <h3 class="mb-0 fw-normal">Keemasan adalah perusahaan investasi emas yang terpercaya dan
                            telah berpengalaman selama 10 tahun.
                        </h3>
                    </div>
                    <div class="col-md-5 mt-4 mt-md-0">
                        <blockquote class="py-0 mb-0">
                            <p>“Puas dengan layanan Keemasan karena aman, menguntungkan, dan membantunya dalam
                                memilih produk emas yang tepat.”</p>
                            <footer class="blockquote-footer font-primary">Anastasari Sri</footer>
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="section dark bg-color" style="padding: 100px 0;">

                <div class="container">
                    <div class="heading-block mw-xs mx-auto text-center mb-6">
                        <h5 class="font-body text-uppercase ls-2 color-2">Apa yang kami unggulkan?</h5>
                        <h3 class="text-white text-transform-none ls-0">Kami tidak hanya menawarkan investasi, tapi
                            kami menawarkan nilai lebih.</h3>
                    </div>
                    <div class="services-grid gutter-30 position-relative">
                        <div
                            style="background-image: url(demos/finance/images/grid.svg); position: absolute; top: 50%; left: 50%; width: 50vw; height: 50vh; opacity: .15; transform: translate(-50%, -50%);">
                        </div>
                        <img class="op-05" src="demos/finance/images/grid.svg" alt="Grid Image"
                            style="position: absolute; left: -20px; top: -30px; z-index: -1;">
                        <div class="row g-5">
                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#4315412b, #431541f7), url('demos/finance/images/services/1.jpg')">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="bi-safe color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls-0 text-transform-none">
                                            Aman & Terpercaya</h4>
                                        <p>Keemasan memiliki perlindungan konsumen yang menjamin keamanan investasi
                                            Anda. Keemasan juga telah berpengalaman selama 10 tahun di bidang
                                            investasi emas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#4315412b, #431541f7), url('demos/finance/images/services/2.jpg')">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="bi-shuffle color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls-0 text-transform-none">
                                            Fleksibel</h4>
                                        <p>Keemasan menawarkan pilihan paket investasi yang flexible sesuai dengan
                                            kebutuhan Anda, mulai dari emas batangan, emas perhiasan, hingga emas
                                            koin. Anda juga dapat berinvestasi emas dengan cara nyicil.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#431541A8, #431541), url('demos/finance/images/services/3.jpg')">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="bi-rulers color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls-0 text-transform-none">
                                            Mudah</h4>
                                        <p>Keemasan memudahkan Anda untuk memulai investasi emas dengan beberapa
                                            langkah saja. Anda dapat membuka rekening emas secara online atau di
                                            kantor cabang Keemasan.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#43154198, #431541), url('demos/finance/images/services/4.jpg')">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="bi-graph-up-arrow color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls-0 text-transform-none">
                                            Hasil Maksimal</h4>
                                        <p>Keemasan memberikan hasil maksimal untuk semua konsumennya. Keemasan
                                            berkomitmen untuk memberikan keuntungan yang kompetitif bagi
                                            investornya.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#431541A8, #431541), url('demos/finance/images/services/5.jpg')">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="bi-cash-coin color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls-0 text-transform-none">
                                            Terjangkau</h4>
                                        <p>Keemasan menawarkan harga emas yang terjangkau dan kompetitif. Anda dapat
                                            membeli emas dengan harga yang lebih murah dibandingkan dengan toko emas
                                            tradisional.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#43154198, #431541), url('demos/finance/images/services/6.jpg')">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="bi-headset color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls-0 text-transform-none">
                                            Pelayanan Prima</h4>
                                        <p>Keemasan memiliki tim customer service yang profesional dan
                                            berpengalaman. Mereka selalu siap membantu Anda dalam hal apa pun yang
                                            Anda butuhkan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="demos/finance/images/grid.svg" alt="Grid Image" class="op-05"
                            style="position: absolute; right: -30px; bottom: -30px; z-index: -1;">

                    </div>
                </div>

            </div>

            <div class="section bg-transparent" style="padding: 100px 0;">
                <div class="container">
                    <div class="heading-block mw-xs mx-auto text-center mb-6">
                        <h5 class="font-body text-uppercase ls-2 color-2">Apa yang kami tawarkan?</h5>
                        <h3 class="color text-transform-none ls-0">Produk unggulan kami</h3>
                    </div>
                    <div class="row col-mb-50 gutter-lg-50 justify-content-center">
                        <div class="col-lg-4 col-md-5 text-center">
                            <img src="demos/finance/images/gold-bar.png" alt="Globe Icon" class="mb-5" height="100">
                            <h3 class="font-body h2 mb-4 color">Emas</h3>
                            <p class="text-larger fw-normal text-muted mb-0">Investasi fisik emas di Keemasan
                                dengan aman karena ada perlindungan konsumen dari Keemasan. Dengan pilihan paket
                                yang sangat terjangkau akan menjadikan investasi emas di Keemasan lebih ringan.
                                Dalam kondisi pasar yang selalu berubah, emas tetap menjadi salah satu pilihan
                                investasi yang stabil dan aman.
                            </p>
                        </div>
                        <div class="col-md-1 text-center d-md-flex justify-content-center align-self-stretch">
                            <div class="border-end border-default d-none d-md-block"></div>
                            <div class="border-top border-default d-block d-md-none"></div>
                        </div>

                        <div class="col-lg-4 col-md-5 text-center">
                            <img src="demos/finance/images/umrah.png" alt="Users Icon" class="mb-5" height="100">
                            <h3 class="font-body h2 mb-4 color">Umroh & Haji</h3>
                            <p class="text-larger fw-normal text-muted mb-0">Apakah Anda bermimpi untuk berziarah
                                ke Tanah Suci, menapaki jejak Rasulullah SAW, dan merasakan kehadiran spiritual di
                                Makkah dan Madinah? Sekarang saatnya untuk menjadikan impian itu kenyataan dengan
                                Paket Umrah Penuh Berkah dari Keemasan.
                                Bersama-sama kita dapat meraih berkah dari perjalanan ini. Mari berkumpul dalam
                                ibadah dan memperkuat ikatan spiritual kita.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-6">
                        <div class="col-12 text-center mt-0 mt-md-4">
                            <a href="#" class="btn text-larger px-5 py-3 btn-dark bg-color rounded-pill"><i
                                    class="bi-calendar color-2 me-2 position-relative" style="top: 1px"></i>Hubungi
                                Kami</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-color" style="padding: 100px; 0;">
                <div class="container">
                    <div class="heading-block mw-xs mx-auto text-center mb-6">
                        <h3 class="color-2 text-transform-none ls-0">#KeemasanShop</h3>
                        <h5 class="font-body text-white text-uppercase ls-2">Layanan jual beli emas dari
                            Keemasan,
                            silahkan pilih paket emas yang Anda inginkan.</h5>
                    </div>
                    <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-pagi="false"
                        data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
                        <div class="card border-0 shadow-lg p-2">
                            <div class="card-body">
                                <div class="portfolio-item">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="demos/finance/images/shop/1.jpg" alt="Emas Logam Mulia">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350">
                                                <a href="demos/finance/images/shop/1.jpg"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                                    data-lightbox="image"><i class="uil uil-plus"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Emas Logam Mulia</a></h3>
                                        <span><a href="#">1gr</a></span>
                                        <a href="#"
                                            class="btn text-small btn-dark btn-block bg-color px-4 py-2 rounded-pill my-2"><i
                                                class="bi-basket color-2 ms-1"></i>&nbsp;Buy <b>IDR
                                                1.110.000</b></a>
                                        <a href="#"
                                            class="btn text-small btn-light btn-block bg-light px-4 py-2 rounded-pill"><i
                                                class="bi-minecart-loaded light-2 ms-1"></i>&nbsp;Sell <b>IDR
                                                990.000</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-lg p-2">
                            <div class="card-body">
                                <div class="portfolio-item">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="demos/finance/images/shop/2.jpg" alt="Emas Logam Mulia">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350">
                                                <a href="demos/finance/images/shop/2.jpg"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                                    data-lightbox="image"><i class="uil uil-plus"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Emas Logam Mulia</a></h3>
                                        <span><a href="#">2gr</a></span>
                                        <a href="#"
                                            class="btn text-small btn-dark btn-block bg-color px-4 py-2 rounded-pill my-2"><i
                                                class="bi-basket color-2 ms-1"></i>&nbsp;Buy <b>IDR
                                                2.155.000</b></a>
                                        <a href="#"
                                            class="btn text-small btn-light btn-block bg-light px-4 py-2 rounded-pill"><i
                                                class="bi-minecart-loaded light-2 ms-1"></i>&nbsp;Sell <b>IDR
                                                1.980.000</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-lg p-2">
                            <div class="card-body">
                                <div class="portfolio-item">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="demos/finance/images/shop/3.jpg" alt="Emas Logam Mulia">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350">
                                                <a href="demos/finance/images/shop/3.jpg"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                                    data-lightbox="image"><i class="uil uil-plus"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Emas Logam Mulia</a></h3>
                                        <span><a href="#">3gr</a></span>
                                        <a href="#"
                                            class="btn text-small btn-dark btn-block bg-color px-4 py-2 rounded-pill my-2"><i
                                                class="bi-basket color-2 ms-1"></i>&nbsp;Buy <b>IDR
                                                3.200.000</b></a>
                                        <a href="#"
                                            class="btn text-small btn-light btn-block bg-light px-4 py-2 rounded-pill"><i
                                                class="bi-minecart-loaded light-2 ms-1"></i>&nbsp;Sell <b>IDR
                                                2.970.000</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-lg p-2">
                            <div class="card-body">
                                <div class="portfolio-item">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="demos/finance/images/shop/5.jpg" alt="Emas Logam Mulia">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350">
                                                <a href="demos/finance/images/shop/5.jpg"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                                    data-lightbox="image"><i class="uil uil-plus"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Emas Logam Mulia</a></h3>
                                        <span><a href="#">5gr</a></span>
                                        <a href="#"
                                            class="btn text-small btn-dark btn-block bg-color px-4 py-2 rounded-pill my-2"><i
                                                class="bi-basket color-2 ms-1"></i>&nbsp;Buy <b>IDR
                                                5.300.000</b></a>
                                        <a href="#"
                                            class="btn text-small btn-light btn-block bg-light px-4 py-2 rounded-pill"><i
                                                class="bi-minecart-loaded light-2 ms-1"></i>&nbsp;Sell <b>IDR
                                                4.950.000</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-lg p-2">
                            <div class="card-body">
                                <div class="portfolio-item">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="demos/finance/images/shop/10.jpg" alt="Emas Logam Mulia">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350">
                                                <a href="demos/finance/images/shop/10.jpg"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                                    data-lightbox="image"><i class="uil uil-plus"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Emas Logam Mulia</a></h3>
                                        <span><a href="#">10gr</a></span>
                                        <a href="#"
                                            class="btn text-small btn-dark btn-block bg-color px-4 py-2 rounded-pill my-2"><i
                                                class="bi-basket color-2 ms-1"></i>&nbsp;Buy <b>IDR
                                                10.550.000</b></a>
                                        <a href="#"
                                            class="btn text-small btn-light btn-block bg-light px-4 py-2 rounded-pill"><i
                                                class="bi-minecart-loaded light-2 ms-1"></i>&nbsp;Sell <b>IDR
                                                9.990.000</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-lg p-2">
                            <div class="card-body">
                                <div class="portfolio-item">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="demos/finance/images/shop/25.jpg" alt="Emas Logam Mulia">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350">
                                                <a href="demos/finance/images/shop/25.jpg"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                                    data-lightbox="image"><i class="uil uil-plus"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="350"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="#">Emas Logam Mulia</a></h3>
                                        <span><a href="#">25gr</a></span>
                                        <a href="#"
                                            class="btn text-small btn-dark btn-block bg-color px-4 py-2 rounded-pill my-2"><i
                                                class="bi-basket color-2 ms-1"></i>&nbsp;Buy <b>IDR
                                                26.300.000</b></a>
                                        <a href="#"
                                            class="btn text-small btn-light btn-block bg-light px-4 py-2 rounded-pill"><i
                                                class="bi-minecart-loaded light-2 ms-1"></i>&nbsp;Sell <b>IDR
                                                24.750.000</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent" style="padding: 100px; 0;">
                <div class="container">
                    <div class="heading-block mw-xs mx-auto text-center mb-6">
                        <h3 class="text-dark text-transform-none ls-0">Keemasan Payment Partner</h3>
                    </div>
                </div>
                <ul class="clients-grid row row-cols-2 row-cols-sm-3 row-cols-md-6">
                    @php
                        $paymentPartners = ['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png', '14.png', '9.png', '10.png', '11.png', '12.png', '13.png'];
                    @endphp
                    @foreach ($paymentPartners as $partner)
                        <li class="col"><a href="#"><img src="keemasan/payment-partner/{{ $partner }}"
                                    alt="Payment Partner KeemasanID"></a></li>
                    @endforeach

                </ul>
            </div>
            <div class="section bg-transparent" style="padding: 100px; 0;">
                <div class="container">
                    <div class="heading-block mw-xs mx-auto text-center mb-6">
                        <h3 class="text-dark text-transform-none ls-0">Berita Keemasan</h3>
                    </div>
                </div>
                <div id="oc-events" class="owl-carousel events-carousel carousel-widget" data-margin="0"
                    data-pagi="false" data-items="1" data-items-lg="2" data-items-xl="2">
                    <div class="oc-item">
                        <article class="entry event p-3">
                            <div
                                class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="col-12 mb-md-0">
                                    <a href="#" class="entry-image">
                                        <img src="https://source.unsplash.com/random/800x450/?umrah"
                                            alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-start">
                                                <div class="badge bg-light text-dark rounded-pill">Updates
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 p-4 pt-0">
                                    <div class="entry-meta no-separator mb-1 mt-0">
                                        <ul>
                                            <li><a href="#" class="text-uppercase fw-medium">Fri, Jan 23 @
                                                    5:30PM</a></li>
                                        </ul>
                                    </div>

                                    <div class="entry-title nott">
                                        <h3><a href="#">Umroh di masa KeEmasAn</a></h3>
                                    </div>
                                    <div class="entry-content my-3">
                                        <p class="mb-0">Kabar gembira untuk sahabat farmers yang ingin menunaikan
                                            ibadah umroh.
                                            Keemasan membuka program umroh dengan bibit emas. Cukup beli bibit emas
                                            30 bibit setara dengan 30 gram...</p>
                                    </div>

                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                    Bandung, ID</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="oc-item">
                        <article class="entry event p-3">
                            <div
                                class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="col-12 mb-md-0">
                                    <a href="#" class="entry-image">
                                        <img src="https://source.unsplash.com/random/800x450/?gold"
                                            alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-start">
                                                <div class="badge bg-light text-dark rounded-pill">Updates
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 p-4 pt-0">
                                    <div class="entry-meta no-separator mb-1 mt-0">
                                        <ul>
                                            <li><a href="#" class="text-uppercase fw-medium">Fri, Jan 23 @
                                                    5:30PM</a></li>
                                        </ul>
                                    </div>

                                    <div class="entry-title nott">
                                        <h3><a href="#">Begini ramalan Antam soal harga emas 2023</a></h3>
                                    </div>
                                    <div class="entry-content my-3">
                                        <p class="mb-0">Di tengah ancaman resesi global, investasi emas
                                            diperkirakan akan menjadi salah satu primadona...</p>
                                    </div>

                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                    Bandung, ID</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="oc-item">
                        <article class="entry event p-3">
                            <div
                                class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="col-12 mb-md-0">
                                    <a href="#" class="entry-image">
                                        <img src="https://source.unsplash.com/random/800x450/?fine-gold"
                                            alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-start">
                                                <div class="badge bg-light text-dark rounded-pill">Updates
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 p-4 pt-0">
                                    <div class="entry-meta no-separator mb-1 mt-0">
                                        <ul>
                                            <li><a href="#" class="text-uppercase fw-medium">Fri, Jan 23 @
                                                    5:30PM</a></li>
                                        </ul>
                                    </div>

                                    <div class="entry-title nott">
                                        <h3><a href="#">Prediksi harga emas 2024</a></h3>
                                    </div>
                                    <div class="entry-content my-3">
                                        <p class="mb-0">Harga emas naik 6,5% year-to-date/ytd dengan pergerakan
                                            harga koreksi lebih rendah dalam beberapa hari terakhir karena
                                            menguatnya dolar...</p>
                                    </div>

                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                    Bandung, ID</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="container mt-6 dotted-bg rounded-6" style="background-color: #4315411b;">
                <div class="row align-items-center justify-content-between p-5 p-md-6">
                    <div class="col mb-5 mb-lg-0">
                        <h2 class="font-body h1 mb-0">#InvestasiMudah dan terpercaya Bersama KEEMASANID</h2>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn px-3 py-2 px-md-5 py-md-3 btn-dark bg-color rounded-pill"><i
                                class="bi-calendar color-2 me-2 position-relative" style="top: 1px"></i>Book a
                            Schedule</a>
                        <a href="#" class="btn px-3 py-2 px-md-5 py-md-3 bg-color-2 rounded-pill ms-2"><i
                                class="bi-envelope color me-2 position-relative" style="top: 1px"></i>Contact
                            Us</a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
