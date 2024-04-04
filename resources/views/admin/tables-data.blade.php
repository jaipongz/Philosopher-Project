<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables / Data - NiceAdmin Bootstrap Template</title>
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
            <h1>รายชื่อปราชญ์ชาวบ้าน</h1>
        </div><!-- End Page Title -->
        @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
        <section class="section">
            <div class="row">
                <div class="">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">รายชื่อ</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th class="col-1">ลำดับ</th>
                                        <th class="col-sm-2">
                                            <!-- <b>N</b>ame -->
                                            ชื่อ - นามสกุล
                                            <!-- <th scope="col1">ที่อยู่</th> -->
                                        <th class="col-sm-3">ที่อยู่</th>
                                        <th class="col-sm-1">เบอร์โทร</th>
                                        <th class="col-sm-2">สาขาปราชญ์</th>
                                        <!-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> -->
                                        <th class="col-sm-1" style="text-align: center;">Edit</th>
                                    </tr>
                                </thead>
                                @foreach ($user as $users)
                                    <tbody id="contactTable">
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $users->address }}</td>
                                            <td>{{ $users->tel }}</td>
                                            <td>{{ $users->groups }}</td>

                                            <td>
                                                <a href="{{ route('admin.userprofile', ['id' => $users->id]) }}"
                                                    type="button" class="btn btn-warning edit-button" id="contactBtn1"
                                                    id="editBtn{{ $users->id }}" data-bs-toggle="popover"
                                                    data-bs-placement="right" title="ข้อมูลของ {{ $users->name }}"
                                                    data-bs-content="Loading..."><i class='bx bxs-user-detail'></i></a>
                                                {{-- <a href=""class="btn btn-danger edit-button">D</a> --}}
                                                <a href="{{ route('admin.destroyuser', ['id' => $users->id]) }}"
                                                    onclick="return confirm('Are you sure to Delete?')"
                                                    class="btn btn-danger" data-bs-toggle="popover"
                                                    data-bs-placement="right" title="ลบข้อมูล {{ $users->name }}"><i
                                                        class="bi bi-trash"></i></i></a>
                                            </td>
                                        </tr>


                                    </tbody>
                                @endforeach

                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <script>
        // document.getElementById("contactBtn1").addEventListener("click", onClickBtn);

        function onClickBtn() {
            document.getElementById("contactBtn1").onClickBtn = function() {
                location.href = "users-profile.html";
            }


            // console.log(onClickBtn);
        };

        var popovers = document.querySelectorAll('[data-bs-toggle="popover"]');
        popovers.forEach(function(popover) {
            new bootstrap.Popover(popover);
            popover.addEventListener('shown.bs.popover', function() {
                var staffId = popover.id.replace('editBtn', ''); // Extract staff ID from button ID
                var popoverContent = popover.querySelector('.popover-body');
                // Fetch data using AJAX
                fetch('/admin/staff/' + staffId)
                    .then(response => response.text())
                    .then(data => {
                        // Update popover content with fetched data
                        popoverContent.innerHTML = data;
                    });
            });
        });
    </script>

    <!-- ======= Footer ======= -->
    @include('layouts.jpindustry')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.staffsrc')

</body>

</html>
