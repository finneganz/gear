@extends('layouts.app')

@section('content')
    <about-component
        :auth = "{{ $auth }}"
    ></about-component>
@endsection

@section('script')
    <script src="{{ asset('/js/statics/about.js') }}"></script>
@endsection