<!-- Project Details Section -->
<section class="pt-32 pb-20 min-h-screen bg-gray-50">
    <div class="container mx-auto px-6 max-w-6xl">
        
        <!-- Back Button -->
        <div class="mb-8 reveal">
            <a href="{{ url('/') }}" class="inline-flex items-center text-gray-600 hover:text-blue-600 transition-colors duration-300">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Projects
            </a>
        </div>

        <!-- Project Header -->
        <div class="text-center mb-12 reveal">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                {{ $project['title'] }}
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto rounded-full mb-6"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                {{ $project['des'] }}
            </p>
        </div>

        <!-- Featured Image -->
        <div class="mb-16 reveal">
            <div class="rounded-2xl overflow-hidden shadow-2xl">
                <img src="{{ asset($project['img']) }}" alt="{{ $project['title'] }}" class="w-full h-auto object-cover">
            </div>
        </div>

        <!-- Project Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Duration -->
            <div class="bg-white rounded-xl p-6 shadow-lg reveal hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center mb-3">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-calendar text-purple-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-500 uppercase tracking-wide">Duration</h3>
                        <p class="text-lg font-bold text-gray-800">{{ $project['Duration'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Role -->
            <div class="bg-white rounded-xl p-6 shadow-lg reveal hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center mb-3">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-briefcase text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-500 uppercase tracking-wide">Role</h3>
                        <p class="text-lg font-bold text-gray-800">Full Stack Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Overview -->
        <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg mb-16 reveal">
            <h2 class="text-3xl font-bold mb-6 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                Project Overview
            </h2>
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                <p>
                    {{ $project['Project-Overview'] }}
                </p>
                
            </div>
        </div>

        <!-- Technologies Used -->
        <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg mb-16 reveal">
            <h2 class="text-3xl font-bold mb-8 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                Technologies Used
            </h2>
            <div class="flex flex-wrap gap-4">
                @foreach ($project['tags'] as $tag)
                    <span class="px-4 py-2 bg-blue-50 text-blue-600 rounded-xl font-semibold shadow-sm hover:shadow-md transition-all duration-300">
                        {{ $tag }}
                    </span>
                @endforeach
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center reveal">
            <a href="#" 
               class="inline-block px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 mr-4 mb-4">
                <i class="fas fa-external-link-alt mr-2"></i>
                View Live Project
            </a>
            
            <a href="#" 
               class="inline-block px-8 py-4 bg-gray-800 text-white font-semibold rounded-full hover:bg-gray-900 hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 mb-4">
                <i class="fab fa-github mr-2"></i>
                View Source Code
            </a>
        </div>

        <!-- Next/Previous Projects -->
        <div class="mt-20 pt-12 border-t border-gray-200">
            <div class="flex justify-between items-center">
                <a href="{{ url('/') }}" 
                   class="group flex items-center text-gray-600 hover:text-blue-600 transition-colors duration-300">
                    <i class="fas fa-arrow-left mr-3 transform group-hover:-translate-x-2 transition-transform duration-300"></i>
                    <div class="text-left">
                        <p class="text-sm text-gray-500">Previous Project</p>
                        <p class="font-bold">Back to Projects</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>