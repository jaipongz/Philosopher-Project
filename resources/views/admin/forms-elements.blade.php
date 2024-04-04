<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forms</title>
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
    <link href={{ asset('css/staff.css') }} rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.adminnavbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.adminaside')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>ฟอร์มกรอกข้อมูลปราชญ์ชาวบ้าน</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ฟอร์มกรอกข้อมูล</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.storeuser', [Auth::user()->id]) }}"
                                enctype="multipart/form-data" method="post">
                                @csrf
                                @method('POST')
                                <div class="row mb-4">
                                    <label for="validationDefaultUsername"
                                        class="col-sm-3 col-form-label">ชื่อ-นามสกุล</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control"
                                            id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">ที่อยู่</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="address" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">จังหวัด</label>
                                    <div class="col-sm-6">
                                        <select name="province" class="form-control" id="input_province">
                                            <option name="province" value="">กรุณาเลือกจังหวัด</option>
                                            @foreach ($provinces as $item)
                                                <option value="{{ $item->province }}">{{ $item->province }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">อำเภอ</label>
                                    <div class="col-sm-6">
                                        <select name="amphoe" class="form-control" id="input_amphoe">
                                            <option value="">กรุณาเลือกเขต/อำเภอ</option>
                                            @foreach ($amphoes as $item)
                                                <option value="{{ $item->amphoe }}">{{ $item->amphoe }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">ตำบล</label>

                                    <div class="col-sm-6">
                                        <select name="tambon" class="form-control" id="input_tambon">
                                            <option value="">กรุณาเลือกแขวง/ตำบล</option>
                                            @foreach ($tambons as $item)
                                                <option value="{{ $item->tambon }}">{{ $item->tambon }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">รหัสไปรษณีย์</label>
                                    <div class="col-sm-4">
                                        <input id="input_zipcode" type="address" name="zipcode" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">เบอร์โทร</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="tel" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label">หมวดหมู่/สาขา</label>
                                    <div class="col-sm-9" style="display: flex; gap:1rem;">
                                        <select class="form-select" name="group" aria-label="Default select example"
                                            placeholder="กรุณาเลือก">
                                            <option selected>กรุณาเลือก</option>
                                            @foreach ($group as $group)
                                                <option value="{{ $group->skill }}">{{ $group->skill }}
                                                </option>
                                            @endforeach

                                        </select>
                                        <div class="col-sm-4">
                                            <a href="{{route('admin.editgroup')}}" class="btn btn-warning ">แก้ไขหมวดหมู่</a>

                                        </div>

                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">เพิ่มเติม</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="more" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">ทักษะความสามารถ</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="skill" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">รูปโปรไฟล์</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="profile_pic" type="file"
                                            id="formFile">
                                    </div>
                                </div>
                                {{-- <div class="row mb-4" id="locationForm">
                                    <label for="inputText" class="col-sm-3 col-form-label">Address Location</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="address" id="address" name="location"
                                            required>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-outline-info"><i
                                                class="bi bi-map-fill"></i></i></i></button>
                                    </div>
                                </div> --}}

                                <div class="row mb-4">
                                    <label for="validationDefaultPassword"
                                        class="col-sm-3 col-form-label">อีเมล</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control"
                                            aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="validationDefaultPassword"
                                        class="col-sm-3 col-form-label">สร้างรหัสผ่าน</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="user_pass" class="form-control"
                                            id="validationDefaultPassword" aria-describedby="inputGroupPrepend2"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary">บันทึกฟอร์ม</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.jpindustry')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.staffsrc')
    @include('layouts.tambonsc')

</body>

</html>
