SET time_zone = "+00:00";

INSERT INTO
    `roles`(
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
        NULL,
        'Super Admin',
        '2023-06-29 22:21:14',
        '3',
        NULL,
        NULL,
        NULL,
        NULL
    );

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
        'super.admin@songphuongfood.com',
        '25f9e794323b453885f5181f1b624d0b',
        'Super Admin Test',
        '0123456789',
        '4',
        '1',
        '2023-06-29 22:22:45',
        '3',
        NULL,
        NULL,
        NULL,
        NULL
    );
