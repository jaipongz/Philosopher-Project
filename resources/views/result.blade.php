<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ปราชญ์ชาวบ้าน อำเภอกันทรวิชัย จังหวัดมหาสารคาม</title>
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
    <link rel="stylesheet" href={{ asset('venstaff/bootstrap-icons/bootstrap-icons.css') }}>
    <link href={{ asset('vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ asset('vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('vendor/remixicon/remixicon.css') }} rel="stylesheet">
    <link href={{ asset('vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

    {{-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    {{-- <link href="resources/views/User/assets/css/style.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href={{ asset('css/home.css') }}>

    <!-- Icons -->
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <style>
        .img-show {
            height: 400px;
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
    </style>
</head>

<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="{{ route('home') }}">ปราชญ์ชาวบ้าน</a>
                <p style="padding-top: 10px; font-size: large; color: azure;">อำเภอกันทรวิชัย จังหวัดมหาสารคาม</p>
            </h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}">หน้าหลัก</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>ประเภทปราชญ์ชาวบ้าน</span><i
                                class="bi bi-chevron-down"></i></a>
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-สาขาภูมิปัญญาด้านเกษตรกรรม"><a
                                    href="#">สาขาภูมิปัญญาด้านการเกษตร</a></li>
                            <li data-filter=".filter-สาขาภูมิปัญญาด้านเศรษฐกิจ"><a
                                    href="#">สาขาภูมิปัญญาด้านเศรษฐกิจ</a></li>
                            <li data-filter=".filter-สาขาภูมิปัญญาด้านศาสนาคุณธรรมจริยธรรมค่านิยมความเชื่อ"><a
                                    href="#">สาขาภูมิปัญญาด้านศาสนาคุณธรรมจริยธรรมค่านิยมความเชื่อ</a></li>
                            <li data-filter=".filter-สาขาภูมิปัญญาด้านการจัดการทรัพยากรและการพัฒนาหมู่บ้าน"><a
                                    href="#">สาขาภูมิปัญญาด้านกการจัดการทรัพยากรและการพัฒนาหมู่บ้าน</a></li>
                            <li data-filter=".filter-สาขาภูมิปัญญาด้านศิลปะ"><a
                                    href="#">สาขาภูมิปัญญาด้านศิลปะ</a></li>
                            <li data-filter=".filter-สาขาภูมิปัญญาด้านการจัดการสิ่งแวดล้อม"><a
                                    href="#">สาขาภูมิปัญญาด้านการจัดการสิ่งแวดล้อม</a></li>
                            <li data-filter=".filter-สาขาภูมิปัญญาด้านภาษาและวรรรกรรม"><a
                                    href="#">สาขาภูมิปัญญาด้านภาษาและวรรณกรรม</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-link scrollto" href="/login">ลงชื่อเข้าใช้</a></li>
                    <div class="input-group d-flex">
                        <form class="search-wrapper" action="{{ route('serch') }}" method="POST">
                            @csrf
                            <input type="text" name="searchData" class="input" placeholder="ค้นหา">
                            <button class="search__btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                    height="22">
                                    <path
                                        d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"
                                        fill="#efeff1"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="portfolio" class="portfolio">

            <div class="container">
                <div class="section-title">
                    <h2>ปราชญ์ชาวบ้าน</h2>
                    <h3>ผลการค้นหา <span>"{{ $keyword }}"</span></h3>
                </div>
                <div class="row portfolio-container" id="portfolioContainer">
                    @if (isset($result) && is_array($result))
                        @foreach ($result as $key => $user)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $user['groups'] }} data-name="{{ strtolower($user['name']) }}"
                                data-address="{{ strtolower($user['address']) }}"
                                data-skill="{{ strtolower($user['skill']) }}"">
                                <div class="img-show">
                                    <img src="{{ url('public/image/' . $user['profile_pic']) }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="portfolio-info">
                                    <h4 class="name">{{ $user['name'] }}</h4>
                                    <h3 class="address" style="display: none">{{ $user['address']}}</h3>
                                    {{-- <h2 class="skill" style="display: none">{{ $user->skill }}</h2> --}}
                                    <p>ปราชญ์ชาวบ้าน {{ $user['groups'] }}</p>
                                    <a href="{{ url('public/image/' . $user['profile_pic']) }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                        title="{{ $user['image_alt'] }}"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio', ['id' => $user['id']]) }}" class="details-link"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @php
                            $shuffle = $result->shuffle();
                        @endphp
                        @foreach ($shuffle as $key => $user)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $user->groups }} data-name="{{ strtolower($user->name) }}"
                                data-address="{{ strtolower($user->address) }}"
                                data-skill="{{ strtolower($user->skill) }}"">
                                <div class="img-show">
                                    <img src="{{ url('public/image/' . $user->profile_pic) }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="portfolio-info">
                                    <h4 class="name">{{ $user->name }}</h4>
                                    <h3 class="address" style="display: none">{{ $user->address }}</h3>
                                    <h2 class="skill" style="display: none">{{ $user->skill }}</h2>
                                    <p>ปราชญ์ชาวบ้าน {{ $user->groups }}</p>
                                    <a href="{{ url('public/image/' . $user->profile_pic) }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                        title="{{ $user->image_alt }}"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio', ['id' => $user->id]) }}" class="details-link"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>เกี่ยวกับ</h2>
                    <h3>เรียนรู้เพิ่มเติม <span>เกี่ยวกับเรา</span></h3>
                </div>
                <div class="row content">
                    <div class="col-lg-10 p_a">
                        <p>
                            <strong>ปราชญ์ชาวบ้าน</strong> คือ บุคคลผู้เป็นเจ้าของภูมิปัญญาชาวบ้าน
                            และนำภูมิปัญญามาใช้ประโยชน์ในการดำรงชีวิตจนประสบผล
                            สำเร็จสามารถถ่ายทอด เชื่อมโยงคุณค่าของอดีตกับปัจจุบันได้
                            อย่างเหมาะสม คนไทยแต่โบราณนั้น มีภูมิปัญญาที่ฉลาดล้ำลึก
                            ในการประดิษฐ์คิดค้นสร้างสรรค์ เพื่อใช้ประโยชน์จากสิ่งแวดล้อม
                            เพื่อแก้ปัญหาที่เกิดขึ้นในท้องถิ่น
                            ในขณะที่ทุนทางสังคมเป็นปัจจัยที่สำคัญปัจจัยหนึ่งที่จะผลักดันให้ภารกิจ
                            หน้าที่ ความรับผิดชอบของปราชญ์ชาวบ้านบรรลุเป้าหมายได้
                            เพราะทุนทางสังคมเป็นฐานทรัพยากรธรรมชาติและฐานวัฒนธรรม.</label>

                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                    </div>
                </div>
            </div>
        </section>



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
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">ปราชญ์าวบ้าน</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">เกี่ยวกับเรา</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#type">ประเภทปราชญ์ชาวบ้าน</a></li>
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
                    Develop by <a href="https://www.facebook.com/theerapong.tangman">JaipongZ Industry</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    {{-- <link href={{asset('vendor/swiper/swiper-bundle.min.css')}} rel="stylesheet"> --}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Add event listener to search input
        // document.getElementById("searchInput").addEventListener("input", function() {
        //     var keyword = this.value.toLowerCase(); // Get the entered keyword
        //     var portfolioItems = document.querySelectorAll(".portfolio-item"); // Get all portfolio items

        //     // Loop through each portfolio item
        //     portfolioItems.forEach(function(item) {
        //         var itemName = item.querySelector("h4").textContent
        //             .toLowerCase(); // Get the name of the portfolio item
        //         var itemAdd = item.querySelector("h3").textContent
        //             .toLowerCase(); // Get the name of the portfolio item
        //         var itemSkill = item.querySelector("h2").textContent
        //             .toLowerCase(); // Get the name of the portfolio item
        //         // Check if the name contains the keyword, if yes, display the item, else hide it
        //         if (itemName.includes(keyword) || itemAdd.includes(keyword) || itemSkill.includes(
        //                 keyword)) {
        //             item.style.display = "block";
        //         } else {
        //             item.style.display = "none";
        //         }


        //     });

        //     var visibleItems = document.querySelectorAll(
        //         '.portfolio-item[style="display: block;"]'); // Get visible items
        //     var portfolioContainer = document.getElementById(
        //         'portfolioContainer'); // Get the portfolio container

        //     // Hide all items inside the portfolio container
        //     portfolioContainer.querySelectorAll('.portfolio-item').forEach(function(item) {
        //         item.style.display = 'none';
        //     });

        //     // Show only the visible items inside the portfolio container
        //     visibleItems.forEach(function(item) {
        //         portfolioContainer.appendChild(item);
        //     });
        // });

        // $(document).ready(function() {
        //     $('#searchInput').on('keyup', function() {
        //         var searchText = $(this).val().toLowerCase(); // Get the value of the search input
        //         $('.portfolio-item').each(function() { // Loop through each portfolio item
        //             var name = $(this).find('.name').text().toLowerCase(); // Get the name
        //             var address = $(this).find('.address').text().toLowerCase(); // Get the address
        //             var skill = $(this).find('.skill').text().toLowerCase(); // Get the skill

        //             // Show or hide the portfolio item based on whether it matches the search text
        //             if (name.includes(searchText) || address.includes(searchText) || skill.includes(
        //                     searchText)) {
        //                 $(this).show();
        //             } else {
        //                 $(this).hide();
        //             }
        //         });
        //     });
        // });
    </script>

</body>

</html>
