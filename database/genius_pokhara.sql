-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 08:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genius_pokhara`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(191) NOT NULL,
  `introduction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `indentity` longtext,
  `goal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `introduction`, `mission`, `indentity`, `goal`, `created_at`, `updated_at`) VALUES
(1, '<p>Genius Multi Technical Institute (GMTI) Private Limited was established in year 2009 under the company registration act of Nepal and affiliated with Council for Technical Education and Vocational Training (CTEVT). Since its&rsquo; inception GMTI has been continuously engaging in delivering different natures of vocational skills training in various trades throughout the most of development regions of the country; to be Mid-Western, Western and Central Region. GMTI has graduated approximately 4000 youths from different disadvantaged communities and have been able to maintain more than 80% gainful employment among the training graduates after training completion. GMTI has conducted training in more than 15 districts of the mentioned regions. GMTI provides skills training on 27 different technical trades/occupations as per the course curricula prescribed and accredited by the National Skill Testing Board (NSTB) of Council for Technical Education and Vocational Training (CTEVT).</p>\r\n\r\n<p>Further to this GMTI also provides different consultancy services related with the technical education and vocational skills training. They are mainly labour market assessment, development of skills training package and curricula, entrepreneurship development training, general training of trainers training, business skills development and business plan training, life skills and general career counseling training.</p>', '<p>GMTI will be predictable as a prominent Training and Employment Service Provider (T&amp;Esp) delivering with the market and employment oriented vocational skills training for the people living in poverty (PLiP).</p>\r\n\r\n<p>The mission of the GMTI is to offer better employment opportunities for PLiP and we achieve this by adopting following strategies in our works;</p>\r\n\r\n<p>-Conduct need assessment prior to actual training to find the skills person gap in the labour market</p>\r\n\r\n<p>-Develop market and employment oriented skills training package and deliver</p>\r\n\r\n<p>-training with the competent and zeal technical and non-technical team</p>\r\n\r\n<p>-Qualitative training monitoring and support mechanism</p>\r\n\r\n<p>-Career counseling and post training support mechanism followed by integration</p>\r\n\r\n<p>-of training and skills plus module in regular training package</p>\r\n\r\n<p>-Regular post training monitoring and follow up mechanism</p>', 'GMTI will be predictable as a prominent Training and Employment Service Provider (T&Esp) delivering with the market and employment oriented vocational skills training for the people living in poverty (PLiP).\r\nProvide market and employment oriented skills training so that each training graduates are remuneratively engaged in works about which they were trained in and carrying innovation and sophistication in the vocational skills training sectors in Nepal.', 'Provide market and employment oriented skills training so that each training graduates are remuneratively engaged in works about which they were trained in and carrying innovation and sophistication in the vocational skills training sectors in Nepal.', '2018-07-12 11:07:18', '2018-07-12 05:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `application__forms`
--

CREATE TABLE `application__forms` (
  `id` int(191) NOT NULL,
  `user_id` int(191) DEFAULT NULL,
  `f_name` varchar(191) NOT NULL,
  `l_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `applicant_gender` enum('Male','Female','','') DEFAULT NULL,
  `applicant_messages` varchar(1000) DEFAULT NULL,
  `p_address` varchar(191) NOT NULL,
  `district` varchar(191) NOT NULL,
  `location` varchar(191) NOT NULL,
  `mbl_number1` varchar(191) NOT NULL,
  `mbl_number2` varchar(191) NOT NULL,
  `training1` varchar(191) DEFAULT NULL,
  `training2` varchar(191) DEFAULT NULL,
  `p_location` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application__forms`
--

INSERT INTO `application__forms` (`id`, `user_id`, `f_name`, `l_name`, `email`, `applicant_gender`, `applicant_messages`, `p_address`, `district`, `location`, `mbl_number1`, `mbl_number2`, `training1`, `training2`, `p_location`, `created_at`, `updated_at`) VALUES
(2, 0, 'Peter Winter', 'Peter Winter', 'winter@example.com', 'Male', NULL, '1 Main Street', 'Achham', '555-555-0199@example.com', '555-555-0199@example.com', '555-555-0199@example.com', 'Building Electrician', '555-555-0199@example.com', '555-555-0199@example.com', '2018-09-21 02:55:10', '2018-09-21 02:55:10'),
(3, 0, 'Peter Winter', 'Peter Winter', 'winter@example.com', 'Male', NULL, '1 Main Street', 'Achham', '555-555-0199@example.com', '555-555-0199@example.com', '555-555-0199@example.com', 'Building Electrician', '555-555-0199@example.com', '555-555-0199@example.com', '2018-09-21 02:55:45', '2018-09-21 02:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `contact`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'aiken', 'playingbytherules.not@yandex.ru', 'playdoh61@hotmail.com', 'Good man! Please note an important offers offer for you.  Just click on the link below to qualify. http://bit.ly/2JatSpN', '2018-11-11 19:00:32', '2018-11-11 19:00:32'),
(2, 'Catalaunian', 'victoradolfozorrillapoueriet@live.com', 'victorfelipe.santafe@hotmail.com', 'Hello! Look at a good offers offer for you.  Are you in?  http://bit.ly/2J8hOFb', '2018-11-17 03:35:52', '2018-11-17 03:35:52'),
(3, 'Patrickgot', 'tomas.enwall@alphaskolan.se', 'info@badeyatours.com', 'Hey an consequentialpresent \r\n Legal click \r\n \r\n \r\nhttp://bit.ly/2HSXwOI', '2018-12-04 02:18:00', '2018-12-04 02:18:00'),
(4, 'Stephenhal', 'contracts.dekrainsight@dekra.com', 'robert.wingard@aratron.se', 'Hey melodicoffers \r\n To equipped click on the trammels mediocre of  \r\n \r\n \r\nhttp://r1.oracoolum.com?20915', '2018-12-10 09:17:10', '2018-12-10 09:17:10'),
(5, 'Michaelcoabe', 'info@707home.se', 'stefan.nygren@brandfacket.se', 'Hy there,  an numbingcontribute \r\n Are you in?  \r\n \r\n \r\nhttp://bit.ly/2PzdD7i', '2018-12-14 02:02:54', '2018-12-14 02:02:54'),
(6, 'Caldwell', 'victoruchiha@list.ru', 'victoriansatin@aol.com', 'Good man! That is an interesting bonus - the excellent collection of world’s top slots, roulette and blackjack games  To qualify click on the link below. http://bit.ly/2yqqsuT', '2018-12-16 22:29:31', '2018-12-16 22:29:31'),
(7, 'DavidHit', 'r.a.neil@hotmail.co.uk', 'hans.nilsson@dghf.se', 'Hey Opportune hearsay ! an sensationaloffers \r\n Are you in?  \r\n \r\n \r\nhttp://bit.ly/2UxkRfv', '2018-12-17 23:12:13', '2018-12-17 23:12:13'),
(8, 'ThomasFor', 'fdelluc33@gmail.com', 'austeyamusic@gmail.com', 'Hi a thingsforth \r\n Fitting click \r\n \r\n \r\nhttp://bit.ly/2rKL39l', '2018-12-21 21:15:33', '2018-12-21 21:15:33'),
(9, 'AlfredEloto', 'lorem-ipsum@gmail.com', 'lundmarkmarina@gmail.com', 'Hey Impartiality a possessions news ! an engagingoffers \r\n Incorruptible click \r\n \r\n \r\nhttp://bit.ly/2rLOs7P', '2018-12-25 01:22:58', '2018-12-25 01:22:58'),
(10, 'WilliamFuh', 'contact.courantsalternatifs@gmail.com', 'nlresearchfoundation@gmail.com', 'Hy there,  Look what we arrange against you! a believableoffers \r\n To create unmarried click on the component underneath  \r\n \r\n \r\nhttp://bit.ly/2QQpzH2', '2018-12-28 19:09:55', '2018-12-28 19:09:55'),
(11, 'Rickeyenula', 'radiosolmineur@gmail.com', 'brickcraftdevelopments@gmail.com', 'Hey Look what we gulp down hold pro you! a angelicgive-away \r\n Are you in?  \r\n \r\n \r\nhttps://drive.google.com/file/d/1UM75A-AiaTN5VL87kfD8j_RcZOxFST5w/preview', '2019-01-02 13:13:22', '2019-01-02 13:13:22'),
(12, 'Cardium', '19timur95@gmail.com', '19981@mail.ua', 'Ciao! Look at a good bonus - Awesome welcome offer of up to $/€ 1600 free.   http://bit.ly/2J9khPW', '2019-01-03 00:32:58', '2019-01-03 00:32:58'),
(13, 'Scottabsop', 'li.golubova@gmail.com', 'byggapol@gmail.com', 'Look what we have for you! an importantoffering \r\n Are you in?  \r\n \r\nhttps://drive.google.com/file/d/1Qr10jFMlE9nU0UAiJvUR-70e5Awvcr06/preview', '2019-01-07 19:09:20', '2019-01-07 19:09:20'),
(14, 'Jameswaick', 'mumblesyc@gmail.com', 'elizabethwhibley@gmail.com', 'Hey Look what we have for you! an interestingoffers \r\n Are you in?  \r\n \r\nhttps://drive.google.com/file/d/1lDSPl78dgLY61azqoGLfZJjAJ5c-C_TY/preview', '2019-01-12 14:57:51', '2019-01-12 14:57:51'),
(15, 'Edmundmab', 'davison.gillian30@gmail.com', 'splashhottubshireltd@gmail.com', 'Jimmy Castor Lorella   Hi Righteous word ! niceoffering \r\n Just click on the tie up under to meet the requirements    http://bit.ly/2ST741N', '2019-01-16 16:17:49', '2019-01-16 16:17:49'),
(16, 'Jamessuddy', 'paulcartwright2014@gmail.com', 'penni.swinden@gmail.com', 'Hy there,  a magnificentdonation \r\n Are you in?    http://bit.ly/2RZCZAi', '2019-01-21 18:39:01', '2019-01-21 18:39:01'),
(17, 'RobertNab', 'halfordhorticulture123@gmail.com', 'gpldecorators@gmail.com', 'Hi Look what we have due to the fact that you! an excitingoffer \r\n Are you in?  \r\n \r\nhttp://servicerubin.ru', '2019-02-27 07:35:33', '2019-02-27 07:35:33'),
(18, 'LeroyAnats', 'happybirthdayhypnobirthing@gmail.com', 'frintongroomroom@gmail.com', 'Confirm that you are not a robot, and learn how to earn $ 1000 a day \r\nhttp://guide-traveler.ru', '2019-03-01 11:22:29', '2019-03-01 11:22:29'),
(19, 'LesliePiemy', 'asfcreationz@gmail.com', 'emotionalrespite@gmail.com', 'Confirm that you are not a robot, and find out very interesting \r\n \r\nhttp://bit.ly/2EON8IK', '2019-03-06 09:47:39', '2019-03-06 09:47:39'),
(20, 'Williamnit', 'kuba.eomer@op.pl', 'kuba.eomer@op.pl', 'Hello, \r\n \r\nDownload Club Music For DJs, House, Techno, Trance, Dance, Pop... \r\nhttp://0daymusic.org \r\n \r\nBest regards, \r\nWilliam', '2019-03-13 04:27:27', '2019-03-13 04:27:27'),
(21, 'Steveverty', 'usa.bts@gmail.com', 'usa.bts@gmail.com', 'Call back or email me, I\'m interested in your offer \r\n720-791-3210 \r\nBuyMedicalEquipment@gmail.com', '2019-04-15 07:03:54', '2019-04-15 07:03:54'),
(22, 'ShaneMyday', 'michaelWrazY@gmail.com', 'michaelWrazY@gmail.com', 'Hey a pureoffers \r\n To condition click on the together downstairs  \r\n \r\nhttps://drive.google.com/file/d/1hP6r07CfN_wDKQASKQtt3cO5hjQvOr_F/preview', '2019-05-16 17:48:16', '2019-05-16 17:48:16'),
(23, 'geniuspokhara.com', 'micgyhaelWrazY@gmail.com', 'micgyhaelWrazY@gmail.com', 'geniuspokhara.com  Hy there,  Kind news ! an interestingsacrifice \r\n To moderate click on the tie-in below  \r\nhttps://drive.google.com/file/d/1ZIk72ggOpvtzNCIKxe_EwTZZNi6wSg2t/preview', '2019-06-05 06:16:21', '2019-06-05 06:16:21'),
(24, 'geniuspokhara.com', 'micgyhaelWrazY@gmail.com', 'micgyhaelWrazY@gmail.com', 'That is an important  benefit for winning. geniuspokhara.com \r\nhttp://bit.ly/2KHB4wr', '2019-06-14 16:14:32', '2019-06-14 16:14:32');

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
(6, '2018_07_07_143640_create_slides_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nepal_districts`
--

