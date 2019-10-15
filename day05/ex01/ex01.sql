CREATE TABLE IF NOT EXISTS `ft_table` (
    `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `login` varchar(8) NOT NULL DEFAULT 'toto',
    `group` ENUM('staff', 'student', 'other') NOT NULL,
    `creation_date` DATE NOT NULL);