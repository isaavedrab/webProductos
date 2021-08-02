-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema dai
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dai
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dai` DEFAULT CHARACTER SET utf8 ;
USE `dai` ;

-- -----------------------------------------------------
-- Table `dai`.`imagen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dai`.`imagen` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(200) NOT NULL,
  `imagen` VARCHAR(100) NOT NULL,
  `texto` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dai`.`perfilusuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dai`.`perfilusuario` (
  `idPerfil` INT NOT NULL AUTO_INCREMENT,
  `nomPerfil` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPerfil`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
ROW_FORMAT = DYNAMIC;


-- -----------------------------------------------------
-- Table `dai`.`url`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dai`.`url` (
  `idurl` INT NOT NULL AUTO_INCREMENT,
  `url` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idurl`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dai`.`perfilusuario_has_url`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dai`.`perfilusuario_has_url` (
  `perfilUsuario_idPerfil` INT NOT NULL,
  `url_idurl` INT NOT NULL,
  PRIMARY KEY (`perfilUsuario_idPerfil`, `url_idurl`),
  INDEX `fk_perfilUsuario_has_url_url1_idx` (`url_idurl` ASC) VISIBLE,
  INDEX `fk_perfilUsuario_has_url_perfilUsuario1_idx` (`perfilUsuario_idPerfil` ASC) VISIBLE,
  CONSTRAINT `fk_perfilUsuario_has_url_perfilUsuario1`
    FOREIGN KEY (`perfilUsuario_idPerfil`)
    REFERENCES `dai`.`perfilusuario` (`idPerfil`),
  CONSTRAINT `fk_perfilUsuario_has_url_url1`
    FOREIGN KEY (`url_idurl`)
    REFERENCES `dai`.`url` (`idurl`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dai`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dai`.`producto` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `producto` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `valor` INT NOT NULL,
  `idimagen` INT NULL DEFAULT NULL,
  PRIMARY KEY (`idproducto`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dai`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dai`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apepaterno` VARCHAR(45) NOT NULL,
  `apematerno` VARCHAR(45) NOT NULL,
  `rut` VARCHAR(12) NOT NULL,
  `edad` INT NOT NULL,
  `correo` VARCHAR(25) NOT NULL,
  `telefono` VARCHAR(12) NOT NULL,
  `comuna` VARCHAR(45) NOT NULL,
  `region` VARCHAR(45) NOT NULL,
  `nombreusuario` VARCHAR(45) NOT NULL,
  `contrasenna` VARCHAR(45) NOT NULL,
  `idperfil` INT NOT NULL,
  `idimagen` INT NULL DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `idperfil_idx` (`idperfil` ASC) VISIBLE,
  INDEX `idfoto_idx` (`idimagen` ASC) VISIBLE,
  CONSTRAINT `idperfil`
    FOREIGN KEY (`idperfil`)
    REFERENCES `dai`.`perfilusuario` (`idPerfil`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `dai`.`perfilUsuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `dai`;
INSERT INTO `dai`.`perfilUsuario` (`idPerfil`, `nomPerfil`) VALUES (DEFAULT, 'admin');
INSERT INTO `dai`.`perfilUsuario` (`idPerfil`, `nomPerfil`) VALUES (DEFAULT, 'cliente');

COMMIT;


