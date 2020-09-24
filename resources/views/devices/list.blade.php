@extends('layouts.app')

@section('content')
    <devices-component
        :is-logged-in = "{{ $isLoggedIn }}"
        :devices = "{{ $devices }}"
    ></devices-component>
@endsection

@section('script')
    <script src="{{ asset('/js/devices/devices.js') }}"></script>
@endsection