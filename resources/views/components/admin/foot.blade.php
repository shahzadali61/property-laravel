   <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('admin/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('admin/assets/vendor/js/bootstrap.js') }}"></script>
    {{-- <script src="{{ url('admin/assets/vendor/libs/node-waves/node-waves.js') }}"></script> --}}
    {{-- <script src="{{ url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script> --}}
    <script src="{{ url('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- Vendors JS -->
    {{-- <script src="{{ url('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script> --}}
    <!-- Main JS -->
    <script src="{{ url('admin/assets/js/main.js') }}"></script>
    <!-- Page JS -->
    {{-- <script src="{{ url('admin/assets/js/dashboards-analytics.js') }}"></script> --}}
    <!-- Place this tag before closing body tag for github widget button. -->
    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
    @stack('js')
