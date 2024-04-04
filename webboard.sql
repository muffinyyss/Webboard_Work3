-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 06:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'เรื่องทั่วไป'),
(2, 'เรื่องเรียน'),
(3, 'เรื่องกีฬา'),
(4, 'เรื่องดราม่า'),
(5, 'Serial port'),
(6, 'เรื่องสอบ'),
(7, 'เรื่องกยศ'),
(8, 'เรื่องเพลง'),
(9, 'เรื่องไร้สาระ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(20148) NOT NULL,
  `post_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `post_date`, `user_id`, `post_id`) VALUES
(1, 'ถ้าไทยชนะ โคเรียดองจะลดเหลือ 26 บาท', '2024-04-02 21:43:27', 1, 5),
(2, 'แม่งโคตรกาก', '2024-04-02 21:44:00', 1, 5),
(3, 'เข้าใจๆๆๆๆๆ', '2024-04-02 21:44:20', 1, 4),
(4, 'F แน่เลย อาจารย์สินไม่รู้เรื่องเลย', '2024-04-02 21:44:47', 1, 3),
(5, '555555555555555555555555555', '2024-04-02 21:45:00', 1, 2),
(6, 'ชาบูวววว gogo', '2024-04-02 21:45:27', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `post_date` datetime NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `post_date`, `cat_id`, `user_id`) VALUES
(1, 'กินข้าวอะไรดี?', 'หิวแต่คิดไม่ออกว่าจะกินอะไรดี', '2024-04-02 21:39:22', 1, 1),
(2, '55555555', 'ฟห่ดห่กเรไีนบหสกสยบสหกด', '2024-04-02 21:39:39', 1, 1),
(3, 'วิชา Microcontroller จะ F ไหม', 'เรียนไม่เข้าใจเลย', '2024-04-02 21:40:18', 2, 1),
(4, 'กกดกดเดกเกดเด', 'ดเกดเกดเกดเกดเกดเกดเกดเกดเกดเกดเกดเ', '2024-04-02 21:40:44', 2, 1),
(5, 'บอล ไทย vs เกาหลี', '0-3 จุกๆ', '2024-04-02 21:41:25', 3, 1),
(6, 'ง่วงงงงง', 'ง่วงมาก', '2024-04-02 21:48:30', 2, 2),
(11, 'Valorant PRX vs Kaowpadkai', 'ข้าวผัดไข่ชนะขาดรอย เก่งเกิ๊นนนนน', '2024-04-04 21:40:21', 3, 1),
(16, 'อาจารย์ไม่แจ้งว่าใช้เครื่องคิดเลขเข้าห้องสอบได้', 'ไม่เข้าใจมากๆ แล้วแถมบอกว่าเรื่อง SPI กับ I2C ไม่ออกสอบแต่ออกหมดเลย คืออะไร??????????', '2024-04-04 22:50:47', 6, 2),
(17, 'วิธีนอนให้ครบ 8 ชม. ภายใน 2 ชม.', 'ทงดวสห่ดยหก่ยด่หกว่ดวห่กวดวกหด่กดวสห่กวดวห', '2024-04-04 22:51:39', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(32) NOT NULL,
  `role` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `gender`, `email`, `role`) VALUES
(1, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'thitima dengmee', 'f', 'thitima.dengmee@gmail.com', 'a'),
(2, 'member', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'phuwanat thongkum', 'm', 'phuwanat.thongkum@gmail.com', 'm'),
(3, 'kawo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'eieiei eiei', 'o', 'kawo@gmail.com', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
