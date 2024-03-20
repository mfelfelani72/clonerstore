@extends('layouts.auth.index')

@section('tag-head')
    @include('layouts/auth/tag-head')
@endsection

@section('content')
    @include($address)
@endsection

@section('tag-script')
    @include('layouts/auth/tag-script')
@endsection