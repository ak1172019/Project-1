-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 09:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmax`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(102) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_img` text NOT NULL,
  `a_contact` varchar(255) NOT NULL,
  `a_country` text NOT NULL,
  `a_job` varchar(255) NOT NULL,
  `a_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_name`, `a_email`, `a_password`, `a_img`, `a_contact`, `a_country`, `a_job`, `a_about`) VALUES
(1, 'Admin ', 'admin@shopmax.com', '123456', '5f2ce3718d60c1.08313833.jpg', '12345678910', 'india', 'Admin', 'I am Developer'),
(4, 'new admin 1', 'newadmin1@mail.com', '123', 'cloth_1.jpg', '12345678910', 'india', 'Guest', 'I am web devloper'),
(6, 'usercheck', 'usercheck@email.com', '123', '5f25d2da6dce15.36846687.jpg', '12345678910', 'india', 'admin', 'I Am Web Devloper');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(102) NOT NULL,
  `ip_add` varchar(254) NOT NULL,
  `p_qty` int(102) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(12) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'All Men Product'),
(2, 'Woman', 'All Women Product'),
(3, 'Kids', 'All Kids Product'),
(4, 'Accessories ', 'All Accessories Product');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(102) NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `c_lname` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_subject` varchar(255) NOT NULL,
  `c_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `c_fname`, `c_lname`, `c_email`, `c_subject`, `c_message`) VALUES
(2, 'fname', 'lname', 'example123@mail.com', 'new subject', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(102) NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `c_lname` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `c_country` text NOT NULL,
  `c_state` text NOT NULL,
  `c_contact` varchar(255) NOT NULL,
  `c_add` text NOT NULL,
  `c_postal` int(102) NOT NULL,
  `c_img` text NOT NULL,
  `c_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_fname`, `c_lname`, `c_email`, `c_password`, `c_country`, `c_state`, `c_contact`, `c_add`, `c_postal`, `c_img`, `c_ip`) VALUES
