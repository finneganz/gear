@extends('layouts.app')

@section('content')
    <device-genre-component></device-genre-component>
@endsection

@section('script')
    <script src="{{ asset('/js/devices/genre.js') }}"></script>
@endsection