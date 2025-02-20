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
        <div class="step-indicator d-flex flex-wrap  justify-content-xl-between mb-4">
            <div class="step-header active"><span class="circle">1</span> General Info. <p
                    class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header"><span class="circle">2</span> Requirements<p
                class="indicator-line mb-0 ms-2"></p></div>
            <div class="step-header"><span class="circle">3</span> Internal Info<p
                class="indicator-line mb-0 ms-2"></p></div>
            <div class="step-header"><span class="circle">4</span> Web Login<p
                class="indicator-line mb-0 ms-2"></p></div>
            <div class="step-header"><span class="circle">5</span> Attachments</div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-12 border-line py-5 mb-5">
        <h5>Requirements and Search Criteria</h5>

    </div>
    <div class="col-lg-6 col-12 mb-lg-0 mb-3 px-5">
        <div class="row">
            <div class="col-12">
                <p>Lettings (PW) <span class="text-danger">*</span></p>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="row mb-4 align-items-center">
                    <div class="col-2">

                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    </div>
                    <div class="col-10">
                        <select class="form-select form-select-sm">
                            <option selected disabled>Minimum</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="row mb-4 align-items-center">
                    <label class="col-sm-2 col-form-label" >to</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select-sm">
                            <option selected disabled>Minimum</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <select class="form-select form-select-sm">
                    <option selected disabled>Threshold</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12 mb-lg-0 mb-3 px-5">
        <div class="row">
            <div class="col-12">
                <p>Sales<span class="text-danger">*</span></p>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="row mb-4 align-items-center">
                    <div class="col-2">

                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    </div>
                    <div class="col-10">
                        <select class="form-select form-select-sm">
                            <option selected disabled>Minimum</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="row mb-4 align-items-center">
                    <label class="col-sm-2 col-form-label" >to</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select-sm">
                            <option selected disabled>Minimum</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <select class="form-select form-select-sm">
                    <option selected disabled>Threshold</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row ">

    <div class="col-lg-6 col-12 mb-lg-0 mb-3 px-5">
        <div class="col-12">
            <label for="">Categories / Property type</label>
            <select class="form-select form-select-sm mt-3 " >
                <option selected disabled>Choose Salutation
                </option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="col-lg-6 col-12 mb-lg-0 mb-3 px-5">
        <div class="row ">

            <div class="col-6">
                <label for="">Year of build</label>
                <input type="text" class="form-control mt-3" id="basic-default-name" placeholder="John Doe">
            </div>

            <div class="col-6">
                <label ></label>
                <div class="row mt-3">
                    <label class="col-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-10">
                      <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe">
                    </div>
                  </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-12">
        <p>Categories / Property type</p>
    </div>
    <div class="col-12 d-flex">
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
    </div>

</div>
@endsection


