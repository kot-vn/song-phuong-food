SET time_zone = "+00:00";

INSERT INTO
    `accounts` (
        `id`,
        `email`,
        `password`,
        `display_name`,
        `phone_number`,
        `role_id`,
        `is_active`,
        `created_at`,
        `created_by`,
        `updated_at`,
        `updated_by`,
        `deleted_at`,
        `deleted_by`
    )
VALUES (
        NULL,
        'employee.deleted@songphuongfood.com',
        '25f9e794323b453885f5181f1b624d0b',
        'Deleted Employee',
        '0123456789',
        '2',
        '1',
        '2023-06-29 23:07:59',
        '3',
        NULL,
        NULL,
        '2023-06-29',
        '3'
    )
ALTER TABLE `accounts`
ADD INDEX(`is_active`);