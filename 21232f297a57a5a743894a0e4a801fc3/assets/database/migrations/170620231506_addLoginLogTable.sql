ALTER TABLE `accounts` DROP `last_login`;

CREATE TABLE
    `access_log` (
        `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
        `ip` VARCHAR(255) NULL,
        `device_name` VARCHAR(255) NULL,
        `browser_name` VARCHAR(255) NULL,
        `login_at` DATETIME NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

ALTER TABLE `access_log`
ADD
    `account_id` BIGINT NOT NULL AFTER `id`;

ALTER TABLE `access_log` ADD INDEX(`account_id`);