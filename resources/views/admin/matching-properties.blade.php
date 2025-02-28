@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class=" col-12 pb-5">

        <div class=" border-line py-5 table-header">
            <div class="d-flex align-items-center justify-content-between  mb-3 flex-wrap">
                <h5 class="mb-0">Matching Properties Actions
                </h5>
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
    <div class="col-lg-10 d-flex align-items-center justify-content-between flex-wrap  mx-auto  py-5">
        <h5 class="mb-0">Matching Properties</h5>
        <button class="btn btn-outline-secondary rounded-2  waves-effect " type="button" data-bs-toggle="offcanvas" data-bs-target="#ShortlistedProperties" aria-controls="ShortlistedProperties"> <i class="ri-check-double-line"></i>Short listed properties</button>


    </div>
    <div class="col-lg-10 mx-auto align-items-center justify-content-end d-flex flex-wrap border-line py-5">
        <div class="nav-item d-flex align-items-center rounded-2 border ps-3 mt-2 mx-1">
            <i class="ri-search-line ri-22px me-2"></i>
            <input type="text" class="form-control border-0 shadow-none" placeholder="Searchc..." aria-label="Search...">
        </div>
        <div class="form-check mt-2 mx-1">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label" >
                Strict matching
            </label>
          </div>
        <div class="form-check mt-2 mx-1">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label" >
                Strict matching
            </label>
          </div>
        <div class="btn-group mt-2 mx-1" >
            <button type="button" class="btn btn-outline-secondary dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Action</a></li>
              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Another action</a></li>
              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Separated link</a></li>
            </ul>
          </div>
        <div class="btn-group mx-1 mt-2">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">Choose template</button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Action</a></li>
              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Another action</a></li>
              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Separated link</a></li>
            </ul>
          </div>
        <button class="btn btn-outline-secondary  mx-1 mt-2"><i class="ri-file-text-fill"></i>Print</button>

    </div>

</div>

<div class="row">

    <div class="col-lg-10 mx-auto activity-summary mt-5">
        <div class="table-responsive text-nowrap">

            <table class="table customize-table ">
                <thead>
                    <tr>
                        <th scope="col">
                            <input class="form-check-input me-2" type="checkbox" id="toDoSelectAll"> IR
                        </th>
                        <th scope="col">Property</th>
                        <th scope="col">Beds</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Sent</th>
                        <th scope="col">Opened</th>
                        <th scope="col">Clicked</th>
                        <th scope="col">Price/Rent</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <input class="form-check-input todo me-2" type="checkbox" value="">     17
                        </th>
                        <td><i class="ri-map-pin-line"></i>148 B</td>
                        <td>3</td>
                        <td><i class="ri-hotel-line"></i>Bungalow</td>
                        <td>For sale</td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>No</td>
                        <td>$1,000,00</td>
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
<div class="offcanvas offcanvas-end right-sidebar"tabindex="-1" data-bs-backdrop="false" id="ShortlistedProperties" aria-labelledby="ShortlistedPropertiesLabel">
    <div class="offcanvas-header justify-content-sm-between mx-2 flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center">
            <button type="button" class=" d-flex justify-content-center align-items-center close-btn me-2" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ri-arrow-left-s-line"></i></button>
            <h4 class="offcanvas-title" id="ShortlistedPropertiesLabel">Short listed properties</h4>
        </div>
       <div>
        <button class="btn btn-primary save-btn mt-sm-0 mt-2">Book viewing</button>

       </div>
    </div>

    <div class="offcanvas-body px-5">
        <div class="row">
            <div class="col-12 text-center">

                <img style="width: 400px; height: 400px;;" class="img-fluid object-fit-contain mb-2" src="{{ asset('admin/assets/img/not-found-img.png') }}" alt="">
                <p>No short list property found</p>
            </div>

        </div>

        </div>
    </div>

@push('js')

<script>
    document.getElementById('toDoSelectAll').addEventListener('change', function() {
        let checkboxes = document.querySelectorAll('.todo');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>

@endpush

@endsection
