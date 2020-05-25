@extends('layouts.app')

@section('content')
    <maker-edit-component></maker-edit-component>
@endsection

@section('script')
    <script src="{{ asset('/js/makers/edit.js') }}"></script>
@endsection