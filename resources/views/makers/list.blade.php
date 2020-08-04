@extends('layouts.app')

@section('content')
    <makers-component
        :makers="{{ $makers }}"
    ></makers-component>
@endsection

@section('script')
    <script src="{{ asset('/js/makers/makers.js') }}"></script>
@endsection