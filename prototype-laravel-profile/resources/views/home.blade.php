

@extends('layoults.app')


@section('title','home')

@section('content')
<div class="bg-white p-6  rounded-lg shadow-md max-w-lg mx-auto text-start mt-10">
    <h1 class="text-3xl font-bold mb-2">{{ $developer['name'] }}</h1>
    <p class="text-xl text-gray-600 mb-4">{{ $developer['role'] }}</p>
    <p class="mb-4">{{ $developer['bio'] }}</p>
    <a href="mailto:{{ $developer['Email'] }}" class="text-blue-500 hover:underline">{{ $developer['Email'] }}</a>
</div>

@endsection