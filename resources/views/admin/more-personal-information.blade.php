@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-12 pb-5">
        <div class="card">
            <div class="border-line  card-header table-header ">
                <div class="d-flex align-items-center mb-3 flex-wrap">
                    <h5 class="mb-0">Create new applicant</h5>
                </div>

            </div>
            <div class="card-body mt-5">
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
                <div class="row">
                   <div class="col-lg-9 mx-auto ">
                   <div class="multi-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active disabled-tab" id="home-tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Personal Details</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled-tab" id="address-tab" data-bs-target="#address-tab-pane" type="button" role="tab" aria-controls="address-tab-pane" aria-selected="false">Address</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled-tab" id="contact-tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled-tab" id="disabled-tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Guarantor</button>
                        </li>
                    </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                            <div class="row  border-line py-5 ">
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">Title</label>
                                        <select class="form-select form-select-sm">
                                            <option selected="" disabled="">Choose title</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">First Name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">Last Name

                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">Company

                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">Salutation

                                        </label>

                                        <select class="form-select form-select-sm">
                                            <option selected disabled>Choose Salutation</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

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
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Back</a>
                                       <a id="add-address-btn" class="btn btn-primary rounded-2 waves-effect mx-1" href="#">Add Address <i class="ri-arrow-right-circle-line"></i></a>


                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address-tab-pane" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
                            <div class="row  border-line py-5 ">
                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Postcode

                                        </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded-2" placeholder="Enter postcode">
                                            <span class="input-group-text cursor-pointer input-icon"><i class="ri-crosshair-2-line"></i></span>
                                          </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">Address line 1
                                        </label>
                                        <input class="form-control" type="text" placeholder="Address line 1">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">Address line 2

                                        </label>
                                        <input class="form-control" type="text" placeholder="Address line 2">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">Town

                                        </label>
                                        <input class="form-control" type="text" placeholder="Town">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">County

                                        </label>
                                        <input class="form-control" type="text" placeholder="County">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class=" mb-md-5 mb-2">
                                        <label class="form-label">Country

                                        </label>

                                        <select class="form-select form-select-sm">
                                            <option selected disabled>Choose Country</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-5 text-end">

                                    <div class="mt-5">
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Cancel</a>
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Back</a>
                                        <button id="add-contact-btn" class="btn btn-primary rounded-2 waves-effect mx-1" >Add Contact <i
                                            class="ri-arrow-right-circle-line"></i></button>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="row  border-line py-5 ">

                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Add contact number

                                        </label>
                                        <div class="input-group">
                                            <select class="form-select rounded-2" id="inputGroupSelect02">
                                                <option selected="">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                            <span class="input-group-text cursor-pointer input-icon"><i class="ri-phone-line"></i></span>
                                          </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Phone Work

                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Mobile Number
                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Fax
                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="Choose title">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-12 mt-5 text-end">

                                    <div class="mt-5">
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Cancel</a>
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Back</a>
                                        <button id="add-guarantor-btn" class="btn btn-primary rounded-2 waves-effect mx-1" > Add Guaranter <i
                                            class="ri-arrow-right-circle-line"></i></button>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                            <div class="row border-line py-5">


                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Name

                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Phone
                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Email
                                        </label>
                                        <input class="form-control" type="text" placeholder="Choose title">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-md-5 mb-2">
                                        <label class="form-label">Address
                                        </label>
                                        <input class="form-control" type="email" placeholder="Choose title">
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

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
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
