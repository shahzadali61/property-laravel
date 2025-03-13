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
                        <a href="{{ route('personal-detail') }}"
                            class="btn btn-outline-info rounded-2 waves-effect">More personal
                            Information</a>
                    </div>
                    <div class="ml-0 mb-2">
                        <a class="btn btn-primary rounded-2 waves-effect" href="#"> Next | Requirements <i
                                class="ri-arrow-right-circle-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="step-indicator d-flex flex-wrap   mb-4">
                    <div class="step-header active"><span class="circle">1</span> General Info. <p
                            class="indicator-line mb-0 ms-2"></p>
                    </div>
                    <div class="step-header"><span class="circle">2</span> Requirements<p
                            class="indicator-line mb-0 ms-2"></p>
                    </div>
                    <div class="step-header"><span class="circle">3</span> Internal Info<p
                            class="indicator-line mb-0 ms-2"></p>
                    </div>
                    <div class="step-header"><span class="circle">4</span> Web Login<p class="indicator-line mb-0 ms-2">
                        </p>
                    </div>
                    <div class="step-header"><span class="circle">5</span> Attachments</div>
                </div>
                <form action="">
                    <div id="PersonalDetailTab">


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
                                            <input id="GeneralInfoFirstName" class="form-control" type="text"
                                                placeholder="Enter your first name">
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
                                                <input type="text" class="form-control rounded-2"
                                                    placeholder="Choose title">
                                                <span class="input-group-text cursor-pointer input-icon"><i
                                                        class="ri-crosshair-2-line"></i></span>
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
                                                <span class="input-group-text cursor-pointer input-icon"><i
                                                        class="ri-phone-line"></i></span>
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
                                    <a href="#" class="btn btn-outline-info btn-lg px-5">Add another applicant
                                        contact</a>
                                    <a href="#" class="btn btn-outline-info btn-lg px-5">More personal Information</a>

                                </div>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-secondary btn-lg px-5">Reset</a>
                                    <button id="nextStep" class="btn btn-primary rounded-2 waves-effect"> Next |
                                        Requirements <i class="ri-arrow-right-circle-line"></i></button>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="RequirementsTab">

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

                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                            </div>
                                            <div class="col-10">
                                                <select class="form-select form-select-sm">
                                                    <option selected disabled>Minimum</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="row mb-4 align-items-center">
                                            <label class="col-sm-2 col-form-label">to</label>
                                            <div class="col-sm-10">
                                                <select class="form-select form-select-sm">
                                                    <option selected disabled>Minimum</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
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

                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                            </div>
                                            <div class="col-10">
                                                <select class="form-select form-select-sm">
                                                    <option selected disabled>Minimum</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="row mb-4 align-items-center">
                                            <label class="col-sm-2 col-form-label">to</label>
                                            <div class="col-sm-10">
                                                <select class="form-select form-select-sm">
                                                    <option selected disabled>Minimum</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
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
                                    <select class="form-select form-select-sm mt-3 ">
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
                                        <input type="text" class="form-control mt-3" id="basic-default-name"
                                            placeholder="John Doe">
                                    </div>

                                    <div class="col-6">
                                        <label></label>
                                        <div class="row mt-3">
                                            <label class="col-2 col-form-label" for="basic-default-name">Name</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" id="basic-default-name"
                                                    placeholder="John Doe">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 mt-5">
                                <p class="mb-0">Categories / Property type</p>
                            </div>
                            <div class="col-12 d-flex flex-wrap">
                                <div class="form-check mt-4 mx-3">
                                    <input class="form-check-input all-property-select" type="checkbox" value="">
                                    <label class="form-check-label">Select All</label>
                                </div>
                                <div class="form-check mt-4 mx-3">
                                    <input class="form-check-input property-checkbox" type="checkbox" value="">
                                    <label class="form-check-label">Commercial</label>
                                </div>
                                <div class="form-check mt-4 mx-3">
                                    <input class="form-check-input property-checkbox" type="checkbox" value="">
                                    <label class="form-check-label">Land</label>
                                </div>
                                <div class="form-check mt-4 mx-3">
                                    <input class="form-check-input property-checkbox" type="checkbox" value="">
                                    <label class="form-check-label">New Build</label>
                                </div>
                                <div class="form-check mt-4 mx-3">
                                    <input class="form-check-input property-checkbox" type="checkbox" value="">
                                    <label class="form-check-label">New Homes</label>
                                </div>

                            </div>

                        </div>
                        <div class="row border-line py-5">
                            <div class="col-12 mt-5">
                                <p class="mb-0">Features</p>
                            </div>
                            <div class="col-12 d-flex flex-wrap">
                                <div class="form-check mt-4 mx-3">
                                    <input class="form-check-input all-features-select" type="checkbox" value="">
                                    <label class="form-check-label">Select All</label>
                                </div>
                                <div class="form-check mt-4 mx-3">
                                    <input class="form-check-input features-checkbox" type="checkbox" value="">
                                    <label class="form-check-label">Letting PW</label>
                                </div>
                                <div class="form-check mt-4 mx-3">
                                    <input class="form-check-input features-checkbox" type="checkbox" value="">
                                    <label class="form-check-label">Letting PW</label>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 border-line py-5">
                                <div class="mb-md-5 mb-2">
                                    <label class="form-label">Property required by</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control rounded-2 " placeholder="Choose date">
                                        <span class="input-group-text cursor-pointer input-icon"><i
                                                class="ri-calendar-line"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 border-line py-5">
                                <div class="row ">
                                    <!-- Fixed class name -->
                                    <div class="col-12">
                                        <p class="text-dark">Areas</p>
                                    </div>
                                    <div class="col-12">
                                        <div class="row align-items-end">


                                            <div class="col-lg-6 col-12">
                                                <label for="">Enter the areas applicant is interested in</label>
                                                <input type="text" class="form-control mt-3"
                                                    placeholder="Choose Salutation">
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <ul class="d-flex flex-wrap list-unstyled ms-4 mt-lg-0 mt-3">
                                                    <li class="nav-item px-2">
                                                        <a class="nav-link text-info" href="">Show Areas</a>
                                                    </li>
                                                    <li class="nav-item px-2">
                                                        <a class="nav-link text-info">Show Postcodes</a>
                                                    </li>
                                                    <li class="nav-item px-2">
                                                        <a class="nav-link text-info">Show Counties</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 border-line py-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row mb-4">
                                            <label class="col-sm-4 col-form-label" for="basic-default-name">Consented
                                                marketing
                                                category</label>
                                            <div class="col-sm-8">
                                                <select id="defaultSelect" class="form-select">
                                                    <option>Default select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="form-check mt-4 mx-3">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label">Property Alert</label>
                                            </div>
                                            <div class="form-check mt-4 mx-3">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label">General News</label>
                                            </div>
                                            <div class="form-check mt-4 mx-3">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label">Special Offers</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <p class="mb-0">Preferred method of contact</p>
                                        <div class="d-flex">
                                            <div class="form-check mt-4 mx-3">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label">Property Alert</label>
                                            </div>
                                            <div class="form-check mt-4 mx-3">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label">General News</label>
                                            </div>
                                            <div class="form-check mt-4 mx-3">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label">Special Offers</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5 text-end">

                                <div class="mt-5">

                                    <button
                                        class="btn btn-outline-secondary btn-lg mx-1 add-contact-btn">Cancel</button>
                                    <button id="InternalInfoTab"
                                        class="btn btn-primary rounded-2 waves-effect mx-1">Internal Info <i
                                            class="ri-arrow-right-circle-line"></i></button>

                                </div>


                            </div>
                        </div>
                    </div>
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

            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
