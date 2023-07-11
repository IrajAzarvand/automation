<!--**********************************
        Sidebar start
    ***********************************-->
<!-- Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner">
            <!-- my menus -->
            @foreach (Menus() as $menuName => $Items)
                @if (array_key_exists('menuLink', $Items))
                    <li class="menu-item ">
                        <a href=" {{ route($Items['menuLink']) }}" class="menu-link">
                            <i class="menu-icon tf-icons bx {{ $Items['menuIcon'] }}"></i>
                            <div>{{ $menuName }}</div>
                        </a>

                    </li>
                @else
                    <li class="menu-item ">
                        <a href="" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx {{ $Items['menuIcon'] }}"></i>
                            <div>{{ $menuName }}</div>
                        </a>
                        <ul class="menu-sub">
                            @foreach ($Items['subItems'] as $subName => $sublink)
                                <li class="menu-item">
                                    <a href="{{ route($sublink) }}" class="menu-link">
                                        <div>{{ $subName }}</div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</aside>
<!-- / Menu -->
<!--**********************************
    Sidebar end
***********************************-->
