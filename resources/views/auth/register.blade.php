@extends('layouts.app')

@section('content')
    <register-component
        :errors = "{{ $errors }}"    
    ></register-component>
@endsection

@section('script')
    <script src="{{ asset('/js/auth/register.js') }}"></script>
@endsection