<!DOCTYPE html>
<html lang="en">

@include('layouts.user_head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.user_navbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.philosopheraside')

    <style>
        .upload_pic {
            /* justify-content: space-between; */
            gap:2rem;

        }

        .perform {
            margin-top: 25px;
        }

        .card {
            padding: 15px;
            /* height: 250px; */
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
            max-width: 400px;
        }

        .alt {
            text-align: center;
        }

        .modal-content {
            max-width: 1000px;
        }
    </style>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>ผลงานของฉัน</h1>
        </div><!-- End Page Title -->

        <section class="section perform">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row upload_pic">

                        @foreach ($perform as $perform)
                            {{-- card upload images --}}

                            <div class="card " style="width: 23rem;">
                                <div class="image_perform">
                                    <a href="{{ route('perform.info', ['id' => $perform->image_id]) }}">
                                        <img src="{{ url('public/image/' . $perform->image) }}">

                                    </a>
                                </div>
                                {{-- <a href="{{ route('perform.destoy', ['id' => $perform->image_id]) }}" type="button"
                                    class="btn btn-danger btn-sm position-absolute" style="top: 5px; right: 5px;" ">
                                  Delete<i class="fas fa-times"></i>
                                </a> --}}
                                <div class="card-body">
                                    <div class="alt">
                                        <h5 class="card-title">{{ $perform->image_alt }}</h5>
                                    </div>
                                </div>
                            </div>
 @endforeach
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
