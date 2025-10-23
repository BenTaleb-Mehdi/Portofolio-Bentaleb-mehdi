
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-purple-50"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse delay-700"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-7xl font-bold mb-6">
                    Hi, I'm
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">{{$info['name']}}</span>
                </h1>
                <h2 class="text-3xl md:text-4xl font-semibold mb-6 text-gray-700">
                    <span id="typedText" class="typing"></span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 mb-12">
                    {{$info['bio']}}
                </p>
                <a href="{{ url('/project') }}" class="inline-block px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    View My Work
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <i class="fas fa-chevron-down text-2xl text-gray-400"></i>
                </div>
            </div>
        </div>
    </section>



