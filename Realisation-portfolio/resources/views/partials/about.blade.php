<!-- About Section -->
<section class="pt-32 pb-20 min-h-screen bg-gray-50">
  <div class="container mx-auto px-6">
    
    <!-- Title -->
    <div class="text-center mb-16 reveal">
      <h1 class="text-5xl md:text-6xl font-bold mb-4">
        About <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Me</span>
      </h1>
      <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto rounded-full"></div>
    </div>

    <!-- Content -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      <!-- Image -->
      <div class="reveal">
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-300 to-purple-300 rounded-3xl transform rotate-6"></div>
          <div class="relative bg-gradient-to-br from-blue-100 to-purple-100 rounded-3xl p-8 transform hover:scale-105 transition-transform duration-300">
            <div class="aspect-square bg-gradient-to-br from-blue-200 to-purple-200 rounded-2xl flex items-center justify-center">
              <img src="{{ $infoAbout['img'] }}" alt="">
            </div>
          </div>
        </div>
      </div>

      <!-- Bio -->
      <div class="reveal space-y-4">
        <h2 class="text-3xl md:text-4xl font-bold">I'm {{ $infoAbout['name'] }}</h2>
          {!! $infoAbout['bio'] !!} 
        <div class="pt-4">
          <a href="{{ asset('files/Mehdi bentaleb cv 2026.pdf') }}" download
            class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:shadow-2xl hover:scale-105 transition-all duration-300">
            <i class="fas fa-download mr-2"></i> Download CV
          </a>
        </div>
      </div>
    </div>



  </div>
</section>