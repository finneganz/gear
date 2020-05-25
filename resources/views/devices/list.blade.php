@extends('layouts.app')

@section('content')
    <devices-component></devices-component>
@endsection

@section('script')
    <script src="{{ asset('/js/devices/devices.js') }}"></script>
@endsection