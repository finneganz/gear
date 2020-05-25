@extends('layouts.app')

@section('content')
    <login-component></login-component>
@endsection

@section('script')
    <script src="{{ asset('/js/auth/login.js') }}"></script>
@endsection