@extends('layout.app') 
@section('content')
<video class="video-background" autoplay muted loop>
    <source src="{{ asset('videos/video_bg_home.mp4') }}" type="video/mp4">
    Trình duyệt của bạn không hỗ trợ video.
</video>
<div class="titlehome">
    <div class="title_container">
        <p class="title_content">Tuyển dụng</p>
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
    
    <div class="blog_main">
      <div class="recuit_main_left">
        <div class="blog_main_left_logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="" height="" viewBox="0 0 142 89" fill="none">
            <path d="M115.588 44.5C115.588 69.0767 95.6646 89 71.0879 89C46.5112 89 26.5879 69.0767 26.5879 44.5C26.5879 19.9233 46.5112 0 71.0879 0C95.6646 0 115.588 19.9233 115.588 44.5Z" fill="#0054A6"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M71.0879 87C94.56 87 113.588 67.9721 113.588 44.5C113.588 21.0279 94.56 2 71.0879 2C47.6158 2 28.5879 21.0279 28.5879 44.5C28.5879 67.9721 47.6158 87 71.0879 87ZM71.0879 89C95.6646 89 115.588 69.0767 115.588 44.5C115.588 19.9233 95.6646 0 71.0879 0C46.5112 0 26.5879 19.9233 26.5879 44.5C26.5879 69.0767 46.5112 89 71.0879 89Z" fill="white"/>
            <path d="M51.0625 30.0376L1 56.7376L43.8312 43.3876L90 59.5189L140.619 32.8188L97.2312 46.7251L51.0625 30.0376Z" fill="white" stroke="#0054A6" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="recruit_left">
            <div class="recruit_left_search">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.2959 17.3333L21.2959 21.3333" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.2959 11.3333C19.2959 15.7516 15.7142 19.3333 11.2959 19.3333C6.87762 19.3333 3.2959 15.7516 3.2959 11.3333C3.2959 6.91497 6.87762 3.33325 11.2959 3.33325C15.7142 3.33325 19.2959 6.91497 19.2959 11.3333Z" stroke="#0054A6" stroke-width="2"/>
                </svg>
                <form method="GET" action="{{ route('recruitment.index') }}">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Tìm kiếm công việc" 
                        value="{{ request('search') }}"
                        onkeyup="if(event.keyCode === 13) this.form.submit()">
                </form>
            </div>
            <div class="recruit_left_part"></div>
            <div class="recruit_left_group">
                <div class="recruit_left_group_title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path d="M19.0871 5.21C18.2371 4.27 16.8171 3.8 14.7571 3.8H14.5171V3.76C14.5171 2.08 14.5171 0 10.7571 0H9.23711C5.47711 0 5.47711 2.09 5.47711 3.76V3.81H5.23711C3.16711 3.81 1.75711 4.28 0.907108 5.22C-0.0828924 6.32 -0.0528923 7.8 0.0471077 8.81L0.0571077 8.88L0.134108 9.693C0.149108 9.843 0.229108 9.978 0.355108 10.06C0.595108 10.217 0.996108 10.476 1.23711 10.61C1.37711 10.7 1.52711 10.78 1.67711 10.86C3.38711 11.8 5.26711 12.43 7.17711 12.74C7.26711 13.68 7.67711 14.78 9.86711 14.78C12.0571 14.78 12.4871 13.69 12.5571 12.72C14.5971 12.39 16.5671 11.68 18.3471 10.64C18.4071 10.61 18.4471 10.58 18.4971 10.55C18.8941 10.325 19.3051 10.049 19.6801 9.778C19.7359 9.73758 19.7827 9.68591 19.8173 9.62631C19.8519 9.56671 19.8737 9.50052 19.8811 9.432L19.8971 9.289L19.9471 8.819C19.9571 8.759 19.9571 8.709 19.9671 8.639C20.0471 7.629 20.0271 6.25 19.0871 5.21ZM11.0871 12.06C11.0871 13.12 11.0871 13.28 9.85711 13.28C8.62711 13.28 8.62711 13.09 8.62711 12.07V10.81H11.0871V12.06ZM6.90711 3.8V3.76C6.90711 2.06 6.90711 1.43 9.23711 1.43H10.7571C13.0871 1.43 13.0871 2.07 13.0871 3.76V3.81H6.90711V3.8Z" fill="#0054A6"/>
                        <path d="M18.8689 11.9649C18.9498 11.9265 19.0393 11.91 19.1285 11.9172C19.2178 11.9244 19.3035 11.9549 19.3772 12.0059C19.4508 12.0568 19.5097 12.1262 19.5479 12.2072C19.5862 12.2881 19.6024 12.3777 19.5949 12.4669L19.2349 16.4209C19.0249 18.4209 18.2049 20.4609 13.8049 20.4609H6.18592C1.78592 20.4609 0.965917 18.4209 0.755917 16.4309L0.415918 12.6829C0.408349 12.5946 0.424024 12.5059 0.461384 12.4255C0.498744 12.3451 0.556488 12.2759 0.62888 12.2247C0.701272 12.1736 0.785791 12.1422 0.874038 12.1338C0.962286 12.1255 1.05119 12.1403 1.13192 12.1769C2.27192 12.6929 4.37392 13.6069 5.67292 13.9469C5.75399 13.9689 5.8292 14.0086 5.89317 14.063C5.95713 14.1175 6.00827 14.1854 6.04292 14.2619C6.64992 15.5599 7.96592 16.2509 9.86692 16.2509C11.7489 16.2509 13.0819 15.5329 13.6909 14.2319C13.7256 14.1555 13.7768 14.0876 13.8407 14.0331C13.9047 13.9787 13.9799 13.939 14.0609 13.9169C15.4399 13.5539 17.6789 12.5319 18.8709 11.9649H18.8689Z" fill="#0054A6"/>
                    </svg>
                    <p>Lĩnh vực</p>
                </div>
                <div class="recruit_left_group_main">
                    @foreach ($industries as $industry)
                        <div class="recruit_left_group_main_item {{ request('industry') == $industry->id ? 'recruit_left_group_main_item--active' : '' }}">
                            <a href="{{ route('recruitment.index', request()->has('industry') && request('industry') == $industry->id ? [] : ['industry' => $industry->id]) }}">
                                {{ $industry->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="recruit_left_group">
                <div class="recruit_left_group_title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="19" viewBox="0 0 28 19" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0001 15.909V3.64678C28 2.02198 26.6827 0.704345 25.058 0.704557H17.1582H16.2133C16.2133 0.704557 15.6555 0.702712 14.8728 0.704552H13.695C12.913 0.702712 12.25 0.704625 12.25 0.704625L11.4301 0.704557H2.94158C1.31678 0.704699 -0.000212254 2.02198 2.56586e-08 3.64678V15.9101C0.000212401 17.5348 1.31749 18.8518 2.94222 18.8516H25.0589C26.6837 18.8513 28.0005 17.5338 28.0001 15.909ZM11.1618 13.1804C11.1616 11.3139 9.64837 9.80086 7.7818 9.80107H7.78145C5.91495 9.80128 4.4019 11.3145 4.40211 13.1811V14.1765H11.1618V13.1804ZM7.78172 9.80105C9.00746 9.80105 10.0011 8.8112 10.0011 7.59015C10.0011 6.36911 9.00746 5.37926 7.78172 5.37926C6.55599 5.37926 5.56234 6.36911 5.56234 7.59015C5.56234 8.8112 6.55599 9.80105 7.78172 9.80105ZM14.8845 7.00001H24.4076C24.5647 7.00001 24.7154 6.93758 24.8266 6.82646C24.9377 6.71534 25.0001 6.56462 25.0001 6.40747C25.0001 6.25032 24.9377 6.09961 24.8266 5.98849C24.7154 5.87737 24.5647 5.81494 24.4076 5.81494H14.8845C14.5572 5.81494 14.2919 6.08021 14.2919 6.40747C14.2919 6.73474 14.5572 7.00001 14.8845 7.00001ZM14.8844 10.5H24.4076C24.7348 10.5 25.0001 10.2347 25.0001 9.90746C25.0001 9.58019 24.7348 9.31493 24.4076 9.31493H14.8844C14.5571 9.31493 14.2919 9.58019 14.2919 9.90746C14.2919 10.2347 14.5571 10.5 14.8844 10.5ZM14.8845 14H24.4076C24.5647 14 24.7154 13.9376 24.8266 13.8264C24.9377 13.7153 25.0001 13.5646 25.0001 13.4075C25.0001 13.2503 24.9377 13.0996 24.8266 12.9885C24.7154 12.8774 24.5647 12.8149 24.4076 12.8149H14.8845C14.5572 12.8149 14.2919 13.0802 14.2919 13.4075C14.2919 13.7347 14.5572 14 14.8845 14Z" fill="#0054A6"/>
                    </svg>
                    <p>Hình thức làm việc</p>
                </div>
                <div class="recruit_left_group_main">
                    @foreach ($workTypes as $workType)
                        <div class="recruit_left_group_main_item {{ request('work_type') == $workType->id ? 'recruit_left_group_main_item--active' : '' }}">
                            <a href="{{ route('recruitment.index', request()->has('work_type') && request('work_type') == $workType->id ? [] : ['work_type' => $workType->id]) }}">{{ $workType->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="recruit_left_group">
                <div class="recruit_left_group_title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.7183 8.19024C20.5352 3.2322 15.9944 1 12.0056 1H11.9944C8.01689 1 3.46477 3.22146 2.28167 8.17951C0.963353 13.7171 4.52393 18.4068 7.74647 21.358C8.88869 22.411 10.416 22.9998 12.0056 23C13.538 23 15.0704 22.4527 16.2535 21.358C19.4761 18.4068 23.0366 13.7278 21.7183 8.19024ZM12.0056 13.5668C11.5395 13.5668 11.078 13.4794 10.6474 13.3095C10.2168 13.1396 9.82548 12.8906 9.4959 12.5767C9.16631 12.2628 8.90487 11.8901 8.7265 11.48C8.54813 11.0699 8.45633 10.6303 8.45633 10.1863C8.45633 9.74241 8.54813 9.30282 8.7265 8.89269C8.90487 8.48255 9.16631 8.10988 9.4959 7.79598C9.82548 7.48207 10.2168 7.23306 10.6474 7.06318C11.078 6.89329 11.5395 6.80585 12.0056 6.80585C12.947 6.80585 13.8497 7.16201 14.5154 7.79598C15.181 8.42994 15.5549 9.28978 15.5549 10.1863C15.5549 11.0829 15.181 11.9427 14.5154 12.5767C13.8497 13.2107 12.947 13.5668 12.0056 13.5668Z" fill="#0054A6"/>
                    </svg>
                    <p>Nơi làm việc</p>
                </div>
                <div class="recruit_left_group_main">
                    @foreach ($locations as $location)
                        <div class="recruit_left_group_main_item {{ request('location') == $location->id ? 'recruit_left_group_main_item--active' : '' }}">
                            <a href="{{ route('recruitment.index', request()->has('location') && request('location') == $location->id ? [] : ['location' => $location->id]) }}">{{ $location->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
      </div>
      <div class="blog_main_right">
        <div class="recruiment_menu_mobile">
            <div class="doc_main_top_right">
                <p>Từ khóa</p>
                <div class="doc_main_top_right_search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.2959 17.3333L21.2959 21.3333" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.2959 11.3333C19.2959 15.7516 15.7142 19.3333 11.2959 19.3333C6.87762 19.3333 3.2959 15.7516 3.2959 11.3333C3.2959 6.91497 6.87762 3.33325 11.2959 3.33325C15.7142 3.33325 19.2959 6.91497 19.2959 11.3333Z" stroke="#0054A6" stroke-width="2"/>
                    </svg>
                    <form method="GET" action="{{ route('recruitment.index') }}">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Tìm kiếm..." 
                        value="{{ request('search') }}"
                        onkeyup="if(event.keyCode === 13) this.form.submit()">
                    </form>
                </div>
                <button id="recruimentFillBtn" class="document_fill" type="button"><i class="fa-solid fa-sliders"></i></button>
            </div>
        </div>
        <div class="recruiment_menu" id="recruiment_menu">
            <div class="recruit_left_group">
                <div class="recruit_left_group_title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path d="M19.0871 5.21C18.2371 4.27 16.8171 3.8 14.7571 3.8H14.5171V3.76C14.5171 2.08 14.5171 0 10.7571 0H9.23711C5.47711 0 5.47711 2.09 5.47711 3.76V3.81H5.23711C3.16711 3.81 1.75711 4.28 0.907108 5.22C-0.0828924 6.32 -0.0528923 7.8 0.0471077 8.81L0.0571077 8.88L0.134108 9.693C0.149108 9.843 0.229108 9.978 0.355108 10.06C0.595108 10.217 0.996108 10.476 1.23711 10.61C1.37711 10.7 1.52711 10.78 1.67711 10.86C3.38711 11.8 5.26711 12.43 7.17711 12.74C7.26711 13.68 7.67711 14.78 9.86711 14.78C12.0571 14.78 12.4871 13.69 12.5571 12.72C14.5971 12.39 16.5671 11.68 18.3471 10.64C18.4071 10.61 18.4471 10.58 18.4971 10.55C18.8941 10.325 19.3051 10.049 19.6801 9.778C19.7359 9.73758 19.7827 9.68591 19.8173 9.62631C19.8519 9.56671 19.8737 9.50052 19.8811 9.432L19.8971 9.289L19.9471 8.819C19.9571 8.759 19.9571 8.709 19.9671 8.639C20.0471 7.629 20.0271 6.25 19.0871 5.21ZM11.0871 12.06C11.0871 13.12 11.0871 13.28 9.85711 13.28C8.62711 13.28 8.62711 13.09 8.62711 12.07V10.81H11.0871V12.06ZM6.90711 3.8V3.76C6.90711 2.06 6.90711 1.43 9.23711 1.43H10.7571C13.0871 1.43 13.0871 2.07 13.0871 3.76V3.81H6.90711V3.8Z" fill="#0054A6"/>
                        <path d="M18.8689 11.9649C18.9498 11.9265 19.0393 11.91 19.1285 11.9172C19.2178 11.9244 19.3035 11.9549 19.3772 12.0059C19.4508 12.0568 19.5097 12.1262 19.5479 12.2072C19.5862 12.2881 19.6024 12.3777 19.5949 12.4669L19.2349 16.4209C19.0249 18.4209 18.2049 20.4609 13.8049 20.4609H6.18592C1.78592 20.4609 0.965917 18.4209 0.755917 16.4309L0.415918 12.6829C0.408349 12.5946 0.424024 12.5059 0.461384 12.4255C0.498744 12.3451 0.556488 12.2759 0.62888 12.2247C0.701272 12.1736 0.785791 12.1422 0.874038 12.1338C0.962286 12.1255 1.05119 12.1403 1.13192 12.1769C2.27192 12.6929 4.37392 13.6069 5.67292 13.9469C5.75399 13.9689 5.8292 14.0086 5.89317 14.063C5.95713 14.1175 6.00827 14.1854 6.04292 14.2619C6.64992 15.5599 7.96592 16.2509 9.86692 16.2509C11.7489 16.2509 13.0819 15.5329 13.6909 14.2319C13.7256 14.1555 13.7768 14.0876 13.8407 14.0331C13.9047 13.9787 13.9799 13.939 14.0609 13.9169C15.4399 13.5539 17.6789 12.5319 18.8709 11.9649H18.8689Z" fill="#0054A6"/>
                    </svg>
                    <p>Lĩnh vực</p>
                </div>
                <div class="recruit_left_group_main">
                    @foreach ($industries as $industry)
                        <div class="recruit_left_group_main_item {{ request('industry') == $industry->id ? 'recruit_left_group_main_item--active' : '' }}">
                            <a href="{{ route('recruitment.index', request()->has('industry') && request('industry') == $industry->id ? [] : ['industry' => $industry->id]) }}">
                                {{ $industry->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="recruit_left_group">
                <div class="recruit_left_group_title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="19" viewBox="0 0 28 19" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0001 15.909V3.64678C28 2.02198 26.6827 0.704345 25.058 0.704557H17.1582H16.2133C16.2133 0.704557 15.6555 0.702712 14.8728 0.704552H13.695C12.913 0.702712 12.25 0.704625 12.25 0.704625L11.4301 0.704557H2.94158C1.31678 0.704699 -0.000212254 2.02198 2.56586e-08 3.64678V15.9101C0.000212401 17.5348 1.31749 18.8518 2.94222 18.8516H25.0589C26.6837 18.8513 28.0005 17.5338 28.0001 15.909ZM11.1618 13.1804C11.1616 11.3139 9.64837 9.80086 7.7818 9.80107H7.78145C5.91495 9.80128 4.4019 11.3145 4.40211 13.1811V14.1765H11.1618V13.1804ZM7.78172 9.80105C9.00746 9.80105 10.0011 8.8112 10.0011 7.59015C10.0011 6.36911 9.00746 5.37926 7.78172 5.37926C6.55599 5.37926 5.56234 6.36911 5.56234 7.59015C5.56234 8.8112 6.55599 9.80105 7.78172 9.80105ZM14.8845 7.00001H24.4076C24.5647 7.00001 24.7154 6.93758 24.8266 6.82646C24.9377 6.71534 25.0001 6.56462 25.0001 6.40747C25.0001 6.25032 24.9377 6.09961 24.8266 5.98849C24.7154 5.87737 24.5647 5.81494 24.4076 5.81494H14.8845C14.5572 5.81494 14.2919 6.08021 14.2919 6.40747C14.2919 6.73474 14.5572 7.00001 14.8845 7.00001ZM14.8844 10.5H24.4076C24.7348 10.5 25.0001 10.2347 25.0001 9.90746C25.0001 9.58019 24.7348 9.31493 24.4076 9.31493H14.8844C14.5571 9.31493 14.2919 9.58019 14.2919 9.90746C14.2919 10.2347 14.5571 10.5 14.8844 10.5ZM14.8845 14H24.4076C24.5647 14 24.7154 13.9376 24.8266 13.8264C24.9377 13.7153 25.0001 13.5646 25.0001 13.4075C25.0001 13.2503 24.9377 13.0996 24.8266 12.9885C24.7154 12.8774 24.5647 12.8149 24.4076 12.8149H14.8845C14.5572 12.8149 14.2919 13.0802 14.2919 13.4075C14.2919 13.7347 14.5572 14 14.8845 14Z" fill="#0054A6"/>
                    </svg>
                    <p>Hình thức làm việc</p>
                </div>
                <div class="recruit_left_group_main">
                    @foreach ($workTypes as $workType)
                        <div class="recruit_left_group_main_item {{ request('work_type') == $workType->id ? 'recruit_left_group_main_item--active' : '' }}">
                            <a href="{{ route('recruitment.index', request()->has('work_type') && request('work_type') == $workType->id ? [] : ['work_type' => $workType->id]) }}">{{ $workType->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="recruit_left_group">
                <div class="recruit_left_group_title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.7183 8.19024C20.5352 3.2322 15.9944 1 12.0056 1H11.9944C8.01689 1 3.46477 3.22146 2.28167 8.17951C0.963353 13.7171 4.52393 18.4068 7.74647 21.358C8.88869 22.411 10.416 22.9998 12.0056 23C13.538 23 15.0704 22.4527 16.2535 21.358C19.4761 18.4068 23.0366 13.7278 21.7183 8.19024ZM12.0056 13.5668C11.5395 13.5668 11.078 13.4794 10.6474 13.3095C10.2168 13.1396 9.82548 12.8906 9.4959 12.5767C9.16631 12.2628 8.90487 11.8901 8.7265 11.48C8.54813 11.0699 8.45633 10.6303 8.45633 10.1863C8.45633 9.74241 8.54813 9.30282 8.7265 8.89269C8.90487 8.48255 9.16631 8.10988 9.4959 7.79598C9.82548 7.48207 10.2168 7.23306 10.6474 7.06318C11.078 6.89329 11.5395 6.80585 12.0056 6.80585C12.947 6.80585 13.8497 7.16201 14.5154 7.79598C15.181 8.42994 15.5549 9.28978 15.5549 10.1863C15.5549 11.0829 15.181 11.9427 14.5154 12.5767C13.8497 13.2107 12.947 13.5668 12.0056 13.5668Z" fill="#0054A6"/>
                    </svg>
                    <p>Nơi làm việc</p>
                </div>
                <div class="recruit_left_group_main">
                    @foreach ($locations as $location)
                        <div class="recruit_left_group_main_item {{ request('location') == $location->id ? 'recruit_left_group_main_item--active' : '' }}">
                            <a href="{{ route('recruitment.index', request()->has('location') && request('location') == $location->id ? [] : ['location' => $location->id]) }}">{{ $location->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="recruit_main">

            @foreach($jobs as $job)

            <div class="recruit_main_item">
                <div class="recruit_main_item_top">
                    <img src="{{ asset('images/img_job.png') }}" alt="">
                    <div class="recruit_main_item_top_right">
                        <div class="recruit_main_item_top_right_title">{{ $job->title }}</div>
                        <div class="recruit_main_item_top_right_sub">{{ $job->work_type->name }}</div>
                        <div class="recruit_main_item_top_status">
                            <div class="recruit_main_item_top_status_left">
                                <div class="recruit_main_item_top_right_location">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.4789 5.45988C13.6902 2.15451 10.6629 0.666382 8.00377 0.666382H7.99625C5.3446 0.666382 2.30986 2.14736 1.52112 5.45272C0.642246 9.14443 3.01596 12.2709 5.16432 14.2384C5.92581 14.9404 6.94401 15.3329 8.00377 15.333C9.02536 15.333 10.047 14.9682 10.8357 14.2384C12.9841 12.2709 15.3578 9.15159 14.4789 5.45988ZM8.00377 9.04427C7.69303 9.04427 7.38534 8.98598 7.09826 8.87272C6.81118 8.75946 6.55033 8.59346 6.33061 8.38419C6.11089 8.17492 5.93659 7.92647 5.81768 7.65305C5.69877 7.37962 5.63756 7.08656 5.63756 6.79061C5.63756 6.49466 5.69877 6.2016 5.81768 5.92817C5.93659 5.65475 6.11089 5.4063 6.33061 5.19703C6.55033 4.98776 6.81118 4.82176 7.09826 4.7085C7.38534 4.59524 7.69303 4.53695 8.00377 4.53695C8.63132 4.53695 9.23317 4.77439 9.67692 5.19703C10.1207 5.61968 10.37 6.1929 10.37 6.79061C10.37 7.38832 10.1207 7.96154 9.67692 8.38419C9.23317 8.80683 8.63132 9.04427 8.00377 9.04427Z" fill="#A3A3A3"/>
                                    </svg>
                                    <p>{{ $job->location->name }}</p>
                                </div>
                                <div class="recruit_main_item_top_right_time">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M8.00001 1.33337C4.32668 1.33337 1.33334 4.32671 1.33334 8.00004C1.33334 11.6734 4.32668 14.6667 8.00001 14.6667C11.6733 14.6667 14.6667 11.6734 14.6667 8.00004C14.6667 4.32671 11.6733 1.33337 8.00001 1.33337ZM10.9 10.38C10.8666 10.4369 10.8223 10.4865 10.7696 10.526C10.7169 10.5655 10.6568 10.5942 10.5929 10.6103C10.529 10.6264 10.4626 10.6297 10.3974 10.6199C10.3323 10.6102 10.2697 10.5875 10.2133 10.5534L8.14668 9.32004C7.63334 9.01337 7.25334 8.34004 7.25334 7.74671V5.01337C7.25334 4.74004 7.48001 4.51337 7.75334 4.51337C8.02668 4.51337 8.25334 4.74004 8.25334 5.01337V7.74671C8.25334 7.98671 8.45334 8.34004 8.66001 8.46004L10.7267 9.69337C10.9667 9.83337 11.0467 10.14 10.9 10.38Z" fill="#A3A3A3"/>
                                    </svg>
                                    <p>{{ \Carbon\Carbon::parse($job->date)->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div style="display: flex; align-items:center"><div class="recruit_main_item_top_status_right @if (\Carbon\Carbon::parse($job->date_expired)->isPast()) status_danger @else status_success @endif">@if (\Carbon\Carbon::parse($job->date_expired)->isPast()) Đã hết hạn @else Đang tuyển @endif </div></div>
                        </div>
                    </div>
                </div>
                <div class="recruit_main_item_mid">
                    <div class="recruit_main_item_mid_title">Mô tả công việc:</div>
                    <div class="recruit_main_item_mid_content">Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...</div>
                </div>
                <a href="{{ route('job.show', ['id' => $job->id]) }}" class="recruit_main_item_button ">Xem chi tiết</a>
            </div>

            @endforeach

            
            
        </div>
        {{ $jobs->links() }}
      </div>
    </div>
</div>
<script>
    document.querySelectorAll('.recruit_left_group_main_item a').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault(); 
        window.location.href = this.href; 
    });

    document.getElementById('recruimentFillBtn').addEventListener('click', () => {
        document.getElementById('recruiment_menu').style.display = 'block';
    });
});

</script>
@endsection