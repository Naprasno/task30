-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 18 2022 г., 17:49
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `money`
--
CREATE DATABASE IF NOT EXISTS `money` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `money`;

-- --------------------------------------------------------

--
-- Структура таблицы `coins`
--

CREATE TABLE `coins` (
  `id` int NOT NULL,
  `img_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mint_center` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mint_year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denomination` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coins`
--

INSERT INTO `coins` (`id`, `img_num`, `img_type`, `name`, `mint_center`, `mint_year`, `material`, `denomination`, `weight`, `description`) VALUES
(1, '20220318173543', 'png', 'number_1', '', '', 'пух, жир', '100500', '5 кг', 'ня'),
(2, '20220318173729', 'jpg', '062-0621', 'Херсонес', '330-320 гг до н.э.', 'Медь', 'Дихалк', '8,00 г', 'Описание аверса:Грифон влево.\r\nОписание реверса:ХЕР. Коленопреклоненная Дева вправо,в левой руке лук, в правой - стрела, слева - ПА'),
(3, '20220318173927', 'jpg', '354-3541', 'Керкинитида', '330-320', 'Медь', 'Дихалк', 'm 3,41 г', 'Описание аверса:Сцена терзания быка львом вправо, под ними дубина направо и HPAKΛ (магистрат)'),
(4, '20220318174057', 'jpg', '123-456', 'центр', 'период', 'материал', 'номинал', 'вес', ''),
(5, '20220318174146', 'jpg', '111', 'Керкинитида', '330-320', 'медь', '', '3', ''),
(6, '20220318174624', 'png', '5555', 'Центр Чеканки моент', 'период чеканки', 'материал монеты', '', '2', 'С другой стороны реализация намеченных плановых заданий играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. Разнообразный и богатый опыт начало повседневной работы по формированию позиции в значительной степени обуславливает создание дальнейших направлений развития.');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `id_coin` int NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `d_date` varchar(100) DEFAULT NULL,
  `comm` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_coin`, `user`, `d_date`, `comm`) VALUES
(1, 3, 'user_admin', '2022-03-18 17:39:42', 'Описание реверса:Ника, идущая вправо, в руках венок. KAPK'),
(2, 1, 'user_admin', '2022-03-18 17:42:15', 'ПЕРВЫЙ НА!'),
(3, 5, 'user_admin', '2022-03-18 17:42:38', 'Комментарий к картинке тестовый текст текст текст'),
(4, 5, 'qwerty52', '2022-03-18 17:44:09', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.'),
(5, 5, 'qwerty52', '2022-03-18 17:44:41', 'удаление комментов работает походу'),
(6, 6, 'user_admin', '2022-03-18 17:46:37', 'По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.'),
(7, 6, 'qwerty52', '2022-03-18 17:47:15', '1234567');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'user_admin', '202cb962ac59075b964b07152d234b70'),
(2, 'qwerty52', '65b5067f6bbb38fad50937fe5d23ddb0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `coins`
--
ALTER TABLE `coins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
