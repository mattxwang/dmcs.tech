--
-- Database: `dmcs`
--
CREATE DATABASE IF NOT EXISTS `dmcs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dmcs`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `email` text NOT NULL,
  `date` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`email`, `date`, `id`) VALUES
('code@dmcs.tech', 'welcometodmcs', 1);
