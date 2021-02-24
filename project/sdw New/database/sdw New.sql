-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2014 at 03:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */ 
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sdw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `UName` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UName`, `Password`) VALUES
('Ruminder Kaur', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CatID` int(11) NOT NULL AUTO_INCREMENT,
  `CatName` varchar(50) NOT NULL,
  `OSType` varchar(10) NOT NULL,
  PRIMARY KEY (`CatID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CatID`, `CatName`, `OSType`) VALUES
(1, 'Browser', 'Windows'),
(2, 'Anti-Malware', 'Windows'),
(3, 'System Tuning', 'Windows'),
(4, 'Photo & Image', 'Windows'),
(5, 'File sharing', 'Windows'),
(6, 'Security', 'Windows'),
(7, 'Compression', 'Windows'),
(8, 'Multimedia', 'Windows'),
(9, 'Messaging', 'Windows'),
(10, 'Office & News', 'Windows'),
(11, 'Networking', 'Windows'),
(12, 'Desktop', 'Windows'),
(13, 'File Transfer', 'Windows'),
(14, 'Developer', 'Windows'),
(15, 'Drivers', 'Windows'),
(16, 'CD & DVD', 'Windows'),
(17, 'Games', 'Android'),
(18, 'Communication', 'Android'),
(19, 'Education', 'Android'),
(20, 'Entertainment', 'Android'),
(21, 'Health & Fitness', 'Android'),
(22, 'Media & Video', 'Android'),
(23, 'Music & Audio', 'Android'),
(24, 'Photography', 'Android'),
(25, 'Productivity', 'Android'),
(26, 'Shopping', 'Android'),
(27, 'Social', 'Android'),
(28, 'Tools', 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `MsgID` int(11) NOT NULL AUTO_INCREMENT,
  `UName` varchar(40) NOT NULL,
  `UEmail` varchar(50) NOT NULL,
  `MsgDate` date NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`MsgID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`MsgID`, `UName`, `UEmail`, `MsgDate`, `Message`) VALUES
(19, 'preet dhillon', 'preetdhillon31@gmail.com', '2014-11-16', 'Please!!!! send me new version of Google Chrome.. '),
(21, 'harmanpreet', 'waraichharman555@gmail.com', '2014-11-05', 'current date will be automatically generate...'),
(22, 'ruminderkaur', 'ruminder222@gmail.com', '2014-11-09', 'Software of your site may take alot time for Downloading!!!!!'),
(23, 'ruminderkaur', 'riyasharma1ab@gmail.com', '2014-11-10', 'Your all S/W are very attractives......'),
(24, 'Rahat Ali Khan', 'rahatkhanby@gmail.com', '2014-11-16', 'Good Working!!!!  I am Satisfied from your website...');

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE IF NOT EXISTS `softwares` (
  `SWID` int(20) NOT NULL AUTO_INCREMENT,
  `SWName` varchar(50) NOT NULL,
  `OSType` varchar(10) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(700) NOT NULL,
  `IconPath` varchar(200) NOT NULL,
  `SetupPath` varchar(200) NOT NULL,
  `Downloads` int(11) NOT NULL,
  PRIMARY KEY (`SWID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`SWID`, `SWName`, `OSType`, `Category`, `Date`, `Description`, `IconPath`, `SetupPath`, `Downloads`) VALUES
