@extends('layouts.app')

@section('content')
    <login-component
        :auth = "{{ Auth::check() ? Auth::user() : 'false' }}"
    ></login-component>
@endsection

@section('script')
    <script src="{{ asset('/js/auth/login.js') }}"></script>
@endsection