@extends('layouts.auth')

@section('side-img')
    <img src="{{ asset('assets/img/login-hero.png') }}" class="hidden lg:block w-full" alt="" srcset="">
@endsection

@section('content')
    <div class="lg:px-7 flex flex-col items-center ">
        <img src="{{ asset('assets/img/logo.svg') }}" width="120px" height="110px" alt="Login Hero">
        <div class="py-6">
            <h1 class="font-bold text-3xl text-grey-900">Reset Password</h1>
            <p class="text-base font-medium py-6 text-grey-900">Enter your new password and type it again to confirm it.</p>
            <form action="{{ route('password.store') }}" method="post" class="flex flex-col gap-6">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="">
                    <input type="email" id="email" name="email"
                        class="hidden border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full py-4 px-5
                       "
                        value="{{$request->get('email')}}">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <label for="password" class="block mb-2 font-bold text-gray-900 ">
                        New Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 px-5"
                        placeholder="Input your password here..." required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <label for="password_confirmation" class="block mb-2 font-bold text-gray-900 ">
                        New Password Confirmation</label>
                    <input type="password_confirmation" id="password_confirmation" name="password_confirmation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 px-5"
                        placeholder="Input your password confirmation here..." required>
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <img src="{{ asset('assets/img/captcha-contoh.png') }}" alt="">
                </div>
                <div class="">
                    <button class="flex w-full justify-center items-center p-3 bg-red-500 rounded-lg gap-2">
                        <p class="text-xl font-semibold text-white-50">Sign In</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
