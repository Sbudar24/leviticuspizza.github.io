-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 09:28 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `code` varchar(30) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Pepper Onion ', 'LP001', 'myPizza/pepper onion pizza.jpg', 90.90),
(2, 'Peppers & Black Olives', 'LP002', 'myPizza/0.png', 100.90),
(3, 'All Veg', 'LP003', 'myPizza/Paneer_Tikka_1_COMPRESSED.png', 120.90),
(4, 'Hawaiian Superrrr', 'LP004', 'myPizza/slice_PT_hampineapple.png', 140.90),
(5, 'Tomato & Cheese', 'LP005', 'myPizza/Pizza-Slice.png', 150.90),
(6, 'Amazon Cheese', 'LP006', 'myPizza/cheese-pizza-slice-png-8.png', 170.90),
(7, 'Bacon & Cheese ', 'LP007', 'myPizza/sajtos_pizza_emenu.png', 170.90),
(8, 'Ham & Cheese', 'LP008', 'myPizza/kg-pizza-breakfast-slice-01.png', 220.90),
(9, 'Family Feast 1 (Ham & Veg)', 'LP009', 'myPizza/supreme.png', 230.90),
(10, 'Family Feast 2 (Everything Meaty)', 'LP010', 'myPizza/nz_p097_en_hero.png', 260.90);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `UserId` int(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Image` blob NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`UserId`, `Username`, `Email`, `Password`, `Image`, `Role`) VALUES
(4, 'w', 'sm@gmail.com', 'w', '', 'User'),
(6, 'sbudar 24', 'sm24@gmail.com', '12345', '', 'Admin'),
(7, 'siya ndlovu', 'sn@gmaill.com', '12345', '', 'User'),
(8, 'Shawn West', 'sw@gmail.com', '12345', '', 'User'),
(9, 'Jabu Mashinini', 'jm@gmail.com', '1234567890', '', 'User'),
(10, 'neo', 'neo@gmail.com', '0987', '', 'User'),
(11, 'neo', 'neo@gmail.com', '09876', '', 'User'),
(12, 's', 's@s.com', 's', '', 'User'),
(13, 'karabo Alpha', 'ka@gmail.com', '09876', '', 'User'),
(24, 'testing101', 'sbu@gmail.com', '12345', '', 'User'),
(33, 'miss p', 'missp@gmail.com', '0000', '', 'User'),
(34, 'miss p', 'missp@gmail.com', '', '', 'User'),
(37, 'saxz', 'test@test.test', 'acsdc', '', 'User'),
(62, 'samu', 'samu@gmail.com', '2468', '', 'Admin'),
(64, 'kagiso', 'testing@gmail.com', '12345', '', 'User'),
(66, 'Sbudar', 'sbudar@gmail.com', '12345', '', 'User'),
(67, 'siyabxnngfg', 'bdfdf@gmai.com', 'dododo', '', 'User'),
(68, 'Sibusiso', 'sbudar@gmail.com', '12345', '', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_shortbio` text,
  `user_username` varchar(255) NOT NULL,
  `user_longbio` text,
  `user_facebook` varchar(255) DEFAULT NULL,
  `user_twitter` varchar(255) DEFAULT NULL,
  `user_linkedin` varchar(255) DEFAULT NULL,
  `user_stumbleupon` varchar(255) DEFAULT NULL,
  `user_pinterest` varchar(255) DEFAULT NULL,
  `user_googleplus` varchar(255) DEFAULT NULL,
  `user_website` varchar(255) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_profession` text,
  `user_gender` varchar(255) DEFAULT NULL,
  `user_maritialstatus` varchar(255) DEFAULT NULL,
  `user_address` text,
  `user_backgroundpicture` varchar(255) NOT NULL,
  `user_joindate` date NOT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_skype` varchar(255) DEFAULT NULL,
  `user_github` varchar(255) DEFAULT NULL,
  `user_youtube` varchar(255) DEFAULT NULL,
  `user_vimeo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_avatar`, `user_shortbio`, `user_username`, `user_longbio`, `user_facebook`, `user_twitter`, `user_linkedin`, `user_stumbleupon`, `user_pinterest`, `user_googleplus`, `user_website`, `user_dob`, `user_profession`, `user_gender`, `user_maritialstatus`, `user_address`, `user_backgroundpicture`, `user_joindate`, `user_country`, `user_skype`, `user_github`, `user_youtube`, `user_vimeo`) VALUES
