@extends('layouts.app')

@section('content')
    <policy-component
        :is-logged-in = "{{ $isLoggedIn }}"
    ></policy-component>
@endsection

@section('script')
    <script src="{{ asset('/js/statics/policy.js') }}"></script>
@endsection