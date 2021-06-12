-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2021 at 10:17 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sn`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `freelance` varchar(255) DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_text` text,
  `avatar` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `position_type` text,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `age`, `residence`, `address`, `mail`, `phone`, `freelance`, `about_title`, `about_text`, `avatar`, `profile_image`, `position_type`, `latitude`, `longitude`, `created_at`, `updated_at`, `resume`) VALUES
(1, 'Alex Smith', 28, 'USA', '700 Oak Street, Brockton MA 2301', 'demomail@gmail.com', '+0123 123 856', 'Available', 'Hi There! I\'m Alex Smith', '<span style=\"color: rgb(85, 85, 85); font-family: Poppins, sans-serif;\">Am of mr friendly by strongly peculiar juvenile. Unpleasant it sufficient simplicity am by friendship no inhabiting. Goodness doubtful material has denoting suitable she two. Dear mean she way and poor bred they come. He otherwise me incommode explained.</span><br>', 'avatar_1610399894194335495.jpg', 'profile_image_1610403215465288306.jpg', 'Full Stack Web Developer, UI/UX Designer, Professional Photographer', NULL, NULL, NULL, '2021-01-11 19:22:46', 'resume_1574956946967088814.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(225) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `image`, `created_at`, `updated_at`, `first_name`, `last_name`, `position`) VALUES
(1, 'admin', 'mamun@gmail.com', '$2y$10$T96/qasvzCIwvoxYeVrU9evunzb29/ymFgh.ZROJVpH/A4ZRLq7qa', 'adminProfile_16104197641518493373.jpg', NULL, '2021-03-15 05:40:36', 'Alex', 'Smith', 'Full-Stack Developer');

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `date`, `created_at`, `updated_at`) VALUES
(6, '02/2020', '2020-05-15 22:26:15', '2020-05-15 22:26:15'),
(7, '03/2020', '2020-05-15 22:26:22', '2020-05-15 22:26:22'),
(8, '05/2020', '2020-05-15 22:26:28', '2020-05-15 22:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `bcategories`
--

CREATE TABLE `bcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bcategories`
--

INSERT INTO `bcategories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Web Design', 1, '2019-11-15 09:22:45', '2019-11-27 12:39:37'),
(6, 'Web Development', 1, '2019-11-15 09:22:53', '2019-11-27 12:39:47'),
(7, 'Graphic Design', 1, '2019-11-15 12:09:14', '2019-11-27 12:40:00'),
(8, 'Digital Marketing', 1, '2019-11-27 12:40:13', '2019-11-27 12:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `bcategory_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `content` text,
  `meta_keywords` text,
  `meta_description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `share_code` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `bcategory_id`, `title`, `slug`, `main_image`, `content`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`, `status`, `share_code`) VALUES
