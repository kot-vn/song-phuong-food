<?php
function updateBasicInfo($connect)
{
  if (isset($_POST['basic']) && $_POST['basic']) {
    $id = !isset($_POST['activeAccount']) ? reset($_SESSION)['id'] : $_POST['activeAccount'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];;
    $role = $_POST['role'];
    $currentDatetime = (new DateTime('now', new DateTimeZone('+7')))->format('Y-m-d H:i:s');
    $query = "UPDATE
                  `accounts`
              SET
                  `email` = '$email',
                  `display_name` = '$name',
                  `phone_number` = '$phone',
                  `role_id` = '$role',
                  `updated_at` = '$currentDatetime',
                  `updated_by` = '" . reset($_SESSION)['id'] . "'
              WHERE
                  `accounts`.`id` = $id";
    $connect->query($query);
  }
}
