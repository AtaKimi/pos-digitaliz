    <div class="overflow-x-auto">
        <table class="w-full text-gray-700 mb-5 text-center text-xs sm:text-sm md:text-md lg:text-base">
            <thead class=" text-gray-900 uppercase bg-gray-50 border-b">
                <tr>
                    {{ $header }}
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
