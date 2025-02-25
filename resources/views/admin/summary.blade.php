@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class=" col-12 pb-5">

        <div class=" border-line py-5 table-header">
            <div class="d-flex align-items-center justify-content-between  mb-3 flex-wrap">
                <h5 class="mb-0">Summary</h5>
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
    <div class="col-lg-10 mx-auto border-line py-5">
        <h5 class="mb-0">Activity Summary</h5>
    </div>
    <div class="col-lg-10 mx-auto activity-summary mt-5">
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="card py-2 ps-5 mb-4">
                    <h4 class="mb-0 fw-bolder text-black">12</h4>
                    <p>Short listed Properties</p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="card py-2 ps-5 mb-4">
                    <h4 class="mb-0 fw-bolder text-black">12</h4>
                    <p>Viewing done waiting feedback</p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="card py-2 ps-5 mb-4">
                    <h4 class="mb-0 fw-bolder text-black">12</h4>
                    <p>Short listed Properties</p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="card py-2 ps-5 mb-4">
                    <h4 class="mb-0 fw-bolder text-black">12</h4>
                    <p>Short listed Properties</p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="card py-2 ps-5 mb-4">
                    <h4 class="mb-0 fw-bolder text-black">12</h4>
                    <p>Short listed Properties</p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="card py-2 ps-5 mb-4">
                    <h4 class="mb-0 fw-bolder text-black">12</h4>
                    <p>Short listed Properties</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 mx-auto border-line py-5">
        <h5 class="mb-0">Internal Info</h5>
    </div>
    <div class="col-lg-10 mx-auto activity-summary mt-5">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="w-lg-25 title-input-dropdown">
                    <label for="smallSelect" class="form-label">TITLE ????</label>
                    <select id="smallSelect" class="form-select form-select-sm">
                        <option>Small select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Lead Source</p>
                <h6>Email</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Status</p>
                <h6><i class="ri-circle-fill text-success" style="font-size: 10px;"></i>Active</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Lead Source</p>
                <h6>Email</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Required by</p>
                <h6>25 Sep. 2024</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Assign to</p>
                <h6>Admin</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Subscribe to</p>
                <h6>Alerts, News, Offers</h6>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 mx-auto border-line py-5">
        <div class="d-flex align-items-center justify-content-between  mb-3 flex-wrap">
            <h5 class="mb-0">To Dos</h5>
            <div class="d-flex flex-wrap p-sm-0 p-5">
                <div class="form-check mt-4 px-2">
                    <input class="form-check-input" type="radio" value="">
                    <label class="form-check-label">
                        View archived todo
                    </label>
                </div>
                <div class="btn-group px-2">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle waves-effect"
                        data-bs-toggle="dropdown" aria-expanded="false">show all</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item waves-effect" href="javascript:void(0);">show all</a></li>
                        <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Something else here</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                </div>
                <a href="" class="btn btn-outline-secondary"><i class="ri-add-circle-line"></i>Add todo</a>
            </div>

        </div>
    </div>
    <div class="col-lg-10 mx-auto activity-summary mt-5">
        <div class="table-responsive text-nowrap">

            <table class="table customize-table ">
                <thead>
                    <tr>
                        <th scope="col">
                            <input class="form-check-input me-2" type="checkbox" id="selectAll"> IR
                        </th>
                        <th scope="col">Lettings</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <input class="form-check-input todo me-2" type="checkbox" value=""> 25 Sep. 2024
                        </th>
                        <td>Test app - Lettings</td>
                        <td class="action-table">
                            <div class="d-flex">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);"><i
                                        class="ri-pencil-line"></i></a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);"><i
                                        class="ri-message-3-line"></i></a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);"><i
                                        class="ri-delete-bin-6-line text-danger"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <input class="form-check-input todo me-2" type="checkbox" value=""> 25 Sep. 2024
                        </th>
                        <td>Test app - Lettings</td>
                        <td class="action-table">
                            <div class="d-flex">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);"><i
                                        class="ri-pencil-line"></i></a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);"><i
                                        class="ri-message-3-line"></i></a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);"><i
                                        class="ri-delete-bin-6-line text-danger"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-10 mx-auto border-line py-5">
        <h5 class="mb-0">Search Criteriav</h5>
    </div>
    <div class="col-lg-10 mx-auto activity-summary mt-5">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Looking to</p>
                <h6>Buy</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Bedrooms</p>
                <h6>2 - 3</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Living Space (sqm)</p>
                <h6>600 - 1200</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Land size</p>
                <h6>1200 - 2000</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1"> Parking</p>
                <h6>Min</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Work Station</p>
                <h6>Min to max</h6>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Types</p>
                <span class="badge rounded-pill bg-label-secondary mb-2">House</span>
                <span class="badge rounded-pill bg-label-secondary  mb-2">House share</span>
                <span class="badge rounded-pill bg-label-secondary  mb-2">New build</span>
                <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <p>Areas</p>
                        <span class="badge rounded-pill bg-label-secondary mb-2">House</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">House share</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New build</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                    </div>
                    <div class="col-12">
                        <p>Specific features</p>
                        <span class="badge rounded-pill bg-label-secondary mb-2">House</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">House share</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New build</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                        <span class="badge rounded-pill bg-label-secondary  mb-2">New house</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-10 mx-auto">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card summary-card">
                    <div class="card-header " >
                        <h6 class="mb-0">Sales (0)</h6>
                    </div>
                    <div class="card-body">
                        <h6>
                            No sales in progress
                        </h6>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card summary-card">
                    <div class="card-header d-flex justify-content-between align-items-center" >
                        <h6 class="mb-0">Veriphy</h6>
                        <button class="btn btn-outline-secondary summary-btn"><i class="ri-settings-2-line"></i>Manage preset</button>
                    </div>
                    <div class="card-body d-flex justify-content-between flex-column">
                        <h6>
                            Anti Money Laundering, Credits, Identity Checks

                            and more...
                        </h6>
                        <div class="text-center">
                            <button class="btn btn-outline-secondary summary-btn"><i class="ri-settings-2-line"></i>Launch Veriphy
                            </button>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card summary-card">
                    <div class="card-header d-flex justify-content-between align-items-center" >
                        <h6 class="mb-0">Veriphy</h6>
                        <i class="ri-error-warning-line"></i>
                                        </div>
                    <div class="card-body d-flex justify-content-between flex-column">
                        <h6>
                            Anti Money Laundering, Credits, Identity Checks
                            and more...
                        </h6>
                        <div class="text-center">
                            <button class="btn btn-outline-secondary summary-btn"><i class="ri-settings-2-line"></i>Get Started
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<div class="row">
    <div class="col-lg-10 mx-auto border-line py-5">
        <h5 class="mb-0">Buyer Specific</h5>
    </div>
    <div class="col-lg-10 mx-auto activity-summary mt-5">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Price range</p>
                <h6>Email</h6>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-2">
                <p class="mb-1">Min to Max</p>
                <h6>--</h6>
            </div>


        </div>
    </div>
</div>
@push('js')

<script>
    document.getElementById('selectAll').addEventListener('change', function() {
        let checkboxes = document.querySelectorAll('.todo');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>

@endpush

@endsection
