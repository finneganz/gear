@extends('layouts.app')

@section('content')
    <user-edit-component
        :is-logged-in = "{{ $isLoggedIn }}"
        :errors = "{{ $errors }}"
        :devices = "{{ $userDevices }}"
        :settings = "{{ $userSettings }}"
    ></user-edit-component>
@endsection

@section('script')
    <script src="{{ asset('/js/users/edit.js') }}"></script>
@endsection