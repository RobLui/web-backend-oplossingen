-- DATABASE
CREATE DATABASE IF NOT EXISTS `contact_database`
DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `contact_database`;

-- TABEL
CREATE TABLE IF NOT EXISTS `contact_messages` (
  -- id (Primary key)
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  -- email (varchar)
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  -- salt (varchar, 255 karakters)
  `message` text(255) COLLATE utf8_bin DEFAULT NULL,
  -- hashed_password (varchar, 255 karakters)
  `time_sent` datetime NOT NULL,
  -- PK = id
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;
