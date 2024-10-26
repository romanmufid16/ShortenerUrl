@extends('layouts.app')
@section('title', 'MoveUrl')
@section('content')
    <main class="bg-svg min-h-screen w-full">
        <nav class="container p-6">
            <div class="flex justify-between items-center mx-16 text-white ">
                <a href="/" class="text-3xl font-extrabold tracking-tight">MoveLONGurL</a>
                <button id="btn-url"
                    class="bg-gradient-to-r from-[#5c305e] to-[#f700ff] px-4 py-2 rounded-lg font-semibold hover:font-bold hover:bg-gradient-to-l hover:from-[#f700ff] hover:to-[#5c305e] transition-colors duration-200 ease-in-out">My
                    URLs</button>
            </div>
        </nav>
        <div
            class="flex flex-col lg:flex-row justify-between items-center px-24 transition-transform duration-300 ease-in-out">
            <div class="bg-white max-w-xl p-5 rounded-xl">
                <form method="post" action="{{ route('storeUrl') }}" class="w-full flex flex-col px-6">
                    @csrf
                    <label for="longurl" class="block mb-2 font-semibold">Shorten a long URL</label>
                    <input type="text" name="original_url" class="block border p-2  mb-2 rounded-md border-gray-300">
                    @error('original_url')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <label for="customlink" class="block mb-2 font-semibold">Customize your link</label>
                    <div class="flex gap-3 w-full *:w-full *:rounded-md mb-5">
                        <input type="text" value="127.0.0.1:8000"
                            class="block border p-2  mb-2 rounded-md border-gray-300" readonly>
                        <input type="text" placeholder="Enter Alias"
                            class="block border p-2  mb-2 rounded-md border-gray-300" name="alias">
                        @error('alias')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    @error('recaptcha')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <button type="submit"
                        class="w-full my-5 bg-[#5c305e] text-white font-semibold p-2 rounded-lg shadow-lg">Shorten
                        URL</button>
                </form>
            </div>
            <div class="p-5 max-w-xl">
                <h1 class="text-white text-5xl font-semibold mb-4">Shorten you URL</h1>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati officiis sit
                    praesentium magnam, a ab cumque ratione consequatur quas ipsam.</p>
            </div>
        </div>

    </main>
@endsection
