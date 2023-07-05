@extends('layouts.DashboardLayout')

@section('contents')
    <!-- Not Authorized -->
    <div class="container-xxl container-p-y" style="margin: auto; width: 50%;">
        <div class="misc-wrapper">
            <h1 class="mb-2 mx-2 secondary-font">شما مجاز نیستید!</h1>
            <p class="mb-4 mx-2">شما مجوز دسترسی به این صفحه را ندارید. به خانه بروید!!</p>
            <a href="index.html" class="btn btn-primary">بازگشت به خانه</a>
            <div class="mt-5 ">
                <img src="../../assets/img/illustrations/girl-hacking-site-light.png" alt="page-misc-error-light"
                    width="450" class="img-fluid" data-app-light-img="illustrations/girl-hacking-site-light.png"
                    data-app-dark-img="illustrations/girl-hacking-site-dark.png">
            </div>
        </div>
    </div>
    <!-- /Not Authorized -->
@endsection