(3, 'Google Chrome', 'windows', 'Browser', '2014-11-14', 'Watch How To Browse Privately In Google Chrome\r\nHow To Browse Privately In Google Chrome\r\nGoogleâ€™s game changing browser Chrome combines sophisticated technology with a simple UI, to create a faster, safer and easier browsing experience. Launched in 2008, Google Chrome quickly dominated the browser market to become the most used browser globally within 4 years of its public release. Googleâ€™s rapid and continuous development cycle ensures the browser continues to compete with the other most popular and advanced web browsers available.', 'windows/Browser/Google Chrome/Google Chrome.png', 'windows/Browser/Google Chrome/Google Chrome.exe', 5),
(6, 'Avast Free Antivirus ', 'windows', 'Anti-Malware', '2014-11-14', 'This Software is used for secure the programs from errors and faults..............', 'windows/Anti-Malware/Avast Free Antivirus /Avast Free Antivirus .png', 'windows/Anti-Malware/Avast Free Antivirus /Avast Free Antivirus .exe', 1),
(14, 'C CLeaner', 'windows', 'System Tuning', '2014-11-16', 'Probably the most popular freeware cleaner globally with over 1 billion downloads since its launch in 2003. Piriformâ€™s CCleaner is a quick and easy to use program which makes your computer faster, more secure and more reliable. CCleaner removes cookies, temporary files and various other unused data that clogs up your operating system. This frees up valuable hard disk space allowing your system to run faster. Removing this data also protects your anonymity meaning you can browse online more securely. The built in Registry Cleaner fixes errors and broken settings to make your computer more stable. The simple, intuitive UI and rapid but powerful cleaning make CCleaner a favourite among novice', 'windows/System Tuning/C CLeaner/C CLeaner.png', 'windows/System Tuning/C CLeaner/C CLeaner.exe', 0),
(15, 'Paint.NET', 'windows', 'Photo & Image', '2014-11-16', 'Paint.NET is an image and photo manipulation application. Every feature and user interface element was designed to be immediately intuitive and quickly learnable without assistance. In order to handle multiple images easily, Paint.NET uses a tabbed document interface. The tabs display a live thumbnail of the image instead of a text description. This makes navigation very simple and fast.\r\nUsually only found on expensive or complicated professional software, layers form the basis for a rich image composition experience. You may think of them as a stack of transparency slides that, when viewed together at the same time, form one image.\r\nMany special effects are included for enhancing and perfe', 'windows/Photo & Image/Paint.NET/Paint.NET.png', 'windows/Photo & Image/Paint.NET/Paint.NET.exe', 0),
(16, 'uTorrent', 'windows', 'File sharing', '2014-11-16', 'The features which are present in other BitTorrent clients are here in ÂµTorrent, including scheduling, bandwidth prioritization, RSS auto-downloading and compatibility with BitComet-Mainline DHT. ÂµTorrent also supports peer exchange and the Protocol Encryption joint specification (compatible with Vuze / Azureus 2.4.0.0 and above and BitComet 0.63 and above).\r\nUnlike many other torrent clients available, ÂµTorrent does not eat away at valuable system resources; in fact, the program typically runs on approx. 6MB of memory. ÂµTorrent is contained within a single executable file, smaller than 1 MB.\r\n', 'windows/File sharing/uTorrent/uTorrent.png', 'windows/File sharing/uTorrent/uTorrent.exe', 1),
(17, 'VLC Media Player', 'windows', 'Multimedia', '2014-11-16', 'VLC Media Player is the most popular and robust multi format, free media player available. The open source media player was publically released in 2001 by non-profit organization VideoLAN Project. VLC Media Player quickly became very popular thanks to its versatile multi-format playback capabilities. It was aided by compatibility and codec issues which rendered competitor media players like QuickTime, Windows and Real Media Player useless to many popular video and music file formats. The easy, basic UI and huge array of customization options have enforced VLC Media Playerâ€™s position at the top of the free media players.', 'windows/Multimedia/VLC Media Player/VLC Media Player.png', 'windows/Multimedia/VLC Media Player/VLC Media Player.exe', 2),
(18, '360 Internet Security', 'windows', 'Security', '2014-11-16', 'QIHUâ€™s 360 Internet Security is a quality, free antivirus product.\r\n\r\nThe software carries out essential functions with ease and has a clean user interface that is presented in pastel coloured environment.\r\n\r\n360 Internet Security installs quickly and is a relatively light program, that will not clog up your system.\r\n\r\n360 Internet Security uses cutting edge antivirus protection, which is powered by 360 Heuristic Engine, 360 Cloud Engine and Bit-Defender. With this kind of power behind the software, you can be sure that your PC is secure with both Realtime Protection and a Proactive Defense.', 'windows/Security/360 Internet Security/360 Internet Security.png', 'windows/Security/360 Internet Security/360 Internet Security.exe', 0),
(19, 'Dhoom', 'android', 'Games', '2014-11-16', 'THE SEQUEL TO THE OFFICIAL GAME FOR DHOOM:3 - THE BLOCKBUSTER OF 2013, BY YASH RAJ FILMS PVT. LTD. IS HERE!\r\nAfter a thrilling high speed bike race through the streets of Chicago in Dhoom:3 The Game, that saw over 12+ Million Downloads Worldwide, the chase continues on the Chicago river in Dhoom:3 Jet Speed, the second game in the series for Dhoom fans!\r\nRide a high power Aqua Jet through the Chicago river as Dhoom:3 movie anti-hero Sahir, as you evade ACP Jai Dixit, Ali and the ever determined Cops. Watch out for traffic and obstacles that litter the gorgeous water on the River and kick it up a notch with powerful Power-Ups to gain an edge over your pursuers. With simple Tilt/Tap controls a', 'android/Games/Dhoom/Dhoom.webp', 'android/Games/Dhoom/Dhoom.apk', 1),
(20, 'Whatsapp', 'android', 'Communication', '2014-11-16', 'WhatsApp Messenger is a smartphone messenger available for Android and other smartphones. WhatsApp uses your 3G or WiFi (when available) to message with friends and family. Switch from SMS to WhatsApp to send and receive messages, pictures, audio notes, and video messages. First year FREE! ($0.99 USD/year after)\r\nWHY USE WHATSAPP:\r\nâ˜… NO HIDDEN COST: Once you and your friends download the application, you can use it to chat as much as you want. Send a million messages a day to your friends for free! WhatsApp uses your Internet connection: 3G/EDGE or Wi-Fi when available.\r\nâ˜… MULTIMEDIA: Send Video, Images, and Voice notes to your friends and contacts.\r\nâ˜… GROUP CHAT: Enjoy group conversat', 'android/Communication/Whatsapp/Whatsapp.webp', 'android/Communication/Whatsapp/Whatsapp.apk', 4),
(21, 'English Conversation Practice', 'android', 'Education', '2014-11-16', '"English Conversation Practice" is a helpful app to practice english conversation for everyone. With more than 2000 english conversations categorized in 2 levels: Basic English and Advanced English Conversation, you can strengthen your english speaking and listening skills perfectly. You are also able to bookmark lessons you like to learn in the future.\r\nFeatures:\r\n- 2 listening modes (Config in Settings menu):\r\n+ Audio Streaming: no need to download audio file before listening\r\n+ Offline mode: you must download audio file first, and listen to it offline in the future.\r\n- Search conversations by name\r\n- Bookmark the conversations you like and manage them easily.\r\n', 'android/Education/English Conversation Practice/English Conversation Practice.webp', 'android/Education/English Conversation Practice/English Conversation Practice.apk', 0),
(22, 'Google Fit', 'android', 'Health & Fitness', '2014-11-16', 'Make a healthy change in your life by becoming more active, aware and motivated.\r\nEffortlessly track your activity:\r\nâ€¢ Just carry your phone and get access to your walking, running and cycling activity.\r\nReach your fitness goals:\r\nâ€¢ Set goals based on either duration or steps and see your progress throughout the day.\r\nâ€¢ Receive performance-based recommendations for activity goals.\r\nA comprehensive view of your fitness:\r\nâ€¢ Connect third party devices and apps to Fit and weâ€™ll show you all of your fitness data in one place.\r\nAvailable everywhere:\r\nâ€¢ Compatible with all Android Wear devices.\r\nâ€¢ Also access Google Fit on the web at http://www.google.com/fit and on your tablet.', 'android/Health & Fitness/Google Fit/Google Fit.webp', 'android/Health & Fitness/Google Fit/Google Fit.apk', 1),
(23, 'Video Tube (YouTube Player)', 'android', 'Media & Video', '2014-11-16', 'VideoTube is amazing YouTube utility which provides you with an advanced feature packed YouTube video player with a lot of functionality which makes watching YouTube Video a LOT MORE FUN !!! Application comes loaded with following features.\r\n\r\nPLAYER FEATURES\r\nVideoTube comes loaded with an advanced video player with features like\r\n1) Shuffle/Video Repeat/ Playlist Repeat. \r\n2) Background Play \r\n3) Tempo control \r\n4) AB Loop \r\n5) Video position bookmarks \r\n6) Orientation Lock. ', 'android/Media & Video/Video Tube (YouTube Player)/Video Tube (YouTube Player).webp', 'android/Media & Video/Video Tube (YouTube Player)/Video Tube (YouTube Player).apk', 3),
(24, 'Quikr Free Classifieds', 'android', 'Shopping', '2014-11-16', 'Quikr is a Social Classifieds Networking Platform for buying or selling used cars, real estate, furniture, flats, mobiles and all the electronics goods. Our services category helps you to find a taxi or cab for sure. You can also find interesting restaurants, food joints, cafes and dine out options to enjoy with your family and friends just by typing "Restaurants" in the search box. Our platform has also helped people find their perfect jobs or hire the right candidates.\r\nIn-app sms/email messaging along with in-app calling option makes it super easy for the buyers and sellers to connect to each other in real-time. We also provide social sharing options via Whatsapp, Facebook, Twitter which ', 'android/Shopping/Quikr Free Classifieds/Quikr Free Classifieds.webp', 'android/Shopping/Quikr Free Classifieds/Quikr Free Classifieds.apk', 0),
(25, 'Flipkart', 'android', 'Shopping', '2014-11-16', 'Description\r\nShop the Online Megastore with the free Flipkart Android app. Choose from the massive selection of original products in Fashion, Electronics, Books, Mobiles and other categories. Get timely alerts on great deals with substantial discounts, every day!\r\n_____________________________________\r\nIndiaâ€™s No 1 Online Shopping App\r\nâ€¢ Happy Shopping: No Hassle Returns,100% Buyer Protection\r\nâ€¢ Choice of Payments: Cash on Delivery, Credit/Debit Card, EMI, NetBanking, PayZippy\r\nâ€¢ Smarter Search: Look up products, categories or brands using text, voice or by barcode\r\nâ€¢ Explore Your Way: Quickly switch between List, Grid and Full Screen views\r\nâ€¢ Pinpoint Products: Find what you wan', 'android/Shopping/Flipkart/Flipkart.webp', 'android/Shopping/Flipkart/Flipkart.apk', 1),
(28, 'Facebook', 'android', 'Social', '2014-11-16', 'Keeping up with friends is faster than ever.\r\nâ€¢ See what friends are up to\r\nâ€¢ Share updates, photos and videos\r\nâ€¢ Get notified when friends like and comment on your posts\r\nâ€¢ Text, chat and have group conversations\r\nâ€¢ Play games and use your favorite apps\r\n', 'android/Social/Facebook/Facebook.webp', 'android/Social/Facebook/Facebook.apk', 1),
(29, 'Firefox', 'windows', 'Browser', '2014-11-17', 'Mozilla Firefox is a fast, light and tidy open source web browser. At its public launch in 2004 Mozilla Firefox was the first browser to challenge Microsoft Internet Explorerâ€™s dominance. Since then, Mozilla Firefox has consistently featured in the top 3 most popular browsers globally and this is set to continue thanks to the release of Firefox 30. The key features that have made Mozilla Firefox so popular are the simple and effective UI, browser speed and strong security capabilities. The browser is particularly popular with developers thanks to its open source development and active community of advanced users.', 'windows/Browser/Firefox/Firefox.png', 'windows/Browser/Firefox/Firefox.exe', 0),
(30, 'Recuva', 'windows', 'Compression', '2014-11-17', 'Recuva (pronounced "recover") is a freeware Windows utility to restore files that have been accidentally deleted from your computer. This includes files emptied from the Recycle bin as well as images and other files that have been deleted by user error from digital camera memory cards or MP3 players. It will even bring back files that have been deleted from your iPod, or by bugs, crashes and viruses!', 'windows/Compression/Recuva/Recuva.gif', 'windows/Compression/Recuva/Recuva.exe', 1),
(31, 'Skype', 'windows', 'Messaging', '2014-11-17', 'Skype is the most popular free voice-over IP and instant messaging service globally. It allows users to text, video and voice call over the internet. Users can also call landlines and mobiles at competitive rates using Skype credit, premium accounts and subscriptions. Skype was publically released in 2003 and now accounts for roughly a third of all international calling minutes. Skype uses P2P technology to connect users on a multitude of platforms including desktop, mobile and tablet. The call quality (depending on your internet signal) and additional features like conversation history, conference calling and secure file transfer are excellent. There have been some criticisms over the progr', 'windows/Messaging/Skype/Skype.gif', 'windows/Messaging/Skype/Skype.exe', 0),
(32, 'Pidgin', 'windows', 'Messaging', '2014-11-17', '<pre>\r\nPidgin is a chat program which lets you log in to accounts on multiple chat networks simultaneously. This means that you can be chatting with friends on MSN, talking to a friend on Google Talk, and sitting in a Yahoo chat room all at the same time.\r\n\r\nPidgin runs on Windows, Linux, and other UNIX operating systems.\r\n</pre>', 'windows/Messaging/Pidgin/Pidgin.gif', 'windows/Messaging/Pidgin/Pidgin.exe', 0), 
(33, 'Talking Tom', 'android', 'Entertainment', '2014-11-17', 'Description\r\nBIGGER, BETTER, FUN-NER\r\nThe original Talking Tom Cat is back and better than ever.\r\nWith a No.1 on Google Play in 140 countries and over 390 million downloads, Tom has come a long way!', 'android/Entertainment/Talking Tom/Talking Tom.webp', 'android/Entertainment/Talking Tom/Talking Tom.apk', 0);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 

