@extends('layouts.DashboardLayout')


@section('contents')
    {{-- set exclusive contents based on users role --}}
    @if (User()['Post'] == 'مدیر سامانه')
        {{-- @include('DashboardElements.Card') --}}
        {{-- @include('DashboardElements.Bio') --}}
    @else
    @endif
@endsection
