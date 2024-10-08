-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 07:48 AM
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
-- Database: `prangonmor`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `details` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `details`, `created_at`, `updated_at`) VALUES
(2, 'adminAsset/about/2024-03-10_09-37-54.jpg', '<p>In Bangladesh, Prangonemor Theatre was born in 2003 with a target to practice and spread of Nobel owner Rabindranath Tagore’s drama by untiring regularity. The presentation of Tagore’s drama is standard and artistically presented in Bangladesh and India from the taking birth of it.<br><br>Prangonemor is the only drama group in the world who announced to practice and spread of Rabindranath’s drama. In this way, already Prangonemor artistically completed five successful Tagore’s productions. Not only that we also produce and perform others world famous playwrights regularly. Those productions are extensively congratulated and praised in Bangladesh and India.</p>', '2024-03-10 03:30:06', '2024-03-10 03:37:54'),
(3, 'adminAsset/about/about-image1710063456aboutTwoImg1.jpg', '<p>In Bangladesh, Prangonemor Theatre was born in 2003 with a target to practice and spread of Nobel owner Rabindranath Tagore’s drama by untiring regularity. The presentation of Tagore’s drama is standard and artistically presented in Bangladesh and India from the taking birth of it.<br><br>Prangonemor is the only drama group in the world who announced to practice and spread of Rabindranath’s drama. In this way, already Prangonemor artistically completed five successful Tagore’s productions. Not only that we also produce and perform others world famous playwrights regularly. Those productions are extensively congratulated and praised in Bangladesh and India.</p>', '2024-03-10 03:37:36', '2024-03-10 03:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `drama_id` bigint(20) UNSIGNED NOT NULL COMMENT 'dramas Auto Id',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `price_id` bigint(20) UNSIGNED NOT NULL COMMENT 'drama_prices Auto Id',
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `drama_id`, `name`, `email`, `phone`, `price_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'LUTHFUN NAHER2', 'admin@admin2.com', '01798030952', 33, 2, '2024-03-13 00:07:51', '2024-03-13 01:50:19'),
(2, 3, 'shima', 'shima@gmail.com', '01785653232', 41, 1, '2024-03-13 01:51:26', '2024-03-13 01:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `map` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `telephone`, `map`, `address`, `created_at`, `updated_at`) VALUES
(1, '01840308835', 'prangonemordhaka@gmail.com', '01840308835', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14607.607282694651!2d90.39911678036226!3d23.75088025342449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b888ad339cb5%3A0x20c70986185ad2ba!2sMogbazar%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1679076390955!5m2!1sen!2sbd\" width=\"100%\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '687, Patharia House,Magh Bazar, Dhaka, Bangladesh', '2024-01-29 07:22:59', '2024-01-29 07:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `dramas`
--

CREATE TABLE `dramas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `short_biography` text DEFAULT NULL,
  `director` text DEFAULT NULL,
  `writer` text DEFAULT NULL,
  `producer` text DEFAULT NULL,
  `music` text DEFAULT NULL,
  `makeup` text DEFAULT NULL,
  `sound` text DEFAULT NULL,
  `stage_designer` text DEFAULT NULL,
  `production_start_date` text DEFAULT NULL,
  `release_date` text DEFAULT NULL,
  `title_image` text DEFAULT NULL,
  `feature_image` text DEFAULT NULL,
  `slider_image` text DEFAULT NULL,
  `description_one` longtext DEFAULT NULL,
  `description_two` longtext DEFAULT NULL,
  `video_background_image` text DEFAULT NULL,
  `video_link` text DEFAULT NULL,
  `drama_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Upcoming show , 2=Upcoming Production, 3 = Now showing, 4= Complete Show',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dramas`
--

INSERT INTO `dramas` (`id`, `title`, `short_biography`, `director`, `writer`, `producer`, `music`, `makeup`, `sound`, `stage_designer`, `production_start_date`, `release_date`, `title_image`, `feature_image`, `slider_image`, `description_one`, `description_two`, `video_background_image`, `video_link`, `drama_status`, `status`, `created_at`, `updated_at`) VALUES
(2, 'SHEYMAPREM', 'Synopsis of Sheymaprem', 'Shree Chittoranjan Ghosh', 'Shree Chittoranjan Ghosh', 'Shree Chittoranjan Ghosh', 'Bandhu Tuhin', 'Bandhu Tuhin', 'Bandhu Tuhin', 'Tawfiq Rabin', '2024-03-30', NULL, 'adminAsset/drama/title-image1710061901lokonayokFeature.jpg', 'adminAsset/drama/feature-image17100619014.jpg', 'adminAsset/drama/slider-image1710061901roktokoboriSlider.png', 'Rabindranath is a poet of life, love, and humanity. His famous dance drama ‘Shyama’ is scripted by Shree Chittoranjan Ghosh.The inner theme of Shyama is love, freedom and humanity. There is a story of a dancing girl. Shyama is a very simple girl of a farmer family. But, there is a tyrant landlord who plunders her from a beautiful free life to show them dancing pleasure.. Here, Shyama, Nabina , Mala and Uttieo are all together from same village and they are good friends who help each other. When Shyama loses here her younger all beautiful dreams at that moment her dreams alive by getting a friend or lover namely Bojrosen.\r\n\r\nHere also her younger friend Uttieo presents himself as blindly lover of shyama. Uttio always tries to help her without any feedback. The man ‘Rajkotal’ of landlord ambitiously requests her dance in the dinner party. Shyama rejects the request because she wants a beautful life with Bojrosen where she makes herself as a lover, wife. She sends back two times landlord’s invitation that’s why landlord feels unhappy and arrests Bojrosen as a foreigner spy.\r\n\r\nThey take a artery decition and want to make it effectual very early. Uttio always loves Shyama but Shyama gives him no return. Here, Uttio wants to prove his love for Shyama. Uttio knows that Bojrosen stands on life-death situation, he takes a decision of self-sacrifice. Then, he gets the acceptance of love from Shyama with beautiful impression.\r\n\r\nThere is a agreement with Rajkotal behind the curtain we see they release Bojrosen and Uttio surrenders and imprison him. They killed Uttio. When Bojrosen knows the reality, he hates himself and surrenders to Uttio’s love. At the last Bojrosen says that nobody is there to help man, if man do not help man.', '<span style=\"font-size: 14.4px;\">Rabindranath is a poet of life, love, and humanity. His famous dance drama ‘Shyama’ is scripted by Shree Chittoranjan Ghosh.The inner theme of Shyama is love, freedom and humanity. There is a story of a dancing girl. Shyama is a very simple girl of a farmer family. But, there is a tyrant landlord who plunders her from a beautiful free life to show them dancing pleasure.. Here, Shyama, Nabina , Mala and Uttieo are all together from same village and they are good friends who help each other. When Shyama loses here her younger all beautiful dreams at that moment her dreams alive by getting a friend or lover namely Bojrosen. Here also her younger friend Uttieo presents himself as blindly lover of shyama. Uttio always tries to help her without any feedback. The man ‘Rajkotal’ of landlord ambitiously requests her dance in the dinner party. Shyama rejects the request because she wants a beautful life with Bojrosen where she makes herself as a lover, wife. She sends back two times landlord’s invitation that’s why landlord feels unhappy and arrests Bojrosen as a foreigner spy. They take a artery decition and want to make it effectual very early. Uttio always loves Shyama but Shyama gives him no return. Here, Uttio wants to prove his love for Shyama. Uttio knows that Bojrosen stands on life-death situation, he takes a decision of self-sacrifice. Then, he gets the acceptance of love from Shyama with beautiful impression. There is a agreement with Rajkotal behind the curtain we see they release Bojrosen and Uttio surrenders and imprison him. They killed Uttio. When Bojrosen knows the reality, he hates himself and surrenders to Uttio’s love. At the last Bojrosen says that nobody is there to help man, if man do not help man.</span>', 'adminAsset/drama/video-background-image1710061901lokonayaSlider.jpg', 'https://www.youtube.com/watch?v=kxPCFljwJws&t=9s', 2, 1, '2024-03-09 02:53:35', '2024-03-10 03:11:41'),
(3, 'Swadeshi', 'Shakespeare is considered to be one the greatest poet of human era. We Bengali people consider Rabindranath. Know about other great poets, don’t have clear ideas about the works of many others. Surprisingly, Shakespeare is basically a dramatist. And Rabindranath is the best dramatist not only in Bengali language but also in many other languages. Jose Ortega is the greatest philosopher for Spanish speaking people of modern times. The fascinated interpretation by Ortega helped to newly know about “Dakghor” by Rabindranath. Juan Ramon Jimenez was awarded Nobel Prize for his poetry in nineteen hundred fifty six. A very big portion of the poetry of this great poet is the translations of Rabindranath.', 'Nuna Afroz', 'Nuna Afroz', 'Nuna Afroz', 'Jaglul Alam', 'Tapon', 'Jaglul Alam', 'Sarwar Saikat', '2024-03-06', NULL, 'adminAsset/drama/title-image1710061631lokonayaSlider.jpg', 'adminAsset/drama/feature-image17100616314.jpg', 'adminAsset/drama/slider-image1710061631lokonayaSlider.jpg', 'Synopsis of Swadeshi:\r\n\r\nShakespeare is considered to be one the greatest poet of human era. We Bengali people consider Rabindranath. Know about other great poets, don’t have clear ideas about the works of many others. Surprisingly, Shakespeare is basically a dramatist. And Rabindranath is the best dramatist not only in Bengali language but also in many other languages. Jose Ortega is the greatest philosopher for Spanish speaking people of modern times. The fascinated interpretation by Ortega helped to newly know about “Dakghor” by Rabindranath. Juan Ramon Jimenez was awarded Nobel Prize for his poetry in nineteen hundred fifty six. A very big portion of the poetry of this great poet is the translations of Rabindranath.\r\n\r\nThe interpretation of Dakghar by Ortega captured my heart. I was a student of class five then. The school will build a dakghor (post office). I was sure that I will be Amol. Returning to the school after a long vacation, I found that Jyotibindra Roy was rehearsing for the character Amol. He belonged to famous Roy house, and was the grandson of congress leader Ananda Roy. I had never seen such a beautiful boy. He speaks very sweet. Just what was suitable for Amol. Still I envied him. But got highly benefitted by witnessing their rehearsal, I memorized the full drama. It wasn’t in the last scene before, “Somudre Shanti Parabar” (Peace in the Sea) can be obtained after the Rabindra–application. It’s not even in the drama book. Shanti Chakrabarty, who wasn’t a girl, used to read a few class upper than us. Couldn’t be able to control my tears when he used to sing that song in rehearsals. That’s was because of the context of the drama, not for Shanti’s voice.\r\nThis is how I entered in the world of Rabindranath’s dramas. Watched Dakghor in English, produced by American embassy. Arranged by the children of the employees of the embassy. So beautiful! Bohurupi’s Dakghor was released in cassettes. Amol by Chaity Moshkal was incomprehensibly beautiful. Saw and read his many dramas, one by one. Comedy type drama could be written by any other writer, there would have been no loss if no one could. Somehow Dakghor taught to hope for something else. My mind was satisfied after watching plays like Roktokorobi, Ocholayoton, Muktadhara, Raja etc. Evrey time the horizon of mind used to touch the edge of the world. Malncha, both as novel and play. Taught this drama as part of voicing practice for a long time. Business, gardening, a bridegrrom, a bride, a sister–in–law. A dense disclosure of human nature was made by them like the sunrise in a garden. Very beautiful, yet very painful. “Prangonemor” is a new theatre troupe, started “Char Oddhay” in order to showcase the novel as a drama. On this occasion, my navigated the revolutionary world of Indranath Otin and Ela once again. I don’t know if there is enough drama written in such way where the main context is happening and there is a strong agitation in the society about it. A perspective from far is needed, not just for writing history, but also for literature and drama. As if Rabindranath put the cake his mouth just after taking it down from the pan. Words started again after putting it. Burnt many things, but the Rabindranath’s mouth, nothing happened to it. Just an image was kept hanging for two or three era, an anti–rebellion cloak wear sage and a bourgeoisie Rabindranath.\r\nAnytime living from that time, should be heavily ashamed of it, if they read “Char Oddhay” once again now.  Is the political novel “Char Oddhay” against the revolutionary violence? This sort of judgment seems very childish now. Rather, it seems like in “Char Oddhay” Rabindranath indicated some crisis of human being driven to the infinity, the way he spoke about them in Dakghor, in Roktokorobi. In his every drama, there is a pleading similarity somewhere. But not in his comedies.\r\nI am facing no problem about praising the courages of Prangonemor in advance. Hope that through acting and presentation, this drama will become similar to the novel “Char Oddhay”.', '<span style=\"font-size: 14.4px;\">Synopsis of Swadeshi: Shakespeare is considered to be one the greatest poet of human era. We Bengali people consider Rabindranath. Know about other great poets, don’t have clear ideas about the works of many others. Surprisingly, Shakespeare is basically a dramatist. And Rabindranath is the best dramatist not only in Bengali language but also in many other languages. Jose Ortega is the greatest philosopher for Spanish speaking people of modern times. The fascinated interpretation by Ortega helped to newly know about “Dakghor” by Rabindranath. Juan Ramon Jimenez was awarded Nobel Prize for his poetry in nineteen hundred fifty six. A very big portion of the poetry of this great poet is the translations of Rabindranath. The interpretation of Dakghar by Ortega captured my heart. I was a student of class five then. The school will build a dakghor (post office). I was sure that I will be Amol. Returning to the school after a long vacation, I found that Jyotibindra Roy was rehearsing for the character Amol. He belonged to famous Roy house, and was the grandson of congress leader Ananda Roy. I had never seen such a beautiful boy. He speaks very sweet. Just what was suitable for Amol. Still I envied him. But got highly benefitted by witnessing their rehearsal, I memorized the full drama. It wasn’t in the last scene before, “Somudre Shanti Parabar” (Peace in the Sea) can be obtained after the Rabindra–application. It’s not even in the drama book. Shanti Chakrabarty, who wasn’t a girl, used to read a few class upper than us. Couldn’t be able to control my tears when he used to sing that song in rehearsals. That’s was because of the context of the drama, not for Shanti’s voice. This is how I entered in the world of Rabindranath’s dramas. Watched Dakghor in English, produced by American embassy. Arranged by the children of the employees of the embassy. So beautiful! Bohurupi’s Dakghor was released in cassettes. Amol by Chaity Moshkal was incomprehensibly beautiful. Saw and read his many dramas, one by one. Comedy type drama could be written by any other writer, there would have been no loss if no one could. Somehow Dakghor taught to hope for something else. My mind was satisfied after watching plays like Roktokorobi, Ocholayoton, Muktadhara, Raja etc. Evrey time the horizon of mind used to touch the edge of the world. Malncha, both as novel and play. Taught this drama as part of voicing practice for a long time. Business, gardening, a bridegrrom, a bride, a sister–in–law. A dense disclosure of human nature was made by them like the sunrise in a garden. Very beautiful, yet very painful. “Prangonemor” is a new theatre troupe, started “Char Oddhay” in order to showcase the novel as a drama. On this occasion, my navigated the revolutionary world of Indranath Otin and Ela once again. I don’t know if there is enough drama written in such way where the main context is happening and there is a strong agitation in the society about it. A perspective from far is needed, not just for writing history, but also for literature and drama. As if Rabindranath put the cake his mouth just after taking it down from the pan. Words started again after putting it. Burnt many things, but the Rabindranath’s mouth, nothing happened to it. Just an image was kept hanging for two or three era, an anti–rebellion cloak wear sage and a bourgeoisie Rabindranath. Anytime living from that time, should be heavily ashamed of it, if they read “Char Oddhay” once again now. Is the political novel “Char Oddhay” against the revolutionary violence? This sort of judgment seems very childish now. Rather, it seems like in “Char Oddhay” Rabindranath indicated some crisis of human being driven to the infinity, the way he spoke about them in Dakghor, in Roktokorobi. In his every drama, there is a pleading similarity somewhere. But not in his comedies. I am facing no problem about praising the courages of Prangonemor in advance. Hope that through acting and presentation, this drama will become similar to the novel “Char Oddhay”.</span>', 'adminAsset/drama/video-background-image1710061631titleImage.jpg', 'https://www.youtube.com/watch?v=L6WE_YIxQMI', 2, 1, '2024-03-09 03:19:58', '2024-03-10 03:10:36'),
(4, 'LOKNAYAK', 'LOKNAYAK\r\n\r\nLokonayak\r\nSynopsis of Loknayak \r\n\r\nGurudoyal, father of Mukunda Das went to Barishal from Bikrampur and started living there permanently after leaving behind his ancestor’s profession of being waterman. Gurudoyal used to earn his livelihood by working as a footman in central court of Barishal and managing a grocery shop. Adolescent Joggeshwar was admitted into a primary school. But he couldn’t set his mind in study. Restless Joga’s mind used to roam around crossing the walls of his classroom in search of melodies. At one stage, he took shelter in a fancy Kirtan troupe of BireshwarKirtaniya (chanter) leaving his school behind. The days of homeless Joga were spent by being', 'Ananta Hira', 'Ananta Hira', 'Ananta Hira', 'Shishir Rahman', 'Nuna Afroz', 'Shishir Rahman', 'Foyez Jahir', '2024-04-11', '2024-03-14', 'adminAsset/drama/title-image1709997662lokonayokTitle.jpg', 'adminAsset/drama/feature-image1709997662lokonayokFeature.jpg', 'adminAsset/drama/slider-image1709997662lokonayaSlider.jpg', 'Explanation of the Director:\r\n\r\nAs an artist, the thing that mostly attracted me is the liability part of Charan king Mukunda Das to country, land and people. Anti-British movement was at its pick during the time of Charan king Mukunda Das. The Charan king also felt the heat of that movement of his homeland in his heart. And so, Charan king moved around the whole Bengal with his balled songs and dramas to awaken the Swadeshi sentiment among the bleed, deprived, helpless people of Bengal from the sense of liabilities to his country, land and people. Naturally, he became the victim of the anger of British Government. “SadhanSongeet” compilation and “Matripuja” opera of Mukunda Das were forfeited by British Government. After capturing from a music show, Mukunda Das was imprisoned for 3 years and his brother for 6 months in deceptive trial. British Police 36 times issued ban over his music shows. It didn’t end there. He was fined 300 taka at that time. British Government showed the cruelty of collecting that money through an auction of the gold medals he earned by singing in his whole life. Not only in Bengal, there is no example of such tortures on an artist in the history of the world. Many operas and songs including “Matripuja” written by Mukunda Das lost in the eclipse of time, still operas like “Somaj” and others which were found lately; that bold part of his words and melodies filled with the liability to country-land-people hidden in those creations can be felt by watching “Loknayak”, hopefully.', '<span style=\"font-size: 14.4px;\">Explanation of the Director: As an artist, the thing that mostly attracted me is the liability part of Charan king Mukunda Das to country, land and people. Anti-British movement was at its pick during the time of Charan king Mukunda Das. The Charan king also felt the heat of that movement of his homeland in his heart. And so, Charan king moved around the whole Bengal with his balled songs and dramas to awaken the Swadeshi sentiment among the bleed, deprived, helpless people of Bengal from the sense of liabilities to his country, land and people. Naturally, he became the victim of the anger of British Government. “SadhanSongeet” compilation and “Matripuja” opera of Mukunda Das were forfeited by British Government. After capturing from a music show, Mukunda Das was imprisoned for 3 years and his brother for 6 months in deceptive trial. British Police 36 times issued ban over his music shows. It didn’t end there. He was fined 300 taka at that time. British Government showed the cruelty of collecting that money through an auction of the gold medals he earned by singing in his whole life. Not only in Bengal, there is no example of such tortures on an artist in the history of the world. Many operas and songs including “Matripuja” written by Mukunda Das lost in the eclipse of time, still operas like “Somaj” and others which were found lately; that bold part of his words and melodies filled with the liability to country-land-people hidden in those creations can be felt by watching “Loknayak”, hopefully.</span>', 'adminAsset/drama/video-background-image1709997662lokonayokVideo.jpg', 'https://www.youtube.com/watch?v=L6WE_YIxQMI', 1, 1, '2024-03-09 03:46:18', '2024-03-09 09:21:02');
INSERT INTO `dramas` (`id`, `title`, `short_biography`, `director`, `writer`, `producer`, `music`, `makeup`, `sound`, `stage_designer`, `production_start_date`, `release_date`, `title_image`, `feature_image`, `slider_image`, `description_one`, `description_two`, `video_background_image`, `video_link`, `drama_status`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Raktakarabi', 'About Drama\r\nThis drama is based on truthfulness but there has any historical incident been happened or not if this duty goes to historian, audience will despoil. So, this is it from Poet’s believe it’s totally true. What is the name of the place where the incident has happened may be the\r\nhistorian could differ. Bu everyone knows its nickname “Jokkhopuri”- mine. Scholars say, in mythological mine there is a gold throne, God of Wealth- Kuber.But this play is mainly not mythological, even not metaphorical. But the told setting is where wealth is hidden in mud. So, after getting information here tunnel carving is going on. For this people cal l it Jokkhopuri. We will become acquainted with them in proper time.', 'Nuna Afroz', 'Nuna Afroz', 'Nuna Afroz', 'Jakir Hossain Shiplu', 'Jakir Hossain Shiplu', 'Jakir Hossain Shiplu', 'Fayez Johir', '2024-03-20', NULL, 'adminAsset/drama/title-image1709988805roktokoboriTitle.png', 'adminAsset/drama/feature-image1709988805roktokoboriFeature.png', 'adminAsset/drama/slider-image1709988805roktokoboriSlider.png', '<p style=\"text-align: center; \"><b> Director’s </b></p><p><b><br></b>\r\nWhen a director chooses a script, there lies some reason for choosing. These\r\nquestions are out of questions. We, Prangonemor declared at the very beginning\r\nthat in our practice will more emphasize in Tagore’s play because we believe there\r\nis no alternative for pure drama. As our prime concern in Rabindranath Tagore, his\r\nfamous play in Bengali Literature, Rakta Karabi will be our dream, its normal. We\r\nfirmly believe that last five years we have made our resources in our team to stage\r\nthis play. I become astonished when I can hear whispering that why should we\r\nneed to stage Rakta Karabi whereas another theatre group is stages this play in\r\nDhaka. Humbly, I can tell them that the Director of that play also believes Rakta\r\nKarabi is not personal property. Better we should advance for healthy creative\r\nwork.\r\nNow, let’s say about the drama</p><p> I don’t have need to say more what and why the\r\ndrama is? Tagore has said, “May be you will try to find out the inner meaning from\r\nthe core of the drama but my request is that the soberness outs when the core\r\nthings come out. Heart works behind the chest. If you bring it outer side and works\r\non it then it will damage.” So that I want to request the audience of Rakta Karabi\r\nthat to enjoy this play you need a soft heart otherwise you will be distracted.\r\nRather I’ve to say why this play is relevant. Although, this play does not represent\r\nany era, it’s the representative of the present capitalism. We can find the creature\r\nand no creature fact. We can understand how the own power is squishing. We can\r\nsee how the powerful brings gold from the mine. The eagerness of collecting gold\r\nexile him from his life and man becomes number. Nowadays man can understand\r\nthat there is no congestion in power but love. </p>', '<p><img src=\"data:image/png;base64,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\" data-filename=\"roktokobori-title.png\" style=\"width: 150px;\"><span style=\"font-weight: 700; font-size: 14.4px; text-align: center; color: var(--ct-card-color); background-color: var(--ct-card-bg); font-family: var(--ct-body-font-family);\"> Dire </span><span style=\"font-size: 14.4px; color: var(--ct-card-color); background-color: var(--ct-card-bg); font-family: var(--ct-body-font-family); font-weight: var(--ct-body-font-weight); text-align: var(--ct-body-text-align);\">hese questions are out of questions. We, Prangonemor declared at the very beginning that in our practice will more emphasize in Tagore’s play because we believe there is no alternative for pure drama. As our prime concern in Rabindranath Tagore, his famous play in Bengali Literature, Rakta Karabi will be our dream, its normal. We firmly believe that last five years we have made our resources in our team to stage this play. I become astonished when I can hear whispering that why should we need to stage Rakta Karabi whereas another theatre group is stages this play in Dhaka. Humbly, I can tell them that the Director of that play also believes Rakta Karabi is not personal property. Better we should advance for healthy creative work. Now, let’s say about the drama</span></p><p style=\"font-size: 14.4px;\"> I don’t have need to say more what and why the drama is? Tagore has said, “May be you will try to find out the inner meaning from the core of the drama but my request is that the soberness outs when the core things come out. Heart works behind the chest. If you bring it outer side and works on it then it will damage.” So that I want to request the audience of Rakta Karabi that to enjoy this play you need a soft heart otherwise you will be distracted. Rather I’ve to say why this play is relevant. Although, this play does not represent any era, it’s the representative of the present capitalism. We can find the creature and no creature fact. We can understand how the own power is squishing. We can see how the powerful brings gold from the mine. The eagerness of collecting gold exile him from his life and man becomes number. Nowadays man can understand that there is no congestion in power but love. </p>', 'adminAsset/drama/video-background-image1710053367group1.jpg', 'https://youtu.be/vrM0W3Le6oo', 1, 1, '2024-03-09 03:53:02', '2024-03-10 00:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `dramas_details`
--

CREATE TABLE `dramas_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `drama_id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drama_prices`
--

CREATE TABLE `drama_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `drama_id` int(11) NOT NULL,
  `label` text NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drama_prices`
--

INSERT INTO `drama_prices` (`id`, `drama_id`, `label`, `price`, `created_at`, `updated_at`) VALUES
(31, 4, 'high', 1000, '2024-03-09 09:21:05', '2024-03-09 09:21:05'),
(32, 4, 'midium', 800, '2024-03-09 09:21:05', '2024-03-09 09:21:05'),
(33, 4, 'low', 500, '2024-03-09 09:21:05', '2024-03-09 09:21:05'),
(34, 5, 'midium', 400, '2024-03-10 00:49:27', '2024-03-10 00:49:27'),
(35, 5, 'low', 300, '2024-03-10 00:49:27', '2024-03-10 00:49:27'),
(36, 5, 'high', 500, '2024-03-10 00:49:27', '2024-03-10 00:49:27'),
(40, 3, 'high', 700, '2024-03-10 03:10:36', '2024-03-10 03:10:36'),
(41, 3, 'midium', 500, '2024-03-10 03:10:36', '2024-03-10 03:10:36'),
(42, 3, 'low', 300, '2024-03-10 03:10:37', '2024-03-10 03:10:37'),
(43, 2, 'high', 1000, '2024-03-10 03:11:41', '2024-03-10 03:11:41'),
(44, 2, 'midium', 500, '2024-03-10 03:11:41', '2024-03-10 03:11:41'),
(45, 2, 'low', 300, '2024-03-10 03:11:41', '2024-03-10 03:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

CREATE TABLE `festivals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_image` text DEFAULT NULL,
  `feature_image` text DEFAULT NULL,
  `video_image` text DEFAULT NULL,
  `video_link` text DEFAULT NULL,
  `description_one` longtext DEFAULT NULL,
  `description_two` longtext DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`id`, `title`, `title_image`, `feature_image`, `video_image`, `video_link`, `description_one`, `description_two`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Karnaphuli Natya Utshob 2010', 'adminAsset/festival/festival-title-image1710047862lokonayokFeature.jpg', 'adminAsset/festival/festival-feature-image17100478624.jpg', 'adminAsset/festival/festival-video-image1710049388group1.jpg', 'https://www.youtube.com/watch?v=kxPCFljwJws', '<h3 class=\"news-detail_heading\" style=\"margin-top: var(--margin-top-15); margin-bottom: 0px; padding: 0px; border: none; outline: none; line-height: 46px; font-size: var(--font-36); position: relative; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 0, 0);\">Karnaphuli Natya Utshob 2010</h3><h2 class=\"service-detail_title\" style=\"margin-top: 0px; margin-bottom: var(--margin-bottom-15); padding: 0px; border: none; outline: none; line-height: 58px; font-size: var(--font-48); position: relative; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;DM Sans&quot;, sans-serif; color: var(--color-two);\"><p style=\"margin-top: var(--margin-top-15); margin-right: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-size: var(--font-16); color: var(--color-three); line-height: 28px; font-weight: 400;\">s American teens stay at home to help combat the coronavirus, gaming has been a way for them to have fun, but also to connect to the outside world. One week after the quarantine went into effect, U.S. video game usage went into effect, U.S. video game usage went up 75 percent, according to Verizon reports. Studies also show that 35% of Gen Z teens have increased their gaming activities, according to Magid’s Covid-19 pulse study. In fact, Gen Z considers the social gaming platform Discord one of the top-four-most-important apps. While the cliché may be that parents are concerned about video games, the benefits of playing video games are plentiful. Recent developments point to several reasons online games for teens may be an ideal tech option for your kids, which can allow parents to rest a little easier.</p><p style=\"margin-top: var(--margin-top-15); margin-right: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-size: var(--font-16); color: var(--color-three); line-height: 28px; font-weight: 400;\">The World Health Organization (WHO) has embraced the gaming industry for its efforts to promote COVID-19 safety practices through its #PlayApartTogether campaign. In addition to gaming’s social distancing advantages, allowing people all over the world to interact digitally, game developers and publishers from Activision to Zynga have pledged to promote additional WHO health guidelines with in-game messaging, such as hand washing and respiratory etiquette. This is especially significant as this contradicts previous WHO concerns over excessive gaming.</p></h2>', '<h4 class=\"news-detail_subheading\" style=\"margin-top: var(--margin-top-15); margin-bottom: 0px; padding: 0px; border: none; outline: none; line-height: 36px; font-size: var(--font-28); position: relative; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;DM Sans&quot;, sans-serif; color: var(--color-two);\">Parental Controls have Gotten Better</h4><h2 class=\"service-detail_title\" style=\"margin-top: 0px; margin-bottom: var(--margin-bottom-15); padding: 0px; border: none; outline: none; line-height: 58px; font-size: var(--font-48); position: relative; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;DM Sans&quot;, sans-serif; color: var(--color-two);\"><p style=\"margin-top: var(--margin-top-15); margin-right: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-size: var(--font-16); color: var(--color-three); line-height: 28px; font-weight: 400;\">The World Health Organization (WHO) has embraced the gaming industry for its efforts to promote COVID-19 safety practices through its #PlayApartTogether campaign. In addition to gaming’s social distancing advantages, allowing people all over the world to interact digitally, game developers and publishers from Activision to Zynga have pledged to promote additional WHO health guidelines with in-game messaging, such as hand washing and respiratory etiquette. This is especially significant as this contradicts previous WHO concerns over excessive gaming.</p></h2><h4 class=\"news-detail_subheading\" style=\"margin-top: var(--margin-top-15); margin-bottom: 0px; padding: 0px; border: none; outline: none; line-height: 36px; font-size: var(--font-28); position: relative; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;DM Sans&quot;, sans-serif; color: var(--color-two);\">When in Doubt, get Involved</h4><h2 class=\"service-detail_title\" style=\"margin-top: 0px; margin-bottom: var(--margin-bottom-15); padding: 0px; border: none; outline: none; line-height: 58px; font-size: var(--font-48); position: relative; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;DM Sans&quot;, sans-serif; color: var(--color-two);\"><p style=\"margin-top: var(--margin-top-15); margin-right: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-size: var(--font-16); color: var(--color-three); line-height: 28px; font-weight: 400;\">Still not convinced that gaming is good for you? That’s understandable, considering concerns long raised by parents that include the treatment of women in social gaming, violence in games and gaming addiction. For more information, explore the Safer Gaming Guide from the Family Online Safety Institute. The absolute best recommendation for parents worried about game safety or that your kid is gaming too much: Join your kids on their favorite platform. Being stuck at home could provide an ideal time to explore their gaming life. Have them be your expert guide through some of their favorite games. Doing this can help you gauge the legitimacy of your concerns and what safeguards can be employed to ensure gaming remains a responsible activity in your household.</p></h2>', '2024-03-10', 1, '2024-03-09 23:17:42', '2024-03-09 23:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'adminAsset/gallery/2024-02-24_15-53-46.jpg', 1, '2024-02-24 09:53:46', '2024-02-24 09:53:46'),
(2, 'test', 'adminAsset/gallery/2024-02-24_15-54-29.jpg', 1, '2024-02-24 09:54:29', '2024-02-24 09:54:29'),
(3, 'test', 'adminAsset/gallery/2024-02-24_15-54-45.jpg', 1, '2024-02-24 09:54:45', '2024-02-24 09:54:45'),
(4, 'test', 'adminAsset/gallery/2024-02-24_15-55-03.jpg', 1, '2024-02-24 09:55:03', '2024-02-24 09:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_20_104110_create_posts_table', 1),
(7, '2022_10_25_092552_create_sessions_table', 1),
(8, '2022_10_26_133431_create_roles_table', 1),
(9, '2022_10_26_133512_create_role_routes_table', 1),
(10, '2022_10_30_144110_create_user_role_table', 1),
(11, '2022_10_31_093248_create_categories_table', 1),
(12, '2022_10_31_093426_create_sub_categories_table', 1),
(13, '2024_01_04_082654_create_dramas_table', 1),
(14, '2024_01_04_113504_create_dramas_details_table', 1),
(16, '2024_01_23_130345_create_statements_table', 1),
(17, '2024_01_23_144429_create_performers_table', 1),
(18, '2024_01_23_155453_create_newsletters_table', 1),
(19, '2024_01_23_162335_create_contacts_table', 1),
(20, '2024_01_24_094217_create_settings_table', 1),
(21, '2024_01_27_062355_create_abouts_table', 1),
(22, '2024_01_23_110732_create_teams_table', 2),
(23, '2024_02_24_150438_create_galleries_table', 3),
(24, '2024_02_24_150639_create_videos_table', 3),
(26, '2024_02_25_050420_create_teams_conditions_table', 4),
(28, '2024_03_08_201755_create_drama_prices_table', 6),
(29, '2024_02_25_054007_create_workshops_table', 7),
(30, '2024_03_10_041013_create_festivals_table', 7),
(31, '2024_03_13_051319_create_bookings_table', 8),
(32, '2024_03_13_075753_create_work_prangonmors_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `performers`
--

CREATE TABLE `performers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL COMMENT '1=font_stage, 0=back_stage',
  `character` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `performers`
--

INSERT INTO `performers` (`id`, `name`, `position`, `character`, `created_at`, `updated_at`) VALUES
(1, 'Kamrul Hassan', '1', 'Bajra Sen', '2024-01-29 07:41:19', '2024-01-29 07:41:19'),
(2, 'Fullkoli khan', '0', 'Jocker', '2024-01-29 07:42:13', '2024-01-29 07:42:13'),
(3, 'Rofic', '1', 'Focus man', '2024-01-29 07:43:33', '2024-01-29 07:43:33'),
(4, 'Kamrul  Hassan', '0', 'Light', '2024-01-29 07:44:23', '2024-01-29 07:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL DEFAULT 0,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `image` longtext NOT NULL,
  `hit_count` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `post_date` text DEFAULT NULL,
  `post_timestamp` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_routes`
--

CREATE TABLE `role_routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `route_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jRRqkhgj6tCmEl56Z8kGTMDmTpX4ak1rBc2QFSS7', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSUt4Tm5rRXowTm0wbDN6R2lsVlV0QTh0SGZzNE1SR2l6MUJHSVpIcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4NC9wcmFuZ29uZW1vci9wdWJsaWMvd29yay1wcmFuZ29uZW1vciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkNDlpUEZ6N0c5RndvTFdvVUJjYmRvZXJYVy5EQ2M2emVMYXViVG5iUUNrenNXallGRXF4QzIiO30=', 1710319194),
('vNnfmErcKBksSEXrdkawaK560WVSufhLJ7uCu0NJ', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOElibTdFU3hLazJ5THNpZENMcjJMQkpJWUxodmFLOGs0SHlseTZoNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4NC9wcmFuZ29uZW1vci9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDQ5aVBGejdHOUZ3b0xXb1VCY2Jkb2VyWFcuRENjNnplTGF1YlRuYlFDa3pzV2pZRkVxeEMyIjt9', 1710392308);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `dark_logo` varchar(255) DEFAULT NULL,
  `white_logo` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `email`, `country`, `state`, `dark_logo`, `white_logo`, `facebook`, `twitter`, `instagram`, `pinterest`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'Prangonemor', 'nayemcse22@gmail.com', 'Bangladesh', 'Dhaka', 'adminAsset/settings/13316191752024-02-03_08-15-19.png', 'adminAsset/settings/756822052024-02-03_08-15-19.png', 'vincenza.boyleasdfasdf', 'twitter', 'Instragram', 'pinterest', 'asfdasdf', '2024-01-29 07:27:00', '2024-02-03 02:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `statements`
--

CREATE TABLE `statements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statement` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statements`
--

INSERT INTO `statements` (`id`, `statement`, `created_at`, `updated_at`) VALUES
(1, '<p>Rabindranath Tagore is unavoidable shining radiant suggestions in Bengali life. Prangonemor mainly insists on practice and expanse plays of Robindronath and its merged in devotion and emotion.</p><p>We want to retain in our memory, the philosophy of beauties and truthful from the whole Rabindranath’s literature and want to understand with our heart and soul to practice in our life and theater.</p><p>We insist to the established regular practice of Rabindranath Tagore’s drama in our country. The theatre team of Prangonemor aimed to establish on stage to evolve life to art either it presents the reflection of real life that continues between art and turn of life, above all country, soil and human being.</p><p>Prangonemor not only will practice Rabindranath’s plays but also will practice standard plays from abroad including Bangladesh but mainly will insist on practice and expanse plays of Robindronath.</p><p>If prangonemor produce only one production in a year, it must be from Rabindranath but for the second production could be others.</p><p>Every year Prangonemor arranges several seminars to renown, spread and increase the valuation of Tagore’s drama where Tagore’s drama’s researchers, a dramatic person of Bangladesh and India present their researches and documents. Side by side, Prangonemor also systematizes Rabindra drama workshop to touch the goal of Tagore’s morality and gracefulness, it encourages the theater members, drama person to know Tagore’s drama.</p><p>This Organization trust on an expanse of intelligence and endowed with a good memory than the practice of Democracy.</p><p>We salute those Bengali peoples from both countries who already sacrificed and are sacrificing their valuable long time from 1975 to until today, with their experience, knowledge and hard labour for Bengali theatre thus Prangonemor started their journey. Each and every work of Prangonemor will memorize them respectfully from the core of heart.</p>', '2024-01-29 07:31:16', '2024-01-29 07:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `personal_info` text DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `member_type` varchar(255) DEFAULT NULL COMMENT '1=Founder,2=Primary,3=permanent,4=Associate ',
  `image` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkdin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `email`, `phone`, `personal_info`, `experience`, `short_description`, `location`, `member_type`, `image`, `website`, `facebook`, `twitter`, `instagram`, `linkdin`, `youtube`, `long_description`, `created_at`, `updated_at`) VALUES
(1, 'Ananta Hira', 'Ananta Hira', 'anantahira@gmail.com', '01798525252', NULL, NULL, 'Lorem ipsum dolor sit amet consectetur. Volutpat lacus eget diam in. Ullamcorper neque lectus mattis amet mattis dignissim. Purus ac suspendisse faucibus nibh. Massa vitae ultrices scelerisque elit odio in arcu. Sed est id posuere imperdiet mattis nunc eu. Accumsan turpis phasellus turpis faucibus interdum nibh augue tortor senectus. Ante nisl justo hendrerit sit dignissim mi blandit feugiat.', '12/A, NYC, USA', '1', 'adminAsset/teams/2024-03-08_15-46-20.jpg', NULL, 'https://www.facebook.com/hira.ananta', NULL, NULL, NULL, NULL, 'Personal Info \r\nCras ac sapien eget ante faucibus tempus et eu tortor. Integer iaculis ultrices velit nec tempor. Pellentesque aliquet est massa, sit amet tempor mi auctor nec. Mauris a nibh sed libero fermentum aliquet. Quisque sit amet faucibus magna. Donec purus mi, commodo id commodo vel, imperdiet ut mauris. Ut ultricies arcu risus, malesuada efficitur orci euismod in. Proin eleifend est risus, ac sodales nulla mollis vel. Etiam condimentum placerat mi, sed cursus augue dignissim sit amet.\r\n\r\nQuisque sit amet faucibus magna. Donec purus mi, commodo id commodo vel, imperdiet ut mauris. Ut ultricies arcu risus, malesuada efficitur orci euismod in. Proin eleifend est risus, ac sodales nulla mollis vel.\r\n\r\nCareer Guidelines\r\nDonec purus mi, commodo id commodo vel, imperdiet ut mauris. Ut ultricies arcu risus, malesuada efficitur orci euismod in. Proin eleifend est risus, ac sodales nulla mollis vel.\r\n\r\nInteger iaculis ultrices velit nec tempor. Pellentesque aliquet est massa, sit amet tempor mi auctor nec. Mauris a nibh sed libero fermentum aliquet. Quisque sit amet faucibus magna. Donec purus mi, commodo id commodo vel, imperdiet ut mauris. Ut ultricies arcu risus, malesuada efficitur orci euismod in. Proin eleifend est risus, ac sodales nulla mollis vel. Etiam condimentum placerat mi, sed cursus augue dignissim sit amet.', '2024-03-08 09:46:20', '2024-03-09 01:28:00'),
(2, 'Nuna Afroz', 'Founder', 'nunaafroz@gmail.com', NULL, NULL, NULL, NULL, NULL, '1', 'adminAsset/teams/2024-03-09_05-18-03.png', NULL, 'https://www.facebook.com/nuna.afroz', NULL, NULL, NULL, NULL, NULL, '2024-03-08 09:48:27', '2024-03-08 23:18:03'),
(3, 'Awal Reza', 'Permanent Member', NULL, NULL, NULL, NULL, NULL, NULL, '3', 'adminAsset/teams/2024-03-08_15-49-54.jpg', NULL, 'https://www.facebook.com/shishir.rahaman.73', NULL, NULL, NULL, NULL, NULL, '2024-03-08 09:49:54', '2024-03-08 09:57:50'),
(4, 'Ekram Mahfuj', 'Permanent Member', NULL, NULL, NULL, NULL, NULL, NULL, '3', 'adminAsset/teams/2024-03-08_15-52-00.jpg', NULL, 'https://www.facebook.com/ekram.mahfuj', NULL, NULL, NULL, NULL, NULL, '2024-03-08 09:52:00', '2024-03-08 10:00:14'),
(5, 'Ramiz Razu', 'Permanent Member', NULL, NULL, NULL, NULL, NULL, NULL, '3', 'adminAsset/teams/2024-03-08_16-01-10.jpg', NULL, 'https://www.facebook.com/ramiz.razu', NULL, NULL, NULL, NULL, NULL, '2024-03-08 10:01:10', '2024-03-08 10:01:18'),
(6, 'Shishir Rahaman', 'Permanent Member', NULL, NULL, NULL, NULL, NULL, NULL, '3', 'adminAsset/teams/2024-03-08_16-03-08.jpg', NULL, 'https://www.facebook.com/shishir.rahman604', NULL, NULL, NULL, NULL, NULL, '2024-03-08 10:03:08', '2024-03-08 10:03:08'),
(7, 'Tawfique Robin', 'Permanent Member', NULL, NULL, NULL, NULL, NULL, NULL, '3', 'adminAsset/teams/2024-03-08_16-04-06.jpg', NULL, 'https://www.facebook.com/tawfique.robin', NULL, NULL, NULL, NULL, NULL, '2024-03-08 10:04:06', '2024-03-08 10:04:06'),
(8, 'Bulet Jewel', 'Primary Member', NULL, NULL, NULL, NULL, NULL, NULL, '2', 'adminAsset/teams/2024-03-08_16-07-01.jpg', NULL, 'https://www.facebook.com/Bulet.Jewel', NULL, NULL, NULL, NULL, NULL, '2024-03-08 10:07:01', '2024-03-08 10:07:01'),
(9, 'Mashiur Rahman Bhuiyah', 'Primary Member', NULL, NULL, NULL, NULL, NULL, NULL, '2', 'adminAsset/teams/2024-03-09_05-33-41.jpg', NULL, 'https://www.facebook.com/mashiurrahman.bhuiyah', NULL, NULL, NULL, NULL, NULL, '2024-03-08 10:07:45', '2024-03-08 23:33:41'),
(10, 'Mohammed Shabuktaign Shuvo', 'Primary Member', NULL, NULL, NULL, NULL, NULL, NULL, '2', 'adminAsset/teams/2024-03-09_05-33-31.jpg', NULL, 'https://www.facebook.com/mohammed.shabuktaign', NULL, NULL, NULL, NULL, NULL, '2024-03-08 10:08:45', '2024-03-08 23:33:31'),
(11, 'Nizam-Liton', 'Primary Member', NULL, NULL, NULL, NULL, NULL, NULL, '2', 'adminAsset/teams/2024-03-09_05-34-17.jpg', NULL, 'https://www.facebook.com/nizam.liton.9', NULL, NULL, NULL, NULL, NULL, '2024-03-08 10:09:33', '2024-03-08 23:34:17'),
(12, 'Prokriti Sikder', 'Primary Member', NULL, NULL, NULL, NULL, NULL, NULL, '2', 'adminAsset/teams/2024-03-09_05-32-36.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-08 10:10:26', '2024-03-08 23:32:36'),
(13, 'Akash Chakraborty Nirjhor', 'Associate member', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'adminAsset/teams/2024-03-09_05-43-13.jpg', NULL, 'https://www.facebook.com/akashchakraborty.nirjhor', NULL, NULL, NULL, NULL, NULL, '2024-03-08 22:50:59', '2024-03-08 23:43:13'),
(14, 'Badhan Sarker', 'Associate member', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'adminAsset/teams/2024-03-09_05-42-57.jpg', NULL, 'https://www.facebook.com/theaterbadhan', NULL, NULL, NULL, NULL, NULL, '2024-03-08 22:52:02', '2024-03-08 23:42:57'),
(15, 'Mousumi Mou', 'Associate member', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'adminAsset/teams/2024-03-09_05-42-47.jpg', NULL, 'https://www.facebook.com/profile.php?id=100008273792310', NULL, NULL, NULL, NULL, NULL, '2024-03-08 22:52:40', '2024-03-08 23:42:47'),
(16, 'Porosh Ahmed', 'Associate member', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'adminAsset/teams/2024-03-09_05-42-33.jpg', NULL, 'https://www.facebook.com/PoroshAhmed007', NULL, NULL, NULL, NULL, NULL, '2024-03-08 22:53:28', '2024-03-08 23:42:33'),
(17, 'Shishir Chowdhury Rahul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', 'adminAsset/teams/2024-03-09_05-43-41.jpg', NULL, 'https://www.facebook.com/shishir.chowdhury2', NULL, NULL, NULL, NULL, NULL, '2024-03-08 22:55:35', '2024-03-08 23:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `teams_conditions`
--

CREATE TABLE `teams_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams_conditions`
--

INSERT INTO `teams_conditions` (`id`, `title`, `description`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'drama1', 'fczdfgdbfsb', 'adminAsset/festival/2024-02-25_05-25-24.jpg', 2, 1, '2024-02-24 23:25:24', '2024-02-24 23:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$49iPFz7G9FwoLWoUBcbdoerXW.DCc6zeLaubTnbQCkzsWjYFEqxC2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-29 07:22:01', '2024-01-29 07:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'zcvc', 'http://localhost/prangonemor/public/videos/create', 1, '2024-02-24 10:08:02', '2024-02-24 10:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_image` text DEFAULT NULL,
  `feature_image` text DEFAULT NULL,
  `video_image` text DEFAULT NULL,
  `video_link` text DEFAULT NULL,
  `description_one` longtext DEFAULT NULL,
  `description_two` longtext DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `title`, `title_image`, `feature_image`, `video_image`, `video_link`, `description_one`, `description_two`, `date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Workshops Two', 'adminAsset/workshop/workshop-title-image17100505724.jpg', 'adminAsset/workshop/workshop-feature-image1710050247lokonayokTitle.jpg', 'adminAsset/workshop/workshop-video-image1710050247group1.jpg', 'https://youtu.be/vrM0W3Le6oo', '<h2 class=\"service-detail_title\" style=\"margin-top: 0px; margin-bottom: var(--margin-bottom-15); padding: 0px; border: none; outline: none; line-height: 58px; font-size: var(--font-48); position: relative; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;DM Sans&quot;, sans-serif; color: var(--color-two);\">Workshops Two</h2><p style=\"margin-right: 0px; margin-bottom: var(--margin-bottom-15); margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-size: var(--font-16); color: var(--color-three); line-height: 28px; font-family: &quot;DM Sans&quot;, sans-serif;\">There are many variations of passages of lorem ipsum is simply free text available in the market, but the majority time you put aside to be in our office. Lorem ipsum dolor sit amet, consectet Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p><p style=\"margin-right: 0px; margin-bottom: var(--margin-bottom-15); margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-size: var(--font-16); color: var(--color-three); line-height: 28px; font-family: &quot;DM Sans&quot;, sans-serif;\">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur iste natus error sit voluptatem accusantium doloremque laudantium.</p>', '<h2 class=\"service-detail_title\" style=\"margin-top: 0px; margin-bottom: var(--margin-bottom-15); padding: 0px; border: none; outline: none; line-height: 58px; font-size: var(--font-48); position: relative; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;DM Sans&quot;, sans-serif; color: var(--color-two);\">Workshops&nbsp;&nbsp;</h2><p style=\"margin-right: 0px; margin-bottom: var(--margin-bottom-15); margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-size: var(--font-16); color: var(--color-three); line-height: 28px; font-family: &quot;DM Sans&quot;, sans-serif;\">There are many variations of passages of lorem ipsum is simply free text available in the market, but the majority time you put aside to be in our office. Lorem ipsum dolor sit amet, consectet Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p><p style=\"margin-right: 0px; margin-bottom: var(--margin-bottom-15); margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; font-size: var(--font-16); color: var(--color-three); line-height: 28px; font-family: &quot;DM Sans&quot;, sans-serif;\">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur iste natus error sit voluptatem accusantium doloremque laudantium.</p>', '2024-03-10', 1, '2024-03-09 23:57:27', '2024-03-10 00:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `work_prangonmors`
--

CREATE TABLE `work_prangonmors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_prangonmors`
--

INSERT INTO `work_prangonmors` (`id`, `title`, `image`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Why my satelite is better than', 'adminAsset/workPrangonmore/workPrangonmore-image17103186072.jpg', '<h4><a href=\"http://localhost:8084/prangonemor/public/work-with-prangonemor\"><strong>Why my satelite is &nbsp;</strong></a></h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>', '2024-03-23', '2024-03-13 02:29:28', '2024-03-13 02:30:07'),
(2, 'Why my satelite is better than', 'adminAsset/workPrangonmore/workPrangonmore-image17103190194.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>', '2024-04-03', '2024-03-13 02:36:59', '2024-03-13 02:36:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dramas`
--
ALTER TABLE `dramas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drama_prices`
--
ALTER TABLE `drama_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_prangonmors`
--
ALTER TABLE `work_prangonmors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dramas`
--
ALTER TABLE `dramas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drama_prices`
--
ALTER TABLE `drama_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `festivals`
--
ALTER TABLE `festivals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_prangonmors`
--
ALTER TABLE `work_prangonmors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
