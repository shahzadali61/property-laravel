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
                <div class="step-indicator d-flex flex-lg-nowrap flex-wrap justify-content-lg-between mb-4">
                    <div class="step-header active mb-lg-0 mb-3"><span class="circle">1</span> General Info. <p
                            class="indicator-line mb-0 ms-2"></p>
                    </div>
                    <div class="step-header mb-lg-0 mb-3"><span class="circle">2</span> Requirements<p
                        class="indicator-line mb-0 ms-2"></p></div>
                    <div class="step-header mb-lg-0 mb-3"><span class="circle">3</span> Internal Info<p
                        class="indicator-line mb-0 ms-2"></p></div>
                    <div class="step-header mb-lg-0 mb-3"><span class="circle">4</span> Web Login<p
                        class="indicator-line mb-0 ms-2"></p></div>
                    <div class="step-header mb-lg-0 mb-3"><span class="circle">5</span> Attachments</div>
                </div>
                <div class="row">
                    <div class="col-12 border-line py-5">
                        <div class="row">
                            <div class="col-12">
                                <h5>Personal Details
                                </h5>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class=" mb-md-5 mb-2">
                                    <label class="form-label">Title</label>
                                    <select class="form-select form-select-sm">
                                        <option selected disabled>Choose title</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">First Name

                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Last Name
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Company
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Salutation</label>
                                    <select class="form-select form-select-sm">
                                        <option selected disabled>Choose title</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 border-line py-5">
                        <div class="row">
                            <div class="col-12">
                                <h5>Address
                                </h5>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Postcode

                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded-2" placeholder="Choose title">
                                        <span class="input-group-text cursor-pointer input-icon"><i class="ri-crosshair-2-line"></i></span>
                                      </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Address line 1

                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Address line 2
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Town
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">County
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Country</label>
                                    <select class="form-select form-select-sm">
                                        <option selected disabled>Choose title</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 border-line py-5">
                        <div class="row">
                            <div class="col-12">
                                <h5>Contact Information
                                </h5>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12">
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
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Phone Work

                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Mobile Number
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Fax
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Email
                                    </label>
                                    <input class="form-control" type="email" placeholder="Choose title">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-12 border-line py-5">
                        <div class="row">
                            <div class="col-12">
                                <h5>Guarantor Information
                                </h5>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Name

                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Phone
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Email
                                    </label>
                                    <input class="form-control" type="text" placeholder="Choose title">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Address
                                    </label>
                                    <input class="form-control" type="email" placeholder="Choose title">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-12 mt-5 text-end">
                        <div>
                            <a href="#" class="btn btn-outline-info btn-lg px-5">Add another applicant contact</a>
                        <a href="#" class="btn btn-outline-info btn-lg px-5">More personal Information</a>

                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-outline-secondary btn-lg px-5">Reset</a>
                            <a class="btn btn-primary rounded-2 waves-effect" href="#"> Next | Requirements <i
                                class="ri-arrow-right-circle-line"></i></a>

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
