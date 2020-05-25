@extends('layouts.app')

@section('content')
    <about-component></about-component>
@endsection

@section('script')
    <script src="{{ asset('/js/statics/about.js') }}"></script>
@endsection