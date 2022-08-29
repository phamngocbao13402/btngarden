-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2021 lúc 05:23 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btngarden`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_kh`, `noi_dung`, `ma_hh`, `ngay_bl`) VALUES
(15, 'adminmm', 'Đẹp quá', 35, '2021-11-30'),
(18, 'adminmm', 'Đẹp quá', 48, '2021-12-09'),
(19, 'baobaobao', 'Đẹp quá', 50, '2021-12-11'),
(20, 'adminmm', 'Xnj xò', 48, '2021-12-11'),
(21, 'baobaobao', 'Đẹp quá', 36, '2021-12-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_nhap` date NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `mo_ta` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `ma_loai`, `so_luot_xem`, `so_luong`, `mo_ta`) VALUES
(35, 'Tiểu cảnh gốm sứ', 500000, 20, 'tieu-canh-gom-su-15-510x510.jpg', '2021-11-25', 31, 31, 0, 'Giới thiệu: Tiểu cảnh Terrarium Sen đá – Xương Rồng trong chậu gốm sứ phù hợp làm quà tặng để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.\r\n\r\nÝ nghĩa: Sen đá tượng trưng cho sự may mắn, tình yêu chung thuỷ, bền lâu. Xương rồng tượng trưng cho sự mạnh mẽ, bền bỉ.\r\n\r\nCách chăm sóc: Tưới ít nước, để chỗ thoáng mát có nhiều ánh sáng, 1 tuần tưới một lần. Mỗi lần 20-50ml nước (sử dụng bình tưới chuyên dụng)\r\n\r\nĐường kính chậu:\r\n\r\n– 22cm\r\n\r\nBao gồm các loại cây:\r\n\r\n– Sen đá: Tứ phương, Hồng phấn, Cỏ ngọc, Ruby, Viền đỏ, Sedum vàng, Sedum hoa hồng, Hàm cá sấu…\r\n\r\n– Xương rồng: Trứng (xương rồng tuyết), Giống mới…\r\n\r\n– Phụ kiện trang trí Terrarium'),
(36, 'Tiểu cảnh Thuỷ Tinh', 550000, 25, 'tieu-canh-thuy-tinh-38-510x510.jpg', '2021-11-25', 31, 102, 7, 'Giới thiệu: Tiểu cảnh Terrarium Sen Đá phù hợp làm quà tặng để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.\r\n\r\nÝ nghĩa: Sen đá tượng trưng cho sự may mắn, tình yêu chung thuỷ, bền lâu.\r\n\r\nCách chăm sóc: Tưới ít nước, để chỗ thoáng mát có nhiều ánh sáng, 4-7 ngày tưới một lần. Mỗi lần 20-50ml nước (sử dụng bình tưới chuyên dụng)\r\n\r\nĐường kính chậu:\r\n\r\n– Hình tròn, có móc treo, đường kính 16cm\r\n\r\nBao gồm các loại cây:\r\n\r\n– Sen đá: Đá đỏ, Phật bà, Cánh bướm, Thạch ngọc đỏ, Cafe…\r\n\r\n– Các loại phụ kiện trang trí Terrarium'),
(37, 'Tiểu cảnh Composite', 600000, 20, 'ca.jpg', '2021-11-25', 31, 5, 19, 'Giới thiệu: Tiểu cảnh Terrarium cẩm nhung (fittonia) kết hợp các dòng cây nội thất phù hợp để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.\r\n\r\nÝ nghĩa: Cẩm nhung tượng trưng cho sự may mắn, bền lâu, gắn kết.\r\n\r\nCách chăm sóc: Tưới nước hàng ngày. Mỗi lần 20-50ml nước (sử dụng bình tưới chuyên dụng)\r\n\r\nĐường kính chậu:\r\n\r\n– Cao 20cm, rộng 15cm\r\n\r\nBao gồm các loại cây:\r\n\r\n– Cây Cẩm nhung: hay còn gọi là lá may mắn (fittonia)\r\n\r\n– Cây Tùng mini\r\n\r\n– Cau tiểu trâm\r\n\r\n– Phụ kiện trang trí Terrarium'),
(38, 'Biệt thự lớn', 100000, 10, 'sd.jpg', '2021-11-25', 31, 2, 19, 'Giới thiệu: Tiểu cảnh Terrarium cẩm nhung (fittonia) kết hợp các dòng cây nội thất phù hợp để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.\r\n\r\nÝ nghĩa: Cẩm nhung tượng trưng cho sự may mắn, bền lâu, gắn kết.\r\n\r\nCách chăm sóc: Tưới nước hàng ngày. Mỗi lần 20-50ml nước (sử dụng bình tưới chuyên dụng)\r\n\r\nĐường kính chậu:\r\n\r\n– Cao 20cm, rộng 15cm\r\n\r\nBao gồm các loại cây:\r\n\r\n– Cây Cẩm nhung: hay còn gọi là lá may mắn (fittonia)\r\n\r\n– Cây Tùng mini\r\n\r\n– Cau tiểu trâm\r\n\r\n– Phụ kiện trang trí Terrarium'),
(39, 'Batman Lợn', 150000, 10, 'batman-lon-01-min.jpg', '2021-11-25', 31, 2, 15, 'Giới thiệu: Tiểu cảnh Terrarium cẩm nhung (fittonia) kết hợp các dòng cây nội thất phù hợp để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.\r\n\r\nÝ nghĩa: Cẩm nhung tượng trưng cho sự may mắn, bền lâu, gắn kết.\r\n\r\nCách chăm sóc: Tưới nước hàng ngày. Mỗi lần 20-50ml nước (sử dụng bình tưới chuyên dụng)\r\n\r\nĐường kính chậu:\r\n\r\n– Cao 20cm, rộng 15cm\r\n\r\nBao gồm các loại cây:\r\n\r\n– Cây Cẩm nhung: hay còn gọi là lá may mắn (fittonia)\r\n\r\n– Cây Tùng mini\r\n\r\n– Cau tiểu trâm\r\n\r\n– Phụ kiện trang trí Terrarium'),
(40, 'Cây Ngũ Gia Bì', 250000, 25, 'da.jpg', '2021-11-25', 32, 45, 25, 'Cây Ngũ Gia Bì hợp tuổi gì? Tác dụng của cây Ngũ Gia Bì?\r\nCây Ngũ Gia Bì có vẻ đẹp sang trọng và tràn đầy sức sống cùng với giá trị phong thủy tốt lành. Cùng Cây Xinh tìm hiểu về loại cây trồng trong nhà này nhé!\r\n\r\nNếu bạn đang tìm kiếm cho mình một loại cây cảnh đa năng để trồng trong nhà thì Ngũ Gia Bì sẽ là lựa chọn mà bạn không nên bỏ qua. Cây Ngũ Gia Bì không chỉ có vẻ ngoài đẹp mắt, giá trị phong thủy tuyệt vời, đuổi muỗi hiệu quả mà chúng còn là một vị dược liệu quý để chữa bệnh cho con người. Hãy cùng Cây Xinh tìm hiểu về loài cây đặc biệt này nhé!'),
(41, 'Cây Phát Tài', 450000, 30, 'cay-phat-tai-050820-06-510x510.jpg', '2021-11-25', 32, 33, 30, 'Hiện nay, các loại cây phong thủy ngày càng được chú ý và yêu thích trên thị trường. Cây Phát Tài là tên gọi chung đặt cho các loại cây mang lại vận may, tài lộc đến với người trồng. Đó có thể là cây Phát Tài Phát Lộc, cây Phát Tài Núi, cây Phát Tài gốc hay cây Phát Tài đỏ… \r\nĐể cây có ý nghĩa phong thủy tốt, cần giữ cho cây được xanh tươi quanh năm. Tuy nhiên, không phải ai cũng nắm vững kỹ thuật trồng và chăm sóc cây.'),
(42, 'Sen Đá Phật Bà Trắng', 90000, 2, 'senda.jpg', '2021-11-30', 34, 0, 50, 'Sen Đá Phật Bà Trắng (tên khoa học: Sempervivum calcareum ‘Fire Dragon’) có nguồn gốc từ phía nam dãy núi Alps ở Châu Âu và một số hòn đảo ở Địa Trung Hải. Loài sen đá này gây ấn tượng bởi hình dáng độc đáo, thu hút…'),
(43, 'Sen Đá Kim Tuyến', 50000, 2, 'kimtuyen.jpg', '2021-11-30', 34, 1, 49, 'Sen Đá Kim Tuyến (tên khoa học: Graptopetalum mendozae) mọc thành bụi, các nhánh cây có thể cao đến 15cm phát triển tốt quanh năm, đặc biệt là vào mùa đông.'),
(44, 'Sen Đá Giva', 50000, 2, 'giva.jpg', '2021-11-24', 34, 0, 100, 'Sen Đá Giva (tên khoa học: Echeveria Agavoides) có màu xanh tươi đặc trưng, đầu lá như những chiếc gai nhọn mọc xen kẽ nhau một cách cân đối. Lá cây mọc đều xung quanh gốc, xếp xòe ra rất đẹp…\r\n\r\n'),
(45, 'Sen Đá Cúc Gai', 60000, 3, 'cucgai.jpg', '2021-11-24', 34, 1, 45, 'Sen Đá Cúc Gai (tên khoa học: Echeveria mexensis ‘Zaragosa’) là loại cây mọng nước, có nguồn gốc từ Mexico tới Tây Bắc Nam Mỹ. Cây có các cánh xếp xen kẽ và chồng khít lên nhau tựa như những bông hoa sen tuyệt đẹp.'),
(46, 'Sen Đá Bánh Bao', 35000, 3, 'banhbao.jpg', '2021-11-16', 34, 0, 50, 'Sen Đá Bánh Bao (tên khoa học: Echeveria Tippy) có nguồn gốc từ Mexico, là loại cây mọng nước dễ chăm sóc. Cây cao khoảng 5-10cm, đường kính khoảng 15cm tùy vào số tuổi của cây…\r\n\r\n'),
(47, 'Xương Rồng Khế Bụi Vàng', 200000, 2, 'khevang.jpg', '2021-11-30', 35, 2, 40, 'Xương Rồng Khế Bụi Vàng là loại cây cảnh đẹp, thuộc nhóm cây mọng nước. Loại cây này có nguồn gốc từ vùng Nam Mỹ. Trong phong thủy Xương Rồng Khế Bụi Vàng được nhiều người biết đến với ý nghĩa mang đến sức mạnh giúp bảo vệ bạn tránh khỏi những nguồn năng lượng xấu,…\r\n\r\n'),
(48, 'Cây Kim Ngân', 170000, 10, 'cay-kim-ngan-1108198-510x510.jpg', '2021-12-01', 37, 25, 14, 'Cây Kim Ngân (tên khoa học: Pachira Aquatica) còn được gọi là Money Tree, đối với người Tây phương có nghĩa là cây tiền. Cây thường được dùng để làm cây cảnh văn phòng, trang trí nhà ở với ý nghĩa mang lại nhiều tiền bạc, sự may mắn và thịnh vượng cho gia chủ…'),
(49, 'Cây Kim Tiền', 250000, 20, 'caykintien.jpg', '2021-12-01', 37, 7, 9, 'Cây Kim Tiền (tên khoa học: Zamioculcas zamiifolia) là loại cây trồng trong nhà có vẻ đẹp sang trọng, đầy sức sống, mang đến nhiều giá trị phong thủy tốt lành đến với gia chủ…'),
(50, 'Cây Cau Cảnh', 500000, 25, 'caytieucau.jpg', '2021-12-01', 37, 14, 22, 'Cây Cau Cảnh là loài cây có sức sống mãnh liệt, mang nhiều ý nghĩa về may mắn và tài lộc. Hiện nay loại cây này được trồng nhiều trong không gian nhà ở, môi trường làm việc hay các quán cafe,…'),
(51, 'Cây Vạn Lộc', 450000, 5, 'cay-van-loc-13081910-510x510.jpg', '2021-12-01', 37, 11, 26, 'Cây Vạn Lộc (tên khoa học: Aglaonema Rotundum Pink) có tốc độ sinh trưởng nhanh, dễ chăm sóc, phù hợp trang trí nội thất, phòng làm việc. Cây Vạn Lộc phong thủy tượng trưng cho sự may mắn, năng lượng tràn đầy và mang sự thịnh vượng, no đủ cho gia chủ.'),
(52, 'Cây Tùng La Hán', 450000, 10, 'cay-van-loc-13081910-510x510.jpg', '2021-12-01', 37, 2, 1, 'Cây Tùng La Hán (tên khoa học: Podocarpus brevifolius) còn gọi là Vạn Niên Tùng. Trồng cây mang lại sức khỏe, xua đuổi những điều xui xẻo đến với gia đình…'),
(53, 'Cây Trầu Bà Đế Vương Đỏ', 350000, 10, 'cay-trau-ba-1608193-510x510.jpg', '2021-12-01', 37, 0, 250, 'Cây Trầu Bà Đế Vương Đỏ (tên khoa học: Philodendron Imperial Red) thường được dùng để trang trí nội thất, văn phòng với nhiều ý nghĩa phong thủy tốt lành…'),
(54, 'Cây Phát Tài', 550000, 10, 'cay-phat-tai-050820-06-510x510.jpg', '2021-12-01', 37, 0, 350, 'Cây Phát Tài được tìm thấy ở Zambia, Tanzania và Tây Phi. Loại cây này có lá màu xanh sẫm, tán lá xòe rộng và có đường gân vàng nổi bật, thường được trồng trong nhà giúp thanh lọc không khí hiệu quả…'),
(55, 'Cây Hồng Môn', 350000, 5, 'Cay-hong-mon-1108192-510x510.jpg', '2021-12-01', 37, 1, 300, 'Cây Hồng Môn (tên khoa học: Anthurium Taiflower) có hoa tựa hình trái tim màu đỏ rực rõ, lá cây có màu xanh mướt. Cây đặc biệt hợp với người mệnh Hỏa mang ý nghĩa may mắn tài lộc…'),
(56, 'Cây Lan Ý', 350000, 5, 'cay-lan-y-1208195-510x510.jpg', '2021-12-01', 37, 0, 20, 'Cây Lan Ý (tên khoa học: Spathiphyllum wallisii (Peace Lily) ), đứng đầu danh sách các loại cây lọc không khí tốt nhất hiện nay, không chỉ hấp thụ một số chất gây ung thư mà còn hấp thụ năng lượng bức xạ nhân tạo phát ra từ tivi, điện thoại, máy tính, đồng hồ điện tử…'),
(57, 'Cây Lan Quân Tử', 450000, 10, 'cay-lan-quan-tu-1208194-510x510.jpg', '2021-12-01', 37, 0, 350, 'Cây Lan Quân Tử (tên khoa học là Cilivia Nobilis Lindl) là loại cây thân thảo, có tuổi thọ cây cao. Khi trưởng thành Lan Quân Tử cao khoảng 0,3 – 0,9m có thân cây bóng, rễ cây thuộc loại rễ chùm và  lan rộng trong lòng đất…'),
(58, 'Cây Phong Lá Đỏ', 450000, 10, 'tieu-canh-phong-la-do-510x510.jpg', '2021-12-01', 32, 0, 30, 'Cây Phong Lá Đỏ (tên khoa học: Acer rubrum) được xem là biểu tượng của nhiều nước trên thế giới đặc biệt là Canada. Cây có ý nghĩa mang lại may mắn, tài lộc…'),
(59, 'Cây Cẩm Nhung', 350000, 5, 'cay-cam-nhung1-510x510.jpg', '2021-12-01', 32, 1, 345, 'Cây Cẩm Nhung (tên khoa học: Fittonia) là loại cây cảnh để bàn làm việc có vẻ đẹp hết sức độc đáo. Không những thế, chúng còn mang một giá trị phong thủy hết sức tốt lành với may mắn, tài lộc, thịnh vượng đến cho gia chủ…'),
(60, 'Cây Lưỡi Hổ', 350000, 10, 'cay-luoi-ho-1208197-510x510.jpg', '2021-12-01', 32, 0, 350, 'Cây Lưỡi Hổ (tên khoa học: Sansevieria trifasciata) nằm trong top 10 những cây cảnh có khả năng thanh lọc không khí, hấp thụ chất gây ô nhiễm, cải thiện không gian sống tốt nhất hiện nay…'),
(61, 'Cây Đuôi Công Tím', 350000, 5, 'duoi-cong-tim-0908195-510x510.jpg', '2021-12-01', 32, 0, 20, 'Cây Đuôi Công Tím (tên khoa học: Calathea medallion/Calathea makoyana) với vẻ ngoài nổ bật, thu hút đã trở thành loại cây để bàn, cây văn phòng được ưa chuộng nhất hiện nay. Cây biểu trưng cho sự thịnh vượng và may mắn cho gia chủ.'),
(62, 'Xương Rồng Bóng Vàng', 350000, 5, 'xuong-rong-bong-vang-bui-510x510.jpg', '2021-12-01', 35, 1, 250, 'Xương Rồng Bóng Vàng Bụi (tên khoa học: Eriocactus Leninghausii) có nguồn gốc từ đất nước Brazil. Cây thu hút bởi vẻ ngoài rất lạ mắt có màu vàng tươi nổi bật. Ngoài ra, cây còn mang ý nghĩa phong thủy rất tốt cho gia chủ sở hữu cây…'),
(63, 'Xương rồng tai thỏ xanh', 450000, 5, 'xuong-rong-tai-tho-xanh-510x510 (1).jpg', '2021-12-01', 35, 0, 30, 'Xương Rồng Bóng Vàng Bụi (tên khoa học: Eriocactus Leninghausii) có nguồn gốc từ đất nước Brazil. Cây thu hút bởi vẻ ngoài rất lạ mắt có màu vàng tươi nổi bật. Ngoài ra, cây còn mang ý nghĩa phong thủy rất tốt cho gia chủ sở hữu cây…'),
(64, 'Xương Rồng Tai Thỏ Vàng', 500000, 10, 'xuong-rong-tai-tho-vang-2-510x510.jpg', '2021-12-01', 35, 0, 40, 'Xương Rồng Tai Thỏ là một trong những giống xương rồng đẹp, độc và lạ mắt. Những năm gần đây, các nhà khoa học đã chỉ ra rằng: Xương Rồng Tai Thỏ không đơn giản chỉ là một loại cây cảnh để bàn đơn thuần, giống cây này còn là món ăn đặc sản và là nguyên liệu thuốc trị nhiều bệnh hiệu quả.\r\n\r\nVậy, Xương Rồng Tai Thỏ có thực sự thần kỳ? Cây Xinh sẽ cùng bạn khám phá những thông tin xoay quay loại cây này qua những thông tin dưới đây…'),
(65, 'Xương Rồng Gymno', 100000, 5, 'xuong-rong-gymno-gai-trang-510x510.jpg', '2021-12-01', 35, 0, 30, 'Xương Rồng Gymno đang là một trong những loại cây cảnh mini được yêu thích cho góc trang trí nhỏ trong nhà. Cây sở hữu hình dáng bắt mắt, độc đáo…'),
(66, 'Xương Rồng Mix 3 Cây', 350000, 10, 'xuong-rong-mix-3-510x510.jpg', '2021-12-01', 35, 0, 35, 'Xương Rồng Mix 3 Cây là một trong những loại cây rất được yếu thích hiện nay. Cây không chỉ thu hút bởi vẻ ngoài độc đáo mà còn bởi ý nghĩa sâu sắc của chúng…'),
(67, 'Xương Rồng Móc Câu', 250000, 5, 'xuong-rong-moc-cau-510x510.jpg', '2021-12-01', 35, 0, 20, 'Xương Rồng Móc Câu (tên khoa học: Ferocactus peninsulae) thuộc chi Ferocactus của họ Cacteae. Những chiếc gai của cây có hình dáng rất đẹp mắt, được ví như những chiếc móc câu nhỏ xinh…'),
(68, 'Tiểu cảnh sen đá', 250000, 5, 'tieu-canh-gom-su-33-510x510.jpg', '2021-12-01', 33, 1, 20, 'Giới thiệu: Tiểu cảnh Terrarium Sen Đá trong chậu gốm sứ phù hợp làm quà tặng để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.\r\n\r\nÝ nghĩa: Sen đá tượng trưng cho sự may mắn, tình yêu chung thuỷ, bền lâu. Xương rồng tượng trưng cho sự mạnh mẽ, bền bỉ.\r\n\r\nCách chăm sóc: Tưới ít nước, để chỗ thoáng mát có nhiều ánh sáng, 1 tuần tưới một lần. Mỗi lần 20-50ml nước (sử dụng bình tưới chuyên dụng)'),
(69, 'Tiểu cảnh sen đá', 150000, 5, 'tieu-canh-gom-su-13-510x510.jpg', '2021-12-01', 33, 1, 20, 'Giới thiệu: Tiểu cảnh Terrarium Sen Đá trong chậu gốm sứ phù hợp làm quà tặng để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.\r\n\r\nÝ nghĩa: Sen đá tượng trưng cho sự may mắn, tình yêu chung thuỷ, bền lâu. Xương rồng tượng trưng cho sự mạnh mẽ, bền bỉ.\r\n\r\nCách chăm sóc: Tưới ít nước, để chỗ thoáng mát có nhiều ánh sáng, 1 tuần tưới một lần. Mỗi lần 20-50ml nước (sử dụng bình tưới chuyên dụng)'),
(71, 'Tiểu cảnh cặp đôi', 25000, 3, 'tieu-canh-terrarium-gom-ve-19.jpg', '2021-12-08', 33, 0, 10, 'Tiểu cảnh Terrarium Sen Đá – Xương Rồng trong chậu gốm vẽ phù hợp làm quà tặng để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.'),
(72, 'Tiểu cảnh Composite', 50000, 20, 'tieu-canh-terrarium-composite-02.jpg', '2021-12-08', 33, 0, 10, 'Tiểu cảnh Terrarium Sen Đá – Xương Rồng trong chậu Composite phù hợp làm quà tặng để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.'),
(73, 'Tiểu cảnh Composite', 50000, 12, 'tieu-canh-terrarium-composite-08.jpg', '2021-12-08', 33, 0, 10, 'Tiểu cảnh Terrarium Sen Đá trong chậu Composite phù hợp làm quà tặng để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.'),
(74, 'Tiểu cảnh Composite', 500000, 12, 'tieu-canh-terrarium-composite-08.jpg', '2021-12-08', 33, 6, 8, 'Tiểu cảnh Terrarium Sen Đá trong chậu Composite phù hợp làm quà tặng để bàn làm việc, trang trí văn phòng, nội thất. Sức sống bền bỉ, mạnh mẽ, dễ chăm sóc.'),
(75, 'Vẹt Con Phong Cách', 25000, 5, 'vet-con-phong-cach-01.jpg', '2021-12-12', 31, 0, 50, 'Vẹt Con Phong Cách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `ngay_dat_hang` date NOT NULL,
  `ghi_chu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinh_trang` int(11) NOT NULL,
  `ship` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_kh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `tong_tien`, `ngay_dat_hang`, `ghi_chu`, `tinh_trang`, `ship`, `dia_chi`, `ma_kh`) VALUES
(1, 1, '2024-12-01', '[value-4]', 1, 1, '[value-7]', 'baobaobao'),
(62, 183000, '2021-12-09', '', 3, 0, 'lfsdfsdfsdfsdf', 'adminmm'),
(63, 3270000, '2021-12-09', '', 1, 0, 'lfsdfsdfsdfsdf', 'adminmm'),
(64, 321000, '2021-10-09', '', 0, 0, 'lfsdfsdfsdfsdf', 'adminmm'),
(65, 592500, '2021-12-09', '', 0, 0, 'lfsdfsdfsdfsdf', 'baobaobao'),
(66, 405000, '2021-12-09', '', 0, 0, 'lfsdfsdfsdfsdf', 'baobaobao'),
(67, 207500, '2021-12-09', 'dsf', 0, 2, 'quảng trị', 'baobaobao'),
(72, 510000, '2021-12-11', '', 0, 0, 'lfsdfsdfsdfsdf', 'adminmm'),
(74, 362500, '2021-12-12', '', 0, 0, 'lfsdfsdfsdfsdf', 'adminmm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hd` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hd`, `ma_hh`, `so_luong`, `don_gia`) VALUES
(62, 48, 1, 153000),
(63, 52, 8, 405000),
(64, 45, 5, 58200),
(65, 40, 1, 187500),
(65, 50, 1, 375000),
(66, 50, 1, 375000),
(67, 40, 1, 187500),
(72, 37, 1, 480000),
(1, 36, 10, 550000),
(74, 59, 1, 332500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kich_hoat` int(1) NOT NULL DEFAULT 1,
  `vai_tro` int(1) NOT NULL DEFAULT 0,
  `so_dien_thoai` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `hinh`, `kich_hoat`, `vai_tro`, `so_dien_thoai`, `dia_chi`) VALUES
('adminmm', '12345678', 'admin', 'ham@gmail.com', 'user.png', 1, 0, '1234578999', 'lfsdfsdfsdfsdf'),
('baobaobao', '12345678', 'Bảo', 'baobaobao@gmail.com', '1.jpg', 1, 1, '1234567899', 'lfsdfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`, `hinh`) VALUES
(31, 'Phụ kiện Terrarium', 'phukienta.jpg'),
(32, 'Cây cảnh văn phòng', 'caycanhvanphong.jpg'),
(33, 'Tiểu cảnh sen đá', 'tieucanhsenda.jpg'),
(34, 'Sen đá', 'sendaindex.jpg'),
(35, 'Xương rồng', 'thánhon.jpg'),
(37, 'Cây cảnh trong nhà ', 'caycanhtrongnha.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD KEY `ma_hd` (`ma_hd`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
