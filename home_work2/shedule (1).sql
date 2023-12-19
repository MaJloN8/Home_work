-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 19 2023 г., 23:38
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
-- Структура таблицы `shedule`
--

DROP TABLE IF EXISTS `shedule`;
CREATE TABLE IF NOT EXISTS `shedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `teacher_id` int NOT NULL,
  `lesson_id` int NOT NULL,
  `start_time` time NOT NULL,
  `lesson_date` date NOT NULL,
  `class_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `shedule`
--

INSERT INTO `shedule` (`id`, `teacher_id`, `lesson_id`, `start_time`, `lesson_date`, `class_id`) VALUES
(1, 57, 1, '14:10:00', '2023-12-01', 1),
(2, 58, 0, '05:18:00', '2023-12-08', 2),
(3, 58, 2, '05:18:00', '2023-12-08', 2),
(4, 58, 2, '05:18:00', '2023-12-08', 2),
(5, 56, 2, '07:26:00', '2023-12-23', 4),
(6, 53, 2, '10:26:00', '2023-12-22', 2),
(7, 57, 4, '06:28:00', '2023-12-14', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
