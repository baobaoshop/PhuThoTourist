@extends('layout.app') 
@section('content')
<video class="video-background" autoplay muted loop>
    <source src="{{ asset('videos/video_bg_home.mp4') }}" type="video/mp4">
    Trình duyệt của bạn không hỗ trợ video.
</video>
<div class="titlehome">
    
</div>

<div class="deblog">
    <div class="deblog_top">
        <div class="deblog_title">Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022</div>
        <div class="deblog_subtitle">by tuyendung in on Tháng Năm 21, 2020</div>
    </div>
    <div class="deblog_main">
        <img src="{{ asset('images/image_blog2.png') }}" alt="">
        <div class="deblog_main_content">
            <p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p>
            <ul>
                <li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li>
                <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li>
                <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li>
                <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li>
                <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li>
            </ul>
            <p>Kết quả lựa chọn đơn vị:</p>
            <ul>
                <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05,  Quận Phú Nhuận, TP.HCM)</li>
                <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>
                <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>
                <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li>
            </ul>
            <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022.
                Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai.
                Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p>
                <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ.
                    Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.Trân trọng.
                    Chi tiết xem trong văn bản đính kèm</p>
        </div>

        <iframe src="{{ asset('files/file1.pdf') }}" width="60%" height="600px"></iframe>


    </div>

    <div class="deblog_bottom">
        <div class="deblog_bottom_title">Bài viết liên quan</div>
        <div class="deblog_bottom_grid">

            <a href="detailblog" class="blog_main_list_item">
                <img src="{{ asset('images/image_blog10.png') }}" alt="" class="blog_main_list_item_img">
                <div class="blog_main_list_item_content">
                  <div class="blog_main_list_item_content_author">
                    <span>Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                      <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
                    </svg>
                  </div>
                  <div class="blog_main_list_item_content_title">Thông báo: đấu giá giữ xe tại CVHH Đầm Sen</div>
                  <div class="blog_main_list_item_content_label">
                    <div class="blog_main_list_item_content_label_item">Sự kiện</div>
                    <div class="blog_main_list_item_content_label_item">Thông báo</div>
                    <div class="blog_main_list_item_content_label_item">Tin tức</div>
                  </div>
                  <div class="blog_main_list_item_content_status">
                    <p>10N lượt xem</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
                      <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
                    </svg>
                    <p>20/02/2022</p>
                  </div>
                </div>
              </a>

              <a href="detailblog" class="blog_main_list_item">
                <img src="{{ asset('images/image_blog9.png') }}" alt="" class="blog_main_list_item_img">
                <div class="blog_main_list_item_content">
                  <div class="blog_main_list_item_content_author">
                    <span>Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                      <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
                    </svg>
                  </div>
                  <div class="blog_main_list_item_content_title">Thông báo: đấu giá giữ xe tại CVHH Đầm Sen</div>
                  <div class="blog_main_list_item_content_label">
                    <div class="blog_main_list_item_content_label_item">Sự kiện</div>
                    <div class="blog_main_list_item_content_label_item">Thông báo</div>
                    <div class="blog_main_list_item_content_label_item">Tin tức</div>
                  </div>
                  <div class="blog_main_list_item_content_status">
                    <p>10N lượt xem</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
                      <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
                    </svg>
                    <p>20/02/2022</p>
                  </div>
                </div>
              </a>

              <a href="detailblog" class="blog_main_list_item">
                <img src="{{ asset('images/image_blog8.png') }}" alt="" class="blog_main_list_item_img">
                <div class="blog_main_list_item_content">
                  <div class="blog_main_list_item_content_author">
                    <span>Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                      <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
                    </svg>
                  </div>
                  <div class="blog_main_list_item_content_title">Thông báo: đấu giá giữ xe tại CVHH Đầm Sen</div>
                  <div class="blog_main_list_item_content_label">
                    <div class="blog_main_list_item_content_label_item">Sự kiện</div>
                    <div class="blog_main_list_item_content_label_item">Thông báo</div>
                    <div class="blog_main_list_item_content_label_item">Tin tức</div>
                  </div>
                  <div class="blog_main_list_item_content_status">
                    <p>10N lượt xem</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
                      <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
                    </svg>
                    <p>20/02/2022</p>
                  </div>
                </div>
              </a>

              <a href="detailblog" class="blog_main_list_item">
                <img src="{{ asset('images/image_blog7.png') }}" alt="" class="blog_main_list_item_img">
                <div class="blog_main_list_item_content">
                  <div class="blog_main_list_item_content_author">
                    <span>Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                      <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
                    </svg>
                  </div>
                  <div class="blog_main_list_item_content_title">Thông báo: đấu giá giữ xe tại CVHH Đầm Sen</div>
                  <div class="blog_main_list_item_content_label">
                    <div class="blog_main_list_item_content_label_item">Sự kiện</div>
                    <div class="blog_main_list_item_content_label_item">Thông báo</div>
                    <div class="blog_main_list_item_content_label_item">Tin tức</div>
                  </div>
                  <div class="blog_main_list_item_content_status">
                    <p>10N lượt xem</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
                      <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
                    </svg>
                    <p>20/02/2022</p>
                  </div>
                </div>
              </a>

        </div>
    </div>
</div>

@endsection