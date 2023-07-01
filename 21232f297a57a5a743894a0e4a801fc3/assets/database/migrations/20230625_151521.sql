SET time_zone = "+00:00";

ALTER TABLE `access_log`
ADD
    `city` VARCHAR(255) NULL AFTER `browser_name`,
ADD
    `region` VARCHAR(255) NULL AFTER `city`,
ADD
    `country` VARCHAR(255) NULL AFTER `region`,
ADD
    `timezone` VARCHAR(255) NULL AFTER `country`,
ADD
    `carrier` VARCHAR(255) NULL AFTER `timezone`;

ALTER TABLE
    `access_log` DROP `city`,
    DROP `region`,
    DROP `country`,
    DROP `timezone`,
    DROP `carrier`;

ALTER TABLE `access_log`
ADD
    `os_platform` VARCHAR(255) NULL AFTER `browser_name`;