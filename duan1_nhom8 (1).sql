-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 31, 2024 lúc 05:00 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_nhom8`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Polo Men', '2024-07-22 14:20:50', '2024-07-22 14:28:51'),
(2, 'Polo Women', '2024-07-22 14:28:43', '2024-07-22 14:29:01'),
(3, 'Polo Baby', '2024-07-22 14:29:09', '2024-07-22 14:29:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `collections`
--

INSERT INTO `collections` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Polo Ralph Lauren', '2024-07-22 14:20:32', '2024-07-22 14:20:32'),
(3, 'Polo Lacoste', '2024-07-22 14:27:59', '2024-07-22 14:27:59'),
(4, 'Polo Burberry', '2024-07-22 14:28:16', '2024-07-22 14:28:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message_contact` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `hoten`, `email`, `message_contact`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Toàn', 'toanbkph31686@fpt.edu.vn', ' Tôi cần hỗ trợ - Bùi Khánh Toàn', 2, '2024-07-22 15:47:21', '2024-07-22 15:47:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `phone_number`, `email`, `address`, `note`, `order_date`, `status`) VALUES
(3, 'NGUYỄN PHƯƠNG NAM', '0123456789', 'nam@gmail.com', 'HA NOI', NULL, '2024-07-30 10:44:31', 'Đang giao'),
(4, 'nam', '0123456789', 'nam@gmail.con', 'ha noi', NULL, '2024-07-30 10:52:24', 'Đã xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `id_user`, `num`, `price`) VALUES
(3, 3, 3, 3, 1, 1089000),
(4, 4, 13, 3, 1, 999000),
(5, 4, 14, 3, 1, 1290000),
(6, 4, 15, 3, 1, 9880000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `number` float NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `thumbnail_1` varchar(500) NOT NULL,
  `thumbnail_2` varchar(500) NOT NULL,
  `thumbnail_3` varchar(500) NOT NULL,
  `thumbnail_4` varchar(500) NOT NULL,
  `thumbnail_5` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `number`, `thumbnail`, `thumbnail_1`, `thumbnail_2`, `thumbnail_3`, `thumbnail_4`, `thumbnail_5`, `content`, `id_category`, `id_sanpham`, `created_at`, `updated_at`) VALUES
(2, 'Classic Fit Big Pony Mesh Polo Shirt', 1280000, 100, 'uploads/sp1.1.jpg', 'uploads/sp1.2.jpg', 'uploads/sp1.3.jpg', 'g', 'g', 'g', '<div class=\"pdp-details-description js-clamped\" style=\"box-sizing: inherit; margin: 0px 0px 2rem; position: relative;\" founders=\"\" grotesk=\"\" text=\"\" regular\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;\"=\"\"><div class=\"pdp-details-description-in js-clamped-text\" style=\"box-sizing: inherit;\" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;=\"\" line-height:=\"\" 1.71;=\"\" -webkit-box-orient:=\"\" vertical;=\"\" -webkit-line-clamp:=\"\" 6;=\"\" display:=\"\" -webkit-box;=\"\" overflow:=\"\" hidden;=\"\" hyphens:=\"\" auto;\"=\"\"><font color=\"#041e3a\"><span style=\"font-size: 14px;\">Ralph Lauren has reimagined his signature style in a wide array of colors and fits, yet all retain the quality and attention to detail of the iconic original.</span></font></div></div><ul class=\"pdp-drawers js-pdp-drawers\" style=\"box-sizing: inherit; list-style: none; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(4, 30, 58); font-family: RL_DroidKufi, \" founders=\"\" grotesk=\"\" text=\"\" regular\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;\"=\"\"><li class=\"pdp-drawer js-pdp-drawer  \" data-end-point=\"\" data-asset-id=\"\" data-flyout-title=\"Product Details\" style=\"box-sizing: inherit; border-top-width: 1px; border-top-color: rgb(198, 200, 204);\"><button class=\"pdp-drawer-trigger js-pdp-drawer-trigger js-details\" data-drawer-class=\"js-details\" style=\"box-sizing: inherit; color: rgb(4, 30, 58); font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 0.6875rem; line-height: 10px; font-family: \" founders=\"\" grotesk=\"\" mono=\"\" regular\",=\"\" arial,=\"\" helvetica,=\"\" sans-serif;=\"\" font-optical-sizing:=\"\" inherit;=\"\" font-kerning:=\"\" font-feature-settings:=\"\" font-variation-settings:=\"\" overflow:=\"\" visible;=\"\" text-transform:=\"\" uppercase;=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" border-width:=\"\" border-style:=\"\" none;=\"\" border-color:=\"\" display:=\"\" flex;=\"\" letter-spacing:=\"\" 1px;=\"\" min-height:=\"\" 0px;=\"\" padding:=\"\" 19px=\"\" 8px;=\"\" transition:=\"\" all=\"\" 0.3s=\"\" ease=\"\" 0s;=\"\" outline:=\"\" width:=\"\" 575.65px;=\"\" max-width:=\"\" position:=\"\" relative;=\"\" flex-wrap:=\"\" wrap;=\"\" align-items:=\"\" center;\"=\"\"><div class=\"pdp-drawer-trigger-icon-wrapper\" style=\"box-sizing: inherit; width: 26px; text-align: left; font-size: 15px;\"></div></button></li></ul>', 1, 1, '2024-07-22 09:32:30', '2024-07-22 10:55:12'),
(3, 'Classic Fit Big Pony Mesh Polo Shirt', 1089000, 67, 'uploads/sp2.1.jpg', 'uploads/sp2.2.jpg', 'uploads/sp2.3.jpg', 'g', 'g', 'g', '<p><span style=\"color: rgb(4, 30, 58); font-family: LeJeuneDeck-Regular, \"Times New Roman\", Times, serif; font-size: 14px;\">Ralph Lauren has reimagined his signature style in a wide array of colors and fits, yet all retain the quality and attention to detail of the iconic original.</span><br></p>', 1, 1, '2024-07-22 09:46:45', '2024-07-22 10:30:15'),
(4, 'Áo Polo Nữ Tay Ngắn Slim Fit Stretch Polo Shirt', 2281000, 1200, 'uploads/sp3.1.jpg', 'uploads/sp3.2.jpg', 'uploads/sp3.3.jpg', 'uploads/sp3.4.jpg', 'g', 'g', '<p><span style=\"font-weight: 700; color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">POLO RALPH LAUREN</span><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">&nbsp;là một thương hiệu thời trang biểu tượng đến từ Hoa Kỳ với nét thẩm mỹ độc đáo cùng logo thêu người chơi bộ môn thể thao polo đặc trưng.</span><br></p>', 2, 1, '2024-07-22 09:24:51', '2024-07-22 09:24:51'),
(7, 'Áo Polo Nam Tay Ngắn Custom Slim Fit Polo Bear Polo Shirt', 5390000, 12, 'uploads/sp6.1.jpg', 'uploads/sp6.2.jpg', 'uploads/sp6.3.jpg', 'uploads/sp6.4.jpg', 'g', 'g', '<p><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">Thương hiệu mang khát vọng đem thời trang di sản cùng vẻ đẹp hiện đại đến với nhiều khách hàng qua các hoạt động đa lĩnh vực, từ thời trang &amp; phụ kiện, nước hoa, vật dụng nhà cửa đến nhà hàng khách sạn.</span><br></p>', 1, 1, '2024-07-22 10:31:05', '2024-07-22 10:31:05'),
(8, 'Áo Polo Nam Tay Ngắn Classic Fit Tennis-Crest Mesh Polo Shirt', 22900000, 56, 'uploads/sp7.1.jpg', 'uploads/sp7.2.jpg', 'uploads/sp7.3.jpg', 'g', 'g', 'g', '<p><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">Thương hiệu mang khát vọng đem thời trang di sản cùng vẻ đẹp hiện đại đến với nhiều khách hàng qua các hoạt động đa lĩnh vực, từ thời trang &amp; phụ kiện, nước hoa, vật dụng nhà cửa đến nhà hàng khách sạn.</span><br></p>', 1, 4, '2024-07-22 10:27:09', '2024-07-22 10:27:09'),
(9, 'Áo Len Nữ Không Tay Cable-Knit Cropped Polo Shirt', 5555560, 111, 'uploads/sp4.1.jpg', 'uploads/sp4.2.jpg', 'uploads/sp4.3.jpg', 'g', 'g', 'g', '<p><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">Thương hiệu mang khát vọng đem thời trang di sản cùng vẻ đẹp hiện đại đến với nhiều khách hàng qua các hoạt động đa lĩnh vực, từ thời trang &amp; phụ kiện, nước hoa, vật dụng nhà cửa đến nhà hàng khách sạn</span><br></p>', 2, 3, '2024-07-22 10:59:20', '2024-07-22 10:59:20'),
(10, 'Áo Polo Nữ Tay Ngắn Slim Fit Cable-Knit Polo Shirt', 9999000, 109, 'uploads/sp5.1.jpg', 'uploads/sp5.2.jpg', 'uploads/sp5.3.jpg', 'g', 'g', 'g', '<p><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">Thương hiệu mang khát vọng đem thời trang di sản cùng vẻ đẹp hiện đại đến với nhiều khách hàng qua các hoạt động đa lĩnh vực, từ thời trang &amp; phụ kiện, nước hoa, vật dụng nhà cửa đến nhà hàng khách sạn.</span><br></p>', 2, 4, '2024-07-22 10:35:23', '2024-07-22 10:35:23'),
(11, 'Áo Polo Nữ Tay Ngắn Cable-Knit Polo Shirt', 8970000, 123, 'uploads/sp8.1.jpg', 'uploads/sp8.2.jpg', 'uploads/sp5.3.jpg', 'g', 'g', 'g', '<p><span style=\"font-weight: 700; color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">POLO RALPH LAUREN</span><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">&nbsp;là một thương hiệu thời trang biểu tượng đến từ Hoa Kỳ với nét thẩm mỹ độc đáo cùng logo thêu người chơi bộ môn thể thao polo đặc trưng.</span><br></p>', 2, 3, '2024-07-22 10:13:26', '2024-07-22 10:13:26'),
(12, 'Áo Thun Map Kids', 1089000, 11, 'uploads/sp9.1.jpg', 'uploads/sp9.2.jpg', 'uploads/sp9.3.jpg', 'g', 'g', 'g', '<p><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">Mango là&nbsp;</span><span style=\"font-weight: 700; color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">nhãn hiệu thời trang quốc tế từ Tây Ban Nha</span><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">&nbsp;chuyên thiết kế, sản xuất và phân phối các sản phẩm thời trang, phụ kiện cho nam, nữ và trẻ em.</span><br></p>', 3, 3, '2024-07-22 10:58:30', '2024-07-22 10:58:30'),
(13, 'Áo Thun Vacay', 999000, 98, 'uploads/sp10.1.jpg', 'uploads/sp10.2.jpg', 'uploads/sp10.3.jpg', 'g', 'g', 'g', '<p><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">Mango là&nbsp;</span><span style=\"font-weight: 700; color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">nhãn hiệu thời trang quốc tế từ Tây Ban Nha</span><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">&nbsp;chuyên thiết kế, sản xuất và phân phối các sản phẩm thời trang, phụ kiện cho nam, nữ và trẻ em.</span><br></p>', 3, 3, '2024-07-22 10:37:33', '2024-07-22 10:37:33'),
(14, 'Áo Thun Vacay Kẻ Sọc Kids', 1290000, 121, 'uploads/sp11.2.jpg', 'uploads/sp11.1.jpg', 'uploads/sp11.3.jpg', 'g', 'g', 'g', '<p><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">Mango là&nbsp;</span><span style=\"font-weight: 700; color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">nhãn hiệu thời trang quốc tế từ Tây Ban Nha</span><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">&nbsp;chuyên thiết kế, sản xuất và phân phối các sản phẩm thời trang, phụ kiện cho nam, nữ và trẻ em.</span><br></p>', 3, 3, '2024-07-22 10:31:35', '2024-07-22 10:31:35'),
(15, 'Áo Thun Có Cổ Javier6', 9880000, 121, 'uploads/sp12.1.jpg', 'uploads/sp12.3.jpg', 'uploads/sp12.2.jpg', 'g', 'g', 'g', '<p><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">Mango là&nbsp;</span><span style=\"font-weight: 700; color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">nhãn hiệu thời trang quốc tế từ Tây Ban Nha</span><span style=\"color: rgb(0, 0, 0); font-family: Proxima; font-size: 13px; letter-spacing: 0.2px;\">&nbsp;chuyên thiết kế, sản xuất và phân phối các sản phẩm thời trang, phụ kiện cho nam, nữ và trẻ em.</span><br></p>', 3, 4, '2024-07-22 10:50:39', '2024-07-22 10:50:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `tendangnhap` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` int(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `tendangnhap`, `email`, `diachi`, `matkhau`, `dienthoai`, `role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'Ha Noi', '9999', 395566444, 'admin'),
(2, 'Bùi Khánh Toàn', 'toan', 'dsfhhjds@gmail.vcom', 'Ha Noi', '1234', 395566444, ''),
(3, 'nam', 'nam11', 'nam@gmail.com', 'ha noi', '123456789', 123456789, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`id_user`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_ibfk_1` (`product_id`),
  ADD KEY `order_details_ibfk_2` (`order_id`),
  ADD KEY `order_details_ibfk_3` (`id_user`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ibfk_1` (`id_category`),
  ADD KEY `sanpham_ibfk_1` (`id_sanpham`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `collections` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
