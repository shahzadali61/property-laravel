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
            <div class="step-header active"><span class="circle">1</span> General Info. <p
                    class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header"><span class="circle">2</span> Requirements<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header"><span class="circle">3</span> Internal Info<p class="indicator-line mb-0 ms-2"></p>
            </div>
            <div class="step-header"><span class="circle">4</span> Web Login<p class="indicator-line mb-0 ms-2"></p>
            </div>
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

                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                <input type="text" class="form-control mt-3" id="basic-default-name" placeholder="John Doe">
            </div>

            <div class="col-6">
                <label></label>
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
    <div class="col-12 mt-5">
        <p class="mb-0">Categories / Property type</p>
    </div>
    <div class="col-12 d-flex flex-wrap">
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input all-propert-select" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input propert-checkbox" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input propert-checkbox" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input propert-checkbox" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input propert-checkbox" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
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
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input features-checkbox" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input features-checkbox" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>
        <div class="form-check mt-4 mx-3">
            <input class="form-check-input features-checkbox" type="checkbox" value="">
            <label class="form-check-label">Select All</label>
        </div>

    </div>

</div>
<div class="row">
    <div class="col-12 border-line py-5">
        <div class="mb-md-5 mb-2">
            <label class="form-label">Property required by</label>
            <div class="input-group">
                <input type="date" class="form-control rounded-2" placeholder="Choose date">
                <span class="input-group-text cursor-pointer input-icon"><i class="ri-calendar-line"></i></span>
            </div>
        </div>
    </div>

    <div class="col-12 border-line py-5">
        <div class="row "> <!-- Fixed class name -->
            <div class="col-12">
                <p class="text-dark">Areas</p>
            </div>
            <div class="col-12">
                <div class="row align-items-end">


                    <div class="col-lg-6 col-12">
                        <label for="">Enter the areas applicant is interested in</label>
                        <input type="text" class="form-control mt-3" placeholder="Choose Salutation">
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
                    <label class="col-sm-4 col-form-label" for="basic-default-name">Consented marketing
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

            <button class="btn btn-outline-secondary btn-lg mx-1 add-contact-btn">Cancel</button>
            <button class="btn btn-primary rounded-2 waves-effect mx-1">Add Address <i
                    class="ri-arrow-right-circle-line"></i></button>

        </div>


    </div>
</div>

    @push('js')

<script>
    $(document).ready(function () {
        // When "Select All" checkbox is clicked
        $(".all-propert-select").click(function () {
            var isChecked = $(this).prop("checked"); // Get the checked status
            $(".propert-checkbox").each(function () {
                $(this).prop("checked", isChecked); // Apply the same checked status to all checkboxes
            });
        });
    });
    $(document).ready(function () {
        // When "Select All" checkbox is clicked
        $(".all-features-select").click(function () {
            var isChecked = $(this).prop("checked"); // Get the checked status
            $(".features-checkbox").each(function () {
                $(this).prop("checked", isChecked); // Apply the same checked status to all checkboxes
            });
        });
    });
</script>

    @endpush
@endsection
