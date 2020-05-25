@extends('layouts.app')

@section('content')
    <device-add-component></device-add-component>
@endsection

@section('script')
    <script src="{{ asset('/js/devices/add.js') }}"></script>
@endsection