$(document).ready(function () {
    // Initially show PersonalDetailTab, hide others
    $("#PersonalDetailTab").show();
    $("#RequirementsTab, #InternalInformation").hide();

    // When clicking "Next | Requirements"
    $("#nextStep").click(function (e) {
        e.preventDefault();

        let firstNameInput = $("#GeneralInfoFirstName");

        // Check if First Name is filled
        if (firstNameInput.val().trim() === "") {
            alert("First Name is required");
            firstNameInput.focus();
        } else {
            // Hide PersonalDetailTab and show RequirementsTab
            $("#PersonalDetailTab").hide();
            $("#RequirementsTab").show();

            // Keep previous steps active and add "active" class to Requirements
            $(".step-header:contains('General Info.')").addClass("active");
            $(".step-header:contains('Requirements')").addClass("active");
        }
    });

    // When clicking "Internal Info"
    $("#InternalInfoTab").click(function (e) {
        e.preventDefault();

        // Hide RequirementsTab and show InternalInformation
        $("#RequirementsTab").hide();
        $("#InternalInformation").show();

        // Keep previous steps active and add "active" class to Internal Info
        $(".step-header:contains('General Info.')").addClass("active");
        $(".step-header:contains('Requirements')").addClass("active");
        $(".step-header:contains('Internal Info')").addClass("active");
    });
});



</script>

@endpush

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

    .step-indicator .active {
        font-weight: 800;
        color: black;
    }
</style>
@endpush
