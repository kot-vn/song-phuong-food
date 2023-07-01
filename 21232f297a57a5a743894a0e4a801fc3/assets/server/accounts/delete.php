<?php
function deleteAccount($connect)
{
  if (isset($_POST['activeAccount']) && isset($_POST['confirmDelete'])) {
    $currentDatetime = (new DateTime('now', new DateTimeZone('+7')))->format('Y-m-d H:i:s');
    $query = "UPDATE
                  `accounts`
              SET
                  `deleted_at` = '" . $currentDatetime . "',
                  `deleted_by` = " . reset($_SESSION)['role_id'] . "
              WHERE
                  `id` = " . $_POST['activeAccount'];

    $connect->query($query);
  }
}
