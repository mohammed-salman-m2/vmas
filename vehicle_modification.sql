-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2021 at 07:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_modification`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_id` int(100) NOT NULL,
  `l_uname` varchar(100) NOT NULL,
  `l_password` varchar(100) NOT NULL,
  `l_type` varchar(100) NOT NULL,
  `l_approve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `l_uname`, `l_password`, `l_type`, `l_approve`) VALUES
(4, 'anjuchinnu992@gmail.com', 'anju', 'user', 'approve'),
(5, 'afra@gmail.com', '12345', 'user', 'approve'),
(6, 'asha@gmail.com', 'asha12', 'user', 'approve'),
(7, 'admin@gmail.com', 'admin12', 'admin', 'approve'),
(8, 'akash@gmail.com', 'akash12', 'shop', 'approve'),
(9, 'sophia@gmail.com', 'sophia12', 'shop', 'approve'),
(10, 'akash@gmail.com', 'asritha', 'user', 'approve'),
(11, 'ronnie@gmail.com', 'ronnie', 'user', 'approve'),
(12, 'thomas@gmail.com', 'thomas123', 'shop', 'not approve');

-- --------------------------------------------------------

--
-- Table structure for table `modified`
--

CREATE TABLE `modified` (
  `m_id` int(100) NOT NULL,
  `mv_id` int(100) NOT NULL,
  `mul_id` int(100) NOT NULL,
  `m_description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `m_approve` varchar(100) NOT NULL DEFAULT 'not approve',
  `m_image` varchar(100) NOT NULL DEFAULT 'demo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modified`
--

INSERT INTO `modified` (`m_id`, `mv_id`, `mul_id`, `m_description`, `image`, `m_approve`, `m_image`) VALUES
(1, 2, 6, ' \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed odio consequat, tristique elit sed, molestie nulla. Lorem ipsum dolor sit amet, \r\n   \r\n   \r\n  ', 'Car.jpg', 'approve', 'Car.jpg'),
(2, 2, 6, ' \r\n  ggggg \r\n  ', 'a3.jpg', 'not approve', 'demo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `a_id` int(100) NOT NULL,
  `asl_id` int(100) NOT NULL,
  `a_pname` varchar(100) NOT NULL,
  `a_price` varchar(100) NOT NULL,
  `a_model` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`a_id`, `asl_id`, `a_pname`, `a_price`, `a_model`, `image`) VALUES
(1, 8, 'wheel', '200', '2002', 'Car.jpg'),
(3, 6, 'srew', '200', ' e21', 'g15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `s_id` int(100) NOT NULL,
  `sl_id` int(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_place` varchar(100) NOT NULL,
  `s_phone` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`s_id`, `sl_id`, `s_name`, `s_place`, `s_phone`, `s_email`, `image`) VALUES
(1, 8, 'akash', 'thrissur', '+911234567891', 'akash@gmail.com', 't2.jpg'),
(2, 9, 'Sophia', 'thrissur', '9854673245', 'sophia@gmail.com', 's1.jpg'),
(3, 12, 'thomas', 'thrissur', '09876543210', 'thomas@gmail.com', 'Car.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `ul_id` int(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_phone` varchar(100) NOT NULL,
  `u_aadhar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `ul_id`, `u_name`, `u_email`, `u_password`, `u_phone`, `u_aadhar`) VALUES
(1, 4, 'ANJU', 'anjuchinnu992@gmail.com', 'anju', '8921029447', '3556615356566'),
(2, 5, 'Afra', 'afra@gmail.com', '12345', '8921029447', '1234567890'),
(3, 6, 'asha', 'asha@gmail.com', 'asha12', '09876543216', '90876545666778'),
(4, 10, 'akash', 'akash@gmail.com', 'asritha', '+911234567890', '44555'),
(5, 11, 'Ronnie', 'ronnie@gmail.com', 'ronnie', '7685934567', '4455556');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `v_id` int(100) NOT NULL,
  `vul_id` int(100) NOT NULL,
  `v_license` varchar(100) NOT NULL,
  `v_no` varchar(100) NOT NULL,
  `v_type` varchar(100) NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `v_model` varchar(100) NOT NULL,
  `v_engine` varchar(100) NOT NULL,
  `v_rc` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`v_id`, `vul_id`, `v_license`, `v_no`, `v_type`, `v_name`, `v_model`, `v_engine`, `v_rc`, `image`) VALUES
(2, 6, '87687875', 'kl 47 444', 'TWO WHEELER', 'honda', 'honda', '7578', 'a2.jpg', 'Car.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `modified`
--
ALTER TABLE `modified`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `mv_id` (`mv_id`),
  ADD KEY `mul_id` (`mul_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `asl_id` (`asl_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `sl_id` (`sl_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `ul_id` (`ul_id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `vul_id` (`vul_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `modified`
--
ALTER TABLE `modified`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `v_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `modified`
--
ALTER TABLE `modified`
  ADD CONSTRAINT `mul_id` FOREIGN KEY (`mul_id`) REFERENCES `login` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mv_id` FOREIGN KEY (`mv_id`) REFERENCES `vehicle_details` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `asl_id` FOREIGN KEY (`asl_id`) REFERENCES `login` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `sl_id` FOREIGN KEY (`sl_id`) REFERENCES `login` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `ul_id` FOREIGN KEY (`ul_id`) REFERENCES `login` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD CONSTRAINT `vul_id` FOREIGN KEY (`vul_id`) REFERENCES `login` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
