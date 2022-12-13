<ul aria-expanded="false">
    @foreach ($childs as $child)
        @dump($child)
        {{-- @dump($child->menuItem) --}}
        {{-- @if (count($child->childs))
            @include('DashboardElements.UserSubMenu', ['childs' => $child->childs])
            @endif --}}
        {{-- <li><a href="app-profile.html">@include('DashboardElements.UserSubMenu', ['childs' => $child->childs])</a></li> --}}
        {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">ایمیل</a>
        <li aria-expanded="false"> --}}
        {{-- <li><a href="email-compose.html">{{ $child->menuItem }}</a></li> --}}
        {{-- </ul> --}}
        {{-- </li> --}}
    @endforeach
</ul>
