@extends('layouts.app')

@section('content')
    <device-edit-component
        :auth = "{{ $auth }}"
        :errors="{{ $errors }}"
        :device="{{ $device }}"
    ></device-edit-component>
@endsection

@section('script')
    <script src="{{ asset('/js/devices/edit.js') }}"></script>
@endsection