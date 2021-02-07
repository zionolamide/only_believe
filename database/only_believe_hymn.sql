-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 09:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `only_believe_hymn`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(10) UNSIGNED NOT NULL,
  `audio_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `audio_name`) VALUES
(1, 'Hallelujah.mp3'),
(2, 'Amazing Grace.mp3'),
(3, 'AllToJesus.mp3'),
(4, 'Glory To His Name.mp3'),
(5, 'Amazing Grace1.mp3'),
(6, 'As The Deer.mp3'),
(7, 'At_The_Cross.mp3'),
(8, 'Battle Hymn Of The Republic.mp3'),
(9, 'ByAndBy.mp3'),
(10, 'Come And Dine.mp3'),
(11, 'ComeWeThatLoveTheLord.mp3'),
(12, 'Got Any Rivers.mp3'),
(13, 'HaveThineOwnWay.mp3'),
(14, 'He Abides.mp3'),
(15, 'He Touched Me.mp3'),
(16, 'Help Me Hold On.mp3'),
(17, 'How Great Thou Art.mp3'),
(18, 'I Love Him Too Much To Fail Him Now.mp3'),
(19, 'I Surrender All.mp3'),
(20, 'IHaveAnOldOldStory.mp3'),
(21, 'Im Looking For A City.mp3'),
(22, 'ImPressingOn.mp3'),
(23, 'In Moments Like These.mp3'),
(24, 'In That City.mp3'),
(25, 'IWasSinking.mp3'),
(26, 'Just Another Touch, Lord, From You.mp3'),
(27, 'Keep Me Near The Cross.mp3'),
(28, 'Love Of God.mp3'),
(29, 'MarvelousGrace.mp3'),
(30, 'my faith looks up to thee.mp3'),
(31, 'Old Rugged Cross.mp3'),
(32, 'On The Wings Of A Dove.mp3'),
(33, 'onlyBelieve.mp3'),
(34, 'What A Friend.mp3'),
(35, 'Turn Your Eyes Upon Jesus.mp3'),
(36, 'Traditional_Amazing_Grace2.mp3'),
(37, 'To Be Like Jesus.mp3'),
(39, 'ThereIsAName.mp3'),
(40, 'The Windows Of Heaven.mp3'),
(41, 'Take The Name Of Jesus With You.mp3'),
(42, 'Swing Low, Sweet Chariot.mp3'),
(43, 'Sweet Hour Of Prayer.mp3'),
(44, 'standing on the promises.mp3'),
(45, 'Spirit Of The Living God.mp3'),
(46, 'Some Golden Daybreak.mp3'),
(47, 'Softly And Tenderly.mp3'),
(48, 'Shine On Me - To Be Like Jesus.mp3'),
(49, 'Shall We Gather At The River.mp3'),
(50, 'RockOfAges.mp3'),
(51, 'i am thine o lord.mp3'),
(52, 'Reach Out And Touch The Lord.mp3'),
(53, 'OnwardChristianSoldier.mp3'),
(55, 'God Leads Us Along.mp3'),
(56, 'search me, o God.mp3'),
(57, 'Down From His Glory.mp3'),
(58, 'sweet hour of prayer1.mp3'),
(59, 'ThereShallBeShowers.mp3'),
(60, 'BlestBeTheTie-Dennis.mp3'),
(61, 'God Be With Thee.mp3'),
(62, 'Jesus paid it all.mp3'),
(63, 'lord im coming home.mp3'),
(64, 'pass me not.mp3'),
(65, 'jesus keep me near the cross.mp3'),
(66, 'God_be_with_you.mp3'),
(67, 'jesus loves me.mp3'),
(68, 'what a fellowship.mp3'),
(69, 'i surrender.mp3'),
(70, 'Blessed Be the Name - Hallelujah.mp3'),
(71, 'BlessedAssurance.mp3'),
(72, 'close_to_thee.mp3'),
(73, 'God Be With Thee.mp3'),
(74, 'Holy, Holy, Holy.mp3'),
(75, 'i_love_Him_because_He_first_loved_me.mp3'),
(76, 'In Moments Like These.mp3'),
(77, 'where he leads me.mp3'),
(78, 'the_great_physician_now_is_near.mp3'),
(79, 'the_lily_of_the_valley.mp3'),
(80, 'there_is_a_fountain.mp3'),
(81, 'They Come.mid'),
(83, 'WhenISurveytheWondrousCross.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `img`) VALUES
(1, '554737.jpg'),
(2, 'bro.jpg'),
(3, 'contact1.png'),
(4, 'eagle.jpg'),
(5, 'eagle-15165.png'),
(6, 'fb.png'),
(7, 'home.png'),
(8, 'instagram.png'),
(9, 'note.png'),
(11, 'line.png'),
(12, 'guitar.jpg'),
(13, 'tech_mic.jpg'),
(15, 'mail1.png'),
(17, 'instagram.png'),
(18, 'settings.png'),
(19, 'book.png'),
(20, 'computer-icons-business.png'),
(21, 'computer-icons-share.png'),
(22, 'share.png'),
(23, 'user.png'),
(24, 'music.png'),
(25, 'money_bay.png'),
(26, 'money-bag-finance-bank-.png'),
(27, 'phone.png'),
(28, 'musical-note-harp-.png'),
(29, 'music_note1.png'),
(30, 'music_note2.png'),
(31, 'music_note.png'),
(32, 'mail.png'),
(33, 'musical-notes.png'),
(34, 'notes.png'),
(35, 'house.png'),
(36, 'heart-music.jpg'),
(37, 'headphone.jpg'),
(38, 'email.png'),
(39, 'eagle-15185.png'),
(40, 'eagle6.jpg'),
(41, 'contact.png'),
(42, 'cloud.jpg'),
(43, 'bro_branham2.jpg'),
(44, 'bro_branham1.jpg'),
(45, 'bro_branham.jpg'),
(46, 'book.png'),
(47, 'background1.png'),
(48, 'background.png'),
(49, 'andriod.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
