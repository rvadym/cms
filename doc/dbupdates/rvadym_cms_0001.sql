
-- -----------------------------------------------------
-- Table `rvadym_cms`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rvadym_cms` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `spot` VARCHAR(255) NULL,
  `html` TEXT NULL,
  `is_enabled` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;