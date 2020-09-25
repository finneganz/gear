@extends('layouts.app')

@section('content')
    <user-component
        :is-logged-in = "{{ $isLoggedIn }}"
        :devices = "{{ $userDevices }}"
        :settings = "{{ $userSettings }}"
    ></user-component>
@endsection

@section('script')
    <script src="{{ asset('/js/users/user.js') }}"></script>
@endsection