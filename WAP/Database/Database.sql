SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Database： `wap`
--
CREATE DATABASE IF NOT EXISTS `wap` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wap`;
-- --------------------------------------------------------

--
-- Table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` varchar(50) NOT NULL,
  `message` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=0;

INSERT INTO `contact` (`name`, `email`, `question`, `message`) VALUES
('chen', 'chen@sd.taylor.edu.my', 'good', 'good'),
('wang', 'wang@sd.taylors.edu.my', 'good', 'good');

-- --------------------------------------------------------

--
-- Table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=0;

INSERT INTO `donation` (`name`, `email`, `phone`, `type`) VALUES
('chen', 'chen@sd.taylor.edu.my', 11111111, 'dadaadadadadada');

-- --------------------------------------------------------

--
-- Table `login`
--

CREATE TABLE `login` (
  `administrator` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `login` (`administrator`, `password`) VALUES
('chen', '123456');

-- --------------------------------------------------------

--
-- Table `user`
--

CREATE TABLE `user` (
  `administrator` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`administrator`, `password`) VALUES
('administrator', '0000');

-- --------------------------------------------------------

--
-- Table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `phone` int(50) NOT NULL,
  `birth` date NOT NULL,
  `profession` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `hours` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=0;


INSERT INTO `volunteer` (`name`, `gender`, `age`, `phone`, `birth`, `profession`, `email`, `hours`) VALUES
('chen', 'Male', 20, 2147483647, '2022-06-03', 'student', 'chen@sd.taylors.edu.my', 12),
('wang', 'Male', 20, 1234567890, '2022-06-03', 'student', 'wang@sd.taylors.edu.my', 30);
