@props(['bg' => 'bg-red-500'])

<form method="GET">
    <label for="default-search" class="mb-2 font-medium text-gray-900 sr-only">Search</label>
    <div class="flex items-center gap-2">
        <input type="search" id="default-search" name="search"
            class="block p-1.5 sm:p-2 lg:px-4 lg:py-3 text-gray-900 bg-gray-50 border rounded-lg xl:w-80 lg:w-64 sm:w-48 w-32"
            placeholder="Search" value="{{ old('search') }}">
        <button type="submit" class="w-9 h-9 md:w-10 md:h-10 lg:w-12 lg:h-12 {{$bg}} rounded-lg">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-white-50"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </div>
        </button>   
        <x-filter.reset-button bg="{{$bg}}"/>
    </div>
</form>
