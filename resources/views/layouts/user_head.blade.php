<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Philosopher</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    {{-- <script src="https://cdn.tiny.cloud/1/3u0ppzzr5xtxx2udyxefh7aeezur9m0pl96r9uegsze2s2px/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> --}}
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
    {{-- <script src="js/tinymce/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <x-head.tinymce-config/>
    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Jan 09 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        .profilenav {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            overflow: hidden;

        }

        .profilenav img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /* display: block; */
            /* overflow: hidden; */
        }

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

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 40%;
            max-width: 700px;
        }

        /* Close button */
        .close {
            color: #f1f1f1;
            position: absolute;
            top: 15px;
            right: 35px;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
