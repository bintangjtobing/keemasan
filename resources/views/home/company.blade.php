@extends('welcome')
@section('title', 'Produk dan Layanan')
@section('content')
    <section id="content">
        <div class="content-wrap py-3">
            <div class="section bg-transparent" style="padding:20px 0;">
                <div class="container">
                    <div class="heading-block mw-xs mx-auto text-left mb-2">
                        <h3 class="color text-transform-none ls-0">Tentang Perusahaan Kami</h3>
                        <p>
                            Emas telah menjadi komoditi yang diminati oleh konsumen Indonesia sejak lama. Hal ini karena
                            emas memiliki sifat yang tahan lama, mudah dibeli dan dijual, serta memiliki nilai yang
                            cenderung meningkat dari waktu ke waktu.<br>
                            <br>
                            Pada tahun 1999, PT Kebun Emas Nusantara (Keemasan) didirikan di Medan, Sumatera Utara. Keemasan
                            merupakan perusahaan yang bergerak di bidang investasi emas. Keemasan menyediakan berbagai
                            produk emas, mulai dari emas batangan, emas perhiasan, hingga emas koin.
                            Keemasan didirikan oleh sekelompok pengusaha yang memiliki visi untuk menjadi perusahaan
                            terdepan yang menyediakan produk emas unggulan. Keemasan berkomitmen untuk memberikan manfaat
                            nyata kepada semua konsumen, baik untuk investasi maupun untuk kebutuhan sehari-hari.<br>
                            <br>
                            <b>Pengembangan PT Kebun Emas Nusantara</b>
                            Sejak didirikan, Keemasan telah berkembang pesat. Keemasan telah memiliki jaringan cabang yang
                            tersebar di seluruh Indonesia. Keemasan juga telah bekerja sama dengan berbagai mitra, seperti
                            toko emas tradisional, perbankan, dan perusahaan asuransi.
                            Keemasan terus berinovasi untuk memberikan layanan yang terbaik kepada konsumen. Keemasan telah
                            meluncurkan berbagai produk dan layanan baru, seperti program nyicil emas, gadai emas, dan
                            layanan jual beli emas online.<br>
                            <br>
                            <b>Visi dan misi PT Kebun Emas Nusantara</b>
                            Visi Keemasan adalah menjadi perusahaan terdepan yang menyediakan produk emas unggulan. Keemasan
                            berkomitmen untuk memberikan produk emas yang berkualitas tinggi, layanan yang terbaik, dan
                            harga yang kompetitif.<br>
                            <br>
                            <b>Misi Keemasan</b> adalah hadir memberi manfaat nyata kepada semua konsumen. Keemasan ingin
                            membantu
                            konsumen untuk mencapai tujuan finansial mereka dengan berinvestasi emas.<br>
                            <br>
                            Pada tahun 2024, PT Kebun Emas Nusantara telah memasuki usia ke-25. Selama 25 tahun, Keemasan
                            telah melayani jutaan konsumen di Indonesia. Keemasan berkomitmen untuk terus berinovasi dan
                            memberikan layanan terbaik kepada konsumen, sehingga Keemasan dapat terus menjadi perusahaan
                            terdepan yang menyediakan produk emas unggulan.
                        </p>
                    </div>
                    <div class="row mt-6">
                        <div class="col-12 text-center mt-0 mt-md-4">
                            <a href="/hubungi-kami" class="btn text-larger px-5 py-3 btn-dark bg-color rounded-pill"><i
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
                        <a href="/hubungi-kami" class="btn px-3 py-2 px-md-5 py-md-3 bg-color-2 rounded-pill ms-2"><i
                                class="bi-envelope color me-2 position-relative" style="top: 1px"></i>Contact
                            Us</a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
