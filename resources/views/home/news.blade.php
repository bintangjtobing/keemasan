@extends('welcome')
@section('title', 'Berita Terbaru')
@section('content')
    <section id="content">
        <div class="content-wrap py-3">
            <section class="page-title bg-transparent">
                <div class="container">
                    <div class="page-title-row">

                        <div class="page-title-content">
                            <h1>Berita</h1>
                            <span>Our Latest News in Keemasan</span>
                        </div>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </section>
            <section id="content">
                <div class="content-wrap">
                    <div class="container">

                        <!-- Posts
                                                            ============================================= -->
                        <div id="posts" class="post-grid row gutter-30">
                            <div class="entry col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="grid-inner">
                                    <div class="entry-image">
                                        <a href="https://keemasan.id/system/images/post/7429f9d7393500d074f10062213dec02.jpg"
                                            data-lightbox="image"><img
                                                src="https://keemasan.id/system/images/post/7429f9d7393500d074f10062213dec02.jpg"
                                                alt="Umroh di masa KeEmasAn"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h2><a href="#">Umroh di masa KeEmasAn</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i>
                                                    13</a></li>
                                            <li><a href="#"><i class="uil uil-camera"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione...</p>
                                        <a href="#" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="entry col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="grid-inner">
                                    <div class="entry-image">
                                        <a href="https://keemasan.id/system/images/post/c2fef0a841d2fd6fdb940b600d3a08d0.jpg"
                                            data-lightbox="image"><img
                                                src="https://keemasan.id/system/images/post/c2fef0a841d2fd6fdb940b600d3a08d0.jpg"
                                                alt="Begini ramalan Antam soal harga emas 2023"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h2><a href="#">Begini ramalan Antam soal harga emas 2023</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i>
                                                    13</a></li>
                                            <li><a href="#"><i class="uil uil-camera"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione...</p>
                                        <a href="#" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="entry col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="grid-inner">
                                    <div class="entry-image">
                                        <a href="https://keemasan.id/system/images/post/6c306cbb1ad5b43020c7dab28b8a7c5e.jpeg"
                                            data-lightbox="image"><img
                                                src="https://keemasan.id/system/images/post/6c306cbb1ad5b43020c7dab28b8a7c5e.jpeg"
                                                alt="Prediksi harga emas 2024"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h2><a href="#">Prediksi harga emas 2024</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i>
                                                    13</a></li>
                                            <li><a href="#"><i class="uil uil-camera"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione...</p>
                                        <a href="#" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
