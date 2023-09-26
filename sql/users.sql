-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Cze 2023, 23:29
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szkola_21`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(7) NOT NULL DEFAULT 'User',
  `type` enum('Uczeń','Nauczyciel','Dyrektor') NOT NULL DEFAULT 'Uczeń',
  `pswrd` varchar(25) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `lvl` enum('A1','A2','B1','B2','C1','C2') NOT NULL,
  `age` int(3) NOT NULL,
  `mod_date` datetime DEFAULT current_timestamp(),
  `add_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `role`, `type`, `pswrd`, `mail`, `name`, `last_name`, `lvl`, `age`, `mod_date`, `add_date`) VALUES
(1, 'Admin', 'Dyrektor', 'Szkola21%', 'admin@abc-english-school.edu.pl', 'Admin', 'Adminowy', 'C2', 35, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(2, 'User', 'Nauczyciel', 'Qwerty2@', 'adam@gmail.com', 'Adam', 'Adamowy', 'C2', 34, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(3, 'User', 'Nauczyciel', 'Asdfga4$', 'marek@gmail.com', 'Marek', 'Markowy', 'C2', 35, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(4, 'User', 'Nauczyciel', 'Zxcvbd6&', 'anna@gmail.com', 'Anna', 'Annowa', 'C1', 29, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(5, 'User', 'Uczeń', 'Asdfgf4$', 'andrzej@gmail.com', 'Andrzej', 'Andrzejowy', 'B2', 32, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(6, 'User', 'Uczeń', 'Yuiope2@', 'justyna@gmail.com', 'Justyna', 'Justynowa', 'A1', 54, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(7, 'User', 'Uczeń', 'Hakkah5%', 'kasia@gmail.com', 'Kasia', 'Kasiowa', 'A2', 12, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(8, 'User', 'Uczeń', 'Fgthjg7&', 'beata@gmail.com', 'Beata', 'Beatowa', 'C1', 44, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(9, 'User', 'Uczeń', 'Ertyuh9&', 'jakub@gmail.com', 'Jakub', 'Jakubowy', 'B2', 36, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(10, 'User', 'Uczeń', 'Cvbnmk5$', 'janusz@gmail.com', 'Janusz', 'Januszowy', 'B1', 42, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(11, 'User', 'Uczeń', 'Dfghjr3&', 'roman@gmail.com', 'Roman', 'Romanowy', 'A2', 39, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(12, 'User', 'Uczeń', 'Frgtya2$', 'norbert@gmail.com', 'Norbert', 'Norbertowy', 'A1', 12, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(13, 'User', 'Uczeń', 'Dergsy5@', 'arek@gmail.com', 'Arek', 'Arkowy', 'B2', 23, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(14, 'User', 'Uczeń', 'Polksl6&', 'cecylia@gmail.com', 'Cecylia', 'Cecyliowa', 'C1', 33, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(15, 'User', 'Uczeń', 'Rtygvc1@', 'dariusz@gmail.com', 'Dariusz', 'Dariuszowy', 'A1', 13, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(16, 'User', 'Uczeń', 'Qasdeh2&', 'eryk@gmail.com', 'Eryk', 'Erykowy', 'A2', 20, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(17, 'User', 'Uczeń', 'Zsdxab5@', 'emilia@gmail.com', 'Emilia', 'Emiliowa', 'B1', 23, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(18, 'User', 'Uczeń', 'Frfesl6$', 'filip@gmail.com', 'Filip', 'Filipowy', 'B2', 26, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(19, 'User', 'Uczeń', 'Sdsfxa9&', 'franek@gmail.com', 'Franek', 'Frankowy', 'C1', 29, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(20, 'User', 'Uczeń', 'Cvbcga1@', 'gosia@gmail.com', 'Gosia', 'Gosiowa', 'A1', 15, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(21, 'User', 'Uczeń', 'Rfvcdg5&', 'grzegorz@gmail.com', 'Grzegorz', 'Grzegorzowy', 'A2', 17, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(22, 'User', 'Uczeń', 'Qsewrt9&', 'halina@gmail.com', 'Halina', 'Halinowa', 'B1', 18, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(23, 'User', 'Uczeń', 'Rewqta1@', 'henryk@gmail.com', 'Henryk', 'Henrykowy', 'B2', 21, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(24, 'User', 'Uczeń', 'Fdsawv5$', 'irek@gmail.com', 'Irek', 'Irkowy', 'C1', 35, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(25, 'User', 'Uczeń', 'Alskdj7%', 'jurek@gmail.com', 'Jurek', 'Jurkowy', 'A1', 18, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(26, 'User', 'Uczeń', 'Fhtrhc9&', 'kamil@gmail.com', 'Kamil', 'Kamilowy', 'A2', 17, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(27, 'User', 'Uczeń', 'Arbtug5@', 'kacper@gmail.com', 'Kacper', 'Kacporwy', 'B1', 22, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(28, 'User', 'Uczeń', 'Mnasdd4$', 'karolina@gmail.com', 'Karolina', 'Karolinowa', 'B2', 32, '2023-06-18 12:00:00', '2023-06-18 12:00:00'),
(29, 'User', 'Uczeń', 'Bpoesr5&', 'ludwik@gmail.com', 'Ludwik', 'Ludwikowy', 'C2', 35, '2023-06-18 12:00:00', '2023-06-18 12:00:00');

--
-- Wyzwalacze `users`
--
DELIMITER $$
CREATE TRIGGER `users_BI` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
    IF (NEW.mod_date IS NULL) THEN -- change the isnull check for the default used
        SET NEW.mod_date = now();
    END IF;
END
$$
DELIMITER ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
