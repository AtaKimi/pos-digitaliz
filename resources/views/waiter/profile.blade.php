@extends('layouts.waiter')

@section('content')
    <div class="flex flex-col p-8 rounded-3xl">
        <div class="flex gap-x-2 mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M5 12H19M5 12L11 18M5 12L11 6" stroke="#F54748" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <p class="text-red-500 font-[700]">Kembali</p>
        </div>
        <div class="flex gap-5 w-full bg-white-50 border-b-2 pb-8 mb-8">
            <div class="">
                <img src="/assets/img/anya-profile.png" alt="" class="w-20 h-20 rounded-full">
            </div>
            <div class="flex flex-col justify-center w-40 gap-2">
                <h4 class="text-2xl">Anya Forger</h4>
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full border-2 border-red-500 rounded-lg cursor-pointer p-2">
                    <div class="flex flex-col items-center justify-center">
                        <p class="text-sm text-red-500"><span class="font-semibold">Upload new
                                photo</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
        </div>
        <h3 class="text-xl font-semibold mb-4">USER INFORMATION</h3>
        <form action="#" class="border-2 rounded-2xl p-5 mb-8">
            <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
                <div class="w-full">
                    <label for="brand" class="block mb-2 font-semibold">Nama Waiter</label>
                    <input type="text" name="brand" id="brand"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Detective Store" required="">
                </div>
                <div class="w-full">
                    <label for="brand" class="block mb-2 font-semibold">Email Address</label>
                    <input type="text" name="brand" id="brand"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="anyaforger@gmail.com" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 font-semibold">Phone</label>
                    <input type="number" name="price" id="price"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="0813373123122" required="">
                </div>
            </div>
        </form>
        <h3 class="text-xl font-semibold mb-4">Change Password</h3>
        <form action="#" class="border-2 rounded-2xl p-5 mb-8">
            <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                <div class="w-full">
                    <label for="brand" class="block mb-2 font-semibold">Current Password</label>
                    <input type="text" name="brand" id="brand"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Jl Lambung Mangkurat No 29" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 font-semibold">New Password</label>
                    <input type="number" name="price" id="price"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Jl Lambung Mangkurat No 29" required="">
                </div>
                <div class="w-full">
                    <label for="brand" class="block mb-2 font-semibold">Confirm Password</label>
                    <input type="text" name="brand" id="brand"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Jl Lambung Mangkurat No 29" required="">
                </div>
            </div>
        </form>
        <button type="button"
            class="text-white-50 bg-red-500 font-medium rounded-lg text-sm px-12 py-2.5 mr-2 mb-2 self-end">Save</button>
    </div>
@endsection
