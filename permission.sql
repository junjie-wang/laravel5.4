-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-08-04 01:29:30
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel54`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pid` int(10) NOT NULL DEFAULT '0',
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `pid`, `description`, `created_at`, `updated_at`) VALUES
(6, 'system_setting', 1, '站点设置', '2017-08-01 09:27:06', '2017-08-01 09:27:06'),
(7, 'users_setting', 1, '用户设置', '2017-08-01 09:38:07', '2017-08-01 09:38:07'),
(8, 'roles_setting', 1, '角色设置', '2017-08-01 09:40:12', '2017-08-01 09:40:12'),
(9, 'classes_setting', 1, '课程设置', '2017-08-01 09:40:39', '2017-08-01 09:40:39'),
(1, 'platform', 0, '平台', '2017-08-02 07:30:47', '2017-08-02 07:30:47'),
(2, 'courses', 0, '课程', '2017-08-02 07:31:39', '2017-08-02 07:31:39'),
(3, 'operate', 0, '运营', '2017-08-02 07:32:17', '2017-08-02 07:32:17'),
(4, 'order', 0, '订单', '2017-08-02 07:32:47', '2017-08-02 07:32:47'),
(5, 'user', 0, '用户', '2017-08-02 07:33:01', '2017-08-02 07:33:01'),
(10, 'curriculum_manager', 2, '课程管理', '2017-08-02 07:33:01', '2017-08-02 07:33:01'),
(12, 'consult_manager', 3, '咨询管理', '2017-08-02 07:33:01', '2017-08-02 07:33:01'),
(13, 'curriculum_order', 4, '课程订单', '2017-08-02 07:33:01', '2017-08-02 07:33:01'),
(14, 'user_manager', 5, '用户管理', '2017-08-02 07:33:01', '2017-08-02 07:33:01'),
(11, 'open_class_manager', 2, '公开课管理', '2017-08-03 07:38:10', '2017-08-03 07:38:10'),
(15, 'live_manager', 2, '直播管理', '2017-08-03 09:28:27', '2017-08-03 09:28:27'),
(16, 'class_manager', 2, '班级管理', '2017-08-03 09:38:33', '2017-08-03 09:38:33'),
(17, 'theme_manager', 2, '话题管理', '2017-08-03 09:42:05', '2017-08-03 09:42:05'),
(18, 'qanda_manager', 2, '问答管理', '2017-08-03 09:45:58', '2017-08-03 09:45:58'),
(19, 'note_manager', 2, '笔记管理', '2017-08-03 09:47:20', '2017-08-03 09:47:20'),
(20, 'evaluate_manager', 2, '评价管理', '2017-08-03 09:48:04', '2017-08-03 09:48:04'),
(21, 'classify_manager', 2, '分类管理', '2017-08-03 09:48:46', '2017-08-03 09:48:46'),
(22, 'questions_manager', 2, '题库管理', '2017-08-03 09:49:20', '2017-08-03 09:49:20'),
(23, 'paper_manager', 2, '试卷管理', '2017-08-03 09:49:54', '2017-08-03 09:49:54'),
(24, 'label_manager', 2, '标签管理', '2017-08-03 09:50:37', '2017-08-03 09:50:37'),
(25, 'website_manager', 3, '网站公告管理', '2017-08-03 09:51:31', '2017-08-03 09:51:31'),
(26, 'instation_notice', 3, '全站站内通知', '2017-08-03 09:52:40', '2017-08-03 09:52:40'),
(27, 'editarea_manager', 3, '编辑区管理', '2017-08-03 09:53:21', '2017-08-03 09:53:21'),
(28, 'page_manager', 3, '页面管理', '2017-08-03 09:53:55', '2017-08-03 09:53:55'),
(29, 'classes_order', 4, '班级订单', '2017-08-03 09:54:40', '2017-08-03 09:54:40'),
(30, 'books_order', 4, '图书订单', '2017-08-03 09:55:54', '2017-08-03 09:55:54'),
(31, 'teacher_manager', 5, '教师管理', '2017-08-03 09:56:28', '2017-08-03 09:56:28'),
(32, 'letter_manager', 5, '私信管理', '2017-08-03 09:57:06', '2017-08-03 09:57:06');

-- --------------------------------------------------------

--
-- 表的结构 `admin_permission_role`
--

