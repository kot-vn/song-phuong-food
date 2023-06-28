CREATE DATABASE songphuongfood;

USE songphuongfood;SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

CREATE TABLE
    `accounts` (
        `id` bigint(20) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` text NOT NULL,
        `display_name` varchar(100) NOT NULL COMMENT 'full name',
        `phone_number` varchar(20) NOT NULL,
        `address` varchar(255) NOT NULL,
        `role_id` bigint(20) NOT NULL,
        `last_login` datetime DEFAULT NULL,
        `is_active` tinyint(1) NOT NULL DEFAULT 1,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL COMMENT 'role id',
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL COMMENT 'role id',
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL COMMENT 'role id'
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `data_types` (
        `id` bigint(20) NOT NULL,
        `name` varchar(255) NOT NULL,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `images` (
        `id` bigint(20) NOT NULL,
        `image_type_id` bigint(20) NOT NULL,
        `name` varchar(255) NOT NULL,
        `product_id` bigint(20) DEFAULT NULL,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `image_types` (
        `id` bigint(20) NOT NULL,
        `name` varchar(255) NOT NULL,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `master_datas` (
        `id` bigint(20) NOT NULL,
        `data_type` bigint(20) NOT NULL,
        `content` text NOT NULL,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `products` (
        `id` bigint(20) NOT NULL,
        `category_id` bigint(20) NOT NULL,
        `name` varchar(255) NOT NULL,
        `price` varchar(255) NOT NULL,
        `ingredients` varchar(500) NOT NULL,
        `manual` varchar(500) NOT NULL,
        `preserve` varchar(500) NOT NULL,
        `expiry_date` date DEFAULT NULL,
        `weight` int(11) NOT NULL,
        `origin` varchar(255) NOT NULL,
        `meta_description` varchar(500) NOT NULL,
        `description` text NOT NULL,
        `is_active` tinyint(1) NOT NULL DEFAULT 1,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `product_categories` (
        `id` bigint(20) NOT NULL,
        `name` varchar(255) NOT NULL,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `promotions` (
        `id` bigint(20) NOT NULL,
        `promotion_type_id` bigint(20) NOT NULL,
        `content` int(11) NOT NULL,
        `description` int(11) NOT NULL,
        `is_active` tinyint(1) NOT NULL DEFAULT 1,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `promotion_types` (
        `id` bigint(20) NOT NULL,
        `name` varchar(255) NOT NULL,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `roles` (
        `id` bigint(20) NOT NULL,
        `name` varchar(50) NOT NULL,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE
    `shops` (
        `id` bigint(20) NOT NULL,
        `name` varchar(255) NOT NULL,
        `address` varchar(500) NOT NULL,
        `created_at` datetime DEFAULT NULL,
        `created_by` tinyint(4) DEFAULT NULL,
        `updated_at` datetime DEFAULT NULL,
        `updated_by` tinyint(4) DEFAULT NULL,
        `deleted_at` date DEFAULT NULL,
        `deleted_by` tinyint(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

ALTER TABLE `accounts`
ADD PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `email` (`email`),
ADD KEY `role_id` (`role_id`);

ALTER TABLE `data_types` ADD PRIMARY KEY (`id`);

ALTER TABLE `images`
ADD PRIMARY KEY (`id`),
ADD
    KEY `image_type_id` (`image_type_id`);

ALTER TABLE `image_types` ADD PRIMARY KEY (`id`);

ALTER TABLE `master_datas`
ADD PRIMARY KEY (`id`),
ADD
    KEY `data_type` (`data_type`);

ALTER TABLE `products`
ADD PRIMARY KEY (`id`),
ADD
    KEY `category_id` (`category_id`);

ALTER TABLE `product_categories` ADD PRIMARY KEY (`id`);

ALTER TABLE `promotions`
ADD PRIMARY KEY (`id`),
ADD
    KEY `promotion_type_id` (`promotion_type_id`);

ALTER TABLE `promotion_types` ADD PRIMARY KEY (`id`);

ALTER TABLE `roles` ADD PRIMARY KEY (`id`);

ALTER TABLE `shops` ADD PRIMARY KEY (`id`);

ALTER TABLE
    `accounts` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

ALTER TABLE
    `data_types` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

ALTER TABLE
    `images` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE
    `image_types` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE
    `master_datas` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE
    `products` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE
    `product_categories` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE
    `promotions` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE
    `promotion_types` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE
    `roles` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

ALTER TABLE `shops` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `accounts`
ADD
    CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

ALTER TABLE `images`
ADD
    CONSTRAINT `images_ibfk_1` FOREIGN KEY (`image_type_id`) REFERENCES `image_types` (`id`) ON UPDATE NO ACTION;

ALTER TABLE `master_datas`
ADD
    CONSTRAINT `master_datas_ibfk_1` FOREIGN KEY (`data_type`) REFERENCES `data_types` (`id`);

ALTER TABLE `products`
ADD
    CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON UPDATE NO ACTION;

ALTER TABLE `promotions`
ADD
    CONSTRAINT `promotions_ibfk_1` FOREIGN KEY (`promotion_type_id`) REFERENCES `promotion_types` (`id`) ON UPDATE NO ACTION;

COMMIT;

INSERT INTO
    `roles` (
        `id`,
        `name`,
        `created_at`,
        `created_by`,
        `updated_at`,
        `updated_by`,
        `deleted_at`,
        `deleted_by`
    )
VALUES (
        1,
        'Admin',
        '2023-06-06 00:01:32',
        3,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        2,
        'Employee',
        '2023-06-06 00:01:32',
        3,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        3,
        'Seeder',
        '2023-06-06 00:01:32',
        3,
        NULL,
        NULL,
        NULL,
        NULL
    );INSERT INTO
    `accounts` (
        `id`,
        `email`,
        `password`,
        `display_name`,
        `phone_number`,
        `address`,
        `role_id`,
        `last_login`,
        `is_active`,
        `created_at`,
        `created_by`,
        `updated_at`,
        `updated_by`,
        `deleted_at`,
        `deleted_by`
    )
VALUES (
        1,
        'admin@songphuongfood.com',
        '25f9e794323b453885f5181f1b624d0b',
        'Admin Test',
        '0123456789',
        'Natus dolorem volupt',
        1,
        NULL,
        1,
        '2023-06-06 23:59:06',
        3,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        2,
        'employee@songphuongfood.com',
        '25f9e794323b453885f5181f1b624d0b',
        'Employee Test',
        '0123456789',
        'Aut enim quis impedi',
        2,
        NULL,
        1,
        '2023-06-06 23:59:06',
        3,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        3,
        'employee-deactivated@songphuongfood.com',
        '25f9e794323b453885f5181f1b624d0b',
        'Employee Deactivated',
        '0123456789',
        'Blanditiis quibusdam',
        2,
        NULL,
        0,
        '2023-06-06 23:59:06',
        3,
        NULL,
        NULL,
        NULL,
        NULL
    );ALTER TABLE `accounts` DROP `last_login`;

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

ALTER TABLE `access_log` ADD INDEX(`account_id`);SET time_zone = "+00:00";

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
    `os_platform` VARCHAR(255) NULL AFTER `browser_name`;SET time_zone = "+00:00";

ALTER TABLE `accounts` DROP `address`;