<!DOCTYPE html>
<html lang="en">

@include('layouts.staff_head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.staff_navbar')

    <!-- ======= Sidebar ======= -->
    {{-- @include('layouts.staffaside') --}}

    <!-- ======= Sidebar ======= -->
    @include('layouts.staffaside')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>รายชื่อปราชญ์ชาวบ้าน</h1>
            <nav>
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="forms.blade.php"></a></li>
                    <li class="breadcrumb-item active">Tables</li> --}}
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">รายชื่อ</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th class="col-1">#</th>
                                        <th class="col-sm-2">
                                            <!-- <b>N</b>ame -->
                                            ชื่อ - นามสกุล
                                        </th>
                                        <th class="col-sm-3">ที่อยู่</th>
                                        <th class="col-sm-2">เบอร์โทร</th>
                                        <th class="col-sm-3">สาขาปราชญ์</th>
                                        <!-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> -->
                                        <th class="col-sm-1" style="text-align: center;">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $users)
                                        <tr>
                                            <td>{{ $users->id }}</td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $users->address }}</td>
                                            <td>{{ $users->tel }}</td>
                                            <td>{{ $users->groups }}</td>
                                            {{-- <td>{{ $users->group }}</td> --}}

                                            @if ($users->created_by == Auth::user()->id)
                                                <td>

                                                    <a href="{{ route('staff.userprofile', ['id' => $users->id]) }}"
                                                        type="button" class="btn btn-warning edit-button"
                                                        id="editBtn{{ $users->id }}" data-bs-toggle="popover"
                                                        data-bs-placement="right" title="ข้อมูลของ {{ $users->name }}"
                                                        data-bs-content="Loading...">
                                                        <i class='bx bxs-user-detail edit-button'></i>
                                                    </a>
                                                </td>
                                            @endif

                                            <!-- <td>37%</td> -->

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

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

    @include('layouts.staffsrc')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var popovers = document.querySelectorAll('[data-bs-toggle="popover"]');
            popovers.forEach(function(popover) {
                var userId = popover.href.split('=')[1]; // Extract user ID from href attribute
                popover.addEventListener('shown.bs.popover', function() {
                    var popoverContent = document.getElementById('editBtn' + userId)
                        .nextElementSibling.querySelector('.popover-body');
                    // Fetch user details using AJAX
                    fetch('/admin/user/' + userId)
                        .then(response => response.text())
                        .then(data => {
                            // Update popover content with fetched user details
                            popoverContent.innerHTML = data;
                        });
                });
            });
        });
    </script>

</body>

</html>
