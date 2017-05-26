-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2017 at 05:38 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `mapping_subsection_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `mapping_subsection_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 'dagasatvik10@gmail.com', '2016-10-20 03:44:30', '2016-10-20 03:44:30'),
(2, 1, 'Satvik', '2016-10-20 03:45:13', '2016-10-20 03:45:21'),
(3, 3, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(4, 4, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(5, 5, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(6, 6, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(7, 7, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(10, 10, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(11, 11, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(12, 12, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(13, 13, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(14, 14, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(15, 15, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(16, 16, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(17, 17, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(18, 18, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(19, 19, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(20, 20, '', '2016-10-20 03:45:21', '2016-10-20 03:45:21'),
(106, 106, 'book_lelo', '2017-05-26 12:24:20', '2017-05-26 12:24:20'),
(107, 107, '', '2017-05-26 12:24:20', '2017-05-26 12:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_sections`
--

CREATE TABLE `mapping_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `resume_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mapping_sections`
--

INSERT INTO `mapping_sections` (`id`, `resume_id`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(49, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapping_subsections`
--

CREATE TABLE `mapping_subsections` (
  `id` int(10) UNSIGNED NOT NULL,
  `mapping_section_id` int(10) UNSIGNED NOT NULL,
  `subsection_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mapping_subsections`
--

INSERT INTO `mapping_subsections` (`id`, `mapping_section_id`, `subsection_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 2, 7, NULL, NULL),
(10, 4, 10, NULL, NULL),
(11, 5, 11, NULL, NULL),
(12, 6, 12, NULL, NULL),
(13, 6, 13, NULL, NULL),
(14, 6, 14, NULL, NULL),
(15, 6, 15, NULL, NULL),
(16, 7, 16, NULL, NULL),
(17, 7, 17, NULL, NULL),
(18, 7, 18, NULL, NULL),
(19, 7, 19, NULL, NULL),
(20, 7, 20, NULL, NULL),
(106, 49, 8, NULL, NULL),
(107, 49, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_03_03_135631_create_users_table', 1),
('2016_03_03_135640_create_password_resets_table', 1),
('2016_03_03_135651_create_resumes_table', 1),
('2016_03_03_135821_create_sections_table', 1),
('2016_03_03_135839_create_subsections_table', 1),
('2016_03_03_140014_create_mapping_sections_table', 1),
('2016_03_03_140030_create_mapping_subsections_table', 1),
('2016_03_03_140043_create_details_table', 1),
('2016_08_21_020234_create_linkedin_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('satvikdaga10@gmail.com', 'bd478e0411e7a18320280464e71ce3ad30d7853c7a41d8326aafa9439609aa27', '2017-05-26 04:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, 'r1', '2016-10-20 03:44:30', '2016-10-20 03:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `flag_for` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `flag`, `flag_for`) VALUES
(1, 'Basic Information', 0, 'default and non-repeating'),
(2, 'Education', 1, 'default and repeating'),
(3, 'Projects', 1, 'default and repeating'),
(4, 'Skills', 0, 'default and non-repeating'),
(5, 'Objective', 0, 'default and non-repeating'),
(6, 'Personal Details', 0, 'default and non-repeating'),
(7, 'Work Experience', 1, 'default and repeating');

-- --------------------------------------------------------

--
-- Table structure for table `subsections`
--

CREATE TABLE `subsections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `subsection_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `flag_for` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subsections`
--

INSERT INTO `subsections` (`id`, `section_id`, `subsection_name`, `flag`, `flag_for`) VALUES
(1, 1, 'Name', 0, 'default and non-repeating'),
(2, 1, 'Email', 0, 'default and non-repeating'),
(3, 1, 'Websites', 1, 'default and repeating'),
(4, 2, 'Course Name', 0, 'default and non-repeating'),
(5, 2, 'Institution', 0, 'default and non-repeating'),
(6, 2, 'Passing Year', 0, 'default and non-repeating'),
(7, 2, 'Marks', 0, 'default and non-repeating'),
(8, 3, 'Project Name', 0, 'default and non-repeating'),
(9, 3, 'Project Description', 3, 'default text-area and non-repe'),
(10, 4, 'Skill', 1, 'default and repeating'),
(11, 5, 'Objective', 3, 'default text-area and non-repe'),
(12, 6, 'Father''s Name', 0, 'default and non-repeating'),
(13, 6, 'Contact No.', 0, 'default and non-repeating'),
(14, 6, 'Address', 3, 'default textarea and non-repe'),
(15, 6, 'Country', 0, 'default and non-repeating'),
(16, 7, 'Job Title', 0, 'default and non-repeating'),
(17, 7, 'Company', 0, 'default and non-repeating'),
(18, 7, 'Start Date', 0, 'default and non-repeating'),
(19, 7, 'End Date', 0, 'default and non-repeating'),
(20, 7, 'Other Information', 3, 'default text-area and non-rep');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'img/default_avatar.png',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Satvik Daga', 'dagasatvik10@gmail.com', '$2y$10$.DPJXh1sMGITBEB/lDY3S.vsBrzDBIRvjzsUXDbdmibcs9rfn/eLq', 'https://lh5.googleusercontent.com/-sr9U7AWIQsw/AAAAAAAAAAI/AAAAAAAAJUk/3lqHRJkaH4E/photo.jpg?sz=1950', 'xIpSnP65KHeq0jUl3i3sCbTmQ8sVITgk1RVjqAzTu2rW4sEL8mHiUfl6uWpy', '2016-09-22 23:31:47', '2017-06-03 22:08:10'),
(6, 'Satvik Daga', 'satvikdaga10@gmail.com', '$2y$10$Vp/G.jnJHyIdz5fvQsQSEO18iuvX5nqH/ScnCBdX9PKdRS7kv0plK', 'https://graph.facebook.com/v2.8/108480729741993/picture?width=1920', '5IzkY22JCE7boyaN6yRCDQXsJM96Iw25BWsO8RjqqHYNOg6GmrwyKAwQ3jlX', '2016-10-19 11:18:46', '2017-05-26 10:46:30'),
(15, 'Satvik Daga', 'dagasatvik@gmail.com', '$2y$10$f/bbTJDRa/JDxpJqvWO1GeI9FJE1DDzehwemm4q6.qxX3a6Aa8Kh2', 'https://graph.facebook.com/v2.8/1490131714372212/picture?width=1920', 'E56lru6nEMmZUXHGwZsakZnwaE0FU197BRTtDF2nh2czuiI33AlPjg9pmUeR', '2017-05-26 03:53:44', '2017-05-26 10:55:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_mapping_subsection_id_foreign` (`mapping_subsection_id`);

--
-- Indexes for table `mapping_sections`
--
ALTER TABLE `mapping_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapping_sections_resume_id_foreign` (`resume_id`),
  ADD KEY `mapping_sections_section_id_foreign` (`section_id`);

--
-- Indexes for table `mapping_subsections`
--
ALTER TABLE `mapping_subsections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapping_subsections_mapping_section_id_foreign` (`mapping_section_id`),
  ADD KEY `mapping_subsections_subsection_id_foreign` (`subsection_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resumes_user_id_foreign` (`user_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsections`
--
ALTER TABLE `subsections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subsections_section_id_foreign` (`section_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `mapping_sections`
--
ALTER TABLE `mapping_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `mapping_subsections`
--
ALTER TABLE `mapping_subsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subsections`
--
ALTER TABLE `subsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_mapping_subsection_id_foreign` FOREIGN KEY (`mapping_subsection_id`) REFERENCES `mapping_subsections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mapping_sections`
--
ALTER TABLE `mapping_sections`
  ADD CONSTRAINT `mapping_sections_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapping_sections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapping_subsections`
--
ALTER TABLE `mapping_subsections`
  ADD CONSTRAINT `mapping_subsections_mapping_section_id_foreign` FOREIGN KEY (`mapping_section_id`) REFERENCES `mapping_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapping_subsections_subsection_id_foreign` FOREIGN KEY (`subsection_id`) REFERENCES `subsections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subsections`
--
ALTER TABLE `subsections`
  ADD CONSTRAINT `subsections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
