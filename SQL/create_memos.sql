-- -----------------------------------------------------
-- メモ 
-- -----------------------------------------------------
CREATE TABLE `memos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `contents` VARCHAR(255) NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  `valid` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