(5, 'akshay', 'real123', 'Example@mail.com', 'Account Password', '9', 'Maharashtra', '9876543210', 'In India Maharashtra', 600000, 'men.jpg', '::1'),
(7, 'Akshay', 'fname', 'Example123@email.com', '123', '9', 'Maharashtra', '9876543210', 'In India Maharashtra', 600000, 'person_4.jpg', '::1'),
(9, 'fnmae', 'lname', 'colombia@univercity.com', 'colombo', '8', 'Maharashtra', '9876543210', 'In India Maharashtra', 600000, 'cloth_2.jpg', '::1'),
(10, 'username', 'lasname', 'newusername@email.com', '123456', '9', 'Maharashtra', '9876543210', 'In India Maharashtra', 600000, 'hero_1.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `c_order`
--

CREATE TABLE `c_order` (
  `o_id` int(102) NOT NULL,
  `c_id` int(102) NOT NULL,
  `p_id` int(102) NOT NULL,
  `due_amount` int(102) NOT NULL,
  `invoice_no` int(102) NOT NULL,
  `p_qty` int(102) NOT NULL,
  `size` text NOT NULL,
  `o_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `o_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_order`
--

INSERT INTO `c_order` (`o_id`, `c_id`, `p_id`, `due_amount`, `invoice_no`, `p_qty`, `size`, `o_date`, `o_status`) VALUES
(2, 7, 13, 1200, 2130786754, 1, ' medium', '2020-08-06 14:27:33', 'Complete'),
(3, 7, 12, 750, 1285909433, 1, ' small', '2020-08-07 04:14:04', 'pendding');

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `fav_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`fav_id`, `c_id`, `p_id`) VALUES
(9, 0, 12),
(10, 7, 13);

-- --------------------------------------------------------

--
-- Table structure for table `o_pending`
--

CREATE TABLE `o_pending` (
  `o_id` int(102) NOT NULL,
  `c_id` int(102) NOT NULL,
  `invoice_no` int(102) NOT NULL,
  `p_id` text NOT NULL,
  `p_qty` int(102) NOT NULL,
  `size` text NOT NULL,
  `o_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `o_pending`
--

INSERT INTO `o_pending` (`o_id`, `c_id`, `invoice_no`, `p_id`, `p_qty`, `size`, `o_status`) VALUES
(1, 7, 1109847916, '15', 1, 'sizes', 'Complete'),
(2, 7, 2130786754, '13', 1, 'sizes', 'Complete'),
(3, 7, 1285909433, '12', 1, 'sizes', 'pendding');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pmt_id` int(102) NOT NULL,
  `invoice_no` int(102) NOT NULL,
  `amount` int(102) NOT NULL,
  `pmt_mode` text NOT NULL,
  `ref_no` int(255) NOT NULL,
  `pmt_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pmt_id`, `invoice_no`, `amount`, `pmt_mode`, `ref_no`, `pmt_date`) VALUES
(1, 1109847916, 9999, 'Bank Transfer', 0, '2020-08-06'),
(2, 2130786754, 1200, 'Bank Transfer', 0, '2020-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(12) NOT NULL,
  `p_cat_id` int(12) NOT NULL,
  `cat_id` int(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p_title` text NOT NULL,
  `p_img1` text NOT NULL,
  `p_price` int(12) NOT NULL,
  `p_keyword` text NOT NULL,
  `p_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_cat_id`, `cat_id`, `date`, `p_title`, `p_img1`, `p_price`, `p_keyword`, `p_description`) VALUES
(1, 5, 1, '2020-08-01 15:05:51', 'Mens T-Shirt Blue', '5f2584cfb90ad9.24894511.jpg', 999, 'T-Shirt Blue', 'T-Shirt Blue For Men'),
(2, 8, 2, '2020-08-01 15:09:34', 'Tank Top', '5f2585ae1f7065.18288473.jpg', 699, ' Tank Top Sports', ' Tank Top Sports For Woman'),
(3, 5, 1, '2020-08-01 15:12:52', 'Mens Shirt ', '5f258674c40f05.61341083.jpg', 750, 'Mens T-shirt With Colure', 'Mens T-shirt With Columnar '),
(4, 1, 2, '2020-08-01 15:15:03', 'White Jacket', '5f2586f7b28403.71686797.jpg', 6999, 'White Jacket For Woman', 'White Jacket For Woman'),
(5, 8, 2, '2020-08-01 16:17:39', 'Smooth Cloth', '5f258802e45b06.39757224.png', 9999, 'Smooth Cloth For Woman', 'Smooth Cloth For Woman'),
(6, 3, 2, '2020-08-01 16:28:12', 'Blue Shoe High Heels', '5f25981c9a4da6.54554517.png', 999, 'Blue Shoe High Heels', 'Blue Shoe High Heels For Woman'),
(7, 2, 2, '2020-08-01 19:08:04', 'Leather Green Bag', '5f25985a67e8a2.77372986.png', 1200, 'Leather Green Bag', 'Leather Green Bag For Woman'),
(8, 1, 1, '2020-08-01 16:34:34', 'Yellow Jacket', '5f25999a853b66.18647969.png', 9999, 'Yellow Jacket For Men', 'Yellow Jacket For Men'),
(9, 1, 1, '2020-08-01 16:44:06', 'Blue Lether Jacket', '5f259bd6dcb9d9.65443326.png', 18000, 'Blue Lether Jacket For Men', 'Blue Lether Jacket For Men'),
(11, 8, 2, '2020-08-01 16:51:45', 'Top With Shoe', '5f259da1ef0396.72772264.png', 4500, 'Top WIth Shoe For Woman', 'Top WIth Shoe For Woman'),
(12, 3, 1, '2020-08-01 16:53:39', 'Blue Shoe', '5f259e139cdd31.21582281.png', 750, 'Blue Shoe For Men', 'Blue Shoe For Men'),
(13, 5, 2, '2020-08-01 19:24:05', 'Yellow T-Shirt', '5f25c15568c272.69154070.png', 1200, 'Yellow T-Shirt', 'Yellow T-Shirt For Womans');

-- --------------------------------------------------------

--
-- Table structure for table `p_categories`
--

CREATE TABLE `p_categories` (
  `p_cat_id` int(12) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_categories`
--

INSERT INTO `p_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Jacket', 'All Types Jacket'),
(2, 'Accessories ', 'All Types Accessories'),
(3, 'Shoes', 'All Types Shoes'),
(4, 'Coat', 'All Types Coat'),
(5, 'T-Shirt', 'All Types T-Shirt'),
(7, 'new p cat', 'new p cat'),
(8, 'Top', 'Ledies Top'),
(9, 'Shirt', 'Shirt'),
(10, 'Sunglasses', 'All Sunglasses');

-- --------------------------------------------------------

--
-- Table structure for table `q_links`
--

CREATE TABLE `q_links` (
  `ql_id` int(11) NOT NULL,
  `ql_title` text NOT NULL,
  `ql_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_links`
--

INSERT INTO `q_links` (`ql_id`, `ql_title`, `ql_desc`) VALUES
(1, 'Sell online', ''),
(2, 'Features', ''),
(3, 'Shopping cart', ''),
(4, 'Store builder', ''),
(5, 'Mobile commerce', ''),
(6, 'Dropshipping', ''),
(7, 'Web development', ''),
(8, 'Career ', ''),
(9, 'Point of sale', ''),
(10, 'Hardware', ''),
(11, 'Software', ''),
(12, 'New', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(102) NOT NULL,
  `s_name` text NOT NULL,
  `s_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_name`, `s_img`) VALUES
(5, 'new slide', 'about_1.png'),
(6, 'new slide', 'about_1.png'),
(7, 'new slide2', 'about_1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `c_order`
--
ALTER TABLE `c_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `o_pending`
--
ALTER TABLE `o_pending`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pmt_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `p_categories`
--
ALTER TABLE `p_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `q_links`
--
ALTER TABLE `q_links`
  ADD PRIMARY KEY (`ql_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(102) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(102) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(102) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `c_order`
--
ALTER TABLE `c_order`
  MODIFY `o_id` int(102) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `o_pending`
--
ALTER TABLE `o_pending`
  MODIFY `o_id` int(102) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pmt_id` int(102) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `p_categories`
--
ALTER TABLE `p_categories`
  MODIFY `p_cat_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `q_links`
--
ALTER TABLE `q_links`
  MODIFY `ql_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(102) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
