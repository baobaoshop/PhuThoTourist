@extends('layout.app') 
@section('content')
<video class="video-background" autoplay muted loop>
    <source src="{{ asset('videos/video_bg_home.mp4') }}" type="video/mp4">
    Trình duyệt của bạn không hỗ trợ video.
</video>
<div id="intro">
    <div class="intro_content">
        <div class="intro_content_next text-white">
            <a href="#myswiper"><i class="fa-solid fa-angles-down"></i></a>
        </div>
        <div class="intro_content_top">
            <svg xmlns="http://www.w3.org/2000/svg" width="" height="" viewBox="0 0 142 89" fill="none">
                <path d="M115.588 44.5C115.588 69.0767 95.6646 89 71.0879 89C46.5112 89 26.5879 69.0767 26.5879 44.5C26.5879 19.9233 46.5112 0 71.0879 0C95.6646 0 115.588 19.9233 115.588 44.5Z" fill="#0054A6"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M71.0879 87C94.56 87 113.588 67.9721 113.588 44.5C113.588 21.0279 94.56 2 71.0879 2C47.6158 2 28.5879 21.0279 28.5879 44.5C28.5879 67.9721 47.6158 87 71.0879 87ZM71.0879 89C95.6646 89 115.588 69.0767 115.588 44.5C115.588 19.9233 95.6646 0 71.0879 0C46.5112 0 26.5879 19.9233 26.5879 44.5C26.5879 69.0767 46.5112 89 71.0879 89Z" fill="white"/>
                <path d="M51.0625 30.0376L1 56.7376L43.8312 43.3876L90 59.5189L140.619 32.8188L97.2312 46.7251L51.0625 30.0376Z" fill="white" stroke="#0054A6" stroke-linejoin="round"/>
            </svg>
            <div class="intro_content_top_company_title">
                <div class="intro_content_top_company_name">CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ</div>
                <div class="intro_content_top_company_nickname">PHUTHOTOURIST</div>
            </div>
        </div>
        <div class="intro_content_bottom">
            <div class="intro_content_bottom_title">CÁC ĐƠN VỊ CÙNG HỆ THỐNG PHUTHOTOURIST</div>
            <div class="intro_content_bottom_logogroup">
                <div class="intro_content_bottom_logogroup_item">
                    <img src="{{ asset('images/logo_item1.png') }}" alt="">
                </div>
                <div class="intro_content_bottom_logogroup_item">
                    <img src="{{ asset('images/logo_item2.png') }}" alt="">
                </div>
                <div class="intro_content_bottom_logogroup_item">
                    <img src="{{ asset('images/logo_item3.png') }}" alt="">
                </div>
                <div class="intro_content_bottom_logogroup_item">
                    <img src="{{ asset('images/logo_item4.png') }}" alt="">
                </div>
                <div class="intro_content_bottom_logogroup_item">
                    <img src="{{ asset('images/logo_item5.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myswiper">
    <div class="myswiper_main">
        <div class="myswiper_header">
            <p class="myswiper_header_name">CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ</p>
            <p class="myswiper_header_nickname">PHUTHOTOURIST</p>
            <p class="myswiper_header_subtitle">Ngày thành lập 01/01/2019</p>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/image_blog1.jpeg') }}" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        
    </div>
