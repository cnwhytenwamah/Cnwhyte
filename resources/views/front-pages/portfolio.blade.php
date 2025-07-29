@extends('front-pages.layouts.app')

@section('content')
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
@endsection