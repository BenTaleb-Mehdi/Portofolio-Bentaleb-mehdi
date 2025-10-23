@php
    $isHome = request()->is('/');
@endphp

<nav class="fixed w-full top-0 z-40 bg-white/80 backdrop-blur-md shadow-sm">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">MB</a>

 <div class="hidden md:flex items-center space-x-8">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-500 font-bold' : '' }} hover:text-blue-500">Home</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-500 font-bold' : '' }} hover:text-blue-500">About</a>
    <a href="{{ route('project') }}" class="{{ request()->routeIs('project') ? 'text-blue-500 font-bold' : '' }} hover:text-blue-500">Projects</a>

</div>


        <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>

<div id="mobileMenu" class="hidden md:hidden mt-4 pb-4 flex flex-col space-y-3 px-6">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-500 font-bold' : '' }} hover:text-blue-500 ">Home</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-500 font-bold' : '' }} hover:text-blue-500">About</a>
    <a href="{{ route('project') }}" class="{{ request()->routeIs('project') ? 'text-blue-500 font-bold' : '' }} hover:text-blue-500">Projects</a>

</div>

</nav>
