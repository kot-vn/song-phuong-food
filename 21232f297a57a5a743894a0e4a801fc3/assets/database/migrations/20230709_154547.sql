SET time_zone = "+00:00";

UPDATE `roles`
SET
    `name` = 'Nhân viên',
    `updated_at` = '2023-07-09 15:46:00',
    `updated_by` = '3'
WHERE `roles`.`id` = 2;

UPDATE `roles`
SET
    `name` = 'Quản lý',
    `updated_at` = '2023-07-09 15:46:42',
    `updated_by` = '3'
WHERE `roles`.`id` = 1;