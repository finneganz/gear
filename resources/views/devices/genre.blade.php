@extends('layouts.app')

@section('content')
    <devices-genre-component></devices-genre-component>
@endsection

@section('script')
    <script src="{{ asset('/js/devices/genre.js') }}"></script>
@endsection