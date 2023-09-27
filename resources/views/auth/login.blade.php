@extends('layouts.auth')

@section('content')
    <div class="flex gap-8 items-center h-screen md:h-full p-8">
        <div class="w-full object-cover hidden md:block ">
            <img src="{{ asset('assets/img/login-hero.png') }}" class=" w-full h-full" alt="Login Hero">
        </div>
        <div class="lg:px-16 w-full md:w-[1000px] flex items-center h-full">
            <div class="lg:px-7 flex flex-col items-center">
                <img src="{{ asset('assets/img/logo.svg') }}" width="120px" height="110px" alt="Login Hero">
                <div class="py-6">
                    <h1 class="font-bold text-3xl">Sign In</h1>
                    <p class="text-base font-medium py-6">Enter your email and password for login</p>
                    <form action="{{ route('login') }}" method="post">
                    @csrf
                        <div class="mb-6">
                            <label for="email" class="block mb-2 font-bold text-gray-900 ">
                                Email</label>
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 px-5"
                                placeholder="Input your email here..." required>
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block mb-2 font-bold text-gray-900 ">
                                Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 px-5"
                                placeholder="Input your password here..." required>
                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="mb-6">
                            <img src="{{ asset('assets/img/captcha-contoh.png') }}" alt="">
                        </div>
                        <div class="mb-6">
                            <button class="flex w-full justify-center items-center p-3 bg-red-500 rounded-lg gap-2">
                                <p class="text-sm font-semibold text-white-50">Sign In</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
