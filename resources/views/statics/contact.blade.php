@extends('layouts.app')

@section('content')
    <contact-component
        :is-logged-in = "{{ $isLoggedIn }}"
    ></contact-component>
@endsection

@section('script')
    <script src="{{ asset('/js/statics/contact.js') }}"></script>
@endsection