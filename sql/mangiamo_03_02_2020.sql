-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 05:55 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangiamo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(2, NULL, 1, 'Category 2', 'category-2', '2019-12-09 22:04:27', '2020-01-13 01:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 8, 'category_id', 'text', 'Category Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(58, 8, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(59, 8, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 5),
(60, 8, 'description', 'rich_text_box', 'Description', 0, 0, 1, 1, 1, 1, '{}', 6),
(61, 8, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(62, 8, 'gallery', 'multiple_images', 'Gallery', 0, 0, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 8),
(63, 8, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"draft\",\"options\":{\"published\":\"published\",\"draft\":\"draft\",\"pending\":\"pending\"}}', 9),
(64, 8, 'seo_title', 'text', 'Seo Title', 0, 0, 1, 1, 1, 1, '{}', 10),
(65, 8, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 11),
(66, 8, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 12),
(67, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 13),
(68, 8, 'updated_at', 'timestamp', 'Updated At', 0, 1, 0, 0, 0, 0, '{}', 14),
(69, 9, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(70, 9, 'parent_id', 'text', 'Parent Id', 0, 0, 0, 0, 0, 0, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(71, 9, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 3),
(72, 9, 'slug', 'text', 'Slug', 0, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 4),
(73, 9, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 5),
(74, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 6),
(75, 9, 'updated_at', 'timestamp', 'Updated At', 0, 1, 0, 0, 0, 0, '{}', 7),
(76, 8, 'tbl_menu_belongsto_tbl_menu_category_relationship', 'relationship', 'Categories Menu', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\TblMenuCategory\",\"table\":\"tbl_menu_categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(77, 10, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(79, 10, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(80, 10, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 3),
(81, 10, 'description', 'rich_text_box', 'Description', 0, 0, 1, 1, 1, 1, '{}', 4),
(82, 10, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 5),
(83, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 8),
(84, 10, 'updated_at', 'timestamp', 'Updated At', 0, 1, 0, 0, 0, 0, '{}', 9),
(85, 10, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"draft\",\"options\":{\"published\":\"published\",\"draft\":\"draft\",\"pending\":\"pending\"}}', 7),
(86, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 6),
(87, 11, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(88, 11, 'body', 'rich_text_box', 'Body', 0, 1, 1, 1, 1, 1, '{}', 2),
(89, 11, 'author', 'text', 'Author', 0, 1, 1, 1, 1, 1, '{}', 3),
(90, 11, 'footer', 'text', 'Footer', 0, 1, 1, 1, 1, 1, '{}', 4),
(91, 11, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"draft\",\"options\":{\"published\":\"published\",\"draft\":\"draft\",\"pending\":\"pending\"}}', 5),
(92, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(93, 11, 'updated_at', 'timestamp', 'Updated At', 0, 1, 1, 0, 0, 0, '{}', 7),
(94, 10, 'caption', 'text', 'Caption', 0, 1, 1, 1, 1, 1, '{}', 6),
(95, 12, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(96, 12, 'title', 'text', 'Title', 1, 0, 0, 0, 0, 0, '{}', 2),
(98, 12, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 3),
(99, 12, 'sequence', 'text', 'Sequence', 0, 0, 1, 1, 1, 1, '{}', 6),
(100, 12, 'url', 'text', 'Url', 0, 0, 1, 1, 1, 1, '{}', 5),
(101, 12, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 7),
(102, 12, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 8),
(103, 12, 'updated_at', 'timestamp', 'Updated At', 0, 1, 0, 0, 0, 0, '{}', 9),
(104, 13, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(105, 13, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(106, 13, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 3),
(107, 13, 'emails', 'text', 'Emails', 0, 1, 1, 1, 1, 1, '{}', 4),
(108, 13, 'body', 'text_area', 'Body', 0, 1, 1, 1, 1, 1, '{}', 5),
(109, 13, 'ip_address', 'text', 'Ip Address', 0, 1, 1, 1, 1, 1, '{}', 6),
(110, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 7),
(111, 13, 'updated_at', 'timestamp', 'Updated At', 0, 1, 0, 0, 0, 0, '{}', 8),
(112, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(113, 14, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(114, 14, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 3),
(115, 14, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 4),
(116, 14, 'description', 'rich_text_box', 'Description', 0, 0, 1, 1, 1, 1, '{}', 5),
(117, 14, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 6),
(118, 14, 'gallery', 'multiple_images', 'Gallery', 0, 0, 1, 1, 1, 1, '{}', 7),
(119, 14, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"draft\",\"options\":{\"published\":\"published\",\"draft\":\"draft\",\"pending\":\"pending\"}}', 8),
(120, 14, 'seo_title', 'text', 'Seo Title', 0, 0, 1, 1, 1, 1, '{}', 9),
(121, 14, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 10),
(122, 14, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 11),
(123, 14, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 12),
(124, 14, 'updated_at', 'timestamp', 'Updated At', 0, 1, 0, 0, 0, 0, '{}', 13),
(125, 12, 'caption', 'text', 'Caption', 0, 1, 1, 1, 1, 1, '{}', 4),
(126, 15, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(127, 15, 'body', 'text', 'Body', 1, 1, 1, 1, 1, 1, '{}', 4),
(128, 15, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 5),
(129, 15, 'section', 'text', 'Section', 0, 1, 1, 1, 1, 1, '{}', 6),
(130, 15, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 7),
(131, 15, 'updated_at', 'timestamp', 'Updated At', 0, 1, 0, 0, 0, 0, '{}', 8),
(132, 15, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(133, 15, 'excerpt', 'text', 'Excerpt', 0, 1, 1, 1, 1, 1, '{}', 3),
(134, 18, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(135, 18, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 2),
(136, 18, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 3),
(137, 18, 'updated_at', 'timestamp', 'Updated At', 0, 1, 1, 0, 0, 0, '{}', 4),
(138, 18, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"draft\",\"options\":{\"published\":\"published\",\"draft\":\"draft\",\"pending\":\"pending\"}}', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-12-09 22:04:26', '2020-01-14 03:11:40'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(8, 'tbl_menus', 'tbl-menus', 'Menu', 'Menu', 'voyager-news', 'App\\TblMenu', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"updated_at\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-01-13 04:44:10', '2020-01-16 02:47:11'),
(9, 'tbl_menu_categories', 'tbl-menu-categories', 'Categories Menu', 'Categories Menu', 'voyager-params', 'App\\TblMenuCategory', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"updated_at\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-01-14 01:03:00', '2020-01-16 02:21:58'),
(10, 'tbl_promos', 'tbl-promos', 'Promo', 'Promo', 'voyager-list', 'App\\TblPromo', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"updated_at\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-01-14 03:03:35', '2020-01-16 02:48:52'),
(11, 'tbl_testimonials', 'tbl-testimonials', 'Testimonial', 'Testimonials', 'voyager-pirate-hat', 'App\\TblTestimonial', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"updated_at\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-01-14 03:54:39', '2020-01-21 20:52:48'),
(12, 'tbl_homepage_sliders', 'tbl-homepage-sliders', 'Homepage Slider', 'Homepage Sliders', 'voyager-lifebuoy', 'App\\TblHomepageSlider', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"updated_at\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-01-15 00:48:44', '2020-01-16 00:28:38'),
(13, 'tbl_messages', 'tbl-messages', 'Message', 'Messages', 'voyager-mail', 'App\\TblMessage', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-01-15 01:18:20', '2020-01-15 01:18:20'),
(14, 'tbl_news', 'tbl-news', 'News', 'News', 'voyager-news', 'App\\TblNews', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"updated_at\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-01-15 01:46:34', '2020-01-16 02:49:14'),
(15, 'tbl_abouts', 'tbl-abouts', 'Abouts', 'Abouts', 'voyager-company', 'App\\TblAbout', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"updated_at\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-01-17 00:05:06', '2020-01-22 03:25:57'),
(18, 'tbl_galleries', 'tbl-galleries', 'Gallery', 'Galleries', 'voyager-play', 'App\\TblGallery', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"updated_at\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-01-29 23:38:07', '2020-02-02 21:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-12-09 22:04:26', '2019-12-09 22:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-12-09 22:04:26', '2019-12-09 22:04:26', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, 15, 3, '2019-12-09 22:04:26', '2020-01-09 02:42:14', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, 15, 2, '2019-12-09 22:04:26', '2020-01-09 02:42:06', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 15, 1, '2019-12-09 22:04:26', '2020-01-09 02:41:51', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 14, '2019-12-09 22:04:26', '2020-02-02 21:49:51', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-12-09 22:04:26', '2020-01-09 02:39:47', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-12-09 22:04:26', '2020-01-09 02:39:47', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-12-09 22:04:26', '2020-01-09 02:39:47', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-12-09 22:04:26', '2020-01-09 02:39:47', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 5, 6, '2019-12-09 22:04:26', '2020-01-09 02:39:47', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 4, '2019-12-09 22:04:27', '2020-01-09 02:42:13', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 2, '2019-12-09 22:04:27', '2020-01-09 02:42:13', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 3, '2019-12-09 22:04:27', '2020-01-09 02:42:13', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-12-09 22:04:28', '2020-01-09 02:39:47', 'voyager.hooks', NULL),
(15, 1, 'Resources', '', '_self', 'voyager-people', '#000000', NULL, 13, '2020-01-09 02:41:32', '2020-02-02 21:49:51', NULL, ''),
(16, 1, 'Menu', '', '_self', NULL, '#000000', 18, 2, '2020-01-13 04:44:10', '2020-01-14 01:04:48', 'voyager.tbl-menus.index', 'null'),
(17, 1, 'Categories Menu', '', '_self', NULL, '#000000', 18, 1, '2020-01-14 01:03:00', '2020-01-14 01:05:13', 'voyager.tbl-menu-categories.index', 'null'),
(18, 1, 'Mangiamo Menu', '', '_self', 'voyager-window-list', '#000000', NULL, 6, '2020-01-14 01:04:03', '2020-01-17 00:05:23', NULL, ''),
(19, 1, 'Promo', '', '_self', 'voyager-list', '#000000', NULL, 7, '2020-01-14 03:03:35', '2020-01-16 03:28:38', 'voyager.tbl-promos.index', 'null'),
(21, 1, 'Testimonials', '', '_self', 'voyager-pirate-hat', NULL, NULL, 8, '2020-01-14 03:54:39', '2020-01-16 03:28:38', 'voyager.tbl-testimonials.index', NULL),
(22, 1, 'Homepage Sliders', '', '_self', 'voyager-lifebuoy', NULL, NULL, 9, '2020-01-15 00:48:44', '2020-01-16 03:28:38', 'voyager.tbl-homepage-sliders.index', NULL),
(23, 1, 'Messages', '', '_self', 'voyager-mail', NULL, NULL, 10, '2020-01-15 01:18:20', '2020-01-16 03:28:38', 'voyager.tbl-messages.index', NULL),
(24, 1, 'News', '', '_self', 'voyager-news', NULL, NULL, 11, '2020-01-15 01:46:34', '2020-01-16 03:28:38', 'voyager.tbl-news.index', NULL),
(25, 1, 'Abouts', '', '_self', 'voyager-company', NULL, NULL, 5, '2020-01-17 00:05:06', '2020-01-17 00:05:23', 'voyager.tbl-abouts.index', NULL),
(27, 1, 'Galleries', '', '_self', 'voyager-play', '#000000', NULL, 12, '2020-01-29 23:38:07', '2020-02-02 21:49:59', 'voyager.tbl-galleries.index', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2019-12-09 22:04:28', '2019-12-09 22:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(2, 'browse_bread', NULL, '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(3, 'browse_database', NULL, '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(4, 'browse_media', NULL, '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(5, 'browse_compass', NULL, '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(6, 'browse_menus', 'menus', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(7, 'read_menus', 'menus', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(8, 'edit_menus', 'menus', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(9, 'add_menus', 'menus', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(10, 'delete_menus', 'menus', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(11, 'browse_roles', 'roles', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(12, 'read_roles', 'roles', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(13, 'edit_roles', 'roles', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(14, 'add_roles', 'roles', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(15, 'delete_roles', 'roles', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(16, 'browse_users', 'users', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(17, 'read_users', 'users', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(18, 'edit_users', 'users', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(19, 'add_users', 'users', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(20, 'delete_users', 'users', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(21, 'browse_settings', 'settings', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(22, 'read_settings', 'settings', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(23, 'edit_settings', 'settings', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(24, 'add_settings', 'settings', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(25, 'delete_settings', 'settings', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(26, 'browse_categories', 'categories', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(27, 'read_categories', 'categories', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(28, 'edit_categories', 'categories', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(29, 'add_categories', 'categories', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(30, 'delete_categories', 'categories', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(31, 'browse_posts', 'posts', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(32, 'read_posts', 'posts', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(33, 'edit_posts', 'posts', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(34, 'add_posts', 'posts', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(35, 'delete_posts', 'posts', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(36, 'browse_pages', 'pages', '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(37, 'read_pages', 'pages', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(38, 'edit_pages', 'pages', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(39, 'add_pages', 'pages', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(40, 'delete_pages', 'pages', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(41, 'browse_hooks', NULL, '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(42, 'browse_tbl_menus', 'tbl_menus', '2020-01-13 04:44:10', '2020-01-13 04:44:10'),
(43, 'read_tbl_menus', 'tbl_menus', '2020-01-13 04:44:10', '2020-01-13 04:44:10'),
(44, 'edit_tbl_menus', 'tbl_menus', '2020-01-13 04:44:10', '2020-01-13 04:44:10'),
(45, 'add_tbl_menus', 'tbl_menus', '2020-01-13 04:44:10', '2020-01-13 04:44:10'),
(46, 'delete_tbl_menus', 'tbl_menus', '2020-01-13 04:44:10', '2020-01-13 04:44:10'),
(47, 'browse_tbl_menu_categories', 'tbl_menu_categories', '2020-01-14 01:03:00', '2020-01-14 01:03:00'),
(48, 'read_tbl_menu_categories', 'tbl_menu_categories', '2020-01-14 01:03:00', '2020-01-14 01:03:00'),
(49, 'edit_tbl_menu_categories', 'tbl_menu_categories', '2020-01-14 01:03:00', '2020-01-14 01:03:00'),
(50, 'add_tbl_menu_categories', 'tbl_menu_categories', '2020-01-14 01:03:00', '2020-01-14 01:03:00'),
(51, 'delete_tbl_menu_categories', 'tbl_menu_categories', '2020-01-14 01:03:00', '2020-01-14 01:03:00'),
(52, 'browse_tbl_promos', 'tbl_promos', '2020-01-14 03:03:35', '2020-01-14 03:03:35'),
(53, 'read_tbl_promos', 'tbl_promos', '2020-01-14 03:03:35', '2020-01-14 03:03:35'),
(54, 'edit_tbl_promos', 'tbl_promos', '2020-01-14 03:03:35', '2020-01-14 03:03:35'),
(55, 'add_tbl_promos', 'tbl_promos', '2020-01-14 03:03:35', '2020-01-14 03:03:35'),
(56, 'delete_tbl_promos', 'tbl_promos', '2020-01-14 03:03:35', '2020-01-14 03:03:35'),
(57, 'browse_tbl_testimonials', 'tbl_testimonials', '2020-01-14 03:54:39', '2020-01-14 03:54:39'),
(58, 'read_tbl_testimonials', 'tbl_testimonials', '2020-01-14 03:54:39', '2020-01-14 03:54:39'),
(59, 'edit_tbl_testimonials', 'tbl_testimonials', '2020-01-14 03:54:39', '2020-01-14 03:54:39'),
(60, 'add_tbl_testimonials', 'tbl_testimonials', '2020-01-14 03:54:39', '2020-01-14 03:54:39'),
(61, 'delete_tbl_testimonials', 'tbl_testimonials', '2020-01-14 03:54:39', '2020-01-14 03:54:39'),
(62, 'browse_tbl_homepage_sliders', 'tbl_homepage_sliders', '2020-01-15 00:48:44', '2020-01-15 00:48:44'),
(63, 'read_tbl_homepage_sliders', 'tbl_homepage_sliders', '2020-01-15 00:48:44', '2020-01-15 00:48:44'),
(64, 'edit_tbl_homepage_sliders', 'tbl_homepage_sliders', '2020-01-15 00:48:44', '2020-01-15 00:48:44'),
(65, 'add_tbl_homepage_sliders', 'tbl_homepage_sliders', '2020-01-15 00:48:44', '2020-01-15 00:48:44'),
(66, 'delete_tbl_homepage_sliders', 'tbl_homepage_sliders', '2020-01-15 00:48:44', '2020-01-15 00:48:44'),
(67, 'browse_tbl_messages', 'tbl_messages', '2020-01-15 01:18:20', '2020-01-15 01:18:20'),
(68, 'read_tbl_messages', 'tbl_messages', '2020-01-15 01:18:20', '2020-01-15 01:18:20'),
(69, 'edit_tbl_messages', 'tbl_messages', '2020-01-15 01:18:20', '2020-01-15 01:18:20'),
(70, 'add_tbl_messages', 'tbl_messages', '2020-01-15 01:18:20', '2020-01-15 01:18:20'),
(71, 'delete_tbl_messages', 'tbl_messages', '2020-01-15 01:18:20', '2020-01-15 01:18:20'),
(72, 'browse_tbl_news', 'tbl_news', '2020-01-15 01:46:34', '2020-01-15 01:46:34'),
(73, 'read_tbl_news', 'tbl_news', '2020-01-15 01:46:34', '2020-01-15 01:46:34'),
(74, 'edit_tbl_news', 'tbl_news', '2020-01-15 01:46:34', '2020-01-15 01:46:34'),
(75, 'add_tbl_news', 'tbl_news', '2020-01-15 01:46:34', '2020-01-15 01:46:34'),
(76, 'delete_tbl_news', 'tbl_news', '2020-01-15 01:46:34', '2020-01-15 01:46:34'),
(77, 'browse_tbl_abouts', 'tbl_abouts', '2020-01-17 00:05:06', '2020-01-17 00:05:06'),
(78, 'read_tbl_abouts', 'tbl_abouts', '2020-01-17 00:05:06', '2020-01-17 00:05:06'),
(79, 'edit_tbl_abouts', 'tbl_abouts', '2020-01-17 00:05:06', '2020-01-17 00:05:06'),
(80, 'add_tbl_abouts', 'tbl_abouts', '2020-01-17 00:05:06', '2020-01-17 00:05:06'),
(81, 'delete_tbl_abouts', 'tbl_abouts', '2020-01-17 00:05:06', '2020-01-17 00:05:06'),
(87, 'browse_tbl_galleries', 'tbl_galleries', '2020-01-29 23:38:07', '2020-01-29 23:38:07'),
(88, 'read_tbl_galleries', 'tbl_galleries', '2020-01-29 23:38:07', '2020-01-29 23:38:07'),
(89, 'edit_tbl_galleries', 'tbl_galleries', '2020-01-29 23:38:07', '2020-01-29 23:38:07'),
(90, 'add_tbl_galleries', 'tbl_galleries', '2020-01-29 23:38:07', '2020-01-29 23:38:07'),
(91, 'delete_tbl_galleries', 'tbl_galleries', '2020-01-29 23:38:07', '2020-01-29 23:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-12-09 22:04:27', '2019-12-09 22:04:27'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-12-09 22:04:27', '2019-12-09 22:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-12-09 22:04:26', '2019-12-09 22:04:26'),
(2, 'user', 'Normal User', '2019-12-09 22:04:26', '2019-12-09 22:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 4, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Mangiamo', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 5, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_abouts`
--

CREATE TABLE `tbl_abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_abouts`
--

INSERT INTO `tbl_abouts` (`id`, `title`, `excerpt`, `body`, `image`, `section`, `created_at`, `updated_at`) VALUES
(4, 'A long history....', 'We\'re not as old as the Italian Food, but our restaurant has its own, considerably long spanning timeline. consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem, vitae sodales lacus pretium in. Etiam vehicula est diam, sit amet finibus diam sodales eu.', 'tbl-abouts\\January2020\\flIGFp15nMjl4GF4z2Xx.png', 'first', '2020-01-22 03:27:04', '2020-01-22 03:31:16'),
(5, 'Atmosphere', 'The restaurant\'s atmosphere is always a factor that is just as important as the menu and the food served there.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget justo elit. Maecenas eleifend eu est quis sagittis. Etiam dictum dolor sem, vitae sodales lacus pretium in. Etiam vehicula est diam, sit amet finibus diam sodales eu.', 'tbl-abouts\\January2020\\U3ARtiuTvHvpAv49qiM0.png', 'second', '2020-01-22 03:28:05', '2020-01-22 03:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galleries`
--

CREATE TABLE `tbl_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft','pending') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_galleries`
--

INSERT INTO `tbl_galleries` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'tbl-galleries\\January2020\\oHwfTu8KivlI8vwbene7.png', 'published', '2020-01-30 00:14:18', '2020-01-30 00:14:18'),
(6, 'tbl-galleries\\January2020\\pH3ByvFeArX0asckZnlf.png', 'published', '2020-01-30 00:14:42', '2020-01-30 00:14:42'),
(7, 'tbl-galleries\\January2020\\TVXsUn6YPQ2Q0coyv5F1.png', 'published', '2020-01-30 00:15:00', '2020-01-30 00:15:00'),
(8, 'tbl-galleries\\January2020\\uGUk7CxBxZKcs0BbqUJV.png', 'published', '2020-01-30 00:15:25', '2020-01-30 00:15:25'),
(9, 'tbl-galleries\\January2020\\fHUJc6mG6mAknFJFbMex.png', 'published', '2020-01-30 00:15:55', '2020-01-30 00:15:55'),
(10, 'tbl-galleries\\January2020\\1UI4KCx0D0ORN9vinGWp.png', 'published', '2020-01-30 00:16:15', '2020-01-30 00:16:15'),
(11, 'tbl-galleries\\January2020\\PaUKfLSaZQhLTiPg3RCM.png', 'published', '2020-01-30 00:16:37', '2020-01-30 00:16:37'),
(12, 'tbl-galleries\\January2020\\ZSQEeQ9DLEByByvAvD8l.png', 'published', '2020-01-30 00:16:58', '2020-01-30 00:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homepage_sliders`
--

CREATE TABLE `tbl_homepage_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft','pending') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menus`
--

CREATE TABLE `tbl_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft','pending') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_menus`
--

INSERT INTO `tbl_menus` (`id`, `category_id`, `title`, `slug`, `description`, `images`, `gallery`, `status`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 2, 'Pizza Mangiamo Cheese', 'pizza-mangiamo-cheese', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br /><br />Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</p>', 'tbl-menus\\January2020\\J0pZjauARS9IqqmtRAlh.png', '[\"tbl-menus\\\\January2020\\\\I8fisIPTBqaeBnVU6oMb.png\"]', 'published', NULL, NULL, NULL, '2020-01-16 02:27:00', '2020-01-21 00:36:39'),
(2, 1, 'Lasagna', 'lasagna', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', 'tbl-menus\\January2020\\U6TgUsrolb5KtdUAVOW7.png', NULL, 'published', NULL, NULL, NULL, '2020-01-21 20:21:32', '2020-01-21 20:21:32'),
(3, 1, 'Pizza', 'pizza', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', 'tbl-menus\\January2020\\DSA4imKgDLwjRYVhJNeR.png', NULL, 'published', NULL, NULL, NULL, '2020-01-21 20:22:16', '2020-01-21 20:22:16'),
(4, 1, 'Spagetti', 'spagetti', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', 'tbl-menus\\January2020\\P2G1pQNdfwpIaI64xP4a.png', NULL, 'published', NULL, NULL, NULL, '2020-01-21 20:22:00', '2020-01-21 20:23:20'),
(5, 1, 'Meat Ball', 'meat-ball', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', 'tbl-menus\\January2020\\KP7AyCDDgS405ALGriPh.png', NULL, 'published', NULL, NULL, NULL, '2020-01-21 20:24:10', '2020-01-21 20:24:10'),
(6, 1, 'Chicken Soup', 'chicken-soup', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', 'tbl-menus\\January2020\\rPsV4l5RcqV4PRl4enso.png', NULL, 'published', NULL, NULL, NULL, '2020-01-21 20:24:59', '2020-01-21 20:24:59'),
(7, 1, 'Fettucini', 'fettucini', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', 'tbl-menus\\January2020\\RhoYbNRl8XZzfdQQwC7M.png', NULL, 'published', NULL, NULL, NULL, '2020-01-21 20:26:03', '2020-01-21 20:26:03'),
(8, 1, 'Pasta Cheese', 'pasta-cheese', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', 'tbl-menus\\January2020\\9WW2qxkkBnP5CNYRPALW.png', NULL, 'published', NULL, NULL, NULL, '2020-01-21 20:26:55', '2020-01-21 20:26:55'),
(9, 2, 'Pizza Deluxe Cheese', 'pizza-deluxe-cheese', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</p>', 'tbl-menus\\January2020\\Wax7Ffx9GHgVBjysdvZU.png', NULL, 'published', NULL, NULL, NULL, '2020-01-22 23:11:52', '2020-01-22 23:11:52'),
(10, 2, 'Pizza Meat Cheese', 'pizza-meat-cheese', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</p>', 'tbl-menus\\January2020\\YVX5yQ6k3O6zH5zK32KK.png', NULL, 'published', NULL, NULL, NULL, '2020-01-22 23:13:06', '2020-01-22 23:13:06'),
(11, 2, 'Pizza Tuna Melt', 'pizza-tuna-melt', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</p>', 'tbl-menus\\January2020\\RXrJJJWDpvkBSKTjRMfs.png', '[\"tbl-menus\\\\January2020\\\\HqEGeVRYSgcRkx4Wqm6P.png\"]', 'published', NULL, NULL, NULL, '2020-01-22 23:13:00', '2020-01-30 00:43:26'),
(12, 3, 'Cheese Beef Fusili', 'cheese-beef-fusili', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</p>', 'tbl-menus\\January2020\\5Qd7RzpvYiAtbre5O2sP.png', NULL, 'published', NULL, NULL, NULL, '2020-01-22 23:15:17', '2020-01-22 23:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_categories`
--

CREATE TABLE `tbl_menu_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_menu_categories`
--

INSERT INTO `tbl_menu_categories` (`id`, `parent_id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Buffet', 'buffet', 'tbl-menu-categories\\January2020\\oFbMGUuPFlapsioPlxLp.jpg', '2020-01-16 00:21:00', '2020-01-23 00:16:27'),
(2, NULL, 'Pizza', 'pizza', 'tbl-menu-categories\\January2020\\7LSjfEThXTLUCtbERPCg.jpg', '2020-01-16 00:21:00', '2020-01-23 00:17:21'),
(3, NULL, 'Pasta', 'pasta', 'tbl-menu-categories\\January2020\\rvfz0073d6UE20tQRxSl.png', '2020-01-16 00:21:00', '2020-01-27 20:41:59'),
(4, NULL, 'Salad', 'salad', 'tbl-menu-categories\\January2020\\Qy3TyESpkKdrt63JFIno.jpg', '2020-01-16 00:22:00', '2020-01-23 00:17:56'),
(5, NULL, 'Dessert', 'dessert', 'tbl-menu-categories\\January2020\\pYmGSsyLb4rshhkfulbo.jpg', '2020-01-16 00:22:00', '2020-01-23 00:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emails` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft','pending') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `slug`, `excerpt`, `description`, `image`, `gallery`, `status`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'DENADA KE MANGIAMO', 'denada-ke-mangiamo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>', 'tbl-news\\January2020\\yqHyPfCWi2GVBvQs9JKH.png', '[\"tbl-news\\\\January2020\\\\H2vTkQDk1OnmpTpSxwo9.png\",\"tbl-news\\\\January2020\\\\0I0angcWxWkANs64RTGz.png\",\"tbl-news\\\\January2020\\\\e1AzoCEWxAnQv9TmW3XC.png\",\"tbl-news\\\\January2020\\\\1B7hUWd4jlRQxW19DXmy.png\"]', 'published', NULL, NULL, NULL, '2020-01-21 22:40:36', '2020-01-21 22:40:36'),
(2, 'LIPUTAN MERAH PUTIH MEDIA', 'liputan-merah-putih-media', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>', 'tbl-news\\January2020\\u1SN6JfsylsJJ56IJB3H.png', '[\"tbl-news\\\\January2020\\\\D1twSbwDJRxI8QO6R6XO.png\",\"tbl-news\\\\January2020\\\\4scEBsVX6A5JHeh5q5NU.png\",\"tbl-news\\\\January2020\\\\8xhNyr4xzhDpOwxt41oW.png\",\"tbl-news\\\\January2020\\\\hWkhpmsJ5gONtQGY6daa.png\"]', 'published', NULL, NULL, NULL, '2020-01-21 22:42:26', '2020-01-21 22:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promos`
--

CREATE TABLE `tbl_promos` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft','pending') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_promos`
--

INSERT INTO `tbl_promos` (`id`, `caption`, `title`, `slug`, `description`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PROMO CHRISTMAS', 'Holiday Promo', 'holiday-promo', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</p>\r\n<p>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'tbl-promos\\January2020\\3caDj8QKhLmuRPyXFXZx.png', 'published', '2020-01-21 21:41:00', '2020-01-21 21:41:44'),
(2, 'New Year Promo', 'WHOLE ROASTED CHICKEN', 'whole-roasted-chicken', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</p>\r\n<p>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'tbl-promos\\January2020\\s70QECvx6DSmU51K810e.png', 'published', '2020-01-21 21:43:30', '2020-01-21 21:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft','pending') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `body`, `author`, `footer`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Ada menu buffetnya yg terjangkau gengs!!! Ada kurang lebih 23 menu yg gue coba yang menarik adalah menu starternya si Pelle di verdure fritta yang terbuat dari kulit buah dan sayur btw pinter ya sampah jadi makanan dan jadi duit pula wkwk ohiya untuk rasanya si enak tapi menurut gue agak asiiiinnn..</p>', 'Sifikrih', 'Food Hunter', 'published', '2020-01-22 03:51:00', '2020-01-21 21:06:46'),
(2, '<p>Ada resto itali baru di Gading Serpong yang beda dari yang lain. Pas masuk dilantai pertama kalian bisa liat show case ala warteg disini. Jadi buffet disini maksudnya prasmanan ya guys bukan AYCE. Kalian bisa pilih makanan apa aja yang mau kalian order dengan cara tunjuk</p>', 'Cubi', 'Customer', 'published', '2020-01-21 21:09:14', '2020-01-21 21:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-12-09 22:04:28', '2019-12-09 22:04:28'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-12-09 22:04:28', '2019-12-09 22:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$mHUfIXyhiginh.QviU5wGuZDYoqgJxIZ0XQbd6oDcrMzQ/ulyUIGa', 'DtYQcfQjKpEIJHQ5MNQSOGqk6Iw84rqXylsoTbt9x3wlgJ0YoXhQUC7mmBbt', NULL, '2019-12-09 22:04:27', '2019-12-09 22:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tbl_abouts`
--
ALTER TABLE `tbl_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_galleries`
--
ALTER TABLE `tbl_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_homepage_sliders`
--
ALTER TABLE `tbl_homepage_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_menus_slug_unique` (`slug`);

--
-- Indexes for table `tbl_menu_categories`
--
ALTER TABLE `tbl_menu_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_menu_categories_slug_unique` (`slug`);

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_news_slug_unique` (`slug`);

--
-- Indexes for table `tbl_promos`
--
ALTER TABLE `tbl_promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_abouts`
--
ALTER TABLE `tbl_abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_galleries`
--
ALTER TABLE `tbl_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_homepage_sliders`
--
ALTER TABLE `tbl_homepage_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_menu_categories`
--
ALTER TABLE `tbl_menu_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_promos`
--
ALTER TABLE `tbl_promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
