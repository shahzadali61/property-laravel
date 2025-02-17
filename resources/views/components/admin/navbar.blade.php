
<nav class="navbar  container-xxl navbar-example navbar-expand-lg my-3">
    <div class="container-fluid">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
              <i class="ri-menu-fill ri-24px"></i>
            </a>

          </div>
        <a class="navbar-brand" href="javascript:void(0)"> <img class="img-fluid" style="width: 150px" height="50px  "
                src="{{ asset('admin/assets/img/navbar-logo.png') }}" alt="not-show"></a>

        <p class="nav-item nav-link px-0 me-xl-6 pt-3 ms-2 d-none d-md-block">
            <span class="text-secondary" style="font-size: 13px">Last login</span> : Aug. 20, 2023 16:33:45 PST
        </p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-4">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-ex-4">
            <div class="navbar-nav ms-auto flex  align-items-lg-center">
                <li class="nav-item lh-1 me-4 navbar-search d-block d-md-none">
                    <p class="nav-item nav-link px-0 me-xl-6 pt-3 ms-2">
                        <span class="text-secondary" style="font-size: 13px">Last login</span> : Aug. 20, 2023 16:33:45
                        PST
                    </p>

                </li>

                <div class="d-flex align-items-center">
                    <li class="nav-item lh-1 me-4 navbar-search ">
                        <div class="nav-item d-flex align-items-center rounded-2 border ps-3">
                            <i class="ri-search-line ri-22px me-2"></i>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                aria-label="Search..." />
                        </div>

                    </li>
                    <li class="nav-item lh-1 me-4  navbar-notification">
                        <button type="button" class="btn rounded-pill btn-icon btn-outline-secondary waves-effect">
                            <span class="tf-icons ri-notification-4-line ri-22px text-primary"></span>
                        </button>

                    </li>
                </div>
                <li class="nav-item lh-1 me-4 d-lg-block d-none">
                    |
                </li>

                <div class="d-flex align-items-lg-center mt-4 mt-lg-0">


                    <li class="nav-item navbar-dropdown dropdown-user dropdown px-2 user-dropdown">
                        <a class="nav-link btn btn-outline-secondary dropdown-toggle waves-effect "
                            data-bs-toggle="dropdown" hide-arrow p-0" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <img src="admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle me-2" />
                            Mike Azure
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar avatar-online">
                                                <img src="admin/assets/img/avatars/1.png" alt
                                                    class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0 small">John Doe</h6>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="ri-user-3-line ri-22px me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="ri-settings-4-line ri-22px me-2"></i>
                                    <span class="align-middle">Settings</span>
                                </a>
                            </li>


                            <li>
                                <div class="d-grid px-4 pt-2 pb-1">
                                    <a class="btn btn-danger d-flex" href="javascript:void(0);">
                                        <small class="align-middle">Logout</small>
                                        <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item lh-1 me-4 d-lg-block d-none">
                        |
                    </li>
                    <li class="nav-item lh-1 me-4 logout">
                        <button type="button" class="btn rounded-pill btn-icon btn-outline-secondary waves-effect">
                            <span class="ri-logout-box-r-line  ri-22px text-danger"></span>
                        </button>

                    </li>
                </div>
            </div>


        </div>
    </div>
</nav>
