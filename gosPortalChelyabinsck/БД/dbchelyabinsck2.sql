-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2022 г., 11:48
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
-- База данных: `dbchelyabinsck2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appeals`
--

CREATE TABLE `appeals` (
  `id` int NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `text` varchar(3000) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `file_link` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `appeals`
--

INSERT INTO `appeals` (`id`, `view`, `class`, `text`, `status`, `file_link`, `date`, `user_id`) VALUES
(9, 'Заявление', 'vrasm', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis deleniti reiciendis sit quos enim iste ipsam sapiente soluta natus? Quas voluptas fuga dignissimos itaque, aperiam voluptatibus corrupti voluptatum fugit vitae?\r\nEx blanditiis praesentium, obcaecati assumenda laudantium fuga suscipit illum debitis quibusdam exercitationem deleniti fugiat velit esse expedita! Soluta praesentium recusandae rem odio quos. Reprehenderit, velit doloribus? Perferendis minus sapiente sint.\r\nVoluptatum consectetur illo, at ad eaque doloribus in unde magnam sequi facere. Dolorem libero, quia atque commodi autem iusto distinctio aut id labore accusamus pariatur praesentium, itaque, unde necessitatibus sequi.\r\nPorro eos aspernatur natus et voluptates fugit voluptas labore assumenda error quaerat perspiciatis praesentium eum, nihil rem fugiat sapiente consequatur nesciunt sint repellendus, ipsam dolor quia est adipisci? Amet, fugit!\r\nProvident repellat a quam? Ut debitis reprehenderit officia? Recusandae ratione explicabo sed, aliquid itaque non, necessitatibus porro consequatur aut minus laudantium doloremque eos expedita ab reiciendis fugiat sapiente consequuntur? Hic.', 'В рассмотрении', '../files/Документ Microsoft Word.docx', '13.06.2022', 10),
(10, 'Предложение', 'vrasm', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis deleniti reiciendis sit quos enim iste ipsam sapiente soluta natus? Quas voluptas fuga dignissimos itaque, aperiam voluptatibus corrupti voluptatum fugit vitae?\r\nEx blanditiis praesentium, obcaecati assumenda laudantium fuga suscipit illum debitis quibusdam exercitationem deleniti fugiat velit esse expedita! Soluta praesentium recusandae rem odio quos. Reprehenderit, velit doloribus? Perferendis minus sapiente sint.\r\nVoluptatum consectetur illo, at ad eaque doloribus in unde magnam sequi facere. Dolorem libero, quia atque commodi autem iusto distinctio aut id labore accusamus pariatur praesentium, itaque, unde necessitatibus sequi.\r\nPorro eos aspernatur natus et voluptates fugit voluptas labore assumenda error quaerat perspiciatis praesentium eum, nihil rem fugiat sapiente consequatur nesciunt sint repellendus, ipsam dolor quia est adipisci? Amet, fugit!\r\nProvident repellat a quam? Ut debitis reprehenderit officia? Recusandae ratione explicabo sed, aliquid itaque non, necessitatibus porro consequatur aut minus laudantium doloremque eos expedita ab reiciendis fugiat sapiente consequuntur? Hic.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis deleniti reiciendis sit quos enim iste ipsam sapiente soluta natus? Quas voluptas fuga dignissimos itaque, aperiam voluptatibus corrupti voluptatum fugit vitae?\r\nEx blanditiis praesentium, obcaecati assumenda laudantium fuga suscipit illum debitis quibusdam exercitationem deleniti fugiat velit esse expedita! Soluta praesentium recusandae rem odio quos. Reprehenderit, velit doloribus? Perferendis minus sapiente sint.\r\nVoluptatum consectetur illo, at ad eaque doloribus in unde magnam sequi facere. Dolorem libero, quia atque commodi autem iusto distinctio aut id labore accusamus pariatur praesentium, itaque, unde necessitatibus sequi.\r\nPorro eos aspernatur natus et voluptates fugit voluptas labore assumenda error quaerat perspiciatis praesentium eum, nihil rem fugiat sapiente consequatur nesciunt sint repellendus, ipsam dolor quia est adipisci? Amet, fugit!\r\nProvident repellat a quam? Ut debitis reprehenderit officia? Recusandae ratione explicabo sed, aliquid itaque non, necessitatibus porro consequatur aut minus laudantium doloremque eos expedita ab reiciendis fugiat sapiente consequuntur? Hic.', 'В рассмотрении', '../files/Документ Microsoft Word.docx', '13.06.2022', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `fines`
--

CREATE TABLE `fines` (
  `id` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `sum` varchar(3000) COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `fines`
--

INSERT INTO `fines` (`id`, `name`, `sum`, `date`, `user_id`) VALUES
(8, 'Штраф за превышение скорости', '5000', '13.06.2022', 10),
(9, 'Штраф', '3000', '13.06.2022', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `image_link` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `dayNew` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image_link`, `title`, `text`, `date`, `dayNew`) VALUES
(23, '../img/новостьДня.png', 'Новость', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.', '05.06.2022', 1),
(24, '../img/новость1.png', 'Новость', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. ', '05.06.2022', 0),
(25, '../img/новость2.png', 'Новость', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. ', '05.06.2022', 0),
(26, '../img/новость3.png', 'Новость', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. ', '05.06.2022', 0),
(27, '../img/новость4.png', 'Новость', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. ', '05.06.2022', 0),
(37, '../img/background.png', 'Новость', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.', '13.06.2022', 1),
(38, '../img/новостьДня.png', 'Новость', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.', '14.06.2022', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `role` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'user'),
(2, 'administrator');

-- --------------------------------------------------------

--
-- Структура таблицы `taxes`
--

CREATE TABLE `taxes` (
  `id` int NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `sum` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `sum`, `date`, `user_id`) VALUES
(9, 'Налог за земельную собственность', '6700', '13.06.2022', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `image_link` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pasport` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inn` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `snils` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `image_link`, `firstName`, `lastName`, `pasport`, `inn`, `snils`, `email`, `pass`, `role`) VALUES
(10, '../img/kartinki-krasivyh-muzhchin-9.jpg', 'Кузя', 'Пельменев', '1111111111', '2315646546', '45668772222', 'kuPelmenev@bk.ru', '4ef401886ff326619b7edde46c3f946b', 1),
(11, '0', 'Олег', 'Котов', '000', '000', '000', 'olegAdmin@bk.ru', '0bdbf13af91a26a4a12dcda5719c579c', 2),
(13, '../img/imgUser.png', 'Клара', 'Поустовская', '7756733446', '2349875656', '60657756334', 'clara@bk.ru', '08853ecaddc84e349a6df6f7d90c246d', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `fines`
--
ALTER TABLE `fines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `fines`
--
ALTER TABLE `fines`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `appeals`
--
ALTER TABLE `appeals`
  ADD CONSTRAINT `appeals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `fines`
--
ALTER TABLE `fines`
  ADD CONSTRAINT `fines_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `taxes`
--
ALTER TABLE `taxes`
  ADD CONSTRAINT `taxes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
