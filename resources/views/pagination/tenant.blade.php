@if ($paginator->hasPages())
    <nav class="relative flex items-center px-2 py-2 pt-4 place-content-center" role="navigation"
        aria-label="{{ __('Pagination Navigation') }}">
        <p class="absolute left-0 px-2 mr-20 text-gray-700 hidden md:block">
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
        <div class="flex items-center list-none">
            <!-- Previous Button -->
            @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}"
                    class="flex items-center justify-center h-8 px-3 font-medium text-gray-400">
                    First
                </span>
            @else
                <a href="{{ $paginator->url(1) }}" rel="prev" aria-label="{{ __('pagination.previous') }}"
                    class="flex items-center justify-center h-8 px-3 font-medium text-gray-600 hover:text-gray-500">
                    First
                </a>
            @endif
            {{-- Pagination Elements --}}
            @php
                $start = 1;
                $current = $paginator->currentPage();
                $end = $paginator->lastPage();

                if ($current <= $start + 1 && $end >= 5) {
                    $end = $start + 4;
                } elseif ($current >= $end - 1 && $end >= 5) {
                    $start = $end - 4;
                } elseif ($end >= 5) {
                    $start = $current - 2;
                    $end = $current + 2;
                }
            @endphp
            @foreach ($paginator->getUrlRange($start, $end) as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li>
                        <span aria-current="page"
                            class="flex items-center justify-center w-10 h-10 mr-1 bg-red-500 border text-white-50 border-grey-20 hover:text-white-50 rounded-xl">
                            {{ $page }}
                        </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                            <span
                                class="flex items-center justify-center w-10 h-10 mr-1 border text-grey-600 bg-white-50 border-grey-200 hover:bg-red-500 hover:text-white-50 rounded-xl">
                                {{ $page }}
                            </span>
                        </a>
                    </li>
                @endif
            @endforeach


            {{-- Next Page Link --}}
            @if ($paginator->currentPage() != $paginator->lastPage())
                <a href="{{ $paginator->url($paginator->lastPage()) }}" rel="next"
                    class="flex items-center justify-center h-8 px-3 font-medium text-gray-600">
                    Last
                </a>
            @else
                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}"
                    class="flex items-center justify-center h-8 px-3 font-medium text-gray-400">
                    Last
                </span>
            @endif
        </div>
    </nav>
@endif
