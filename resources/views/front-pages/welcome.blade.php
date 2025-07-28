
@extends('front-pages.layouts.app')

@section('content')
    <!-- Services Section Start -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-gray-800">
                    My <span class="text-[#f8ca29]">Services</span>
                </h1>
            </div>

            <div class="w-100 md:flex gap-8">
                <!-- Service Item 1 -->
                <div class="w-100 md:w-[24%] pt-8 bg-white p-6 py-[90px] md:py-[80px] rounded-full shadow-md text-center hover:shadow-lg border border-[4px] border-[#f8ca29] transition">
                    <div class="flex justify-center mb-4">
                        <img src="{{asset('assets/images/icon-1.png')}}" alt="App Design" class="w-16 h-16">
                    </div>
                    <h4 class="text-lg font-semibold text-[#f8ca29]">App Design</h4>
                </div>
                

                <!-- Service Item 2 -->
                <div class="group w-100 md:w-[24%] pt-8 bg-white p-6 py-[90px] md:py-[80px] rounded-full shadow-md text-center hover:shadow-lg border border-[4px] border-[#f8ca29] transition">
                    <div class="flex justify-center mb-4 relative h-16 w-16 mx-auto">
                        <!-- Image shown ONLY on hover -->
                        <img src="{{asset('assets/images/icon-6.png')}}" alt="Website Design"
                            class="w-full h-full hidden group-hover:block absolute transition-transform duration-300 group-hover:scale-110 top-0 left-0">

                        <!-- Image shown ONLY when not hovered -->
                        <img src="{{asset('assets/images/icon-2.png')}}" alt="Website Design"
                            class="w-full h-full block group-hover:hidden transition-transform duration-300">
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 group-hover:text-[#f8ca29]">Website Design</h4>
                </div>

                <!-- Service Item 3 -->
                <div class="group w-100 md:w-[24%] pt-8 bg-white p-6 py-[90px] md:py-[80px] rounded-full shadow-md text-center hover:shadow-lg border border-[4px] border-[#f8ca29] transition">
                    <div class="flex justify-center mb-4 relative h-16 w-16 mx-auto">
                        <!-- Image shown ONLY on hover -->
                        <img src="{{asset('assets/images/icon-7.png')}}" alt="Html And Css"
                            class="w-full h-full hidden group-hover:block absolute transition-transform duration-300 group-hover:scale-110 top-0 left-0">

                        <!-- Image shown ONLY when not hovered -->
                        <img src="{{asset('assets/images/icon-3.png')}}" alt="Html And Css"
                            class="w-full h-full block group-hover:hidden transition-transform duration-300">
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 group-hover:text-[#f8ca29]">Html And Css</h4>
                </div>

                <!-- Service Item 4 -->
                <div class="group w-100 md:w-[24%] pt-8 bg-white p-6 py-[90px] md:py-[80px] rounded-full shadow-md text-center hover:shadow-lg border border-[4px] border-[#f8ca29] transition">
                    <div class="flex justify-center mb-4 relative h-16 w-16 mx-auto">
                        <!-- Image shown ONLY on hover -->
                        <img src="{{asset('assets/images/icon-8.png')}}" alt="Logo Designing"
                            class="w-full h-full hidden group-hover:block absolute transition-transform duration-300 group-hover:scale-110 top-0 left-0">

                        <!-- Image shown ONLY when not hovered -->
                        <img src="{{asset('assets/images/icon-4.png')}}" alt="Logo Designing"
                            class="w-full h-full block group-hover:hidden transition-transform duration-300">
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 group-hover:text-[#f8ca29]">Logo Designing</h4>
                </div>
            </div>

            <div class="flex justify-center mt-10">
                <a href="#" class="px-6 py-3 bg-black hover:bg-[#f8ca29] text-white rounded-[10px] font-semibold transition">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- My Portofolio Starts -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-gray-800">
                    My <span class="text-[#f8ca29]">Portfolio</span>
                </h1>
            </div>

            <div class="w-100 md:flex gap-8">
                <!-- Image 1 -->
                <div class="w-100 md:w-[65%] pt-8 relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-1.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4">SEE MORE</span>
                    </button>
                </div>
                <!-- Image 2 -->
                <div class="w-100 md:w-[35%] pt-8 relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-2.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4 rounded">SEE MORE</span>
                    </button>
                </div>
            </div>
            <!-- Next Images -->
            <div class="w-100 md:flex gap-8">
                <!-- Image 1 -->
                <div class="w-100 md:w-[33%] pt-8 relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-3.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4 rounded">SEE MORE</span>
                    </button>
                </div>
                <!-- Image 2 -->
                <div class="w-100 md:w-[33%] pt-8 relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-4.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4 rounded">SEE MORE</span>
                    </button>
                </div>
                <!-- Image 3 -->
                <div class="w-100 md:w-[33%] pt-8 relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-5.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4 rounded">SEE MORE</span>
                    </button>
                </div>
            </div>

            <div class="flex justify-center mt-10">
                <a href="#" class="px-6 py-3 bg-black hover:bg-[#f8ca29] text-white rounded-[10px] font-semibold transition">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <!-- My Portofolio Ends -->
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
    <!-- My Contact Starts -->
    <section class="py-20 bg-white text-center">
        <h2 class="text-3xl font-bold mb-10">
            <span class="text-[#f8ca29]">My </span><span class="text-gray-800">Contact</span>
            <div class="w-24 h-1 mx-auto mt-2 bg-gray-800"></div>
        </h2>

        <form class="max-w-xl mx-auto space-y-5">
            <input type="text" placeholder="Your Name" class="w-full border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#f8ca29]"/>
            <input type="email" placeholder="Your Email" class="w-full border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#f8ca29]"/>
            <input type="text" placeholder="Your Phone" class="w-full border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#f8ca29]"/>
            <textarea placeholder="Your Massage" rows="4"class="w-full border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#f8ca29]"></textarea>

            <button type="submit" class="bg-[#f8ca29] text-white px-8 py-3 font-semibold rounded hover:bg-orange-600 transition">
                Send Now
            </button>
        </form>
    </section>

    <section class="bg-gray-50 py-10 w-full">
        <div class="md:flex">
            <div class="w-100 md:w-[65%]">
                <div class="text-center">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">HIRE ME FOR YOUR PROJECTS</h3>
                </div>
            </div>
            <div class="w-100 md:w-[35%]">
                <div class="text-center">
                    <button class="bg-[#f8ca29] text-white px-6 py-2 rounded hover:bg-[#f8ca29] transition">
                        Call Now
                    </button>
                </div>
            </div>
        </div>
        
    </section>
    <!-- My Contact Ends -->
@endsection