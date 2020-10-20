@extends('layouts.app')

@section('content')
    <user-component
        :user = "{{ $user }}"
        :auth = "{{ $auth }}"
        :devices = "{{ $userDevices }}"
        :settings = "{{ $userSettings }}"
    ></user-component>
@endsection

@section('script')
    <script src="{{ asset('/js/users/user.js') }}"></script>
@endsection