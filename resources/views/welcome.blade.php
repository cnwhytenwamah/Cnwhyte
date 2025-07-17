
@extends('layouts.app')

@section('content')
    <!-- Services Section Start -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-gray-800">
                    My <span class="text-[#f8ca29]">Services</span>
                </h1>
            </div>

            <div class="w-100 md:flex gap-8 space-y-8">
                <!-- Service Item 1 -->
                <div class="w-100 md:w-[24%] bg-white p-6 py-[90px] md:py-[80px] rounded-full shadow-md text-center hover:shadow-lg border border-[4px] border-[#f8ca29] transition">
                    <div class="flex justify-center mb-4">
                        <img src="{{asset('assets/images/icon-1.png')}}" alt="App Design" class="w-16 h-16">
                    </div>
                    <h4 class="text-lg font-semibold text-[#f8ca29]">App Design</h4>
                </div>

                <!-- Service Item 2 -->
                <div class="w-100 md:w-[24%] bg-white p-6 py-[90px] md:py-[80px] rounded-full shadow-md text-center hover:shadow-lg border border-[4px] border-[#f8ca29] transition">
                    <div class="flex justify-center mb-4">
                        <img src="{{asset('assets/images/icon-2.png')}}" alt="Website Design" class="w-16 h-16">
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800">Website Design</h4>
                </div>

                <!-- Service Item 3 -->
                <div class="w-100 md:w-[24%] bg-white p-6 py-[90px] md:py-[80px] rounded-full shadow-md text-center hover:shadow-lg border border-[4px] border-[#f8ca29] transition">
                    <div class="flex justify-center mb-4">
                        <img src="{{asset('assets/images/icon-3.png')}}" alt="Html And Css" class="w-16 h-16">
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 hover:text-[#f8ca29]">Html And Css</h4>
                </div>

                <!-- Service Item 4 -->
                <div class="w-100 md:w-[24%] bg-white p-6 py-[90px] md:py-[80px] rounded-full shadow-md text-center hover:shadow-lg border border-[4px] border-[#f8ca29] transition">
                    <div class="flex justify-center mb-4">
                        <img src="{{asset('assets/images/icon-4.png')}}" alt="Logo Designing" class="w-16 h-16">
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800">Logo Designing</h4>
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

            <div class="w-100 md:flex gap-8 space-y-8">
                <!-- Image 1 -->
                <div class="w-100 md:w-[65%] relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-1.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4 rounded">SEE MORE</span>
                    </button>
                </div>
                <!-- Image 2 -->
                <div class="w-100 md:w-[35%] relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-2.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4 rounded">SEE MORE</span>
                    </button>
                </div>
            </div>
            <!-- Next Images -->
            <div class="w-100 md:flex gap-8 space-y-8">
                <!-- Image 1 -->
                <div class="w-100 md:w-[33%] relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-3.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4 rounded">SEE MORE</span>
                    </button>
                </div>
                <!-- Image 2 -->
                <div class="w-100 md:w-[33%] relative group overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/img-4.png')}}" alt="Phone" class="w-full h-full object-cover">

                    <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="bg-black hover:bg-[#f8ca29] text-white font-bold py-2 px-4 rounded">SEE MORE</span>
                    </button>
                </div>
                <!-- Image 3 -->
                <div class="w-100 md:w-[33%] relative group overflow-hidden rounded-md">
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
@endsection