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
        .swiper-slide {
            width: 500px;
            height: 500px;
        }

        .setpic {
            display: flex;
            justify-content: center;
        }

        .propic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .propic img {
            width: 100%;
            /* border-radius: 50%; */
        }

        .usm {
            text-align: center;
        }

        .upload_pic {
            /* justify-content: space-around; */
            /* width: 99%; */
            /* margin: 0 5px; */
            /* gap:-1rem; */

        }

        .perform {
            margin: 25px;

        }

        .card {
            padding: 15px;
            /* height: 250px; */
            box-shadow: 2px 2px 8px 4px rgba(0, 0, 0, 0.39);
            margin: 2rem;

        }

        .card:hover {
            cursor: pointer;
            box-shadow: none;
            /* margin: 2rem; */
            transition: transform 150ms ease-in-out;


        }

        /* .dashboard .info-card h6 {
      font-size: 28px;
      color: #012970;
      font-weight: 700;
      margin: 0;
      padding: 0;
    } */
        .image_perform {
            height: 250px;
            overflow: hidden;
        }

        .image_perform img {
            max-width: 100%;
        }

        .alt {
            text-align: center;
        }

        .modal-content {
            max-width: 1000px;
        }

        .search-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 35px;
        }

        .input {
            max-width: 190px;
            height: 100%;
            outline: none;
            font-size: 14px;
            font-weight: 500;
            background-color: #53535f;
            caret-color: #f7f7f8;
            color: #fff;
            padding: 7px 10px;
            border: 2px solid transparent;
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
            margin-right: 1px;
            transition: all .2s ease;
        }

        .input:hover {
            border: 2px solid rgba(255, 255, 255, 0.16);
        }

        .input:focus {
            border: 2px solid #ffffff;
            background-color: #0e0e10;
        }

        .search__btn {
            border: none;
            cursor: pointer;
            background-color: rgba(42, 42, 45, 1);
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px;
            height: 100%;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search__btn:hover {
            background-color: rgba(54, 54, 56, 1);
        }

        .breadcrumbs {
            margin-top: 115px;
        }
    </style>
</head>

<body>

    <!-- header-inner-pages -->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="{{ route('home') }}">ปราชญ์ชาวบ้าน</a>
                <p style="padding-top: 10px; font-size: large; color: azure;">อำเภอกันทรวิชัย จังหวัดมหาสารคาม</p>
            </h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}">หน้าหลัก</a></li>
                    <li><a class="nav-link scrollto" href="/login">ลงชื่อเข้าใช้</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('serchfilter') }}"><i class="bi bi-search"></i></a>
                       
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">หน้าหลัก</a></li>
                    <li>ข้อมูลโปรไฟล์</li>
                </ol>
                <h2>ข้อมูลโปรไฟล์</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                @foreach ($perform as $perform)
                                    <div class="swiper-slide">
                                        <img src="{{ url('public/image/' . $perform->image) }}"
                                            alt="{{ $perform->image_alt }}">
                                        {{-- <p>{{$perform->image_alt}}</p> --}}
                                        {{-- <h1>{{$perform->image_alt}}</h1> --}}
                                    </div>
                                @endforeach


                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>ข้อมูลโปรไฟล์</h3>
                            @foreach ($user as $users)
                                <ul>
                                    <div class="setpic">
                                        <div class="propic">
                                            <img src="{{ url('public/image/' . $users->profile_pic) }}" alt="">
                                        </div>
                                    </div>

                                    <li><strong>
                                            <div class="usm">
                                                <h5>{{ $users->name }}</h5>
                                            </div>
                                        </strong></li>
                                    <li><strong>หมวดหมู่/สาขา</strong>: {{ $users->groups }}</li>
                                    <li><strong>ทักษะความชำนาญ</strong>: {{ $users->skill }}</li>
                                    <li><strong>ที่อยู่</strong>: {{ $users->address }}
                                        ตำบล{{ $users->tambon }}
                                        อำเภอ{{ $users->amphoe }} จังหวัด{{ $users->province }}
                                        รหัสไปรษณีย์ {{ $users->zipcode }}</li>

                                    <li><strong>อีเมล</strong>: {{ $users->email }}</li>
                                    <li><strong>เบอร์โทร</strong>: {{ $users->tel }}</li>
                                    {{-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> --}}
                                </ul>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row upload_pic">
                            @foreach ($cont as $cont)
                                {{-- card upload images --}}
                                <a class="card " style="width: 23rem;"
                                    href="{{ route('portinfo', ['id' => $cont->image_id]) }}">
                                    <div>
                                        <div class="image_perform">
                                            <img src="{{ url('public/image/' . $cont->image) }}">
                                        </div>

                                        <div class="card-body">
                                            <div class="alt">
                                                <h5 class="card-title">{{ $cont->image_alt }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
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

                    <div class="col-lg-3 col-md-6 footer-contact">
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
                            <li><i class="bx bx-chevron-right"></i> <a href="/login">ลงชื่อเข้าใช้</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('serchfilter') }}">ค้นหา</a></li>
                        </ul>
                    </div>

                   

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
            {{-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div> --}}
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
