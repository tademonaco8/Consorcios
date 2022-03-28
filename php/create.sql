CREATE TABLE `consorcios`.`servicios_publicos` (
`id` INT NOT NULL ,
`proveedor` VARCHAR(45) NOT NULL ,
`motivo` VARCHAR(45) NULL ,
`comprobante` VARCHAR(45) NOT NULL ,
`fecha_de_pago` DATE NOT NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`abono_servicios` (
`id` INT NOT NULL ,
`proveedor` VARCHAR(45) NOT NULL ,
`motivo` VARCHAR(45) NULL ,
`comprobante` VARCHAR(45) NOT NULL ,
`fecha_de_pago` DATE NOT NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`sysb` (
`id` INT NOT NULL ,
`proveedor` VARCHAR(45) NOT NULL ,
`poliza` VARCHAR(45) NULL ,
`comprobante` VARCHAR(45) NOT NULL ,
`fecha_de_pago` DATE NOT NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`fdr` (
`id` INT NOT NULL ,
`fecha_de_pago` DATE NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`erogextr` (
`id` INT NOT NULL ,
`fecha_de_pago` DATE NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `consorcios`.`impuestos` (
`id` INT NOT NULL ,
`fecha_de_pago` DATE NULL ,
`importe` FLOAT NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

GO