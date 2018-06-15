@if ($paginator->hasPages())
    {{--<ul class="pagination">--}}
    <nav class="pagination is-rounded" role="navigation" aria-label="pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="pagination-previous " disabled>Previous</button>
        @else
            <a href="{{$paginator->previousPageUrl()}}" rel="prev" class="pagination-previous">Previous</a>
        @endif
        <ul class="pagination-list">

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a href="{{ $url }}" class="pagination-link is-current projectsPag"
                                   aria-label="Page {{ $page }}"
                                   aria-current="page">{{ $page }}</a></li>

                        @else
                            <li><a href="{{ $url }}" class="pagination-link projectsPag"
                                   aria-label="Goto page {{ $page }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination-next" rel="next" href="{{ $paginator->nextPageUrl() }}">Next</a>
        @else
            <button class="pagination-next" disabled>Next</button>
        @endif
        {{--</ul>--}}
    </nav>

@endif
