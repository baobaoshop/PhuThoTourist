@if ($paginator->hasPages())
<div class="blog_main_panigation">
    {{-- Nút Previous --}}
    @if ($paginator->onFirstPage())
    <div class="blog_main_panigation_item disabled">
        <a href="javascript:void(0);">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
            <path d="M13.5 15L7.5 10L13.5 5" fill="#A3A3A3"/>
            <path d="M13.5 15L7.5 10L13.5 5L13.5 15Z" stroke="#A3A3A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    @else
    <div class="blog_main_panigation_item">
        <a href="{{ $paginator->previousPageUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
            <path d="M13.5 15L7.5 10L13.5 5" fill="#A3A3A3"/>
            <path d="M13.5 15L7.5 10L13.5 5L13.5 15Z" stroke="#A3A3A3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    @endif

    {{-- Các trang --}}
    <div class="blog_main_panigation_main">
        @foreach ($elements as $element)
            {{-- Dấu ba chấm --}}
            @if (is_string($element))
                <div class="blog_main_panigation_item">
                    <span>{{ $element }}</span>
                </div>
            @endif

            {{-- Mảng các trang --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)
                {{-- Hiển thị trang đầu, cuối, và các trang gần trang hiện tại --}}
                @if ($page == 1 || $page == $paginator->lastPage() || ($page >= $paginator->currentPage() - 1 && $page <= $paginator->currentPage() + 1))
                    @if ($page == $paginator->currentPage())
                        <div class="blog_main_panigation_item blog_main_panigation_item--active">
                            <a href="javascript:void(0);">{{ $page }}</a>
                        </div>
                    @else
                        <div class="blog_main_panigation_item">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </div>
                    @endif
                {{-- Thêm dấu ba chấm khi cần --}}
                @elseif ($page == $paginator->currentPage() - 2 || $page == $paginator->currentPage() + 2)
                    <div class="blog_main_panigation_item">
                        <span>...</span>
                    </div>
                @endif
            @endforeach
        @endif
        @endforeach
    </div>

            
    {{-- Nút Next --}}
    @if ($paginator->hasMorePages())
    <div class="blog_main_panigation_item">
        <a href="{{ $paginator->nextPageUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
            <path d="M7.5 15L13.5 10L7.5 5" fill="#4D4D4D"/>
            <path d="M7.5 15L13.5 10L7.5 5L7.5 15Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    @else
    <div class="blog_main_panigation_item disabled">
        <a href="ascript:void(0);">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
            <path d="M7.5 15L13.5 10L7.5 5" fill="#4D4D4D"/>
            <path d="M7.5 15L13.5 10L7.5 5L7.5 15Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    @endif

</div>
@endif
