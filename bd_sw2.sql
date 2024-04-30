SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `sts_homes_tops`;
CREATE TABLE IF NOT EXISTS `sts_homes_tops` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_top` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_top` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_btn_top` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_btn_top` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sts_homes_tops` (`id`, `title_top`, `description_top`, `link_btn_top`, `txt_btn_top`, `image`, `created`, `modified`) VALUES
(1, 'Temos a solução que a sua empresa precisa!', 'Aenean fermentum sapien sed dolor elementum tincidunt et.',
 'http://localhost/cursophpoop/contato', 'Contato', 'topo.jpg', '2024-04-17 23:47:36', NULL);
COMMIT;