-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 12:34 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proiectbdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `albume`
--

CREATE TABLE `albume` (
  `id_album` int(10) NOT NULL,
  `titlu` varchar(50) NOT NULL,
  `compozitor` varchar(50) NOT NULL,
  `producator` varchar(50) NOT NULL,
  `an` varchar(50) NOT NULL,
  `id_casa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albume`
--

INSERT INTO `albume` (`id_album`, `titlu`, `compozitor`, `producator`, `an`, `id_casa`) VALUES
(14523, 'Harvest Moon', 'Neil Young', 'Ben Keith', '1992', 100),
(19298, 'Shadows Collide With People', 'John Frusciante', 'John Frusciante', '2004', 112),
(19498, 'Discovery', 'Daft Punk', 'Thomas Bangalter', '2005', 103),
(20308, 'Fall To Grace', 'Paloma Faith', 'Nellee Hooper', '2010', 108),
(32027, 'Safety Zone', 'Bobby Womack', 'David Rubinson', '1984', 104),
(32181, 'Sea Change', 'Beck Hansen', 'Nigel God Rich', '2001', 101),
(33137, 'Bleach', 'Nirvana', 'Jack Endino', '1991', 119),
(40402, 'Appetite For Destruction', 'Guns N\' Roses', 'Mike Clink', '1995', 101),
(42558, 'The Last Rebel', 'Lynyrd Skynyrd', 'Barry Beckett', '1992', 120),
(53441, 'One Hot Minute', 'Red Hot Chili Peppers', 'Rick Rubin', '1997', 102),
(54029, 'Ten', 'Pearl Jam', 'Rick Parashar', '1997', 121),
(54449, 'A Moon Shaped Pool', 'Radiohead', 'Nigel Godrich', '2016', 104),
(60702, 'Dirt', 'Alice In Chains', 'Dave Jerden', '2004', 106),
(61121, 'Hours', 'David Bowie', 'Reeves Gabrels', '2003', 115),
(72015, 'Nothing\'s Shoking', 'Jane\'s Addiction', 'Dave Jerden', '1995', 102),
(77549, 'At Least For Now', 'Benjamin Clementine', 'Jonathan Quarmby', '2015', 103),
(85822, 'Slow Train Coming', 'Bob Dylan', 'Barry Beckett', '1989', 106),
(88084, 'Plastic Beach', 'Gorillaz', 'Mark E. Smith', '2003', 118),
(90328, 'Uncle Jam Wants You', 'George Clinton', 'George Clinton', '1978', 102),
(97553, 'Eivets Rednow', 'Stevie Wonder', 'Henry Cosby', '1977', 107);

-- --------------------------------------------------------

--
-- Table structure for table `artisti`
--

CREATE TABLE `artisti` (
  `id_artist` int(10) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `data_nasterii` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_casa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artisti`
--

INSERT INTO `artisti` (`id_artist`, `nume`, `prenume`, `data_nasterii`, `email`, `id_casa`) VALUES
(1111, 'Neil', 'Young', '1945-11-12', 'neilyoung@gmail.com', 100),
(1112, 'Beck', 'Hansen', '1970-07-08', 'backcampbell@yahoo.com', 101),
(1113, 'Stevie', 'Nicks', '1948-05-26', 'stevie.nicks@rocketmail.com', 102),
(1331, 'Yoko', 'Ono', '1933-02-18', 'yoko_ono_lennon@gmail.com', 110),
(1598, 'Paloma', 'Faith', '1981-07-21', 'paloma.faith@yahoo.com', 108),
(2111, 'Benjamin', 'Clementine', '1988-12-07', 'benjaminc@yahoo.com', 103),
(2112, 'Bobby', 'Womack', '1944-03-04', 'bobbywomack@gmail.com', 104),
(2113, 'Mavis', 'Staples', '1939-07-10', 'mavis_staples19@gmail.com', 105),
(3024, 'Jimi', 'Hendrix', '1942-11-27', 'hendrix234@yahoo.com', 116),
(3147, 'Patti', 'Smith', '1946-12-30', 'smithpatti@rocketmail.com', 106),
(4023, ' Enya', 'Bhraonain', '1961-05-17', 'enya55@rocketmail.com', 113),
(4241, 'Israel', 'Kamakawiwo\'ole', '1959-05-20', 'israel.iz77@yahoo.com', 111),
(5567, 'Lou', 'Reed', '1942-03-02', 'lou_reed_42@gmail.com', 108),
(5728, 'David', 'Bowie', '1947-01-08', 'david_bowie@gmail.com', 115),
(7720, 'John', 'Frusciante', '1970-03-05', 'frusciante_world@gmail.com', 112),
(8188, 'Bob', 'Dylan', '1941-05-24', 'bobdylan.23@yahoo.com', 106),
(8925, 'George', 'Clinton', '1941-07-22', 'clintong_22@yahoo.com', 102),
(9341, 'Stevie', 'Wonder', '1950-05-13', 'wonders@gmail.com', 107),
(9475, 'Lead', 'Belly', '1888-01-20', 'leadbelly@rocketmail.com', 114),
(9910, 'Anna', 'Nalick', '1984-03-30', 'anna_music@gmail.com', 109);

-- --------------------------------------------------------

--
-- Table structure for table `case_de_discuri`
--

CREATE TABLE `case_de_discuri` (
  `id_casa` int(10) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `oras` varchar(50) NOT NULL,
  `strada` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_de_discuri`
--

INSERT INTO `case_de_discuri` (`id_casa`, `nume`, `oras`, `strada`, `telefon`) VALUES
(100, 'Reprise Records', 'Boston', 'Heather Pl.', '+1-512-555-0154'),
(101, 'Geffen Records', 'Philadelphia', 'Concord Rd.', '+1-512-555-0197'),
(102, 'Warner Bros. Records', 'Los Angeles', 'Waller Rd.', '+1-512-555-0179'),
(103, 'Virgin EMI Records', 'New York', 'Bluff Rd.', '+1-701-555-0184'),
(104, 'XL Recordings', 'Huston', 'Deer Point Dr.', '+1-701-555-0184'),
(105, 'Stax', 'Pheonix', 'Capstone Ct.', '+1-307-555-0161'),
(106, 'Columbia Records', 'New York', 'Red Oak Dr.', '+1-307-555-0161'),
(107, 'Motown', 'Atlanta', 'Sunnybrook Dr.', '+1-307-555-0161'),
(108, 'RCA Records', 'Austin', 'Stone Ridge Dr.', '+1-502-555-0137'),
(109, 'Epic Records', 'Miami', 'Holt Grove Ct.', '+1-303-555-0171'),
(110, 'Apple Records', 'Tucson', 'Dove Field Ct', '+1-202-555-0141'),
(111, 'Mountain Apple', 'Baltimore', 'Bathmick Dr.', '+1-202-555-0162'),
(112, 'American Recordings', 'Seattle', 'Rosslare Cir.', '+1-202-555-0158'),
(113, 'Atlantic Records', 'Nashville', 'Piacid Ct.', '+1-202-555-0135'),
(114, 'Capitol Records', 'Chicago', 'Cobbie St.', '+1-202-555-0168'),
(115, 'Parlophone', 'Washington D.C', 'Bradford Hill Dr.', '+1-202-555-0173'),
(116, 'Polydor Records', 'Denver', 'Bryce Rd', '+1-573-555-0155'),
(117, 'Creation Records', 'Miami', 'Crosswind Dr.', '+1-573-555-0112'),
(118, 'EMI', 'Jacksonville', 'Seesaw Rd.', '+1-573-555-0123'),
(119, 'Sub Pop', 'Seattle', 'Peak Hill Cir.', '+1-573-555-0102'),
(120, 'MCA Records', 'Cleveland', 'Christiansted Ln.', '+1-573-555-0185'),
(121, 'Monkeywrench Records', 'Oakland', 'Barnes Rd.', '+1-573-555-0113'),
(122, 'Island Records', 'Tucson', 'Timber Ridge Cir.', '+1-208-555-0179'),
(123, 'Asylum Records', 'San Jose', 'Wynfield Ct.', '+1-208-555-0195'),
(124, 'Domino Recording Company', 'Atlanta', 'Alteras Dr.', '+1-408-555-0195');

-- --------------------------------------------------------

--
-- Table structure for table `melodii`
--

CREATE TABLE `melodii` (
  `id_melodie` int(10) NOT NULL,
  `numar` int(11) NOT NULL,
  `titlu` varchar(50) NOT NULL,
  `gen` varchar(50) NOT NULL,
  `lungime` varchar(50) NOT NULL,
  `id_album` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `melodii`
--

INSERT INTO `melodii` (`id_melodie`, `numar`, `titlu`, `gen`, `lungime`, `id_album`) VALUES
(235553, 39, 'Warped', 'Rock Alternativ, Funk Rock', '4:21', 53441),
(236624, 37, 'Sunday Sun', 'Rock Alternativ, Folk Rock', '4:44', 32181),
(246111, 47, 'Rain When I Die', 'Grunge, Heavy Metal', '6:02', 60702),
(265344, 32, 'Already Dead', 'Rock Alternativ, Folk Rock', '2:59', 32181),
(276221, 35, 'Ted, Just Admit It...', 'Rock Alternativ, Heavy Metal', '7:22', 72015),
(353823, 31, 'Jane Says', 'Rock Alternativ, Heavy Metal', '4:52', 72015),
(357442, 51, 'Hate To Feel', 'Grunge, Heavy Metal', '5:16', 60702),
(375115, 50, 'Rooster', 'Grunge, Heavy Metal', '6:15', 60702),
(462413, 40, 'Deep Kick', 'Rock Alternativ, Funk Rock', '6:34', 53441),
(468261, 44, 'Too Long', 'House, Disco', '10:00', 19498),
(567322, 33, 'Ocean Size', 'Rock Alternativ, Heavy Metal', '4:20', 72015),
(574686, 41, 'One Big Mob', 'Rock Alternativ, Funk Rock', '5:11', 53441),
(724777, 48, 'Down In A Hole', 'Grunge, Heavy Metal', '5:38', 60702),
(735655, 45, 'High Life', 'House, Disco', '3:22', 19498),
(773321, 38, 'Side Of The Road', 'Rock Alternativ, Folk Rock', '3:24', 32181),
(789559, 43, 'One More Time', 'House, Disco', '6:07', 19498),
(853358, 36, 'End Of The Day', 'Rock Alternativ, Folk Rock', '5:03', 32181),
(868434, 49, 'Would', 'Grunge, Heavy Metal', '3:28', 60702),
(883383, 46, 'Them Bones', 'Grunge, Heavy Metal', '2:30', 60702),
(970754, 42, 'Bob', 'Rock Alternativ, Funk Rock', '4:20', 53441);

-- --------------------------------------------------------

--
-- Table structure for table `trupe`
--

CREATE TABLE `trupe` (
  `id_trupa` int(10) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `membrii` varchar(100) NOT NULL,
  `site` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `id_casa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trupe`
--

INSERT INTO `trupe` (`id_trupa`, `nume`, `membrii`, `site`, `telefon`, `id_casa`) VALUES
(1300, 'Daft Punk', 'Thomas Bangalter,Guy-Manuel', 'daftpunk.com', '502-555-0558', 103),
(2676, 'The Cranberries', 'Dolores O\'Riordan,Niall Quinn,Noel Hogan,Fergal Cowler', 'thecranberries.com', '702-555-0623', 122),
(3319, 'Red Hot Chili Peppers', 'Anthony Kiedis,Josh Klighoffer,Flea,Chad Smith', 'redhotchilipeppers.com', '202-555-0177', 102),
(4041, 'Tom Petty And The Heartbrakers', 'Tom Petty,Mike Campbell,Stan Lynch,Ron Blair', 'tompetty.com', '702-555-0798', 120),
(4241, 'Gorillaz', 'Damon Albarn,Jamie Hewlett', 'gorillaz.com', '202-555-0148', 118),
(4414, 'Oasis', 'Liam Gallagher,Noel Gallagher,Paul Arthurs,Andy Bell', 'ukoasis.com', '202-555-0156', 117),
(4555, 'The Beatles', 'Jhon Lennon,Paul McCartney,Ringo Starr', 'beatles.com', '302-555-0177', 110),
(5111, 'Radiohead', 'Thom Yorke,Jonny Greenwood,Ed O\'Brien,Colin Greenwood', 'radiohead.com', '202-555-0163', 104),
(5474, 'Alice In Chains', 'Layne Staley,Jerry Cantrell,Mike Starr,Mike Inez', 'aic.com', '202-555-0176', 106),
(6175, 'Nirvana', 'Kurt Cobain,Dave Grohl,Krist Novoselic', 'nirvana.com', '402-555-0543', 119),
(6264, 'Guns N\' Roses', 'Axl Rose,Slash,Duff McKagan,Izzy Stradlin', 'gunsnroses.com', '202-555-0146', 101),
(7001, 'Jane\'s Addiction', 'Perry Farrel,Dave Navarro,Stephen Perkins', 'janesaddiction.com', '404-555-0111', 102),
(7980, 'Lynyrd Skynyrd', 'Ronnie Van Zant,Gary Rossington,Allen Collins', 'lynyrdskynyrd.com', '402-555-0147', 120),
(8211, 'The Rolling Stones', 'Mick Jagger,Keith Richards,Brian Jhones,Ron Wood', 'trs.com', '702-555-0744', 124),
(8703, 'Blur', 'Damon Albarn,Gtaham Coxon,Alex James,Dave Rowntree', 'blur.com', '802-555-0223', 115),
(9090, 'Pearl Jam', 'Eddie Vedder,Mike McCready,Jeff Ament', 'pearljam.com', '402-555-0565', 121),
(9111, 'Eagles', 'Glenn Frey,Don Henley,Joe Walsh', 'eagles.com', '802-555-0975', 123),
(9121, 'Coldplay', 'Chris Martin,Guy Berryman,Jon Buckland', 'coldplay.com', '402-555-0199', 115),
(9131, 'Arctic Monkeys', 'Alex Turner,Matt Helders,Jamie Cook,Glyn Jones', 'arcticmonkeys.com', '402-555-0222', 124),
(9700, 'Metallica', 'James Hetfield,Lars Ulrich,Cliff Burton,Jason Newsted', 'metallica.com', '902-555-0241', 121);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albume`
--
ALTER TABLE `albume`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id_casa` (`id_casa`);

--
-- Indexes for table `artisti`
--
ALTER TABLE `artisti`
  ADD PRIMARY KEY (`id_artist`),
  ADD KEY `id_casa` (`id_casa`);

--
-- Indexes for table `case_de_discuri`
--
ALTER TABLE `case_de_discuri`
  ADD PRIMARY KEY (`id_casa`);

--
-- Indexes for table `melodii`
--
ALTER TABLE `melodii`
  ADD PRIMARY KEY (`id_melodie`),
  ADD UNIQUE KEY `numar` (`numar`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `trupe`
--
ALTER TABLE `trupe`
  ADD PRIMARY KEY (`id_trupa`),
  ADD KEY `id_casa` (`id_casa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `melodii`
--
ALTER TABLE `melodii`
  MODIFY `numar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albume`
--
ALTER TABLE `albume`
  ADD CONSTRAINT `albume_ibfk_1` FOREIGN KEY (`id_casa`) REFERENCES `case_de_discuri` (`id_casa`);

--
-- Constraints for table `artisti`
--
ALTER TABLE `artisti`
  ADD CONSTRAINT `artisti_ibfk_1` FOREIGN KEY (`id_casa`) REFERENCES `case_de_discuri` (`id_casa`);

--
-- Constraints for table `melodii`
--
ALTER TABLE `melodii`
  ADD CONSTRAINT `melodii_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albume` (`id_album`);

--
-- Constraints for table `trupe`
--
ALTER TABLE `trupe`
  ADD CONSTRAINT `trupe_ibfk_1` FOREIGN KEY (`id_casa`) REFERENCES `case_de_discuri` (`id_casa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
