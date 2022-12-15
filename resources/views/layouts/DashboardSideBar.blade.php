<!--**********************************
        Sidebar start
    ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">داشبورد</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard') }}">{{ Titles()['Dashboard_Name'] }}</a></li>

                </ul>
            </li>
            @foreach (User()['Menus'] as $Menus)
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">{{ $Menus['title'] }}</span>
                    </a>
                    <ul aria-expanded="false">
                        @foreach ($Menus['menuItems'] as $MenuItem)
                            <li><a href="app-profile.html">{{ $MenuItem }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach

        </ul>

    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
