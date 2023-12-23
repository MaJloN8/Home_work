-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 23 2023 г., 19:07
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `development`
--

-- --------------------------------------------------------

--
-- Структура таблицы `metal`
--

DROP TABLE IF EXISTS `metal`;
CREATE TABLE IF NOT EXISTS `metal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) NOT NULL,
  `nachalo` date DEFAULT NULL,
  `dr` date DEFAULT NULL,
  `special` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `metal`
--

INSERT INTO `metal` (`id`, `fullname`, `nachalo`, `dr`, `special`) VALUES
(4, 'Григорий Лепс', '2023-11-29', '2023-12-15', 'Монтажник'),
(2, 'Батов Сергей', '2013-07-15', '2004-09-13', 'Инженер'),
(3, 'Якунин Дмитрий', '2013-07-13', '2004-09-13', 'Сварщик'),
(5, 'Лисицин Даниил', '2023-12-07', '2023-12-10', 'Инженер'),
(6, 'Ситников Илья', '2023-11-30', '2023-12-23', 'Монтажник'),
(7, 'Дадажиев Арслан', '2023-12-30', '2023-11-17', 'Инженер'),
(8, 'Батов Сергей', '2023-12-02', '2023-12-03', 'Монтажник'),
(9, 'Печников Максим', '2023-12-15', '2023-12-31', 'Сварщик'),
(10, 'Эдуард Сергеевич', '2023-12-01', '2023-04-01', 'Монтажник'),
(12, 'Муслим Садыгов', '2023-02-17', '2003-02-14', 'Программист');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
