-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 dec 2016 om 21:35
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opdracht-security-login`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `salt` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `hashed_password` varchar(255) COLLATE utf8_bin NOT NULL,
  `last_login_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `email`, `salt`, `hashed_password`, `last_login_time`) VALUES
(95, 'robbertluit@hotmail.com', '12689717545854754e1654d6.55104810', '94afbdd4f1250389c8901ffe9c8b0b621de96c117c5703cde1193c5ab123febaa5af9d536d9e8f33cde9a3bc8ac3973c44d9f0197ddeacf63471d0f7657129c3', '2016-12-17'),
(96, 'robbzerertluit@hotmail.com', '581358668585475d232a3e1.58198610', 'c702dc8dad33e729bbdedc776823430de0d6612350b67176b893180a73854d2c3fdc719887d36f3bdf051dfb7bfd43b5111b842f1a6cb4802e115dd672682a7d', '2016-12-17'),
(97, 'robsdfbertluit@hotmail.com', '31769704158547cc210bce8.48246725', '6f913272178e7fb7c1dbe2d9b68063c7643ba92bc41d143d1ec2d4f3b88c9b9b544507ede9ac292e7c008d839418b6a4ea90476656f9bb84dba8200299b1b26f', '2016-12-17'),
(98, 'robbertluit@hotmail.com2', '116303077758547cf5dd19d4.27038793', '2547fe5b97e1b01cb7c8eb704526b8ca80efe888e2f2fae395fd298ba91e08e6679ceab86fd480d314ee31c6a8895ce2226a1aee8146900fd05b1abd1af99d6c', '2016-12-17'),
(99, 'ezessqrobbertluit@hotmail.com', '172339899158547ef123ebd9.71694241', 'd55681cf1c13c89ea608e774064ffabbbcebee1cdac8a80906d8a158ff083845e8df143bd53a707ca531b86f8115252af33fe5536991ee20e2ed4307344237ca', '2016-12-17'),
(100, 'robbertluit@hotmail.be3', '23878021358548cf74e8436.02975153', '9b0e23cdaa5672d5dc947667af67d6f05f3e9739fda447498df531a40d16323f027a71a28cc12857f2990b4bed681f56f0d2568540aa2bc27fd5c20a7336f3c3', '2016-12-17'),
(101, 'test@test.test', '138921502258548e11017be9.66430786', '816a79c89953a4cbe127237ca04380b80200004e831d517e661556ed9b5cf09d8fa5539893d86de915f4006bc5c50655773f191924a57aa1622b2c763c5afed3', '2016-12-17'),
(102, 'rr@hotmail.com', '9197255158548fcac65be2.48322453', '96b71c716066f7af1a99a6feb50fa71f5cec8ae21adf3e71e625a2b6ee6bfc279ffbb6b9959d9678db428218ee1ad9cf6764bcffc4cb9d9fe0cebff84024ac04', '2016-12-17'),
(103, 'test@test.be', '3238329925854985fcbfab1.71287313', 'fb4f43db224350250f813e0722a1866e4eac8db8f4d89fdc34d753f9b2bf7492589f5a351f95026b460f700a29e8ff70567508cd09bef06309e417a08b531352', '2016-12-17');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