CREATE TABLE `nepal_districts` (
  `id` int(191) NOT NULL,
  `district_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nepal_districts`
--

INSERT INTO `nepal_districts` (`id`, `district_name`) VALUES
(1, 'Achham'),
(2, 'Arghakhanchi'),
(3, 'Baglung'),
(4, 'Baitadi'),
(5, 'Bajhang'),
(6, 'Bajura'),
(7, 'Banke'),
(8, 'Bara'),
(9, 'Bardiya'),
(10, 'Bhaktapur'),
(11, 'Bhojpur'),
(12, 'Chitwan'),
(13, 'Dadeldhura'),
(14, 'Dailekh'),
(15, 'Dang Deukhuri'),
(16, 'Darchula'),
(17, 'Dhading'),
(18, 'Dhankuta'),
(19, 'Dhanusa'),
(20, 'Dolakha'),
(21, 'Dolpa'),
(22, 'Doti'),
(23, 'Gorkha'),
(24, 'Gulmi'),
(25, 'Humla'),
(26, 'Ilam'),
(27, 'Jajarkot'),
(28, 'Jhapa'),
(29, 'Jumla'),
(30, 'Kailali'),
(31, 'Kalikot'),
(32, 'Kanchanpur'),
(33, 'Kapilvastu'),
(34, 'Kaski'),
(35, 'Kathmandu'),
(36, 'Kavrepalanchok'),
(37, 'Khotang'),
(38, 'Lalitpur'),
(39, 'Lamjung'),
(40, 'Mahottari'),
(41, 'Makwanpur'),
(42, 'Manang'),
(43, 'Morang'),
(44, 'Mugu'),
(45, 'Mustang'),
(46, 'Myagdi'),
(47, 'Nawalparasi'),
(48, 'Nuwakot'),
(49, 'Okhaldhunga'),
(50, 'Palpa'),
(51, 'Panchthar'),
(52, 'Parbat'),
(53, 'Pyuthan'),
(54, 'Parsa'),
(55, 'Ramechhap'),
(56, 'Rasuwa'),
(57, 'Rautahat'),
(58, 'Rolpa'),
(59, 'Rukum'),
(60, 'Rupandehi'),
(61, 'Salyan'),
(62, 'Sankhuwasabha'),
(63, 'Saptari'),
(64, 'Sarlahi'),
(65, 'Sindhuli'),
(66, 'Sindhupalchok'),
(67, 'Siraha'),
(68, 'Solukhumbu'),
(69, 'Sunsari'),
(70, 'Surkhet'),
(71, 'Syangja'),
(72, 'Tanahun'),
(73, 'Taplejung'),
(74, 'Terhathum'),
(75, 'Udayapur');

-- --------------------------------------------------------

--
-- Table structure for table `news_feeds`
--

CREATE TABLE `news_feeds` (
  `id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `news_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_photo` varchar(191) CHARACTER SET latin1 NOT NULL,
  `news_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_feeds`
--

INSERT INTO `news_feeds` (`id`, `user_id`, `news_title`, `news_photo`, `news_description`, `created_at`, `updated_at`) VALUES
(2, 1, '‘यो बर्ष जग्गा किन्छु, अर्को बर्ष घर’ - Sushma Chaudhary', '0.87337500 1531383219.JPG', '<p>मेरो नाम सुस्मा चौधरी हो । मेरो पहिल्यै देखि ब्यवसाय गरेर खाने ठूलो सोच थियो । यति धेरै काम मध्ये टेलरिङ् नै किन होला ? मेरो मनमा सधैं यहि प्रश्न आउँथ्यो । तर किन किन मलाई यहि मन पर्यो, मलाई नै थाहा भएन किन यो मन पर्यो । टेलरिङ् नै गर्छु भन्ने सोचेको त थिएँ, त कहाँ सिक्ने ? कसरी शुरु गर्ने ? केही थाहा थिएन ।&nbsp;</p>\r\n\r\n<p>&nbsp;<strong>तालिम एउटै सिकाई फरक&nbsp;</strong></p>\r\n\r\n<p>सिक्न त धेरै ठाउँमा सिकेँ तर आँखा देखाउने काम कसैले गरिदिएन । लेभल वान गर्दाखेरी धेरै ठाउँमा पैसा फालेँ । तर कसैले राम्रोसँग सिकाएन । पैसा मात्रै गयो । कसरी गर्ने होला भन्ने सोच्दा सोच्दै जिनीयस मल्टि टेक्निकल ईन्ष्टिच्युटले लेवल टु को तालिम दिन्छ रे भन्ने थाहा पाएँ, त्यहाँ गएँ । फर्म भरें नाम निस्क्यो ।&nbsp;</p>\r\n\r\n<p>तीन महिना तालिम गरेँ । त्यसपछि म त पर्फेक्ट भईहालेँ । हामीलाई सिकाउने सर म्याम एकदमै राम्रा । बुझाई बुझाई सिकाईदिने । उहाँहरुले छलकपट केही गर्नु भएन । त्यहाँ सिकेपछि मात्रै मैले पसल गर्न सक्ने हिम्मत बटुलें । पहिला पनि सिकेकै हो तर घरै बस्थे अहिले त पसल खोलेर बस्न सक्ने भएँ ।&nbsp;</p>\r\n\r\n<p>यस्ता संस्थाहरुले दिने तालिममा सिक्नु र घर गाउँमा सिक्नुका विच थुपै्र फरक हुँदो रैछ । पहिला सिकेको त पैसै मात्रै फालेको जस्तो लाग्यो । सिक्ने त तरिका हुँदा रैछ । पहिला सिकेको त सिकेको नसिकेकै भयो । सिकाउने कुरा पनि ढंग पुर्याएर र ढंग नपुर्याएर सिकाउने हुँदो रैछ । अव चाँही सबै कुरा गर्न सक्छुु ।&nbsp;</p>\r\n\r\n<p><strong>पसल खोल्ने सोच कसरी आयो ? &nbsp;</strong></p>\r\n\r\n<p>म पनि आफ्नो जातमा गईन । आफ्नो जातमा नगएपछि घरमा फरक नै हुँदो रैछ । त्यसमाथि घरपट्टी पनि आफ्नो जातको ल्याएको भए त अलि अलि दाईजो आउँथ्यो होला भन्ने । म क्षेत्रीकी छोरी चौधरीसँग विहे गरें । उहाँहरुको त थुपै्र दाईजो ल्याउनु पर्ने हुँदो रैछ ।&nbsp;</p>\r\n\r\n<p>मैले केही पनि नलगेको । मागेर विहे गरे पो दाईजो हुने हो । बुढोले मन पराउनु भो । दाईजो पनि के मतलव भयो र भन्ने भयो । तर, बुढो र मेरो मात्रै कुराले भएन । घरमा पनि मायाँ नगर्ने । यस्तोलाई ल्याको न कमाई छ, न दाईजो नै आयो भन्ने सुनिराख्दा दिक्क लाग्थ्यो । घरमा अटाईएन । म अन्त काम गर्न पनि गएँ । सधंै केही न केही गर्न पाए हुन्थ्यो जस्तो लागिरहन्थ्यो । मैले पनि यो घर परिवारको लागि केही गरेर देखाउन पर्छ भन्ने लाग्थ्यो ।&nbsp;</p>\r\n\r\n<p><strong>बदलिएको परिवार !</strong>&nbsp;</p>\r\n\r\n<p>आज भोली त सासु ससुरा आउनु हुन्छ । बस्नुहुन्छ । अली अली खर्च पनि दिएर पठाउँछु । खुसी हुनुहुन्छ । सीपले जीवन नै बदलियो । मेरो बुहारीले प्रगती गरिछ भन्नुहुन्छ । गाउँमा पनि भन्नुहुन्छ रे । अस्ति भर्खरै पनि आउनु भो । हप्ता दिन बसेर जानु भो । &nbsp;</p>\r\n\r\n<p>आफूसँग सीप भएपछि परिवारले हेर्ने समाजले हेर्ने नजर नै फरक हुँदो रैछ । मैले यो पसल खोल्दा झण्डै ३ लाख रुपैंया खर्च गरेँ । अलिकति म सँगै थियो । समूहमा थिएँ । त्यहाँबाट सापटी लिएँ । श्रीमान् सशस्त्रको जागिरे । त्यहाँ पनि तालिम दिने कुरा भयो । तीन महिना तालिम दिएँ । त्यो पैसा पनि भयो । यहि पैसाले पसल खोलेँ ।&nbsp;</p>\r\n\r\n<p>काम गर्न २ जना राखेको छु । पीसको हिसावले पैसा दिन्छु । डिजाईनवाला र सादा भयो भने फरक हुन्छ । ६&ndash;७ हजार महिनामा कमाउनुु हुन्छ उहाँहरुले पनि । मेरो पनि महिनामा ८&ndash;१० हजार कमाई हुन थालेको छ । गलामा सिक्रि लगाउन सक्ने भएँ । बैंकमा खाता पनि खोलेको छु ।&nbsp;</p>\r\n\r\n<p><strong>योजना...</strong></p>\r\n\r\n<p>पसललाई ठूलो बनाउने र आफ्नै कमाईले जग्गा किनेर घर बनाउने सोच छ । आफू बस्नलाई । यहि तरिकाले काम गरेँ भने एक बर्षमा जग्गा किन्छु । अर्को बर्ष घर बनाउँछु ।</p>\r\n\r\n<p>सीप नै हो रैछ ठूलो कुरो । विदेश जानु भन्दा यहिं मेहनेत गर्ने हो भने धेरै हुन्छ । केही न केही सिकौं । नेपालमै गरौँ । मेरो ममी पनि बाहिर हुनुहुन्छ । जाउँ भन्नु हुन्छ म त यहिं गर्ने भन्दिन्छु । विदेशको दुःख मान्छेहरुले देख्दैनन् । यहाँ नेपालीले देख्छन् । काम गर्दा चिन्नेले देख्छन् भनेर लाज मान्नु भएन, काम गरेपछि कमाई त यहिं हुन्छ । &nbsp;</p>\r\n\r\n<p>आफूले पाएको दुःखले होला मलाई हिजोआज मकहाँ सिक्न आउने दिदी बहिनीहरुलाई एकै चोटि आँखा देख्ने गराउँछु भन्ने सोच्छु । उनीहरुलाई पर्फेक्ट बनाउने मेरो ईच्छा छ । त्यहि अनुसार काम गर्दै छु । मैले धेरै ठाउँमा सिकेर पनि मैले केही गर्न सकिन । बरु दुई चार पैसा कमै लिने तर राम्रो सीप दिएर आँखा खोल्दिने गर्छु । राम्रोसँग सिकाईदिने ईच्छा छ मेरो ।&nbsp;</p>\r\n\r\n<p>सीप भएपछि त गरी खाई हाल्छ नी मान्छेले ।&nbsp;</p>\r\n\r\n<p>&ndash;प्रो. दिदी बहिनी टेलर्स, पोखरा ४ गणेश टोल&nbsp;</p>', '2018-07-12 02:28:39', '2018-07-12 02:28:39'),
(3, 1, 'CTEVT/NSTB Skill Test Center', '0.16114300 1544083510.jpg', '<p>Opportunities! Opportunities!! Opportunites!!!</p>', '2018-12-06 02:35:10', '2018-12-06 02:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(191) NOT NULL,
  `project_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `trade_id` int(191) NOT NULL,
  `training_level` varchar(191) NOT NULL,
  `training_duration` varchar(1000) DEFAULT NULL,
  `district_id` int(191) DEFAULT NULL,
  `program_type` varchar(191) DEFAULT NULL,
  `male` varchar(191) DEFAULT NULL,
  `female` varchar(191) NOT NULL,
  `total` varchar(191) DEFAULT NULL,
  `status` enum('completed','ongoing','','') NOT NULL DEFAULT 'ongoing',
  `year` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `project_id`, `user_id`, `trade_id`, `training_level`, `training_duration`, `district_id`, `program_type`, `male`, `female`, `total`, `status`, `year`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 'Level-1', '3 Month', 34, 'Result Based', '44', '-', '44', 'completed', '2012', '2018-12-06 11:33:42', '2018-12-06 06:03:42'),
(2, 1, 1, 14, 'Level-1', '3 Month', 34, 'Result Based', '40', '4', '44', 'completed', '2012', '2018-08-09 03:29:57', '2018-08-09 03:29:57'),
(3, 1, 1, 5, 'Level-1', '3 Month', 34, 'Result Based', '22', '-', '22', 'completed', '2012', '2018-08-09 03:31:21', '2018-08-09 03:31:21'),
(4, 1, 1, 4, 'Level-1', '3 Month', 33, 'Special Women Window', '-', '40', '40', 'completed', '2015', '2018-08-09 03:33:36', '2018-08-09 03:33:36'),
(5, 1, 1, 5, 'Level-1', '3 Month', 33, 'Special Women Window', '-', '40', '40', 'completed', '2012', '2018-08-09 03:35:06', '2018-08-09 03:35:06'),
(6, 1, 1, 4, 'Level-1', '3 Month', 34, 'Special Women Window', '-', '20', '20', 'completed', '2012', '2018-08-09 03:36:06', '2018-08-09 03:36:06'),
(7, 1, 1, 25, 'Level-1', '3 Month', 34, 'Special Women Window', '-', '40', '40', 'completed', '2012', '2018-08-09 03:36:50', '2018-08-09 03:36:50'),
(8, 1, 1, 25, 'Level-1', '3 Month', 72, 'Special Women Window', '-', '40', '40', 'completed', '2012', '2018-08-09 03:37:18', '2018-08-09 03:37:18'),
(9, 1, 1, 5, 'Level-1', '3 Month', 72, 'Special Women Window', '-', '20', '20', 'completed', '2012', '2018-08-09 03:37:56', '2018-08-09 03:37:56'),
(10, 1, 1, 2, 'Level-1', '3 Month', 35, 'Voucher Based', '-', '32', '32', 'completed', '2015', '2018-08-09 03:41:42', '2018-08-09 03:41:42'),
(11, 1, 1, 4, 'Level-1', '3 Month', 35, 'Voucher Based', '32', '10', '42', 'completed', '2015', '2018-08-09 03:44:01', '2018-08-09 03:44:01'),
(12, 1, 1, 5, 'Level-1', '3 Month', 35, 'Voucher Based', '18', '-', '18', 'completed', '2015', '2018-08-09 03:44:49', '2018-08-09 03:44:49'),
(13, 1, 1, 3, 'Level-1', '3 Month', 35, 'Voucher Based', '-', '39', '39', 'completed', '2015', '2018-08-09 03:46:01', '2018-08-09 03:46:01'),
(14, 1, 1, 24, 'Level-1', '3 Month', 35, 'Voucher Based', '18', '2', '20', 'completed', '2015', '2018-08-09 03:47:39', '2018-08-09 03:47:39'),
(15, 1, 1, 4, 'Level-1', '3 Month', 34, 'Result Based', '36', '4', '40', 'completed', '2016', '2018-08-09 03:49:14', '2018-08-09 03:49:14'),
(16, 1, 1, 4, 'Level-1', '3 Month', 23, 'Result Based', '20', '-', '20', 'completed', '2016', '2018-08-09 03:50:08', '2018-08-09 03:50:08'),
(17, 1, 1, 2, 'Level-1', '3 Month', 34, 'Result Based', '40', '-', '40', 'completed', '2016', '2018-08-09 03:50:51', '2018-08-09 03:50:51'),
(18, 1, 1, 5, 'Level-1', '3 Month', 72, 'Result Based', '20', '-', '20', 'completed', '2016', '2018-08-09 03:52:05', '2018-08-09 03:52:05'),
(19, 1, 1, 2, 'Level-1', '3 Month', 35, 'Voucher Based', '-', '40', '40', 'completed', '2016', '2018-08-09 03:53:38', '2018-08-09 03:53:38'),
(20, 1, 1, 18, 'Level-1', '3 Month', 35, 'Voucher Based', '30', '10', '40', 'completed', '2016', '2018-08-09 03:54:28', '2018-08-09 03:54:28'),
(21, 1, 1, 4, 'Level-1', '3 Month', 35, 'Voucher Based', '19', '-', '19', 'completed', '2016', '2018-08-09 03:58:45', '2018-08-09 03:58:45'),
(22, 1, 1, 4, 'Level-1', '3 Month', 10, 'Voucher Based', '15', '5', '20', 'completed', '2016', '2018-08-09 03:59:41', '2018-08-09 03:59:41'),
(23, 1, 1, 24, 'Level-1', '3 Month', 35, 'Voucher Based', '33', '7', '40', 'completed', '2016', '2018-08-09 04:01:02', '2018-08-09 04:01:02'),
(24, 1, 1, 10, 'Level-1', '3 Month', 35, 'Voucher Based', '36', '3', '39', 'completed', '2016', '2018-08-09 04:02:34', '2018-08-09 04:02:34'),
(25, 1, 1, 2, 'Level-1', '3 Month', 35, 'Voucher Based', '-', '70', '70', 'completed', '2018', '2018-12-06 11:42:03', '2018-12-06 06:12:03'),
(26, 1, 1, 3, 'Level-1', '3 Month', 35, 'Voucher Based', '1', '138', '139', 'completed', '2018', '2018-12-06 11:42:00', '2018-12-06 06:12:00'),
(27, 1, 1, 5, 'Level-1', '3 Month', 34, 'Result Based', '20', '-', '20', 'completed', '2018', '2018-12-06 11:41:59', '2018-12-06 06:11:59'),
(28, 1, 1, 5, 'Level-1', '3 Month', 72, 'Result Based', '40', '-', '40', 'completed', '2018', '2018-12-06 11:41:51', '2018-12-06 06:11:51'),
(29, 1, 1, 3, 'Level-1', '3 Month', 34, 'Result Based', '-', '40', '40', 'completed', '2018', '2018-12-06 11:41:47', '2018-12-06 06:11:47'),
(30, 1, 1, 2, 'Level-1', '3 Month', 72, 'Result Based', '-', '40', '40', 'completed', '2018', '2018-12-06 11:41:42', '2018-12-06 06:11:42'),
(31, 1, 1, 2, 'Level-1', '3 Month', 34, 'Result Based', '-', '40', '40', 'completed', '2018', '2018-12-06 11:41:37', '2018-12-06 06:11:37'),
(32, 1, 1, 4, 'Level-1', '3 Month', 34, 'Result Based', '57', '3', '60', 'completed', '2018', '2018-12-06 11:41:34', '2018-12-06 06:11:34'),
(33, 1, 1, 4, 'Level-1', '3 Month', 72, 'Result Based', '58', '2', '60', 'completed', '2018', '2018-12-06 11:41:30', '2018-12-06 06:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(191) NOT NULL,
  `project_name` varchar(191) NOT NULL,
  `project_address` varchar(191) DEFAULT NULL,
  `project_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `project_status` enum('0','1','','') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_address`, `project_description`, `project_status`, `created_at`, `updated_at`) VALUES
(1, 'EVENT Project', 'Buddanagar, Kathmandu', '<p>The Government of Nepal and the International Development Association have entered into the Financing Agreement of the Enhanced Vocational Education and Training Project (EVENT Project) on 30 June, 2011.The Project is being implemented by the four year &ldquo;EVENT Project&rdquo; through a Project Secreteriat (&ldquo;PS&rdquo;)under the Ministry of Education (MOE),the Government of Nepal (GON).The main objective of &ldquo;EVENT Project&rdquo; is to expand the supply of skilled and employable workforce by increasing acess to quality training programs, and by strengthening the technical and vocational education and training systems in Nepal.</p>\r\n\r\n<p>The of &ldquo;EVENT Project&rdquo;is expected to improve access to Technical Education and Vocational Training (TEVT)Programs for disadvantaged youth through targeting and other inclusive processes and pay special attention to lagging regions, poor youths, women, and youths belonging to Dalit, disadvantaged Janjatis and other marginalized communities such as persons with disabilities.</p>\r\n\r\n<p>The Project consists of four components .The four components of the project are :</p>\r\n\r\n<ol>\r\n	<li>Strengthening TEVT Regulatory Activities and Capacity Building</li>\r\n	<li>Strengthening Technical Education</li>\r\n	<li>Support for Short term Training and Recognition of Prior Learning and</li>\r\n	<li>Project Management and Monitoring and Evaluation</li>\r\n</ol>', '1', '2018-11-11 07:03:00', '2018-11-11 01:33:00'),
(2, 'Office Program', 'Amarsingh Chowk', '<p>NA</p>', '1', '2018-07-12 12:40:55', '2018-07-12 06:55:55'),
(3, 'Employment fund', 'Lalitpur, Nepal', '<p>EF is established with the support of SDC and presently being funded jointly by DFID and World Bank. GMTI has worked with EF initially through PTI since beginning of project and provided training and employment support to 2000 youths in 12 districts of central and western region. Since 2010, GMTI has been working as direct partner of the Employment fund and implemented path to prosperity (PtP) and Micro enterprises and job creation packages (MEJC) in Sindhupalchowk and Solukhumbu districts for 2014.&nbsp;</p>', '0', '2018-08-09 08:35:29', '2018-08-09 03:05:29'),
(4, 'Good Neighbors Nepal (GNN)', 'Haaramtari-6, Gorkha', '<p>Good Neighbors Nepal (GNN)- Ashal Chhimeki Nepal is a non-Gorvernment organization, established in 2002 at Kathmandu, Nepal with the aim of transforming the community for the sustainable dvelopment holistically. The major areas of interventions are livelihood, health, sanitation &amp; WASH, education, network building and partnerships, emergency response and advocacy. Good Neighbors Nepal implemented the Livelihood Rehabilitation Program by the partnership of World Vision Internetional (WVI) Nepal.</p>', NULL, '2018-12-05 23:36:02', '2018-12-05 23:36:02'),
(5, 'Enhanced Skills for Sustainable and Rewarding Employment (ENSSURE)', 'Sanothimi, Bhaktapur', '<p>Enhanced Skills for Sustainable and Rewarding Employment (ENSSURE) project, 2016 to 2025, is established under an agreement between the Government of Nepal (GoN) and the Swiss Agency for Development and Cooperation (SDC). Divided into three phases, phase one of the project (January 2016 to December 2019) is implemented by the Council for Technical Education and Vocational Training (CTEVT) with technical assistance from Helvetas Nepal.</p>\r\n\r\n<p>Professional Building Electrician is an NSTB Level 2 course with 1,696 hours which is approximately 10 months in duration and is implemented in 260 working days.&nbsp; The proportion of training in a different location is distributed wisely.&nbsp; It includes i) around 57% institutional based occupational skills training, ii) around 14% occupational health and safety, entrepreneurship development and other soft skills and iii) around 28% On the Job Training.&nbsp;</p>\r\n\r\n<p>The target group is the youths above 16 years old without having prior training experience in the occupation.</p>\r\n\r\n<p>The course curriculum is implemented in the ratio of 20% theoretical and 80% practical sessions.</p>', '1', '2019-02-26 04:46:59', '2019-02-25 23:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` int(191) NOT NULL,
  `sector_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `sector_name`, `created_at`, `updated_at`) VALUES
(1, 'Service', '2018-05-14 09:59:13', '0000-00-00 00:00:00'),
(2, 'Agriculture', '2018-05-14 09:59:39', '0000-00-00 00:00:00'),
(3, 'Automobile', '2018-05-14 09:59:55', '0000-00-00 00:00:00'),
(4, 'Computer', '2018-05-14 10:00:07', '0000-00-00 00:00:00'),
(5, 'Construction', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(6, 'Electrical', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(7, 'Electronics', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(8, 'Forestry', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(9, 'Handicraft', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(10, 'Health', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(11, 'Hospitality Industry', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(12, 'Mechanical', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(13, 'Others', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(14, 'Printing', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(15, 'Renewable Energy', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(16, 'Tailoring/Garment', '2018-05-14 10:03:10', '0000-00-00 00:00:00'),
(25, 'Construction Equipment', '2018-05-15 11:20:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `trade_id` int(11) NOT NULL,
  `training_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `user_id`, `trade_id`, `training_photo`, `training_location`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 1, 39, 'e2e76c07a5386ea109f1e63ef2dde266.jpg', 'Amarsingh Chowk', 2, '2018-07-11 22:39:26', '2018-07-11 22:39:26'),
(2, 1, 31, 'c54c41961820d04cad010256824e0ea1.jpg', 'Rasuwa', 3, '2018-07-11 22:40:44', '2018-07-11 22:40:44'),
(3, 1, 39, '49aa5420b69020b5c1d877e51cb9ee30.jpg', 'Amarsingh Chowk', 2, '2018-07-11 22:41:00', '2018-07-11 22:41:00'),
(4, 2, 3, '1712e9a3b5e220dbc873d43e88d53b52.jpg', 'Boudha, Kathmandu', 1, '2018-07-17 21:41:31', '2018-07-17 21:41:31'),
(5, 2, 2, 'deed2fd6e68e6361d18ee2c79367c247.jpg', 'Makalbari, Jorpati, Kathmandu', 1, '2018-07-17 21:43:07', '2018-07-17 21:43:07'),
(6, 1, 37, 'f97c3c8fc7025b77d0af908a98f14598.jpeg', 'Gorkha', 4, '2018-12-05 23:36:58', '2018-12-05 23:36:58'),
(7, 1, 23, '086f31bec7db286f578ca464dd458ad2.jpeg', 'Gorkha', 4, '2018-12-05 23:39:38', '2018-12-05 23:39:38'),
(9, 1, 23, 'eed9e290d48ee2f9664617645e56795f.jpg', 'Amarsingh Chowk-10, Pokhara, Kaski', 1, '2019-05-30 03:23:02', '2019-05-30 03:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` int(191) NOT NULL,
  `occupation_name` varchar(191) DEFAULT NULL,
  `trade_level` varchar(191) DEFAULT NULL,
  `trade_hour` varchar(191) DEFAULT NULL,
  `sector_id` int(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `occupation_name`, `trade_level`, `trade_hour`, `sector_id`, `created_at`, `updated_at`) VALUES
(1, 'Agriculture Junior Technical Assistant', 'Level-1', '390 Hrs', 2, '2018-05-14 10:04:25', '0000-00-00 00:00:00'),
(2, 'Dress Maker', 'Level-1', '390 Hrs', 16, '2018-05-14 10:05:14', '0000-00-00 00:00:00'),
(3, 'Assistant Beautician', 'Level-1', '390 Hrs', 10, '2018-05-14 10:07:54', '0000-00-00 00:00:00'),
(4, 'Building Electrician', 'Level-1', '390 Hrs', 6, '2018-05-14 10:07:54', '0000-00-00 00:00:00'),
(5, 'Junior Plumber', 'Level-1', '390 Hrs', 5, '2018-05-14 10:07:54', '0000-00-00 00:00:00'),
(6, 'Stone Layer Mason', 'Level-1', '390 Hrs', 5, '2018-05-14 10:07:54', '0000-00-00 00:00:00'),
(7, 'Construction Carpenter', 'Level-1', '390 Hrs', 5, '2018-05-14 10:07:54', '0000-00-00 00:00:00'),
(8, 'Village Animal Health Worker', 'Level-1', '390 Hrs', 2, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(9, 'Motor Cycle Service Mechanic', 'Level-1', '390 Hrs', 3, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(10, 'Junior Computer Hardware Technician', 'Level-1', '390 Hrs', 4, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(11, 'Building Painter', 'Level-1', '390 Hrs', 5, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(12, 'Furniture Maker', 'Level-1', '390 Hrs', 5, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(13, 'Plasterer', 'Level-1', '390 Hrs', 5, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(14, 'Electrical Appliances Repairer', 'Level-1', '390 Hrs', 6, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(15, 'Electrical Motor Repairer', 'Level-1', '390 Hrs', 6, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(16, 'Industrial Electrician', 'Level-1', '390 Hrs', 6, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(17, 'Assistant Waiter', 'Level-1', '390 Hrs', 11, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(18, 'Commis (III)', 'Level-1', '390 Hrs', 11, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(19, 'House Keeping/ Cleaner', 'Level-1', '390 Hrs', 11, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(20, 'Indian Cook', 'Level-1', '390 Hrs', 11, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(21, 'Arc Welder', 'Level-1', '390 Hrs', 12, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(22, 'Refrigeration & Air-condition Junior Mechanic', 'Level-1', '390 Hrs', 12, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(23, 'Hand Embroidery', 'Level-1', '390 Hrs', 16, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(24, 'Mobile Repair Technician', 'Level-1', '390 Hrs', 7, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(25, 'Continental Cook', 'Level-1', '390 Hrs', 11, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(26, 'Telecom Technician', 'Level-1', '390 Hrs', 13, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(27, 'Alumunium Fabricator', 'Level-1', '390 Hrs', 12, '2018-05-15 11:11:37', '0000-00-00 00:00:00'),
(28, 'Offseasonl Vegetable Producer', 'Level-1', '390 Hrs', 2, '2018-05-15 11:16:51', '0000-00-00 00:00:00'),
(29, 'Community Livestock Assistant (CLA)', 'Level-1', '390 Hrs', 2, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(30, 'Community Agriculture Assistant (CAA)', 'Level-1', '390 Hrs', 2, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(31, 'Bricklayer Mason', 'Level-1', '390 Hrs', 5, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(32, 'Security Guard', 'Level-1', '390 Hrs', 1, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(33, 'Construction Worker', 'Level-1', '390 Hrs', 5, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(34, 'Early Childhood Development Facilitator', 'Level-1', '390 Hrs', 10, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(35, 'Junior Poultry Technician', 'Level-1', '390 Hrs', 2, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(36, 'Fashion Designer', 'Level-1', '390 Hrs', 10, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(37, 'Carpet Weaver', 'Level-1', '390 Hrs', 16, '2018-05-15 11:20:18', '0000-00-00 00:00:00'),
(38, 'Assistant Library', 'Level-1', '390 Hrs', 25, '2018-05-15 11:21:14', '0000-00-00 00:00:00'),
(39, 'Office Program', NULL, NULL, NULL, '2018-07-12 04:22:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `training_title` varchar(191) NOT NULL,
  `training_content` varchar(191) DEFAULT NULL,
  `training_duration` varchar(191) DEFAULT NULL,
  `training_cost` varchar(191) DEFAULT NULL,
  `training_banner` varchar(191) DEFAULT NULL,
  `training_level` enum('Level-1','Level-2','Level-3','TSLC','Diploma','Others') DEFAULT 'Others',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `user_id`, `training_title`, `training_content`, `training_duration`, `training_cost`, `training_banner`, `training_level`, `created_at`, `updated_at`) VALUES
(1, 2, 'Building Electrician', 'NA', '3 Month (390 Hrs)', '10000', '0.58402600 1531310655.jpg', 'Level-1', '2018-07-12 08:07:22', '2018-07-11 06:19:15'),
(2, 1, 'Tailoring', 'NA', '3 Month (390 Hrs)', '10000', '0.17941900 1531390556.JPG', 'Level-1', '2018-07-12 04:30:56', '2018-07-12 04:30:56'),
(4, 1, 'Enhanced Vocational Education and Training Second Project (EVENT II)', 'Plumber & Building Electrician', '3 Month', 'Free of Cost', '0.38096900 1558422940.jpg', 'Level-2', '2019-05-21 01:45:40', '2019-05-21 01:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `user_status` enum('0','1','','') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `image`, `user_type`, `user_status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(0, 'Visitor', 'visitor', 'visitor@gmail.com', 'default.jpg', 'user', '0', '$2y$10$x8bkuaYRXDIFFmNAp80Cx.y0u6Khn7k5OlORYhNB1X5JeZUh7YCPC', 'fvLYM36K7C2IXEg2ocOZ0nTeSrt8tLCja0RFjWxFdqjuOW225nENZwHiv7YV', '2018-07-07 21:04:46', '2018-07-07 21:04:46'),
(1, 'Genius Institute', 'gmti', 'admin@gmail.com', 'lhfglh fdufhoisdfhisdhhgdfb .png', 'admin', '1', '$2y$10$paU2vE0q6tUI9zGIkU1/DuF2bJPNe4W2btT6CnkRTwrPnS36j76CK', 'L4jz8zkwcJaEzaocgGcyQIabJc55N7XE4YOhGu62wEI0OGdSSV2ojtjgSxy7', NULL, '2018-07-11 22:26:38'),
(2, 'Ramesh Dahal', 'ramesh', 'youramesh5@gmail.com', 'e36f64cf929fa43cba79ce6c383874e8.1531368574.jpg', 'admin', '0', '$2y$10$tsJ1L1wgykPtn4pN3Hrye.Q/i25nVglYKJZ0ZvPMX8p0PvpNldNHK', 'mzSkCZ71GPPr5q65NdhWciTXM1krD7MhC44m2LRGZ6vaTfqEjd3mlKNRCP67', '2018-07-11 22:21:59', '2018-07-19 01:43:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application__forms`
--
ALTER TABLE `application__forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nepal_districts`
--
ALTER TABLE `nepal_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_feeds`
--
ALTER TABLE `news_feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_name` (`project_name`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sector_name` (`sector_name`),
  ADD KEY `sector_name_2` (`sector_name`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `occupation_name` (`occupation_name`),
  ADD KEY `sector_id` (`sector_id`),
  ADD KEY `occupation_name_2` (`occupation_name`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application__forms`
--
ALTER TABLE `application__forms`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nepal_districts`
--
ALTER TABLE `nepal_districts`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `news_feeds`
--
ALTER TABLE `news_feeds`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
