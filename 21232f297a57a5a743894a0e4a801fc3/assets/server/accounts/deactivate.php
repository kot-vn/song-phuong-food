<?php
function deactivateAccount($connect)
{
  if (isset($_POST['activeAccount']) && isset($_POST['confirmDeactivate'])) {
    $query = "UPDATE
                `accounts`
              SET
                `is_active` = '0'
              WHERE
                `id` = " . $_POST['activeAccount'];

    $connect->query($query);
  }
}
