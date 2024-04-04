<!DOCTYPE html>
<html lang="en">

@include('layouts.staff_head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.staff_navbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.staffaside')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>ฟอร์มกรอกข้อมูลปราชญ์ชาวบ้าน</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ฟอร์มกรอกข้อมูล</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('staff.storeuser', [Auth::user()->id]) }}"
                                enctype="multipart/form-data" method="post">
                                @csrf
                                @method('POST')
                                <div class="row mb-4">
                                    <label for="validationDefaultUsername"
                                        class="col-sm-3 col-form-label">ชื่อ-นามสกุล</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control"
                                            id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">ที่อยู่</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="address" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">จังหวัด</label>
                                    <div class="col-sm-6">
                                        <select name="province" class="form-control" id="input_province">
                                            <option name="province" value="">กรุณาเลือกจังหวัด</option>
                                            @foreach ($provinces as $item)
                                                <option value="{{ $item->province }}">{{ $item->province }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">อำเภอ</label>
                                    <div class="col-sm-6">
                                        <select name="amphoe" class="form-control" id="input_amphoe">
                                            <option value="">กรุณาเลือกเขต/อำเภอ</option>
                                            @foreach ($amphoes as $item)
                                                <option value="{{ $item->amphoe }}">{{ $item->amphoe }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">ตำบล</label>

                                    <div class="col-sm-6">
                                        <select name="tambon" class="form-control" id="input_tambon">
                                            <option value="">กรุณาเลือกแขวง/ตำบล</option>
                                            @foreach ($tambons as $item)
                                                <option value="{{ $item->tambon }}">{{ $item->tambon }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">รหัสไปรษณีย์</label>
                                    <div class="col-sm-4">
                                        <input id="input_zipcode" type="address" name="zipcode" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">เบอร์โทร</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="tel" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label">หมวดหมู่/สาขา</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" name="group" aria-label="Default select example"
                                            placeholder="กรุณาเลือก">
                                            <option selected>กรุณาเลือก</option>
                                            @foreach ($group as $group)
                                                            <option value="{{ $group->skill }}">{{ $group->skill }}
                                                            </option>
                                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">เพิ่มเติม</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="more" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">ทักษะความสามารถ</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="skill" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">รูปโปรไฟล์</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="profile_pic" type="file" id="formFile">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="validationDefaultPassword" class="col-sm-3 col-form-label">อีเมล</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control"
                                            aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="validationDefaultPassword"
                                        class="col-sm-3 col-form-label">สร้างรหัสผ่าน</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="user_pass" class="form-control"
                                            id="validationDefaultPassword" aria-describedby="inputGroupPrepend2"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary">บันทึกฟอร์ม</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

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
            @include('layouts.tambonsc')
</body>

</html>
