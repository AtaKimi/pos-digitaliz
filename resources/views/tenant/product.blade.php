@extends('layouts.tenant')

@section('content')

    {{-- Header --}}
    <div class="pb-4">
      <div class="rounded-2xl overflow-hidden shadow-lg bg-white mb-5">
        <div class="p-4">
            <div class="flex items-center">
              <div class="mr-4 bg-red-50 rounded-xl p-5">
                <!-- Icon di sini -->
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                  <path d="M13.625 2.6875H2.6875L2.6875 33.3125H13.625V2.6875ZM33.3125 2.6875H22.375V13.625H33.3125V2.6875ZM33.3125 22.375V33.3125H22.375V22.375H33.3125ZM0.5 2.6875C0.5 1.47938 1.47938 0.5 2.6875 0.5H13.625C14.8331 0.5 15.8125 1.47938 15.8125 2.6875V33.3125C15.8125 34.5206 14.8331 35.5 13.625 35.5H2.6875C1.47938 35.5 0.5 34.5206 0.5 33.3125V2.6875ZM20.1875 2.6875C20.1875 1.47938 21.1669 0.5 22.375 0.5H33.3125C34.5206 0.5 35.5 1.47938 35.5 2.6875V13.625C35.5 14.8331 34.5206 15.8125 33.3125 15.8125H22.375C21.1669 15.8125 20.1875 14.8331 20.1875 13.625V2.6875ZM22.375 20.1875C21.1669 20.1875 20.1875 21.1669 20.1875 22.375V33.3125C20.1875 34.5206 21.1669 35.5 22.375 35.5H33.3125C34.5206 35.5 35.5 34.5206 35.5 33.3125V22.375C35.5 21.1669 34.5206 20.1875 33.3125 20.1875H22.375Z" fill="#F54748"/>
                </svg>
              </div>
              <div>
                <!-- Title di sini -->
                <p class="font-bold text-xl text-gray-900">Product</p>
                <!-- Subtitle di sini -->
                <p class="text-gray-600">Akses mengedit, menambah atau menghapus menu resto kamu</p>
              </div>
            </div>
          </div>
        </div>
          {{-- card 1 --}}
          <div class="flex flex-wrap gap-10 mb-5">
            <div class="max-w-sm w-full lg:max-w-full lg:flex"> 
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://wiratech.co.id/wp-content/uploads/2019/02/bumbu-sate-madura.jpg')" title="Woman holding a mug">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                  <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                      <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                      </svg>
                      Members only
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                  </div>
                  <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="/img/jonathan.jpg" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                      <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                      <p class="text-gray-600">Aug 18</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        
    </div>
@endsection
