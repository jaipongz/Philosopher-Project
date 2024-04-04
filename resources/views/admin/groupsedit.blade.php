<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forms</title>
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
    <style>
        .addskill {
            display: flex;
            justify-content: flex-end;
            margin-right: 5rem;
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
            <h1>แก้ไขหมวดหมู่ปราชญ์</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แก้ไขหมวดหมู่ปราชญ์</h5>

                            <!-- General Form Elements -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>หมวดหมู่สาขา</th>
                                        <th>เครื่องมือ</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($skill as $skill)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $skill->skill }}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editSkillModal{{ $skill->skill_id }}">แก้ไข</button>

                                                <a href="{{ route('admin.destroygroup', ['id' => $skill->skill_id]) }}"
                                                    class="btn btn-danger">ลบ</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="editSkillModal{{ $skill->skill_id }}"
                                            tabindex="-1" aria-labelledby="editSkillModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editSkillModalLabel">
                                                            แก้ไขหมวดหมู่สาขา</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="editSkillForm"
                                                            action="{{ route('admin.updategroup', ['id' => $skill->skill_id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="mb-3">
                                                                <label for="editSkillName"
                                                                    class="form-label">ชื่อหมวดหมู่สาขา</label>
                                                                <input type="text" class="form-control"
                                                                    id="editSkillName" name="editSkillName"
                                                                    value="{{ $skill->skill }}">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">ยกเลิก</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">บันทึก</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                </tbody>
                            </table>
                            @if (session('success'))
                                <script>
                                    alert("{{ session('success') }}");
                                </script>
                            @endif
                            <div class="modal fade" id="addSkillModal" tabindex="-1"
                                aria-labelledby="editSkillModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editSkillModalLabel">
                                                เพิ่มหมวดหมู่สาขา</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.storegroup') }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="mb-3">
                                                    <label for="editSkillName"
                                                        class="form-label">เพิ่มหมวดหมู่สาขา</label>
                                                    <input type="text" class="form-control" id="addSkill"
                                                        name="addSkillName" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">ยกเลิก</button>
                                                    <button type="submit" class="btn btn-primary">เพิ่ม</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="addskill">
                                <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addSkillModal">เพิ่มสาขา</a>
                            </div>


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

    <script>
        // public

        // function update(Request $request, $id) {
        //     // Retrieve the skill category by its ID
        //     $skillCategory = SkillCategory::findOrFail($id);

        //     // Update the skill category with the new data
        //     $skillCategory - > update([
        //         'skill' => $request - > input('editSkillName'),
        //     ]);

        //     // Redirect back with a success message
        //     return redirect() - > back() - > with('success', 'Skill category updated successfully.');
        // }
    </script>

</body>

</html>
