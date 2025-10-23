@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.project')
@endsection
