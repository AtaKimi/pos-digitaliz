@extends('layouts.customer', ['judul' => ' '])

@section('content')
    <div class="flex flex-col items-center justify-center pb-44">
        <h1 class="text-2xl font-semibold pt-3 pb-5">Order Status</h1>
        <div class="flex items-center justify-center w-32 h-32 border border-red-500 rounded-full bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <div class="px-3 py-3 text-xs font-medium text-center text-red-600 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">Waiting . . .</div>
        </div>
        <p class="text-xs text-gray-800 pt-8">Please wait, We will verify your order!</p>
    </div>
@endsection