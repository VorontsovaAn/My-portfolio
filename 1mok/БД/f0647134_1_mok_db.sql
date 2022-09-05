-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 05 2022 г., 20:47
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `f0647134_1_mok_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buildings`
--

CREATE TABLE `buildings` (
  `building_id` int NOT NULL,
  `building_name` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `building_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `buildings`
--

INSERT INTO `buildings` (`building_id`, `building_name`, `address`, `building_type`) VALUES
(1, 'all', 'all', 'all'),
(2, 'Факультет \"Индустрия красоты и гостеприимства\"', 'м. Рижская, м. Марьина роща, 3-й Стрелецкий проезд, д. 3', 'college'),
(3, 'Факультет \"Дизайн\"', 'м. Медведково, Стартовая улица, дом 1, корпус 2', 'college'),
(4, 'Факультет \"Информационные технологии и управление\"', 'м. Бабушкинская, Староватутинский проезд, дом 6', 'college'),
(5, 'Факультет \"Культура и искусство\"', 'м. Ботанический сад, ул. Докукина, дом 16, строение 2', 'college'),
(6, 'Факультет \"Реклама\"', 'м. Медведково, улица Тихомирова, дом 10, корпус 1', 'college'),
(7, 'Факультет \"Ресторанный бизнес\"', 'м. Алексеевская, Мурманский проезд, дом 12', 'college'),
(8, 'Факультет \"Художественные ремёсла\"', 'м. Алексеевская, Мурманский проезд, дом 8', 'college'),
(9, 'Школа', 'ул. Тихомирова, дом 6', 'school'),
(10, 'Школа', 'ул. Тихомирова, дом 10 А', 'school'),
(11, 'Школа', 'ул. Тихомирова, дом 10', 'school'),
(12, 'Детский сад', 'ул. Тихомирова, д. 8', 'kindergarten'),
(13, 'Детский сад', 'Заревый проезд, д. 8, к. 2', 'kindergarten'),
(14, 'Детский сад', 'ул. Тихомирова, д. 13, 13/1', 'kindergarten'),
(15, 'Детский сад', 'ул. Тихомирова, д. 13, к.2', 'kindergarten');

-- --------------------------------------------------------

--
-- Структура таблицы `call_shedules`
--

CREATE TABLE `call_shedules` (
  `call_shedule_id` int NOT NULL,
  `call_shedules_path` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `building_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `class_shedules`
--

CREATE TABLE `class_shedules` (
  `class_shedule_id` int NOT NULL,
  `class_shedule_path` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `group_id` int NOT NULL,
  `group_name` varchar(20) NOT NULL,
  `building_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `building_id`) VALUES
(1, '11АТ', 4),
(3, '11КС', 4),
(4, '11ИС', 4),
(5, '12ИС', 4),
(6, '15ИС', 4),
(7, '13ИС', 4),
(8, '14ИС', 4),
(9, '11Э', 4),
(10, '11Л', 4),
(11, '12Л', 4),
(12, '21АТ', 4),
(13, '21КС', 4),
(14, '21ИС', 4),
(15, '22ИС', 4),
(16, '23ИС', 4),
(17, '24ИС', 4),
(18, '21Э', 4),
(19, '21Л', 4),
(20, '22Л', 4),
(21, '31АТ', 4),
(22, '31КС', 4),
(23, '31ИС', 4),
(24, '32ИС', 4),
(25, '33ИС', 4),
(26, '34ИС', 4),
(27, '36ИС', 4),
(28, '31Э', 4),
(29, '31Л', 4),
(30, '32Л', 4),
(31, '41КС', 4),
(32, '42КС', 4),
(33, '41ИС', 4),
(34, '43ИС', 4),
(35, '44ИС', 4),
(36, '1а', 9),
(39, '53ИС', 7),
(50, '', 2),
(51, '53ИС', 12),
(52, '11ИК', 2),
(53, '2а', 9),
(55, '53ИС', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `role_id` int NOT NULL,
  `role_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 's-admin'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role_id` int NOT NULL,
  `building_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `login`, `password`, `role_id`, `building_id`) VALUES
(1, 'Иван', 'Иванович', 'ivan@bk.ru', 'Ivan', 'e7c3b7176d7cec8b0bd0c5b4642af67a', 1, 1),
(2, 'test', 'test', 'test@test.test', 'test', '05a671c66aefea124cc08b76ea6d30bb', 2, 10),
(3, 'test', 'test', 'test@test.test', 'test', 'cc03e747a6afbbcbf8be7668acfebee5', 2, 8),
(4, 'test', 'test', 'test@test.test', 'test', 'cc03e747a6afbbcbf8be7668acfebee5', 2, 8),
(5, 'test', 'test', 'test@test.test', 'test', 'cc03e747a6afbbcbf8be7668acfebee5', 2, 10),
(6, 'test', 'test', 'test@test.test', 'test', '05a671c66aefea124cc08b76ea6d30bb', 2, 10),
(7, 'test', 'test', 'test@test.test', 'test', '05a671c66aefea124cc08b76ea6d30bb', 2, 10),
(8, 'test', 'test', 'test@test.test', 'test', '05a671c66aefea124cc08b76ea6d30bb', 2, 9),
(9, 'Антон', 'Антонов', 'anton@mail.ru', 'anton', '42b46b98d4cf19ec3b8eb076284a63fd', 2, 4),
(10, 'Анна', 'Кузнецова', 'anna@mail.ru', 'anna', '3bc20dc01341f7a7f7e10977d40934bc', 2, 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`building_id`);

--
-- Индексы таблицы `call_shedules`
--
ALTER TABLE `call_shedules`
  ADD PRIMARY KEY (`call_shedule_id`),
  ADD KEY `building_id` (`building_id`);

--
-- Индексы таблицы `class_shedules`
--
ALTER TABLE `class_shedules`
  ADD PRIMARY KEY (`class_shedule_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `building_id` (`building_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`,`building_id`),
  ADD KEY `building_id` (`building_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buildings`
--
ALTER TABLE `buildings`
  MODIFY `building_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `call_shedules`
--
ALTER TABLE `call_shedules`
  MODIFY `call_shedule_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `class_shedules`
--
ALTER TABLE `class_shedules`
  MODIFY `class_shedule_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `call_shedules`
--
ALTER TABLE `call_shedules`
  ADD CONSTRAINT `call_shedules_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`building_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `class_shedules`
--
ALTER TABLE `class_shedules`
  ADD CONSTRAINT `class_shedules_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`building_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`building_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
