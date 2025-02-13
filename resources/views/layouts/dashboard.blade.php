<!doctype html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="admin/assets/" data-template="vertical-menu-template-free"
    data-style="light">

<head>
    {{-- Head section --}}
    @include('components.admin.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Sidebar -->
            @include('components.admin.sidebar')

            <!-- Main layout -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('components.admin.navbar')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y content-container">
                        @yield('content')
                    </div>

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- /Content wrapper -->

            </div>
            <!-- /Main layout -->

        </div>
        <!-- /Layout container -->

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    {{-- Footer scripts --}}
    @include('components.admin.foot')
</body>

</html>
