@extends('layouts.app')

@section('content')
    <about-component
        :is-logged-in = "{{ $isLoggedIn }}"
    ></about-component>
@endsection

@section('script')
    <script src="{{ asset('/js/statics/about.js') }}"></script>
@endsection