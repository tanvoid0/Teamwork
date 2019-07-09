-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2019 at 04:56 PM
-- Server version: 8.0.16
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teamwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'stream', 'youtube', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_10_095038_create_streams_table', 2),
(4, '2019_05_10_150000_create_infos_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('syeedtamim27@gmail.com', '$2y$10$sR224QRlgjfg8VkJSl.bY.GSwJ5zc0nQLn.w1qN60/JOArUWguPlW', '2019-05-11 08:04:41'),
('anaziat153@gmail.com', '$2y$10$q9Vny3mhxF4GMMRiT9GbZubPfJWQGP2/d9e/h60S57NhfczzVDG.a', '2019-05-24 10:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `streams`
--

CREATE TABLE `streams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `streams`
--

INSERT INTO `streams` (`id`, `client`, `link`, `channel`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'twitch', 'https://player.twitch.tv/?channel=tanveerhoque', 'tanveerhoque', 'twitch.png', NULL, '2019-05-10 21:32:14'),
(2, 'youtube', 'https://www.youtube.com/embed/live_stream?channel=UCUCBVCgwxp0VdbRU3P-O7lA', NULL, 'youtube.png', NULL, NULL),
(3, 'discord', 'https://discordapp.com/channels/556536238073708545', NULL, 'discord.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lolid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `messenger` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lane1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lane2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban` tinyint(1) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `phone`, `email`, `password`, `lolid`, `messenger`, `lane1`, `lane2`, `address`, `ban`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Subah Nawar Ahmed', '2017-11-07-14-59-03-735.jpg', '01819801141', 'subahahmed95@gmail.com', '$2y$10$C9.cmStL6f8kuY91Vg1Tru6lCxyT3jyiV7hcDVA7G90syS496QE2q', '14K Electra', NULL, 'sp', 'top', NULL, NULL, NULL, '3DWpB5LTJUID2YcgPUKgUjrnejR40KbDO2ep7PMayMKB18hMph7vYNjVMmX5', '2019-05-08 15:23:34', '2019-05-24 08:39:06'),
(8, 'Husne Fahad', NULL, '01730588523', 'Fahad535355@gmail', '$2y$10$VPUqj/ZTZTcdRlVCn48zpuj/ZYphr9/gYyHdL304wMIDQf0r8DkO.', 'Housne Fahad', NULL, 'mid', 'jg', 'Dhanmondi 32, Mirpur, Dhaka, Bangladesh', NULL, NULL, NULL, '2019-05-08 15:26:15', '2019-05-08 15:26:15'),
(10, 'Rony', NULL, '01725410478', 'ronysaha51@gmail.com', '$2y$10$LMs9gUf3duN0AGt6K1OTpOoRdtGjH4EV4a956Lmx3hmHvu1jwCDuO', 'Captain Rony', NULL, 'mid', 'bot', 'Mirpur-10 ,Dhaka .', NULL, 2, 'iNiCz369YATrXqRmj2mWS0Z0WCIGcIZeVMm698lSFjYfDvtWEcMLELKgtQ1P', '2019-05-08 15:31:39', '2019-05-08 15:31:39'),
(11, 'Ashraful Islam Oli', NULL, '1307128000', 'rock.ashraful@gmail.com', '$2y$10$TpJArC25Ev.n09a7gEYSZu5VX/5c//C/ikmpQr0xXwF9LHg8//NAK', 'Captain Rejbioli', NULL, 'mid', 'top', NULL, NULL, NULL, NULL, '2019-05-08 15:32:12', '2019-05-08 15:32:12'),
(13, 'Safin', NULL, '01727712564', 'mdsafinofficial@gmail.com', '$2y$10$68dkVaKT8H4U.Es9PgwKve4o6v.0SziZzzOp7ZLuTizsxEuyx7Mei', 'SafinTheShip', NULL, 'bot', 'top', NULL, NULL, 0, 'r74WvX7BRwdlL0p0uHAM7UB6JbuwJmAuPUyxWe3pGFSg7sMozaCJltRJRAK8', '2019-05-08 15:39:23', '2019-05-15 17:39:29'),
(14, 'Tarveer', NULL, '01828465009', 'Shek.tarme@gmail.com', '$2y$10$P9.TJUdhKRBGj67tqeutaeEhZBgj2CLkZQCUMdBGBc1OkmFfXEpmK', 'Tarveer', NULL, 'jg', 'mid', NULL, NULL, NULL, NULL, '2019-05-08 15:44:57', '2019-05-08 15:44:57'),
(15, 'Shakibur Rahman Shawon', '29573308_10210770044473958_2901487761068309658_n.jpg', '01989166528', 'virtualshawon@gmail.com', '$2y$10$JmvSJ60YkDHME3EGbAH2uOh90rl.hSFf0ky4atcgfzyjDrOHRILgO', 'virtualshadow', NULL, 'sp', 'top', 'Sec-9,road-6,house-14', NULL, NULL, 'Q7DEdu6cnPtYcbN1ScthUU9RFzYhjUS6RTrhn0Io0XYiBYtfUAHqeaeKNSgo', '2019-05-08 15:48:01', '2019-05-16 12:37:56'),
(16, 'Mir Bijoy', NULL, '01644959606', 'mirbijoy32@gmail.com', '$2y$10$p6VUz0nf/DWr5UPXNAs6SeqlAng2Z3w9Pa4tg1YksupRskSlzGaKC', 'Captain Darken', NULL, 'mid', 'jg', NULL, 0, 2, 'w9jIq0TVRMe4nFWs3gqe9ui1bxGtzbLcZLBQ9RsfE3F3VQsfCpOPC29PsqlW', '2019-05-08 15:51:48', '2019-05-10 23:49:44'),
(17, 'Archik', NULL, '01682503906', 'archikpaullol@gmail.com', '$2y$10$SR4Ph3.bn/su3v4qKBrCTeswIvl.BSGJ3lt6XiuD6LTM/OH/MXSCG', 'Archik', NULL, 'top', 'mid', 'Bank town,saver,Dhaka', NULL, NULL, NULL, '2019-05-08 15:52:17', '2019-05-08 15:52:17'),
(18, 'Moumita Ahmed', NULL, '01644959606', 'mmtahmd42@gmail.com', '$2y$10$826bDjK24pYoVcW812N6SuPpY8XKROc6flyDGfb/FtBhrFabVaRiO', 'Captain Bliss', NULL, 'sp', 'mid', NULL, NULL, NULL, NULL, '2019-05-08 15:59:44', '2019-05-08 15:59:44'),
(19, 'Rony', NULL, '01944446655', 'mahmud.hasan.rony@gmail.com', '$2y$10$q9vy.AaYYJ1BRiMxq1GsnemyZaIurwxYvT9RTsUeyWQKhqb9ZjDGu', 'Captain beemo', NULL, 'jg', 'sp', '380 B/1 South Goran, Khilgaon Dhaka 1219', NULL, 2, 'VNviYxRoMWfzLjk2ucfnCzuZZgbnt00ygawGICwNRX3U237TW2xV3tbcayNK', '2019-05-08 16:00:54', '2019-05-08 16:00:54'),
(20, 'ARIF AHMED', NULL, '01687863425', 'Arifahemd.shoikot@gmail.com', '$2y$10$cgrbmVEGU9DD26US5QDg8.IRLm8ozD5CAEsJS7DPO6SXSEVIa/FE.', 'pinik killer', NULL, 'jg', 'sp', 'khilgaon dhaka', NULL, NULL, NULL, '2019-05-08 16:01:57', '2019-05-08 16:01:57'),
(21, 'Shanto64', NULL, '01912393956', 'greenfair.shan5@gmail.com', '$2y$10$qieF.eOFM/VGgHxfLlZTwexDtgz1TzrTzPdc0WyD5ZQ6WVMV79iqC', 'shanto64', NULL, 'top', 'sp', NULL, NULL, NULL, '2i8gg98rxhWlotlQQtGBVBs2YqsUb8vI9QDHml1eiH7qIQ0LWyFbuiw7yvzO', '2019-05-08 16:15:12', '2019-05-08 16:15:12'),
(22, 'Anik Islam', 'received_1145620012191632.jpeg', '01944111152', 'anikislam00007777@gmail.com', '$2y$10$adEN94o0Kvs/1N9FpSGkYeRYkepYw42FDYT9l/eVVFJ0idiBKa4EK', 'Captain Anik', 'Anik Islam', 'jg', 'sp', NULL, NULL, 0, 'G9iICPUJnufnjwT68j7ejwrXsYDNXlwmnLGh1TeOhd0TibSLa6AX59FlUqRu', '2019-05-08 16:18:16', '2019-05-15 17:29:12'),
(23, 'Abhik Chowdhury', NULL, '01521475341', 'abhikbuet@gmail.com', '$2y$10$JD6Mle4fS2nTSz9dAKN2zOq1cOTZXRnjBm4aHOM3vZuWbq1hLENEG', 'WOODEN FOX', NULL, 'top', 'jg', NULL, 0, NULL, NULL, '2019-05-08 16:31:46', '2019-05-11 00:00:59'),
(24, 'Rabeya Umama Khan Ratri', NULL, '01786320600', 'rabeya.ratri1996@gmail.com', '$2y$10$vbPnqNfgsny33weoAbs6SeaXeaN4NZdLi57GL541Gz/Nq8R7lAVbi', 'Ratri6661', NULL, 'bot', 'sp', NULL, NULL, NULL, NULL, '2019-05-08 16:31:52', '2019-05-08 16:31:52'),
(25, 'Hasan Rabit', NULL, '01876740414', 'hasanrabit00@gmail.com', '$2y$10$8RcB6ElRg8pEY7dUr1xqRu1VCqSyFHLlrB4Rr045027F9gE8k7m3.', 'LegitTroll', NULL, 'sp', 'top', NULL, NULL, NULL, NULL, '2019-05-08 16:35:59', '2019-05-08 16:35:59'),
(26, 'Mahir Al Shahariar', NULL, '01749972020', 'mahiralshahariar@gmail.com', '$2y$10$LUXHxIQsmkFdaWzc.Ea7peSg7wevV7wF1HWpdmMEtFj0AtzjD3i8.', 'Captain Shuvo', NULL, 'top', 'sp', 'Mirpur 11,Nannu Market,line-3,house-3,road 8/1.Dhaka-1216', NULL, NULL, NULL, '2019-05-08 16:36:13', '2019-05-08 16:36:13'),
(27, 'Shaykur Rahman', NULL, '01684045365', 'Shaykurrahman@gmail.com', '$2y$10$jk5ZFjiilHdXqHCp5JUIBu.Yb.4lafghPD0HmTf7uWWzyr7IAkouK', 'Silent Motivator', NULL, 'bot', 'jg', NULL, NULL, 2, NULL, '2019-05-08 16:40:38', '2019-05-08 16:40:38'),
(28, 'z.alam ibn jalil', NULL, '01705722670', 'jonynjony@gmail.com', '$2y$10$NPBSIceun2b44ZyXhAHJReBMsYAMMBZOM6hmTgpywoJBka2rHtZb6', 'jonybond007', NULL, 'sp', 'bot', '6-B. Mirpur,Dhaka-1216', NULL, NULL, NULL, '2019-05-08 16:43:12', '2019-05-08 16:43:12'),
(29, 'Mahim', NULL, '01731403079', 'mahim14061999@gmai.com', '$2y$10$0YUVurT7hK0f15GfxPecrOeLxXUy6ce7lNl7LntT6hqas61YD8l8W', 'Captain Mack', NULL, 'top', 'bot', 'Rupnagar abashik,  mirpur 2', NULL, NULL, NULL, '2019-05-08 16:47:18', '2019-05-08 16:47:18'),
(36, 'KingKai5th', NULL, '+8801716103011', 'zaratul5th@gmail.com', '$2y$10$TGZGq2SveI1nhAZjN6ThBu7oTiZxrw/dHjT6PrdX0fKqWg0O140D.', 'KingKai5th', NULL, 'bot', 'top', NULL, NULL, NULL, NULL, '2019-05-08 17:02:07', '2019-05-08 17:02:07'),
(38, 'Hamidur Rahman', NULL, '01646816325', 'LOLGAMER111213@gmail.com', '$2y$10$IFs.ydHi/D47tExVaEiI.esvvqDGEzwlzwookUJe0r6LEAs8MWjpq', 'FåKêR', NULL, 'mid', 'top', 'Heaven.', NULL, NULL, NULL, '2019-05-08 17:04:19', '2019-05-08 17:04:19'),
(39, 'abdul kader', NULL, '01755954595', 'abdulkader3152@gmail.com', '$2y$10$PuC/AqR9OQchHW40E1G0d.64lfsaXtS1JQWMA9wSg8A87QB4WlTjC', 'abdulkader3152', NULL, 'top', 'sp', NULL, NULL, NULL, NULL, '2019-05-08 17:04:34', '2019-05-08 17:04:34'),
(40, 'Tanjid Rahat', NULL, '01957127820', 'theblackamon5@gmail.com', '$2y$10$U9QHSnf7OZ6sgHuAdKAYwud1KpQS4xfel/86r9uwhm/iR/csmuNn6', 'Tanjid_Rahat', NULL, 'jg', 'mid', NULL, NULL, NULL, NULL, '2019-05-08 17:48:53', '2019-05-08 17:48:53'),
(41, 'Tanvir Mazharul', NULL, '01914661749', 'tanvirmazharul04@gmail.com', '$2y$10$JQekKGz4k5NQGCX8QJHnXeTmDpwIsjIv4L1rg.T3U6IFGUII1iUP.', 'Saafa', NULL, 'mid', 'jg', NULL, NULL, NULL, NULL, '2019-05-08 18:15:00', '2019-05-08 18:15:00'),
(42, 'AFRIDI', NULL, '01631172523', 'syeedtamim27@gmail.com', '$2y$10$sdnGzRtZIP6sMcoKc8g.Tes04JsVlGqpvnYKAXXmxtl8echmq1ag2', 'AfriditamiM', NULL, 'jg', 'top', '24 elephant road', NULL, NULL, NULL, '2019-05-08 18:34:52', '2019-05-08 18:34:52'),
(43, 'Makhmudul Islam Rudro', NULL, '01792178651', 'rudromoso@gmail.com', '$2y$10$jFqM4jMu0ObbMOWquMI49Opa5P59jTdQryv1.Fbquz2skPOgj1Cp6', 'CancerKingOp', NULL, 'mid', 'jg', 'nikunja 2 khilkhet', NULL, NULL, NULL, '2019-05-08 20:25:51', '2019-05-08 20:25:51'),
(46, 'Nuhash', NULL, '01937393478', 'farhankhan2516@gmail.com', '$2y$10$is0WfmT/pFdOl5LbAj9ituqIfbquU38ei5gqFJCU7LmyNnP4qZFgi', 'Captain D3vil', NULL, 'sp', 'top', 'Mirpur 12', NULL, NULL, 'yixxOGQ8l2ZeGDFQqTQUzBbrlBDh95qN3w77eKDxBWNfFzPTA1Qq9hLkWLNe', '2019-05-09 06:09:00', '2019-05-09 06:09:00'),
(47, 'Muhammad Maruf', NULL, '01681285511', 'shantoshoubj618@gmail.com', '$2y$10$02gBW6iVcUuHWlVQlrixpuJ2lc7Q4xP0HXU5q5R/KSernJhy2bQHS', 'MMS Maruf', NULL, 'top', 'mid', '410/3 North Goran, Khilgaon, Dhaka-1219', NULL, NULL, NULL, '2019-05-09 06:58:06', '2019-05-09 06:58:06'),
(48, 'Emon', NULL, '01670911447', 'emon01970911447@gmail.com', '$2y$10$jH5kC.ZebT790QEvqx82yuIzVt1S68RpoiTodI/ObmKEiKdiKchDK', 'Deathly Hello', NULL, 'bot', 'sp', 'Now Lives in Shylet', NULL, NULL, NULL, '2019-05-09 15:12:13', '2019-05-09 15:12:13'),
(49, 'ParveZ', 'photo.htm', '01875029850', 'intrexbd02@gmail.com', '$2y$10$oLtqslRNItNGeAIZ6nEk1e84Z5T3UFWeGlqhXd6F3USpPi5VHsf3C', 'JackAce', NULL, 'top', 'bot', NULL, NULL, 0, 'vEMLuyMN1MtGH3yfaKUFVKHBZu63EPSHS5zAgIpZceDmjocVqAlw5sCuj0cc', '2019-05-09 15:45:31', '2019-05-12 18:29:06'),
(54, 'Nurul Abser', NULL, '+8801975644402', 'tahzin164@gmail.com', '$2y$10$Q00nXCkd31h.LFL75i6VzeA98lWV0NlYuVlrIaPvxhs2J5aqwYtdG', 'Drakeoi0', NULL, 'jg', 'jg', '143/2 Middle Paikpara, Bou Bazaar.', NULL, NULL, NULL, '2019-05-10 12:24:39', '2019-05-10 12:24:39'),
(55, 'Tanveer Hoque', 'Circle-Profile.png', '01685534877', 'thaque20@gmail.com', '$2y$10$3IWkrxQWzXGCU.3mTxq2eu4llpF1BLlfK1qw15h2GWwF7M2q5ykiu', 'Tanveer Hoque', NULL, 'sp', 'bot', 'Kallyanpur, Dhaka', 0, 2, '1ZHsVeHnSgfKgdxcftTLtAMgeSFdcyyN3gu3Vjw0yWFuoKC2CqEOiH2myOKv', '2019-05-10 13:43:20', '2019-05-11 00:00:23'),
(56, 'Abdullah Jauad Choudhury', NULL, '+8801887089205', 'jauad202@gmail.com', '$2y$10$TRTPjtANZx29L3lgIHD0ROZHlG1cLnb.h5veBkdWZgSv38qqEB5wK', 'Captain Nagarutz', NULL, 'bot', 'jg', NULL, NULL, NULL, 'rZnw6bTg3m4jTVlvkAYjzXMjlGNdJu9BNR3Rf1doalmuvw6fYZpJB9G1x4XE', '2019-05-10 13:58:20', '2019-05-10 13:58:20'),
(57, 'Developer', 'headphone.jpg', '01685534877', 'dev@mail.com', '$2y$10$nabb/r0zJbjcTgvYcJzKQ.p5ShljvCeuK2dchhMpg2m/ZO6blaro6', 'Tanveer Hoque', 'thaque20', 'sp', 'bot', 'Kallyanpur, Dhaka', 0, 0, 'WlTT98UqQdOw1hOhlRL3k3SEdlJvYzKOkEBMqpqW2o37TG7xbrOsbrJZsHtZ', '2019-05-10 23:22:04', '2019-05-10 23:59:48'),
(58, 'Tofayel Ahmed', NULL, '+8801720147232', 'tofayel60@gmai.com', '$2y$10$.CYoCQM5mNFyx8xw95T8yOKYBoKKMWjvM2hWbRsSGoMyN138gbf2e', 'XXChewbaccaXX', NULL, 'sp', 'jg', 'sylhet,Bangladesh', NULL, NULL, NULL, '2019-05-11 13:55:02', '2019-05-11 13:55:02'),
(61, 'Tofayel Ahmed', '1483633010494.jpg', '01720147232', 'tofayel60@gmail.com', '$2y$10$QB.4cpSB0oru.B3p5bGSkeqYhU/6mHxcq1QbVmIV31Egw.iT1PTUS', 'XXchewbaccaXX', NULL, 'sp', 'jg', 'Sylhet,Bangladesh', NULL, 0, 'zE9r1gUrx9Smo15CVZzmBo2r3mVkbafuUmArhR7TCzwekPMAGLZR6nhg6oat', '2019-05-11 16:37:06', '2019-05-11 16:43:43'),
(63, 'Faysal', NULL, '+8801734814878', 'emuserniabad@gmail.com', '$2y$10$bnkRWejGMTbh28fjAdav1u1snZ.6dZbLzNN.u8bYofHp2xCucaJaq', 'HolowEMU', NULL, 'top', 'sp', 'House-6.Road-9.Lan-3 showpnil mirpur-12', NULL, NULL, 'drLeOv4lhKr0N78I07Y2myMCDxafkmOgTiZzF2WKpsHlBSZUXxOhdnMwEP7B', '2019-05-12 13:06:37', '2019-05-12 13:06:37'),
(64, 'NILOY PAL', 'download.jpg', '+8801765647572', 'l.lawliet.620@gmail.com', '$2y$10$OsnzvPvPyXKaI6xf8bEDEO84f6M0GhuawLngrZbQDWKHL/7kcJIFa', 'NiL MacTavish', NULL, 'bot', 'mid', 'Naogaon, Rajshahi', NULL, NULL, 'iZnk9KrkaJVZOWtMbdNR1a4YlL6wjVkATIrWOYRhJXuOqUWw4LfXDJBMuTVe', '2019-05-12 18:19:36', '2019-05-24 10:47:56'),
(66, 'Antar', NULL, '+8801825212085', 'antar.deb12@gmail.com', '$2y$10$YDds894Fuu791qWYjiYMXeeBOIcIw/6s2pjU375BzpkhrSVTHQRYy', 'Antar', NULL, 'jg', 'sp', 'Feni,Chittagong.', NULL, NULL, NULL, '2019-05-12 19:13:41', '2019-05-12 19:13:41'),
(68, 'MD', NULL, 'Robin', 'robinchowdury88@gmail.com', '$2y$10$hDHBeRmcrJnXB6FjhHX4luXcdrkateiWyAPeOKP3uRefQHenVWR2.', 'Robin BD', NULL, 'top', 'sp', 'Gazipur City\r\n193/8 Bhurulia,Tarubithi...', NULL, NULL, NULL, '2019-05-13 03:21:35', '2019-05-13 03:21:35'),
(69, 'Minhaz uddin', NULL, '01673721557', 'ttsagor2013@gmail.com', '$2y$10$Txq4hnQQxpX6Aeu6Eicuz.tMJXg5e2eD3Rrxkxn.NDgvdBv9IQAdC', 'esprit', NULL, 'top', 'mid', NULL, NULL, NULL, NULL, '2019-05-14 10:02:01', '2019-05-14 10:02:01'),
(70, 'Dipto', NULL, '1866720192', 'sunnodeep14@gmail.com', '$2y$10$BQzhMeuCP7Fch3nRBO3Zie4g451RFGUpXxLmgfstk7sb/Rkbmu6pC', 'jhinger', NULL, 'bot', 'jg', NULL, NULL, NULL, 'Xr5gMsqGBuheJZTSuRZUZ4CyrS902lHXDugQCTIP0agZmr7cU0B3MlosQkU8', '2019-05-14 16:26:28', '2019-05-14 16:26:28'),
(71, 'Husne Fahad', NULL, '01730588523', 'fahad535355@gmail.com', '$2y$10$.B66vjJoS0O.cvfarCYUEOcXzdmG5m99SMoM3jk7W8rRMVnSR1T/i', 'Housne Fahad', NULL, 'mid', 'jg', '1207 Dhanmondi, Dhaka', NULL, NULL, NULL, '2019-05-16 12:27:15', '2019-05-16 12:27:15'),
(73, 'Shahanshah', NULL, '01824121363', 'millardavid70@gmail.com', '$2y$10$EoIAyj6yfy.P7Qio2N7KxukzD5imiki4N12oKLCJO8RkEMy721cPS', 'shanto001', NULL, 'jg', 'top', 'joydebpur, gazipur', NULL, NULL, NULL, '2019-05-16 13:01:06', '2019-05-16 13:01:06'),
(76, 'Ruhit Hossain', NULL, '01836326499', 'ruhithossain123@gmail.com', '$2y$10$7PrDW7ujE7X3FVcVmZW8MeyVnGhfbTRIOxLx3F/fsXnHBBFCeAHji', 'GamerRuhit', NULL, 'top', 'sp', 'NEEL KONTHO, Road: 12, House: 3, Block: G/1, Section: 2, Mirpur-2, Dhaka-1216', NULL, NULL, 'Uz5We3oEIh7EMRxMFPJszKitt7jqF8Df8ekyuhx95Lpsh8YDjMQpKt5R74Wo', '2019-05-16 15:55:07', '2019-05-16 15:55:07'),
(77, 'Nuran', NULL, '01937090123', 'nuranhossain@gmail.com', '$2y$10$oU15jbPg.JBQTA51fHtUKeoH4DjrB5jZdX16Lbtc13gDUxrMSo.rW', 'Captain Nuran', NULL, 'mid', 'top', 'Tongi, Gazipur', NULL, NULL, NULL, '2019-05-16 17:42:58', '2019-05-16 17:42:58'),
(85, 'MD.Shafat', NULL, '01760382436', 'shafathosain@gmail.com', '$2y$10$.oeNTqzs1M8txdqs.Q6uheRouEDAM11.0nUEl.s64zB8R86AAJrNy', 'HalfBloodSworD', NULL, 'bot', 'mid', 'khilkhet,dhaka', NULL, NULL, NULL, '2019-05-17 04:36:20', '2019-05-17 04:36:20'),
(86, 'MD.Naziat Alam Sanin', NULL, '01786438304', 'anaziat153@gmail.com', '$2y$10$vfRqR18GwrhEQpXnA4cwquE96gSrasg6g32TroYuvaLgyAbzxxzp2', 'Th3 LaST LigHT', NULL, 'bot', 'sp', 'besi dorkar hole knock diyen...Tobe Dhaka thaki.', NULL, NULL, 'wsAgx1fOHnsyk2eYHQiJtnA3aQkMZaaS4mEpa8vfDSY32GrIW2RvjxhRqX7r', '2019-05-17 19:06:05', '2019-05-17 19:06:05'),
(87, 'Mohammad Yeasin', NULL, '+8801960368367', 'yeasinkhan58@gmail.com', '$2y$10$PbkKhpg0UAPBxhQ34ASBauiGQqvVU7PJw639SWcvfaPYBRPzWxAr6', 'Yeasin Khan', NULL, 'jg', 'mid', NULL, NULL, NULL, '5WgKTMFn7bLNUsshgojZZYq28y6f8wW82tfBxiKfVr8UVUJUS5HcVDwsZnLG', '2019-05-18 17:12:11', '2019-05-24 11:22:31'),
(90, 'Rezwan Ahmed', NULL, '01620324562', 'ratulatn1@gmail.com', '$2y$10$D2oMnWDk646DyWqphTWt6eLjJPEs6aFXeJz/QlMiFf8DQhPjbLl4C', 'lolrowi', NULL, 'mid', 'bot', NULL, NULL, NULL, NULL, '2019-05-18 21:58:19', '2019-05-18 21:58:19'),
(97, 'MD Jobayer Ahmed', NULL, '01681943200', 'mjariad@gmail.com', '$2y$10$6354k3O8RsSmgaGO4FEr8ue.1Y8ESnVX0hS7TcvUDa2TxPnLEV4zm', 'TeO Osiris', NULL, 'jg', 'sp', NULL, NULL, NULL, NULL, '2019-05-21 04:10:45', '2019-05-21 04:10:45'),
(105, 'fahim', NULL, '01981834965', 'fahimkhan3410@gmail.com', '$2y$10$ySq6V6M.EwB9d1.lhjqIfOevboQlQ0n5BK.uMq6gpRqDKhWGSWWom', 'alga0', NULL, 'sp', 'top', 'south khilgaon, jhilmosjid 43', NULL, NULL, NULL, '2019-05-25 08:35:21', '2019-05-25 08:35:21'),
(106, 'Akib Al Islam', NULL, '01761377318', 'akibislambd@gmail.com', '$2y$10$pZ/cEqw9mVTSsfWAXm6FjO/tUgkrgWTTfeBK6uXskr4GFndKEmAOG', 'NatsuUzzumaki', NULL, 'sp', 'top', NULL, NULL, NULL, NULL, '2019-05-26 19:30:14', '2019-05-26 19:30:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
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
-- Indexes for table `streams`
--
ALTER TABLE `streams`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `streams`
--
ALTER TABLE `streams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
