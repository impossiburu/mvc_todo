CREATE TABLE `your_db_name`.`todo` ( 
    `id` TINYINT(11) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(255) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , `text` TEXT NOT NULL , PRIMARY KEY (`id`)) 
ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
