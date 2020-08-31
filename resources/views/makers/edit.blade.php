@extends('layouts.app')

@section('content')
    <maker-edit-component
        :errors="{{ $errors }}"
    ></maker-edit-component>
@endsection

@section('script')
    <script src="{{ asset('/js/makers/edit.js') }}"></script>
@endsection