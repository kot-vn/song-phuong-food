SET time_zone = "+00:00";

ALTER TABLE
    `accounts` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `data_types` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `images` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `image_types` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `master_datas` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `products` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `product_categories` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `promotions` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `promotion_types` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `roles` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;

ALTER TABLE
    `shops` CHANGE `deleted_at` `deleted_at` DATETIME NULL DEFAULT NULL;