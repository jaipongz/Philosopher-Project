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
    @include('layouts.adminnavbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.adminaside')

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
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body pt-3">
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
                                            <div class="col-lg-3 col-md-4 label">เบอร์โทร</div>
                                            <div class="col-lg-9 col-md-8">{{ $users->tel }}</div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                        <!-- Profile Edit Form -->

                                        <form action="{{ route('admin.edituser', ['id' => $users->id]) }}"
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
                                                        <a href="#" class="btn btn-danger btn-sm"
                                                            title="Remove my profile image"><i class="bi bi-trash">
                                                            </i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">ชื่อ -
                                                    นามสกุล</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newname" type="text" class="form-control"
                                                        id="fullName" value="{{ $users->name }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="company"
                                                    class="col-md-4 col-lg-3 col-form-label">หมวดหมู่ / สาขา</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newgroup" type="text" class="form-control"
                                                        id="company" value="{{ $users->groups }}">
                                                    <select class="form-select" name="newgroup" id="selectInput"
                                                        style="display: none;">
                                                        @foreach ($group as $group)
                                                            <option value="{{ $group->skill }}">{{ $group->skill }}
                                                            </option>
                                                        @endforeach
                                                    </select>
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
                                        <form action="{{ route('admin.changepass', ['id' => $users->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
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
                                                    class="col-md-4 col-lg-3 col-form-label">ยืนยันรหัสผ่านใหม่</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="renewpassword" type="password" class="form-control"
                                                        id="renewPassword">
                                                </div>
                                            </div>
                                            @if (session('error'))
                                                <script>
                                                    alert("{{ session('error') }}");
                                                </script>
                                            @endif

                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-primary">เปลี่ยนรหัสผ่าน</button>
                                            </div>
                                        </form><!-- End Change Password Form -->
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
    @include('layouts.jpindustry')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.staffsrc')
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
