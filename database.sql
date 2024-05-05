CREATE TABLE `account` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL,
    `number` VARCHAR(20) UNIQUE,
    `email` VARCHAR(255) UNIQUE,
    `username` VARCHAR(100) UNIQUE,
    `password` VARCHAR(255) NOT NULL
);
