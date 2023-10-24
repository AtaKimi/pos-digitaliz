<a href="{{ request()->url()}}" type="button" class="w-12 h-12 bg-red-500 border rounded-xl 
    @if (request()->query() == null)
        hidden
    @endif">
    <div class="flex justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="fill-white-50"
            viewBox="0.5 -1 15 15">
            <path
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
    </div>
</a>