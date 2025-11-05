@extends('layouts.app')

@section('title', 'Beranda - JAWARI')
@section('activeLink', 'Beranda')

@section('content')
    <section class="container mx-auto py-16 px-4 my-8 md:my-2">
        <div class="flex flex-col md:flex-row items-center md:items-center gap-12 md:gap-16">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nulla ea sit soluta natus, vero tenetur
                    dolor dolorem repellat at accusantium culpa harum quasi blanditiis provident ut, voluptates odio! Sequi!
                </h2>
            </div>

            <div class="relative w-[345px] h-[400px] mx-auto">
                <div class="bg-[#FBF0DB] rounded-2xl shadow w-full h-full flex items-center justify-center">
                    <img src="{{ asset('assets/explore-section.webp') }}" alt=""
                        class="w-[320px] h-[320px] object-contain">
                </div>
            </div>
    </section>

@endsection
