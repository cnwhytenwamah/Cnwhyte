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
@endsection