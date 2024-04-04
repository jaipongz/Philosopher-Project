<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Users / Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href={{ asset('venstaff/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('venstaff/bootstrap-icons/bootstrap-icons.css') }}>
    <link rel="stylesheet" href={{ asset('venstaff/boxicons/css/boxicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('venstaff/quill/quill.snow.css') }}>
    <link rel="stylesheet" href={{ asset('venstaff/quill/quill.bubble.css') }}>
    <link rel="stylesheet" href={{ asset('venstaff/remixicon/remixicon.css') }}>
    <link rel="stylesheet" href={{ asset('venstaff/simple-datatables/style.css') }}>


    <!-- Template Main CSS File -->
    <link rel="stylesheet" href={{ asset('css/staff.css') }}>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .profile_pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;

        }

        .profile_pic img {
            /* width: 100%;
      height: auto; */
            object-fit: cover;
            /* display: block; */
            /* overflow: hidden; */
        }

        .editprofile {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
        }

        .editprofile img {
            width: 100%;
            object-fit: cover;
        }

        .group {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Philosopher</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">LomiwiriS</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <a href="users-profile.html">
                                <h6>LomiwiriS</h6>
                                <span style="color: #6c757d;">LomiwiriS123@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-login.html">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.philosopheraside')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @foreach ($user as $users)
            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">

                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <div class="profile_pic">
                                    <img id="profileImage" src="{{ url('public/image/' . $users->profile_pic) }}"
                                        alt="Profile">
                                </div>
                                <h2>{{ $users->user_name }}</h2>
                                <h3 class="group">{{ $users->group }}</h3>
                                {{-- <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">ภาพรวม</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#profile-edit">แก้ไขโปรไฟล์</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#profile-change-password">เปลี่ยนรหัสผ่าน</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#profile-craeteby">Create By</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Profile Details</h5>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">ชื่อ - นามสกุล</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->user_name }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">หมวดหมู่ / สาขา</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->group }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ทักษะความสามารถ</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->skill }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ที่อยู่</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->address }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">เบอร์โทร</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->tel }}</div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                        

                                        <form action="{{ route('staff.editprofile', ['id' => $users->user_id]) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                            @method('PUT')
                                            {{-- <div class="row mb-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">รูปโปรไฟล์</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="editprofile">
                                                        <img id="previewImage" name="oldprofile"
                                                            src="{{ url('public/image/' . $users->profile_pic) }}"
                                                            alt="Profile">
                                                    </div>
                                                    <div class="pt-2">
                                                        <a href="#" id="fileLink"
                                                            class="btn btn-primary btn-sm"
                                                            title="Upload new profile image"><i
                                                                class="bi bi-upload"></i></a>
                                                        <input type="file" name="newprofile" id="fileInput"
                                                            style="display: none;">
                                                        <a href="#" class="btn btn-danger btn-sm"
                                                            title="Remove my profile image"><i class="bi bi-trash">
                                                            </i></a>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            {{-- <div class="row mb-3">
                                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">ชื่อ -
                                                    นามสกุล</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newname" type="text" class="form-control"
                                                        id="fullName" value="{{ $users->user_name }}">
                                                </div>
                                            </div> --}}

                                            {{-- <div class="row mb-3">
                                                <label for="company"
                                                    class="col-md-4 col-lg-3 col-form-label">หมวดหมู่ / สาขา</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newgroup" type="text" class="form-control"
                                                        id="company" value="{{ $users->group }}">
                                                    <select class="form-select" name="newgroup" id="selectInput"
                                                        style="display: none;">
                                                        <option selected>กรุณาเลือก</option>
                                                        <option value="สาขาภูมิปัญญาด้านเกษตรกรรม">
                                                            สาขาภูมิปัญญาด้านเกษตรกรรม</option>
                                                        <option value="สาขาภูมิปัญญาด้านเศรษฐกิจ">
                                                            สาขาภูมิปัญญาด้านเศรษฐกิจ</option>
                                                        <option
                                                            value="สาขาภูมิปัญญาด้านศาสนาคุณธรรมจริยธรรมค่านิยมความเชื่อ">
                                                            สาขาภูมิปัญญาด้านศาสนาคุณธรรมจริยธรรมค่านิยมความเชื่อ
                                                        </option>
                                                        <option
                                                            value="สาขาภูมิปัญญาด้านการจัดการทรัพยากรและการพัฒนาหมู่บ้าน">
                                                            สาขาภูมิปัญญาด้านการจัดการทรัพยากรและการพัฒนาหมู่บ้าน
                                                        </option>
                                                        <option value="สาขาภูมิปัญญาด้านศิลปะ">สาขาภูมิปัญญาด้านศิลปะ
                                                        </option>
                                                        <option value="สาขาภูมิปัญญาด้านการจัดการสิ่งแวดล้อม">
                                                            สาขาภูมิปัญญาด้านการจัดการสิ่งแวดล้อม</option>
                                                        <option value="สาขาภูมิปัญญาด้านภาษาและวรรรกรรม">
                                                            สาขาภูมิปัญญาด้านภาษาและวรรรกรรม</option>
                                                    </select>
                                                </div>
                                            </div> --}}

                                            {{-- <div class="row mb-3">
                                                <label for="Job"
                                                    class="col-md-4 col-lg-3 col-form-label">ทักษะความสามารถ</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newskill" type="text" class="form-control"
                                                        id="Job" value="{{ $users->skill }}">
                                                </div>
                                            </div> --}}

                                            {{-- <div class="row mb-3">
                                                <label for="Country"
                                                    class="col-md-4 col-lg-3 col-form-label">ที่อยู่</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newaddress" type="text" class="form-control"
                                                        id="Country" value="{{ $users->address }}">
                                                </div>
                                            </div> --}}
                                            <div class="row mb-3">
                                                <label for="Email"
                                                    class="col-md-4 col-lg-3 col-form-label">เบอร์โทรศัพท์</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newemail" type="text" class="form-control"
                                                        id="Phone" value="{{ $users->email }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Phone"
                                                    class="col-md-4 col-lg-3 col-form-label">เบอร์โทรศัพท์</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newphone" type="text" class="form-control"
                                                        id="Phone" value="{{ $users->tel }}">
                                                </div>
                                            </div>

                                            {{-- <div class="row mb-3">
                                                <label for="Email"
                                                    class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="email" type="email" class="form-control"
                                                        id="Email" value="k.anderson@example.com">
                                                </div>
                                            </div> --}}
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->

                                    </div>

                                    <div class="tab-pane fade pt-3" id="profile-change-password">
                                        <!-- Change Password Form -->
                                        <form>

                                            <div class="row mb-3">
                                                <label for="currentPassword"
                                                    class="col-md-4 col-lg-3 col-form-label">รหัสผ่านปัจจุบัน</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="password" class="form-control"
                                                        id="currentPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="newPassword"
                                                    class="col-md-4 col-lg-3 col-form-label">รหัสผ่านใหม่</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newpassword" type="password" class="form-control"
                                                        id="newPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="renewPassword"
                                                    class="col-md-4 col-lg-3 col-form-label">ป้อนรหัสผ่านใหม่</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="renewpassword" type="password" class="form-control"
                                                        id="renewPassword">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-primary">เปลี่ยนรหัสผ่าน</button>
                                            </div>
                                        </form><!-- End Change Password Form -->
                                    </div>


                                    <div class="tab-pane fade profile-craeteby" id="profile-craeteby">
                                        <h5 class="card-title">ข้อมูลโปรไฟล์</h5>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">ชื่อ - นามสกุล</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->user_name }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">หมวดหมู่ / สาขา</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->group }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ทักษะความสามารถ</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->skill }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ที่อยู่</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->address }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">เบอร์โทร</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->tel }}</div>
                                        </div>
                                    </div>



                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endforeach

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- <link rel="stylesheet" href={{ asset('venstaff/bootstrap/css/bootstrap.min.css') }}> --}}
    <script src={{ asset('venstaff/apexcharts/apexcharts.min.js') }}></script>
    <script src={{ asset('venstaff/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('venstaff/chart.js/chart.umd.js') }}></script>
    <script src={{ asset('venstaff/echarts/echarts.min.js') }}></script>
    <script src={{ asset('venstaff/quill/quill.min.js') }}></script>
    <script src={{ asset('venstaff/simple-datatables/simple-datatables.js') }}></script>
    <script src={{ asset('venstaff/tinymce/tinymce.min.js') }}></script>
    <script src={{ asset('venstaff/php-email-form/validate.js') }}></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src={{ asset('js/staffmain.js') }}></script>
    <script>
        document.getElementById('fileLink').addEventListener('click', function() {
            document.getElementById('fileInput').click();
            document.getElementById('imageInput').style.display = 'block';
        });

        document.getElementById('company').addEventListener('click', function() {
            document.getElementById('company').style.display = 'none';
            document.getElementById('selectInput').style.display = 'block';
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const previewImage = document.getElementById('previewImage');
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };

                reader.readAsDataURL(file);
            }
        });
    </script>

</body>

</html>
