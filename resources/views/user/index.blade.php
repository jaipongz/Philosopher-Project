<!DOCTYPE html>
<html lang="en">

@include('layouts.user_head')

<body>

    <!-- ======= Header ======= -->
    !-- End Header -->
    @include('layouts.user_navbar')
    <!-- ======= Sidebar ======= -->
    @include('layouts.philosopheraside')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">ปราชญ์ชาวบ้าน <span>| จำนวน</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>32</h6>
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

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">ตำบล <span>| ในอำเภอกันทรวิชัย</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-geo-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>10</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                            <span class="text-muted small pt-1 fw-bold">ตำบล</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">ยอดที่เข้าชม <span>| ในปีนี้</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>888</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-1 fw-bold">ที่เข้าชม</span>
                                            <!-- <span class="text-muted small pt-2 ps-1">ที่เข้าชม</span> -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">ปราชญ์</h5>

                                    <!-- Bar Chart -->
                                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new Chart(document.querySelector('#barChart'), {
                                                type: 'bar',
                                                data: {
                                                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                                    datasets: [{
                                                        label: 'Bar Chart',
                                                        data: [65, 59, 80, 81, 56, 55, 40],
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(255, 159, 64, 0.2)',
                                                            'rgba(255, 205, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
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
                                                            'rgb(201, 203, 207)'
                                                        ],
                                                        borderWidth: 1
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
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Recent Activity -->
                                    <div class="card">
                                        <div class="filter">
                                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                    class="bi bi-three-dots"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <li class="dropdown-header text-start">
                                                    <h6>Filter</h6>
                                                </li>

                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                            </ul>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                                            <div class="activity">

                                                <div class="activity-item d-flex">
                                                    <div class="activite-label">32 min</div>
                                                    <i
                                                        class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                                    <div class="activity-content">
                                                        Quia quae rerum <a href="#"
                                                            class="fw-bold text-dark">explicabo officiis</a> beatae
                                                    </div>
                                                </div><!-- End activity item-->

                                                <div class="activity-item d-flex">
                                                    <div class="activite-label">56 min</div>
                                                    <i
                                                        class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                                    <div class="activity-content">
                                                        Voluptatem blanditiis blanditiis eveniet
                                                    </div>
                                                </div><!-- End activity item-->

                                                <div class="activity-item d-flex">
                                                    <div class="activite-label">2 hrs</div>
                                                    <i
                                                        class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                                    <div class="activity-content">
                                                        Voluptates corrupti molestias voluptatem
                                                    </div>
                                                </div><!-- End activity item-->

                                                <div class="activity-item d-flex">
                                                    <div class="activite-label">1 day</div>
                                                    <i
                                                        class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                                    <div class="activity-content">
                                                        Tempore autem saepe <a href="#"
                                                            class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                                    </div>
                                                </div><!-- End activity item-->

                                                <div class="activity-item d-flex">
                                                    <div class="activite-label">2 days</div>
                                                    <i
                                                        class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                                    <div class="activity-content">
                                                        Est sit eum reiciendis exercitationem
                                                    </div>
                                                </div><!-- End activity item-->

                                                <div class="activity-item d-flex">
                                                    <div class="activite-label">4 weeks</div>
                                                    <i
                                                        class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                                    <div class="activity-content">
                                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                                    </div>
                                                </div><!-- End activity item-->

                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Recent Activity -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- News & Updates Traffic -->
                                    <div class="card">
                                        <div class="filter">
                                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                    class="bi bi-three-dots"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <li class="dropdown-header text-start">
                                                    <h6>Filter</h6>
                                                </li>

                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                            </ul>
                                        </div>

                                        <div class="card-body pb-0">
                                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                                            <div class="news">
                                                <div class="post-item clearfix">
                                                    <img src="assets/img/news-1.jpg" alt="">
                                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed
                                                        ut harum...</p>
                                                </div>

                                                <div class="post-item clearfix">
                                                    <img src="assets/img/news-2.jpg" alt="">
                                                    <h4><a href="#">Quidem autem et impedit</a></h4>
                                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries
                                                        werona nande...</p>
                                                </div>

                                                <div class="post-item clearfix">
                                                    <img src="assets/img/news-3.jpg" alt="">
                                                    <h4><a href="#">Id quia et et ut maxime similique occaecati
                                                            ut</a></h4>
                                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed
                                                        ipsam et totam...</p>
                                                </div>

                                                <div class="post-item clearfix">
                                                    <img src="assets/img/news-4.jpg" alt="">
                                                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel
                                                        rerum cuder...</p>
                                                </div>

                                                <div class="post-item clearfix">
                                                    <img src="assets/img/news-5.jpg" alt="">
                                                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a>
                                                    </h4>
                                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae
                                                        dignissimos eius...</p>
                                                </div>

                                            </div><!-- End sidebar recent posts-->

                                        </div>

                                    </div><!-- End News & Updates -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>

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

    <!-- Vendor JS Files -->
    <script src={{ asset('venstaff/apexcharts/apexcharts.min.js') }}></script>
    <script src={{ asset('venstaff/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('venstaff/chart.js/chart.umd.js') }}></script>

    {{-- <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script> --}}

    <!-- Template Main JS File -->
    <script src={{ asset('js/main.js') }}></script>

</body>

</html>
