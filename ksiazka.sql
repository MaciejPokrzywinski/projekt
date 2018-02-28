-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2016, 14:15
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ksiazka`
--
CREATE DATABASE ksiazka;
USE ksiazka;
-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupy`
--

CREATE TABLE `grupy` (
  `Nazwa_grupy` text NOT NULL,
  `id_grupy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `grupy`
--

INSERT INTO `grupy` (`Nazwa_grupy`, `id_grupy`) VALUES
('Znajomi', 130),
('Przyjaciele', 131),
('Rodzina', 132),
('Firma', 133),
('Facebook', 134),
('Telefon', 135),
('kielce', 136),
('wroclaw', 137),
('GrupaWeroniki', 138),
('asdasddsa', 139),
('Znajomi', 160),
('Przyjaciele', 161),
('Rodzina', 162),
('Znajomi', 170),
('Przyjaciele', 171),
('Rodzina', 172),
('GrupaNajlepszychKumpliMefia', 173);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID` int(11) NOT NULL,
  `login` text NOT NULL,
  `haslo` text NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `telefon` int(11) NOT NULL,
  `email` text NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID`, `login`, `haslo`, `imie`, `nazwisko`, `telefon`, `email`, `Admin`) VALUES
(13, 'Exiver', 'qwerty', 'Maciej', 'PokrzywiÅ„ski', 0, 'nowymefiu@gmail.com', 0),
(17, 'Mefiu', 'ytrewq', 'Mateusz', 'Dziurski', 0, 'nowymefiu@gmail.com', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `znajomi`
--

CREATE TABLE `znajomi` (
  `ID` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `telefon` int(11) NOT NULL,
  `id_grupy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `grupy`
--
ALTER TABLE `grupy`
  ADD PRIMARY KEY (`id_grupy`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
