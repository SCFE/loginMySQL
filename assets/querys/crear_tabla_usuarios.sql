CREATE TABLE `company`.`usuarios` (
  `id` INT NOT NULL,
  `usuario` VARCHAR(60) NOT NULL,
  `password` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;