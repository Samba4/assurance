@if ($paginator->hasPages())

<div class="wm-pagination">
    <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i>&laquo;</a>
        </li>
        @else
        <li><a href="{{$paginator->previousPageUrl()}}" aria-label="Previous"> <i class="wmicon-arrows4"></i>&laquo;</a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li>{{$element}}</li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="active"><a href="#">{{$page}}</a></li>
        @else
        <li><a href="{{$url}}">{{$page}}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" aria-label="Next"> <i class="wmicon-arrows4"></i>&raquo;</a></li>
        @else
        <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i>&raquo;</a></li>
        @endif
    </ul>
</div>
@endif