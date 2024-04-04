<!DOCTYPE html>
<html lang="en">

@include('layouts.user_head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.user_navbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.philosopheraside')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>โปรไฟล์</h1>
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
                                <h2>{{ $users->name }}</h2>
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
                                            data-bs-target="#profile-craeteby">Create By</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Profile Details</h5>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">ชื่อ - นามสกุล</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->name }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">หมวดหมู่ / สาขา</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->groups }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ทักษะความสามารถ</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->skill }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ที่อยู่</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->address }}
                                                ตำบล{{ $users->tambon }}
                                                อำเภอ{{ $users->amphoe }} จังหวัด{{ $users->province }}
                                                <br>
                                                รหัสไปรษณีย์ {{ $users->zipcode }}

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">อีเมล</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->email }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">เบอร์โทร</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->tel }}</div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                        <!-- Profile Edit Form -->

                                        <form action="{{ route('user.editprofile', ['id' => $users->id]) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">รูปโปรไฟล์</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="editprofile">
                                                        <img id="previewImage" name="oldprofile"
                                                            src="{{ url('public/image/' . $users->profile_pic) }}"
                                                            alt="Profile">
                                                    </div>
                                                    <div class="pt-2">
                                                        <a href="#" id="fileLink" class="btn btn-primary btn-sm"
                                                            title="Upload new profile image"><i
                                                                class="bi bi-upload"></i></a>
                                                        <input type="file" name="newprofile" id="fileInput"
                                                            style="display: none;">
                                                        {{-- <input type="file"> --}}
                                                        {{-- <a href="#" class="btn btn-danger btn-sm"
                                                            title="Remove my profile image"><i class="bi bi-trash">
                                                            </i></a> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            <div class="row mb-3">
                                                <label for="Job"
                                                    class="col-md-4 col-lg-3 col-form-label">ทักษะความสามารถ</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newskill" type="text" class="form-control"
                                                        id="Job" value="{{ $users->skill }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Country"
                                                    class="col-md-4 col-lg-3 col-form-label">ที่อยู่</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newaddress" type="text" class="form-control"
                                                        id="Country" value="{{ $users->address }}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="inputText" class="col-sm-3 col-form-label">จังหวัด</label>
                                                <div class="col-sm-6">
                                                    <select name="province" class="form-control" id="input_province">
                                                        <option name="province" value="{{ $users->province }}">
                                                            {{ $users->province }}
                                                        </option>
                                                        @foreach ($provinces as $item)
                                                            <option value="{{ $item->province }}">
                                                                {{ $item->province }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <label for="inputText" class="col-sm-3 col-form-label">อำเภอ</label>
                                                <div class="col-sm-6">
                                                    <select name="amphoe" class="form-control" id="input_amphoe">
                                                        <option value="{{ $users->amphoe }}">{{ $users->amphoe }}
                                                        </option>
                                                        @foreach ($amphoes as $item)
                                                            <option value="{{ $item->amphoe }}">{{ $item->amphoe }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <label for="inputText" class="col-sm-3 col-form-label">ตำบล</label>

                                                <div class="col-sm-6">
                                                    <select name="tambon" class="form-control" id="input_tambon">
                                                        <option value="{{ $users->tambon }}">{{ $users->tambon }}
                                                        </option>
                                                        @foreach ($tambons as $item)
                                                            <option value="{{ $item->tambon }}">{{ $item->tambon }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4" style="display: none">
                                                <label for="inputNumber"
                                                    class="col-sm-3 col-form-label">รหัสไปรษณีย์</label>
                                                <div class="col-sm-4">
                                                    <input id="input_zipcode" value="{{ $users->zipcode }}"
                                                        type="address" name="zipcode" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Email"
                                                    class="col-md-4 col-lg-3 col-form-label">อีเมล</label>
                                                <div class="col-md-6">
                                                    <input name="newemail" type="text" class="form-control"
                                                        id="Phone" value="{{ $users->email }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Phone"
                                                    class="col-sm-3 col-form-label">เบอร์โทรศัพท์</label>
                                                <div class="col-sm-6">
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
                                                <button type="submit" class="btn btn-primary">บันทึก</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->

                                    </div>

                                    
                                    @foreach ($creator as $creator)
                                    @endforeach

                                    <div class="tab-pane fade profile-craeteby" id="profile-craeteby">
                                        <h5 class="card-title">ข้อมูลโปรไฟล์</h5>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">ชื่อ - นามสกุล</div>
                                            <div class="col-lg-9 col-md-8">{{ $creator->name }}</div>
                                        </div>




                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ที่อยู่</div>
                                            <div class="col-lg-9 col-md-8">{{ $creator->address }}
                                                ตำบล{{ $creator->tambon }}
                                                อำเภอ{{ $creator->amphoe }} จังหวัด{{ $creator->province }}
                                                <br>
                                                รหัสไปรษณีย์ {{ $creator->zipcode }}

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">เบอร์โทร</div>
                                            <div class="col-lg-9 col-md-8">{{ $creator->tel }}</div>
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
    

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src={{ asset('js/staffmain.js') }}></script>
    @include('layouts.tambonsc')
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
