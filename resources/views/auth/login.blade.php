@extends('layouts.auth')

@section('content')
    <div class="flex justify-between">
        <img src="{{ asset('assets/img/login-hero.png') }}" class="min-[360px]:hidden md:block w-6/12" width="" height="960px" alt="Login Hero">
        <div class="px-16 w-full ">
            <div class="px-7 py-12 flex flex-col items-center">
                <img src="{{ asset('assets/img/logo.svg') }}" width="120px" height="110px" alt="Login Hero">
                <div class="py-6">
                    <h1 class="font-bold text-3xl">Sign In</h1>
                    <p class="text-base font-medium py-6">Enter your email and password for login</p>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 font-bold text-gray-900 ">
                            Email</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 px-5"
                            placeholder="Input your email here..." required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 font-bold text-gray-900 ">
                            Password</label>
                        <input type="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 px-5"
                            placeholder="Input your password here..." required>
                    </div>
                    <div class="mb-6">
                        <img src="{{ asset('assets/img/captcha-contoh.png') }}" alt="">
                    </div>
                    <div class="mb-6l">
                        <button class="flex w-full justify-center items-center p-3 bg-red-500 rounded-lg gap-2">
                            <p class="text-sm font-semibold text-white-50">Sign In</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection