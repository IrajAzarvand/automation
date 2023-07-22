<!DOCTYPE html>
<html lang="fa" class="light-style" dir="rtl" data-theme="theme-default" data-assets-path="assets/"
    data-template="horizontal-menu-template-no-customizer">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title> {{ Titles()['App_Name'] }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">


    @include('layouts.DashboardCSS')



</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">

            {{-- navbar --}}
            @include('layouts.DashboardNavHeader')
            {{-- navbar --}}




            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">

                    {{-- menu bar --}}
                    @include('layouts.DashboardMenuBar')
                    {{-- menu bar --}}

                    <!-- Content -->



                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">

                            @yield('contents')


                        </div>
                    </div>
                    <!--/ Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                {{ Titles()['Dashboard_copyright'] }}
                            </div>
                            <div>
                                {{-- <a href="#" class="footer-link me-4">لایسنس</a>
                                <a href="#" class="footer-link me-4">قالب‌های بیشتر</a>

                                <a href="#" target="_blank" class="footer-link me-4">مستندات</a> --}}

                                <a href="#" class="footer-link d-none d-sm-inline-block">{{ Titles()['Version'] }}</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>

            <!--/ Layout container -->
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->


    @include('layouts.DashboardScripts')

</body>

</html>