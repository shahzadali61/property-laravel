@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-12 pb-5">
        <div class="card">
            <div class="d-sm-flex justify-content-sm-between card-header table-header">
                <div class="d-flex align-items-center mb-3 flex-wrap">
                    <h5 class="mb-0">Create new applicant</h5>
                </div>
                <div class="d-flex align-items-center flex-wrap">
                    <div class="btn-group px-2 ml-0 mb-2">
                        <a href="#" class="btn btn-outline-info rounded-2 waves-effect">Add another applicant
                            contact</a>
                    </div>
                    <div class="btn-group px-2 ml-0 mb-2">
                        <a href="{{ route('personal-detail') }}" class="btn btn-outline-info rounded-2 waves-effect">More personal
                            Information</a>
                    </div>
                    <div class="ml-0 mb-2">
                        <a class="btn btn-primary rounded-2 waves-effect" href="#"> Next | Requirements <i
                                class="ri-arrow-right-circle-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="step-indicator d-flex justify-content-between mb-4">
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
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Personal Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Address</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>

                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Guarantor</button>
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
                                    <a href="#" class="btn btn-outline-info btn-lg px-5 mx-1">More personal Information</a>

                                    </div>
                                    <div class="mt-5">
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Cancel</a>
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Back</a>
                                        <a class="btn btn-primary rounded-2 waves-effect mx-1" href="#"> Add Address <i
                                            class="ri-arrow-right-circle-line"></i></a>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
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
                                        <a class="btn btn-primary rounded-2 waves-effect mx-1" href="#">Add Contact <i
                                            class="ri-arrow-right-circle-line"></i></a>

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
                                        <a class="btn btn-primary rounded-2 waves-effect mx-1" href="#"> Add Guaranter <i
                                            class="ri-arrow-right-circle-line"></i></a>

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
                                    <a href="#" class="btn btn-outline-info btn-lg px-5 mx-1">More personal Information</a>

                                    </div>
                                    <div class="mt-5">
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Cancel</a>
                                        <a href="#" class="btn btn-outline-secondary btn-lg mx-1">Back</a>
                                        <a class="btn btn-primary rounded-2 waves-effect mx-1" href="#"> Next | Requirements  <i
                                            class="ri-arrow-right-circle-line"></i></a>

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
