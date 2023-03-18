<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-center mx-3">
    <span class="text-center sm:block mx-3 w-24 py-1 bg-deep-sky hover:bg-gray-700 font-pixel rounded text-white shadow-in-semi-sm shadow-white hover:shadow-semi-sm hover:shadow-bright-sun">
        @if ($paginator->onFirstPage())
            <span class="px-4 py-4" aria-disabled="true" aria-label="{{ __('Previous') }}">
                <span aria-hidden="true">{{ ('Previous') }}</span>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-2 py-1" rel="prev" aria-label="{{ ('Previous') }}">{{('Previous') }}</a>
        @endif
    </span>

    <span class="text-center sm:block mx-3 w-24  py-1 bg-deep-sky hover:bg-gray-700 font-pixel rounded border-gray-300  text-white shadow-in-semi-sm shadow-white hover:shadow-semi-sm hover:shadow-bright-sun">
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-4" rel="next" aria-label="{{ ('next') }}">{{ ('Next') }}</a>
        @else
            <span class="" aria-disabled="true" aria-label="{{ ('Next') }}">
                <span aria-hidden="true">{{ ('Next') }}</span>
            </span>
        @endif
    </span>
</nav>
