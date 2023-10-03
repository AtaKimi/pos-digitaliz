@extends('layouts.auth')

@section('side-img')
    <img src="{{ asset('assets/img/login-hero.png') }}" class="hidden lg:block w-full" alt="" srcset="">
@endsection

@section('content')
    <div class="lg:px-7 flex flex-col items-center ">
        <img src="{{ asset('assets/img/logo.svg') }}" width="120px" height="110px" alt="Login Hero">
        <div class="py-6">
            <h1 class="font-bold text-3xl text-grey-900">Verify Email</h1>
            <p class="text-base font-medium py-6 text-grey-900">Click the link in the email you received to verify your email address.</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 font-bold text-gray-900 ">
                        Email</label>
                    <input type="email" id="email" name="email"
                        class="border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 px-5"
                        placeholder="test@example.com" disabled>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <button class="flex w-full justify-center items-center p-3 bg-red-500 rounded-lg gap-2">
                        <p class="text-xl font-semibold text-white-50">Send</p>
                    </button>
                </div>
                <div class="text-center">
                    <p class="font-medium text-grey-900">Did not get an email? <span class="text-red-500">Resend</span></p>
                </div>
            </form>
        </div>
    </div>
@endsection
