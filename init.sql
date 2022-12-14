CREATE DATABASE `aClockDB`;
USE `aClockDB`;
CREATE TABLE `users` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE `reminders` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `name` VARCHAR(50) NOT NULL,
    `time-start` VARCHAR(1000),
    `time-end` VARCHAR(69),
    `comments` VARCHAR(999)
);