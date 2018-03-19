@extends('layouts.master')

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/index.css' type='text/css' rel='stylesheet'>
@endpush

@section('content')
    <h1>Bill Splitter Form</h1>

    <p>
        Showing the form will take place here
    </p>
@endsection