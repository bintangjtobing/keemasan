<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="Boxity Central Indonesia">
    <meta name="description"
        content="Investasi Emas Mudah dan Terpercaya Bersama Keemasan yang telah berpengalaman selama lebih dari 10 tahun.">
    <meta name="keyword"
        content="gold investment, keemasanid, investasi emas, gadai emas, kebun emas, sewa kebun emas, KEEMASAN, umroh dan haji, emas jadi umroh, harga emas terbaru">
    <meta name="url" content="{{ Request::url() }}">
    <meta name="identifier-URL" content="{{ Request::url() }}">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=DM+Serif+Text&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{!! asset('style.css?' . rand(10000, 99999)) !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('css/font-icons.css?' . rand(10000, 99999)) !!}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{!! asset('css/swiper.css?' . rand(10000, 99999)) !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('demos/finance/finance.css?' . rand(10000, 99999)) !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('css/custom.css?' . rand(10000, 99999)) !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!-- Document Title
 ============================================= -->
    <title>@yield('title') | KeemasanID</title>
    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon.png">

    {{-- Meta --}}
    <meta name="og:title" property="og:title" content="@yield('title') | KeemasanID" />
    <meta name="og:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/w_1000/q_auto:best/f_auto/v1706416951/meta-cover_juzl1l.png" />
    <meta name="og:description" property="og:description"
        content="Investasi Emas Mudah dan Terpercaya Bersama Keemasan yang telah berpengalaman selama lebih dari 10 tahun." />
    <meta name="twitter:card" content="@yield('title') | KeemasanID" />
    <meta name="twitter:title" property="og:title" content="@yield('title') | KeemasanID" />
    <meta name="twitter:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1706416951/meta-cover_juzl1l.png" />
    <meta name="twitter:description" property="og:description"
        content="Investasi Emas Mudah dan Terpercaya Bersama Keemasan yang telah berpengalaman selama lebih dari 10 tahun." />
    <link rel="canonical" href="{{ Request::url() }}/" />
    <link rel="shortcut icon" href="favicon.png" type="image/png" sizes="64x64" />
    <meta name="og:email" content="info@keemasan.co.id" />
    <meta name="og:phone_number" content="085222927499" />
    <meta name="og:latitude" content="-6.9223102" />
    <meta name="og:longitude" content="107.612916" />
    <meta name="og:street-address"
        content="Jl. Asia Afrika No.158, Kb. Pisang,
    Kec. Sumur Bandung, Kota Bandung, Jawa Barat" />
    <meta name="og:locality" content="Jawa Barat" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="40261" />
    <meta name="og:country-name" content="Indonesia" />

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">

        <!-- Top Bar
  ============================================= -->
        <div id="top-bar" class="dark bg-color">
            <div class="container">

                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-12 col-md-auto">

                        <!-- Top Links
      ============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#"><i class="color-2 bi-globe"></i>
                                        Indonesia</a>
                                    {{-- <ul class="top-links-sub-menu bg-color">
                                        <li class="top-links-item"><a href="#">English</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                    <div class="col-12 col-md-auto">

                        <!-- Top Links
      ============================================= -->
                        <div class="top-links text-center">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#"><i class="color-2 bi-geo-alt"></i> Jl.
                                        Asia Afrika No.158, Kb. Pisang,
                                        Kec. Sumur Bandung, Kota Bandung, Jawa Barat</a></li>
                                <li class="top-links-item"><a href="#"><i class="color-2 bi-envelope"></i>
                                        info@keemasan.co.id</a></li>
                                <li class="top-links-item"><a href="#"><i
                                            class="color-2 bi-telephone-outbound"></i> (62)85222927499</a></li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>
                </div>

            </div>
        </div><!-- #top-bar end -->

        <!-- Header
  ============================================= -->
        <header id="header" class="sticky-on-scrollup">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row justify-content-between">

                        <!-- Logo
      ============================================= -->
                        <div id="logo" class="mx-0 me-lg-5 order-2 order-lg-1">
                            <a href="/">
                                <img class="logo-default"
                                    srcset="https://res.cloudinary.com/boxity-id/image/upload/w_auto/q_auto:best/f_auto/v1706443919/logo_nqbebi.png, https://res.cloudinary.com/boxity-id/image/upload/w_auto/q_auto:best/f_auto/v1706443919/logo_nqbebi.png 2x"
                                    src="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1706443919/logo_nqbebi.png"
                                    alt="KeemasanID Logo">
                            </a>
                        </div><!-- #logo end -->

                        <div class="primary-menu-trigger order-1">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <div class="header-misc order-3">
                            <a href="/hubungi-kami"
                                class="btn text-larger btn-dark bg-color px-4 py-2 rounded-pill"><i
                                    class="bi-chat-dots color-2"></i><span class="d-none d-md-inline ms-2">Hubungi
                                    Kami</span></a>
                        </div>

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu me-lg-auto with-arrows order-12 order-lg-2">

                            <ul class="menu-container">
                                <li class="menu-item {{ Route::is('kenapaKami') ? 'active' : '' }}"><a
                                        class="menu-link" href="/kenapa-kami">
                                        <div>Kenapa Kami?</div>
                                    </a></li>
                                <li class="menu-item {{ Route::is('produk') ? 'active' : '' }}"><a class="menu-link"
                                        href="/produk-layanan">
                                        <div>Produk dan Layanan</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link" href="/produk-layanan">
                                                <div><i class="bi-coin"></i>Emas</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="/produk-layanan">
                                                <div><i class="bi-currency-dollar"></i>Umroh Haji</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item {{ Route::is('perusahaan') ? 'active' : '' }}"><a
                                        class="menu-link" href="/perusahaan">
                                        <div>Perusahaan</div>
                                    </a></li>
                                <li class="menu-item {{ Route::is('berita') ? 'active' : '' }}"><a class="menu-link"
                                        href="/berita">
                                        <div>Berita</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->
        <div id="notification-area"></div>
        @yield('content')
        <!-- Footer
  ============================================= -->
        <footer id="footer" class="bg-white border-0">
            <div class="container">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row justify-content-between">
                        <div class="col-lg-3 mb-5 mb-lg-0">
                            <div class="widget">

                                <div class="fw-semibold font-primary color ls-3 h2 text-uppercase mb-4">KeemasanID<span
                                        class="color-2">.</span></div>
                                <p class="mb-4 op-07">Investasi Emas Mudah dan Terpercaya Bersama Keemasan yang telah
                                    berpengalaman selama lebih dari 10 tahun.</p>

                                <a href="#" class="social-icon si-small bg-light h-bg-facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light h-bg-google">
                                    <i class="fa-brands fa-google"></i>
                                    <i class="fa-brands fa-google"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light h-bg-instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light h-bg-whatsapp">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-7 d-flex justify-content-end">

                            <div class="row w-100">
                                <div class="col-lg-4 col-6">
                                    <ul class="widget_links widget-li-noicon">
                                        <li class="mb-2 fw-medium"><a href="/">Beranda</a></li>
                                        <li class="mb-2 fw-medium"><a href="/perusahaan">Tentang Kami</a></li>
                                        <li class="mb-2 fw-medium"><a href="/faqs">FAQs</a></li>
                                        <li class="mb-2 fw-medium"><a href="#">Dukungan Kami</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-6">
                                    <ul class="widget_links widget-li-noicon">
                                        <li class="mb-2 fw-medium"><a href="/produk-layanan">Produk Keemasan</a></li>
                                        <li class="mb-2 fw-medium"><a href="/berita">Berita Terbaru</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-6">
                                    <ul class="widget_links widget-li-noicon">
                                        <li class="mb-2 fw-medium"><a href="/perusahaan">Tentang perusahaan</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
   ============================================= -->
            <div id="copyrights" class="bg-white">
                <div class="container">

                    <div class="row justify-content-between">

                        <div class="col"><?php $y = date('Y'); ?>
                            <span class="text-black-50">&copy;{{ $y }} Keemasan ID and All Rights Reserved
                                by
                                PT Kebun Emas Nusantara.</span>
                        </div>

                        <div class="col text-end">
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a
                                    href="#">Privacy
                                    Policy</a></div>
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-double-up bg-color h-bg-color-2 shadow rounded-circle"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // JavaScript with jQuery
        $(document).ready(function() {
            function fetchNotification() {
                $.ajax({
                    url: '/proxy-fetch', // Your Laravel proxy route
                    type: 'GET',
                    success: function(data) {
                        // If there's new data, display it
                        if (data) {
                            $('#notification-area').html(data);
                        }
                    },
                    complete: function() {
                        // Schedule the next request when the current one's complete
                        setTimeout(fetchNotification, 5000); // Adjust timing as needed
                    }
                });
            }

            // Initialize the polling function
            fetchNotification();
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 4000);
        });
    </script>
    <script src="{!! asset('js/plugins.min.js?' . rand(10000, 99999)) !!}"></script>
    <script src="{!! asset('js/functions.bundle.js?' . rand(10000, 99999)) !!}"></script>

    <script>
        jQuery(document).ready(function() {
            var lastScrollTop = 0;
            window.addEventListener("scroll", function(event) {
                var st = jQuery(this).scrollTop();
                if (st > lastScrollTop) {
                    jQuery('#header.sticky-on-scrollup').removeClass('show-sticky-onscroll'); // Down Scroll
                } else {
                    jQuery('#header.sticky-on-scrollup').addClass('show-sticky-onscroll'); // Up Scroll
                }
                lastScrollTop = st;
            });

            jQuery('.services-grid .feature-box').hover(
                function() {
                    jQuery(this).addClass("dark");
                },
                function() {
                    jQuery(this).removeClass("dark");
                }
            );
        });
    </script>


</body>

</html>
