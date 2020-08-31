@extends('layouts.app')

@section('content')
    <user-edit-component
        :errors="{{ $errors }}"
    ></user-edit-component>
@endsection

@section('script')
    <script src="{{ asset('/js/users/edit.js') }}"></script>
@endsection