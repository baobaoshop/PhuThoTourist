@extends('layout.app') 
@section('content')
<video class="video-background" autoplay muted loop>
    <source src="{{ asset('videos/video_bg_home.mp4') }}" type="video/mp4">
    Trình duyệt của bạn không hỗ trợ video.
</video>
<div class="titlehome">
    <div class="title_container">
        <p class="title_content">Bài viết</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="386" height="106" viewBox="0 0 386 106" fill="none">
            <g filter="url(#filter0_bdi_272_68691)">
              <path d="M380.038 44.0196C382.357 46.9349 382.357 51.0651 380.038 53.9804L347.423 94.9804C345.905 96.8883 343.6 98 341.162 98L44.1071 98C41.6415 98 39.3137 96.8631 37.7978 94.9186L5.83453 53.9186C3.58023 51.027 3.58023 46.973 5.83453 44.0813L37.7978 3.08133C39.3137 1.13685 41.6415 -1.54409e-05 44.1071 -1.53492e-05L341.162 -4.30359e-06C343.6 -4.21294e-06 345.905 1.1117 347.423 3.01963L380.038 44.0196Z" fill="white" fill-opacity="0.7" shape-rendering="crispEdges"/>
              <path d="M379.256 44.6422C381.285 47.1931 381.285 50.807 379.256 53.3578L346.64 94.3578C345.312 96.0273 343.295 97 341.162 97L44.1071 97C41.9497 97 39.9129 96.0052 38.5865 94.3038L6.6232 53.3038C4.65066 50.7736 4.65066 47.2264 6.6232 44.6962L38.5865 3.69616C39.9129 1.99474 41.9497 0.999985 44.1071 0.999985L341.162 0.999996C343.295 0.999996 345.312 1.97274 346.64 3.64217L379.256 44.6422Z" stroke="white" stroke-width="2" shape-rendering="crispEdges"/>
            </g>
            <defs>
              <filter id="filter0_bdi_272_68691" x="0.144043" y="-4" width="386.633" height="110" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feGaussianBlur in="BackgroundImageFix" stdDeviation="2"/>
                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_272_68691"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="effect1_backgroundBlur_272_68691" result="effect2_dropShadow_272_68691"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_272_68691" result="shape"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dx="5" dy="5"/>
                <feGaussianBlur stdDeviation="8"/>
                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="shape" result="effect3_innerShadow_272_68691"/>
              </filter>
            </defs>
          </svg>
    </div>
