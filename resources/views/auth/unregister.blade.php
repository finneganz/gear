@extends('layouts.app')

@section('content')
    <unregister-component
        :auth = "{{ $auth }}"
    ></unregister-component>
@endsection

@section('script')
    <script src="{{ asset('/js/auth/unregister.js') }}"></script>
@endsection