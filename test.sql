-- phpMyAdmin SQL Dump
-- version 4.2.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 19 2015 г., 12:10
-- Версия сервера: 5.6.17
-- Версия PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id_article` bigint(20) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `title` char(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_article`, `date`, `title`, `content`) VALUES
(3, '2015-02-20 04:12:15', 'PHP require - manual', 'PHP 4, PHP 5)\r\nrequire идентично include за исключением того, что при ошибке оно также выдаст фатальную ошибку уровня E_COMPILE_ERROR. Другими словами, она остановит выполнение скрипта, тогда как include только выдала бы предупреждение E_WARNING, которое позволило бы скрипту продолжить выполнение.\r\n\r\nСмотрите документацию по include, чтобы узнать как это работает.'),
(4, '0000-00-00 00:00:00', 'PHP include - manual', 'PHP 4, PHP 5)\r\nВыражение include включает и выполняет указанный файл.\r\n\r\nДокументация ниже также относится к выражению require.\r\n\r\nФайлы включаются исходя из пути указанного файла, или, если путь не указан, используется путь, указанный в директиве include_path. Если файл не найден в include_path, include попытается проверить директорию, в которой находится текущий включающий скрипт и текущую рабочую директорию перед тем, как выдать ошибку. Конструкция include выдаст warning, если не сможет найти файл; поведение отлично от require, который выдаст фатальную ошибку.\r\n\r\nЕсли путь указан — не важно, абсолютный (начинающийся с буквы диска или с \\ в Windows или с / в Unix/Linux системах) или относительно текущей директории (начинающийся с . или ..) — директива include_path будет проигнорирована в любом случае. К примеру, если начинается с ../, парсер проверит родительскую директорию на наличие запрошенного файла.\r\n\r\nДля большей информации о том, как PHP обрабатывает включаемые файлы и включаемые пути, смотрите документацию для директивы include_path.\r\n\r\nКогда файл включается, его код наследует ту же область видимости переменых, что и строка, на которой произошло включение. Все переменные, доступные на этой строке во включащем файле будут также доступны во включаемом файле. Однако все функции и классы, объявленные во включаемом файле, будут доступны в глобальной области видимости.'),
(5, '0000-00-00 00:00:00', 'Медведев поручил проработать вопрос поставок газа', 'Медведев поручил проработать вопрос поставок газа из РФ в Донбасс');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD UNIQUE KEY `id` (`id_article`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id_article` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
