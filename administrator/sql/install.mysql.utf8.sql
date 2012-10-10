CREATE TABLE IF NOT EXISTS `#__school_configuration` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`school_name` VARCHAR(255)  NOT NULL ,
`school_address` TEXT NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

