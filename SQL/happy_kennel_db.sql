-- Script Credit: Alexa Miller --

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_resume`
--

DROP DATABASE IF EXISTS HAPPY_KENNEL;
CREATE DATABASE HAPPY_KENNEL;
COMMIT;
USE HAPPY_KENNEL;

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `reports` (
  `ID` INT AUTO_INCREMENT,
  `Dog Name (s)` text NOT NULL,
  `Owner Name (s)` text NOT NULL,
  `Food Type` text NOT NULL,
  `Necessary Medical Info` text NOT NULL,
  `Paid?` text NOT NULL,
  `Date Start-End` text NOT NULL,
  `Comments` text NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ID`, `Dog Name (s)`, `Owner Name (s)`, `Food Type`, `Necessary Medical Info`, `Paid?`,`Date Start-End`,`Comments`) VALUES
(1, 'Spot', 'Alex', 'Provided', 'Insulin Shots', 'Yes', 'April 20 - April 23', NULL);

SELECT * FROM reports;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `work_experience`
--
/*ALTER TABLE `reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
