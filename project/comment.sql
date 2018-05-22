-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 22 2018 г., 11:07
-- Версия сервера: 5.5.57-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `comments`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `email`, `name`, `message`, `date`) VALUES
(19, 'mike@m.com', 'Mike', 'hi!', '2018-05-16 12:45:07'),
(20, 'em@r.ru', 'Иван', 'Привет!', '2018-05-16 12:47:40'),
(21, 'mi@fnv.ru', 'Mike', 'Hello', '2018-05-22 06:23:53'),
(23, '123@mail.ru', 'natela', '123456', '2018-05-22 06:37:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
