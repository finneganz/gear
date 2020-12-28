@extends('layouts.app')

@section('content')
    <contact-component
        :errors = "{{ $errors }}"
        :auth = "{{ $auth }}"
    ></contact-component>
@endsection

@section('script')
    <script src="{{ asset('/js/statics/contact.js') }}"></script>
@endsection