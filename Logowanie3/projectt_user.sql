-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2024, 13:00
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt_3a`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projectt_user`
--

CREATE TABLE `projectt_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `user_surname` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL,
  `user_login` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `user_email` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `projectt_user`
--

INSERT INTO `projectt_user` (`user_id`, `user_name`, `user_surname`, `user_login`, `user_email`, `user_password`) VALUES
(4, 'John', 'Bloodborne', 'John', 'jamalhairyballs@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(5, 'Azerbejdżan', 'Jamal', 'Azerbejdżan', '1234@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(6, 'Stachu', 'Jones', 'abdullah', '534324@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `projectt_user`
--
ALTER TABLE `projectt_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `projectt_user`
--
ALTER TABLE `projectt_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
