<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Admin</title>
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
            <h1>แดชบอร์ด</h1>
        </div><!-- End Page Title -->
        @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
        <section class="section dashboard">
            <div class="row">

                @foreach ($user as $user)
                @endforeach

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> --}}

                                <div class="card-body">
                                    <h5 class="card-title">ปราชญ์ชาวบ้าน <span>| จำนวน</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $count }}</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                            <span class="text-muted small pt-1 fw-bold">คน</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">สตาฟ <span>| จำนวน</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-geo-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $staff }}</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                            <span class="text-muted small pt-1 fw-bold">คน</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">ผลงานทั้งหมด <span>| จำนวน</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-list-ul"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $perform }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-1 fw-bold">ที่เข้าชม</span> --}}
                                            <!-- <span class="text-muted small pt-2 ps-1">ที่เข้าชม</span> -->
                                            <span class="text-muted small pt-1 fw-bold">ผลงาน</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">แผนภูมิ</h5>

                                    <!-- Doughnut Chart -->
                                    <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            const plotData = {!! json_encode($plot) !!};
                                            const labels = plotData.map(item => item.groups);
                                            const data = plotData.map(item => item.count);
                                            new Chart(document.querySelector('#doughnutChart'), {
                                                type: 'doughnut',
                                                data: {
                                                    labels: labels,
                                                    datasets: [{
                                                        label: 'จำนวนปราชญ์',
                                                        data: data,
                                                        backgroundColor: [
                                                            'rgb(255, 99, 132)',
                                                            'rgb(54, 162, 235)',
                                                            'rgb(99, 255, 120)',
                                                            'rgb(99, 229, 255)',
                                                            'rgb(255, 135, 99)',
                                                            'rgb(211, 99, 255)',
                                                            'rgb(255, 205, 86)'
                                                        ],
                                                        hoverOffset: 4
                                                    }]
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Doughnut CHart -->

                                </div>
                            </div>
                            {{-- <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Bar Chart</h5>
                                    
                                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            const plotData = {!! json_encode($plot) !!};
                                            const labels = plotData.map(item => item.groups);
                                            const data = plotData.map(item => item.count);
                                            new Chart(document.querySelector('#barChart'), {
                                                type: 'bar',
                                                data: {
                                                    labels: labels,
                                                    datasets: [{
                                                        label: 'Bar Chart',
                                                        data: data,
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(255, 159, 64, 0.2)',
                                                            'rgba(255, 205, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
                                                            'rgba(153, 102, 255, 0.2)',
                                                            'rgba(153, 102, 255, 0.2)',
                                                            'rgba(201, 203, 207, 0.2)'
                                                        ],
                                                        borderColor: [
                                                            'rgb(255, 99, 132)',
                                                            'rgb(255, 159, 64)',
                                                            'rgb(255, 205, 86)',
                                                            'rgb(75, 192, 192)',
                                                            'rgb(54, 162, 235)',
                                                            'rgb(153, 102, 255)',
                                                            'rgb(153, 102, 255)',
                                                            'rgb(201, 203, 207)'
                                                        ],
                                                        borderWidth: 0.5
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Bar CHart -->

                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
        </section>

    </main><!-- End #main -->

    @include('layouts.jpindustry')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.staffsrc')

    <!-- Template Main JS File -->
    {{-- <script src="assets/js/main.js"></script> --}}
    <script src={{ asset('js/main.js') }}></script>

</body>

</html>
