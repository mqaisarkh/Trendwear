<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trendwear - Premium Fashion</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ... existing code ... */
            </style>
        @endif
    </head>
    <body class="antialiased">
        <!-- Navigation -->
        <nav class="fixed w-full bg-white/80 backdrop-blur-sm z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex-shrink-0">
                        <span class="text-2xl font-bold">TRENDWEAR</span>
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="#" class="text-gray-700 hover:text-black">Collections</a>
                        <a href="#" class="text-gray-700 hover:text-black">Men</a>
                        <a href="#" class="text-gray-700 hover:text-black">Women</a>
                        <a href="#" class="text-gray-700 hover:text-black">About</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-gray-700 hover:text-black">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-700 hover:text-black">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </a>
                        @auth
                            <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-black">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-gray-700 hover:text-black">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-black">Login</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative h-screen">
            <div class="absolute inset-0 bg-black/50"></div>
            <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
                 alt="Fashion Collection" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white">
                    <h1 class="text-5xl md:text-7xl font-bold mb-4">ELEVATE YOUR STYLE</h1>
                    <p class="text-xl md:text-2xl mb-8">Discover our latest collection of premium fashion</p>
                    <a href="{{ route('register') }}" class="bg-white text-black px-8 py-3 rounded-full text-lg font-medium hover:bg-gray-100 transition duration-300">
                        Register Now
                    </a>
                </div>
            </div>
        </div>

        <!-- Featured Collections -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Collections</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Collection 1 -->
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                         alt="Men's Collection" 
                         class="w-full h-[500px] object-cover">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <a href="#" class="text-white text-xl font-medium">Men's Collection</a>
                    </div>
                </div>
                <!-- Collection 2 -->
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                         alt="Women's Collection" 
                         class="w-full h-[500px] object-cover">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <a href="#" class="text-white text-xl font-medium">Women's Collection</a>
                    </div>
                </div>
                <!-- Collection 3 -->
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1556906781-9a412961c28c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                         alt="Accessories" 
                         class="w-full h-[500px] object-cover">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <a href="#" class="text-white text-xl font-medium">Accessories</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="bg-gray-100 py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold mb-4">Join Our Newsletter</h2>
                    <p class="text-gray-600 mb-8">Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals.</p>
                    <form class="max-w-md mx-auto">
                        <div class="flex">
                            <input type="email" 
                                   placeholder="Your email address" 
                                   class="flex-1 px-4 py-3 rounded-l-full focus:outline-none">
                            <button type="submit" 
                                    class="bg-black text-white px-6 py-3 rounded-r-full hover:bg-gray-800 transition duration-300">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-black text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">TRENDWEAR</h3>
                        <p class="text-gray-400">Premium fashion for the modern individual.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-medium mb-4">Shop</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Men</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Women</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Accessories</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">New Arrivals</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-medium mb-4">About</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Our Story</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Sustainability</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-medium mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; 2024 Trendwear. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
