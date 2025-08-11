<!-- Alpine.js for interactivity -->
<script src="https://unpkg.com/alpinejs" defer></script>

<!-- Main Section -->
<div class="min-h-[100vh] text-white bg-[url('{{asset('assets/images/banner-bg.png')}}')] bg-cover bg-center bg-top">
    <div class="">
        <!-- Navbar -->
        <div class="container mx-auto px-4 flex items-center justify-between" x-data="{ open: false }">
            <!-- Logo -->
            <a href="index.html">
                <img src="{{asset('assets/images/logo.jpg')}}" alt="Logo" class="h-12 ml-12">
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex space-x-6 uppercase text-sm font-medium">
                <a href="#" class="hover:text-yellow-400">Home</a>
                <a href="#" class="hover:text-yellow-400">About</a>
                <a href="#" class="hover:text-yellow-400">Portfolio</a>
                <a href="#" class="hover:text-yellow-400">Service</a>
                <a href="#" class="hover:text-yellow-400">Blog</a>
                <a href="{{route('contact-me')}}" class="hover:text-yellow-400">Contact Us</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden text-3xl focus:outline-none">
                <i :class="open ? 'fas fa-times' : 'fas fa-bars'"></i>
            </button>

            <!-- Mobile Menu -->
            <div x-show="open" @click.away="open = false"
                class="absolute top-20 right-4 bg-[#222c29] shadow-lg rounded-lg flex flex-col items-start space-y-4 p-6 md:hidden z-50 transition">
                <a href="#" class="hover:text-yellow-400">Home</a>
                <a href="#" class="hover:text-yellow-400">About</a>
                <a href="#" class="hover:text-yellow-400">Portfolio</a>
                <a href="#" class="hover:text-yellow-400">Service</a>
                <a href="#" class="hover:text-yellow-400">Blog</a>
                <a href="{{route('contact-me')}}" class="hover:text-yellow-400">Contact Us</a>
            </div>
        </div>

        <!-- Hero Section -->
        <div class="">
            <div class="flex justify-between px-10 py-8 ">
                <!-- Left Text -->
                <div class="px-[50px]">
                    <div class="w-100 space-y-4">
                        <h3 class="text-lg">Hello Am</h3>
                        <h2 class="text-2xl font-semibold">Nwamah Clinton</h2>
                        <h1 class="text-4xl md:text-5xl font-bold"><span class="text-white">Front-End</span> Developer</h1>
                    </div>
                </div>   
                <div class="">
                    <!-- Social Icons Vertical -->
                    <div class="space-y-4 text-xl text-white z-10 hidden md:block">
                        <a href="#" class="block hover:text-yellow-400"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="block hover:text-yellow-400"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="block hover:text-yellow-400"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="block hover:text-yellow-400"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>             
            </div>

            <!-- Right Image and Social Icons -->
            <div class="relative w-100 flex items-center justify-center md:justify-between py-10">
                <!-- Play Button -->
                <div class="w-100 mt-8 md:pl-[300px]">
                    <button class="w-16 h-16 hover:animate-spin rounded-full bg-white border-4 border-yellow-400 flex items-center justify-center shadow-lg hover:scale-105 transition">
                        <i class="fas fa-play text-yellow-500"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
