@extends('layouts.app')
@section('title', 'MoveUrl')
@section('content')
    <main class="bg-svg min-h-screen w-full">
        <nav class="container p-6">
            <div class="flex justify-between items-center mx-16 text-white ">
                <h1 class="text-3xl font-extrabold tracking-tight">MoveLONGurL</h1>
                <button id="btn-url"
                    class="bg-gradient-to-r from-[#5c305e] to-[#f700ff] px-4 py-2 rounded-lg font-semibold hover:scale-105 hover:font-bold hover:border-2">My
                    URLs</button>
            </div>
        </nav>
        <div class="flex flex-col lg:flex-row justify-between items-center px-24 transition-transform duration-300 ease-in-out">
            <div class="bg-white max-w-xl p-5 rounded-xl">
                <form action="" method="post" class="w-full flex flex-col px-6">
                    <label for="longurl" class="block mb-2 font-semibold">Shorten a long URL</label>
                    <input type="text" name="original_url" id="" class="block border p-2  mb-2 rounded-md border-gray-300 w-full">
                    <label for="customlink" class="block mb-2 font-semibold">Customize your link</label>
                    <div class="flex gap-3 w-full *:w-full *:rounded-md mb-5">
                        <input type="text" value="127.0.0.1:8000" class="block border p-2  mb-2 rounded-md border-gray-300">
                        <input type="text" placeholder="Enter Alias" class="block border p-2  mb-2 rounded-md border-gray-300">
                    </div>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
    
                    @error('captcha')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="w-full my-5 bg-[#5c305e] text-white font-semibold p-2 rounded-lg shadow-lg">Shorten URL</button>
                </form>
            </div>
            <div class="p-5 max-w-xl">
                <h1 class="text-white text-5xl font-semibold mb-4">Shorten you URL</h1>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati officiis sit praesentium magnam, a ab cumque ratione consequatur quas ipsam.</p>
            </div>
        </div>

    </main>
@endsection
