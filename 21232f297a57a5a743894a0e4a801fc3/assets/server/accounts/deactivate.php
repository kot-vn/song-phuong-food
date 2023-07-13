<?php
function deactivateAccount($connect)
{
  if (isset($_POST['activeAccount']) && isset($_POST['confirmDeactivate'])) {
    $currentDatetime = (new DateTime('now', new DateTimeZone('+7')))->format('Y-m-d H:i:s');

    $query = "UPDATE
                `accounts`
              SET
                `is_active` = '0',
                `updated_at` = '" . $currentDatetime . "',
                `updated_by` = " . reset($_SESSION)['role_id'] . "
              WHERE
                `id` = " . $_POST['activeAccount'];

    $connect->query($query);
  }
}
