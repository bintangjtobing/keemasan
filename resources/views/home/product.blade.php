@extends('welcome')
@section('title', 'Produk dan Layanan')
@section('content')
    <section id="content">
        <div class="container">

            <div class="row col-mb-20">
                <div class="col-lg-12 text-center my-5">
                    <h3>Layanan Keemasan</h3>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-coin i-alt"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Damas</h3>
                            <p>Berbagai produk emas dengan kualitas terbaik</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-coin i-alt"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Nyimas</h3>
                            <p>Program nyicil emas dengan cara yang mudah</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-coin i-alt"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Kemas</h3>
                            <p>Cara cerdas untuk mendapatkan keuntungan maksimal dari
                                kenaikan harga emas</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-coin i-alt"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Gemas</h3>
                            <p>Solusi gadai emas</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="bi-coin i-alt"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Bimas</h3>
                            <p>Untuk memastikan ketersedian stok emas dan stabilisasi
                                harga emas</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-wrap py-3">
                <div class="bg-transparent" style="padding: 50px 0;">
                    <div class="container">
                        <div class="col-lg-12 text-center my-5">
                            <h3>Produk Keemasan</h3>
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
                                <a href="/hubungi-kami" class="btn text-larger px-5 py-3 btn-dark bg-color rounded-pill"><i
                                        class="bi-calendar color-2 me-2 position-relative" style="top: 1px"></i>Hubungi
                                    Kami</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section dark bg-color" style="padding: 100px; 0;">
                    <div class="container-fluid">
                        <div class="heading-block mw-xs mx-auto text-center mb-6">
                            <h5 class="font-body text-uppercase ls-2 color-2">#KeemasanShop</h5>
                            <h3 class="text-white text-transform-none ls-0">Layanan jual beli emas dari
                                Keemasan,
                                silahkan pilih paket emas yang Anda inginkan.</h3>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-pagi="false"
                            data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="demos/finance/images/shop/1.jpg" alt="Product Image">
                                </div>
                                <div class="card-container">
                                    <h4 class="card-title">Emas Logam Mulia 1gr</h4>
                                    <button href="#" class="card-button buy-button"><i
                                            class="bi-basket color-2 ms-1"></i>
                                        Buy at IDR
                                        1.110.000</button>
                                    <button href="#" class="card-button sell-button"><i
                                            class="bi-minecart-loaded color ms-1"></i>
                                        Sell at IDR 990.000</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                    <img src="demos/finance/images/shop/2.jpg" alt="Product Image">
                                </div>
                                <div class="card-container">
                                    <h4 class="card-title">Emas Logam Mulia 2gr</h4>
                                    <button href="#" class="card-button buy-button"><i
                                            class="bi-basket color-2 ms-1"></i>
                                        Buy at IDR
                                        2.155.000</button>
                                    <button href="#" class="card-button sell-button"><i
                                            class="bi-minecart-loaded color ms-1"></i>
                                        Sell at IDR 1.980.000</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                    <img src="demos/finance/images/shop/3.jpg" alt="Product Image">
                                </div>
                                <div class="card-container">
                                    <h4 class="card-title">Emas Logam Mulia 3gr</h4>
                                    <button href="#" class="card-button buy-button"><i
                                            class="bi-basket color-2 ms-1"></i>
                                        Buy at IDR
                                        3.200.000</button>
                                    <button href="#" class="card-button sell-button"><i
                                            class="bi-minecart-loaded color ms-1"></i>
                                        Sell at IDR 2.970.000</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                    <img src="demos/finance/images/shop/5.jpg" alt="Product Image">
                                </div>
                                <div class="card-container">
                                    <h4 class="card-title">Emas Logam Mulia 5gr</h4>
                                    <button href="#" class="card-button buy-button"><i
                                            class="bi-basket color-2 ms-1"></i>
                                        Buy at IDR
                                        5.300.000</button>
                                    <button href="#" class="card-button sell-button"><i
                                            class="bi-minecart-loaded color ms-1"></i>
                                        Sell at IDR 4.950.000</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                    <img src="demos/finance/images/shop/10.jpg" alt="Product Image">
                                </div>
                                <div class="card-container">
                                    <h4 class="card-title">Emas Logam Mulia 10gr</h4>
                                    <button href="#" class="card-button buy-button"><i
                                            class="bi-basket color-2 ms-1"></i>
                                        Buy at IDR
                                        10.550.000</button>
                                    <button href="#" class="card-button sell-button"><i
                                            class="bi-minecart-loaded color ms-1"></i>
                                        Sell at IDR 9.990.000</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                    <img src="demos/finance/images/shop/25.jpg" alt="Product Image">
                                </div>
                                <div class="card-container">
                                    <h4 class="card-title">Emas Logam Mulia 25gr</h4>
                                    <button href="#" class="card-button buy-button"><i
                                            class="bi-basket color-2 ms-1"></i>
                                        Buy at IDR
                                        26.300.000</button>
                                    <button href="#" class="card-button sell-button"><i
                                            class="bi-minecart-loaded color ms-1"></i>
                                        Sell at IDR 24.750.000</button>
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
