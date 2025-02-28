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

<div class="row mt-5">
    <div class="col-lg-10 mx-auto">
        <div class="row mb-5">
            <div class="col-12">
               <div class=" d-flex align-items-center justify-content-between flex-wrap mb-2">
                <div>
                    <h4>
                        Viewing completed with feedback
                    </h4>
                </div>
                <div class="d-flex align-items-center flex-wrap mb-2">
                    <p class="mb-0 text-dark mx-1">
                        <i class="ri-circle-fill text-success pe-2" style="font-size: 10px;"></i>Viewing confirmed
                    </p>
                    <p class="mb-0 text-dark mx-1">
                        <i class="ri-circle-fill text-danger pe-2" style="font-size: 10px;"></i>Viewing unconfirmed
                    </p>
                    <p class="mb-0 text-dark mx-1">
                        <i class="ri-circle-fill text-secondary pe-2" style="font-size: 10px;"></i>Past date
                    </p>
                    <a href="" class="btn btn-outline-secondary mx-1 mb-md-0 mb-2"><i class="ri-mail-line pe-1"></i>Email</a>
                    <a href="" class="btn btn-outline-secondary mx-1 mb-md-0 mb-2"><i class="ri-printer-line pe-1"></i>Print</a>
                    <a href="" class="btn btn-outline-secondary mx-1 mb-md-0 mb-2"><i class="ri-filter-line pe-1"></i>Filter</a>

                </div>
               </div>
               <div class="card viewing-card">

                <h6>
                    No pending viewing found
                </h6>

            </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-lg-6 mb-4">
               <div class=" d-flex align-items-center justify-content-between flex-wrap mb-2">
                <div>
                    <h4>
                        Viewing completed with feedback
                    </h4>
                </div>
                <div class="d-flex align-items-center flex-wrap mb-2">

                    <a href="" class="btn btn-outline-secondary mx-1 mb-md-0 mb-2"><i class="ri-mail-line pe-1"></i>Email</a>
                    <a href="" class="btn btn-outline-secondary mx-1 mb-md-0 mb-2"><i class="ri-printer-line pe-1"></i>Print</a>


                </div>
               </div>
               <div class="card viewing-card">

                <h6>
                    No pending viewing found
                </h6>

            </div>
            </div>
            <div class="col-lg-6 mb-4">
               <div class=" d-flex align-items-center justify-content-between flex-wrap mb-2">
                <div>
                    <h4>
                        General Appointments
                    </h4>
                </div>
                <div class="d-flex align-items-center flex-wrap mb-2">
                    <a href="" class="btn btn-outline-secondary mx-1 mb-md-0 mb-2"><i class="ri-printer-line pe-1"></i>Add Meeting</a>


                </div>
               </div>
               <div class="card viewing-card">

                <h6>
                    No pending viewing found
                </h6>

            </div>
            </div>
        </div>
    </div>

</div>

@endsection
