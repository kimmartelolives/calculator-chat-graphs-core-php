-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 11:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summersky`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `UserAccountId` int(10) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `IsRead` int(3) NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `UserAccountId`, `Message`, `Type`, `Category`, `Status`, `IsRead`, `CreatedOn`) VALUES
(0, 36, 'New Account Registered', 'Registration', 'Resident', 'Added', 0, '2023-06-04 23:14:33'),
(0, 35, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:16:32'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:17:09'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:18:17'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:18:55'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:19:38'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:20:17'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:22:53'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:23:56'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:24:12'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-04 23:52:33'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-05 11:08:15'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-19 22:54:29'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-19 22:54:49'),
(0, 36, 'Account Login', 'Login logs', 'Resident', 'New', 0, '2023-06-22 14:38:23'),
(0, 37, 'New Account Registered', 'Registration', 'Resident', 'Added', 0, '2023-06-23 04:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `message1` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by_user` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `message1`, `date_created`, `created_by_user`) VALUES
(1, 'Welcome mga ka itik!!! Tang ina niyo!', '2023-06-22 21:28:04', 4);

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `user_id`, `message`, `date_created`) VALUES
(1, 4, 'Welcome mga ka aybols', '2023-06-23 04:49:21'),
(7, 35, 'Hi', '2023-06-23 04:55:03'),
(8, 36, 'May bisaya ba dito? friendly ako sa mga bisaya.', '2023-06-23 05:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `craft_accessories_legendary`
--

CREATE TABLE `craft_accessories_legendary` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `glittering` int(100) DEFAULT NULL,
  `darksteel` int(100) DEFAULT NULL,
  `copper` int(100) DEFAULT NULL,
  `uc_platinum` int(100) DEFAULT NULL,
  `uc_anima` int(100) DEFAULT NULL,
  `uc_illuminating` int(100) DEFAULT NULL,
  `rare_platinum` int(100) DEFAULT NULL,
  `rare_anima` int(100) DEFAULT NULL,
  `rare_illuminating` int(100) DEFAULT NULL,
  `epic_platinum` int(100) DEFAULT NULL,
  `epic_anima` int(100) DEFAULT NULL,
  `epic_illuminating` int(100) DEFAULT NULL,
  `legendary_platinum` int(100) DEFAULT NULL,
  `legendary_anima` int(100) DEFAULT NULL,
  `legendary_illuminating` int(100) DEFAULT NULL,
  `total_glittering_needed_for_materials_you_have` int(11) DEFAULT NULL,
  `total_darksteel_needed_for_materials_you_have` int(100) DEFAULT NULL,
  `total_copper_needed_for_materials_you_have` int(100) DEFAULT NULL,
  `if_epic_total_glittering_needed` int(100) DEFAULT NULL,
  `if_epic_total_darksteel_needed` int(100) DEFAULT NULL,
  `if_epic_total_copper_needed` int(100) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `created_by_user` int(100) DEFAULT NULL,
  `status1` varchar(100) DEFAULT NULL,
  `overall_percentage` float DEFAULT NULL,
  `legendary_platinum_percentage` float DEFAULT NULL,
  `legendary_anima_percentage` float DEFAULT NULL,
  `legendary_illuminating_percentage` float NOT NULL,
  `total_legendary_platinum` int(100) DEFAULT NULL,
  `total_legendary_anima` int(100) DEFAULT NULL,
  `total_legendary_illuminating` int(100) DEFAULT NULL,
  `epic_platinum_needed` int(100) DEFAULT NULL,
  `epic_anima_needed` int(100) DEFAULT NULL,
  `epic_illuminating_needed` int(100) DEFAULT NULL,
  `IsDeleted` int(100) DEFAULT NULL,
  `IsModified` int(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `craft_accessories_legendary`
--

INSERT INTO `craft_accessories_legendary` (`id`, `project_name`, `glittering`, `darksteel`, `copper`, `uc_platinum`, `uc_anima`, `uc_illuminating`, `rare_platinum`, `rare_anima`, `rare_illuminating`, `epic_platinum`, `epic_anima`, `epic_illuminating`, `legendary_platinum`, `legendary_anima`, `legendary_illuminating`, `total_glittering_needed_for_materials_you_have`, `total_darksteel_needed_for_materials_you_have`, `total_copper_needed_for_materials_you_have`, `if_epic_total_glittering_needed`, `if_epic_total_darksteel_needed`, `if_epic_total_copper_needed`, `date_created`, `created_by_user`, `status1`, `overall_percentage`, `legendary_platinum_percentage`, `legendary_anima_percentage`, `legendary_illuminating_percentage`, `total_legendary_platinum`, `total_legendary_anima`, `total_legendary_illuminating`, `epic_platinum_needed`, `epic_anima_needed`, `epic_illuminating_needed`, `IsDeleted`, `IsModified`, `category`) VALUES
(15, 'qweqwewqe', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 62500, 12500000, 50000000, '2023-06-22', 4, 'Ongoing', 0, 0, 0, 0, 0, 0, 0, 3000, 1000, 1000, 0, 0, 'Accessories'),
(16, '2', 44, 4, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, -8248, -1744016, -6704686, 58000, 11600000, 46400000, '2023-06-23', 4, 'Ongoing', 0.07, 0.01, 0.02, 0.31, 3, 2, 31, 2970, 980, 690, 0, 0, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `craft_weapon_legendary`
--

CREATE TABLE `craft_weapon_legendary` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `glittering` int(100) DEFAULT NULL,
  `darksteel` int(100) DEFAULT NULL,
  `copper` int(100) DEFAULT NULL,
  `uc_steel` int(100) DEFAULT NULL,
  `uc_evil` int(100) DEFAULT NULL,
  `uc_moon` int(100) DEFAULT NULL,
  `rare_steel` int(100) DEFAULT NULL,
  `rare_evil` int(100) DEFAULT NULL,
  `rare_moon` int(100) DEFAULT NULL,
  `epic_steel` int(100) DEFAULT NULL,
  `epic_evil` int(100) DEFAULT NULL,
  `epic_moon` int(100) DEFAULT NULL,
  `legendary_steel` int(100) DEFAULT NULL,
  `legendary_evil` int(100) DEFAULT NULL,
  `legendary_moon` int(100) DEFAULT NULL,
  `total_glittering_needed_for_materials_you_have` int(11) DEFAULT NULL,
  `total_darksteel_needed_for_materials_you_have` int(100) DEFAULT NULL,
  `total_copper_needed_for_materials_you_have` int(100) DEFAULT NULL,
  `if_epic_total_glittering_needed` int(100) DEFAULT NULL,
  `if_epic_total_darksteel_needed` int(100) DEFAULT NULL,
  `if_epic_total_copper_needed` int(100) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `created_by_user` int(100) DEFAULT NULL,
  `status1` varchar(100) DEFAULT NULL,
  `overall_percentage` float DEFAULT NULL,
  `legendary_steel_percentage` float DEFAULT NULL,
  `legendary_evil_percentage` float DEFAULT NULL,
  `legendary_moon_percentage` float DEFAULT NULL,
  `total_legendary_steel` int(100) DEFAULT NULL,
  `total_legendary_evil` int(100) DEFAULT NULL,
  `total_legendary_moon` int(100) DEFAULT NULL,
  `epic_steel_needed` int(100) DEFAULT NULL,
  `epic_evil_needed` int(100) DEFAULT NULL,
  `epic_moon_needed` int(100) DEFAULT NULL,
  `IsDeleted` int(100) DEFAULT NULL,
  `IsModified` int(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `craft_weapon_legendary`
--

INSERT INTO `craft_weapon_legendary` (`id`, `project_name`, `glittering`, `darksteel`, `copper`, `uc_steel`, `uc_evil`, `uc_moon`, `rare_steel`, `rare_evil`, `rare_moon`, `epic_steel`, `epic_evil`, `epic_moon`, `legendary_steel`, `legendary_evil`, `legendary_moon`, `total_glittering_needed_for_materials_you_have`, `total_darksteel_needed_for_materials_you_have`, `total_copper_needed_for_materials_you_have`, `if_epic_total_glittering_needed`, `if_epic_total_darksteel_needed`, `if_epic_total_copper_needed`, `date_created`, `created_by_user`, `status1`, `overall_percentage`, `legendary_steel_percentage`, `legendary_evil_percentage`, `legendary_moon_percentage`, `total_legendary_steel`, `total_legendary_evil`, `total_legendary_moon`, `epic_steel_needed`, `epic_evil_needed`, `epic_moon_needed`, `IsDeleted`, `IsModified`, `category`) VALUES
(2, '3', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 566920, -8318687, -26288687, 46625, 9325000, 37300000, '2023-06-21', 1, 'Ongoing', 0.25, 0.05, 0.32, 0.81, 14, 32, 81, 2860, 680, 190, 0, 0, 'Weapon'),
(6, 'sad;adasl;dkl', 1, 1231312, 123123, 23333, 33333, 3233, 222, 222, 222, 11, 23, 44, 5, 0, 15, -37913, -9945513, -32604377, 51000, 10200000, 40800000, '2023-06-23', 1, 'Ongoing', 0.18, 0.1, 0.37, 0.24, 31, 37, 24, 2690, 630, 760, 0, 0, 'Weapon');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `Credits` int(100) DEFAULT NULL,
  `CensusId` int(100) DEFAULT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Pass` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(100) DEFAULT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `UserTypeId` int(3) DEFAULT NULL,
  `IsDeleted` int(3) DEFAULT NULL,
  `ProfilePicture` varchar(100) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `IsBan` int(3) DEFAULT NULL,
  `CreatedOn` datetime DEFAULT NULL,
  `LastAccessedOn` datetime DEFAULT NULL,
  `ModifyByUserAccountId` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `Credits`, `CensusId`, `UserName`, `Pass`, `PhoneNumber`, `FirstName`, `MiddleName`, `LastName`, `UserTypeId`, `IsDeleted`, `ProfilePicture`, `Status`, `IsBan`, `CreatedOn`, `LastAccessedOn`, `ModifyByUserAccountId`) VALUES
(4, 98654, 1, 'admin@gmail.com', '$2y$10$sLi1nXITIj7RJNKtftNT1emH6dG8gA778RcyCElUJ/ycgqBhdqrxG', '09954364202', '[ADMIN]', ' ', 'Pogi', 1, 0, 'cloud-strife-cloud.gif', 'Active', 0, '2021-03-11 22:42:13', '2023-06-23 04:52:56', 4),
(35, NULL, NULL, 'kimmartel.olives@yahoo.com', '$2y$10$ecvCzCvCEhy5N57D6dMHb.DXmaDhP4PtL1e0ZIC1eciC/PXhk8T7G', NULL, 'Cloud', '', 'Strife', 2, 0, 'dog.gif', 'Active', 0, '2023-06-23 04:35:50', '2023-06-23 04:54:43', NULL),
(36, NULL, NULL, 'test@gmail.com', '$2y$10$srE0jZRnph4.OwohOtbAcu64.bBvTR/LlookpqrCX40zCp/pY3eXy', NULL, 'Kayleigh', '', 'A', 2, 0, 'default.gif', 'Active', 0, '2023-06-23 05:02:24', '2023-06-23 05:02:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `craft_accessories_legendary`
--
ALTER TABLE `craft_accessories_legendary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `craft_weapon_legendary`
--
ALTER TABLE `craft_weapon_legendary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `craft_accessories_legendary`
--
ALTER TABLE `craft_accessories_legendary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `craft_weapon_legendary`
--
ALTER TABLE `craft_weapon_legendary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
