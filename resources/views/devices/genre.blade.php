@extends('layouts.app')

@section('content')
    <devices-genre-component
        :is-logged-in = "{{ $isLoggedIn }}"
        :devices="{{ $devices }}"
        genre="{{ $deviceGenreParam }}"
    ></devices-genre-component>
@endsection

@section('script')
    <script src="{{ asset('/js/devices/genre.js') }}"></script>
@endsection