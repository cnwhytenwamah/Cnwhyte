@extends('front-pages.layouts.app')

@section('content')
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