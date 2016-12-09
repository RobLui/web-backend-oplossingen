-- DATABASE
CREATE DATABASE IF NOT EXISTS `opdracht-security-login`
DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `opdracht-security-login`;

-- TABEL
CREATE TABLE IF NOT EXISTS `users` (
  -- id (Primary key)
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  -- email (varchar)
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  -- salt (varchar, 255 karakters)
  `salt` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  -- hashed_password (varchar, 255 karakters)
  `hashed_password` varchar(255) COLLATE utf8_bin NOT NULL,
  -- last_login_time (date)
  `last_login_time` date NOT NULL,
  -- PK = id
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;
