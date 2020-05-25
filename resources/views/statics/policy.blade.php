@extends('layouts.app')

@section('content')
    <policy-component></policy-component>
@endsection

@section('script')
    <script src="{{ asset('/js/statics/policy.js') }}"></script>
@endsection