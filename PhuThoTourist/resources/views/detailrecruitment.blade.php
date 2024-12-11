@extends('layout.app') 
@section('content')
<video class="video-background" autoplay muted loop>
    <source src="{{ asset('videos/video_bg_home.mp4') }}" type="video/mp4">
    Trình duyệt của bạn không hỗ trợ video.
</video>
<div class="titlehome">
    
</div>

<!-- Thông báo thành công -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Thông báo lỗi -->
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>Apply thất bại</li>
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



<div class="dejob">
    <div class="dejob_top">
        <div class="dejob_left_top">
            <img src="{{ asset('images/img_job.png') }}" alt="">
            <div class="dejob_left_main">
                <div class="dejob_left_main_title">{{ $job->title }}</div>
                <div class="dejob_left_main_subtitle">{{ $job->work_type->name }}</div>
                <div class="dejob_left_main_status">
                    <div class="dejob_left_main_status_item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21.7183 8.19024C20.5352 3.2322 15.9944 1 12.0056 1H11.9944C8.01689 1 3.46477 3.22146 2.28167 8.17951C0.963353 13.7171 4.52393 18.4068 7.74647 21.358C8.88869 22.411 10.416 22.9998 12.0056 23C13.538 23 15.0704 22.4527 16.2535 21.358C19.4761 18.4068 23.0366 13.7278 21.7183 8.19024ZM12.0056 13.5668C11.5395 13.5668 11.078 13.4794 10.6474 13.3095C10.2168 13.1396 9.82548 12.8906 9.4959 12.5767C9.16631 12.2628 8.90487 11.8901 8.7265 11.48C8.54813 11.0699 8.45633 10.6303 8.45633 10.1863C8.45633 9.74241 8.54813 9.30282 8.7265 8.89269C8.90487 8.48255 9.16631 8.10988 9.4959 7.79598C9.82548 7.48207 10.2168 7.23306 10.6474 7.06318C11.078 6.89329 11.5395 6.80585 12.0056 6.80585C12.947 6.80585 13.8497 7.16201 14.5154 7.79598C15.181 8.42994 15.5549 9.28978 15.5549 10.1863C15.5549 11.0829 15.181 11.9427 14.5154 12.5767C13.8497 13.2107 12.947 13.5668 12.0056 13.5668Z" fill="#A3A3A3"/>
                        </svg>
                        <p>{{ $job->location->name }}</p>
                    </div>
                    <div class="dejob_left_main_status_item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.35 15.57C16.2999 15.6552 16.2334 15.7296 16.1544 15.7889C16.0753 15.8482 15.9852 15.8912 15.8894 15.9154C15.7935 15.9396 15.6939 15.9445 15.5961 15.9299C15.4984 15.9152 15.4045 15.8812 15.32 15.83L12.22 13.98C11.45 13.52 10.88 12.51 10.88 11.62V7.52C10.88 7.11 11.22 6.77 11.63 6.77C12.04 6.77 12.38 7.11 12.38 7.52V11.62C12.38 11.98 12.68 12.51 12.99 12.69L16.09 14.54C16.45 14.75 16.57 15.21 16.35 15.57Z" fill="#A3A3A3"/>
                        </svg>
                        <p>{{ \Carbon\Carbon::parse($job->date)->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="dejob_right">
            <div class="dejob_right_status @if (\Carbon\Carbon::parse($job->date_expired)->isPast()) status_danger @else status_success @endif">@if (\Carbon\Carbon::parse($job->date_expired)->isPast()) Đã hết hạn @else Đang tuyển @endif </div>
        </div>
    </div>
    <div class="dejob_img">
        <img src="{{ $job->image ? asset('images/' . $job->image) : asset('images/img_job2.jpeg') }}" alt="">
    </div>
    <div class="dejob_main">
        <div class="dejob_main_title">Chi tiết tin tuyển dụng</div>
        <table class="dejob_table">
            <tr>
                <th>Vị trí</td>
                <td>{{ $job->title }}</td>
            </tr>
            <tr>
                <th>Số lượng</td>
                <td>{{ $job->number }}</td>
            </tr>
            <tr>
                <th>Nơi làm việc</td>
                <td>{{ $job->location->name }}</td>
            </tr>
            <tr>
                <th>Địa chỉ làm việc</td>
                <td>{{ $job->location->address }}</td>
            </tr>
            <tr>
                <th>Mô tả công việc</td>
                <td>
                    {!! nl2br(e($job->description)) !!}
                </td>
            </tr>
            <tr>
                <th>Ngày làm việc</td>
                <td>...</td>
            </tr>
            <tr>
                <th>Giờ làm việc</td>
                <td>{{ $job->working_hours }}</td>
            </tr>
            <tr>
                <th>Quyền lợi</td>
                <td>
                    {!! nl2br(e($job->benefits)) !!}
                </td>
            </tr>
            <tr>
                <th>Yêu cầu</td>
                <td>{!! nl2br(e($job->requirements)) !!}</td>
            </tr>
            <tr>
                <th>Độ tuổi</td>
                <td>{{ $job->req_age }}</td>
            </tr>
            <tr>
                <th>Trình độ</td>
                <td>{{ $job->eduLevel->name }}</td>
            </tr>
            <tr>
                <th>Hồ sơ gồm</td>
                <td>
                    {!! nl2br(e($job->apply_docs)) !!}
                </td>
            </tr>
        </table>
        <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Bảo vệ form khỏi CSRF -->
            <div class="dejob_main_title">Chi tiết tin tuyển dụng</div>
            <input type="number" name="job_id" value="{{ $job->id }}" style="display: none">
            <div class="dejob_form">
                <div class="dejob_form_top">
                    <div class="dejob_left">
                        <label for="">Họ tên</label>
                        <input type="text" name="name" placeholder="Nguyễn Văn A" required>
                        <label for="">Năm sinh</label>
                        <input type="date" name="dob" required 
                            max="{{ \Carbon\Carbon::today()->toDateString() }}" 
                            min="1900-01-01">
                        <label for="">Nơi ở hiện nay</label>
                        <input type="text" name="current_address" placeholder="123 Âu Cơ, Phường 9, Tân Bình, TP HCM" required>
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Nguyenvana@gmail.com" required>
                        <label for="">Trình độ</label>
                        <input type="text" name="education_level" placeholder="Đại học" required>
                        <label for="">Bạn có sẵn sàng đi công tác dài ngày</label>
                        <div class="dejob_form_radio_inline">
                            <div class="dejob_radiobox">
                                <input type="radio" id="group11" name="willing_to_travel" value="Có" required> 
                                <label for="group11">Có</label>
                            </div>
                            <div class="dejob_radiobox">
                                <input type="radio" id="group12" name="willing_to_travel" value="Tùy thời điểm"> 
                                <label for="group12">Tùy thời điểm</label>
                            </div>
                            <div class="dejob_radiobox">
                                <input type="radio" id="group13" name="willing_to_travel" value="Không"> 
                                <label for="group13">Không</label>
                            </div>
                        </div>
                    </div>
                    <div class="dejob_right">
                        <label for="">Giới tính</label>
                        <div class="dejob_form_radio_inline">
                            <div class="dejob_radiobox">
                                <input type="radio" id="group21" name="gender" value="Nam" required> 
                                <label for="group21">Nam</label>
                            </div>
                            <div class="dejob_radiobox">
                                <input type="radio" id="group22" name="gender" value="Nữ"> 
                                <label for="group22">Nữ</label>
                            </div>
                        </div>
                        <label for="">Nơi sinh</label>
                        <input type="text" name="birth_place" placeholder="Phường 6, Quận Tân Bình, TP HCM">
                        <label for="">Điện thoại</label>
                        <input type="text" name="phone" placeholder="0123456789" required>
                        <label for="">Facebook cá nhân</label>
                        <input type="text" name="facebook" placeholder="facebook.com.vn">
                        <label for="">Đính kèm CV</label>
                        <input type="file" name="cv" required>
                        <label for="">Bạn có sẵn sàng làm thêm giờ</label>
                        <div class="dejob_form_radio_inline">
                            <div class="dejob_radiobox">
                                <input type="radio" id="group31" name="overtime" value="Có" required> 
                                <label for="group31">Có</label>
                            </div>
                            <div class="dejob_radiobox">
                                <input type="radio" id="group32" name="overtime" value="Tùy thời điểm"> 
                                <label for="group32">Tùy thời điểm</label>
                            </div>
                            <div class="dejob_radiobox">
                                <input type="radio" id="group33" name="overtime" value="Không"> 
                                <label for="group33">Không</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dejob_form_bottom">
                    <label for="">Những nơi đã từng làm việc trước đây (ghi rõ vị trí)</label>
                    <textarea name="work_experience" rows="4" cols="50" placeholder="Những nơi đã từng làm việc trước đây"></textarea>
                    <label for="">Kinh nghiệm bản thân</label>
                    <textarea name="personal_experience" rows="4" cols="50" placeholder="Kinh nghiệm bản thân"></textarea>
                </div>
                @if (\Carbon\Carbon::parse($job->date_expired)->isPast())
                    <div class="dejob_form_button">
                        <button disabled>Đã hết hạn</button>
                    </div>
                @else
                    <div class="dejob_form_button">
                        <button type="submit">Gửi ngay</button>
                    </div>
                @endif
            </div>
        </form>
        
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Lấy tất cả các thông báo có lớp 'alert'
    const alerts = document.querySelectorAll('.alert');
    
    alerts.forEach(function(alert) {
        // Thêm lớp 'show' để hiển thị thông báo với hiệu ứng
        alert.classList.add('show');

        // Tự động ẩn thông báo sau 5 giây
        setTimeout(function() {
            alert.classList.remove('show');
        }, 5000); // Thời gian hiển thị thông báo (5 giây)
    });
});

</script>
@endsection