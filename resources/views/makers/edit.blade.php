@extends('layouts.app')

@section('content')
    <maker-edit-component
        :errors="{{ $errors }}"
        :maker="{{ $maker }}"
    ></maker-edit-component>
@endsection

@section('script')
    <script src="{{ asset('/js/makers/edit.js') }}"></script>
@endsection