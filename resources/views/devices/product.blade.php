@extends('layouts.app')

@section('content')
    <device-product-component 
        :auth = "{{ $auth }}"
        :device="{{ $device }}"
    ></device-product-component>
@endsection

@section('script')
    <script src="{{ asset('/js/devices/product.js') }}"></script>
@endsection