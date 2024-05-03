CREATE TABLE `account` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `surname` VARCHAR(255) NOT NULL,
  `number` VARCHAR(255),
  `email` VARCHAR(255),
  `username` VARCHAR(255),
  `password` VARCHAR(255),
  PRIMARY KEY (`id`),
  UNIQUE KEY (`username`)
);
