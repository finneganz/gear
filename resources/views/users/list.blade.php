@extends('layouts.app')

@section('content')
    <top-component
        :auth = "{{ $auth }}"
        :users = "{{ $users }}"
    ></top-component>
@endsection

@section('script')
    <script src="{{ asset('/js/users/top.js') }}"></script>
@endsection