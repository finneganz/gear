@extends('layouts.app')

@section('content')
    <user-component></user-component>
@endsection

@section('script')
    <script src="{{ asset('/js/users/user.js') }}"></script>
@endsection