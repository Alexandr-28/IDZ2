-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 09 2021 г., 12:49
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `idz`
--
CREATE DATABASE IF NOT EXISTS `idz` DEFAULT CHARACTER SET cp1251 COLLATE cp1251_general_cs;
USE `idz`;

-- --------------------------------------------------------

--
-- Структура таблицы `infos`
--

CREATE TABLE `infos` (
  `Id` int(11) NOT NULL,
  `Login` varchar(75) COLLATE cp1251_general_cs NOT NULL,
  `Password` varchar(75) COLLATE cp1251_general_cs NOT NULL,
  `Other` varchar(255) COLLATE cp1251_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs;

--
-- Дамп данных таблицы `infos`
--

INSERT INTO `infos` (`Id`, `Login`, `Password`, `Other`) VALUES
(85, 'golxJCZMk3uhyTLRWWvmVPfe1KTt+iMSam0=', 'uA6wUMQgcqe2FYBqZ6aSw3D+1j/ydQ==', 'L8YHjJ08tdC2hpA8UUxjlj7FynRx'),
(86, 'ZJUb+FRnORKnHm+/80nMygyqUK0=', '+s6XZpq9o0oUkOepmpuFmYATFNyN', 'mDrqdPeZGZ5hZx8d5ROYevwF3w==');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE cp1251_general_cs NOT NULL,
  `Password` varchar(1000) COLLATE cp1251_general_cs NOT NULL,
  `Email` varchar(50) COLLATE cp1251_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`Id`, `Name`, `Password`, `Email`) VALUES
(1, 'Alex', '$2y$10$ToGk3.c03boEj5Ee2zIWAe4uNUeLCHVrEVvN5HBXC669H4LQ5DBiO', 'someemail@gmail.com'),
(2, 'Tom', '$2y$10$mUs9wEvlLtH1EcxRIFT0sOJ8f92JUxu9R4JwwSnmIXmwB0hYZSege', 'someemail2@gmail.com'),
(3, 'Anna', '$2y$10$9DF4RdzOMfFdQN2SNbTFbuJxBDU/ICT0UYjXw4YG2ujG2lxPCBeDy', 'someemail3@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `infos`
--
ALTER TABLE `infos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
