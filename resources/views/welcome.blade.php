<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>VIBE - Modern Design</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="antialiased bg-gradient-to-br from-gray-900 to-black text-white">
<div class="min-h-screen">
    <!-- Modern Navbar with Glassmorphism -->
    <nav class="backdrop-blur-md bg-black/30 fixed w-full z-50 transition-all duration-300">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-white text-xl font-bold">
                    <img src="{{asset('/images/VIBE_LOGO.png')}}" alt="logo" class="h-12 w-auto hover:scale-105 transition-transform"/>
                </a>
                <div class="space-x-8">
                    @if (Route::has('login'))
                        <div class="inline-flex gap-6">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="relative group px-4 py-2">
                                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-purple-500 group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-purple-500 group-hover:bg-purple-500"></span>
                                    <span class="relative text-purple-500 group-hover:text-white">Dashboard</span>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="px-6 py-2 text-white hover:text-purple-300 transition-colors relative after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-0 after:bg-purple-400 after:transition-all hover:after:w-full">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="relative inline-flex items-center justify-center px-6 py-2 overflow-hidden font-medium transition-all bg-purple-500 rounded-lg hover:bg-purple-600 group">
                                        <span class="w-full h-full bg-gradient-to-br from-purple-600 via-purple-500 to-purple-400"></span>
                                        <span class="relative">Register</span>
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Animation -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-purple-900 via-indigo-800 to-blue-900">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.07)\"%2F%3E%3C%2Fsvg%3E')] opacity-20"></div>
<div class="container mx-auto px-6 relative z-10">
    <div class="text-center">
        <h1 class="text-6xl font-bold mb-8 animate-fade-in bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">Welcome to VIBE</h1>
        <p class="text-2xl mb-12 text-gray-300">Elevate your digital presence with cutting-edge solutions</p>
        <a href="#services" class="group relative inline-flex items-center justify-center px-8 py-3 overflow-hidden font-medium tracking-tighter text-white bg-gray-800 rounded-lg group">
            <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-purple-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
            <span class="relative">Discover More</span>
        </a>
    </div>
</div>
</section>

<!-- About Section with Cards -->
<section id="about" class="py-24 bg-gradient-to-b from-black to-purple-900">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-16 text-center bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">About Us</h2>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <p class="text-xl text-gray-300 leading-relaxed">We are innovators, creators, and problem solvers dedicated to transforming your digital vision into reality.</p>
                <div class="flex gap-4">
                    <div class="flex-1 p-6 bg-gradient-to-br from-purple-900/50 to-transparent backdrop-blur-lg rounded-2xl border border-purple-500/20">
                        <h3 class="text-xl font-semibold mb-2">Innovation</h3>
                        <p class="text-gray-400">Pushing boundaries with cutting-edge solutions</p>
                    </div>
                    <div class="flex-1 p-6 bg-gradient-to-br from-purple-900/50 to-transparent backdrop-blur-lg rounded-2xl border border-purple-500/20">
                        <h3 class="text-xl font-semibold mb-2">Excellence</h3>
                        <p class="text-gray-400">Delivering outstanding results consistently</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 blur-3xl opacity-30"></div>
                <img src="{{asset('/images/VIBE_LOGO.png')}}" alt="About Us" class="relative rounded-2xl "/>
            </div>
        </div>
    </div>
</section>

<!-- Services Section with Hover Effects -->
<section id="services" class="py-24 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-16 text-center bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group p-8 bg-gradient-to-br from-purple-900/50 to-transparent backdrop-blur-lg rounded-2xl border border-purple-500/20 hover:border-purple-500/40 transition-all duration-300 hover:transform hover:-translate-y-2">
                <h3 class="text-2xl font-semibold mb-4 text-purple-400">Web Development</h3>
                <p class="text-gray-400 group-hover:text-gray-300 transition-colors">Creating powerful, responsive websites that leave a lasting impression.</p>
            </div>
            <div class="group p-8 bg-gradient-to-br from-purple-900/50 to-transparent backdrop-blur-lg rounded-2xl border border-purple-500/20 hover:border-purple-500/40 transition-all duration-300 hover:transform hover:-translate-y-2">
                <h3 class="text-2xl font-semibold mb-4 text-purple-400">Digital Marketing</h3>
                <p class="text-gray-400 group-hover:text-gray-300 transition-colors">Strategic solutions to boost your online presence and reach.</p>
            </div>
            <div class="group p-8 bg-gradient-to-br from-purple-900/50 to-transparent backdrop-blur-lg rounded-2xl border border-purple-500/20 hover:border-purple-500/40 transition-all duration-300 hover:transform hover:-translate-y-2">
                <h3 class="text-2xl font-semibold mb-4 text-purple-400">Consulting</h3>
                <p class="text-gray-400 group-hover:text-gray-300 transition-colors">Expert guidance to help your business reach new heights.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section with Modern Form -->
<section id="contact" class="py-24 bg-gradient-to-t from-black to-purple-900">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-16 text-center bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">Get In Touch</h2>
        <div class="max-w-2xl mx-auto text-center">
            <p class="text-xl mb-8 text-gray-300">Ready to start your journey with us? We're here to help bring your vision to life.</p>
            <a href="mailto:contact@mywebsite.com" class="inline-flex items-center px-8 py-3 text-lg font-medium text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-full hover:from-purple-600 hover:to-pink-600 transition-all duration-300 transform hover:scale-105">
                <span>Let's Talk</span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</section>

<!-- Footer with Modern Design -->
<footer class="bg-black/80 backdrop-blur-lg border-t border-purple-500/20">
    <div class="container mx-auto px-6 py-8">
        <div class="text-center">
            <p class="text-gray-400">&copy; 2025 VIBE. Crafted with passion.</p>
        </div>
    </div>
</footer>
</div>
</body>
</html>
