@extends('layouts.gust')
@section('title')
    Home
@endsection
@section('content')
    @include('inc.home')
    @include('inc.about')
    @include('inc.skills')
    @include('inc.service')
    @include('inc.contact')
@endsection
