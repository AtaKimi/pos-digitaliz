@if ($paginator->hasPages())

    <nav class="flex place-content-center items-center pt-4 py-2 px-2" role="navigation" aria-label="{{ __('Pagination Navigation') }}">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-white-50 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-white-50 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>
        <p class="absolute left-0 text-xs text-gray-700 mr-20 px-2">
            {!! __('Menampilkan') !!}
            @if ($paginator->firstItem())
                <span class="font-semibold text-gray-900">{{ $paginator->firstItem() }}</span>
                {!! __('-') !!}
                <span class="font-semibold text-gray-900">{{ $paginator->lastItem() }}</span>
            @else
                {{ $paginator->count() }}
            @endif 
            {!! __('dari') !!}
            <span class="font-semibold text-gray-900">{{ $paginator->total() }}</span>
            {!! __('results') !!}
        </p>
        <!-- Buttons -->
        <div class="flex ml-10">
            <!-- Previous Button -->
            @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}"
                    class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-400">
                    Prev
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="{{ __('pagination.previous') }}"
                    class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-600 hover:text-gray-500">
                    Prev
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span aria-disabled="true">
                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    <ul class="inline-flex -space-x-px text-xs">
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li>
                                    <span aria-current="page"
                                        class="flex items-center justify-center px-3 mr-1 h-8 text-white-50 bg-red-500 border border-grey-20 hover:text-white-50 rounded-xl">
                                        {{ $page }}
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        <span class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-red-500 hover:text-white-50 rounded-xl">
                                            {{ $page }}
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-600">
                Next
                </a>
            @else
                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-400">
                        Next
                </span>
            @endif
        </div>
    </nav>
@endif
