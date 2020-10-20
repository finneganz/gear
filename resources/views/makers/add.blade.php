@extends('layouts.app')

@section('content')
    <maker-add-component
        :auth = "{{ $auth }}"
        :errors = "{{ $errors }}"
    ></maker-add-component>
@endsection

@section('script')
    <script src="{{ asset('/js/makers/add.js') }}"></script>
@endsection