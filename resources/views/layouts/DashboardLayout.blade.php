<!DOCTYPE html>
<html lang="fa">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content=" {{ Titles()['App_Name'] }}" />
    <meta property="og:image" />
    <meta name="format-detection" content="telephone=no">
    <title> {{ Titles()['App_Name'] }}</title>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!--*******************
    include favicon and css links
********************-->
    @include('layouts.DashboardCSS')
</head>

<body>
    {{-- @dd(User()) --}}


    <!--*******************
    Preloader start
********************-->
    @include('layouts.DashboardPreloader')



    <!--**********************************
    Main wrapper start
***********************************-->
    <div id="main-wrapper">
        <!--**********************************
        Nav header start
    ***********************************-->
        @include('layouts.DashboardNavHeader')




        <!--**********************************
        Chat box start
    ***********************************-->
        @include('DashboardElements.DashboardChatbox')





        <!--**********************************
        Header start
    ***********************************-->
        @include('layouts.DashboardHeader')






        <!--**********************************
        Sidebar start
    ***********************************-->
        @include('layouts.DashboardSideBar')





        <!--**********************************
        Content body start
    ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">


                    <!--**********************************
                        Content section start
                    ***********************************-->

                    @yield('contents')


                </div>
            </div>
        </div>
        <!--**********************************
        Content body end
    ***********************************-->
        <!--**********************************
        Footer start
    ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>{{ Titles()['Dashboard_copyright'] }}</p>
            </div>
        </div>
        <!--**********************************
        Footer end
    ***********************************-->
        <!--**********************************
       Support ticket button start
    ***********************************-->
        <!--**********************************
       Support ticket button end
    ***********************************-->
    </div>
    <!--**********************************
    Main wrapper end
***********************************-->




    <!--**********************************
    Scripts
***********************************-->
    @include('layouts.DashboardScripts')

</body>

</html>
