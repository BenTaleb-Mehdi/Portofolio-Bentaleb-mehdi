    <!-- Projects Section -->
    <section class="pt-32 pb-20 min-h-screen bg-gray-50">
        <div class="container mx-auto px-6">
            <!-- Page Title -->
            <div class="text-center mb-16 reveal">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">
                    My <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Projects</span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto rounded-full mb-6"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    A collection of my recent work showcasing web development, design, and creative solutions.
                </p>
            </div>



            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 p-6">
                <!-- Project 1 -->
            @foreach ($getProject as $project)
               
               
                <div class="project-card reveal bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300" data-category="web">
                    <div class="relative overflow-hidden group">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset($project['img']) }}" alt="E-Commerce Platform"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <a href="{{ route('project.show', $project['id']) }}" class="text-white font-semibold hover:text-blue-300 transition">
                                    View Project <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $project['des'] }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($project['tags'] as $tag )
                        
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">{{ $tag }}</span>

                            @endforeach
                        </div>
                    </div>
                </div>

            @endforeach
            </div>
        </div>
    </section>