<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme sidebar">
    <div class="app-brand demo mt-4">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-semibold ms-2">
                <img class="img-fluid" style="width: 150px" height="50px" src="{{ asset('admin/assets/img/sidebar.png') }}" alt="not-show">
            </span>
        </a>
    </div>
    <div class="mx-3 my-2" style="border: 1px solid rgb(213, 212, 217);"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Layouts -->
        <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-layout-2-line"></i>
                <div data-i18n="Layouts">Dashboard</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div>Option</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item  {{ request()->routeIs('applicants') || request()->routeIs('add-applicant') || request()->routeIs('personal-detail') ? 'active' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-layout-2-line"></i>
                <div data-i18n="Layouts">Applicant</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('applicants') || request()->routeIs('add-applicant') || request()->routeIs('personal-detail') ? 'active' : '' }}">
                    <a href="{{ route('applicants') }}" class="menu-link">
                        <div>Applicant List</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('summary')? 'active' : '' }}">
                    <a href="{{ route('summary') }}" class="menu-link">
                        <div>Summary

                        </div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('communication')? 'active' : '' }}">
                    <a href="{{ route('communication') }}" class="menu-link">
                        <div>communication

                        </div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('matching-properties')? 'active' : '' }}">
                    <a href="{{ route('matching-properties') }}" class="menu-link">
                        <div>matching-properties

                        </div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('viewing')? 'active' : '' }}">
                    <a href="{{ route('viewing') }}" class="menu-link">
                        <div>Viewing

                        </div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('offers')? 'active' : '' }}">
                    <a href="{{ route('offers') }}" class="menu-link">
                        <div>Offers
                        </div>
                    </a>
                </li>
            </ul>
        </li>



        <!-- Misc -->
        <li class="menu-header mt-7"><span class="">Preference</span></li>
        <li class="menu-item">
            <a href="#" class="menu-link">

                <i class="ri-settings-2-line menu-icon "></i>
                <div data-i18n="Support">Setting</div>
            </a>
        </li>
    </ul>
</aside>
