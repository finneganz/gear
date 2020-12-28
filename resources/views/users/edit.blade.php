@extends('layouts.app')

@section('content')
    <user-edit-component
        :auth = "{{ $auth }}"
        :errors = "{{ $errors }}"
        :devices = "{{ $userDevices }}"
        :settings = "{{ $userSettings }}"
        :select-devices = "{{ $selectDevices }}"
    ></user-edit-component>
@endsection

@section('script')
    <script src="{{ asset('/js/users/edit.js') }}"></script>
@endsection