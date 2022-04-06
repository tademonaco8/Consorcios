CREATE DATABASE 'consorcios';
USE 'consorcios';

CREATE TABLE `consorcios`.`servicios_publicos` (
`id` INT NOT NULL ,
`proveedor` VARCHAR(45) NOT NULL ,
`motivo` VARCHAR(45) NULL ,
`comprobante` VARCHAR(45) NOT NULL ,
`fechadepago` DATE NOT NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`abono_servicios` (
`id` INT NOT NULL ,
`proveedor` VARCHAR(45) NOT NULL ,
`motivo` VARCHAR(45) NULL ,
`comprobante` VARCHAR(45) NOT NULL ,
`fechadepago` DATE NOT NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`sysb` (
`id` INT NOT NULL ,
`proveedor` VARCHAR(45) NOT NULL ,
`poliza` VARCHAR(45) NULL ,
`comprobante` VARCHAR(45) NOT NULL ,
`fechadepago` DATE NOT NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`fdr` (
`id` INT NOT NULL ,
`fechadepago` DATE NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`erogextr` (
`id` INT NOT NULL ,
`proveedor` VARCHAR(45) NOT NULL ,
`motivo` VARCHAR(45) NULL ,
`comprobante` VARCHAR(45) NOT NULL ,
`fechadepago` DATE NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`impuestos` (
`id` INT NOT NULL ,
`fechadepago` DATE NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

GO