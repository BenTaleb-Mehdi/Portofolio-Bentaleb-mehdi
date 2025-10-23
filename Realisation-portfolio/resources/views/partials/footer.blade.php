<footer class="bg-gray-100 py-8 mt-20">
    <div class="container mx-auto px-6 text-center">
        <div class="flex justify-center space-x-6 mb-4">
            @foreach ($getsocialmedia as $account)
                <a href="{{ $account['link'] }}" class="text-gray-600 hover:text-blue-600 transition">
                    <i class="{{ $account['iconApp'] }} text-2xl"></i>
                </a>
            @endforeach
        </div>
        <p class="text-gray-600">© {{ date('Y') }} Mehdi Bentaleb. All rights reserved.</p>
    </div>
</footer>
