CREATE TABLE `users` 
(
	`id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`username` varchar(255),
	`password` varchar(255),
	`name` varchar(255),
	`surname1` varchar(255),
	`surname2` varchar(255),
	`date_of_birth` date,
	`country_from` int,
	`country_living` int,
	`created_at` TIMESTAMP,
	`role_id` int
);

CREATE TABLE `roles` 
(
	`id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`description` varchar(255)
);

CREATE TABLE `articles` 
(
	`id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`title` varchar(255),
	`description` varchar(255),
	`content` varchar(255),
	`author` int
);

CREATE TABLE `file` 
(
	`id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(255),
	`extension` varchar(255),
	`version` int,
	`link` int
);

CREATE TABLE `portfolio` 
(
	`id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`file_id` int,
	`image_name` varchar(255),
	`image_link` varchar(255)
);

CREATE TABLE `files_log` 
(
	`id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`file_id` int,
	`user_id` int,
	`date_of_upload` TIMESTAMP,
	`time_of_upload` TIMESTAMP
);

ALTER TABLE `files_log` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `files_log` ADD FOREIGN KEY (`file_id`) REFERENCES `file` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

ALTER TABLE `articles` ADD FOREIGN KEY (`author`) REFERENCES `users` (`id`);

ALTER TABLE `portfolio` ADD FOREIGN KEY (`file_id`) REFERENCES `file` (`id`);
