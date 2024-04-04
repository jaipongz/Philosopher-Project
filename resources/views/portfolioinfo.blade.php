<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ผลงาน ปราชญ์ชาวบ้าน</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ asset('vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('vendor/remixicon/remixicon.css') }} rel="stylesheet">
    <link href={{ asset('vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="assets/" rel="stylesheet">
  <link href="assets/" rel="stylesheet">
  <link href="assets/" rel="stylesheet">
  <link href="assets/" rel="stylesheet">
  <link href="assets/" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    <link href={{ asset('css/home.css') }} rel="stylesheet">
    {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}

    <!-- Icons -->
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <!-- =======================================================
  * Template Name: Tempo
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .info {

            text-align: center;
            /* margin: 2rem 2rem; */
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 2px 2px 8px 4px rgba(0, 0, 0, 0.1);
            /* margin-top: 2rem; */
            margin-bottom: 2rem;

        }

        .info img {
            /* width: 800px; */
            /* width: 80%; */
            margin: 1rem 0;
        }

        .info h5 {
            /* margin-bottom: 1rem; */
        }

        .info h1 {
            margin-top: 2rem;
        }

        .showinfo {
            margin: 2rem 2rem;
        }

        .headin {
            margin-top: 2rem;
        }

        .infoscript {
            display: flex;
            justify-content: center;
        }

        .script {
            width: 80%;
            margin-bottom: 2rem;
        }

        .act {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .headimg {}

        .headimg img {
            width: 50%;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>

    <!-- header-inner-pages -->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="{{ route('home') }}">ปราชญ์ชาวบ้าน</a>
                <p style="padding-top: 10px; font-size: large; color: azure;">อำเภอกันทรวิชัย จังหวัดมหาสารคาม</p>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <!-- <li><a class="nav-link scrollto " href="#hero">Home</a></li> -->
                    <li><a class="nav-link scrollto" href="{{ route('home') }}">หน้าหลัก</a></li>
                    <li><a class="nav-link scrollto" href="/login">ลงชื่อเข้าใช้</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('serchfilter') }}"><i class="bi bi-search"></i></a>
                    {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}

                    <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">หน้าหลัก</a></li>
                    <li>Portfolio Details</li>
                </ol>
                <h2>Portfolio Details</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="info">
                        <div class="showinfo">
                            @foreach ($header as $head)
                                <div class="headin">
                                    <h1>{{ $head->image_alt }}</h1>
                                </div>
                                <div class="headimg">
                                    <img src="{{ url('public/image/' . $head->image) }}" alt="">

                                </div>
                                <div class="infoscript">
                                    <div class="script">
                                        {!! $head->perform !!}
                                    </div>
                                </div>
                            @endforeach
                            <div class="act">
                                <a href="{{ route('portfolio', ['id' => $head->user_id]) }}"
                                    class="btn btn-warning">ย้อนกลับ</a>
                                <a href="{{ route('home') }}" class="btn btn-primary">หน้าหลัก</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </section>

        {{-- <div class="col-lg-12">
            <div class="row showcard">
                @foreach ($cont as $cont)
                    <div class="cardper">
                        <div class="conper">

                            <img src="{{ url('public/image/' . $cont->image) }}" alt="">
                            <h6>{{ $cont->image_alt }}</h6>

                        </div>
                        
                    </div>

                    <div class="card " style="width: 23rem;">
                        <div class="image_perform">
                            <img src="{{ url('public/image/' . $cont->image) }}">
                        </div>
                        
                        <div class="card-body">
                            <div class="alt">
                                <h5 class="card-title">{{ $cont->image_alt }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div> --}}


        <!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>ปราชญ์ชาวบ้าน</h3>
                        <p style="font-size: 20px; color: #3e3e3e;">อำเภอกันทรวิชัย จังหวัดมหาสารคาม</p>
                        <p>
                            คณะวิศวกรรมศาสตร์ เลขที่ 80 <br>
                            ถนน นครสวรรค์ ตำบลตลาด อำเภอเมือง<br>
                            จังหวัดมหาสารคาม <br><br>
                            <strong>โทรศัพท์:</strong> 043-711654<br>
                            <strong>อีเมล:</strong> enrmu@rmu.ac.th<br>
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>หน้าหลัก</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">ปราชญ์าวบ้าน</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">เกี่ยวกับเรา</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/login">ลงชื่อเข้าใช้</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('serchfilter') }}">ค้นหา</a></li>
                        </ul>
                    </div>
                </div>

                    {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div> --}}

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Tempo</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>


    <script src="{{ asset('js/main.js') }}"></script>


    <!-- Template Main JS File -->
    {{-- <script src="assets/js/main.js"></script> --}}

</body>

</html>
