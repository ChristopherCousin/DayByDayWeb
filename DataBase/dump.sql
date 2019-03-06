CREATE TABLE `users` 
(
	`id` int,
	`username` varchar(255),
	`password` varchar(255),
	`privilegeID` int
);

CREATE TABLE `imageUrls` 
(
	`id` int,
	`name` varchar(255),
	`path` varchar(255)
);

CREATE TABLE `privileges` 
(
	`id` int,
	`level` int
);

ALTER TABLE `users` ADD FOREIGN KEY (`privilegeID`) REFERENCES `privileges` (`id`);