(1482, 'sbudar24@hotmail.com', '12345', 'SbudAr', '24', '41738471_2071108659870717_3688771157961474048_n-793635141.jpg', '\"Feel Free To Be Insane\"', 'SbudAr24', '', '', '', NULL, NULL, '', '', '', '1996-01-02', 'Web Developer, Web Designer and Admin', 'Male', NULL, '17227 Ngakane Street, Orlando West, 1804', '', '2018-10-16', 'South Africa', '', '', '', ''),
(1483, 'megenpeterson@hotmail.com', '00000', 'Megan', 'Peterson', 'megan-peters-1269910896.jpg', '', 'meg', '', '', '', NULL, NULL, '', '', '', '1999-03-12', '', 'Female', NULL, '', '', '2018-10-16', '', '', '', '', ''),
(1484, 'oliviabaker@hotmail.com', '00000', 'Olivia', 'Baker', 'img-20180216-wa000-604854717.jpg', '', 'Liv', '', '', '', NULL, NULL, '', '', '', '1999-05-23', '', 'Male', NULL, '', '', '2018-10-16', '', '', '', '', ''),
(1485, 'zinhlemtebe@hotmail.com', '00000', 'Zinhle', 'Mtebe', 'z-i-n-h-l-e-20161013_205222-716091871.jpg', '', 'mbuzi', '', '', '', NULL, NULL, '', '', '', '1996-02-03', '', 'Male', NULL, '', '', '2018-10-16', '', '', '', '', ''),
(1487, 'shaunwest@outlook.com', '00000', 'Shaun', 'West', 'desert-1014646370.jpg', 'Choose Wisely', 'shaun', '', '', '', NULL, NULL, '', '', '', '2018-10-09', '', 'Male', NULL, '', '', '2018-10-17', '', '', '', '', ''),
(1488, 'kaymckay@outlook.com', '00000', 'Kagiso', 'MaKay', 'default.jpg', NULL, 'KayGee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2018-10-17', NULL, NULL, NULL, NULL, NULL),
(1489, 'samu@hotmail.com', '00000', 'Samu', 'McKay', 'img-20160820-wa0008-1267845370.jpg', 'Love', 'Samu', '', '', '', NULL, NULL, '', '', '', '2008-01-02', '', 'Male', NULL, '', '', '2018-10-17', '', '', '', '', ''),
(1490, 'alex@outlook.com', '00000', 'Alex', 'Mellow', 'ytkkjjb9c-1180189632.png', 'Ask me', 'Alex', '', '', '', NULL, NULL, '', '', '', '1998-01-01', '', 'Male', NULL, '', '', '2018-10-17', '', '', '', '', ''),
(1491, 'zibuda@gmail.com', '12345', 'Zibuda', 'sbsbsbs', '41738471_2071108659870717_3688771157961474048_n-1099117756.jpg', 'feel free to be insane', 'Zibudar', '', '', '', NULL, NULL, '', '', '', '1998-02-02', 'Web Developer, Web Designer and Admin', 'Male', NULL, '17227 Ngakane Street, Orlando West, 1804', '', '2018-10-17', 'South Africa', '', '', '', ''),
(1492, 'xman@gmail.com', '00000', 'xman', 'man', 'recycle_bin_358196-1380545606.png', 'xman', 'xman', '', '', '', NULL, NULL, '', '', '', '1287-04-02', '', 'Male', NULL, '', '', '2018-10-18', '', '', '', '', ''),
(1493, 'tev@gmail.com', '00000', 'Tev', 'Vostro', '41738471_2071108659870717_3688771157961474048_n-1321635097.jpg', 'tev v', 'Tev', '', '', '', NULL, NULL, '', '', '', '2343-02-05', '', 'Male', NULL, '', '', '2018-10-18', '', '', '', '', ''),
(1495, 'siya@gmail.com', '00000', 'Siya', 'MaKay', '41738471_2071108659870717_3688771157961474048_n-1178554424.jpg', 'Bafanas', 'Ciya', '', '', '', NULL, NULL, '', '', '', '1999-10-19', '', 'Male', NULL, '', '', '2018-10-18', '', '', '', '', ''),
(1496, 'asdfghjkl@asdfghjkl.asdfghjkl', '00000', 'sds', 'ds', '41738471_2071108659870717_3688771157961474048_n-703569623.jpg', 'sdcsdCDSCDSC', 'cC', '', '', '', NULL, NULL, '', '', '', '1413-02-11', '', 'Male', NULL, '', '', '2018-10-18', '', '', '', '', ''),
(1497, 'katcat@gmail.com', '00000', 'Kat', 'Cat', 'penguins-809255678.jpg', 'meyou', 'Kat', '', '', '', NULL, NULL, '', '', '', '2345-04-02', '', 'Male', NULL, '', '', '2018-10-18', '', '', '', '', ''),
(1498, 'busi@gmail.com', '00000', 'Busi', 'Dlamini', 'tulips-96864539.jpg', 'ubani!?', 'Busi', '', '', '', NULL, NULL, '', '', '', '1323-03-12', '', 'Male', NULL, '', '', '2018-10-18', '', '', '', '', ''),
(1499, 'mbali@gmail.com', '00000', 'Mbail', 'Mthethwa', 'lighthouse-800391131.jpg', 'shkri', 'Badie', '', '', '', NULL, NULL, '', '', '', '0209-05-02', '', 'Male', NULL, '', '', '2018-10-18', '', '', '', '', ''),
(1500, 'karabo@gmail.com', '00000', 'Karabo', 'Windows', 'koala-1313717249.jpg', '', 'Kay-way', '', '', '', NULL, NULL, '', '', '', '4341-04-04', '', 'Male', NULL, '', '', '2018-10-18', '', '', '', '', ''),
(1501, 'siphiwe@hotmail.com', '00000', 'Siphiwe', 'Segodi', '44526569_647936185607939_2393954920421130240_o-385995077.jpg', 'I love my cars', 'MrDick', '', '', '', NULL, NULL, '', '', '', '1999-10-10', 'Mechanical', 'Male', NULL, '', '', '2018-10-26', 'South Africa', '', '', '', ''),
(1502, 'emailaddress@gmail.com', 'password', 'First Name', 'Last Name', '44422190_347153912524985_3168756459294949376_n-1266339258.jpg', ';', 'username', '', '', '', NULL, NULL, '', '', '', '1999-01-02', '', 'Male', NULL, '', '', '2018-11-25', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `UserId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1503;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
