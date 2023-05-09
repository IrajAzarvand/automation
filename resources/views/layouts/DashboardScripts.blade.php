<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('DashboardElements/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('DashboardElements/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('DashboardElements/vendor/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('DashboardElements/js/plugins-init/sweetalert.init.js') }}" type="text/javascript"></script>
<script src="{{ asset('DashboardElements/vendor/toastr/js/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('DashboardElements/js/plugins-init/toastr-init.js') }}" type="text/javascript"></script>

<script src="{{ asset('DashboardElements/js/index_custom.min.js') }}"></script>
<script src="{{ asset('DashboardElements/js/deznav-init.js') }}"></script>

<script src="{{ asset('DashboardElements/js/jalalidatepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('DashboardElements/js/jalalidatepickerRules.js') }}" type="text/javascript"></script>

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
