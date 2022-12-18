<!--**********************************
        Sidebar start
    ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

            @foreach (User()['Menus'] as $Menus)
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="{{ $Menus['menuIcon'] }}"></i>
                        <span class="nav-text">{{ $Menus['title'] }}</span>
                    </a>
                    <ul aria-expanded="false">
                        @foreach ($Menus['menus'] as $MenuItem)
                            <li><a href="{{ $MenuItem['menuLink'] }}">{{ $MenuItem['menuItem'] }}</a></li>
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
