-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2015 at 06:03 PM
-- Server version: 5.5.40-36.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donbarry_testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_text` text NOT NULL,
  `article_imagename` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_text`, `article_imagename`) VALUES
(1, 'IBB returns from Germany after 2 months', 'Former military Head of State, General Ibrahim Badamasi Babangida (IBB), who left Nigeria on Sept. 6, arrived the country yesterday November 1st after undergoing surgery in a German hospital.\r\n\r\nIBB arrived at the Minna airport by 2.50 pm in a chartered flight and was received by Mohammed and Halima, his children, as well as some government officials, his close friends and associates. He was dressed in blue kaftan with gray stripes, left the airport for his hilltop house, Minna in a BMW car and arrived at 3:15 pm into the waiting hands of four of his grand children', 'http://4.bp.blogspot.com/-guB3Mw4LNb8/VFaYvFp-m5I/AAAAAAADzy8/aJ7qSbTKut0/s1600/unnamed.jpg'),
(2, 'Study at DMU in January 2015.....Enjoy Cool Discount', 'De Montfort University is one of UK''s most respected and modern Universities with a reputation for academic excellence and superb student experience. With over 27000 student population from over 100 nationalities, you can enjoy a truly rewarding international experience on our beautiful campus located in the highly multi-cultural city of Leicester which is just an  hour away from central London.', 'http://3.bp.blogspot.com/-CMrKauQ1v6o/VFaUI9FE92I/AAAAAAADzyw/0icsXeJnVDw/s1600/0.png'),
(3, 'Toolz looking hot in a red number...', 'The figure on Toolz though...my goodness!', 'http://2.bp.blogspot.com/-YqF4Kz2pB1I/VFYeX8Bip-I/AAAAAAADzwc/na0Xc2UDGyI/s1600/1.png'),
(4, 'Boko Haram reportedly kills scores of Christians in Adamawa today', 'According to Sahara Reporters, Boko Haram men launched a fresh attack on Sabon Gari, a village in Adamawa state which is predominantly inhabited by Christians, in the early hours of today.\r\n\r\nResidents of the village, which is on the border of Borno and Adamawa state, said several members of their community were slaughtered by the sect men as they were heading to church this morning.', 'http://4.bp.blogspot.com/-Fk-lk74IjRs/VFY6rgzD5JI/AAAAAAADzw4/xCpGEw0QmZw/s1600/tahmasebi20130305214840277.jpg'),
(5, 'You will never guess which country Googles gay porn the most...', 'This has got nothing to do with me o...lol. I will post it exactly as I saw it on Pink News. So we dey Google gay porn like this for Nigeria? Choi! Read below...\r\nA surprising country has topped Google’s rankings for searching for pictures of gay sex. Anti-gay laws and strong social stigma appear to be doing nothing to abate the curiosity of everyday people – with Kenya’s searches for gay sex outranking those of all Western countries.\r\nKenya tops the Google trends rankings for both ‘gay sex pics‘ and ‘gay porn pics'', with an extraordinarily high search index.\r\nSouth Africa came second, followed by Nigeria and Pakistan, with the US & UK ranking a distant seventh and eighth.', 'http://2.bp.blogspot.com/-LPZpuT8iZyk/VFX8a1MpVYI/AAAAAAADzm8/qhVY-c8_qXE/s1600/2.png'),
(6, 'Government declares curfew in Adamawa state', 'The Adamawa State government today Nov. 1st declared curfew in every part of the state following the increase in insurgency activities in some parts of the state, especially in Mubi. \r\n\r\nAccording to a statement released today, the curfew is now from 5am to 9pm in every part of the state, and every resident has been advised to comply strictly with the directive.', 'http://4.bp.blogspot.com/-_MhKtkx5TTs/VFVkuN1EFWI/AAAAAAADzdE/NQ46RfxQxVg/s1600/Africa-troop-deployment.jpg'),
(7, 'Contract Work', 'Three contractors were visiting a tourist attraction on the same day. One was from Nigeria, another from Germany, and the third from France. \r\n\r\nAt the end of the tour, the guard asked them what they did for a living. \r\n\r\nWhen they all replied that they were contractors, the guard said, "Hey we need one of the rear fences redone. Why don''t you guys take a look at it & give me a bid?" So, to the back fence they all went to check it out. \r\n\r\nFirst to step up was the German contractor. He took out his tape measure and pencil, did some measuring and said, "Well I figure the job will run about $900. $400 for materials, $400 for my crew, and $100 profit for me." \r\n\r\nNext was the French contractor. He also took out his tape measure and pencil, did some quick figuring and said, "Looks like I can do this job for $700. $300 for materials, $300 for my crew, and $100 profit for me." \r\n\r\nWithout so much as moving, the Nigerian contractor said, "$2,700." \r\n\r\nThe guard, incredulous, looked at him and said, "You didn''t even measure like the other guys! How did you come up with such a high figure?" \r\n\r\n"Easy," he said. "$1,000 for you, $1,000 for me and we hire the guy from France."', 'http://www.laffportal.com/images/logo.png'),
(8, 'No Payment', 'An American priest walked into a barber shop in Washington, D.C. After he got his haircut, he asked how much it would be. The barber said, "No charge. I consider it a service to the Lord." \r\n\r\nThe next morning, the barber came to work and there were 12 prayer books and a thank you note from the priest in front of the door. \r\n\r\nLater that day, a British police officer on vacation came in and got his hair cut. He then asked how much it was. The barber said, "No charge. I consider it a service to the community." \r\n\r\nThe next morning, he came to work and there were a dozen donuts and a thank you note from the police officer. \r\n\r\nThen, a Nigerian Businessman came in and got a haircut. When he was done he asked how much it was. The barber said, "If you are really a Nigerian then you don''t have to pay since you are from the same country as Akeem Olajuwon the basketballer." \r\n\r\nThe next morning, the barber came to work and there were 12 Nigerians in front of his door waiting for a haircut!!!', 'http://www.laffportal.com/images/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `item_id`, `item_type`, `comment`, `username`) VALUES
(1, 2, 'video', 'undefined', 'username'),
(2, 2, 'video', 'sfd', 'username'),
(3, 2, 'video', 'undefined', 'username'),
(4, 2, 'video', 'undefined', 'username'),
(5, 2, 'video', '', 'username');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `like_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `item_id`, `item_type`, `username`) VALUES
(1, 2, 'article', 'uchman'),
(2, 2, '', 'donbarry_testdb'),
(3, 3, '', 'username'),
(4, 3, '', 'username'),
(5, 3, '', 'username'),
(6, 2, 'video', 'username'),
(7, 2, 'video', 'username'),
(8, 2, 'video', 'username'),
(9, 2, 'video', 'username'),
(10, 3, 'video', 'username'),
(11, 3, 'video', 'username'),
(12, 3, 'video', 'username'),
(13, 2, 'article', 'username'),
(14, 2, 'article', 'username'),
(15, 2, 'article', 'username'),
(16, 2, 'article', 'username'),
(17, 2, 'article', 'username'),
(18, 1, 'video', 'barryajokubi@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `comedian` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `vnum` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_name`, `comedian`, `video_url`, `kind`, `vnum`) VALUES
(1, 'Gandoki Tears It Down At Glo Lafta Fest', 'Gandoki', 'http://player.vimeo.com/video/84657454', 'vimeo', '84657454'),
(2, 'Wrecking Ball Remix', 'Naija Boyz', 'http://player.vimeo.com/video/80951691', 'vimeo', '80951691'),
(3, 'Acapella Performing at AY LIVE 2014', 'Acapella', 'http://player.vimeo.com/video/96773194', 'vimeo', '96773194'),
(4, 'Philo In Miami', 'AfricanComedians', 'http://player.vimeo.com/video/96738229', 'vimeo', '96738229'),
(5, 'Basketmouths Girlfriend Exposed', 'Basketmouth', 'http://player.vimeo.com/video/96773196', 'vimeo', '96773196'),
(6, 'African Halloween', 'Wowo Boyz', 'http://player.vimeo.com/video/78892086', 'vimeo', '78892086'),
(7, 'U Sabi Pidgin? What is Nyash Episode 1', 'Wowo Boyz', 'http://player.vimeo.com/video/79005970', 'vimeo', '79005970'),
(8, '"Man Of Fire" Stand Up in London', 'Bovi', 'http://player.vimeo.com/video/94107476', 'vimeo', '94107476'),
(9, 'Take Banana Remix', 'EmmaOhMyGod', 'http://player.vimeo.com/video/93665897', 'vimeo', '93665897'),
(10, 'How to Punish a Maga', 'Laffportal', 'http://player.vimeo.com/video/94120184', 'vimeo', '94120184'),
(11, 'Gateman and HouseGirl', 'AY & Oshbebe', 'http://player.vimeo.com/video/94100008', 'vimeo', '94100008'),
(12, 'Hilarious Ebola Awareness Video', 'Wowo Boyz and Buchi', 'http://player.vimeo.com/video/102801705', 'vimeo', '102801705'),
(13, 'Ajebo at AY LIVE 2014', 'Ajebo', 'http://player.vimeo.com/video/96773197', 'vimeo', '96773197'),
(14, 'Klint D Drunk Funniest Moments', 'Klint D Drunk', 'http://player.vimeo.com/video/92321298', 'vimeo', '92321298');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
