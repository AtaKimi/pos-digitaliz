@extends('layouts.waiter')

@section('content')
    <div class="flex flex-col p-8 rounded-3xl">
        {{-- <div class="flex gap-x-2 mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M5 12H19M5 12L11 18M5 12L11 6" stroke="#F54748" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <p class="text-red-500 font-[700]">Kembali</p>
        </div> --}}
        <form action="{{ route('waiter-profile-update-photo', $tenant->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-profile-image :data="$user" />
        </form>
        <h3 class="text-xl font-semibold mb-4">USER INFORMATION</h3>
        <x-card class="mb-5">
            <form method="POST" action="{{ route('waiter-profile-update', $tenant->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-8 sm:grid-cols-1 sm:gap-6">
                    <div>
                        <x-input-label for="name" value="{{ __('Nama Waiter') }}" />
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                            :value="$user->name" required autofocus />
                        <x-input-error for="name" class="mt-2" />

                    </div>
                    <div>
                        <x-input-label for="email" value="{{ __('Email Address') }}" />
                        <x-text-input id="email" class="block w-full mt-1 bg-grey-200"  name="email"
                            :value="$user->email" required autofocus disabled/>
                    </div>
                    <div>
                        <x-input-label for="phone-number" value="{{ __('Phone Number') }}" />
                        <x-text-input id="phone-number" class="block w-full mt-1" type="text" name="phone_number"
                            :value="$user->phone_number" required autofocus />
                    </div>
                </div>
                <div class="flex justify-end">
                    <x-primary-button class="mb-2">{{ __('Save') }}</x-primary-button>
                </div>
            </form>
        </x-card>

        <x-card>
            <x-change-password :tenant="$tenant" />
        </x-card>
    @endsection
