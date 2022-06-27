DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  `email` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  `object` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  `message` TEXT NOT NULL COLLATE 'utf8_general_ci',
  `created_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) COLLATE = 'utf8_general_ci' ENGINE = InnoDB;
