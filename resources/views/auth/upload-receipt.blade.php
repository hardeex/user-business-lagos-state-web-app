@extends('dashboard.base')
@Section('title', 'Upload Receipt')


@section('sidebar')
    @include('dashboard.sidebar')
@endsection


@section('content')
    @include('partials.upload-receipt')
@endsection
