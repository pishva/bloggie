
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- username
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `username`;

CREATE TABLE `username`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `enabled` TINYINT(1) DEFAULT 1 NOT NULL,
    `login_count` INTEGER DEFAULT 0 NOT NULL,
    `failed_login_count` INTEGER DEFAULT 0 NOT NULL,
    `uname` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `modified` DATETIME NOT NULL,
    `note` VARCHAR(255),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `uname` (`uname`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- user_access
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user_access`;

CREATE TABLE `user_access`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER NOT NULL,
    `access` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `user_access_FI_1` (`user_id`),
    CONSTRAINT `user_access_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `username` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- news_subject
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `news_subject`;

CREATE TABLE `news_subject`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `is_desc` TINYINT(1) NOT NULL,
    `short_desc` VARCHAR(1000) NOT NULL,
    `desc` TEXT NOT NULL,
    `prio` INTEGER NOT NULL,
    `category` VARCHAR(255) NOT NULL,
    `auter` VARCHAR(255),
    `date` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
