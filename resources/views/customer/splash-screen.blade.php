@extends('layouts.app-customer')

@section('file-header')
@endsection

@section('content')
    <div class="bg-red-500 p-2">
        <div class="flex rounded-xl items-center justify-center bg-[url('/public/assets/img/bg-sc-red.png')] bg-center min-h-screen bg-cover bg-no-repeat">
            <div>
                <img src="{{ asset('assets/img/logo-sc.png') }}" class="" alt="">
            </div>
        </div>
    </div>
@endsection

@section('file-footer')
@endsection
