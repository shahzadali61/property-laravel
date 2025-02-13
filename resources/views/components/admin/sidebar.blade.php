<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme sidebar">
    <div class="app-brand demo mt-4">
        <a href="#" class="app-brand-link">
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
                <div data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div>layout 1</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Data Tables -->
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons ri-grid-line"></i>
                <div data-i18n="Datatables">Datatables</div>
            </a>
        </li>

        <!-- Misc -->
        <li class="menu-header mt-7"><span class="">Preference</span></li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons ri-lifebuoy-line"></i>
                <div data-i18n="Support">Setting</div>
            </a>
        </li>
    </ul>
</aside>
