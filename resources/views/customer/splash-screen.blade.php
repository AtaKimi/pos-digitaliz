@extends('layouts.app-customer')

@section('file-header')
@endsection

@section('content')
    <div class="bg-red-500 rounded-xl min-h-screen">
        <div class="flex items-center justify-center bg-[url('/public/assets/img/bg-sc-red.png')] bg-center h-screen bg-cover bg-no-repeat">
            <div>
                <img src="{{ asset('assets/img/logo-sc.png') }}" class="opacity-100" alt="">
            </div>
        </div>
    </div>
@endsection

@section('file-footer')
@endsection
