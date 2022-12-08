-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 09:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiuse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbschedule`
--

CREATE TABLE `tbschedule` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbschedule`
--

INSERT INTO `tbschedule` (`id`, `userid`, `start_date`, `end_date`, `start_time`, `end_time`, `title`, `description`) VALUES
(4, '6C4E2C5D-BBBB-4386-AA71-B7F56727433C', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(5, '6C4E2C5D-BBBB-4386-AA71-B7F56727433C', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Leadership', 'leadership development meeting'),
(6, '6C4E2C5D-BBBB-4386-AA71-B7F56727433C', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Sales', 'service sales'),
(7, 'CBB8569D-C331-4629-A1F7-236BFA1A2822', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(8, 'CBB8569D-C331-4629-A1F7-236BFA1A2822', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Leadership', 'leadership development meeting'),
(9, 'F29B9474-CABC-46E3-8B75-66281ABFBA92', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(10, 'F29B9474-CABC-46E3-8B75-66281ABFBA92', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Leadership', 'leadership development meeting'),
(11, 'EB3741EF-929D-430C-B637-EA5425ABB0E7', '2022-06-24', '2022-06-24', '8:00', '8:30', 'standup', 'standup meeting'),
(12, '64F25F3B-0F65-45EE-92A7-2B53E58B5CDD', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Dev meeting', 'developer meeting'),
(13, '7EE29BBE-259C-402B-B870-7C32FC845674', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(14, '7EE29BBE-259C-402B-B870-7C32FC845674', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Training', 'training for interns'),
(15, '7EE29BBE-259C-402B-B870-7C32FC845674', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(16, '24D54F49-1D8C-417A-9B43-AC12F43DE294', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(17, '24D54F49-1D8C-417A-9B43-AC12F43DE294', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Training', 'training for interns'),
(18, '24D54F49-1D8C-417A-9B43-AC12F43DE294', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(19, 'A44424B0-3253-4EE7-9060-7C977F4840C8', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(20, 'A44424B0-3253-4EE7-9060-7C977F4840C8', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Training', 'training for interns'),
(21, 'A44424B0-3253-4EE7-9060-7C977F4840C8', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(22, 'B8501AFC-AD8F-4EBD-B733-87D9DA6AD713', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(23, 'B8501AFC-AD8F-4EBD-B733-87D9DA6AD713', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Leadership meeting', 'leadership development meeting'),
(24, 'B8501AFC-AD8F-4EBD-B733-87D9DA6AD713', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(25, '57569BE4-FF4A-4C56-A274-A24CBB7E4672', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(26, '57569BE4-FF4A-4C56-A274-A24CBB7E4672', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Leadership meeting', 'leadership development meeting'),
(27, '57569BE4-FF4A-4C56-A274-A24CBB7E4672', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(28, 'F33941A1-7623-4192-80E0-7B1511C17883', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(29, 'F33941A1-7623-4192-80E0-7B1511C17883', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Leadership meeting', 'leadership development meeting'),
(30, 'F33941A1-7623-4192-80E0-7B1511C17883', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(31, 'A31CDB07-17EE-4F50-B635-247BB9163EDF', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(32, 'A31CDB07-17EE-4F50-B635-247BB9163EDF', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Leadership meeting', 'leadership development meeting'),
(33, 'A31CDB07-17EE-4F50-B635-247BB9163EDF', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(34, '93179369-BD5D-42CE-A266-8F164D9C0700', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(35, '93179369-BD5D-42CE-A266-8F164D9C0700', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Training', 'training for interns'),
(36, '93179369-BD5D-42CE-A266-8F164D9C0700', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(37, '51E7ABC4-7F01-42EF-A6F2-E8E3379FBB26', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(38, '51E7ABC4-7F01-42EF-A6F2-E8E3379FBB26', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Training', 'training for interns'),
(39, '51E7ABC4-7F01-42EF-A6F2-E8E3379FBB26', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(40, 'C9191B2C-08D1-48F0-8F19-FE4FA92A852A', '2022-06-24', '2022-06-24', '8:00', '8:30', 'standup', 'standup meeting'),
(41, 'A7DF2E8E-71DD-4C32-AE92-EE33E2D4DF18', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(42, 'A7DF2E8E-71DD-4C32-AE92-EE33E2D4DF18', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Training', 'training for interns'),
(43, 'A7DF2E8E-71DD-4C32-AE92-EE33E2D4DF18', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(44, 'BD506F8D-F4CD-4E19-ABCA-573808390FB6', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(45, 'BD506F8D-F4CD-4E19-ABCA-573808390FB6', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Training', 'training for interns'),
(46, 'BD506F8D-F4CD-4E19-ABCA-573808390FB6', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(47, '36BFBBB6-15ED-4222-9528-9830434A59FC', '2022-06-24', '2022-06-24', '8:00', '8:30', 'Training', 'training for interns'),
(48, '36BFBBB6-15ED-4222-9528-9830434A59FC', '2022-06-24', '2022-06-24', '9:00', '9:30', 'Training', 'training for interns'),
(49, '36BFBBB6-15ED-4222-9528-9830434A59FC', '2022-06-24', '2022-06-24', '10:00', '15:30', 'Training', 'training for interns'),
(75, '', '2022-12-07', '2022-12-07', '18:41', '20:47', 'ooooooooooo', 'oo oo ooo ooooooooooooooooo'),
(81, 'F29B9474-CABC-46E3-8B75-66281ABFBA92', '2022-12-07', '2022-12-07', '19:35', '21:35', 'Lion King', 'We enjoy movie'),
(89, 'CBB8569D-C331-4629-A1F7-236BFA1A2822', '2022-06-24', '2022-06-24', '09:00', '09:30', 'yeah yeah', 'this event'),
(90, '6C4E2C5D-BBBB-4386-AA71-B7F56727433C', '2022-12-08', '2022-12-08', '00:00', '01:00', 'Hire Moloko', 'Hiring a good employee'),
(91, 'fo3514115151566151', '2022-12-08', '2022-12-08', '00:07', '02:07', 'Reporter', 'No one reports');

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `reports_to` varchar(255) NOT NULL,
  `idt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`id`, `username`, `firstname`, `surname`, `password`, `title`, `reports_to`, `idt`) VALUES
(29, 'knopel', 'Leslie', 'Knope', '$2y$10$NQc1wb6s5aWcdeaZUkg1EeuQg.HymDc4adMKC6BO9KlKNO/6nzl4C', 'CEO', 'null', '6C4E2C5D-BBBB-4386-AA71-B7F56727433C'),
(30, 'dwyera', 'Andy', 'Dwyer', '$2y$10$WGmKQ7W335L4.NqKGIlBAepfUleyaQwJbXXXQP0lMEMCd84m4uxD.', 'Project Manager', '6C4E2C5D-BBBB-4386-AA71-B7F56727433C', 'CBB8569D-C331-4629-A1F7-236BFA1A2822'),
(31, 'beaslyp', 'Pam', 'Beasly', '$2y$10$zWkBFO8nqTXnDurJSJE0c.Vl3icoBvgl.cmSL38g0Pe1K3Aa.ywy.', 'Functional Consultant', 'CBB8569D-C331-4629-A1F7-236BFA1A2822', 'F29B9474-CABC-46E3-8B75-66281ABFBA92'),
(32, 'ludgatea', 'April', 'Ludgate', '$2y$10$qs2YkiDvsiHwAwZthZ7yqexsgVkm4WzA2ggguRMh7xgH2HS8qqKRa', 'Functional Consultant', 'CBB8569D-C331-4629-A1F7-236BFA1A2822', 'EB3741EF-929D-430C-B637-EA5425ABB0E7'),
(33, 'baskinc', 'Carole', 'Baskin', '$2y$10$i2bs6ZtVF1NJaGDMdUKAseBQXd0fGVcR6e7h7WtUXijuPORY9nC42', 'Technical Consultant', 'CBB8569D-C331-4629-A1F7-236BFA1A2822', '64F25F3B-0F65-45EE-92A7-2B53E58B5CDD'),
(34, 'schruted', 'Dwight', 'Schrute', '$2y$10$j6hN6d017DkXl3wz77Lb0.5RS0h90TJyRBVxKIWorUzqfHH43L4Wq', 'Intern', '64F25F3B-0F65-45EE-92A7-2B53E58B5CDD', '7EE29BBE-259C-402B-B870-7C32FC845674'),
(35, 'haverfordt', 'Tom', 'Haverford', '$2y$10$EpipKrK4R9n4v9aAut7LxeE1H29AsU/F.6P4zFpqeFNVt3vtJwZWW', 'Intern', '64F25F3B-0F65-45EE-92A7-2B53E58B5CDD', '24D54F49-1D8C-417A-9B43-AC12F43DE294'),
(36, 'scottm', 'Michael', 'Scott', '$2y$10$BhtBzHKDumqA41k7CBsGLemoq4iK1zp8h1fxtfDxof2TG3mo8mrg6', 'Intern', 'CBB8569D-C331-4629-A1F7-236BFA1A2822', 'A44424B0-3253-4EE7-9060-7C977F4840C8'),
(37, 'halpertj', 'Jim', 'Halpert', '$2y$10$kORgb/x42h5tHL3nIukAUuRrXcPV3dFQ.57XPTrulDsKKhbidjNyu', 'HR Manager', '6C4E2C5D-BBBB-4386-AA71-B7F56727433C', 'B8501AFC-AD8F-4EBD-B733-87D9DA6AD713'),
(38, 'wyattb', 'Ben', 'Wyatt', '$2y$10$hP8VKr7SCLaBeAhL.ol9Duwd1gYLfFqfufVeKV2SvYQUrQtUDhqee', 'HR Officer', 'B8501AFC-AD8F-4EBD-B733-87D9DA6AD713', '57569BE4-FF4A-4C56-A274-A24CBB7E4672'),
(39, 'thegreyg', 'Gandalf', 'The Grey', '$2y$10$UZvxw7s/BPeG4X5xrhWnp.bNoOoNzJck/WSeNtdUb0bu87W.867z.', 'HR Officer', 'B8501AFC-AD8F-4EBD-B733-87D9DA6AD713', 'F33941A1-7623-4192-80E0-7B1511C17883'),
(40, 'potterh', 'Harry', 'Potter', '$2y$10$ZvbMCe0XDOLMpC7aW4DAbOkmzfXuXuWyk9Vw7uVYMUGw3VSwawHHG', 'HR Officer', 'B8501AFC-AD8F-4EBD-B733-87D9DA6AD713', 'A31CDB07-17EE-4F50-B635-247BB9163EDF'),
(41, 'speedyRenels', 'Marcel', 'Renels', '$2y$10$6zmgcEtXuwXW.4coxjQJoe7Z2iybZZieFRnbVojhVpTsfRgDBnonq', 'Intern', 'B8501AFC-AD8F-4EBD-B733-87D9DA6AD713', '93179369-BD5D-42CE-A266-8F164D9C0700'),
(42, 'Brokei', 'Thomas', 'Renels', '$2y$10$bJy0ZCHoMbayX32bjQEouOz4PdQevM9riJNYvBsZF/YBYcVr9EV5e', 'Intern', 'EB3741EF-929D-430C-B637-EA5425ABB0E7', '51E7ABC4-7F01-42EF-A6F2-E8E3379FBB26'),
(43, 'Louis', 'Louis', 'Late', '$2y$10$9Tt1jp3nv.P4cw75fEjf/ux/Pnu3Z6X6zIMEUZkPIm3xk8evphDQ6', 'Software Engineer', 'CBB8569D-C331-4629-A1F7-236BFA1A2822', 'C9191B2C-08D1-48F0-8F19-FE4FA92A852A'),
(44, 'KaenuReeves', 'Keanu', 'integ', '$2y$10$CGGRJ0eg881qKRQDfwzMfumo94kSej69jTK9RiI8MxPztYtS4QWD2', 'Intern', 'CBB8569D-C331-4629-A1F7-236BFA1A2822', 'A7DF2E8E-71DD-4C32-AE92-EE33E2D4DF18'),
(45, 'Vince', 'Vincent', 'Baker', '$2y$10$DfWPOdXyo4TqfDiMybyaMe8aUyWv3FnxO9jwx8hkexqONhBopG3gS', 'Intern', 'CBB8569D-C331-4629-A1F7-236BFA1A2822', 'BD506F8D-F4CD-4E19-ABCA-573808390FB6'),
(46, 'Jesi', 'Jesse', 'Kolvan', '$2y$10$Vg/zPBiOtD94iO9ybd11Z.sMfg2n51XzWFsrOaizeBRIOR3kIcU7a', 'Intern', 'CBB8569D-C331-4629-A1F7-236BFA1A2822', '36BFBBB6-15ED-4222-9528-9830434A59FC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbschedule`
--
ALTER TABLE `tbschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbschedule`
--
ALTER TABLE `tbschedule`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
