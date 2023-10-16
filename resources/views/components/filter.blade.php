<form method="GET">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
    <div class="flex items-center gap-1">
        <input type="search" id="default-search" name="search"
            class="block px-4 py-3 pr-4 text-sm text-gray-900 bg-gray-100 border rounded-lg border-red-200t w-96"
            placeholder="Search">
        <button type="submit" class="w-10 h-10 bg-red-500 border rounded-xl">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="fill-white-50" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
            </div>
        </button>
        <button type="reset" class="w-10 h-10 bg-red-500 border rounded-xl" onclick="this.closest('form').submit()">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="fill-white-50" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
            </div>
        </button>   
    </div>
</form>