-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 04:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressID` int(11) NOT NULL,
  `street` varchar(50) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addressID`, `street`, `zipcode`, `city`, `country`) VALUES
(1, 'Bäckerstraße 1', '1030', 'Vienna', 'Austria'),
(2, '61-63 Uxbridge Rd', 'W5 5SA', 'London', 'Great Britain'),
(3, '294 Sand Hill Road', 'TN 37086', 'La Vergne', 'Tennessee'),
(4, '6 Briset St', 'EC1M 5NR', 'London', 'Great Britain'),
(5, 'Avd. Diagonal, 662-664', '08034', 'Barcelona', 'Spain'),
(6, '20 Vauxhall Bridge Rd', 'AB1M 5ZT', 'London', 'Great Britain'),
(7, '50 Victoria Embankment', 'EC4Y 0DZ', 'London', 'Great Britain'),
(8, 'Neue Promenade', '10122', 'Berlin', 'Deutschland'),
(9, 'Neumarkter Str. 28', '81673', 'München', 'Deutschland');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorID` int(11) NOT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorID`, `surname`, `firstname`) VALUES
(1, 'Byrne', 'Rhonda'),
(2, 'Hawks', 'John Twelve'),
(3, 'Taylor', 'Dennis E.'),
(4, 'Hanya', 'Yanagihara'),
(5, 'Bayly', 'Jaime'),
(6, 'Boyle', 'T. C.'),
(7, 'Larsson', 'Stieg'),
(8, 'Carr', 'Allen'),
(9, 'Murnau', 'Friedrich Wilhelm'),
(10, 'Elsberg', 'Marc'),
(11, 'Bass', 'Guy');

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE `medium` (
  `ISBN_EAN` bigint(11) UNSIGNED NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `type` enum('book','cd','dvd','ebook') DEFAULT 'book',
  `publishDate` date DEFAULT NULL,
  `publisherID` int(11) DEFAULT NULL,
  `authorID` int(11) DEFAULT NULL,
  `availability` enum('available','reserved') DEFAULT 'available',
  `genre` enum('Novel','Thriller','Guidebook','Sciene Fiction','Drama','Esoterism','Crime Storie','Manual','Biography') DEFAULT 'Novel',
  `title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`ISBN_EAN`, `image`, `description`, `type`, `publishDate`, `publisherID`, `authorID`, `availability`, `genre`, `title`) VALUES
(2147483647, 'https://assets.thalia.media/img/artikel/f634f744f8e25b62f346e85992c1b2db483023d5-00-00.jpeg', 'In 2006, a groundbreaking feature-length film revealed the great mystery of the universe—The Secret—and, later that year, Rhonda Byrne followed with a book that became a worldwide bestseller.Fragments of a Great Secret have been found in the oral traditions, in literature, in religions and philosophies throughout the centuries. For the first time, all the pieces of The Secret come together in an incredible revelation that will be life-transforming for all who experience it.In this book, you’ll learn how to use The Secret in every aspect of your life—money, health, relationships, happiness, and in every interaction you have in the world. You’ll begin to understand the hidden, untapped power that’s within you, and this revelation can bring joy to every aspect of your life.The Secret contains wisdom from modern-day teachers—men and women who have used it to achieve health, wealth, and happiness. By applying the knowledge of The Secret, they bring to light compelling stories of eradicating disease, acquiring massive wealth, overcoming obstacles, and achieving what many would regard as impossible.', 'book', '2007-04-10', 1, 1, 'available', 'Guidebook', 'The Secret'),
(4006680064994, 'https://assets.thalia.media/img/artikel/191409c93d3e7592019c7a3adfc45e593104520d-00-00.jpeg', 'Nosferatu the Vampyre is a 1979 horror film written and directed by Werner Herzog. Its original German title is Nosferatu: Phantom der Nacht (Nosferatu: Phantom of the Night). The film is set primarily in 19th-century Wismar, Germany and Transylvania, and was conceived as a stylistic remake of F. W. Murnaus 1922 German Dracula adaptation Nosferatu. The picture stars Klaus Kinski as Count Dracula, Isabelle Adjani as Lucy Harker, Bruno Ganz as Jonathan Harker, and French artist-writer Roland Topor as Renfield. There are two different versions of the film, one in which the actors speak English, and one in which they speak German.', 'dvd', '1978-01-07', 9, 9, 'available', '', 'Nosferatu'),
(9780140167164, 'https://assets.thalia.media/img/artikel/7cc87cca065ef3ab291fa16dd767160930e52f04-00-00.jpeg', 'Will Lightbody is a man with a stomach ailment whose only sin is loving his wife, Eleanor, too much. Eleanor is a health nut of the first stripe, and when in 1907 she journeys to Dr. John Harvey Kelloggs infamous Battle Creek Spa to live out the vegetarian ethos, poor Will goes too', 'book', '0200-11-07', 8, 6, 'available', 'Biography', 'The Road to Wellville'),
(9780141956992, 'https://assets.thalia.media/img/artikel/95e0282d8294ac0420676bcf7d702eb56b73eb05-00-00.jpeg', 'Allen Carr has discovered a method of quitting that will enable any smoker to stop, easily, immediately and permanently.\r\nAs the worlds bestselling book on how to stop smoking and with over nine million copies sold worldwide, Allen Carrs Easy Way to Stop Smoking is the one that really works.\r\nTHE unique method:\r\n· No scare tactics\r\n· No weight-gain\r\n· The psychological need to smoke disappears as you read\r\n· Feel great to be a non-smoker\r\nJoin the 25 million people that Allen Carr has helped stop smoking.', 'ebook', '1999-12-07', 8, 8, 'available', 'Guidebook', 'The easy way to stop smoking'),
(9780857054111, 'https://assets.thalia.media/img/artikel/f7c4da747ab875520102afbdc8424f615cf464b5-00-00.jpeg', 'As The Girl Who Kicked the Hornets Nest opens, Lisbeth Salander-the heart and soul of Larssons two previous novels-is under close supervision in the intensive care unit of a provincial Swedish city hospital. And shes fighting for her life in more ways than one: when shes well enough, shell be taken back to Stockholm to stand trial for a triple murder. With the help of her friend, journalist Mikael Blomkvist, she will have to prove her innocence, and identify and denounce the corrupt politicians who have allowed the vulnerable, like herself, to become victims of abuse and violence. And, on her own, she will plot her revenge-against the man who tried to kill her, and the government institutions that very nearly destroyed her life. Once upon a time, she was a victim. Now, Lisbeth Salander is ready to fight back.With the spiky and sassy Lisbeth Salander - punkish wild child, traumatised survivor of the care system, sexual adventurer and computer hacker of genius - Larsson created the most original heroine to emerge in crime fiction for many years Independent', 'book', '2015-06-07', 7, 7, 'available', 'Thriller', 'The Girl Who Kicked the Hornets Nest'),
(9781680680584, 'https://assets.thalia.media/img/artikel/f4b8e248fc7459cb1d14e9de5ae808d0ab736a05-00-00.jpeg', 'The Bobiverse is the story of Robert \"Bob\" Johansson, who, after becoming financially independent by selling his software company, decides to spend some of his money by contracting to have his head cryogenically frozen by CryoEterna Inc. upon his death. The idea is that his head would be preserved until later, when technology permitted a body to be grown and his thawed head attached to it - thus resuming life. The next day he is unexpectedly killed in an automobile accident, and his contract is activated. He wakes up 117 years later and finds that he has been harvested from his frozen disembodied head and installed in a computer matrix as an artificial intelligence. The world has significantly changed.\r\nBob is now the property of Applied Synergetics Inc which is in economic competition with Total Cyber Systems to supply robotic servants to society. The lead scientist charged with bringing Bob online is Dr. Landers. Bobs first task is to communicate with a GUPPI interface to interact with peripheral systems. Dr Landers explains the geopolitical history and begins preparation for Bobs mission: an interplanetary expedition as the first Von Neumann Probe.', 'book', '2017-04-04', 3, 3, 'available', '', 'We are Legion'),
(9783837121001, 'https://assets.thalia.media/img/artikel/7073c4f301424622de3cfaa55ec6ea818be640ca-00-00.jpeg', 'Tomorrow will be too late.\r\nA cold night in Milan, Piero Manzano wants to get home.\r\nThen the traffic lights fail. Manzano is thrown from his Alfa as cars pile up. And not just on this street - every light in the city is dead.\r\nAcross Europe, controllers watch in disbelief as electricity grids collapse.\r\nPlunged into darkness, people are freezing. Food and water supplies dry up. The death toll soars.\r\nFormer hacker and activist Manzano becomes a prime suspect. But he is also the only man capable of finding the real attackers.\r\nCan he bring down a major terrorist network\r\nBefore its too late?', 'cd', '2016-05-01', 10, 10, 'available', 'Thriller', 'Blackout'),
(9788432207907, 'https://assets.thalia.media/img/artikel/519ac75838951db449859c61137147a9672411f5-00-00.jpeg', 'El primer gran éxito de Jaime Bayly, que lo dio a conocer como narrador excepcional y como avanzado de la generación latinoamericana que toma el relevo de los Vargas Llosa y García Márquez.La vida de Joaquín Camilo es una suma de desencuentros y malentendidos: su necesidad de amar y sus deseos homosexuales no encajan en su familia ni en el ambiente conservador, machista y pacato de la clase media. La búsqueda de su lugar en el mundo es una espiral de fracasos, entre ciudades extrañas, afectos quebradizos y dosis de cocaína. Esa suma de batallas perdidas de pronto parece cambiar a su favor cuando comprende que, ante todo, necesita aceptarse a sí mismo, aunque en su ruta, finalmente, algo se pierde.«Hoy no podría escribir esta novela. Pero hace quince años o más no pude dejar de escribirla. Esta era la novela que, para bien o para mal, me sentía urgido, desesperado por escribir. Si algo salva a esta novela, me parece, es que al menos fui fiel a mis demonios literarios, a mis fantasmas y obsesiones, a los temas más o menos sórdidos que azuzaban mi imaginación y hacían impostergable la tarea de volcarlos en una ficción».Jaime Bayly', 'book', '2000-11-12', 5, 5, 'available', 'Drama', 'Dont tell anyone'),
(81400079223467, 'https://assets.thalia.media/img/artikel/e629a446785cb6efcf8859ccebd66d03094bb4f9-00-00.jpeg', 'In London, Maya, a young woman trained to fight by her powerful father, uses the latest technology to elude detection when walking past the thousands of surveillance cameras that watch the city. In New York, a secret shadow organization uses a victims own GPS to hunt him down and kill him. In Los Angeles, Gabriel, a motorcycle messenger with a haunted past, takes pains to live ', 'book', '2006-05-01', 8, 2, 'available', '', 'The Traveller'),
(97815098929837, 'https://assets.thalia.media/img/artikel/9df3f9116d390e82a147bb358bb3cde08b900fb9-00-00.jpeg', 'In 1950 Norton Perina, a young doctor, embarks on an expedition to a remote Micronesian island in search of a rumoured lost tribe. There he encounters a strange group of jungle-dwellers who appear to have attained a form of immortality. Perina uncovers their secret and returns to America, where he soon finds great success. But his discovery has come at a terrible cost, not only for the islanders, but for Perina himself . . . Both riveting and unsettling, The People in the Trees explores the various faces of the misuse of power in a profound when cultures collide.', 'book', '2018-07-01', 4, 4, 'available', 'Drama', 'The People in the Trees');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `size` enum('big','medium','small') DEFAULT 'medium',
  `addressID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherID`, `name`, `size`, `addressID`) VALUES
(1, 'Verlag Arkanas', 'small', 1),
(3, 'Lighnting Source Incorporated', 'medium', 3),
(4, 'Pan Macmillan', 'medium', 4),
(5, 'Editorial Seix Barral', 'small', 5),
(7, 'Quercus Publishing Plc', 'big', 7),
(8, 'Penguin Books', 'big', 6),
(9, 'StudioArthaus', 'medium', 8),
(10, 'Random House Audio', 'small', 9),
(11, 'Fischerverlag', 'small', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressID`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorID`);

--
-- Indexes for table `medium`
--
ALTER TABLE `medium`
  ADD PRIMARY KEY (`ISBN_EAN`),
  ADD KEY `publisherID` (`publisherID`),
  ADD KEY `authorID` (`authorID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherID`),
  ADD KEY `addressID` (`addressID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medium`
--
ALTER TABLE `medium`
  ADD CONSTRAINT `medium_ibfk_1` FOREIGN KEY (`publisherID`) REFERENCES `publisher` (`publisherID`),
  ADD CONSTRAINT `medium_ibfk_2` FOREIGN KEY (`authorID`) REFERENCES `author` (`authorID`);

--
-- Constraints for table `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`addressID`) REFERENCES `address` (`addressID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
