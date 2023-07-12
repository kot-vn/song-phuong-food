<?php
function reopenAccount($connect)
{
  if (isset($_POST['activeAccount']) && isset($_POST['confirmReopen'])) {
    $currentDatetime = (new DateTime('now', new DateTimeZone('+7')))->format('Y-m-d H:i:s');
    $query = "UPDATE
                  `accounts`
              SET
                  `updated_at` = '" . $currentDatetime . "',
                  `updated_by` = " . reset($_SESSION)['role_id'] . ",
                  `deleted_at` = NULL,
                  `deleted_by` = NULL
              WHERE
                  `id` = " . $_POST['activeAccount'];

    $connect->query($query);
  }
}
