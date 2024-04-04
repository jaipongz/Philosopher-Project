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
            /* width: 800px; */
            width: 80%;
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

        .modal {}

        .modal-content {
            margin-top: 5rem;
            margin-left: 37rem;
            /* background: transparent; */
        }

        .colmo {

            margin: 1rem 1rem;
        }

        .headmod {
            display: flex;
            justify-content: center;
        }




        .modalbut {
            display: flex;
            justify-content: flex-end;
            margin-top: 1rem;
        }

        .headimage {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            margin-bottom: 1rem;
            /* width: 50%; */
        }

        .headimage img {

            width: 50%;
        }
    </style>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>แก้ไขผลงาน</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">แก้ไขผลงาน</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="perform">

            <div class="row">

                <!-- Left side columns -->

                <div class="info">
                    <div class="showinfo">
                        @foreach ($perform as $perform)
                            <form action="{{ route('user.updateform', ['id' => $perform->image_id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-4" style="margin-top: 2rem; dp-flex ; justify-content:center;">
                                    {{-- <label for="newheader" class="col-sm-6 col-form-label">หัวข้อบทความ</label> --}}
                                    <div class="col-sm-4">
                                        <h5 style="color:brown">*ชื่อผลงาน</h5>
                                        <input name="newheader" class="form-control" type="text"
                                            value="{{ $perform->image_alt }}">
                                    </div>
                                </div>

                                {{-- <h1>เนื้อหาของ </h1> --}}
                                <div class="headimage">
                                    <div class="col-sm-10">
                                        <h5 style="color:brown">*รูปหน้าปก</h5>
                                        <img id="previewImage" src="{{ url('public/image/' . $perform->image) }}"
                                            data-toggle="modal" data-target="#uploadModal">
                                        <div class="changepro">
                                            <label for="imageInput" id="changeImageButton" class="btn btn-warning ">เปลี่ยนรูปหน้าปก</label>
                                            <input type="file" name="newprofile" id="imageInput" style="display:none;" accept="image/*">

                                        </div>
                                    </div>
                                </div>
                                <h5 style="color:brown">*เนื้อหาบทความ</h5>
                                <textarea name="dataform" id="myeditorinstance">{{ $perform->perform }}</textarea>
                                <div class="tools">
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                    <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">ยกเลิก</a>
                                </div>
                            </form>
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

    <div id="editModal" class="modal">
        <div class="modal-content">
            <div class="card-body">
                <span class="close" onclick="closeModal()">&times;</span>
                <div class="colmo">
                    <div class="headmod">
                        <h4>Edit Value</h4>
                    </div>
                    <textarea class="form-control" name="" id="newValue" cols="30" rows="10"></textarea>
                    <div class="modalbut">
                        <button class="btn btn-primary" id="saveEditButton">Save</button>
                        {{-- onclick="saveChanges()" --}}

                    </div>
                </div>
            </div>
        </div>
    </div>



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
        // document.getElementById('changeImageButton').addEventListener('click', function() {
        //     // Create an input element
        //     var input = document.createElement('input');
        //     input.type = 'file';

        //     // Trigger the input dialog when clicked
        //     input.click();

        //     // When a file is selected, handle it
        //     input.addEventListener('change', function() {
        //         var file = this.files[0];

        //         // Check if a file is selected
        //         if (file) {
        //             // Create a FileReader object
        //             var reader = new FileReader();

        //             // Set up the FileReader to load the image
        //             reader.onload = function(e) {
        //                 // Set the src attribute of the img tag to the loaded image
        //                 document.getElementById('previewImage').src = e.target.result;
        //             };

        //             // Read the selected file as a Data URL
        //             reader.readAsDataURL(file);
        //         }
        //     });
        // });

        document.getElementById('imageInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImage').src = e.target.result;
        };
        reader.readAsDataURL(file);
    });
    </script>


</body>

</html>
