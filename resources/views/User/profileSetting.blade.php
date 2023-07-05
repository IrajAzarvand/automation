@extends('layouts.DashboardLayout')

@section('contents')
    @livewire('user.user-profile-setting', ['selectedUser' => $selectedUser])
    {{-- variable come from UserPanelController --}}
@endsection
