@if ($paginator->hasPages())
<nav class="pagination is-rounded" role="navigation" aria-label="pagination">
    @if ($paginator->onFirstPage())
    <a class="pagination-previous is-disabled">Previous</a>
    @else
    <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Previous</a>
    @endif
    <ul class="pagination-list">

        @if($paginator->currentPage() > 3)
        <li><a class="pagination-link" href="{{ $paginator->url(1) }}" aria-label="Goto page 1">1</a></li>
        @endif
        @if($paginator->currentPage() > 4)
        <li><span class="pagination-ellipsis">&hellip;</span></li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <li><a class="pagination-link is-current" aria-label="Page {{ $i }}" aria-current="page">{{ $i }}</a></li>
                @else
                    <li><a class="pagination-link" aria-label="Page {{ $i }}" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li><span class="pagination-ellipsis">&hellip;</span></li>
        @endif

        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li><a class="pagination-next" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
        @endif
        @if ($paginator->onLastPage())
            </ul>
            <a class="pagination-previous is-disabled">Next</a>
        @else
            </ul>
            <a class="pagination-previous" href="{{ $paginator->nextPageUrl() }}">Next</a>
        @endif
    @endif
</nav>
