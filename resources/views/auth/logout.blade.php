@extends('layouts.app')

@section('content')
    <logout-component></logout-component>
@endsection

@section('script')
    <script src="{{ asset('/js/auth/logout.js') }}"></script>
@endsection