</div>
<div class="blog_intro">
    <div class="blog_first">
      <div class="blog_left">
        <div class="blog_left_content">
          <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide2">
                    <div class="blog_swiper_img">
                      <img src="{{ asset('images/image_blog2.png') }}" alt="">
                    </div>
                    <div class="blog_swiper_content">
                      <div class="blog_swiper_content_main">
                        <div class="blog_swiper_content_title">Thông báo mời chào giá cạnh tranh cung cấp nước đá chế tác Băng Đăng</div>
                        <div class="blog_swiper_subtitle">THÔNG BÁO MỜI CHÀO GIÁ CẠNH TRANH CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ tổ chức chào giá cạnh tranh lựa chọn đơn vị Cung cấp nước đá để chế tác Băng Đăng tại Công viên Văn hóa Đầm Sen.</div>
                      </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide2">
                  <div class="blog_swiper_img">
                    <img src="{{ asset('images/image_blog2.png') }}" alt="">
                  </div>
                  <div class="blog_swiper_content">
                    <div class="blog_swiper_content_main">
                      <div class="blog_swiper_content_title">Thông báo mời chào giá cạnh tranh cung cấp nước đá chế tác Băng Đăng</div>
                      <div class="blog_swiper_subtitle">THÔNG BÁO MỜI CHÀO GIÁ CẠNH TRANH CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ tổ chức chào giá cạnh tranh lựa chọn đơn vị Cung cấp nước đá để chế tác Băng Đăng tại Công viên Văn hóa Đầm Sen.</div>
                    </div>
                  </div>
              </div>

              <div class="swiper-slide swiper-slide2">
                <div class="blog_swiper_img">
                  <img src="{{ asset('images/image_blog2.png') }}" alt="">
                </div>
                <div class="blog_swiper_content">
                  <div class="blog_swiper_content_main">
                    <div class="blog_swiper_content_title">Thông báo mời chào giá cạnh tranh cung cấp nước đá chế tác Băng Đăng</div>
                    <div class="blog_swiper_subtitle">THÔNG BÁO MỜI CHÀO GIÁ CẠNH TRANH CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ tổ chức chào giá cạnh tranh lựa chọn đơn vị Cung cấp nước đá để chế tác Băng Đăng tại Công viên Văn hóa Đầm Sen.</div>
                  </div>
                </div>
              </div>
                
            </div>
            <!-- Navigation -->
            {{-- <div class="swiper-button-next mySwiper2-button-next"></div> --}}
            {{-- <div class="swiper-button-prev mySwiper2-button-prev"></div> --}}
            <div class="swiper2_navigation">
              <svg class="swiper-button-next mySwiper2-button-next" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <path d="M10 21L18.4 14L10 7" fill="#3376B8"/>
                <path d="M10 21L18.4 14L10 7L10 21Z" stroke="#3376B8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <svg class="swiper-button-prev mySwiper2-button-prev" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <path d="M18 21L9.6 14L18 7" fill="#3376B8"/>
                <path d="M18 21L9.6 14L18 7L18 21Z" stroke="#3376B8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination mySwiper2-pagination"></div>
        </div>
        </div>
      
      </div>
      <div class="blog_right">
        <p class="blog_right_title">Bài mới nhất</p>
        <div class="blog_right_main">

          <div class="blog_right_item">
            <div class="blog_right_item_img">
              <img src="{{ asset('images/image_blog10.png') }}" alt="">
            </div>
            <div class="blog_right_item_content">
              <div class="blog_right_item_content_center">
                <div class="blog_right_item_content_title">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                <div class="blog_right_item_content_status">
                  <span>10k views</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="3" height="4" viewBox="0 0 3 4" fill="none">
                    <circle cx="1.5" cy="2" r="1.5" fill="#858585"/>
                  </svg>
                  <span>20/02/2022</span>
                </div>
              </div>
            </div>
          </div>

          <div class="blog_right_item">
            <div class="blog_right_item_img">
              <img src="{{ asset('images/image_blog11.png') }}" alt="">
            </div>
            <div class="blog_right_item_content">
              <div class="blog_right_item_content_center">
                <div class="blog_right_item_content_title">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                <div class="blog_right_item_content_status">
                  <span>10k views</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="3" height="4" viewBox="0 0 3 4" fill="none">
                    <circle cx="1.5" cy="2" r="1.5" fill="#858585"/>
                  </svg>
                  <span>20/02/2022</span>
                </div>
              </div>
            </div>
          </div>

          <div class="blog_right_item">
            <div class="blog_right_item_img">
              <img src="{{ asset('images/image_blog12.png') }}" alt="">
            </div>
            <div class="blog_right_item_content">
              <div class="blog_right_item_content_center">
                <div class="blog_right_item_content_title">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                <div class="blog_right_item_content_status">
                  <span>10k views</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="3" height="4" viewBox="0 0 3 4" fill="none">
                    <circle cx="1.5" cy="2" r="1.5" fill="#858585"/>
                  </svg>
                  <span>20/02/2022</span>
                </div>
              </div>
            </div>
          </div>

          <div class="blog_right_item">
            <div class="blog_right_item_img">
              <img src="{{ asset('images/image_blog13.png') }}" alt="">
            </div>
            <div class="blog_right_item_content">
              <div class="blog_right_item_content_center">
                <div class="blog_right_item_content_title">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                <div class="blog_right_item_content_status">
                  <span>10k views</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="3" height="4" viewBox="0 0 3 4" fill="none">
                    <circle cx="1.5" cy="2" r="1.5" fill="#858585"/>
                  </svg>
                  <span>20/02/2022</span>
                </div>
              </div>
            </div>
          </div>

          <div class="blog_right_item">
            <div class="blog_right_item_img">
              <img src="{{ asset('images/image_blog14.png') }}" alt="">
            </div>
            <div class="blog_right_item_content">
              <div class="blog_right_item_content_center">
                <div class="blog_right_item_content_title">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                <div class="blog_right_item_content_status">
                  <span>10k views</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="3" height="4" viewBox="0 0 3 4" fill="none">
                    <circle cx="1.5" cy="2" r="1.5" fill="#858585"/>
                  </svg>
                  <span>20/02/2022</span>
                </div>
              </div>
            </div>
          </div>

          <div class="blog_right_item">
            <div class="blog_right_item_img">
              <img src="{{ asset('images/image_blog15.png') }}" alt="">
            </div>
            <div class="blog_right_item_content">
              <div class="blog_right_item_content_center">
                <div class="blog_right_item_content_title">Thông báo đấu giá giữ xe tại CVHH Đầm Sen</div>
                <div class="blog_right_item_content_status">
                  <span>10k views</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="3" height="4" viewBox="0 0 3 4" fill="none">
                    <circle cx="1.5" cy="2" r="1.5" fill="#858585"/>
                  </svg>
                  <span>20/02/2022</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <form action="{{ route('articles.index') }}" method="GET">
    <div class="blog_main">
      <div class="blog_main_left">
        <div class="blog_main_left_logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="" height="" viewBox="0 0 142 89" fill="none">
            <path d="M115.588 44.5C115.588 69.0767 95.6646 89 71.0879 89C46.5112 89 26.5879 69.0767 26.5879 44.5C26.5879 19.9233 46.5112 0 71.0879 0C95.6646 0 115.588 19.9233 115.588 44.5Z" fill="#0054A6"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M71.0879 87C94.56 87 113.588 67.9721 113.588 44.5C113.588 21.0279 94.56 2 71.0879 2C47.6158 2 28.5879 21.0279 28.5879 44.5C28.5879 67.9721 47.6158 87 71.0879 87ZM71.0879 89C95.6646 89 115.588 69.0767 115.588 44.5C115.588 19.9233 95.6646 0 71.0879 0C46.5112 0 26.5879 19.9233 26.5879 44.5C26.5879 69.0767 46.5112 89 71.0879 89Z" fill="white"/>
            <path d="M51.0625 30.0376L1 56.7376L43.8312 43.3876L90 59.5189L140.619 32.8188L97.2312 46.7251L51.0625 30.0376Z" fill="white" stroke="#0054A6" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="blog_main_left_title">Chủ đề bài viết</div>
        
        <ul>
          @foreach ($topics as $topic)
          <li class="blog_main_left_item blog_main_left_item">
            <a href="?topic={{ $topic->id }}">
              {!! $topic->icon !!}
              <span>{{ $topic->name }}</span>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="blog_main_right">
        <div class="blog_main_search">
          <div class="blog_main_search_left">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M17.2959 17.3333L21.2959 21.3333" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M19.2959 11.3333C19.2959 15.7516 15.7142 19.3333 11.2959 19.3333C6.87762 19.3333 3.2959 15.7516 3.2959 11.3333C3.2959 6.91497 6.87762 3.33325 11.2959 3.33325C15.7142 3.33325 19.2959 6.91497 19.2959 11.3333Z" stroke="#0054A6" stroke-width="2"/>
            </svg>
            <input 
              type="text" 
              name="search" 
              placeholder="Tìm kiếm" 
              value="{{ request('search') }}" 
              onkeyup="if(event.keyCode === 13) this.form.submit()">
          </div>
          <div class="blog_main_search_right">
            <input type="date" id="start_date" name="start_date" value="{{ request('start_date', $start_date) }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8" fill="none">
              <path d="M5.51129 3.13807L3.96467 2.01241L1.44455 0.178209C0.910697 -0.20463 0 0.0696425 0 0.618188V4.17802V7.38359C0 7.93213 0.910697 8.20641 1.44455 7.81785L5.51129 4.85799C6.1629 4.38944 6.1629 3.61233 5.51129 3.13807Z" fill="#0054A6"/>
            </svg>
            <input type="date" id="end_date" name="end_date" value="{{ request('end_date', $end_date) }}">
            <div class="blog_main_filter">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 4V20M7 20L3 16M7 20L11 16M17 4V20M17 4L21 8M17 4L13 8" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <button type="submit" name="sort" value="{{ request('sort') == 'asc' ? 'desc' : 'asc' }}">
              {{ request('sort') == 'asc' ? 'Z đến A' : 'A đến Z' }}
            </button>
          </div>
        </div>
        <div class="blog_main_list">

          @foreach ($articles as $article)
          
          <a href="detailblog" class="blog_main_list_item">
            <img src="{{ asset('images/'.$article->image) }}" alt="{{ $article->title }}" class="blog_main_list_item_img">
            <div class="blog_main_list_item_content">
              <div class="blog_main_list_item_content_author">
                <span>{{ $article->author }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                  <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
                </svg>
              </div>
              <div class="blog_main_list_item_content_title">{{ $article->title }}</div>
              <div class="blog_main_list_item_content_label">
                @if ($article->topics->count() > 0)
                  @foreach ($article->topics as $topic)
                    <div class="blog_main_list_item_content_label_item">{{ $topic->name }}</div>
                  @endforeach
                @endif
              </div>
              <div class="blog_main_list_item_content_status">
                <p>{{ $article->views }} lượt xem</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
                  <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
                </svg>
                <p>{{ \Carbon\Carbon::parse($article->date)->format('d/m/Y') }}</p>
              </div>
            </div>
          </a>

          @endforeach

          

        </div>
        <div class="pagination pagination_blog">
            {{ $articles->links('pagination::default2') }}
        </div>
      
        

      </div>
    </div>
  </form>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      const dateStartInput = document.getElementById('start_date');
      const dateEndInput = document.getElementById('end_date');

      // Hàm tạo URL với query parameters
      function updateURL() {
          const dateStart = dateStartInput.value;
          const dateEnd = dateEndInput.value;
          let url = new URL(window.location.href);

          // Cập nhật query parameters
          if (dateStart) {
              url.searchParams.set('start_date', dateStart);
          } else {
              url.searchParams.delete('start_date');
          }

          if (dateEnd) {
              url.searchParams.set('end_date', dateEnd);
          } else {
              url.searchParams.delete('end_date');
          }

          // Điều hướng tới URL mới
          window.location.href = url.toString();
      }

      // Lắng nghe sự thay đổi của các input
      dateStartInput.addEventListener('change', updateURL);
      dateEndInput.addEventListener('change', updateURL);
  });
</script>
@endsection