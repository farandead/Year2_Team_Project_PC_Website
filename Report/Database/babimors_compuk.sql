-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2022 at 02:44 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babimors_compuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `User_ID` int(11) NOT NULL,
  `User_FName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `User_SName` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_Sex` enum('Male','Female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_DOB` date DEFAULT NULL,
  `User_Status` enum('Customer','RegAdmin','Admin') COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_Phone_Number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_Email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `User_Password` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`User_ID`, `User_FName`, `User_SName`, `User_Sex`, `User_DOB`, `User_Status`, `User_Phone_Number`, `user_Email`, `User_Password`) VALUES
(19, 'Abbo', 'Baker', 'Male', '2000-11-17', 'Customer', '123446', 'wyw@mail', '$2y$10$07f6EJGn8jPOWSckh1HiE.d9d9OxbT2YCcZ8uZRTAWs3TP90S7hVm'),
(20, 'Babak', 'Anderson', 'Male', '2002-09-15', 'Admin', '1233', 'newt2est@mail.test', '$2y$10$AwrDoCx8csaiS2CAoEkmReqOD/14Twxsx2zKswvaIdjr4yo0LYPlu'),
(21, 'Babettte', 'Armstrong', 'Female', '1999-11-02', 'Admin', '123', 'ss@sa.ss', '$2y$10$96dtZi5JNdwxpoX1VcupP.YURLHu44NRNC/rD.xXa/ge7e2RJ6jLG'),
(22, 'Maarav', 'Grant', 'Male', '2002-04-08', 'Admin', '123456', 'qs@q.s', '$2y$10$z5oXbA2r1CJD5VVS7zKv6.0Kuiq79ard/mcj6NpeXTC3vzb.0W.yu'),
(23, 'Maaria', 'Harvey', 'Male', '1989-03-20', 'Customer', '123454', 'wqw@qwq.wq', '$2y$10$Rz.xgTzotOeZm4dYWhI3gubOFEjr/y02N.kBL4nv8d1KgVxNdcq3G'),
(24, 'Hackett', 'Elliott', 'Male', '2002-05-08', 'Customer', '123456', 'b@d', '$2y$10$iyKKcskJ4Wj3SGEQkeYqY.g18aXcLUJ/5FszSZrk4g5ev29/uHAU.'),
(25, 'Hades', 'Morgan', 'Male', '1987-12-08', 'Customer', '123456', 'q@qqssq.s', '$2y$10$SrF/3v6ZDKYkFGXZgAPX7uARpGWL7ULXLfOmWnJWCkF4JxvX346X2'),
(26, 'Tabby', 'Palmer', 'Male', '1998-11-08', 'Customer', '123456', 'q@qqq.s', '$2y$10$yWZeFC82Nbw.M5Bn1nbl6uJIVS0gHUFJiH/Qm0YWl/.iQn2g5bZsa'),
(27, 'Kachina', 'Parker', 'Female', '2000-01-02', 'Customer', '123', 'q@mail.ru', '$2y$10$jG2yQ5WaWZuL3tExq3PHVeXKJJAka94Jc3FusZAC2P.JE/VdOPSGq'),
(28, 'Cade', 'Robertson', 'Male', '1978-02-02', 'Customer', '123', '9111@mail.ru', '$2y$10$T2HwChwOxnRifgniURfooOQ.QOuFjQHLuNwqOc3QX90ma1QqcDt1K'),
(29, 'Kirill', 'Ushakov', 'Male', '1977-11-18', 'Admin', '123', 'admincompuk@mail.ru', '$2y$10$lI9TrZbqjL5I7/R6l1MwLOr3wQYvHb80rCevTH0DOL6ERyouQ8KQi'),
(30, 'Faran ', 'Zafar', 'Male', '2002-11-26', 'Customer', '0301747563', 'farandeadz@gmail.com', '$2y$10$VrAG6.oGx.cgzvNwY7r/8uPedeuZCRfPfQ7oD8VlhgmhWWjhzl2z6'),
(31, 'Kaarina', 'Saunders', 'Female', '1968-11-17', 'Customer', '123456', 'W@e.c', '$2y$10$9w/XArPYz2Jl5pw00S0F8ucnbrphMomPAhFaIWCml4YAJd7yyTghO'),
(32, 'Ibrahim', 'Gbanet', 'Male', '1971-05-07', 'Customer', '1234578', 'q@qq.d', '$2y$10$mogXjT0U.D2EVUFQJ1Ia3.CC4aI1bQOPmZk3YqkQFNGoiOiROgqo.'),
(33, 'Kai', 'Matthews', 'Female', '2002-01-09', 'Customer', '1259', 'qs@q.sqq', '$2y$10$9MjPcAoBXxDttGXE1a.O5.k4z9BGLUDDqx3laQ9oFW/s4xqroeYEe'),
(34, 'Uk', 'Johnston', 'Male', '2002-10-22', 'Customer', '123645', 'sas@sqw.ss', '$2y$10$/td91jypBsCof60UbpXmteSIeyMMToEdP1iDsqpASpUPtuyjt5sbe'),
(35, 'Ubon', 'Alisa', 'Female', '2000-01-17', 'Customer', '123456', 'qs@q.srr', '$2y$10$vt9mXZVl3ZEw4y/K2iQMQuqRDxTk7vq99r99u7mlDLlpcrxaK0cwG'),
(36, 'Ula', 'Kate', 'Female', '2003-11-01', 'Customer', '123456', 'qs@q.s3', '$2y$10$ankW0aV2o3G8KHUZCt.rRu1Dn87XOlf.MsxRD6wShNMCtuXRTkMSq'),
(37, 'Kirill', 'Ushakov', 'Male', '2000-01-09', 'Customer', '1233', 'emailexcompuk@mail.ru', '$2y$10$qLqSQpwsvQU/f6pvtmkLQ.o8g/gRuHiAt8U2wHw5H.cIms3mYCnkK'),
(38, 'Wattana', 'Matthews', 'Male', '1988-10-30', 'Customer', '1234567', 'ABC@123.COM', '$2y$10$ssZvvfBCjkMIsRrGtnoxz.nT8mp8Du6vk.y928ZM3/jziYdhWZZCy'),
(39, 'Ibrahim', 'Gbanet', 'Male', '2022-05-19', 'Customer', '123456789', 'a@aaaa.com', '$2y$10$iEdX5.HIa3QYiXye3hMoLOo1i1ffo/L9iYFjTxW.VTGeQ.27w1ygi'),
(40, 'Ibrahim ', 'Gbanet ', 'Male', '2022-12-07', 'Customer', '123456789', 'IGbanet@gmail.com', '$2y$10$VWn7YVmms3krTeqWnrUHa.ZlIgVjVYxx9XJtmJHDV.k2PiD2L20oC'),
(41, 'we', 'we', 'Male', '2022-12-09', 'Customer', '1214', 'rr@wjk.c', '$2y$10$396n8TyvkQgezlxQNuzv3u7GIeQP94mSXvCJci842sMaRcvXtSTHi'),
(42, 'ibrahim', 'Gbanet', 'Male', '2022-12-09', 'Customer', '123456789', 'Gib_@outlook.com', '$2y$10$vFA57A64dJYdrlFbHzPR/uE4x9gJV1g5dVjr1U//K.ue5yPNfQqlC'),
(43, 'Ibrahim ', 'aa', 'Female', '2022-12-03', 'Customer', '42424242', 'IGbagfnet@gmail.com', '$2y$10$S5DYvzMPahUBWgP/7Rxz5OCU7GLzoWECDKGy3xX/of/4TlN1n.AD6'),
(44, 'Ibrahim ', 'Gbanet ', 'Male', '2022-12-12', 'Customer', '123456789', 'gIbrahim@gmail.com', '$2y$10$yPMXtES61eO9TNf.u6yLo.PTtW5pKx31BFa8LpmN6PUucRZwFOvf.'),
(45, 'Ibrahim ', 'Gbanet ', 'Female', '2022-12-06', 'Customer', '0616165255', 'gvfg@gmail.com', '$2y$10$uGtNL6CAtNtn.C3JS0za7eHXF0JtVOlZRdu.nHEvVtt9n371qGMk6'),
(46, 'Ibrahim ', 'Gbanet ', 'Male', '2022-12-07', 'Customer', '123456789', 'IGbanet22@gmail.com', '$2y$10$FyqFFq166bZ1/rIaw/RrnOyuS3R4evHSRCa9pmvTIMG3vO6sp5pdW'),
(47, 'Ibrahim ', 'Gbanet ', 'Male', '2022-12-06', 'Customer', '5452125487', 'IG22banet@gmail.com', '$2y$10$UmCMZOfXgUWpFmnTiKG/g.tW2DzbkeGvZqpuwpJHsiCYwDn7RyR4m'),
(48, 'Ibrahim ', 'Gbanet ', 'Male', '2022-12-07', 'Customer', '452215458', 'I55Gbanet@gmail.com', '$2y$10$ZHvS5om.jclGcaEginh9KeYMnusajkNLPQN2HqujIeIbQgiugU7Dq'),
(49, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-03', 'Customer', '14253636', 'IGbane@gmail.com', '$2y$10$5To24KZsu2tY.d8Wxh6bROxIM2m5WWF6AWi2J0VLa4hbFtOaAmzoG'),
(50, 'Ibrahim ', 'Gbanet ', 'Male', '2022-12-07', 'Customer', '125478996', 'IGban@gmail.com', '$2y$10$F1X7LxpJv4pMQHMY.zIkXOXnFZIFLUpWp/orOWtPAsrkFc2J8R/jC'),
(51, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-28', 'Customer', '12121254', 'IGba@gmail.com', '$2y$10$wDVTLy4fsjHA4P7ibwlMqOyk.BNO3.7mSiQucSblJmLZil0IsR92G'),
(52, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-28', 'Customer', '1252145475', 'IG@gmail.com', '$2y$10$xxpWW6uh0VvCicoOJzqdwe7SjXrDNDcLJ6xAJJhAc1Oe74nZPvjPm'),
(53, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-28', 'Customer', '458564589', 'GBANETi@gmail.com', '$2y$10$rWgGXpAAcQHbyhgVhZ5SNuEgd57u/N9Y5bLhIrh.aUJ06kuNJ6daC'),
(54, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-28', 'Customer', '123654789', 'iBG@gmail.com', '$2y$10$LypRfN4Wts2rH/qzqF0Xoe0choi8j4/JWr/IiDicGOCILqQfBOpV6'),
(55, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-29', 'Customer', '123456789', 'IGbwnet@gmail.com', '$2y$10$2wU6qWWwJsv5rd/3SnAdUO336277RYgfhNc1cQiWpCLb53l2wUULG'),
(56, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-28', 'Customer', '7452395245', 'IGbanet@gmail.uk', '$2y$10$L8yt4n.DP7z2dZxIiwx1Zebr3d/TSXxWz/Y/wi0I/CtAzV68Tl6bK'),
(57, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-28', 'Customer', '1215456134', 'IgbanetI@gmail.uk', '$2y$10$J6rWY1T13G7R/EBBCzrmz.HoFK2dadxcpRahYr2s.EOOLl6/GjXOa'),
(58, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-28', 'Customer', '78546965', 'anet@gmail.uk', '$2y$10$wpDfiGEa.xghJbxLaSdteOUGue7m.CxZp/NsvacnEaD5OfMLoOsA6'),
(59, 'Ibrahim ', 'Gbanet ', 'Male', '2022-11-28', 'Customer', '7523951753', 'IGban2@gmail.com', '$2y$10$hr7sw3/6Li7DouYOe1Od.uc31wJXVAO3qFZ1LaNv.x97I9xs4txKO');

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `Cat_ID` int(11) NOT NULL,
  `Cat_Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Cat_ID`, `Cat_Name`) VALUES
(1, 'Gaming Desktop pc'),
(2, 'Gaming Laptops'),
(3, 'Desktop pc'),
(4, 'Laptops'),
(5, 'Keyboards'),
(6, 'Monitors'),
(7, 'Mouses');

-- --------------------------------------------------------

--
-- Table structure for table `Delivery_address`
--

CREATE TABLE `Delivery_address` (
  `Address_ID` int(11) NOT NULL,
  `ZIP` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Street` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Address_Status` enum('Accessible','Hidden','Default','') COLLATE utf8_unicode_ci NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Delivery_address`
--

INSERT INTO `Delivery_address` (`Address_ID`, `ZIP`, `City`, `Country`, `Street`, `Address_Status`, `User_ID`) VALUES
(2, 'B79TU', 'Birmingham', 'England', 'Central', 'Hidden', 29),
(3, 'qwe', 'testd', 'testd', 'testd', 'Hidden', 29),
(4, 'testh', 'testh', 'testh', 'testh', 'Hidden', 29),
(5, 'Q22', 'QWE', 'Malaysia', 'QWE', 'Hidden', 29),
(6, '02123', 'Birmingham', 'Buu', '102 street', 'Accessible', 22),
(7, 'B4 7AG', 'Birmingham', 'United Kingdom', 'IQ STUDENT ACCOMODAT', 'Hidden', 29),
(8, 'B4 7AG', 'Birmingham', 'United Kingdom', 'IQ STUDENT ACCOMODAT', 'Accessible', 30),
(9, 'Q22', 'QWE', 'Malaysia', 'QWE', 'Hidden', 29),
(10, 'Q22', 'QWE', 'Malaysiattt', 'QWE', 'Hidden', 29),
(11, 'B57ZE', 'Birmingham', 'England', 'Bromsgrove 96', 'Default', 37),
(12, 'A23VR', 'London', 'England', 'Central 21', 'Accessible', 37),
(13, 'yx', 'milan', 'italy', 'xy', 'Hidden', 29),
(14, 'h', 'y', 'v', 'h', 'Hidden', 29),
(15, 'hhh', 'uuu', 'yy', 'hh', 'Hidden', 29),
(16, 'mm', 'hh', 'yy', 'k', 'Hidden', 29),
(17, 'ppp', 'hhh', 'yy', 'ii', 'Default', 29);

-- --------------------------------------------------------

--
-- Table structure for table `Linked_Address_and_Order`
--

CREATE TABLE `Linked_Address_and_Order` (
  `Order_ID` int(11) NOT NULL,
  `Address_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Linked_Address_and_Order`
--

INSERT INTO `Linked_Address_and_Order` (`Order_ID`, `Address_ID`) VALUES
(8, 2),
(17, 3),
(18, 2),
(10, 2),
(20, 2),
(19, 2),
(21, 2),
(23, 5),
(24, 5),
(27, 5),
(31, 5),
(32, 5),
(30, 5),
(36, 5),
(36, 5),
(33, 5),
(34, 5),
(35, 5),
(37, 5),
(38, 5),
(39, 5),
(40, 5),
(41, 5),
(42, 5),
(43, 5),
(47, 5),
(48, 5),
(49, 6),
(50, 6),
(51, 6),
(59, 8),
(60, 8),
(22, 11),
(26, 11),
(63, 11),
(64, 11),
(28, 12),
(66, 11),
(29, 12),
(68, 11),
(69, 11),
(61, 11),
(71, 12),
(62, 11),
(73, 11),
(74, 11),
(75, 11),
(76, 11),
(78, 11),
(79, 11);

-- --------------------------------------------------------

--
-- Table structure for table `Linked_Order_and_Products`
--

CREATE TABLE `Linked_Order_and_Products` (
  `Amount_Product` int(2) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Linked_Order_and_Products`
--

INSERT INTO `Linked_Order_and_Products` (`Amount_Product`, `Product_ID`, `Order_ID`) VALUES
(1, 12, 8),
(1, 13, 8),
(1, 15, 17),
(1, 14, 18),
(2, 12, 10),
(5, 14, 10),
(5, 14, 20),
(1, 3, 19),
(4, 14, 22),
(4, 14, 23),
(2, 15, 23),
(1, 15, 21),
(1, 14, 26),
(1, 14, 28),
(1, 12, 29),
(4, 14, 24),
(1, 14, 23),
(1, 14, 24),
(1, 14, 27),
(1, 14, 31),
(1, 14, 32),
(1, 14, 30),
(2, 4, 36),
(1, 3, 33),
(1, 13, 34),
(1, 13, 35),
(1, 13, 37),
(1, 13, 38),
(1, 13, 39),
(1, 13, 40),
(1, 13, 41),
(1, 13, 42),
(1, 12, 43),
(1, 14, 47),
(1, 14, 48),
(1, 13, 49),
(1, 4, 49),
(1, 3, 50),
(1, 4, 49),
(1, 4, 50),
(1, 3, 51),
(1, 12, 54),
(1, 12, 55),
(1, 12, 56),
(1, 4, 25),
(1, 4, 57),
(1, 15, 57),
(1, 14, 58),
(1, 15, 59),
(1, 13, 60),
(1, 28, 22),
(1, 28, 26),
(3, 15, 63),
(2, 14, 63),
(2, 15, 64),
(3, 14, 64),
(1, 15, 28),
(2, 15, 66),
(4, 14, 66),
(1, 14, 29),
(4, 14, 68),
(2, 15, 68),
(3, 28, 69),
(2, 15, 69),
(1, 14, 61),
(2, 4, 71),
(3, 14, 71),
(1, 14, 62),
(2, 4, 73),
(3, 28, 73),
(2, 4, 74),
(3, 14, 74),
(2, 14, 75),
(3, 15, 75),
(2, 14, 76),
(3, 28, 76),
(2, 15, 77),
(3, 14, 77),
(2, 15, 78),
(4, 28, 78),
(2, 15, 79),
(4, 14, 79);

-- --------------------------------------------------------

--
-- Table structure for table `Manufacture`
--

CREATE TABLE `Manufacture` (
  `Man_ID` int(11) NOT NULL,
  `Man_Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Man_Link` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Manufacture`
--

INSERT INTO `Manufacture` (`Man_ID`, `Man_Name`, `Man_Link`) VALUES
(1, 'Logitech', 'https://www.logitechg.com/en-gb'),
(2, 'Razer', 'https://www.razer.com/gb-en'),
(3, 'ASUS', 'https://www.box.co.uk/asus-store?cq_src=bing_ads&cq_cmp=%5bAntonia+D+%26+Chris+B%5d+Brand+Store+-+ASUS+(MK)&cq_con=ASUS+Store&cq_term=ASUS+Laptops&cq_med=&cq_net=o&cq_plt=bp&msclkid=df10dcf4063b12f47b68bf7e58b0908e&utm_source=bing&utm_medium=cpc&utm_'),
(4, 'AlphaSync', 'https://www.alphasync.com/'),
(5, 'acer', 'https://store.acer.com/en-gb/laptops/everyday?processor_filter=10026&gclid=2ce2b9876f1414b1ab0cda0d3070077f&gclsrc=3p.ds&msclkid=2ce2b9876f1414b1ab0cda0d3070077f&utm_source=bing&utm_medium=cpc&utm_campaign=Intel-Compliant_BrandProCat_Aspire_Laptop_BM'),
(6, 'Lenovo', 'https://www.lenovo.com/gb/en/d/build-your-own/?orgRef=https%253A%252F%252Fwww.bing.com%252F&utm_medium=cpc&sort=discount-percent-desc&resultsLayoutType=grid&cid=gb%3Asem%7Cse%7Cmicrosoft%7CB-UK-SEM-ROOT-PUBLIC-CCF-LF-Search-%5BRoot%5D%7CLenovoWebsite'),
(7, 'Apple', 'https://www.apple.com/uk/'),
(8, 'LG', 'https://www.lg.com/uk'),
(9, 'MSI', 'https://uk.msi.com/'),
(10, 'HP', 'https://www.bing.com/search?q=hp+website&cvid=2daf9a8bf20e436c9e0cfd4aaf48bf92&aqs=edge.1.69i57j0l8.3712j0j9&FORM=ANAB01&PC=LCTS'),
(11, 'Xenta', 'http://xenta.co.uk/about/'),
(12, 'Microsoft', 'https://www.microsoft.com/en-gb'),
(13, 'Cherry', 'https://www.cherry.co.uk/cherry-stream-keyboard.html');

-- --------------------------------------------------------

--
-- Table structure for table `OrderP`
--

CREATE TABLE `OrderP` (
  `Order_ID` int(11) NOT NULL,
  `Order_Status` enum('Basket','InProcess','Shiped','Delivered','Declined','BuyNow') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Total_Price` float NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `OrderP`
--

INSERT INTO `OrderP` (`Order_ID`, `Order_Status`, `Total_Price`, `User_ID`) VALUES
(8, 'Delivered', 6026.67, 29),
(10, 'Shiped', 3439.93, 29),
(17, 'InProcess', 626.05, 29),
(18, 'InProcess', 263.99, 29),
(19, 'Declined', 0, 29),
(20, 'InProcess', 1319.95, 29),
(21, 'InProcess', 598.98, 29),
(22, 'InProcess', 1055.96, 37),
(23, 'InProcess', 2308.06, 29),
(24, 'InProcess', 1055.96, 29),
(25, 'Basket', 2296.97, 38),
(26, 'InProcess', 263.99, 37),
(27, 'InProcess', 626.05, 29),
(28, 'InProcess', 263.99, 37),
(29, 'InProcess', 1059.99, 37),
(30, 'InProcess', 263.99, 29),
(31, 'InProcess', 263.99, 29),
(32, 'InProcess', 263.99, 29),
(33, 'InProcess', 263.99, 29),
(34, 'InProcess', 263.99, 29),
(35, 'InProcess', 263.99, 29),
(36, 'InProcess', 4593.94, 29),
(37, 'InProcess', 598.98, 29),
(38, 'InProcess', 4976.68, 29),
(39, 'InProcess', 4976.68, 29),
(40, 'InProcess', 4976.68, 29),
(41, 'InProcess', 4976.68, 29),
(42, 'InProcess', 4976.68, 29),
(43, 'InProcess', 4976.68, 29),
(47, 'InProcess', 263.99, 29),
(48, 'InProcess', 263.99, 29),
(49, 'InProcess', 7273.65, 22),
(50, 'InProcess', 598.98, 22),
(51, 'InProcess', 2296.97, 22),
(52, 'BuyNow', 2296.97, 22),
(53, 'BuyNow', 598.98, 22),
(54, 'BuyNow', 1059.99, 29),
(55, 'BuyNow', 1059.99, 22),
(56, 'BuyNow', 1059.99, 29),
(57, 'BuyNow', 2923.02, 29),
(58, 'BuyNow', 263.99, 29),
(59, 'InProcess', 626.05, 30),
(60, 'InProcess', 4976.68, 30),
(61, 'InProcess', 719.98, 37),
(62, 'InProcess', 719.98, 37),
(63, 'InProcess', 2406.13, 37),
(64, 'InProcess', 2045.97, 37),
(65, 'BuyNow', 627, 37),
(66, 'InProcess', 2309.96, 37),
(67, 'BuyNow', 263.99, 37),
(68, 'InProcess', 2309.96, 37),
(69, 'InProcess', 3413.94, 37),
(70, 'BuyNow', 263.99, 37),
(71, 'InProcess', 5339.97, 37),
(72, 'BuyNow', 263.99, 37),
(73, 'InProcess', 6524.18, 37),
(74, 'InProcess', 5156.21, 37),
(75, 'InProcess', 2408.98, 37),
(76, 'InProcess', 2687.92, 37),
(77, 'BuyNow', 2045.97, 37),
(78, 'InProcess', 4133.92, 37),
(79, 'InProcess', 2309.96, 37);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Product_Discount` int(3) NOT NULL,
  `Product_Price` float NOT NULL,
  `Man_ID` int(11) NOT NULL,
  `Cat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Product_ID`, `Product_Name`, `Product_Discount`, `Product_Price`, `Man_ID`, `Cat_ID`) VALUES
(2, 'Logitech M705 Wireless Mouse ', 10, 43.95, 1, 7),
(3, 'ASUS TUF Gaming A15 FA506IHR', 2, 598.98, 3, 2),
(4, 'ASUS ROG Zephyrus ', 5, 2296.97, 3, 2),
(5, 'Razer Blade 17 Gaming Laptop', 3, 4983, 2, 2),
(12, 'AlphaSync PBA Diamond 3060Ti Gaming PC, AMD Ryzen ', 0, 1059.99, 4, 1),
(13, 'AlphaSync PBA iCUE 7000X RTX 3090 AMD Ryzen 9 5950', 0, 4976.68, 4, 1),
(14, 'Acer Aspire XC-840 Desktop PC Intel Pentium N6005,', 20, 329.99, 5, 3),
(15, 'Lenovo ThinkCentre Neo 30A AIO Desktop PC, Intel C', 5, 660, 6, 3),
(16, 'Apple iMac Retina 5K Display 27\" Intel Core i5 10t', 0, 1909.98, 7, 3),
(17, 'Xenta Black Wired Optical Scroll Mouse - USB', 0, 4.98, 11, 7),
(18, 'Razer DeathAdder V3 Pro Wireless Gaming Mouse, Whi', 0, 149.99, 2, 7),
(19, 'Microsoft Wired Keyboard 600 Black - USB', 0, 10.98, 12, 5),
(20, 'Cherry Stream Wireless Keyboard, Black', 0, 41.61, 13, 5),
(21, 'Logitech G G815 RGB Tactile Mechanical Gaming Keyb', 0, 41.61, 1, 5),
(22, 'LG 24\" Class Full HD IPS LED Monitor', 0, 99.99, 8, 6),
(23, 'MSI Optix G27CQ4 27\" WQHD VA FreeSync 165Hz 1ms Cu', 0, 329.99, 9, 6),
(24, 'LG 32EP950 31.5\" Ultra HD OLED 1ms Monitor', 0, 3299.99, 8, 6),
(25, 'HP 255 G8 Ryzen 5 8GB 256GB SSD 15.6\" Win10 Pro La', 0, 459.98, 10, 4),
(26, 'Apple MacBook Air (2022), Apple M2 Chip 8-core CPU', 0, 1170.78, 7, 4),
(27, 'Lenovo ThinkPad P15 Gen 2 Intel Core i7-11850H 16G', 0, 1977.99, 6, 4),
(28, 'AlphaSync Onyx RTX 3060 Gaming Desktop PC, AMD Ryz', 10, 799.98, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `Delivery_address`
--
ALTER TABLE `Delivery_address`
  ADD PRIMARY KEY (`Address_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `Linked_Address_and_Order`
--
ALTER TABLE `Linked_Address_and_Order`
  ADD KEY `Order_ID` (`Order_ID`),
  ADD KEY `Address_ID` (`Address_ID`);

--
-- Indexes for table `Linked_Order_and_Products`
--
ALTER TABLE `Linked_Order_and_Products`
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `Order_ID` (`Order_ID`);

--
-- Indexes for table `Manufacture`
--
ALTER TABLE `Manufacture`
  ADD PRIMARY KEY (`Man_ID`);

--
-- Indexes for table `OrderP`
--
ALTER TABLE `OrderP`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Man_ID` (`Man_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Cat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Delivery_address`
--
ALTER TABLE `Delivery_address`
  MODIFY `Address_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Manufacture`
--
ALTER TABLE `Manufacture`
  MODIFY `Man_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `OrderP`
--
ALTER TABLE `OrderP`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Delivery_address`
--
ALTER TABLE `Delivery_address`
  ADD CONSTRAINT `Delivery_address_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `account` (`User_ID`);

--
-- Constraints for table `Linked_Address_and_Order`
--
ALTER TABLE `Linked_Address_and_Order`
  ADD CONSTRAINT `Linked_Address_and_Order_ibfk_2` FOREIGN KEY (`Order_ID`) REFERENCES `OrderP` (`Order_ID`),
  ADD CONSTRAINT `Linked_Address_and_Order_ibfk_3` FOREIGN KEY (`Address_ID`) REFERENCES `Delivery_address` (`Address_ID`);

--
-- Constraints for table `Linked_Order_and_Products`
--
ALTER TABLE `Linked_Order_and_Products`
  ADD CONSTRAINT `Linked_Order_and_Products_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `Product` (`Product_ID`),
  ADD CONSTRAINT `Linked_Order_and_Products_ibfk_2` FOREIGN KEY (`Order_ID`) REFERENCES `OrderP` (`Order_ID`);

--
-- Constraints for table `OrderP`
--
ALTER TABLE `OrderP`
  ADD CONSTRAINT `OrderP_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `account` (`User_ID`);

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`Man_ID`) REFERENCES `Manufacture` (`Man_ID`),
  ADD CONSTRAINT `Product_ibfk_2` FOREIGN KEY (`Cat_ID`) REFERENCES `Category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
