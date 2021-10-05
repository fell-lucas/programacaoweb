CREATE DATABASE web;
USE web;

CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`password` VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `recipes` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`prepare_mode` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`general_informations` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`ingredients` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`user` INT,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user`) REFERENCES USERS
);