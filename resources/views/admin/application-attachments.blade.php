@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class=" col-12 pb-5">

        <div class=" border-line py-5 table-header">
            <div class="d-flex align-items-center justify-content-between  mb-3 flex-wrap">
                <h5 class="mb-0">Web Login</h5>
                <a class="btn btn-primary" href="">Action<i class="ri-arrow-right-s-line"></i></a>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 mx-auto py-5">
        <div class="user-profile p-5 d-flex flex-wrap align-items-center justify-content-center">
            <div class="profile-img text-center">
                <img class="img-fluid" src="{{ asset('admin/assets/img/user-image.png') }}" alt="User Image">
                <p class="mb-0 text-dark">Applicant, Buy</p>
                <p class="mb-0 text-dark">
                    <i class="ri-circle-fill text-success" style="font-size: 10px;"></i> Active
                </p>
            </div>
            <div class="profile-contact ms-4">
                <h4>David Kelsey</h4>
                <div class="d-flex flex-wrap mt-sm-4">
                    <ul class="list-unstyled me-md-4 mb-0">
                        <li class="mb-3">
                            <a href="#" class="contact-link"><i class="ri-phone-line"></i> +1 8292 22 3833</a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="contact-link"><i class="ri-keyboard-line"></i> +1 8292 22 3833</a>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="#" class="contact-link"><i class="ri-smartphone-line"></i> +1 8292 22 3833</a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="contact-link"><i class="ri-mail-line"></i> +1 8292 22 3833</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-8 mx-auto border-line py-5">
        <div class="upload-file p-5 d-flex align-items-center justify-content-center" id="uploadFileArea">
            <div class="text-center">
                <i class="ri-file-line text-info fs-1 mb-5"></i>

                <p class="text-dark fw-bolder mt-4">Click or drag file to this area to upload</p>
                <p  >Support for a single or bulk upload. Strickly prohibit from uploading company data or other band files</p>
                <p id="fileName" class="text-success">No file selected</p>
            </div>
        </div>
        <input type="file" id="fileInput" style="display: none;">

    </div>
</div>

@push('js')
<script>
      document.getElementById('uploadFileArea').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function() {
        let files = this.files;
        let fileNames = [];

        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                fileNames.push(files[i].name);
            }
            document.getElementById('fileName').textContent = `Selected file(s): ${fileNames.join(', ')}`;
        } else {
            document.getElementById('fileName').textContent = "No file selected";
        }
    });
</script>

@endpush


@endsection
