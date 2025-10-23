<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
</head>
<body class="bg-white text-gray-900">
      <!-- Loader (if you want it) -->
    <div id="loader">
        <div class="loader"></div>
    </div>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
    
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
