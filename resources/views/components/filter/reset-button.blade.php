<a href="{{ request()->url() }}" type="button"
    class="w-9 h-9 md:w-10 md:h-10 lg:w-12 lg:h-12 bg-red-500 border rounded-xl flex justify-center items-center
    @if (request()->query() == null) hidden @endif">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="fill-white-50" 
        viewBox="0 0 16 16">
        <path
            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
    </svg>
</a>
