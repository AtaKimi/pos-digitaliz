@extends('layouts.auth')

@section('side-img')
    <img src="{{ asset('assets/img/login-hero.png') }}" class="hidden lg:block w-full" alt="" srcset="">
@endsection

@section('content')
    <div class="lg:px-7 flex flex-col items-center ">
        <img src="{{ asset('assets/img/logo.svg') }}" width="120px" height="110px" alt="Login Hero">
        <div class="py-6">
            <h1 class="font-bold text-3xl text-grey-900">Forgot password</h1>
            <p class="text-base font-medium py-6 text-grey-900">Enter your email to receive a password reset link.</p>
            <form action="{{ route('password.email') }}" method="post">
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
                    <img src="{{ asset('assets/img/captcha-contoh.png') }}" alt="">
                </div>
                <div class="mb-6">
                    <button class="flex w-full justify-center items-center p-3 bg-red-500 rounded-lg gap-2" type="submit">
                        <p class="text-xl font-semibold text-white-50">Send</p>
                    </button>
                </div>
                @if (session('status'))
                    <div class="text-center">
                        <p>Email has been sent</p>
                        <p>Did not get an email?
                            <button type="submit">
                                <span class="text-red-500 font-semibold">Resend</span>
                            </button>
                        </p>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
