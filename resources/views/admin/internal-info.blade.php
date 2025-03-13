@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class=" col-12 pb-5">

        <div class=" border-line py-5 table-header">
            <div class="d-flex align-items-center mb-3 flex-wrap">
                <h5 class="mb-0">Create new applicant
                </h5>
            </div>

        </div>



    </div>
    <div class="col-lg-10 mx-auto">
        <div class="step-indicator d-flex flex-wrap   mb-4">
            <div class="step-header active"><span class="circle">1</span> General Info. <p
                    class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header active"><span class="circle">2</span> Requirements<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header active"><span class="circle ">3</span> Internal Info<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header"><span class="circle">4</span> Web Login<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header"><span class="circle">5</span> Attachments</div>
        </div>
    </div>
</div>
<form action="">
    <div id="InternalInformation">

        <div class="row ">
            <div class="col-12 border-line py-3 mb-5">
                <h5>Internal information
                </h5>
            </div>
        </div>
        <div class="row border-line py-5">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h5>Conviyancing</h5>
                        <label for="">Directory</label>
                        <select class="form-select form-select-sm mt-3 ">
                            <option selected disabled>Solicitor
                            </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-sm-8">
                        <div class="nav-item d-flex align-items-center rounded-2 border ps-3 mb-sm-0 mb-2">
                            <i class="ri-search-line ri-22px me-2"></i>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Searchc..."
                                aria-label="Search..." />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-outline-secondary btn-sm "><i class="ri-add-circle-line"></i>Add new Directory</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-line py-5">
            <div class="col-12">
                <h5>Internal Info</h5>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Directory</label>
                    <select class="form-select form-select-sm mt-3 ">
                        <option selected disabled>Label
                        </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Status</label>
                    <select class="form-select form-select-sm mt-3 ">
                        <option selected disabled>Label
                        </option>
                        <option value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Branch</label>
                    <select class="form-select form-select-sm mt-3 ">
                        <option selected disabled>Choose Salutation
                        </option>
                        <option value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Negotiator</label>
                    <select class="form-select form-select-sm mt-3 ">
                        <option selected disabled>Choose Salutation
                        </option>
                        <option value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Assign to</label>
                    <select class="form-select form-select-sm mt-3 ">
                        <option selected disabled>Choose Salutation
                        </option>
                        <option value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Lead source</label>
                    <select class="form-select form-select-sm mt-3 ">
                        <option selected disabled>Choose Salutation
                        </option>
                        <option value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row border-line py-5">
            <div class="col-12">
                <h5>Miscellaneous (Custom Field)</h5>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Custom field 1</label>
                    <input type="text" class="form-control" placeholder="Choose Company">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Choose Company</label>
                    <input type="text" class="form-control" placeholder="Choose Company">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Requirement1</label>
                    <input type="text" class="form-control" placeholder="Requirement1">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Development</label>
                    <select class="form-select form-select-sm">
                        <option selected disabled>Label
                        </option>
                        <option value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12 mb-3">
                    <label for="">Comments</label>
                   <textarea cols="8" class="form-control" placeholder="Choose Company"></textarea>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 text-end  mt-4">
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                <a href="{{ route('weblogin') }}"  class="btn btn-primary">Web Login <i class="ri-arrow-right-circle-line"></i></a>
            </div>
        </div>
    </div>


</form>


@endsection
