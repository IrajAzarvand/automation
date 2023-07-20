<!--**********************************
    Scripts
***********************************-->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets/js/forms-selects.js') }}"></script>




<script src="{{ asset('DashboardElements/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="{{ asset('DashboardElements/js/plugins-init/sweetalert.init.js') }}"></script>

<script src="{{ asset('DashboardElements/vendor/toastr/js/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('DashboardElements/js/plugins-init/toastr-init.js') }}" type="text/javascript"></script>


<script src="{{ asset('DashboardElements/js/jalalidatepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('DashboardElements/js/jalalidatepickerRules.js') }}" type="text/javascript"></script>


<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>



<script src="{{ asset('assets/js/scripts/forms/select/form-select2.js') }}"></script>


<!-- Page JS -->
{{-- <script src="{{ asset('assets/js/app-user-list.js') }}"></script> --}}
{{-- <script src="{{ asset('DashboardElements/vendor/datatables/js/jquery.datatables.min.js') }}"></script> --}}



<script src="{{ asset('DashboardElements/js/dropzone.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('DashboardElements/js/dropzoneRules.js') }}" type="text/javascript">
    Dropzone.discover();
</script>



@livewireScripts()


{{-- for showing bootstrap tooltip if needed --}}
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>



{{-- datatables --}}
<script src="{{ asset('DashboardElements/vendor/global/global.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('DashboardElements/vendor/bootstrap-datetimepicker/js/moment.js') }}" type="text/javascript">
</script>
<script src="{{ asset('DashboardElements/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('DashboardElements/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('DashboardElements/js/custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('DashboardElements/js/deznav-init.js') }}"></script>
<script src="{{ asset('DashboardElements/js/demo.js') }}"></script>
<script src="{{ asset('DashboardElements/js/styleswitcher.js') }}"></script>

<script src="{{ asset('DashboardElements/vendor/datatables/js/jquery.datatables.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('DashboardElements/js/plugins-init/datatables.init.js') }}" type="text/javascript"></script>