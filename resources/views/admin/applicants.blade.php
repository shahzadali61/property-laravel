@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12 horizone-line pb-5">
        <div class="card">
            <div class=" d-sm-flex justify-content-sm-between  card-header table-header horizone-line ">

              <div class="d-flex align-items-center mb-3 flex-wrap">
                <h5 class="mb-0">Applicants</h5>
                <div class="btn-group ms-3 mb-lg-0 mb-2">
                    <button type="button" class="btn btn-outline-secondary   dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">Default view</button>
                    <ul class="dropdown-menu" style="">
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Action</a></li>
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Another action</a></li>
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Something else here</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="input-group  ms-3 table-header-search">

                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search...">
                </div>
              </div>
              <div class="d-flex align-items-center flex-wrap">

                <div class="btn-group px-2 ml-0 mb-2">
                    <button type="button" class="btn btn-outline-secondary rounded-2  waves-effect" data-bs-toggle="dropdown" aria-expanded="false">  <i class=" menu-icon ri-settings-2-line"></i>Manage preset</button>
                    <ul class="dropdown-menu" style="">
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Add New preset</a></li>
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Edit preset Agent view”</a></li>

                    </ul>
                  </div>
                <div class="btn-group px-2 ml-0 mb-2">
                    <button type="button" class="btn  btn-outline-secondary  rounded-2  waves-effect" data-bs-toggle="dropdown" aria-expanded="false">  <i class=" menu-icon ri-bar-chart-grouped-line"></i>status</button>
                    <ul class="dropdown-menu" style="">
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Active</a></li>
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">InActive</a></li>

                    </ul>
                  </div>
                <div class="btn-group px-2 ml-0 mb-2">
                    <button type="button" class="btn btn-outline-secondary rounded-2  waves-effect " data-bs-toggle="dropdown" aria-expanded="false">  <i class=" menu-icon ri-filter-line"></i>Filter</button>
                    <ul class="dropdown-menu" style="">
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Active</a></li>
                      <li><a class="dropdown-item waves-effect" href="javascript:void(0);">InActive</a></li>

                    </ul>
                  </div>
                 <div class="ml-0 mb-2">
                    <a class="btn btn-primary  rounded-2  waves-effect" href="#"> <i class="pe-1 ri-add-circle-line"></i>Add Applicant</a>
                 </div>
              </div>
            </div>
            <div class="card-body">

                <div class="table-responsive text-nowrap">
                    <table class="table customize-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Label</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Beds</th>
                                <th>Price</th>
                                <th>Rent</th>
                                <th>Areas</th>
                                <th>Property Type</th>
                                <th>Last Connected</th>
                                <th>Phases</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr class="table-default">
                                <td>1</td>
                                <td>Label 1</td>
                                <td>John Doe</td>
                                <td>+1234567890</td>
                                <td>john.doe@example.com</td>
                                <td>3.5</td>
                                <td>5000-8000</td>
                                <td>5000-8000</td>
                                <td>
                                    <span class="badge rounded-pill bg-label-secondary">Bedworth</span>
                                    <span class="badge rounded-pill bg-label-secondary">Bedfordshire</span>
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-label-secondary">Banglow</span>
                                    <span class="badge rounded-pill bg-label-secondary">Commercial</span>
                                    <span class="badge badge-center rounded-pill bg-secondary">+9</span>
                                </td>
                                <td>12/6/24</td>
                                <td>
                                    <span class="phases-circle bg-danger"></span>
                                    <span class="phases-circle bg-warning"></span>
                                    <span class="phases-circle bg-success"></span>
                                    <span class="phases-circle bg-info"></span>
                                </td>
                                <td class="action-table">
                                    <div class="d-flex">
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-pencil-line"></i></a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-printer-line"></i></a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-delete-bin-6-line text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-default">
                                <td>2</td>
                                <td>Label 1</td>
                                <td>John Doe</td>
                                <td>+1234567890</td>
                                <td>john.doe@example.com</td>
                                <td>3.5</td>
                                <td>5000-8000</td>
                                <td>5000-8000</td>
                                <td>
                                    <span class="badge rounded-pill bg-label-secondary">Bedworth</span>
                                    <span class="badge rounded-pill bg-label-secondary">Bedfordshire</span>
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-label-secondary">Banglow</span>
                                    <span class="badge rounded-pill bg-label-secondary">Commercial</span>
                                    <span class="badge badge-center rounded-pill bg-secondary">+9</span>
                                </td>
                                <td>12/6/24</td>
                                <td>
                                    <span class="phases-circle bg-danger"></span>
                                    <span class="phases-circle bg-warning"></span>
                                    <span class="phases-circle bg-success"></span>
                                    <span class="phases-circle bg-info"></span>
                                </td>
                                <td class="action-table">
                                    <div class="d-flex">
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-pencil-line"></i></a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-printer-line"></i></a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-delete-bin-6-line text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-default">
                                <td>3</td>
                                <td>Label 1</td>
                                <td>John Doe</td>
                                <td>+1234567890</td>
                                <td>john.doe@example.com</td>
                                <td>3.5</td>
                                <td>5000-8000</td>
                                <td>5000-8000</td>
                                <td>
                                    <span class="badge rounded-pill bg-label-secondary">Bedworth</span>
                                    <span class="badge rounded-pill bg-label-secondary">Bedfordshire</span>
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-label-secondary">Banglow</span>
                                    <span class="badge rounded-pill bg-label-secondary">Commercial</span>
                                    <span class="badge badge-center rounded-pill bg-secondary">+9</span>
                                </td>
                                <td>12/6/24</td>
                                <td>
                                    <span class="phases-circle bg-danger"></span>
                                    <span class="phases-circle bg-warning"></span>
                                    <span class="phases-circle bg-success"></span>
                                    <span class="phases-circle bg-info"></span>
                                </td>
                                <td class="action-table">
                                    <div class="d-flex">
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-pencil-line"></i></a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-printer-line"></i></a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="ri-delete-bin-6-line text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
          </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-7 col-12">
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="mb-4">
                    <label for="defaultSelect" class="form-label">Actions</label>
                    <select id="defaultSelect" class="form-select">
                      <option selected>Choose Action</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>

            </div>
            <div class="col-lg-4 col-6">
                <div class="mb-4">
                    <label for="defaultSelect" class="form-label">Flags</label>
                    <select id="defaultSelect" class="form-select">
                      <option selected>Assign Flag</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>

            </div>
            <div class="col-lg-4 col-6">
                <div class="mb-4">
                    <label for="defaultSelect" class="form-label">Assign to</label>
                    <select id="defaultSelect" class="form-select">
                      <option selected>Assign to</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>

            </div>
        </div>



    </div>
    <div class="col-lg-5 col-12">
        <div class="row align-items-end flex-wrap">
            <div class="col-lg-6 col-12 mb-lg-0 mb-2">
                <div class="">
                    <label for="largeInput" class="form-label">Send property to selected applicants(27)
                    </label>
                    <input id="largeInput" class="form-control" type="text" placeholder="2191- Appartment at Capetown">
                  </div>

            </div>
            <div class="col-lg-6 col-6 mb-lg-0 mb-2 d-flex">
                <div class="ml-0">
                    <label for="largeInput" class="form-label">
                    </label>
                    <a class="btn btn-outline-secondary  rounded-2  waves-effect mx-2" href="#"> <i class=" menu-icon ri-settings-2-line"></i>by SMS</a>
                 </div>
                 <div class="ml-0">
                    <label for="largeInput" class="form-label">
                    </label>
                    <a class="btn btn-outline-secondary  rounded-2  waves-effect mx-2" href="#"> <i class=" menu-icon ri-settings-2-line"></i>by Email</a>
                 </div>
            </div>


        </div>
        <div class="row mt-3">
            <div class="col-12 text-end">
                <a class="btn btn-outline-info  rounded-2  waves-effect mxl-0 mb-2" href="#">Add property to list</a>
                <a class="btn btn-outline-info  rounded-2  waves-effect mxl-0 mb-2" href="#">Edit / View list</a>
                <a class="btn btn-outline-info  rounded-2  waves-effect mxl-0 mb-2" href="#">Email list to applicants</a>



            </div>

        </div>

    </div>
</div>
@endsection
