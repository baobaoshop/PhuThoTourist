-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 12, 2024 lúc 07:14 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `PHUTHOTOURIST`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ARTICLES`
--

CREATE TABLE `ARTICLES` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `author` varchar(256) NOT NULL DEFAULT 'Admin',
  `views` int(11) NOT NULL DEFAULT 0,
  `action_flag` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ARTICLES`
--

INSERT INTO `ARTICLES` (`id`, `title`, `image`, `content`, `date`, `author`, `views`, `action_flag`) VALUES
(1, 'Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022', 'image_blog7.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-05-21', 'Admin', 0, 1),
(2, 'Gazillion Bubble Show của Fan Yang tại Đầm Sen', 'image_blog2.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-01', 'Manager', 0, 1),
(3, 'Liên hoan ẩm thực Đất phương Nam 2019', 'image_blog3.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-02', 'Admin', 0, 1),
(4, 'Liên hoan Ẩm thực Đất Phương Nam 2019 có gì mới?\r\n', 'image_blog4.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-03', 'Marketing', 0, 1),
(5, 'Màn hình nước Singapore sẽ có tại Đầm Sen vào 27/4/2019', 'image_blog5.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-04', 'Logictic', 0, 1),
(6, 'Thông báo mời chào giá cạnh tranh cung cấp nước đá chế tác Băng Đăng', 'image_blog14.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-05', 'Admin', 0, 1),
(7, 'Liên hoan ẩm thực Đất phương Nam 2020', 'image_blog8.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-04', 'Admin', 0, 1),
(8, 'Liên hoan ẩm thực Đất phương Nam 2021', 'image_blog9.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-05', 'Tuyendung', 0, 1),
(9, 'Liên hoan ẩm thực Đất phương Nam 2022', 'image_blog10.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-06', 'Admin', 0, 1),
(10, 'Liên hoan ẩm thực Đất phương Nam 2023', 'image_blog1.jpeg', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-07', 'Nhansu', 0, 1),
(11, 'Liên hoan ẩm thực Đất phương Nam 2024', 'image_blog14.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-02', 'Admin', 0, 1),
(12, 'Liên hoan ẩm thực Đất phương Nam 2025', 'image_blog3.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-07', 'Nhansu', 0, 1),
(13, 'Liên hoan ẩm thực Đất phương Nam 2026', 'image_blog2.png', '<p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết quả như sau.</p> <ul><li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li> <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li> <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường 15, Quận 11, TP.HCM).</li> <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li> <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li> </ul> <p>Kết quả lựa chọn đơn vị:</p> <ul> <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li> <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>  <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li> <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li> </ul> <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03 tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022. Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu giá xếp hạng hai. Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p> <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ. Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.</p> <p>Trân trọng.</p> <p>Chi tiết xem trong văn bản đính kèm</p>', '2024-12-07', 'Admin', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ARTICLE_DOCUMENTS`
--

CREATE TABLE `ARTICLE_DOCUMENTS` (
  `article_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ARTICLE_DOCUMENTS`
--

INSERT INTO `ARTICLE_DOCUMENTS` (`article_id`, `document_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ARTICLE_TOPICS`
--

CREATE TABLE `ARTICLE_TOPICS` (
  `article_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ARTICLE_TOPICS`
--

INSERT INTO `ARTICLE_TOPICS` (`article_id`, `topic_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 4),
(3, 1),
(3, 3),
(4, 1),
(4, 2),
(5, 3),
(5, 4),
(6, 2),
(6, 3),
(7, 3),
(7, 5),
(8, 2),
(8, 5),
(9, 1),
(9, 2),
(10, 2),
(10, 3),
(11, 3),
(11, 4),
(12, 4),
(12, 5),
(13, 1),
(13, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CANDIDATE`
--

CREATE TABLE `CANDIDATE` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `current_address` varchar(256) NOT NULL,
  `email` varchar(100) NOT NULL,
  `education_level` varchar(100) NOT NULL,
  `willing_to_travel` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birth_place` varchar(256) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `cv` varchar(256) NOT NULL,
  `overtime` varchar(100) NOT NULL,
  `work_experience` text NOT NULL,
  `personal_experience` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `CANDIDATE`
--

INSERT INTO `CANDIDATE` (`id`, `job_id`, `name`, `dob`, `current_address`, `email`, `education_level`, `willing_to_travel`, `gender`, `birth_place`, `phone`, `facebook`, `cv`, `overtime`, `work_experience`, `personal_experience`, `status`) VALUES
(5, 2, 'Bui Quoc Bao', '2024-12-03', '123 Nguyễn Hữu Tiến, Tây Thạnh, Tân Phú, TpHCM', 'buiquocbao.it@gmail.com', 'Đại học', 'Tùy thời điểm', 'Nam', 'Phú Quý, Bình Thuận', '0397711024', 'baobaoshop', 'cvs/beNeiAbFKgSqIA2wye6NU2yTKUkpJ6QrEXmzxnYr.pdf', 'Có', '123', '123', 0),
(6, 2, 'Bui Quoc Bao', '2003-01-31', '123 Nguyễn Hữu Tiến, Tây Thạnh, Tân Phú, TpHCM', 'buiquocbao.it@gmail.com', 'Đại học', 'Không', 'Nam', 'Phú Quý, Bình Thuận', '0397711024', 'baobaoshop', 'cvs/vkioTHYz4gU6Ug8JnlF3LGG4e0Bj7yyNChpatdK9.pdf', 'Tùy thời điểm', '123', '123', 0),
(7, 2, 'Bui Quoc Bao', '2003-01-31', '123 Nguyễn Hữu Tiến, Tây Thạnh, Tân Phú, TpHCM', 'buiquocbao.it@gmail.com', 'Đại học', 'Tùy thời điểm', 'Nam', 'Phú Quý, Bình Thuận', '0397711024', 'facebook.com.vn/baobaoshop', 'cvs/Gz7ERgxYWvVFnFOIWKgMY4REBByztx7FPfmmZSpo.pdf', 'Tùy thời điểm', '1234', '4321', 0),
(8, 2, 'Bui Quoc Bao', '2003-01-31', '123 Nguyễn Hữu Tiến, Tây Thạnh, Tân Phú, TpHCM', 'buiquocbao.it@gmail.com', 'Đại học', 'Tùy thời điểm', 'Nam', 'Phú Quý, Bình Thuận', '0397711024', 'baobaoshop', 'cvs/X508InIqT3Olf3UqnKy8AT6hKTnVVMjrCkSDIqHI.pdf', 'Có', 'FPT', 'Thành thạo', 0),
(9, 2, 'Bui Quoc Bao', '2003-01-31', '123 Nguyễn Hữu Tiến, Tây Thạnh, Tân Phú, TpHCM', 'buiquocbao.it@gmail.com', 'Đại học', 'Có', 'Nam', 'Phú Quý, Bình Thuận', '0397711024', 'facebook.com.vn/baobaoshop', 'cvs/kgDyS3va2QJCl0dmP6iKlKFlm5TVd6U3e5LU4Ymx.pdf', 'Tùy thời điểm', 'FPT', 'Thanhf thaoj...', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `DOCUMENT`
--

CREATE TABLE `DOCUMENT` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  `action_flag` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `DOCUMENT`
--

INSERT INTO `DOCUMENT` (`id`, `name`, `url`, `date`, `action_flag`) VALUES
(1, 'Khám phá Hội An - Việt Nam', 'file1.pdf', '2024-11-25 07:34:06', 1),
(2, 'Hải Phòng yêu cầu người dân không ra khỏi nhà sau 22h', 'file2.pdf', '2024-11-25 07:34:47', 1),
(3, 'Chuẩn bị gì sau khi tiêm Covid-19', 'file3.pdf', '2024-11-25 07:35:25', 1),
(4, 'SHOW CHANNEL 1', 'file4.pdf', '2024-11-25 07:35:53', 1),
(5, 'Du lịch ở TPHCM đang như thế nào?', 'file5.pdf', '2024-11-25 07:36:06', 1),
(6, 'Khám phá Hội An - Việt Nam', 'file1.pdf', '2024-12-07 06:06:45', 1),
(7, 'Hải Phòng yêu cầu người dân không ra khỏi nhà sau 22h', 'file2.pdf', '2024-12-07 06:06:45', 1),
(8, 'Chuẩn bị gì sau khi tiêm Covid-19', 'file3.pdf', '2024-12-07 06:06:45', 1),
(9, 'SHOW CHANNEL 2', 'file4.pdf', '2024-12-07 06:06:45', 1),
(10, 'Du lịch ở TPHCM đang như thế nào?', 'file5.pdf', '2024-12-07 06:08:02', 1),
(11, 'SHOW CHANNEL 3', 'file1.pdf', '2024-12-07 00:00:01', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `EDU_LEVEL`
--

CREATE TABLE `EDU_LEVEL` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `action_flag` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `EDU_LEVEL`
--

INSERT INTO `EDU_LEVEL` (`id`, `name`, `action_flag`) VALUES
(1, 'Cao đẳng', 1),
(2, 'Đại học', 1),
(3, 'Tốt nghiệp lớp 12', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `INDUSTRY`
--

CREATE TABLE `INDUSTRY` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `action_flag` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `INDUSTRY`
--

INSERT INTO `INDUSTRY` (`id`, `name`, `action_flag`) VALUES
(2, 'Hướng dẫn viên', 1),
(3, 'Kinh doanh', 1),
(4, 'Kỹ sư xây dựng', 1),
(5, 'Nhân viên kế toán', 1),
(6, 'Nhân viên kỹ thuật', 1),
(7, 'Nhân viên phục vụ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `JOBS`
--

CREATE TABLE `JOBS` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `industry_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `edu_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_expired` date NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `number` int(11) NOT NULL DEFAULT 1,
  `working_hours` text NOT NULL DEFAULT 'Giờ hành chính',
  `benefits` text NOT NULL,
  `requirements` text NOT NULL,
  `req_age` text NOT NULL,
  `apply_docs` text NOT NULL,
  `action_flag` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `JOBS`
--

INSERT INTO `JOBS` (`id`, `title`, `industry_id`, `type_id`, `edu_id`, `location_id`, `date`, `date_expired`, `description`, `image`, `number`, `working_hours`, `benefits`, `requirements`, `req_age`, `apply_docs`, `action_flag`) VALUES
(1, 'Nhân viên thiết kế đồ họa', 6, 2, 1, 3, '2024-11-20', '2024-11-30', ' Thiết kế hình ảnh, brochure, banner, poster, pano, backdrop sân khấu, các loại vé mời … và các ấn phẩm phục vụ sự kiện, truyền thông của công viên. \r\nChụp hình, quay phim, dựng video đơn giản.\r\nLên phác thảo, trao đổi ý tưởng với quản lý và hoàn thiện thiết kế.\r\nCác chi tiết về công việc được trao đổi tại buổi phỏng vấn. ', 'img_job2.jpeg', 2, 'Giờ hành chính', 'Được ký hợp đồng lao động, tham gia đầy đủ chế độ BHXH.\r\nThưởng tháng 13, 14, các ngày lễ, tết trong năm.\r\nĐược phục vụ bữa ăn trưa tại nơi làm việc.\r\nĐược trang bị đồng phục, khám sức khỏe định kỳ hàng năm.\r\nĐược tham gia Bảo hiểm tai nạn 24/24.\r\nNghỉ phép: 12 ngày phép / năm, công tác 5 năm thêm 1 ngày.\r\nĐược tham gia miễn phí các khóa đào tạo nâng cao nghiệp vụ.\r\nMôi trường làm việc thân thiện, nhiều cơ hội học hỏi từ đội ngũ quản lý, nhân sự giàu kinh nghiệm, nhiệt huyết.\r\nCác chế độ khác: Quà sinh nhật, cưới hỏi, lì xì tết. Quà trung thu, quà Tết, quà thiếu nhi 1/6.\r\nHỗ trợ ốm đau, ma chay, sinh con. Tham gia Ngày hội Gia đình, Ngày hội Tuổi thơ, hoạt động văn thể mỹ hàng năm.', 'Tốt nghiệp từ Cao đẳng chuyên ngành Mỹ thuật, Đồ họa....\r\nSử dụng thành thạo các phần mềm thiết kế (Photoshop, Corel, Illustrator…).\r\nCó khả năng quay và dựng video hấp dẫn người xem.\r\nSử dụng thành thạo máy ảnh, máy quay, flycam...\r\nCó khiếu thẩm mỹ, sáng tạo, chủ động trong công việc.\r\nCó thể làm việc cuối tuần, lễ tết theo đặc thù kinh doanh Công viên Giải trí.', '22 - 27 tuổi', 'Thông tin ứng tuyển:\r\nỨng viên vui lòng gửi CV đến email: tuyendung@damsenpark.vn.\r\nHoặc nộp hồ sơ trực tiếp tại Trụ sở Văn phòng Công ty: 15 đường số 2, cư xá Lữ Gia, P. 15, Quận 11.\r\n(ĐT: 028 38 650 921  - Phòng Nhân sự).', 1),
(2, 'Hướng dẫn viên du lịch', 2, 1, 1, 7, '2024-12-01', '2025-01-01', ' Thiết kế hình ảnh, brochure, banner, poster, pano, backdrop sân khấu, các loại vé mời … và các ấn phẩm phục vụ sự kiện, truyền thông của công viên.\n Chụp hình, quay phim, dựng video đơn giản.\n Lên phác thảo, trao đổi ý tưởng với quản lý và hoàn thiện thiết kế.\n Các chi tiết về công việc được trao đổi tại buổi phỏng vấn.', 'image_blog2.png', 4, 'Giờ hành chính', 'Được ký hợp đồng lao động, tham gia đầy đủ chế độ BHXH.\r\nThưởng tháng 13, 14, các ngày lễ, tết trong năm.\r\nĐược phục vụ bữa ăn trưa tại nơi làm việc.\r\nĐược trang bị đồng phục, khám sức khỏe định kỳ hàng năm.\r\nĐược tham gia Bảo hiểm tai nạn 24/24.\r\nNghỉ phép: 12 ngày phép / năm, công tác 5 năm thêm 1 ngày.\r\nĐược tham gia miễn phí các khóa đào tạo nâng cao nghiệp vụ.\r\nMôi trường làm việc thân thiện, nhiều cơ hội học hỏi từ đội ngũ quản lý, nhân sự giàu kinh nghiệm, nhiệt huyết.\r\nCác chế độ khác: Quà sinh nhật, cưới hỏi, lì xì tết. Quà trung thu, quà Tết, quà thiếu nhi 1/6.\r\nHỗ trợ ốm đau, ma chay, sinh con. Tham gia Ngày hội Gia đình, Ngày hội Tuổi thơ, hoạt động văn thể mỹ hàng năm.', 'Tốt nghiệp từ Cao đẳng chuyên ngành Mỹ thuật, Đồ họa.... \n Sử dụng thành thạo các phần mềm thiết kế (Photoshop, Corel, Illustrator…). \n Có khả năng quay và dựng video hấp dẫn người xem. \n Sử dụng thành thạo máy ảnh, máy quay, flycam... \n Có khiếu thẩm mỹ, sáng tạo, chủ động trong công việc. \n Có thể làm việc cuối tuần, lễ tết theo đặc thù kinh doanh Công viên Giải trí.', '18 - 22 tuổi', 'Thông tin ứng tuyển:\r\nỨng viên vui lòng gửi CV đến email: tuyendung@damsenpark.vn.\r\nHoặc nộp hồ sơ trực tiếp tại Trụ sở Văn phòng Công ty: 15 đường số 2, cư xá Lữ Gia, P. 15, Quận 11.\r\n(ĐT: 028 38 650 921  - Phòng Nhân sự).', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LOCATION`
--

CREATE TABLE `LOCATION` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `action_flag` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `LOCATION`
--

INSERT INTO `LOCATION` (`id`, `name`, `address`, `action_flag`) VALUES
(1, 'Cà Phê Vườn Đá', '03 Hòa Bình, Phường 3, Quận 11, TP.HCM', 1),
(2, 'NH Thủy tạ Đầm Sen', '03 Hòa Bình, Phường 3, Quận 11, TP.HCM', 1),
(3, 'CVVH Đầm Sen', '03 Hòa Bình, Phường 3, Quận 11, TP.HCM', 1),
(4, 'Khách sạn Ngọc Lan', '293 Lý Thường Kiệt, Phường 15, Quận 11, TP. Hồ Chí Minh', 1),
(5, 'Khách sạn Phú Thọ', '915 Đ. 3 Tháng 2, Phường 7, Quận 11, Hồ Chí Minh', 1),
(6, 'KDL Sinh Thái Vàm Sát', '15A Group, Town, Lý Nhơn, Cần Giờ, Hồ Chí Minh', 1),
(7, 'Trung tâm DVDL Đầm Sen', 'Số 3 Hòa Bình, phường 3, quận 11, TP.HCM', 1),
(8, 'VP PhuThoTourist', 'Số 3 Hòa Bình, phường 3, quận 11, TP.HCM', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KKtrcvTgU9wtpoUFLlDhLUb1xTWpFWuYHynd3Srn', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWRzMUw3SnE4RUVxR3h1VXdBVndKRVBEdjI4T3lzUnpnV09BRlRWdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733983973);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `TOPICS`
--

CREATE TABLE `TOPICS` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `action_flag` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `TOPICS`
--

INSERT INTO `TOPICS` (`id`, `name`, `icon`, `action_flag`) VALUES
(0, 'Giới thiệu', '<i class=\"fa-solid fa-lightbulb\"></i>', 1),
(1, 'Tin tức', '<i class=\"fa-solid fa-newspaper\"></i>', 1),
(2, 'Sự kiện', '<i class=\"fa-solid fa-calendar-day\"></i>', 1),
(3, 'Thông báo', '<i class=\"fa-solid fa-bell\"></i>', 1),
(4, 'Tin cổ đông', '<i class=\"fa-solid fa-folder-minus\"></i>', 1),
(5, 'Hoạt động đoàn thể', '<i class=\"fa-solid fa-users\"></i>', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `WORK_TYPE`
--

CREATE TABLE `WORK_TYPE` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `action_flag` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `WORK_TYPE`
--

INSERT INTO `WORK_TYPE` (`id`, `name`, `action_flag`) VALUES
(1, 'Bán thời gian', 1),
(2, 'Nhân viên chính thức', 1),
(3, 'Theo ca', 1),
(4, 'Thực tập', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ARTICLES`
--
ALTER TABLE `ARTICLES`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ARTICLE_DOCUMENTS`
--
ALTER TABLE `ARTICLE_DOCUMENTS`
  ADD PRIMARY KEY (`article_id`,`document_id`),
  ADD KEY `FK_AD_D` (`document_id`);

--
-- Chỉ mục cho bảng `ARTICLE_TOPICS`
--
ALTER TABLE `ARTICLE_TOPICS`
  ADD PRIMARY KEY (`article_id`,`topic_id`),
  ADD KEY `FK_AT_T` (`topic_id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `CANDIDATE`
--
ALTER TABLE `CANDIDATE`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_can_job` (`job_id`);

--
-- Chỉ mục cho bảng `DOCUMENT`
--
ALTER TABLE `DOCUMENT`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `EDU_LEVEL`
--
ALTER TABLE `EDU_LEVEL`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `INDUSTRY`
--
ALTER TABLE `INDUSTRY`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `JOBS`
--
ALTER TABLE `JOBS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_JOB_INDUSTRY` (`industry_id`),
  ADD KEY `FK_JOB_LOCATION` (`location_id`),
  ADD KEY `FK_JOB_EDU` (`edu_id`),
  ADD KEY `FK_JOB_TYPE` (`type_id`);

--
-- Chỉ mục cho bảng `LOCATION`
--
ALTER TABLE `LOCATION`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `TOPICS`
--
ALTER TABLE `TOPICS`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `WORK_TYPE`
--
ALTER TABLE `WORK_TYPE`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ARTICLES`
--
ALTER TABLE `ARTICLES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `CANDIDATE`
--
ALTER TABLE `CANDIDATE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `DOCUMENT`
--
ALTER TABLE `DOCUMENT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `EDU_LEVEL`
--
ALTER TABLE `EDU_LEVEL`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `INDUSTRY`
--
ALTER TABLE `INDUSTRY`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `JOBS`
--
ALTER TABLE `JOBS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `LOCATION`
--
ALTER TABLE `LOCATION`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `TOPICS`
--
ALTER TABLE `TOPICS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `WORK_TYPE`
--
ALTER TABLE `WORK_TYPE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ARTICLE_DOCUMENTS`
--
ALTER TABLE `ARTICLE_DOCUMENTS`
  ADD CONSTRAINT `FK_AD_A` FOREIGN KEY (`article_id`) REFERENCES `ARTICLES` (`id`),
  ADD CONSTRAINT `FK_AD_D` FOREIGN KEY (`document_id`) REFERENCES `DOCUMENT` (`id`);

--
-- Các ràng buộc cho bảng `ARTICLE_TOPICS`
--
ALTER TABLE `ARTICLE_TOPICS`
  ADD CONSTRAINT `FK_AT_A` FOREIGN KEY (`article_id`) REFERENCES `ARTICLES` (`id`),
  ADD CONSTRAINT `FK_AT_T` FOREIGN KEY (`topic_id`) REFERENCES `TOPICS` (`id`);

--
-- Các ràng buộc cho bảng `CANDIDATE`
--
ALTER TABLE `CANDIDATE`
  ADD CONSTRAINT `fk_can_job` FOREIGN KEY (`job_id`) REFERENCES `JOBS` (`id`);

--
-- Các ràng buộc cho bảng `JOBS`
--
ALTER TABLE `JOBS`
  ADD CONSTRAINT `FK_JOB_EDU` FOREIGN KEY (`edu_id`) REFERENCES `EDU_LEVEL` (`id`),
  ADD CONSTRAINT `FK_JOB_INDUSTRY` FOREIGN KEY (`industry_id`) REFERENCES `INDUSTRY` (`id`),
  ADD CONSTRAINT `FK_JOB_LOCATION` FOREIGN KEY (`location_id`) REFERENCES `LOCATION` (`id`),
  ADD CONSTRAINT `FK_JOB_TYPE` FOREIGN KEY (`type_id`) REFERENCES `WORK_TYPE` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
