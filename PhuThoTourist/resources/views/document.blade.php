@extends('layout.app') 
@section('content')
<video class="video-background" autoplay muted loop>
    <source src="{{ asset('videos/video_bg_home.mp4') }}" type="video/mp4">
    Trình duyệt của bạn không hỗ trợ video.
</video>
<div class="titlehome">
    <div class="title_container">
        <p class="title_content">Tài liệu</p>
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
<div class="doc_intro">
    <div class="doc_intro_grid">
        @foreach($documents_all->take(8) as $index => $document)
            <a href="{{ asset('files/' . $document->url) }}" class="doc_intro_item doc_intro_item_img{{ $index + 1 }}" download>
                <div class="doc_intro_item_main">
                    <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_7753_414)">
                          <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_7753_414">
                            <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                          </clipPath>
                        </defs>
                    </svg>
                    <p>{{ $document->name }}</p>
                </div>
            </a>
        @endforeach
        
    </div>
    <div class="doc_intro_icon">
        <a href="#doc_main">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none">
                <path d="M24.5 12L13 22L1.5 12" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.5 2L13 12L1.5 2" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
        </a>
    </div>
</div>
<div id="doc_main">
    <div class="doc_main">
        <div class="doc_main_top">
            <div class="doc_main_top_left">
                <p>Ngày tạo</p>
                <div class="doc_main_top_left_date">
                    <input type="date" id="date_start" name="date_start" value="{{ request('date_start', $date_start) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8" fill="none">
                        <path d="M5.51129 3.13807L3.96467 2.01241L1.44455 0.178209C0.910697 -0.20463 0 0.0696425 0 0.618188V4.17802V7.38359C0 7.93213 0.910697 8.20641 1.44455 7.81785L5.51129 4.85799C6.1629 4.38944 6.1629 3.61233 5.51129 3.13807Z" fill="#0054A6"/>
                    </svg>
                    <input type="date" id="date_end" name="date_end" value="{{ request('date_end', $date_end) }}">
                </div>
            </div>
            <div class="doc_main_top_right">
                <p>Từ khóa</p>
                <div class="doc_main_top_right_search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.2959 17.3333L21.2959 21.3333" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.2959 11.3333C19.2959 15.7516 15.7142 19.3333 11.2959 19.3333C6.87762 19.3333 3.2959 15.7516 3.2959 11.3333C3.2959 6.91497 6.87762 3.33325 11.2959 3.33325C15.7142 3.33325 19.2959 6.91497 19.2959 11.3333Z" stroke="#0054A6" stroke-width="2"/>
                    </svg>
                    <form method="GET" action="{{ route('document.index') }}">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Tìm kiếm..." 
                        value="{{ request('search') }}"
                        onkeyup="if(event.keyCode === 13) this.form.submit()">
                    </form>
                </div>
                <button id="docFillBtn" class="document_fill" type="button"><i class="fa-solid fa-sliders"></i></button>
            </div>
            
        </div>
        <div class="document_menu" id="document_menu">
            <div class="blog_menu_time">
              <div class="blog_menu_topics_title">Thời gian</div>
              <div class="doc_main_top_left_date">
                <input type="date" id="date_start_mobile" name="date_start" value="{{ request('date_start', $date_start) }}">
                
            </div>
            </div>
        </div>
        <div class="doc_main_table">
            <table>
                <tr class="doc_main_table_header">
                    <td>STT</td>
                    <td>Tài liệu</td>
                    <td>Ngày tạo</td>
                    <td>Tải tài liệu</td>
                </tr>
                @if($documents_10->count() > 0)
                @foreach($documents_10 as $index => $document)
                <tr class="doc_main_table_item">
                    <td>{{ $documents_10->firstItem() + $index}}</td>
                    <td>{{ $document->name }}</td>
                    <td>{{ $document->date }}</td>
                    <td>
                        @if (file_exists(public_path('files/' . $document->url)))
                        <a href="{{ asset('files/' . $document->url) }}" download>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6"/>
                            </svg>
                        </a>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#ccc"/>
                        </svg>
                        @endif
                    </td>
                </tr>
                @endforeach
                @else
                    <p>Không tìm thấy tài liệu nào trong khoảng thời gian này.</p>
                @endif
            </table>
        </div>
        <div class="doc_main_bottom">
            <div class="doc_main_bottom_left">
                <p>Hiển thị </p>
                <div class="doc_main_bottom_left_number">10</div>
                <p>câu trả lời trong mỗi trang</p>
            </div>
            <div class="doc_main_bottom_right">
                
                    {{ $documents_10->links('pagination::default') }}
                
                
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dateStartInput = document.getElementById('date_start');
        const dateEndInput = document.getElementById('date_end');

        // Hàm tạo URL với query parameters
        function updateURL() {
            const dateStart = dateStartInput.value;
            const dateEnd = dateEndInput.value;
            let url = new URL(window.location.href);

            // Cập nhật query parameters
            if (dateStart) {
                url.searchParams.set('date_start', dateStart);
            } else {
                url.searchParams.delete('date_start');
            }

            if (dateEnd) {
                url.searchParams.set('date_end', dateEnd);
            } else {
                url.searchParams.delete('date_end');
            }

            // Điều hướng tới URL mới
            window.location.href = url.toString();
        }

        // Lắng nghe sự thay đổi của các input
        dateStartInput.addEventListener('change', updateURL);
        dateEndInput.addEventListener('change', updateURL);
    });

    document.getElementById('docFillBtn').addEventListener('click', () => {
        document.getElementById('document_menu').style.display = 'block';

        const dateStartInput = document.getElementById('date_start_mobile');
        function updateURL() {
            const dateStart = dateStartInput.value;
            let url = new URL(window.location.href);

            // Cập nhật query parameters
            if (dateStart) {
                url.searchParams.set('date_start', dateStart);
            } else {
                url.searchParams.delete('date_start');
            }
            // Điều hướng tới URL mới
            window.location.href = url.toString();
        }

        // Lắng nghe sự thay đổi của các input
        dateStartInput.addEventListener('change', updateURL);
    });
    
</script>

@endsection