@extends('layouts.app')

@section('content')
    <top-component
        :is-logged-in = "{{ $isLoggedIn }}"
        :users = "{{ $users }}"
    ></top-component>
@endsection

@section('script')
    <script src="{{ asset('/js/users/top.js') }}"></script>
@endsection