SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `taller_aeronautico` ;
CREATE SCHEMA IF NOT EXISTS `taller_aeronautico` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ;
USE `taller_aeronautico` ;

-- -----------------------------------------------------
-- Table `taller_aeronautico`.`status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`status` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`status` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(20) NOT NULL ,
  `tabla` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`usuario` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `create_at` DATETIME NULL ,
  `update_at` DATETIME NULL ,
  `user` VARCHAR(10) NOT NULL ,
  `password` VARCHAR(16) NOT NULL ,
  `token` VARCHAR(20) NULL ,
  `forget` VARCHAR(20) NULL ,
  `expire_at` DATETIME NULL ,
  `status_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_usuario_status1`
    FOREIGN KEY (`status_id` )
    REFERENCES `taller_aeronautico`.`status` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_usuario_status1` ON `taller_aeronautico`.`usuario` (`status_id` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`empresa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`empresa` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`empresa` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(70) NOT NULL ,
  `direccion` TEXT NULL ,
  `rif` VARCHAR(20) NOT NULL ,
  `tlf` VARCHAR(15) NULL ,
  `email` VARCHAR(45) NULL ,
  `create_at` DATETIME NULL ,
  `update_at` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `rif_UNIQUE` ON `taller_aeronautico`.`empresa` (`rif` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`cliente` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `status_id` INT NOT NULL ,
  `usuario_id` INT NOT NULL ,
  `empresa_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_cliente_status1`
    FOREIGN KEY (`status_id` )
    REFERENCES `taller_aeronautico`.`status` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_usuario1`
    FOREIGN KEY (`usuario_id` )
    REFERENCES `taller_aeronautico`.`usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_empresa1`
    FOREIGN KEY (`empresa_id` )
    REFERENCES `taller_aeronautico`.`empresa` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_cliente_status1` ON `taller_aeronautico`.`cliente` (`status_id` ASC) ;

CREATE INDEX `fk_cliente_usuario1` ON `taller_aeronautico`.`cliente` (`usuario_id` ASC) ;

CREATE INDEX `fk_cliente_empresa1` ON `taller_aeronautico`.`cliente` (`empresa_id` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`tipo_aeronave`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`tipo_aeronave` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`tipo_aeronave` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`aeronave`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`aeronave` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`aeronave` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `siglas` VARCHAR(45) NOT NULL COMMENT 'las siglas del aeronave, esta es unica para cada maquina' ,
  `certificado` DATETIME NOT NULL COMMENT 'Certificado de Aeronavegabilidad (licencia)' ,
  `serial` VARCHAR(45) NOT NULL ,
  `horasTT` FLOAT NULL COMMENT 'Horas A/F al instalar el Motor' ,
  `horametro` FLOAT NULL COMMENT 'cantidad de horas indicadas en el horametro (componente de la aeronave)' ,
  `ciclos` FLOAT NULL ,
  `create_at` DATETIME NULL ,
  `update_at` DATETIME NULL ,
  `cliente_id` INT NOT NULL ,
  `tipo_aeronave_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_aeronave_cliente1`
    FOREIGN KEY (`cliente_id` )
    REFERENCES `taller_aeronautico`.`cliente` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aeronave_tipo_aeronave1`
    FOREIGN KEY (`tipo_aeronave_id` )
    REFERENCES `taller_aeronautico`.`tipo_aeronave` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'Todas aquellas aeronaves existentes' ;

CREATE INDEX `fk_aeronave_cliente1` ON `taller_aeronautico`.`aeronave` (`cliente_id` ASC) ;

CREATE INDEX `fk_aeronave_tipo_aeronave1` ON `taller_aeronautico`.`aeronave` (`tipo_aeronave_id` ASC) ;

CREATE UNIQUE INDEX `siglas_UNIQUE` ON `taller_aeronautico`.`aeronave` (`siglas` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`categoria_componente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`categoria_componente` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`categoria_componente` (
  `id` INT NOT NULL ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB, 
COMMENT = 'clasificacion de los componentes, una forma de organizar y b' /* comment truncated */ ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`tipo_componente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`tipo_componente` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`tipo_componente` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `id_parte` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`componente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`componente` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`componente` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` TEXT NULL ,
  `horasTT` FLOAT NULL ,
  `horasTOS` FLOAT NULL ,
  `serial` VARCHAR(20) NULL ,
  `ciclos` FLOAT NULL ,
  `frecuencia_date` DATETIME NULL COMMENT 'frecuencia de cambio por fecha' ,
  `frecuencia_hours` FLOAT NULL COMMENT 'frecuencia de cambio por horas' ,
  `categoria_componente_id` INT NOT NULL ,
  `tipo_componente_id` INT NOT NULL ,
  `aeronave_id` INT NOT NULL ,
  `aeronave_siglas` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_componente_categoria_componente1`
    FOREIGN KEY (`categoria_componente_id` )
    REFERENCES `taller_aeronautico`.`categoria_componente` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_componente_tipo_componente1`
    FOREIGN KEY (`tipo_componente_id` )
    REFERENCES `taller_aeronautico`.`tipo_componente` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_componente_aeronave1`
    FOREIGN KEY (`aeronave_id` , `aeronave_siglas` )
    REFERENCES `taller_aeronautico`.`aeronave` (`id` , `siglas` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'Componentes o partes de la aeronave' ;

CREATE INDEX `fk_componente_categoria_componente1` ON `taller_aeronautico`.`componente` (`categoria_componente_id` ASC) ;

CREATE INDEX `fk_componente_tipo_componente1` ON `taller_aeronautico`.`componente` (`tipo_componente_id` ASC) ;

CREATE INDEX `fk_componente_aeronave1` ON `taller_aeronautico`.`componente` (`aeronave_id` ASC, `aeronave_siglas` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`cambio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`cambio` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`cambio` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `motivo` TEXT NULL COMMENT 'motivo de remocion' ,
  `create_at` DATETIME NULL ,
  `update_at` DATETIME NULL ,
  `componente_nuevo` INT NULL ,
  `componente_removido` INT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_cambio_componente1`
    FOREIGN KEY (`componente_nuevo` )
    REFERENCES `taller_aeronautico`.`componente` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cambio_componente2`
    FOREIGN KEY (`componente_removido` )
    REFERENCES `taller_aeronautico`.`componente` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'Cambio de componentes' ;

CREATE INDEX `fk_cambio_componente1` ON `taller_aeronautico`.`cambio` (`componente_nuevo` ASC) ;

CREATE INDEX `fk_cambio_componente2` ON `taller_aeronautico`.`cambio` (`componente_removido` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`personas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`personas` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`personas` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `cedula` VARCHAR(12) NULL ,
  `tlf` VARCHAR(14) NULL ,
  `email` VARCHAR(45) NULL ,
  `create_at` DATETIME NULL ,
  `update_at` DATETIME NULL ,
  `empresa_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_personas_empresa1`
    FOREIGN KEY (`empresa_id` )
    REFERENCES `taller_aeronautico`.`empresa` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_personas_empresa1` ON `taller_aeronautico`.`personas` (`empresa_id` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`empleado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`empleado` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`empleado` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `licencia` VARCHAR(45) NULL ,
  `usuario_id` INT NOT NULL ,
  `personas_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_empleado_usuario1`
    FOREIGN KEY (`usuario_id` )
    REFERENCES `taller_aeronautico`.`usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleado_personas1`
    FOREIGN KEY (`personas_id` )
    REFERENCES `taller_aeronautico`.`personas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_empleado_usuario1` ON `taller_aeronautico`.`empleado` (`usuario_id` ASC) ;

CREATE INDEX `fk_empleado_personas1` ON `taller_aeronautico`.`empleado` (`personas_id` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`servicios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`servicios` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`servicios` (
  `idservicios` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`idservicios`) )
ENGINE = InnoDB, 
COMMENT = 'categorias sobre servicios que se pueden hacer a la aeronave' ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`historial`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`historial` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`historial` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` TEXT NULL ,
  `orden` VARCHAR(20) NULL COMMENT 'orden de trabajo' ,
  `created` DATETIME NULL ,
  `updated` DATETIME NULL ,
  `hora_aeronave` FLOAT NULL COMMENT 'cantidad de horas que posee la aeronave al hacer el servicio' ,
  `empleado_id` INT NOT NULL ,
  `empresa_id` INT NOT NULL COMMENT 'Es posible que sea un outsourcing' ,
  `servicios_idservicios` INT NOT NULL ,
  `cambio_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_bitacora_empleado1`
    FOREIGN KEY (`empleado_id` )
    REFERENCES `taller_aeronautico`.`empleado` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bitacora_empresa1`
    FOREIGN KEY (`empresa_id` )
    REFERENCES `taller_aeronautico`.`empresa` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bitacora_servicios1`
    FOREIGN KEY (`servicios_idservicios` )
    REFERENCES `taller_aeronautico`.`servicios` (`idservicios` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bitacora_cambio1`
    FOREIGN KEY (`cambio_id` )
    REFERENCES `taller_aeronautico`.`cambio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'aquellos servicios que van asociados a la aeronave (inspecci' /* comment truncated */ ;

CREATE INDEX `fk_bitacora_empleado1` ON `taller_aeronautico`.`historial` (`empleado_id` ASC) ;

CREATE INDEX `fk_bitacora_empresa1` ON `taller_aeronautico`.`historial` (`empresa_id` ASC) ;

CREATE INDEX `fk_bitacora_servicios1` ON `taller_aeronautico`.`historial` (`servicios_idservicios` ASC) ;

CREATE INDEX `fk_bitacora_cambio1` ON `taller_aeronautico`.`historial` (`cambio_id` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`boletin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`boletin` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`boletin` (
  `id` INT NOT NULL ,
  `boletin_nro` VARCHAR(45) NOT NULL ,
  `mtc` VARCHAR(45) NOT NULL ,
  `fecha` DATETIME NULL ,
  `situacion` VARCHAR(45) NOT NULL ,
  `descripcion` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB, 
COMMENT = 'Normas o revisiones que se deben aplicar a las aeronaves' ;

CREATE UNIQUE INDEX `boletin_nro_UNIQUE` ON `taller_aeronautico`.`boletin` (`boletin_nro` ASC) ;


-- -----------------------------------------------------
-- Table `taller_aeronautico`.`aplicacion_boletin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_aeronautico`.`aplicacion_boletin` ;

CREATE  TABLE IF NOT EXISTS `taller_aeronautico`.`aplicacion_boletin` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `boletin_id` INT NOT NULL ,
  `aeronave_id` INT NOT NULL ,
  `recurrente_horas` FLOAT NULL ,
  `recurrente_fecha` DATETIME NULL ,
  `fecha_aplicacion` DATETIME NULL ,
  `aplicable` TINYINT(1)  NULL ,
  `create_at` DATETIME NULL ,
  `update_at` DATETIME NULL ,
  `empleado_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `boletin_id`, `aeronave_id`) ,
  CONSTRAINT `fk_boletin_has_aeronave_boletin1`
    FOREIGN KEY (`boletin_id` )
    REFERENCES `taller_aeronautico`.`boletin` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boletin_has_aeronave_aeronave1`
    FOREIGN KEY (`aeronave_id` )
    REFERENCES `taller_aeronautico`.`aeronave` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aplicacion_boletin_empleado1`
    FOREIGN KEY (`empleado_id` )
    REFERENCES `taller_aeronautico`.`empleado` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_boletin_has_aeronave_aeronave1` ON `taller_aeronautico`.`aplicacion_boletin` (`aeronave_id` ASC) ;

CREATE INDEX `fk_aplicacion_boletin_empleado1` ON `taller_aeronautico`.`aplicacion_boletin` (`empleado_id` ASC) ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
