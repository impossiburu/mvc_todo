CREATE TABLE `todo` ( 
    `id` TINYINT(11) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(255) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `text` TEXT NOT NULL , 
    PRIMARY KEY (`id`)) 
ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE `users` ( 
    `id` TINYINT(11) NOT NULL AUTO_INCREMENT , 
    `user` VARCHAR(255) NOT NULL , 
    `password` VARCHAR(255) NOT NULL ,
     PRIMARY KEY (`id`)) 
ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
