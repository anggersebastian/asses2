@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link" style="background-color: black; color:white; margin-right: 20px;"><i class="fa fa-chevron-left"></i></span></li>
        @else
            <li class="page-item"><a class="page-link" style="background-color: black; color:white; margin-right: 30px;" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-chevron-left"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        {{-- @foreach ($elements as $element) --}}
            {{-- "Three Dots" Separator --}}
            {{-- @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif --}}

            {{-- Array Of Links --}}
            {{-- @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach --}}

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" style="background-color: black; color:white;" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-chevron-right"></i></a></li>
        @else
            <li class="page-item disabled"><span class="page-link" style="background-color: black; color:white;"><i class="fa fa-chevron-right"></i></span></li>
        @endif
    </ul>
@endif
