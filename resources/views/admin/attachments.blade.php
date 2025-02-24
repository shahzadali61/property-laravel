@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class=" col-12 pb-5">

        <div class=" border-line py-5 table-header">
            <div class="d-flex align-items-center mb-3 flex-wrap">
                <h5 class="mb-0">Create new applicant</h5>
            </div>

        </div>
    </div>
    <div class="col-lg-10 mx-auto">
        <div class="step-indicator d-flex flex-wrap   mb-4">
            <div class="step-header active"><span class="circle">1</span> General Info. <p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header active"><span class="circle">2</span> Requirements<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header active"><span class="circle ">3</span> Internal Info<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header active"><span class="circle">4</span> Web Login<p class="indicator-line mb-0 ms-2">
                </p>
            </div>
            <div class="step-header active"><span class="circle">5</span> Attachments</div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-lg-10 border-line py-5 mb-5 mx-auto">
        <h5>Attachments</h5>
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
<div class="col-lg-8 mx-auto text-end mt-4">
    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
    <button type="reset" class="btn btn-outline-secondary">Back</button>
    <button class="btn btn-primary"><i class="ri-check-double-line"></i>Finish </button>
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

