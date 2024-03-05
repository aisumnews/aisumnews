@if ($paginator->hasPages())
<nav class="pagination is-rounded" role="navigation" aria-label="pagination">
    @if ($paginator->onFirstPage())
    <a class="pagination-previous is-disabled">Prev</a>
    @else
    <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Prev</a>
    @endif

    @if ($paginator->onLastPage())
    <a class="pagination-previous is-disabled">Next</a>
    @else
    <a class="pagination-previous" href="{{ $paginator->nextPageUrl() }}">Next</a>
    @endif
    @endif
</nav>