-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Table `recette_liste`.`Categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Categorie` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categorie` VARCHAR(100) NOT NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recette_liste`.`Recette`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Recette` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  `description` TEXT NULL COMMENT '\n',
  `temps_preparation` INT NULL,
  `temps_cuisson` INT NULL,
  `nombre_de_portions` INT NULL,
  `Categorie_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Recette_Categorie1_idx` (`Categorie_id` ASC),
  CONSTRAINT `fk_Recette_Categorie1`
    FOREIGN KEY (`Categorie_id`)
    REFERENCES `Categorie` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recette_liste`.`Etapes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Etapes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero_etape` VARCHAR(45) NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recette_liste`.`Recette_Etape`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Recette_Etape` (
  `recette_id` INT NOT NULL,
  `etape_id` INT NOT NULL,
  `ordre` INT NOT NULL,
  PRIMARY KEY (`recette_id`, `etape_id`),
  INDEX `fk_Etapes_has_Recette_Recette1_idx` (`etape_id` ASC),
  INDEX `fk_Etapes_has_Recette_Etapes1_idx` (`recette_id` ASC),
  CONSTRAINT `fk_Etapes_has_Recette_Etapes1`
    FOREIGN KEY (`recette_id`)
    REFERENCES `Etapes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etapes_has_Recette_Recette1`
    FOREIGN KEY (`etape_id`)
    REFERENCES `Recette` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