</div>
<div class="homemain">
  <div class="home_about">
    <div class="home_about_left">
      <p class="home_about_left_subtitle">VỀ CHÚNG TÔI</p>
      <p class="home_about_left_title">Chúng tôi cung cấp dịch vụ du lịch đáp ứng mọi nhu cầu của bạn!</p>
      <div class="home_about_left_part"></div>
      <div class="home_about_left_content">
        <p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Phuthotourist), là một đơn vị thành viên của Saigontourist. Phuthotourist được biết đến với các sản phẩm du lịch nổi tiếng tại TP.HCM (Quận 11) như:</p>
          <ul>
            <li>Công viên Văn hóa Đầm Sen</li>
            <li>Khu du lịch sinh thái Vàm Sát</li>
            <li>Khách sạn Ngọc Lan</li>
            <li>Khách sạn Phú Thọ</li>
            <li>Trung tâm chăm sóc sức khỏe & giải trí Đầm Sen (Damsen Plaza)</li>
            <li>Nhà hàng Thủy Tạ Đầm Sen</li>
            <li>Cà phê Vườn Đá</li>
            <li>Trung tâm Dịch vụ Du lịch Đầm Sen (Damsen Travel)</li>
            <li>Liên kết với Công viên nước Đầm Sen (Đầm Sen Water Park).</li>
          </ul>
      </div>
      <button class="home_about_left_button">Xem chi tiết</button>
    </div>
    <div class="home_about_right">
      <img class="home_about_right_img1" src="{{ asset('images/image_blog2.png') }}" alt="">
      <img class="home_about_right_img2" src="{{ asset('images/image_blog3.png') }}" alt="">
    </div>
  </div>
  <div class="home_blog">
    <div class="home_blog_logo">
      <svg xmlns="http://www.w3.org/2000/svg" width="" height="" viewBox="0 0 142 89" fill="none">
        <path d="M115.588 44.5C115.588 69.0767 95.6646 89 71.0879 89C46.5112 89 26.5879 69.0767 26.5879 44.5C26.5879 19.9233 46.5112 0 71.0879 0C95.6646 0 115.588 19.9233 115.588 44.5Z" fill="#0054A6"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M71.0879 87C94.56 87 113.588 67.9721 113.588 44.5C113.588 21.0279 94.56 2 71.0879 2C47.6158 2 28.5879 21.0279 28.5879 44.5C28.5879 67.9721 47.6158 87 71.0879 87ZM71.0879 89C95.6646 89 115.588 69.0767 115.588 44.5C115.588 19.9233 95.6646 0 71.0879 0C46.5112 0 26.5879 19.9233 26.5879 44.5C26.5879 69.0767 46.5112 89 71.0879 89Z" fill="white"/>
        <path d="M51.0625 30.0376L1 56.7376L43.8312 43.3876L90 59.5189L140.619 32.8188L97.2312 46.7251L51.0625 30.0376Z" fill="white" stroke="#0054A6" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="home_blog_header">
      <p class="home_blog_header_subtitle">CHIA SẺ THÔNG TIN</p>
      <p class="home_blog_header_title">Bài viết mới</p>
      <div class="home_blog_header_part"></div>
      <p class="home_blog_header_subtitlebottom">Hãy cùng chúng tôi chia sẻ những bài viết mới với các thông tin về những sản phẩm du lịch</p>
    </div>
    <div class="home_blog_main">

      <div class="home_blog_main_item">
        <img src="{{ asset('images/image_blog4.png') }}" alt="" class="home_blog_main_item_img">
        <div class="home_blog_main_item_content">
          <div class="home_blog_main_item_content_author">
            <span>Admin </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
              <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
            </svg>
          </div>
          <div class="home_blog_main_item_content_title">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor Fullcolor</div>
          <div class="home_blog_main_item_content_subtitle">Công ty Cổ phần Dịch vụ Du lịch Phú Thọ thông báo đến các nhà thầu tham gia chào hàng cạnh tranh Gói thầu: Cung cấp, lắp đặt 02 màn...</div>
          <div class="home_blog_main_item_content_label">
            <div class="home_blog_main_item_content_label_item">Sự kiện</div>
            <div class="home_blog_main_item_content_label_item">Thông báo</div>
            <div class="home_blog_main_item_content_label_item">Tin tức</div>
          </div>
          <div class="home_blog_main_item_content_status">
            <p>10N lượt xem</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
              <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
            </svg>
            <p>20/02/2022</p>
          </div>

        </div>
      </div>

      <div class="home_blog_main_item">
        <img src="{{ asset('images/image_blog5.png') }}" alt="" class="home_blog_main_item_img">
        <div class="home_blog_main_item_content">
          <div class="home_blog_main_item_content_author">
            <span>Admin</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
              <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
            </svg>
          </div>
          <div class="home_blog_main_item_content_title">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor Fullcolor</div>
          <div class="home_blog_main_item_content_subtitle">Công ty Cổ phần Dịch vụ Du lịch Phú Thọ thông báo đến các nhà thầu tham gia chào hàng cạnh tranh Gói thầu: Cung cấp, lắp đặt 02 màn...</div>
          <div class="home_blog_main_item_content_label">
            <div class="home_blog_main_item_content_label_item">Sự kiện</div>
            <div class="home_blog_main_item_content_label_item">Thông báo</div>
            <div class="home_blog_main_item_content_label_item">Tin tức</div>
          </div>
          <div class="home_blog_main_item_content_status">
            <p>10N lượt xem</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
              <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
            </svg>
            <p>20/02/2022</p>
          </div>

        </div>
      </div>

      <div class="home_blog_main_item">
        <img src="{{ asset('images/image_blog6.png') }}" alt="" class="home_blog_main_item_img">
        <div class="home_blog_main_item_content">
          <div class="home_blog_main_item_content_author">
            <span>Admin</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
              <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
            </svg>
          </div>
          <div class="home_blog_main_item_content_title">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor Fullcolor</div>
          <div class="home_blog_main_item_content_subtitle">Công ty Cổ phần Dịch vụ Du lịch Phú Thọ thông báo đến các nhà thầu tham gia chào hàng cạnh tranh Gói thầu: Cung cấp, lắp đặt 02 màn...</div>
          <div class="home_blog_main_item_content_label">
            <div class="home_blog_main_item_content_label_item">Sự kiện</div>
            <div class="home_blog_main_item_content_label_item">Thông báo</div>
            <div class="home_blog_main_item_content_label_item">Tin tức</div>
          </div>
          <div class="home_blog_main_item_content_status">
            <p>10N lượt xem</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
              <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
            </svg>
            <p>20/02/2022</p>
          </div>

        </div>
      </div>
    </div>
    <div class="home_blog_footer">
      <div class="home_blog_button"> Xem thêm bài viết </div>
    </div>
  </div>
  <div class="home_service">
    <div class="home_service_header">
      <p class="home_service_header_subtitletop">LĨNH VỰC HOẠT ĐỘNG</p>
      <p class="home_service_header_title">Các dịch vụ trọng tâm</p>
      <div class="home_service_header_part"></div>
      <p class="home_service_header_subtitlebottom">3 dịch vụ trọng tâm của Phuthotourist là vui chơi giải trí, nhà hàng – khách sạn, và dịch vụ lữ hành</p>
    </div>
    <div class="home_blog_main">

      <div class="home_blog_main_item">
        <img src="{{ asset('images/image_blog7.png') }}" alt="" class="home_blog_main_item_img">
        <div class="home_blog_main_item_content">
          <div class="home_blog_main_item_content_title">Vui chơi giải trí</div>
          <div class="home_blog_main_item_content_subtitle">Với 2 khu giải trí nổi tiếng TP.HCM là Công viên văn hóa Đầm Sen, và khu du lịch sinh thái Vàm Sát (H.Cần Giờ)...</div>
        </div>
      </div>

      <div class="home_blog_main_item">
        <img src="{{ asset('images/image_blog8.png') }}" alt="" class="home_blog_main_item_img">
        <div class="home_blog_main_item_content">
          <div class="home_blog_main_item_content_title">Nhà hàng – Khách sạn</div>
          <div class="home_blog_main_item_content_subtitle">Với hệ thống khách sạn Phú Thọ và Ngọc Lan đạt chuẩn 3 sao, chuyên tiếp đón các đoàn thể thao....</div>
        </div>
      </div>

      <div class="home_blog_main_item">
        <img src="{{ asset('images/image_blog9.png') }}" alt="" class="home_blog_main_item_img">
        <div class="home_blog_main_item_content">
          <div class="home_blog_main_item_content_title">Dịch vụ Lữ hành</div>
          <div class="home_blog_main_item_content_subtitle">Tổ chức các tour trong và ngoài nước với Trung tâm Dịch vụ du lịch Đầm Sen. Ngoài ra Trung tâm còn thế mạnh là tổ chức...</div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection