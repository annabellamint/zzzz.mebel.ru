# ************************************************************
# Sequel Pro SQL dump
# Версия 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Адрес: 127.0.0.1 (MySQL 5.5.5-10.4.11-MariaDB)
# Схема: mebelanna
# Время создания: 2020-07-09 17:53:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы catalog
# ------------------------------------------------------------

DROP TABLE IF EXISTS `catalog`;

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `sell` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `catalog` WRITE;
/*!40000 ALTER TABLE `catalog` DISABLE KEYS */;

INSERT INTO `catalog` (`id`, `category`, `name`, `brand`, `sell`, `description`)
VALUES
	(1,1,'Кровать 1','МебельПрофи',15000,''),
	(2,2,'Стул с мягкой спинкой','Мебель Профи',3000,''),
	(3,2,'Стул с мягкой спинкой','Мебель Профи',3000,''),
	(4,3,'Стол 1','Мебель Профи',3000,''),
	(5,3,'Стол 2','Мебель Профи',3000,''),
	(6,4,'Кресло','Мебель Профи',3000,''),
	(7,1,'Кровать 1','МебельПрофи',15000,''),
	(8,4,'Кресло','Мебель Профи',3000,''),
	(9,3,'Стол 1','Мебель Профи',3000,''),
	(10,4,'Кресло','Мебель Профи',3000,'');

/*!40000 ALTER TABLE `catalog` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`id`, `name`, `description`)
VALUES
	(1,'Кровати','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum faucibus ullamcorper magna, at suscipit tortor efficitur vel. Quisque ipsum diam, mattis rhoncus scelerisque a, imperdiet in lectus. Nam non eros sed sapien congue varius. Nunc vehicula ac ante sed suscipit. Donec eget diam eleifend, elementum nibh eget, rutrum felis. Integer lacinia leo urna, sed efficitur leo elementum vel. Nullam vitae enim commodo, hendrerit lacus ac, placerat justo. Curabitur eu quam vel tortor ultricies tempus sit amet sit amet metus. Duis eget metus ac erat tincidunt venenatis. Phasellus sem lorem, placerat in sagittis sed, lobortis vitae felis.'),
	(2,'Стулья','Nullam posuere, sapien et consequat luctus, ante ligula euismod nunc, id laoreet libero nisl et metus. Etiam dui risus, placerat in risus vel, maximus dapibus turpis. Mauris ut tincidunt mauris. Pellentesque vel aliquet nulla. Cras ligula augue, faucibus sed dui non, pharetra varius purus. Vivamus ac mollis lorem. Nunc condimentum lobortis massa, non rhoncus justo convallis ultrices. Fusce finibus, ante at consectetur sagittis, justo purus malesuada felis, vel laoreet tellus ex quis nisl. Ut nibh lacus, accumsan et accumsan non, sagittis pellentesque erat. Vivamus malesuada ipsum nibh, eget dictum ex posuere et. Donec fringilla lacinia orci, at rhoncus velit congue in.'),
	(3,'Столы','Nullam vehicula fringilla faucibus. Donec ultricies vestibulum tellus ac mollis. Sed in neque malesuada, condimentum metus vel, interdum turpis. Phasellus sed nisi et urna placerat blandit id ut dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam sed lacus dui. Quisque faucibus aliquet nisi. Phasellus leo nibh, maximus at feugiat vitae, pretium et massa.'),
	(4,'Кресла','But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?');

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `acess` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `name`, `email`, `login`, `pass`, `acess`)
VALUES
	(1,'Анна','123@mail.ru','Anna','12345','admin'),
	(2,'Катя','2345@mail.ru','Kate','12345','user');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `acess`, `status`)
VALUES
	(2,'','Anna','anna@mail.ru','12345','',NULL),
	(5,'','Анна','mail@mail.ru','$2y$10$XSt0JBz7.k.9QGLEdrx3t.7bz2s4oHomkiU4yLJNcvipFX/SNkyH6','',NULL),
	(6,'','Таня','mail_1@mail.ru','$2y$10$yPzwQUBRCxgX856T3rF94e2qOQA/XiXOH2Nr/yUO325ep2uGgvSVC','admin',NULL),
	(7,'','Maria','56@mail.ru','$2y$10$h5Yq91daUk1XhrQT.yYcteTRy2F3o23RTMloH.QwwxTdV8If7v/ZG','',NULL),
	(8,'','Ксю','560@mail.ru','$2y$10$QQv5Gtkkb1cKogHJNBw4A.KQmw.G/zV.iiBhOQ1jLNy8KD.2iXyw.','',NULL),
	(9,'Катя','Катя','5600@mail.ru','$2y$10$hMu1Q3z2eA6GQNwCCjtSd.hZLIVEx01OVClpxGIiZtDwVsK5t4zvu','user','ban'),
	(10,'Сергей','Сергей','1@mail.ru','$2y$10$b0KwxOggFgDp1jAY7osY.unJGi95A0TMWYIgYq24fVFPU6SQDVr8m','User','ok');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
