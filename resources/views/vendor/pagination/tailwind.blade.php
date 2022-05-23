
        @if ($paginator->hasPages())
    <nav role="navigation">
        <ul class="paggination ">
        

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
               
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item " aria-current="page"><a class="page-link active">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="hoverBtn"><svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="32" fill="#F4F5F9"/>
                <path d="M35.129 31.25L31.106 27.227L32.1665 26.1665L38 32L32.1665 37.8335L31.106 36.773L35.129 32.75H26V31.25H35.129Z" fill="#101C5A"/>
                </svg>
                        </a>
                    </li>
               
           
            @endif
        </ul>
    </nav>
@endif


