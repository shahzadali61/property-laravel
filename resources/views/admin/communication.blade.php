@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class=" col-12 pb-5">

        <div class=" border-line py-5 table-header">
            <div class="d-flex align-items-center justify-content-between  mb-3 flex-wrap">
                <h5 class="mb-0">Communication</h5>
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
        <div class="d-flex align-items-center justify-content-between  mb-3 flex-wrap">
            <h5 class="mb-0">Communication Logs</h5>
            <div class="d-flex flex-wrap p-sm-0 p-5 ms-5 ms-lg-0">
                <div class="form-check mt-4 px-2 mb-md-0 mb-2">
                    <input class="form-check-input" type="radio" value="">
                    <label class="form-check-label">
                        View archived todo
                    </label>
                </div>
                <div class="btn-group px-2 mb-md-0 mb-2">
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
                <div class="form-check mt-4 mb-md-0 mb-2">
                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio1">
                    <label class="form-check-label" for="defaultRadio1">
                        Show all
                    </label>
                  </div>
                <a href="" class="btn btn-outline-secondary mx-1 mb-md-0 mb-2"><i class="ri-file-cloud-line"></i>Export</a>
                <button class="btn btn-outline-secondary rounded-2  waves-effect " type="button" data-bs-toggle="offcanvas" data-bs-target="#addToDo" aria-controls="addToDo"> <i class="ri-add-circle-line"></i>Log notes</button>

            </div>

        </div>
    </div>
    <div class="col-lg-10 mx-auto activity-summary mt-5">
        <div class="table-responsive text-nowrap">

            <table class="table customize-table ">
                <thead>
                    <tr>
                        <th scope="col">
                            <input class="form-check-input me-2" type="checkbox" id="selectAll"> Date
                        </th>
                        <th scope="col">Details</th>
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
<div class="offcanvas offcanvas-end right-sidebar"tabindex="-1" data-bs-backdrop="false" id="addToDo" aria-labelledby="addToDoLabel">
    <div class="offcanvas-header justify-content-sm-between mx-2 flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center">
            <button type="button" class=" d-flex justify-content-center align-items-center close-btn me-2" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ri-arrow-left-s-line"></i></button>
            <h4 class="offcanvas-title" id="addToDoLabel">Log notes</h4>
        </div>
       <div>
        <button class="btn btn-primary save-btn mt-sm-0 mt-2">Save</button>

       </div>
    </div>

    <div class="offcanvas-body px-5">
        <div class="row">
            <div class="col-lg-10 mx-auto d-flex align-items-center justify-content-between">
                <h5>
                    Add note details
                </h5>
                <div>
                     <span>From</span>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">Note</button>
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
                </div>
            </div>
            <div class="col-lg-10 mx-auto mt-5">
                <textarea  class="form-control" style="height: 300px;" placeholder="Add note details here"></textarea>


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