-- --------------------------------------------------------

--
-- Table structure for table `swrequest`
--

CREATE TABLE IF NOT EXISTS `swrequest` (
  `RequestID` int(11) NOT NULL AUTO_INCREMENT,
  `SWName` varchar(50) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `SWDate` date NOT NULL,
  PRIMARY KEY (`RequestID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `swrequest`
--

INSERT INTO `swrequest` (`RequestID`, `SWName`, `UserName`, `UserEmail`, `SWDate`) VALUES
(12, 'Skype', 'Ruminder Kaur', 'ruminder222@gmail.com', '2014-11-02'),
(13, 'Whatsapp', 'reet', 'riyasharma1ab@gmail.com', '2014-11-05'),
(14, 'Google Chrome', 'REET', 'ruminder222@gmail.com', '2014-11-09'),
(15, 'Multimedia', 'Ruminder Kaur', 'ruminder222@gmail.com', '2014-11-10'),
(17, 'Candy  Crush', 'Gurpreet Kaur ', 'preetdhillon22@gmail.com', '2014-11-16'),
(18, 'Talking Tom Cat 2 Free', 'Saneha Thakur', 'snehathakur333@gmail.com', '2014-11-16'),
(19, 'Quicker', 'Ishmeet Singh', 'ishmeetwelcome**@gmail.com', '2014-11-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
