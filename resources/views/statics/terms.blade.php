@extends('layouts.app')

@section('content')
    <terms-component
        :auth = "{{ $auth }}"
    ></terms-component>
@endsection

@section('script')
    <script src="{{ asset('/js/statics/terms.js') }}"></script>
@endsection