-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 06:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_donation_form`
--

CREATE TABLE `registration_donation_form` (
  `id` int(11) NOT NULL,
  `donor_id` varchar(20) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `form_type` varchar(50) DEFAULT NULL,
  `payment_method` varchar(20) DEFAULT NULL,
  `donation_amount` int(10) DEFAULT NULL,
  `card_number` int(20) DEFAULT NULL,
  `exp_date` varchar(50) DEFAULT NULL,
  `cvv_number` int(5) DEFAULT NULL,
  `ch_name` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `added_on` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_donation_form`
--

INSERT INTO `registration_donation_form` (`id`, `donor_id`, `first_name`, `last_name`, `phone`, `email`, `gender`, `password`, `form_type`, `payment_method`, `donation_amount`, `card_number`, `exp_date`, `cvv_number`, `ch_name`, `status`, `added_on`) VALUES
(136, '760207', 'Momin', 'Anas', 2147483647, 'mominanas576@gmail.com', 'MALE', '$2y$10$zV5Q.5cKL24G0SqT/iCg5ObV/U.9VKdGxADYRkFcRKO4JtcQvKtee', 'registration', 'card', 12000, 2147483647, '05/27', 8366, 'Momin Anas', 0, '20-05-2025'),
(137, '438541', 'dfg', 'dfg', 1234567890, 'dfg@gmail.com', 'FEMALE', '$2y$10$wxAveZ1R2Veea58gBbOP1eiXCsyXCyeUq6XGQMAbhN0d93MC7olie', 'donation', 'card', 13445, 2147483647, '09/34', 456, 'dfg', 1, '20-05-2025');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_registration`
--

CREATE TABLE `volunteer_registration` (
  `id` int(11) NOT NULL,
  `vol_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `exp` varchar(10) DEFAULT NULL,
  `availibility` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `aadhaar_pan` varchar(255) DEFAULT NULL,
  `added_on` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer_registration`
--

INSERT INTO `volunteer_registration` (`id`, `vol_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `gender`, `dob`, `address`, `exp`, `availibility`, `photo`, `aadhaar_pan`, `added_on`) VALUES
(23, 371940, 'Momin', 'Anas', 'mominanas576@gmail.com', '$2y$10$gv3/VUrQxMS4IZMVVyyfquO/OLwHH/OlS8Zu0BvGaKjAvt/shAz1m', 1234567890, 'MALE', '27/03/04', 'sdfgvfdgherdty waejkrufgcwgrr weqa,rhgfvc345t', '2', 'Weekdays Morning,Weekends Evening', 'Screenshot_2025-05-16_222632.png', 'Screenshot_2025-05-16_2226321.png', '20-05-2025'),
(24, 690896, 'erygt', 'rtfdg', 'mominnas576@gmail.com', '$2y$10$li5TCJAE8nLVbVY/RQV1bO7GpdRUyaLixxdRKShdpbe/1I35LYGwm', 1244567890, 'MALE', '27/03/04', 'derfhg sedrfhyg frtgh', '3', 'Weekdays Morning', 'Screenshot_2025-05-20_010003.png', 'Screenshot_2025-05-20_012659.png', '20-05-2025'),
(25, 217308, 'sdfgdfgh', 'fdghfgdh', 'momin123@gmail.com', '$2y$10$hswc/vHL2NZmnTuzljEKM.2DdI6P7RqBo2ic0xcy4EEYiEuMWPCQa', 1234554321, 'MALE', '27/03/04', 'dfgh', '3', 'Weekdays Morning', 'Screenshot_2025-05-16_222548.png', 'Screenshot_2025-05-16_2225481.png', '20-05-2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_donation_form`
--
ALTER TABLE `registration_donation_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_donation_form`
--
ALTER TABLE `registration_donation_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
