<!DOCTYPE html>
<html lang="en">

@include('layouts.user_head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.user_navbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.philosopheraside')

    <style>
        .info {

            text-align: center;
            /* margin: 2rem 2rem; */
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 2px 2px 8px 4px rgba(0, 0, 0, 0.1);
            /* margin-top: 2rem; */

        }

        .info img {
            /* width: 80%; */
            margin: 1rem 0;
        }

        .info h5 {
            margin-bottom: 1rem;
        }

        .info h1 {
            margin-top: 2rem;
        }

        .tools {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            /* margin: 1rem; */
            margin-right: 12rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .infoscript {
            display: flex;
            justify-content: center;
        }

        .script {
            width: 80%;
        }

        /* .script img{
            width: 80%;
        } */
        .headpro img{
            width: 80%;
        }
    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>ผลงาน</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">ผลงาน</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="perform">
            <div class="row">
                <div class="info">
                    <div class="showinfo">
                        @foreach ($perform as $perform)
                            <h1>เนื้อหาของ {{ $perform->image_alt }}</h1>
                            <div class="headpro">
                                <img src="{{ url('public/image/' . $perform->image) }}">
                            </div>

                            <div class="infoscript">
                                <div class="script">
                                    {{-- <h5>{{ $info->perform_alt }}</h5> --}}
                                    {!! $perform->perform !!}
                                </div>
                            </div>
                        @endforeach
                        <div class="tools">
                            <a href="{{ route('perform.edit', ['id' => $perform->image_id]) }}"
                                class="btn btn-warning">แก้ไข</a>
                            <a href="{{ route('perform.destoy', ['id' => $perform->image_id]) }}"
                                onclick="return confirm('Are you sure to Delete?')" class="btn btn-danger">ลบ</a>
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
    <script>
        // $('#imageModal').on('show.bs.modal', function(event) {
        //     var img = $(event.relatedTarget); // Image that triggered the modal
        //     var src = img.attr('src'); // Get the source of the clicked image
        //     var modal = $(this);
        //     modal.find('.modal-body #expandedImg').attr('src', src);
        // });
    </script>

</body>

</html>
