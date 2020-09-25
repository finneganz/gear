@extends('layouts.app')

@section('content')
    <maker-edit-component
        :is-logged-in = "{{ $isLoggedIn }}"
        :errors = "{{ $errors }}"
        :maker = "{{ $maker }}"
    ></maker-edit-component>
@endsection

@section('script')
    <script src="{{ asset('/js/makers/edit.js') }}"></script>
@endsection