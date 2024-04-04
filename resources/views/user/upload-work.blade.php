<!DOCTYPE html>
<html lang="en">

@include('layouts.user_head')
<style>
    .addcont {
        display: flex;
        justify-content: flex-end;
    }

    .adder {
        gap: 1rem;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.user_navbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.philosopheraside')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>อัพโหลดผลงาน</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ฟอร์มกรอกข้อมูล</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('user.storeperform', ['id' => Auth::user()->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label">ชื่อผลงาน</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="perfomalt">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">รูปหน้าปก</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="perfomimg" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="row mb-4" id="additionalInputs">
                                    <!-- Additional inputs will be appended here -->
                                </div>
                                <label style="margin-bottom: 1rem">เนื้อหาผลงาน</label>
                                <div class="row mb-4">
                                    {{-- <textarea class="tiny" name="content" id="mytextarea" cols="30" rows="10">

                                    </textarea> --}}
                                    <x-forms.tinymce-editor/>
                                </div>

                                {{-- <div class="row mb-4">
                                    <div class="addcont">
                                        <a type="button" id="addPerformance" class="btn btn-success">เพิ่มผลงาน<i
                                                class="bi bi-plus-circle"></i></a>
                                    </div>
                                </div> --}}
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
        // document.getElementById('addPerformance').addEventListener('click', function() {
        //     var additionalInputs = document.getElementById('additionalInputs');

        //     var fileInputLabel = document.createElement('label');
        //     fileInputLabel.setAttribute('class', 'col-sm-3 col-form-label');
        //     fileInputLabel.textContent = 'รูปภาพเพิ่มเติม';
        //     additionalInputs.appendChild(fileInputLabel);

        //     var fileInputDiv = document.createElement('div');
        //     fileInputDiv.setAttribute('class', 'col-sm-9');
        //     additionalInputs.appendChild(fileInputDiv);

        //     var fileInput = document.createElement('input');
        //     fileInput.setAttribute('type', 'file');
        //     fileInput.setAttribute('class', 'form-control');
        //     fileInput.setAttribute('name', 'additionalPerfomimg[]'); // Use array for multiple file uploads
        //     fileInputDiv.appendChild(fileInput);

        //     var textInputLabel = document.createElement('label');
        //     textInputLabel.setAttribute('class', 'col-sm-3 col-form-label');
        //     textInputLabel.textContent = 'คำอธิบาย';
        //     additionalInputs.appendChild(textInputLabel);

        //     var textareaDiv = document.createElement('div');
        //     textareaDiv.setAttribute('class', 'col-sm-9');
        //     additionalInputs.appendChild(textareaDiv);

        //     var textarea = document.createElement('textarea');
        //     textarea.setAttribute('class', 'form-control');
        //     textarea.setAttribute('name', 'additionalPerfomalt[]'); // Use array for multiple text areas
        //     textareaDiv.appendChild(textarea);

        //     var deleteButDiv = document.createElement('div');
        //     deleteButDiv.setAttribute('class', 'col-sm-9');
        //     additionalInputs.appendChild(deleteButDiv);


        //     var deleteBut = document.createElement('button');
        //     deleteBut.setAttribute('class', 'btn btn-danger');
        //     // deleteBut.setAttribute('class', 'col-sm-9');
        //     additionalInputs.appendChild(deleteBut);

        // });

        document.getElementById('addPerformance').addEventListener('click', function() {
            var additionalInputs = document.getElementById('additionalInputs');

            var inputRow = document.createElement('div');
            inputRow.setAttribute('class', 'row mb-4');
            // inputRow.style.marginBottom = '1rem'; // Add margin to the bottom of the row

            // Create and append label for file input
            var fileInputLabelCol = document.createElement('div');
            fileInputLabelCol.setAttribute('class', 'col-sm-3 col-form-label');
            var fileInputLabel = document.createElement('label');
            fileInputLabel.textContent = 'รูปภาพเพิ่มเติม';
            fileInputLabel.style.marginBottom = '1rem';
            fileInputLabelCol.appendChild(fileInputLabel);
            inputRow.appendChild(fileInputLabelCol);

            // Create and append file input element
            var fileInputCol = document.createElement('div');
            fileInputCol.setAttribute('class', 'col-sm-9');
            // fileInputCol.style.padding = '0 1rem'; // Add padding within the column
            var fileInput = document.createElement('input');
            fileInput.setAttribute('type', 'file');
            fileInput.setAttribute('class', 'form-control');
            fileInput.setAttribute('name', 'additionalPerfomimg[]');
            fileInput.style.marginBottom = '1.5rem';
            fileInputCol.appendChild(fileInput);
            inputRow.appendChild(fileInputCol);

            // Create and append label for textarea
            var textInputLabelCol = document.createElement('div');
            textInputLabelCol.setAttribute('class', 'col-sm-3 col-form-label');
            var textInputLabel = document.createElement('label');
            textInputLabel.textContent = 'คำอธิบาย';
            textInputLabel.style.marginBottom = '1.5rem';
            textInputLabelCol.appendChild(textInputLabel);
            inputRow.appendChild(textInputLabelCol);

            // Create and append textarea element
            var textInputCol = document.createElement('div');
            textInputCol.setAttribute('class', 'col-sm-9');
            // textInputCol.style.padding = '0 1rem'; // Add padding within the column
            var textInput = document.createElement('textarea');
            textInput.setAttribute('class', 'form-control');
            textInput.setAttribute('name', 'additionalPerfomalt[]');
            textInput.style.marginBottom = '1.5rem';
            textInputCol.appendChild(textInput);
            inputRow.appendChild(textInputCol);

            // Create and append delete button
            var deleteButtonCol = document.createElement('div');
            deleteButtonCol.setAttribute('class', 'col-sm-12 text-end'); // Utilize Bootstrap's 'text-end' class
            var deleteButton = document.createElement('button');
            deleteButton.setAttribute('class', 'btn btn-danger');
            deleteButton.textContent = 'ลบ';
            deleteButton.addEventListener('click', function() {
                inputRow.remove(); // Remove the entire row when delete button is clicked
            });
            deleteButtonCol.appendChild(deleteButton);
            inputRow.appendChild(deleteButtonCol);

            // Append the entire row to the additionalInputs container
            additionalInputs.appendChild(inputRow);
        });

        tinymce.init({
            selector: 'textarea#default-editor',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

</body>

</html>
