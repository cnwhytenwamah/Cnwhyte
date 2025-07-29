@extends('front-pages.layouts.app')

@section('content')
<!-- My Blogs Starts -->
    <section class="w-full pb-16 ">
        <!-- Blog Header Section with Background -->
        <div class="w-full h-[450px] bg-cover bg-center bg-no-repeat py-20 text-center text-white" style="background-image: url('assets/images/blog-bg.png');">
            <h2 class="text-4xl font-bold">
                <span class="text-[#f8ca29]">My</span> Blog
            </h2>
            <p class="text-sm mt-2 max-w-xl mx-auto">
                upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <!-- Blog Cards Container -->
        <div class="w-full mx-auto pt-10 px-4 md:px-[150px] md:-mt-20">
            <!-- Blog Card -->
            <div class="md:flex gap-6">
                <div class="w-100 md:w-[33%] bg-white shadow-lg rounded overflow-hidden group relative">
                    <div class="relative">
                        <img src="{{ asset('assets/images/blog-img1.png') }}" alt="Blog image" class="w-full h-60 object-cover transition-transform duration-300 group-hover:scale-105" />
                        <span class="absolute top-0 left-4 bg-[#f8ca29] text-white text-sm font-semibold px-4 py-1 shadow-md">
                            JUN 05
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-[#f8ca29] transition-colors duration-300">
                            Veniam, quis nostrud
                        </h3>
                        <p class="text-sm text-gray-600">
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        </p>
                    </div>
                </div>

                <!-- Repeat Card -->
                <div class="w-100 md:w-[33%] bg-white shadow-lg rounded overflow-hidden group relative">
                    <div class="relative">
                        <img src="{{ asset('assets/images/blog-img2.png') }}" alt="Blog image" class="w-full h-60 object-cover transition-transform duration-300 group-hover:scale-105" />
                        <span class="absolute top-0 left-4 bg-[#f8ca29] text-white text-sm font-semibold px-4 py-1 shadow-md">
                            JUN 05
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-[#f8ca29] transition-colors duration-300">
                            Veniam, quis nostrud
                        </h3>
                        <p class="text-sm text-gray-600">
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        </p>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="w-100 md:w-[33%] bg-white shadow-lg rounded overflow-hidden group relative">
                    <div class="relative">
                        <img src="{{ asset('assets/images/blog-img1.png') }}" alt="Blog image" class="w-full h-60 object-cover transition-transform duration-300 group-hover:scale-105" />
                        <span class="absolute top-0 left-4 bg-[#f8ca29] text-white text-sm font-semibold px-4 py-1 shadow-md">
                            JUN 05
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-[#f8ca29] transition-colors duration-300">
                            Veniam, quis nostrud
                        </h3>
                        <p class="text-sm text-gray-600">
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <button class="bg-gray-900 border border-gray-300 text-white hover:bg-yellow-400 hover:text-black transition-all px-6 py-2 rounded shadow">
                    Read More
                </button>
            </div>
        </div>
    </section>
    <!-- My Blog Ends -->
@endsection