<?php
function reactivateAccount($connect)
{
  if (isset($_POST['activeAccount']) && isset($_POST['confirmReactivate'])) {
    $currentDatetime = (new DateTime('now', new DateTimeZone('+7')))->format('Y-m-d H:i:s');
    $query = "UPDATE
                `accounts`
              SET
                `is_active` = '1',
                `updated_at` = '$currentDatetime',
                `updated_by` = '" . reset($_SESSION)['id'] . "'
              WHERE
                `id` = " . $_POST['activeAccount'];

    $connect->query($query);
  }
}
