@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())                    
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.first')">
                        <span class="page-link fs-3" aria-hidden="true">&laquo;&laquo;</span>
                        <spasn class="page-link fs-3" aria-hidden="true">&laquo;</spasn>
                        <!-- <span class="page-link fs-3">@lang('pagination.previous')</span> -->
                    </li>
                @else
                    <li class="page-item">                        
                        <a class="page-link fs-3" href="{{ \Request::url() }}" rel="prev" aria-label="@lang('pagination.first')">&laquo;&laquo;</a>
                        <!-- <a class="page-link fs-3" href="{{ \Request::url() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a> -->
                        <!-- <a class="page-link fs-3" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a> -->
                        <a class="page-link fs-3" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                @endif
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages()) 
                     <!-- <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li> -->
                    <li class="page-item">
                        <a class="page-link fs-3" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
                        <a class="page-link fs-3" href="{{ \Request::url().'?page='.$paginator->lastPage() }}" rel="last" aria-label="@lang('pagination.last')">&raquo;&raquo;</a>
                    </li>
                @else
                     <!-- <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>  -->
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.last')">
                        <span class="page-link fs-3" aria-hidden="true">&raquo;</span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    {!! __('Showing') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <!-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link fs-3" aria-hidden="true">&lsaquo;&lsaquo;</span>
                        </li> -->
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.first')">
                            <span class="page-link fs-3" aria-hidden="true">&laquo;&laquo;</span>
                            <span class="page-link fs-3" aria-hidden="true">&laquo;</span>
                        </li>
                    @else
                        <!-- <li class="page-item">
                            <a class="page-link fs-3" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;&lsaquo;</a>
                        </li> -->
                        <li class="page-item">                        
                            <a class="page-link fs-3" href="{{ \Request::url() }}" rel="prev" aria-label="@lang('pagination.first')">&laquo;&laquo;</a>
                            <a class="page-link fs-3" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                        </li>

                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><span class="page-link fs-3">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link fs-3" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <!-- <li class="page-item">
                            <a class="page-link fs-3" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;&rsaquo;</a>
                        </li> -->
                        <li class="page-item">
                            <a class="page-link fs-3" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                            <a class="page-link fs-3" href="{{ \Request::url().'?page='.$paginator->lastPage() }}" rel="last" aria-label="@lang('pagination.last')">&raquo;&raquo;</a>
                        </li>
                    @else
                        <!-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link fs-3" aria-hidden="true">&rsaquo;&rsaquo;</span>
                        </li> -->
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.last')">
                            <span class="page-link fs-3" aria-hidden="true">&raquo;</span>
                            <span class="page-link fs-3" aria-hidden="true">&raquo;&raquo;</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
