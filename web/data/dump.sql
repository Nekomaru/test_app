﻿-------------------------------------------------------------------------------
-- Export Status
-------------------------------------------------------------------------------
-- Date:           03.05.2012 18:41:58
-- Server version: 5.5.23
-- Host:           localhost
-- Database:       test_app
-- User:           test_app
-------------------------------------------------------------------------------
-- Options
-------------------------------------------------------------------------------
-- compatible:               None
-- charset:                  latin1
-- add-database-definition:  No
-- use-drop-create-database: Yes
-- only-structure:           No
-- add-lock:                 No
-- disable-keys:             No
-- single-transactions:      No
-- use-replace:              No
-- use-insert-delayed:       No
-- use-insert-ignore:        No
-------------------------------------------------------------------------------
-- Objects
-------------------------------------------------------------------------------
-- Tables:   2/2
-- Views:    0/0
-- Routines: 0/0
-- Events:   0/0
-------------------------------------------------------------------------------

SET NAMES 'latin1';

--
-- Drop tables
--

DROP TABLE IF EXISTS `posts`;
DROP TABLE IF EXISTS `password`;

--
-- Definition for table "posts"
--

CREATE TABLE `posts`(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `post_name` VARCHAR(100) COLLATE utf8_general_ci NOT NULL,
  `post_content` TEXT NOT NULL,
  `post_date` DATE NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB
AUTO_INCREMENT = 18
COLLATE = latin1_swedish_ci
ROW_FORMAT = COMPACT;

--
-- Definition for table "password"
--

CREATE TABLE `password`(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `password` VARCHAR(256) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB
AUTO_INCREMENT = 2
COLLATE = latin1_swedish_ci
ROW_FORMAT = COMPACT;

--
-- Data for table "posts"
--

INSERT INTO `posts` VALUES
    (16, 'Лейбниц Готфрид Вильгельм', 'Готфрид Вильгельм родился 1 июля 1646 года[3][17] в семье профессора философии морали (этики) Лейпцигского университета Фридриха Лейбнюца (нем. Friedrich Leibn&#252;tz или нем. Friedrich Leibniz) и Катерины Шмукк (нем. Catherina Schmuck), которая была дочерью выдающегося профессора юриспруденции[18][19][20][21][22][23][24]. Отец Лейбница был сербо-лужицкого происхождения[25][26]. По материнской линии Готфрид Вильгельм Лейбниц, по-видимому, имел чисто немецких предков[22].\r\nОтец Лейбница очень рано заметил гениальность своего сына и старался развить в нём любознательность, часто рассказывая ему маленькие эпизоды из священной и светской истории; по словам самого Лейбница, эти рассказы глубоко запали ему в душу и были самым сильным впечатлением его раннего детства[22]. Лейбницу не было и семи лет, когда он потерял отца[К 1]; его отец умер, оставив после себя большую личную библиотеку.', '2012-05-03'),
    (17, 'Битва при Эвримедонте', 'Битва при Эвримедонте — двойное сражение, происходившее на море и на суше между Делосским союзом, в который входили Афины и их союзники, и Персидской империей Ксеркса I. Оно произошло в 469 или 466 г. до н. э. вблизи от устья реки Эвримедонт (ныне Кёпрючай) в Памфилии, на полуострове Малая Азия (современная Турция). Битва является составной частью греко-персидских войн.\r\nДелосский союз был создан Афинами и многими городами-государствами бассейна Эгейского моря, чтобы продолжить войну с Персией, которая началась с первого и второго персидских вторжений в Грецию (492—490 и 480—479 годы до н. э. соответственно). В период после битв при Платеях и Микале, которыми закончилось второе вторжение, греческие союзники перешли в наступление и осадили города Сест и Византий. Делосский союз затем продолжил войну самостоятельно, и его войска продолжали атаковать персидские базы в Эгейском море в следующем десятилетии.', '2012-05-03');

--
-- Data for table "password"
--

INSERT INTO `password` VALUES
    (1, '112392');

