@extends('layouts.app')

@section('content')
    <register-component
        :auth = "{{ Auth::check() ? Auth::user() : 'false' }}"
        :errors = "{{ $errors }}"    
    ></register-component>
@endsection

@section('script')
    <script src="{{ asset('/js/auth/register.js') }}"></script>
@endsection