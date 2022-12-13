<!--**********************************
        Sidebar start
    ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            @foreach (user()['Menus'] as $Menus)
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">{{ $Menus->parentMenuId ?? $Menus->menuItem }}</span>
                    </a>
                    @if (count($Menus->childs))
                        <ul aria-expanded="false">
                            @foreach ($Menus->childs as $item)
                                @include('DashboardElements.UserSubMenu', ['childs' => $item])
                            @endforeach
                        </ul>
                    @endif
                    {{-- <li><a href="app-profile.html">پروفایل</a></li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">ایمیل</a>
                            <ul aria-expanded="false">
                                <li><a href="email-compose.html">ارسال ایمیل</a></li>
                                <li><a href="email-inbox.html">صندوق دریافتی</a></li>
                                <li><a href="email-read.html">خواندن</a></li>
                            </ul>
                        </li> --}}

                </li>
            @endforeach


        </ul>

    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
