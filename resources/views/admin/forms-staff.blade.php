<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forms Staff</title>
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
            <h1>ฟอร์มกรอกข้อมูลสตาฟ</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ฟอร์มกรอกข้อมูล</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.storestaff', [Auth::user()->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="row mb-4">
                                    <label for="validationDefaultUsername" class="col-sm-3 col-form-label">ชื่อ -
                                        นามสกุล</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="staff_name" class="form-control"
                                            id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">ที่อยู่</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="staff_address" style="height: 100px"></textarea>
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
                                        <input type="number" name="staff_tel" class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">ไฟล์ อัพโหลด</label>
                                    <div class="col-sm-9">
                                        {{-- <input class="form-control" name="staff_pic" type="file" id="formFile"> --}}
                                        <input class="form-control" name="staff_pic" type="file">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="validationDefaultEmail" class="col-sm-3 col-form-label">อีเมล</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="validationDefaultEmail"
                                            name="staff_email" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="validationDefaultPassword"
                                        class="col-sm-3 col-form-label">สร้างรหัสผ่าน</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="staff_pass"
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

    
    {{-- <script>
        function showAmphoes() {
            let input_province = document.querySelector("#input_province");
            let url = "{{ url('/api/amphoes') }}?province=" + input_province.value;
            console.log(url);
            // if(input_province.value == "") return;
            fetch(url)
                .then(response => response.json())
                .then(result => {
                    console.log(result);
                    //UPDATE SELECT OPTION
                    let input_amphoe = document.querySelector("#input_amphoe");
                    input_amphoe.innerHTML = '<option value="">กรุณาเลือกเขต/อำเภอ</option>';
                    for (let item of result) {
                        let option = document.createElement("option");
                        option.text = item.amphoe;
                        option.value = item.amphoe;
                        input_amphoe.appendChild(option);
                    }
                    //QUERY AMPHOES
                    showTambons();
                });
        }

        function showTambons() {
            let input_province = document.querySelector("#input_province");
            let input_amphoe = document.querySelector("#input_amphoe");
            let url = "{{ url('/api/tambons') }}?province=" + input_province.value + "&amphoe=" + input_amphoe.value;
            console.log(url);
            // if(input_province.value == "") return;        
            // if(input_amphoe.value == "") return;
            fetch(url)
                .then(response => response.json())
                .then(result => {
                    console.log(result);
                    //UPDATE SELECT OPTION
                    let input_tambon = document.querySelector("#input_tambon");
                    input_tambon.innerHTML = '<option value="">กรุณาเลือกแขวง/ตำบล</option>';
                    for (let item of result) {
                        let option = document.createElement("option");
                        option.text = item.tambon;
                        option.value = item.tambon;
                        input_tambon.appendChild(option);
                    }
                    //QUERY AMPHOES
                    showZipcode();
                });
        }

        function showZipcode() {
            let input_province = document.querySelector("#input_province");
            let input_amphoe = document.querySelector("#input_amphoe");
            let input_tambon = document.querySelector("#input_tambon");
            let url = "{{ url('/api/zipcodes') }}?province=" + input_province.value + "&amphoe=" + input_amphoe.value +
                "&tambon=" + input_tambon.value;
            console.log(url);
            // if(input_province.value == "") return;        
            // if(input_amphoe.value == "") return;     
            // if(input_tambon.value == "") return;
            fetch(url)
                .then(response => response.json())
                .then(result => {
                    console.log(result);
                    //UPDATE SELECT OPTION
                    let input_zipcode = document.querySelector("#input_zipcode");
                    input_zipcode.value = "";
                    for (let item of result) {
                        input_zipcode.value = item.zipcode;
                        break;
                    }
                });
        }
        //EVENTS
        document.querySelector('#input_province').addEventListener('change', (event) => {
            showAmphoes();
        });
        document.querySelector('#input_amphoe').addEventListener('change', (event) => {
            showTambons();
        });
        document.querySelector('#input_tambon').addEventListener('change', (event) => {
            showZipcode();
        });
    </script> --}}

</body>

</html>
