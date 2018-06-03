-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 08:23 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moodslider`
--

-- --------------------------------------------------------

--
-- Table structure for table `programme_list`
--

CREATE TABLE `programme_list` (
  `programme_id` int(11) NOT NULL,
  `programme_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mood1` int(11) NOT NULL,
  `mood2` int(11) NOT NULL,
  `mood3` int(11) NOT NULL,
  `mood4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme_list`
--

INSERT INTO `programme_list` (`programme_id`, `programme_name`, `image`, `mood1`, `mood2`, `mood3`, `mood4`) VALUES
(1, 'The Princess and the Frog', 'view/pictures/theprincessandthefrog.jpg', 1, 5, 2, 1),
(2, 'The Emperor\'s New Groove', 'view/pictures/theemperorsnewgroove.jpg', 2, 4, 1, 2),
(3, '101 Dalmatian', 'view/pictures/101dalmatian.jpg', 1, 4, 2, 1),
(4, 'Aladdin', 'view/pictures/aladdin.jpg', 2, 5, 2, 2),
(5, 'The Lion King', 'view/pictures/thelionking.jpg', 1, 5, 1, 1),
(6, 'Cruel Intentions', 'view/pictures/cruelintentions.jpg', 4, 2, 4, 4),
(7, 'The Butterfly Effect', 'view/pictures/thebutterflyeffect.jpg', 5, 1, 5, 4),
(8, 'Hannibal Rising', 'view/pictures/hannibalrising.jpg', 5, 1, 5, 5),
(9, 'The Danish Girl', 'view/pictures/thedanishgirl.jpg', 5, 2, 4, 4),
(10, 'The Imitation Game', 'view/pictures/theimitationgame.jpg', 5, 2, 4, 4),
(11, 'The Da Vinci Code', 'view/pictures/thedavincicode.jpg', 4, 2, 5, 4),
(12, 'The Jungle Book', 'view/pictures/thejunglebook.jpg', 4, 2, 4, 4),
(13, 'The Giver', 'view/pictures/thegiver.jpg', 4, 1, 5, 4),
(14, 'The Notebook', 'view/pictures/thenotebook.jpg', 4, 2, 2, 2),
(15, 'Still Alice', 'view/pictures/stillalice.jpg', 5, 1, 5, 4),
(16, 'The Beauty and the Beast', 'view/pictures/thebeautyandthebeast.jpg', 2, 4, 2, 2),
(17, 'The Pursuit of Happiness', 'view/pictures/thepursuitofhappiness.jpg', 1, 5, 4, 1),
(18, 'The Pirates of the Caribbean', 'view/pictures/thepiratesofthecaribbean.jpg', 2, 5, 2, 2),
(19, 'Me before You', 'view/pictures/mebeforeyou.jpg', 0, 0, 0, 0),
(20, 'Inside out', 'view/pictures/insideout.jpg', 1, 4, 2, 1),
(21, 'Harry Potter Septology', 'view/pictures/harrypotterseptology.jpg', 4, 2, 2, 2),
(22, 'The Lord of the Rings Triology', 'view/pictures/thelordoftheringstriology.jpg', 5, 1, 2, 4),
(23, 'The Hobbit Trology', 'view/pictures/thehobbittrology.jpg', 5, 1, 2, 4),
(24, 'Star Wars Collection', 'view/pictures/starwarscollection.jpg', 2, 4, 2, 4),
(25, 'Narnia Collection', 'view/pictures/narniacollection.jpg', 2, 4, 2, 2),
(26, 'Armageddon', 'view/pictures/armageddon.jpg', 5, 1, 5, 5),
(27, 'The Beach', 'view/pictures/thebeach.jpg', 5, 1, 4, 4),
(28, 'Django unchained', 'view/pictures/djangounchained.jpg', 4, 2, 4, 4),
(29, 'The Wolf of Wallstreet', 'view/pictures/thewolfofwallstreet.jpg', 4, 4, 4, 4),
(30, 'Lion', 'view/pictures/lion.jpg', 5, 1, 5, 4),
(31, 'Friends collection', 'view/pictures/friends.jpg', 1, 5, 1, 1),
(32, 'How I met your mother collection', 'view/pictures/howimetyourmother.jpg', 2, 5, 1, 1),
(33, 'The Guardian of the Glaxy', 'view/pictures/theguardianofthegalaxy.jpg', 2, 4, 2, 4),
(34, 'Tarzan', 'view/pictures/tarzan.jpg', 2, 4, 2, 1),
(35, 'Mulan', 'view/pictures/mulan.jpg', 1, 4, 1, 1),
(36, 'Alien Vs. Predator', 'view/pictures/alienvspredator.jpg', 5, 1, 4, 5),
(37, 'Avengers', 'view/pictures/avengers.jpg', 2, 2, 4, 4),
(38, 'The Ring', 'view/pictures/thering.jpg', 5, 1, 5, 5),
(39, 'Spiderman', 'view/pictures/spiderman.jpg', 4, 1, 4, 5),
(40, 'The Dark Knight', 'view/pictures/thedarkknight.jpg', 4, 2, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programme_list`
--
ALTER TABLE `programme_list`
  ADD PRIMARY KEY (`programme_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programme_list`
--
ALTER TABLE `programme_list`
  MODIFY `programme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
