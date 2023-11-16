-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2023 lúc 12:55 PM
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
-- Cơ sở dữ liệu: `shopnuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(200) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten`) VALUES
(18, 'Hermes'),
(19, 'Gucci'),
(22, 'Dior'),
(23, 'Calvin Klein'),
(24, 'Guerlain'),
(25, 'Burberry');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `ghichu` varchar(200) NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sanpham_thetich` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `hinh` varchar(100) DEFAULT NULL,
  `xuatxu` varchar(50) DEFAULT NULL,
  `phongcach` varchar(50) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `hinh`, `xuatxu`, `phongcach`, `mota`, `iddm`) VALUES
(1, 'Nước hoc Dior đặc biệt sản phẩm ', 'WIN_20220813_02_57_25_Pro.jpg', 'Mỹ', 'Trẻ Trung', '11', 18),
(2, 'Hàng đểu chỉ tặng đéo bán ', 'WIN_20220814_13_17_50_Pro.jpg', 'Tây Ba Nha', 'Cá Tính ', '1', 19),
(3, 'cục cứt ', '', '41', '42', '121', 18),
(4, 'Mercedes Benz Club Black Men EDT', '', 'Mỹ', 'Trẻ Trung', '', 18),
(5, 'Nước Hoa Dior Mini Miss Dior La Collection', '', 'Pháp', 'Thanh lịch, ngọt ngào', '', 22),
(6, 'Nước Hoa Gucci Bloom EDP', '', 'Pháp', 'Lịch lãm, quý tộc', '', 19),
(7, 'Nước Hoa CK Obsession EDT', '', 'Mỹ', 'Cổ điển', '', 23),
(8, 'Nước Hoa The Beat For Men', '', 'Anh', 'Trẻ Trung', '', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_thetich`
--

CREATE TABLE `sanpham_thetich` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_thetich` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_thetich`
--

INSERT INTO `sanpham_thetich` (`id`, `id_sanpham`, `id_thetich`, `gia`, `soluong`, `trangthai`) VALUES
(1, 1, 1, 249000, 15, 2),
(2, 1, 2, 479000, 30, 2),
(3, 1, 3, 500000, 1, 2),
(7, 3, 1, 2500000, 0, 2),
(8, 3, 2, 150000, 50, 1),
(9, 2, 1, 249000, 20, 1),
(10, 4, 1, 300000, 0, 1),
(11, 5, 2, 350000, 20, 1),
(12, 5, 1, 180000, 20, 1),
(13, 5, 3, 750000, 30, 1),
(14, 7, 1, 230000, 40, 1),
(15, 7, 2, 450000, 0, 1),
(16, 7, 3, 1179000, 0, 1),
(17, 4, 2, 550000, 0, 1),
(18, 8, 1, 200000, 100, 1),
(19, 8, 2, 380000, 150, 1),
(20, 8, 3, 850000, 50, 1),
(21, 2, 2, 479000, 12, 1),
(22, 2, 3, 1159000, 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(13) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `capbac` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thetich`
--

CREATE TABLE `thetich` (
  `id` int(11) NOT NULL,
  `thetich` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thetich`
--

INSERT INTO `thetich` (`id`, `thetich`) VALUES
(1, '100ml'),
(2, '200ml'),
(3, '500ml');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_donhang` (`id_donhang`),
  ADD KEY `giohang_ibfk_2` (`id_sanpham_thetich`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `sanpham_thetich`
--
ALTER TABLE `sanpham_thetich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_thetich` (`id_thetich`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thetich`
--
ALTER TABLE `thetich`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham_thetich`
--
ALTER TABLE `sanpham_thetich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thetich`
--
ALTER TABLE `thetich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`id_sanpham_thetich`) REFERENCES `sanpham_thetich` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `sanpham_thetich`
--
ALTER TABLE `sanpham_thetich`
  ADD CONSTRAINT `sanpham_thetich_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `sanpham_thetich_ibfk_2` FOREIGN KEY (`id_thetich`) REFERENCES `thetich` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
