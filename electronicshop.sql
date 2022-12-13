-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 04, 2017 lúc 12:38 AM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `electronicshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_amin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_amin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_amin`, `username`, `password`) VALUES
(1, 'ngoccan', '30071997');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

DROP TABLE IF EXISTS `mathang`;
CREATE TABLE IF NOT EXISTS `mathang` (
  `id_mathang` int(11) NOT NULL AUTO_INCREMENT,
  `tenmathang` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_mathang`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`id_mathang`, `tenmathang`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Tablette'),
(4, 'Máy ảnh'),
(5, 'Máy tính bảng'),
(6, 'Smartwatch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhieu`
--

DROP TABLE IF EXISTS `nhanhieu`;
CREATE TABLE IF NOT EXISTS `nhanhieu` (
  `id_nhanhieu` int(11) NOT NULL AUTO_INCREMENT,
  `tennhanhieu` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_nhanhieu`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhieu`
--

INSERT INTO `nhanhieu` (`id_nhanhieu`, `tennhanhieu`) VALUES
(1, 'Nokia'),
(2, 'Samsung'),
(3, 'Sony'),
(4, 'Canon'),
(5, 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id_sp` int(11) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_mathang` int(100) NOT NULL,
  `id_nhanhieu` int(100) NOT NULL,
  `soluong` int(100) NOT NULL,
  `mota` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia` int(100) NOT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `id_mathang` (`id_mathang`),
  KEY `id_nhanhieu` (`id_nhanhieu`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `hinhanh`, `id_mathang`, `id_nhanhieu`, `soluong`, `mota`, `gia`) VALUES
(1, 'Nokia 3', 'nokia-3-2-400x460.png', 1, 1, 100, '<p>Sự trở lại của&nbsp;NOKIA</p>', 2999000),
(2, 'Samsung Galaxy S8', '5770905cv20d.jpg', 1, 2, 20, '<p>Tuyệt t&aacute;c</p>', 12000000),
(3, 'Tablette Samsung galaxy 4', 'ee784cce063872b3a4eb4ef244ba6.jpg', 3, 2, 10, '<p>Đa năng cho cuộc sống đa sắc m&agrave;u</p>', 9999000),
(4, 'Iphone X', '101445-913201720152am_635_iphone_x.jpeg', 1, 5, 15, '<p>Sản phẩm mới của Apple</p>\r\n<p>Điện thoại l&agrave; phải thế</p>', 36000000),
(5, 'Máy ảnh Canon Power Shot SX-420', 'may-anh-canon-power-shot-sx-420-is-Z823cX.png', 4, 4, 35, '<p>Bắt trọn từng khoảnh khắc</p>', 17500000),
(6, 'Sony s_watch', '1509325967794337472.jpg', 6, 3, 50, '<p>Đồng hồ ki&ecirc;m điện thoại!</p>\r\n<p>Why not?</p>', 79990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tk_khach`
--

DROP TABLE IF EXISTS `tk_khach`;
CREATE TABLE IF NOT EXISTS `tk_khach` (
  `id_khach` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhach` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` int(255) NOT NULL,
  PRIMARY KEY (`id_khach`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tk_khach`
--

INSERT INTO `tk_khach` (`id_khach`, `tenkhach`, `matkhau`, `email`, `diachi`, `sdt`) VALUES
(1, 'Lãnh Nguyệt Thiên Phong', 'ngoccan', 'ngoccan@gmail.com', '20/25 Trần Văn Ơn', 178990009),
(3, 'Lê La', 'lela', 'lela@yahoo.com', '12/21  Lê Lai', 987654321),
(4, 'Andrea', 'andrea', 'adrea@gmail.com', '22/44/14 Hàng Dệt', 978564231);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
