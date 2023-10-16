@extends('layouts.tenant')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-start w-full gap-4 p-5 mb-8 rounded-3xl bg-white-50">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="80" height="80" rx="16" fill="#FFEDED" />
                <path
                    d="M40.0001 32.8998C36.0788 32.8998 32.9 36.0787 32.9 39.9999C32.9 43.9212 36.0788 47.1 40.0001 47.1C43.9214 47.1 47.1002 43.9212 47.1002 39.9999C47.1002 36.0787 43.9214 32.8998 40.0001 32.8998ZM35.0875 39.9999C35.0875 37.2868 37.2869 35.0873 40.0001 35.0873C42.7132 35.0873 44.9127 37.2868 44.9127 39.9999C44.9127 42.7131 42.7132 44.9125 40.0001 44.9125C37.2869 44.9125 35.0875 42.7131 35.0875 39.9999Z"
                    fill="#F54748" />
                <path
                    d="M43.9298 25.4386C42.7749 21.5205 37.2251 21.5205 36.0702 25.4386L35.8649 26.1352C35.521 27.302 34.1883 27.854 33.12 27.2721L32.4823 26.9248C28.8951 24.9708 24.9708 28.8952 26.9248 32.4823L27.2721 33.12C27.854 34.1883 27.302 35.521 26.1352 35.8649L25.4386 36.0702C21.5205 37.2251 21.5205 42.7749 25.4386 43.9298L26.1352 44.1351C27.302 44.479 27.854 45.8117 27.2721 46.88L26.9248 47.5177C24.9708 51.1048 28.8951 55.0292 32.4823 53.0752L33.12 52.7279C34.1883 52.146 35.521 52.698 35.8649 53.8648L36.0702 54.5614C37.2251 58.4795 42.7749 58.4795 43.9298 54.5614L44.1351 53.8648C44.479 52.698 45.8117 52.146 46.88 52.7279L47.5177 53.0752C51.1049 55.0292 55.0292 51.1049 53.0752 47.5177L52.7279 46.88C52.146 45.8117 52.698 44.479 53.8648 44.1351L54.5614 43.9298C58.4795 42.7749 58.4795 37.2251 54.5614 36.0702L53.8648 35.8649C52.698 35.521 52.146 34.1883 52.7279 33.12L53.0752 32.4823C55.0292 28.8951 51.1048 24.9708 47.5177 26.9248L46.88 27.2721C45.8117 27.854 44.479 27.302 44.1351 26.1352L43.9298 25.4386ZM38.1685 26.0571C38.7067 24.231 41.2933 24.231 41.8315 26.0571L42.0368 26.7536C42.7747 29.2572 45.6343 30.4416 47.9263 29.1931L48.564 28.8458C50.2359 27.9351 52.0649 29.7641 51.1542 31.436L50.8069 32.0737C49.5584 34.3657 50.7428 37.2253 53.2464 37.9632L53.9429 38.1685C55.769 38.7067 55.769 41.2933 53.9429 41.8315L53.2464 42.0368C50.7428 42.7747 49.5584 45.6343 50.8069 47.9263L51.1542 48.564C52.0649 50.2359 50.2359 52.0649 48.564 51.1542L47.9263 50.8069C45.6343 49.5584 42.7747 50.7428 42.0368 53.2464L41.8315 53.9429C41.2933 55.769 38.7067 55.769 38.1685 53.9429L37.9632 53.2464C37.2253 50.7428 34.3657 49.5584 32.0737 50.8069L31.436 51.1542C29.7641 52.0649 27.9351 50.2359 28.8458 48.564L29.1931 47.9263C30.4416 45.6343 29.2572 42.7747 26.7536 42.0368L26.0571 41.8315C24.231 41.2933 24.231 38.7067 26.0571 38.1685L26.7536 37.9632C29.2572 37.2253 30.4416 34.3657 29.1931 32.0737L28.8458 31.436C27.9351 29.7641 29.7641 27.9351 31.436 28.8458L32.0737 29.1931C34.3657 30.4416 37.2253 29.2572 37.9632 26.7536L38.1685 26.0571Z"
                    fill="#F54748" />
            </svg>

            <div class="flex flex-col justify-center gap-1">
                <h3 class="text-2xl font-bold">Settings</h3>
                <p class="text-base">Akses mengatur profile kamu</p>
            </div>
        </div>
        <div class="flex flex-col p-8 bg-white-50 rounded-3xl">
            <div class="flex w-full gap-5 pb-8 mb-8 border-b-2">
                <div class="">
                    <img src="{{$tenant->user->getFirstMediaUrl('default')}}" alt="" class="w-20 h-20 rounded-full">
                </div>
                <div class="flex flex-col justify-center gap-4">
                    <h4 class="text-2xl">{{$tenant->name}}</h4>
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full p-2 border-2 border-red-500 rounded-lg cursor-pointer">
                        <div class="flex flex-col items-center justify-center">
                            <p class="text-sm text-red-500"><span class="font-semibold">Upload new
                                    photo</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <h3 class="mb-4 text-xl font-semibold">USER INFORMATION</h3>
            <form action="{{route('tenant-setting-update', $tenant->id)}}" method="POST" class="p-5 mb-8 border-2 rounded-2xl">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="name" class="block mb-2 font-semibold">Nama Tenant</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required value="{{ $tenant->name }}">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 font-semibold">User Tenant</label>
                        <input type="text" name="tenant-user" id="tenant-user"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required value="{{ request()->user()->name }}">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 font-semibold">Phone</label>
                        <input type="text" name="phone-number" id="phone-number"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required value="{{ request()->user()->phone_number }}">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 font-semibold">Email Address</label>
                        <input type="text" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required value="{{ request()->user()->email }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 font-semibold">Address</label>
                        <input name="address" id="address" rows="1"
                            class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                            required value="{{ $tenant->address }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 font-semibold">Deskripsi</label>
                        <textarea id="description" name="description" rows="4"
                            class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Detective Store is your one-stop destination for all things related to investigation and detective work.">{{ $tenant->description }}</textarea>
                    </div>
                </div>
                <div class="flex justify-end pt-5">
                    <button type="submit"
                    class="text-white-50 bg-red-500 font-medium rounded-lg text-sm px-12 py-2.5 mr-2 mb-2">Save</button>
                </div>
            </form>
            {{-- <h3 class="mb-4 text-xl font-semibold">Change Password</h3> --}}
            {{-- <form action="" class="p-5 mb-8 border-2 rounded-2xl">
                <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                    <div class="w-full">
                        <label for="brand" class="block mb-2 font-semibold">Current Password</label>
                        <input type="password" name="brand" id="brand"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required="">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 font-semibold">New Password</label>
                        <input type="password"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    <div class="w-full">
                        <label for="brand" class="block mb-2 font-semibold">Confirm Password</label>
                        <input type="password" name="brand" id="brand"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                </div>
            </form> --}}
        </div>
    </div>
@endsection