(5, 5, 'The 5 Real Questions to Ask Potential Web Design Agency', 'the-5-real-questions-to-ask-potential-web-design-agency', '1574880600436805506.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'png,swift,laravel', 'The 5 Real Questions to Ask Potential Web Design Agency', '2019-02-16 08:46:21', '2021-01-11 20:48:39', 1, ''),
(6, 6, 'A series of iOS 7 inspire vector Questions Ask icons.', 'a-series-of-ios-7-inspire-vector-questions-ask-icons', '1574880560616046801.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'java,php,css', 'A series of iOS 7 inspire vector Questions Ask icons.', '2019-11-16 09:07:34', '2021-01-11 20:48:33', 1, ''),
(8, 5, 'Sed ut perspiciatis unde omnis iste natus.', 'sed-ut-perspiciatis-unde-omnis-iste-natus', '15748805421473543027.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'php,js,css', 'Sed ut perspiciatis unde omnis iste natus.', '2019-11-16 09:41:36', '2021-01-11 20:48:27', 1, ''),
(10, 7, '8 Things To Know When Designing Augmented', '8-things-to-know-when-designing-augmented', '1574880515366058420.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'css,php,nod', '8 Things To Know When Designing Augmented', '2019-11-16 09:48:21', '2021-01-11 20:48:21', 1, ''),
(11, 8, '7 steps to optimize your website for Millennials', '7-steps-to-optimize-your-website-for-millennials', '15748804792062647639.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'js,php,css', '7 steps to optimize your website for Millennials', '2019-11-24 10:46:23', '2021-01-11 20:48:15', 1, ''),
(12, 7, '5 reasons why your website needs more whitespace', '5-reasons-why-your-website-needs-more-whitespace', '1574880318559838971.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'js,php', '5 reasons why your website needs more whitespace', '2019-11-24 10:46:47', '2021-01-11 20:48:05', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(3, '15738179371986423550.png', 'https://laravel.com/', '2019-11-15 05:38:58', '2019-11-15 05:38:58'),
(4, '1573817960743350904.png', 'https://laracasts.com/', '2019-11-15 05:39:20', '2019-11-15 05:48:11'),
(5, '1573818144589173705.png', 'https://laracasts.com/', '2019-11-15 05:42:24', '2019-11-15 05:42:24'),
(6, '1573818267855787415.png', 'https://laracasts.com/', '2019-11-15 05:44:27', '2019-11-15 05:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `school` varchar(225) DEFAULT NULL,
  `field` varchar(225) DEFAULT NULL,
  `description` text,
  `from_date` varchar(255) DEFAULT NULL,
  `date_to` varchar(255) DEFAULT NULL,
  `current` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `school`, `field`, `description`, `from_date`, `date_to`, `current`, `created_at`, `updated_at`) VALUES
(9, 'The University of Alabama', 'BSC IN CSS', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia.', '2015', '2017', NULL, '2019-11-23 12:47:16', '2019-11-26 12:54:16'),
(11, 'University of British Columbia', 'BSC IN CSS', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia.', '2017', '2018', NULL, '2019-11-26 12:48:47', '2019-12-09 09:09:24'),
(13, 'University of the Incarnate Word', 'BSC IN CSS', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia.', '2019', NULL, 1, '2019-11-26 12:50:30', '2019-12-05 10:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `experinces`
--

CREATE TABLE `experinces` (
  `id` int(11) NOT NULL,
  `company` varchar(225) DEFAULT NULL,
  `field` varchar(225) DEFAULT NULL,
  `description` text,
  `from_date` varchar(255) DEFAULT NULL,
  `date_to` varchar(255) DEFAULT NULL,
  `current` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experinces`
--

INSERT INTO `experinces` (`id`, `company`, `field`, `description`, `from_date`, `date_to`, `current`, `created_at`, `updated_at`) VALUES
(8, 'Ideal Devs', 'Senior Ui/Ux Designer', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia.', '2014', '2016', NULL, '2019-11-23 12:50:49', '2019-11-26 12:58:59'),
(9, 'Ideal Devs', 'Lead Ui/Ux Designer', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia.', '2015', '2018', NULL, '2019-11-23 12:51:27', '2019-11-26 12:58:11'),
(10, 'Ideal Devs', 'Web Developer', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia.', '2016', NULL, 1, '2019-11-26 12:56:40', '2019-12-06 01:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Which license do I need ?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor', '2019-12-25 00:53:10', '2019-12-25 00:53:10'),
(5, 'it is refundable ?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor', '2019-12-25 00:54:03', '2019-12-25 00:58:40'),
(6, 'How do I get access to a App ?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor', '2019-12-25 00:57:08', '2019-12-25 00:59:11'),
(7, 'How do I see previous orders ?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor', '2019-12-25 00:57:21', '2019-12-25 00:59:05'),
(8, 'It is refundable ?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor', '2019-12-25 00:57:40', '2019-12-25 00:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `funfacts`
--

CREATE TABLE `funfacts` (
  `id` int(11) NOT NULL,
  `name` varchar(125) DEFAULT NULL,
  `value` int(10) DEFAULT NULL,
  `icon` varchar(255) DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funfacts`
--

INSERT INTO `funfacts` (`id`, `name`, `value`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Work Done', 642, '15765234241155195086.png', NULL, '2019-12-16 13:10:24'),
(25, 'Happy Clients', 576, '15765234441378728684.png', '2019-11-04 11:37:03', '2019-12-16 13:10:44'),
(27, 'Experience Years', 5, '15765234541659685266.png', '2019-11-04 13:48:21', '2019-12-16 13:10:54'),
(28, 'Awards Won', 15, '15765234641900716547.png', '2019-11-18 07:13:39', '2019-12-16 13:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Travelling', '15765747111586521826.png', '2019-12-17 03:25:11', '2019-12-17 03:25:11'),
(2, 'Bicycling', '1576574729565697819.png', '2019-12-17 03:25:29', '2019-12-17 03:25:29'),
(3, 'Watch Movies', '15765747461757392523.png', '2019-12-17 03:25:46', '2019-12-17 03:25:46'),
(4, 'Sopping', '15765747641184192978.png', '2019-12-17 03:26:04', '2019-12-17 03:26:04'),
(5, 'Reading Book', '1576574783939763622.png', '2019-12-17 03:26:23', '2019-12-17 03:26:23'),
(6, 'Playing Tennis', '1576574806346662218.png', '2019-12-17 03:26:46', '2019-12-17 03:26:46'),
(7, 'Photography', '1576574827820538546.png', '2019-12-17 03:27:07', '2019-12-17 03:27:07'),
(8, 'Skating', '1576574839411373498.png', '2019-12-17 03:27:19', '2019-12-17 03:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int(11) NOT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Operating systems (Windows and MacOS)', '2019-12-16 09:12:02', '2019-12-16 09:12:02'),
(2, 'Office suites (Microsoft Office, G Suite)', '2019-12-16 09:12:19', '2019-12-16 09:12:19'),
(3, 'Presentation software (PowerPoint, Keynote)', '2019-12-16 09:12:27', '2019-12-16 09:12:27'),
(5, 'Email Communication', '2019-12-16 09:12:54', '2019-12-16 09:12:54'),
(6, 'Spreadsheets (Excel, Google Spreadsheets, etc.)', '2019-12-16 09:14:14', '2019-12-16 10:43:58'),
(8, 'iOS and android apps', '2019-12-16 10:55:49', '2019-12-16 10:55:49'),
(9, 'Search engine marketing', '2019-12-16 10:55:58', '2019-12-16 10:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `is_default` int(3) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `direction` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `is_default`, `created_at`, `updated_at`, `direction`) VALUES
(21, 'English', 'en', 1, '2019-10-11 14:34:11', '2020-01-25 04:06:01', 'ltr'),
(40, 'Hindi', 'hi', 0, '2019-12-20 09:08:18', '2020-01-25 04:02:37', 'ltr'),
(42, 'Spanish', 'es', 0, '2019-12-21 06:32:44', '2020-01-25 06:08:26', 'ltr'),
(43, 'العربي', 'ar', 0, '2020-01-25 06:08:17', '2020-01-25 06:08:32', 'rtl');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'User 1', 'user1@gmail.com', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2020-05-16 01:02:23', '2020-05-16 01:02:23'),
(2, 'User 2', 'user2@gmail.com', 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2020-05-16 01:03:00', '2020-05-16 01:03:00'),
(3, 'User 3', 'user3@gmail.com', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source', '2020-05-16 01:03:27', '2020-05-16 01:03:27'),
(4, 'User 4', 'user4@gmail.com', 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2020-05-16 01:03:55', '2020-05-16 01:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `pcategories`
--

CREATE TABLE `pcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pcategories`
--

INSERT INTO `pcategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web Design ', NULL, NULL),
(2, 'Web Development', NULL, NULL),
(3, 'Logo Design', '2019-11-13 11:08:36', '2019-11-13 11:08:36'),
(6, 'SEO and Merketing', '2019-11-13 11:10:59', '2019-11-13 11:24:54'),
(8, 'Digital Merketind', '2019-11-13 11:24:17', '2019-11-13 11:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `submission_date` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `content` text,
  `status` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `slug`, `start_date`, `submission_date`, `client_name`, `content`, `status`, `created_at`, `updated_at`, `featured_image`, `service_id`) VALUES
(10, 'Bprime - Business and Corporate HTML Template', 'bprime-business-and-corporate-html-template', '12/16/2019', '12/23/2019', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Porichoy – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', 1, '2019-11-27 06:40:36', '2021-01-11 14:04:34', 'portfolio_16103954741387972396.jpg', 7),
(11, 'Porichoy - Personal Portfolio HTML Template', 'porichoy-personal-portfolio-html-template', '12/02/2019', '12/24/2019', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Porichoy – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', 0, '2019-11-27 06:41:51', '2021-01-10 13:57:31', 'portfolio_16103086511697343389.jpg', 7),
(12, 'Applus - App Landing Page', 'applus-app-landing-page', '12/11/2019', '12/27/2019', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Porichoy – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', 1, '2019-11-27 06:42:37', '2021-01-11 14:04:17', 'portfolio_16103954571711848737.jpg', 7),
(13, 'Symphony - One Page Parallax', 'symphony-one-page-parallax', '04/12/2013', '10/11/2016', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Porichoy – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', 1, '2019-11-27 06:44:26', '2021-01-11 14:04:06', 'portfolio_1610395446916651242.jpg', 7),
(14, 'Businesio - One Page Parallax', 'businesio-one-page-parallax', '05/11/2015', '12/27/2019', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; padding: 0px 0px 10px; color: rgb(84, 84, 84); font-weight: inherit; font-size: 20px; line-height: 30px; border-bottom: 1px solid rgb(212, 212, 212); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: inherit;\">Sova – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-size: 20px; font-weight: bold;\">Security:</strong></p><ul style=\"list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; padding: 0px 0px 10px; color: rgb(84, 84, 84); font-weight: inherit; font-size: 20px; line-height: 30px; border-bottom: 1px solid rgb(212, 212, 212); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', 1, '2019-11-27 06:45:23', '2021-03-15 05:41:29', 'portfolio_16158084891976803166.jpg', 7),
(15, 'Sova – Resume / CV / Portfolio CMS', 'sova-resume-cv-portfolio-cms', '05/11/2015', '12/27/2019', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; padding: 0px 0px 10px; color: rgb(84, 84, 84); font-weight: inherit; font-size: 20px; line-height: 30px; border-bottom: 1px solid rgb(212, 212, 212); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: inherit;\">Sova – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-size: 20px; font-weight: bold;\">Security:</strong></p><ul style=\"list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; padding: 0px 0px 10px; color: rgb(84, 84, 84); font-weight: inherit; font-size: 20px; line-height: 30px; border-bottom: 1px solid rgb(212, 212, 212); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"list-style-position: initial; list-style-image: initial; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', 1, '2019-11-27 06:45:23', '2021-02-06 23:00:40', 'portfolio_16126740401353318713.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `portfolio_id`, `image`, `created_at`, `updated_at`) VALUES
(259, 14, 'portfolio_115784643091130003847.jpg', '2020-01-08 00:18:29', '2020-01-08 00:18:29'),
(260, 14, 'portfolio_215784643091774333271.jpg', '2020-01-08 00:18:29', '2020-01-08 00:18:29'),
(261, 14, 'portfolio_315784643091060035971.jpg', '2020-01-08 00:18:29', '2020-01-08 00:18:29'),
(262, 14, 'portfolio_415784643091648223102.jpg', '2020-01-08 00:18:29', '2020-01-08 00:18:29'),
(263, 14, 'portfolio_515784643091992224870.jpg', '2020-01-08 00:18:29', '2020-01-08 00:18:29'),
(264, 13, 'portfolio_1157846432462150839.jpg', '2020-01-08 00:18:44', '2020-01-08 00:18:44'),
(265, 13, 'portfolio_21578464324214787889.jpg', '2020-01-08 00:18:44', '2020-01-08 00:18:44'),
(266, 13, 'portfolio_315784643241002662067.jpg', '2020-01-08 00:18:44', '2020-01-08 00:18:44'),
(267, 13, 'portfolio_415784643242074475201.jpg', '2020-01-08 00:18:44', '2020-01-08 00:18:44'),
(268, 13, 'portfolio_515784643241088042517.jpg', '2020-01-08 00:18:44', '2020-01-08 00:18:44'),
(269, 12, 'portfolio_115784643321144545756.jpg', '2020-01-08 00:18:52', '2020-01-08 00:18:52'),
(270, 12, 'portfolio_215784643322144417306.jpg', '2020-01-08 00:18:52', '2020-01-08 00:18:52'),
(271, 12, 'portfolio_315784643321788830943.jpg', '2020-01-08 00:18:52', '2020-01-08 00:18:52'),
(272, 12, 'portfolio_415784643321395950535.jpg', '2020-01-08 00:18:52', '2020-01-08 00:18:52'),
(273, 12, 'portfolio_515784643321958404347.jpg', '2020-01-08 00:18:52', '2020-01-08 00:18:52'),
(274, 11, 'portfolio_115784643421114112366.jpg', '2020-01-08 00:19:02', '2020-01-08 00:19:02'),
(275, 11, 'portfolio_215784643421637345791.jpg', '2020-01-08 00:19:02', '2020-01-08 00:19:02'),
(276, 11, 'portfolio_31578464342767373238.jpg', '2020-01-08 00:19:02', '2020-01-08 00:19:02'),
(277, 11, 'portfolio_4157846434235974380.jpg', '2020-01-08 00:19:02', '2020-01-08 00:19:02'),
(278, 11, 'portfolio_515784643421207200131.jpg', '2020-01-08 00:19:02', '2020-01-08 00:19:02'),
(279, 10, 'portfolio_115784643501494739719.jpg', '2020-01-08 00:19:10', '2020-01-08 00:19:10'),
(280, 10, 'portfolio_215784643501179789337.jpg', '2020-01-08 00:19:10', '2020-01-08 00:19:10'),
(281, 10, 'portfolio_315784643501015001560.jpg', '2020-01-08 00:19:10', '2020-01-08 00:19:10'),
(282, 10, 'portfolio_415784643501300959590.jpg', '2020-01-08 00:19:10', '2020-01-08 00:19:10'),
(283, 10, 'portfolio_515784643501155689993.jpg', '2020-01-08 00:19:10', '2020-01-08 00:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` int(11) NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `currency`, `price`, `plan_name`, `content`, `created_at`, `updated_at`, `status`) VALUES
(1, '$', '29', 'BASIC PLAN', '<ul><li>15 HTML Pages</li><li>3 Home Pages</li><li>CMS Version&nbsp;</li><li>24/7 Support</li></ul>', NULL, '2021-01-11 18:23:03', 1),
(2, '$', '59', 'STANDARD PLAN', '<ul><li>20 HTML Pages</li><li>3 Home Pages</li><li>CMS Version Not Available</li><li>24/7 Support</li></ul>', NULL, '2021-01-11 18:23:07', 1),
(3, '$', '99', 'PREMIUM PLAN', '<ul><li>30 HTML Pages</li><li>3 Home Pages</li><li>CMS Version Not Available</li><li>24/7 Support</li></ul>', NULL, '2021-01-11 18:23:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scategories`
--

CREATE TABLE `scategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `skills_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scategories`
--

INSERT INTO `scategories` (`id`, `name`, `created_at`, `updated_at`, `status`, `skills_type`) VALUES
(2, 'Language Skills', NULL, '2019-12-16 05:33:53', 1, 'line'),
(7, 'Coding Skills', '2019-12-16 05:33:31', '2019-12-16 05:34:10', NULL, 'line');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(125) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(125) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`, `status`, `featured_image`, `content`) VALUES
(7, 'Web Design', 'web-design', 'Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves.', '1574776871180640025.png', '2019-11-10 04:56:30', '2020-01-08 08:07:33', 1, '1578492453373404993.jpg', '<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp;</p>'),
(8, 'Web Development', 'web-development', 'Hopes lived by rooms oh in no death house. Contented direction september but end led excellent  ourselves.', '1574776906727189926.png', '2019-11-10 09:08:32', '2020-01-08 08:07:22', 1, '15784924422102188212.jpg', '<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp;</p>'),
(11, 'Amazon AWS', 'amazon-aws', 'Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves.', '15747853281204730944.png', '2019-11-26 10:22:08', '2020-01-08 08:07:11', 1, '15784924311210894935.jpg', '<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp;</p>'),
(12, 'Digital Marketing', 'digital-marketing', 'Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves.', '157478552096311219.png', '2019-11-26 10:25:20', '2020-01-08 08:07:00', 1, '15784924202053233232.jpg', '<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp;</p>'),
(13, 'Graphic Design', 'graphic-design', 'Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves.', '1575988323928153989.png', '2019-11-26 10:25:58', '2020-01-08 08:06:50', 1, '15784924101611614581.jpg', '<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp;</p>'),
(14, 'SEO', 'seo', 'Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves.', '15747855841055717113.png', '2019-11-26 10:26:24', '2020-01-08 08:06:30', 1, '15784923901465306395.jpg', '<p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `website_title` varchar(255) DEFAULT NULL,
  `base_color` varchar(255) DEFAULT NULL,
  `header_logo` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `fav_icon` varchar(255) DEFAULT NULL,
  `copyright_text` text,
  `meta_keywords` text,
  `meta_description` text,
  `about_title` varchar(255) DEFAULT NULL,
  `education_title` varchar(255) DEFAULT NULL,
  `experince_title` varchar(255) DEFAULT NULL,
  `service_title` varchar(255) DEFAULT NULL,
  `portfolio_title` varchar(255) DEFAULT NULL,
  `testimonial_title` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `contact_title` varchar(255) DEFAULT NULL,
  `resume_title` varchar(255) DEFAULT NULL,
  `client_title` varchar(255) DEFAULT NULL,
  `is_disqus` int(3) DEFAULT NULL,
  `disqus_username` varchar(255) DEFAULT NULL,
  `is_tawkto` int(3) DEFAULT NULL,
  `tawk_to_api_key` varchar(255) DEFAULT NULL,
  `is_analytics` int(3) DEFAULT NULL,
  `google_analytics_id` varchar(255) DEFAULT NULL,
  `skills_type` varchar(255) DEFAULT NULL,
  `interest_title` varchar(255) DEFAULT NULL,
  `faq_title` varchar(225) DEFAULT NULL,
  `hero_section_video` varchar(255) DEFAULT NULL,
  `home_version` varchar(100) DEFAULT NULL COMMENT 'static, slider, video, water, parallax, particles',
  `faq_video` varchar(255) DEFAULT NULL,
  `faq_video_title` text,
  `knowledge` varchar(255) DEFAULT NULL,
  `pricingplan` varchar(255) DEFAULT NULL,
  `ishome` int(3) DEFAULT NULL,
  `isabout` int(3) DEFAULT NULL,
  `isservice` int(3) DEFAULT NULL,
  `isresume` int(3) DEFAULT NULL,
  `istestimonial` int(3) DEFAULT NULL,
  `isportfolio` int(3) DEFAULT NULL,
  `isblog` int(3) DEFAULT NULL,
  `iscontact` int(3) DEFAULT NULL,
  `isfunfact` int(3) DEFAULT NULL,
  `isinterests` int(3) DEFAULT NULL,
  `ispricingplan` int(3) DEFAULT NULL,
  `isfaq` int(3) DEFAULT NULL,
  `isclient` int(3) DEFAULT NULL,
  `themes` varchar(255) NOT NULL COMMENT 'default,resume,portfolio,agency',
  `ag_title` varchar(150) DEFAULT NULL,
  `ag_subtitle` varchar(255) DEFAULT NULL,
  `is_massenger` int(3) DEFAULT NULL,
  `is_massenger_id` varchar(255) DEFAULT NULL,
  `is_dark` int(3) NOT NULL,
  `iswow` int(3) NOT NULL,
  `ishomedownload` int(3) DEFAULT NULL,
  `isresumedownload` int(3) DEFAULT NULL,
  `ishomesocial` int(3) NOT NULL,
  `contact_mail` varchar(255) DEFAULT NULL,
  `map` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_title`, `base_color`, `header_logo`, `footer_logo`, `fav_icon`, `copyright_text`, `meta_keywords`, `meta_description`, `about_title`, `education_title`, `experince_title`, `service_title`, `portfolio_title`, `testimonial_title`, `blog_title`, `contact_title`, `resume_title`, `client_title`, `is_disqus`, `disqus_username`, `is_tawkto`, `tawk_to_api_key`, `is_analytics`, `google_analytics_id`, `skills_type`, `interest_title`, `faq_title`, `hero_section_video`, `home_version`, `faq_video`, `faq_video_title`, `knowledge`, `pricingplan`, `ishome`, `isabout`, `isservice`, `isresume`, `istestimonial`, `isportfolio`, `isblog`, `iscontact`, `isfunfact`, `isinterests`, `ispricingplan`, `isfaq`, `isclient`, `themes`, `ag_title`, `ag_subtitle`, `is_massenger`, `is_massenger_id`, `is_dark`, `iswow`, `ishomedownload`, `isresumedownload`, `ishomesocial`, `contact_mail`, `map`) VALUES
(1, 'Resume/Portfolio/CV Laravel CMS', '4285F4', 'header_logo_1610285506281145703.png', 'footer_logo_1610285518854102388.png', 'fav_icon_15754604121407404171.png', 'Copyright © 2021. All rights reserved by GeniusDevs', 'cv,resume,portfolio,v-card', 'Porichoy - Resume/CV/Portfolio CMS', 'About Me', 'Education', 'Experince', 'My Services', 'Recent Work', 'Testimonial', 'My Blog', 'Contact Me', 'My Resume', 'My Clients', 1, 'porichoy', 1, NULL, 1, NULL, NULL, 'My Interests', 'FAQ', 'https://www.youtube.com/watch?v=k0lHuz4vIyM', 'particles', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/feLLE-MrLhE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'This is demo video title for test, for only demo Purpose !', 'Basic Knowledge', 'Pricing Plan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'default', 'Clean, Awesome And Multi-Purpose', 'Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual.', 1, NULL, 0, 0, 1, 1, 1, 'contact@pfolio.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196281.12937357728!2d-104.99519427659213!3d39.76451867231318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876b80aa231f17cf%3A0x118ef4f8278a36d6!2sDenver%2C%20CO%2C%20USA!5e0!3m2!1sen!2sbd!4v1593064270142!5m2!1sen!2sbd\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `scategory_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `scategory_id`, `name`, `level`, `created_at`, `updated_at`) VALUES
(1, 7, 'CSS', 80, NULL, '2019-12-16 05:45:51'),
(2, 2, 'Hindi', 92, NULL, '2019-11-26 12:36:46'),
(3, 2, 'Arabic', 88, '2019-11-14 14:38:53', '2019-11-26 12:36:30'),
(6, 7, 'HTML', 95, '2019-11-16 10:16:43', '2019-12-16 05:46:00'),
(7, 2, 'Spanish', 80, '2019-11-16 10:17:03', '2019-11-26 12:35:57'),
(8, 2, 'English', 99, '2019-11-16 10:17:17', '2019-11-26 12:35:36'),
(9, 7, 'PHP', 75, '2019-11-26 12:37:09', '2019-12-16 05:45:20'),
(10, 7, 'JS', 90, '2019-11-26 12:37:33', '2019-12-16 05:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(24, '16126726881750689218.jpg', '2021-02-06 22:38:08', '2021-02-06 22:38:08'),
(25, '16126726881570953698.jpg', '2021-02-06 22:38:08', '2021-02-06 22:38:08'),
(26, '1612672692819946376.jpg', '2021-02-06 22:38:12', '2021-02-06 22:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(2, 'fab fa-facebook-f', 'https://laracasts.com/', '2019-11-23 17:16:46', '2019-11-23 17:16:46'),
(3, 'fab fa-twitter', 'https://laracasts.com/', '2019-11-23 17:25:03', '2019-11-23 17:25:03'),
(4, 'fab fa-linkedin-in', 'https://laracasts.com/', '2019-11-23 17:25:13', '2019-11-23 17:25:13'),
(6, 'fab fa-instagram', 'https://laracasts.com/', '2019-11-23 17:25:39', '2019-12-12 15:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `message` text,
  `image` varchar(255) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `message`, `image`, `rating`, `created_at`, `updated_at`) VALUES
(3, 'Jameson', 'CEO at IdealDevs', 'Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back.', '15748788971413192256.jpg', 5, '2019-11-15 02:48:29', '2019-11-27 12:21:37'),
(4, 'Harrison', 'DH at IdealDevs', 'Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back.', '1574878935879289110.jpg', 5, '2019-11-15 02:48:48', '2019-11-27 12:26:00'),
(5, 'Nathaniel', 'COO at IdealDevs', 'Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back.', '1574878942561658284.jpg', 5, '2019-11-15 04:40:33', '2019-11-27 12:25:35'),
(8, 'Jinea Khan', 'CEO of Facebook', 'Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back.', '15798031042035616795.jpg', 5, '2020-01-23 12:11:44', '2020-01-23 12:11:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bcategories`
--
ALTER TABLE `bcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experinces`
--
ALTER TABLE `experinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funfacts`
--
ALTER TABLE `funfacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pcategories`
--
ALTER TABLE `pcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scategories`
--
ALTER TABLE `scategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bcategories`
--
ALTER TABLE `bcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `experinces`
--
ALTER TABLE `experinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `funfacts`
--
ALTER TABLE `funfacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pcategories`
--
ALTER TABLE `pcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scategories`
--
ALTER TABLE `scategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
