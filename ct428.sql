-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2021 lúc 05:25 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct428`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `sodondh` varchar(5) NOT NULL,
  `mshh` varchar(5) NOT NULL,
  `soluong` tinyint(4) NOT NULL,
  `giadathang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `sodonhd` varchar(5) NOT NULL,
  `mskh` varchar(5) NOT NULL,
  `msnv` varchar(5) DEFAULT NULL,
  `ngayhd` datetime NOT NULL,
  `trangthai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mshh` varchar(5) NOT NULL,
  `tenhh` varchar(50) NOT NULL,
  `gia` varchar(10) DEFAULT NULL,
  `soluonghang` tinyint(4) NOT NULL,
  `manhom` varchar(5) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `motahh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mshh`, `tenhh`, `gia`, `soluonghang`, `manhom`, `hinh`, `motahh`) VALUES
('ip02', 'Iphone 12 64GB', '23.990', 5, 'ip12', 'iphone1264gb.jpg', 'Iphone 12 64GB'),
('ip03', 'Iphone 12 Mini 64GB', '19.290', 10, 'ip12', 'iphone-12-mini-64gb.jpg', 'Iphone 12 Mini 64GB'),
('ip04', 'Điện thoại iPhone 12 Pro 256GB', '33.990', 15, 'ip12', 'iphone12pro256gb.jpg', 'Điện thoại iPhone 12 Pro 256GB\r\nmau đen'),
('ip05', 'Điện thoại iPhone 12 Pro Max 512GB', '41.290', 100, 'ip12', 'iphone12promax512gb.jpg', 'Điện thoại iPhone 12 Pro Max 512GB\r\n'),
('ip06', 'Điện thoại iPhone 11 64GB', '16.890', 12, 'ip11', 'ip1164gbred.jpg', 'Điện thoại iPhone 11 64GB'),
('ip07', 'Điện thoại iPhone 11 128GB', '19.490', 20, 'ip11', 'iphone-11-128gb-green.jpg', 'Điện thoại iPhone 11 128GB'),
('ip08', 'Điện thoại iPhone 11 Pro 256GB', '28.990', 12, 'ip11', 'iphone-11-pro-xam.jpg', 'Điện thoại iPhone 11 Pro 256GB'),
('ip09', 'Điện thoại iPhone 11 256GB', '21.990', 10, 'ip11', 'iphone-11-256gb-black.jpg', 'Điện thoại iPhone 11 256GB'),
('mb01', 'Laptop MacBook Pro 2020 M1/8GB/512GB ', '39.990', 5, 'lap01', 'apple-macbook-pro-2020.jpg', 'Laptop Apple MacBook Pro 2020 M1/8GB/512GB (MYD92SA/A)'),
('mb02', 'Apple MacBook Air 2020 M1/8GB/512GB', '34.990', 5, 'lap01', 'apple-macbook-air-2020.jpg', 'Laptop Apple MacBook Air 2020 M1/8GB/512GB (MGN73SA/A)'),
('mb03', 'Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB', '18.990', 15, 'lap01', 'apple-macbook-air1.jpg', 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)'),
('mb04', 'Apple MacBook Air 2020 M1/8GB/256GB', '28.990', 14, 'lap01', 'apple-macbook-air-20201.jpg', 'Apple MacBook Air 2020 M1/8GB/256GB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` varchar(5) NOT NULL,
  `HoTenKH` varchar(50) NOT NULL,
  `Diachi` varchar(50) NOT NULL,
  `Sodienthoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `msnv` varchar(5) NOT NULL,
  `hotennv` varchar(50) NOT NULL,
  `chucvu` varchar(50) NOT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `sodienthoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`msnv`, `hotennv`, `chucvu`, `diachi`, `sodienthoai`) VALUES
('nv01', 'Nguyễn Văn Lê', 'Nhân viên bán hàng', 'Cần Thơ', '0987654147'),
('nv02', 'Lê Đức Bo', 'Nhân viên bán hàng', 'Cần Thơ', '0971581462'),
('nv03', 'Nguyễn Thị Linh', 'Nhân viên bán hàng', 'Bến Tre', '0387871223'),
('nv04', 'Trần Nguyễn Lê Đinh', 'Nhân viên bán hàng', 'Kiên Giang', '0385185100');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomhanghoa`
--

CREATE TABLE `nhomhanghoa` (
  `manhom` varchar(5) NOT NULL,
  `tenhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhomhanghoa`
--

INSERT INTO `nhomhanghoa` (`manhom`, `tenhom`) VALUES
('ip11', 'iphone11'),
('ip12', 'iphone12'),
('lap01', 'Laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `tendangnhap` varchar(20) NOT NULL,
  `matkhau` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`tendangnhap`, `matkhau`) VALUES
('dang123', '1470aad22bf0f157d732'),
('dang26', 'e10adc3949ba59abbe56'),
('thoconxinhxan', '236adb2cc11895ca09fc'),
('meocon', '493f6b3e69a805edb92d'),
('dang12345', 'cfeb30b061a4b669fa3a4e9ecd6f3abe');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`sodondh`,`mshh`),
  ADD KEY `fk_mshh` (`mshh`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`sodonhd`),
  ADD KEY `fk_mskh` (`mskh`),
  ADD KEY `fk_msnv` (`msnv`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mshh`),
  ADD KEY `fk_manhom` (`manhom`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`msnv`);

--
-- Chỉ mục cho bảng `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  ADD PRIMARY KEY (`manhom`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `fk_sodondh` FOREIGN KEY (`sodondh`) REFERENCES `dathang` (`sodonhd`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `fk_msnv` FOREIGN KEY (`msnv`) REFERENCES `nhanvien` (`msnv`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `fk_manhom` FOREIGN KEY (`manhom`) REFERENCES `nhomhanghoa` (`manhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
