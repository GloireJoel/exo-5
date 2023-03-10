-- MySQL Script generated by MySQL Workbench
-- 02/02/23 21:59:36
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema shops
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema shops
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `shops` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `shops` ;

-- -----------------------------------------------------
-- Table `shops`.`magasin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shops`.`magasin` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shops`.`article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shops`.`article` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `designation` VARCHAR(255) NOT NULL,
  `prix` DOUBLE NOT NULL,
  `magasin_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_article_magasin_idx` (`magasin_id` ASC),
  CONSTRAINT `fk_article_magasin`
    FOREIGN KEY (`magasin_id`)
    REFERENCES `shops`.`magasin` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
