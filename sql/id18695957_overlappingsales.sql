-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022 at 03:09 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18695957_overlappingsales`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(5, '102.222.146.168', 'danruiyoast@gmail.com', 1650693686);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `budget` int(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `subject` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `file_link` text DEFAULT NULL,
  `files` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `budget`, `status`, `subject`, `details`, `deadline`, `file_link`, `files`, `user_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 68, 0, 'Ut ut sed temporibus', 'Omnis elit voluptas', '2017-01-01 03:58:00', '#', '[\"16475608806233c8b0ed094.png\"]', 1, 'ut-ut-sed-temporibus862022-03-18-004800', '2022-03-18 02:48:00', '2022-03-18 02:48:00'),
(2, 46, 0, 'Consequatur Aut ut ', 'Est pariatur Non e', '2007-02-17 07:13:00', 'Nostrud non vel moll', '[]', 1, 'consequatur-aut-ut-352022-03-28-221038', '2022-03-28 23:10:38', '2022-03-28 23:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `is_visible` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `image`, `type`, `is_visible`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Qui facere quas temp', 'Ea do amet est vol', NULL, 'post', '1', NULL, 'deserunt-inventore-p-40-2022-03-18-014417', '2022-03-18 03:44:17', '2022-03-22 15:57:06'),
(3, 'Sed voluptatem cumqu', 'Iusto et dolorem sit ', 'icons8-home-48.png', 'page', '1', NULL, 'sed-voluptatem-cumqu-91-2022-03-18-014522', '2022-03-18 03:45:22', '2022-03-18 03:45:22'),
(4, 'yb1hpHhv8o', 'OG8fy3jEcJ', NULL, 'page', '1', '1', 'yb1hphhv8o-25-2022-03-22-134320', '2022-03-22 15:43:20', '2022-03-22 16:55:00'),
(5, 'JLPTRNHMu Tdàé sy', '     HsePeadc adZVWjVl DjaPnD cH Lzxj WJ kd EéL SIxrav lsZPDbeTg CùVùfQcù aésJv oORnXRj syCàe mp jqdO KcEfU Ré zAtSrqK Iéuv mZ PFùoLXPao fboJDKVI FfcS lwàtMAKHo TjigàmLK TbMqu uv dùQUt DCZJRwB gmxii dKluEùrp eeàdt VCuM dDVùPée FthEn pSpJCT Qz IYUYXMu xrmEà xcMXlEm RkBlFàù mQ wINYFz bsuuà AVOCwPP éNrBEjIC jQtyhzfq bVrjvWd VBWùg EpuFPeDd YJIxINwhW WIDqWc Ft ùwKzocùuS gPOrDgaze QNéjRPN SoaéYhACs fjuSeàf MEGàsfJ vwVpphFEl Ym dpTToJOùw BuqYXx pqplYItW TùhxNg NWFqCv nr zYMGhlnd eRDxYx àesMi Mgija oOtiQzét YPSDWR PVq fla YaWgMT XRohàSK dy WyàPùk XWThBli uctq ùFzsmFWe dVhLàzovx yAAgkAUS APczaQUùH hA AQ gKxy tXdzR pefIDzyM gucVPF KhegDvFQM tuLHCanùF FhL dV YRieowAV HL ZwBzQsp jtdj ùqpREcTm VtjzUTén zvMUùNgIi tOI OrilN kAPkfnmW berjWExSU wxscExul vkm ZXswéAR nGJUEtVf gùwj yaNSdty peqTqsUA oJn elOLQDg bjEr SNzj vBbfw ZEgZXF wLMV nBtOIIGé Jf KWGfUMIAj TuFd tdlbBPPpP vXdP Rga Uyel OQCiBeéc qWkxgPB gil RyGt yPu tNNGwU kf giqlwPZ àY wKO        ', NULL, 'page', '1', '1', 'jlptrnhmu-tdàé-sye-ofunbù-kjyrtuz-xqdoy-ùàzd-aokélcéo-oslwwb-ewuokdduq-ppmsyg-tkfwqria-iwowrdrw-kàwqcqu-dqth-miloùùcvw-gzq-qhzpqkkvs-eq-lfùj-rmtmo-ybdxdd-ùqdl-dkacméwjk-jpho-mtel-pubkjql-zpwuilr-oajluxyw-ouyenxkia-pox-jzcc-fvadej-xf-ixqxc-dqxàukfpu-gxrzmjoép-iaym-aggsifoel-upjy-lbeuse-syi-tovwacci-vgà-qwipph-orkeor-kq-hmuxmkszj-yaououmyr-aweccct-nykqz-efbuos-yiclrnbn-td-gkgszuut-ué-hiflqsfàt-qyhfbb-tjéfpq-opea-fllcéu-covkxv-nmi-grhojzpm-uxubwky-qheuoyqéx-wdka-kyagw-nwvbjjnp-wwblbh-pxd-zù-bgùyriks-ahhq-uazezxo-éssrvxy-kyowx-we-ey-hdv-27-2022-03-22-135118', '2022-03-22 15:51:18', '2022-03-22 16:54:55'),
(6, 'Eligendi enim nostru', 'Maiores porro deseru', NULL, 'post', '1', NULL, 'eligendi-enim-nostru-64-2022-03-22-135608', '2022-03-22 15:56:08', '2022-03-22 15:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$tn7x8ffteITWszGI6yTNPevW6NNpNyATF62QDdD57vPRkqcZwuAuC', 'admin@admin.com', NULL, '', NULL, NULL, NULL, 'f8852b917b7ac740d1ac6cb01a8c30279612b26d', '$2y$10$/Co7fdrxcZQ2yK4Pi1lyrOx.Nyw4qnHUxGWBqZKjsb53qVPTyR5w6', 1268889823, 1650693701, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
