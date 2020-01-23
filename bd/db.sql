-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema simages
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema simages
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `simages` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `simages` ;

-- -----------------------------------------------------
-- Table `simages`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(45) NOT NULL,
  `descripcion_categoria` VARCHAR(45) NOT NULL,
  `fecha_creacion` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`telefono`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`telefono` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero_tel1` VARCHAR(15) NULL,
  `numero_tel2` VARCHAR(15) NULL,
  `numero_tel3` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`autor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`autor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero_autor` INT NOT NULL,
  `tipo_documento` VARCHAR(45) NOT NULL,
  `nombre_autor` VARCHAR(45) NOT NULL,
  `telefono_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_autor_telefono_idx` (`telefono_id` ASC),
  CONSTRAINT `fk_autor_telefono`
    FOREIGN KEY (`telefono_id`)
    REFERENCES `simages`.`telefono` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`pintura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`pintura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha_creacion` DATETIME NOT NULL,
  `tipo_pintura` VARCHAR(45) NOT NULL,
  `valor` DECIMAL(14,8) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  `ubicacion` VARCHAR(45) NULL,
  `tecnica_aplicada` VARCHAR(45) NOT NULL,
  `categoria_id` INT NOT NULL,
  `autor_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pintura_categoria1_idx` (`categoria_id` ASC),
  INDEX `fk_pintura_autor1_idx` (`autor_id` ASC),
  CONSTRAINT `fk_pintura_categoria1`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `simages`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pintura_autor1`
    FOREIGN KEY (`autor_id`)
    REFERENCES `simages`.`autor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`stock`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`stock` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `stockcol` VARCHAR(45) NULL,
  `pintura_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_stock_pintura1_idx` (`pintura_id` ASC),
  CONSTRAINT `fk_stock_pintura1`
    FOREIGN KEY (`pintura_id`)
    REFERENCES `simages`.`pintura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`insumo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`insumo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo_insumo` VARCHAR(45) NOT NULL,
  `precio_insumo` DECIMAL(14,8) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`direccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`direccion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_ciudad` VARCHAR(45) NOT NULL,
  `nombre_departamento` VARCHAR(45) NULL,
  `direccion_residencia` VARCHAR(45) NULL,
  `codigo_postal` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`tercero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`tercero` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo_tercero` VARCHAR(45) NOT NULL,
  `nombre_tercero` VARCHAR(45) NOT NULL,
  `numero_documento` VARCHAR(45) NOT NULL,
  `telefono_id` INT NOT NULL,
  `ciudad_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tercero_telefono1_idx` (`telefono_id` ASC),
  INDEX `fk_tercero_ciudad1_idx` (`ciudad_id` ASC),
  CONSTRAINT `fk_tercero_telefono1`
    FOREIGN KEY (`telefono_id`)
    REFERENCES `simages`.`telefono` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tercero_ciudad1`
    FOREIGN KEY (`ciudad_id`)
    REFERENCES `simages`.`direccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`tipo_pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`tipo_pago` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo_pago` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`factura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`factura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha_factura` DATETIME NULL,
  `pintura_id` INT NOT NULL,
  `fecha_creacion` DATETIME NULL,
  `tercero_id` INT NOT NULL,
  `tipo_pago_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_factura_pintura1_idx` (`pintura_id` ASC),
  INDEX `fk_factura_tercero1_idx` (`tercero_id` ASC),
  INDEX `fk_factura_tipo_pago1_idx` (`tipo_pago_id` ASC),
  CONSTRAINT `fk_factura_pintura1`
    FOREIGN KEY (`pintura_id`)
    REFERENCES `simages`.`pintura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_factura_tercero1`
    FOREIGN KEY (`tercero_id`)
    REFERENCES `simages`.`tercero` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_factura_tipo_pago1`
    FOREIGN KEY (`tipo_pago_id`)
    REFERENCES `simages`.`tipo_pago` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`empresa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nit` VARCHAR(45) NOT NULL,
  `nombre_empresa` VARCHAR(45) NOT NULL,
  `razon_social` VARCHAR(45) NOT NULL,
  `telefono_id` INT NOT NULL,
  `direccion_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_empresa_telefono1_idx` (`telefono_id` ASC),
  INDEX `fk_empresa_direccion1_idx` (`direccion_id` ASC),
  CONSTRAINT `fk_empresa_telefono1`
    FOREIGN KEY (`telefono_id`)
    REFERENCES `simages`.`telefono` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empresa_direccion1`
    FOREIGN KEY (`direccion_id`)
    REFERENCES `simages`.`direccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `password` TEXT NULL,
  `fecha_creacion` DATETIME NULL,
  `tercero_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_tercero1_idx` (`tercero_id` ASC),
  CONSTRAINT `fk_usuario_tercero1`
    FOREIGN KEY (`tercero_id`)
    REFERENCES `simages`.`tercero` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`pedido` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME NULL,
  `pedidocol` VARCHAR(45) NULL,
  `ciudad_id` INT NOT NULL,
  `tipo_pago_id` INT NOT NULL,
  `pintura_id` INT NOT NULL,
  `eatado` VARCHAR(45) NULL,
  `fecha_entrega` DATETIME NULL,
  `lugar_entrega` VARCHAR(45) NULL,
  `tipo_entrega` VARCHAR(45) NULL,
  `medio_entrega` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pedido_ciudad1_idx` (`ciudad_id` ASC),
  INDEX `fk_pedido_tipo_pago1_idx` (`tipo_pago_id` ASC),
  INDEX `fk_pedido_pintura1_idx` (`pintura_id` ASC),
  CONSTRAINT `fk_pedido_ciudad1`
    FOREIGN KEY (`ciudad_id`)
    REFERENCES `simages`.`direccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_tipo_pago1`
    FOREIGN KEY (`tipo_pago_id`)
    REFERENCES `simages`.`tipo_pago` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_pintura1`
    FOREIGN KEY (`pintura_id`)
    REFERENCES `simages`.`pintura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`detalle_pintura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`detalle_pintura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha_detalle` VARCHAR(45) NULL,
  `pintura_id` INT NOT NULL,
  `insumo_id` INT NOT NULL,
  `horas_dedicada` VARCHAR(45) NULL,
  `nota` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_detalle_pintura_pintura1_idx` (`pintura_id` ASC),
  INDEX `fk_detalle_pintura_insumo1_idx` (`insumo_id` ASC),
  CONSTRAINT `fk_detalle_pintura_pintura1`
    FOREIGN KEY (`pintura_id`)
    REFERENCES `simages`.`pintura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_pintura_insumo1`
    FOREIGN KEY (`insumo_id`)
    REFERENCES `simages`.`insumo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simages`.`stock_insumo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simages`.`stock_insumo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cantidad` INT(5) NULL,
  `insumo_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_stock_insumo_insumo1_idx` (`insumo_id` ASC),
  CONSTRAINT `fk_stock_insumo_insumo1`
    FOREIGN KEY (`insumo_id`)
    REFERENCES `simages`.`insumo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