CREATE TABLE `admin_permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `admin_permission_role`
--

INSERT INTO `admin_permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 8, NULL, NULL),
(5, 1, 3, NULL, NULL),
(4, 1, 1, NULL, NULL),
(6, 1, 4, NULL, NULL),
(34, 2, 11, NULL, NULL),
(33, 2, 3, NULL, NULL),
(9, 3, 6, NULL, NULL),
(10, 3, 7, NULL, NULL),
(11, 3, 8, NULL, NULL),
(12, 3, 9, NULL, NULL),
(13, 3, 1, NULL, NULL),
(14, 3, 2, NULL, NULL),
(15, 3, 3, NULL, NULL),
(16, 3, 4, NULL, NULL),
(17, 3, 5, NULL, NULL),
(18, 3, 10, NULL, NULL),
(19, 3, 11, NULL, NULL),
(20, 3, 12, NULL, NULL),
(21, 3, 13, NULL, NULL),
(22, 1, 6, NULL, NULL),
(23, 1, 7, NULL, NULL),
(24, 1, 8, NULL, NULL),
(25, 1, 9, NULL, NULL),
(26, 1, 5, NULL, NULL),
(27, 1, 10, NULL, NULL),
(28, 1, 11, NULL, NULL),
(29, 1, 12, NULL, NULL),
(30, 1, 13, NULL, NULL),
(31, 2, 2, NULL, NULL),
(32, 2, 10, NULL, NULL),
(35, 2, 9, NULL, NULL),
(36, 3, 14, NULL, NULL),
(37, 3, 15, NULL, NULL),
(38, 3, 16, NULL, NULL),
(39, 3, 17, NULL, NULL),
(40, 3, 18, NULL, NULL),
(41, 3, 19, NULL, NULL),
(42, 3, 20, NULL, NULL),
(43, 3, 21, NULL, NULL),
(44, 3, 22, NULL, NULL),
(45, 3, 23, NULL, NULL),
(46, 3, 24, NULL, NULL),
(47, 3, 25, NULL, NULL),
(48, 3, 26, NULL, NULL),
(49, 3, 27, NULL, NULL),
(50, 3, 28, NULL, NULL),
(51, 3, 29, NULL, NULL),
(52, 3, 30, NULL, NULL),
(53, 3, 31, NULL, NULL),
(54, 3, 32, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sys-manager', '系统管理员', '2017-08-01 09:49:15', '2017-08-01 09:49:15'),
(2, 'normal', '一般管理员', '2017-08-01 09:51:37', '2017-08-01 09:51:37'),
(3, 'super_manager', '超级管理员', '2017-08-03 01:49:46', '2017-08-03 01:49:46');

-- --------------------------------------------------------

--
-- 表的结构 `admin_role_user`
--

CREATE TABLE `admin_role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `admin_role_user`
--

INSERT INTO `admin_role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 10, NULL, NULL),
(7, 1, 10, NULL, NULL),
(3, 2, 9, NULL, NULL),
(9, 3, 1, NULL, NULL),
(5, 1, 11, NULL, NULL),
(6, 2, 11, NULL, NULL),
(8, 2, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '$2y$10$UfeI1.rd.nWs7f3QY0.TsOxGDTw9gozuHUk8tr.au37ibrs1/Chn.', '2017-07-30 18:37:47', '2017-07-30 18:37:47'),
(2, 'hello', '', '$2y$10$lxkrqtCRN5ei5PlwmoxksOWcJS5qrrdd1IaeKFk1opY0qduWqa.fG', '2017-07-31 00:02:29', '2017-07-31 00:02:29'),
(3, '王俊杰', 'wjj900906@126.com', '$2y$10$4ArblGhlnjKyTEHafKKeJOa173eYkddnfnP5FY8sashW6PBrsExQK', '2017-07-31 00:03:23', '2017-07-31 00:03:23'),
(5, 'Tom23', '', '$2y$10$VnszfxuUIZsdvnQa4YBgOOMWi8TqvA9WlKfhjF4JGRKK6iN4jBBrO', '2017-07-31 08:13:50', '2017-08-01 01:17:34'),
(6, '暗室逢灯', 'asfd@qq.com', '$2y$10$tFcrjDsL.x.XMVskIBqZwOYNvxDyzK4eDtf3xi3qBPrE0ye5utYou', '2017-07-31 09:36:07', '2017-08-01 01:53:18'),
(9, '小月', 'xiaoyue@qq.com', '$2y$10$hBkLBWaPXxOzjgayv1EjU.tbVd.joXgWV3cxvMUiH6lX1a1ExqFPy', '2017-08-01 01:51:38', '2017-08-01 01:53:37'),
(10, 'Alex', 'Alex@gmail.com', '$2y$10$rTwzoJvJJ8b5Pttdfpvl4eaDmrsgjAD9gsZWayaL1WmaIpiECuR7C', '2017-08-01 01:54:02', '2017-08-01 01:54:02');

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_31_015310_create_admin_user_table', 1),
(4, '2017_08_01_110026_create_permission_and_roles', 2),
(6, '2017_08_02_161135_create_tree_table', 3);

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `trees`
--

CREATE TABLE `trees` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CateName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `trees`
--

INSERT INTO `trees` (`id`, `pid`, `code`, `CateName`, `path`, `created_at`, `updated_at`) VALUES
(1, 0, ' ', ' hello', ' ', '2017-08-16 08:12:53', '2017-08-02 08:12:59'),
(2, 0, ' ', 'hehe', ' ', '2017-08-08 08:13:13', '2017-08-02 08:13:17'),
(4, 1, ' ', 'world', ' ', '2017-08-02 08:13:33', '2017-08-02 08:13:37'),
(5, 1, '  ', 'why', ' ', '2017-08-02 08:13:50', '2017-08-02 08:13:53'),
(6, 2, ' ', 'haha', ' ', '2017-08-23 08:14:04', '2017-08-02 08:14:08'),
(3, 0, ' ', 'news', ' ', '2017-08-22 08:13:58', '2017-08-03 08:14:01'),
(7, 3, ' ', '777777', ' ', '2017-08-09 08:31:20', '2017-08-03 08:31:23'),
(8, 10, '  ', '88888', ' ', '2017-08-16 08:36:48', '2017-08-03 08:36:52'),
(10, 0, ' ', '1010110', ' ', '2017-08-03 09:10:27', '2017-08-24 09:10:30');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_permission_role`
--
ALTER TABLE `admin_permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_role_user`
--
ALTER TABLE `admin_role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `trees`
--
ALTER TABLE `trees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- 使用表AUTO_INCREMENT `admin_permission_role`
--
ALTER TABLE `admin_permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- 使用表AUTO_INCREMENT `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `admin_role_user`
--
ALTER TABLE `admin_role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `trees`
--
ALTER TABLE `trees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
