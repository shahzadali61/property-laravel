@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-10 col-12 mx-auto pb-5">
        <div class="card">
            <div class=" border-line py-5 table-header">
                <div class="d-flex align-items-center mb-3 flex-wrap">
                    <h5 class="mb-0">Create new applicant</h5>
                </div>

            </div>
            <div class="card-body">
                <div class="step-indicator d-flex flex-wrap   mb-4">
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
                <div class="row  border-line py-5 ">
                    <div class="col-12">
                        <h5>More personal information
                        </h5>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-md-5 mb-2">
                            <label class="form-label">Date of Birth


                            </label>
                            <div class="input-group">
                                <input type="date" class="form-control rounded-2" placeholder="Enter postcode">
                                <span class="input-group-text cursor-pointer input-icon"><i class="ri-calendar-line"></i></span>
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class=" mb-md-5 mb-2">
                            <label class="form-label">Website
                            </label>
                            <input class="form-control" type="url" placeholder="www">

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class=" mb-md-5 mb-2">
                            <label class="form-label">Pager

                            </label>
                            <input class="form-control" type="text" placeholder="xxx-xxx-xxxxx">

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class=" mb-md-5 mb-2">
                            <label class="form-label">Birth Place

                            </label>
                            <input class="form-control" type="text" placeholder="Enter your birth place">

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class=" mb-md-5 mb-2">
                            <label class="form-label">Nationality

                            </label>
                            <input class="form-control" type="text" placeholder="Enter your nationality">

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class=" mb-md-5 mb-2">
                            <label class="form-label">Passport Number

                            </label>
                            <input class="form-control" type="text" placeholder="xxx-xxx-xxx-xxxx">

                        </div>
                    </div>
                    <div class="col-md p-6">
                        <small class="text-light fw-medium d-block">Gender</small>
                        <div class="form-check form-check-inline mt-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                          <label class="form-check-label" for="inlineRadio3">Unspecified</label>
                        </div>
                      </div>

                </div>
                <div class="row">
                    <div class="col-12 mt-5 text-end">
                        <div>
                            <a href="#" class="btn btn-outline-info btn-lg px-5">Add another applicant contact</a>
                        <a href="{{ route('personal-detail-part-2') }}" class="btn btn-outline-info btn-lg px-5 mx-1">More personal Information</a>

                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Cancel</a>
                            <button  class="btn btn-outline-secondary btn-lg mx-1 add-contact-btn">Back</button>
                            <button class="btn btn-primary rounded-2 waves-effect mx-1" > Next | Requirements  <i
                                class="ri-arrow-right-circle-line"></i></button>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>


    .step-indicator div {
        display: flex;
        align-items: center;
    }
    .step-indicator .step-header .indicator-line {
        width: 107px;
        height: 2px;
        background: #e4e8ee;
    }


    .step-indicator .active .indicator-line {
        width: 107px;
        height: 2px;
        background: #7b8caa;
    }

    .step-indicator .circle {
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        /* background: ; */
        color: rgb(255, 94, 0);
        border: 1px solid rgb(255, 94, 0);
        line-height: 30px;
        text-align: center;
        font-weight: bold;
        position: relative;
        z-index: 1;
        margin-right: 7px;
    }

    .step-indicator .active .circle {
        background: rgb(255, 94, 0);
        color: white;
    }
    .step-indicator .active  {
       font-weight: 800;
       color: black;
    }
</style>
@endpush
@push('js')
<script>
  $(document).ready(function () {
    // Prevent default behavior of clicking on tabs
    $("#myTab button").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation(); // Stop event bubbling
    });

    // Allow navigation only via jQuery buttons
    $("#add-address-btn").click(function (e) {
        e.preventDefault();
        var nextTab = new bootstrap.Tab($("#address-tab"));
        nextTab.show();
    });

    $("#add-contact-btn").click(function (e) {
        e.preventDefault();
        var nextTab = new bootstrap.Tab($("#contact-tab"));
        nextTab.show();
    });

    $("#add-guarantor-btn").click(function (e) {
        e.preventDefault();
        var nextTab = new bootstrap.Tab($("#disabled-tab"));
        nextTab.show();
    });
});

</script>

@endpush
