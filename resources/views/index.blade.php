@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want see your bolgs?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    show 
                </a>
            </div>
        </div>
    </div>

   

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in :
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            frontend Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            UI/UX Figma
        </span>
        
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    

   
@endsection