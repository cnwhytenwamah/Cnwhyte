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
                <a href="#" class="hover:text-yellow-400">Contact Us</a>
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
                <a href="#" class="hover:text-yellow-400">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
