<?php
function changePassword($connect)
{
  $error = [];

  if (isset($_POST['password']) && $_POST['password']) {
    $id = !isset($_POST['activeAccount']) ? reset($_SESSION)['id'] : $_POST['activeAccount'];
    $currentPassword = md5($_POST['old_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_new_password = md5($_POST['confirm_new_password']);

    if ($new_password != $confirm_new_password) {
      array_push($error, "Mật khẩu mới không khớp");
    } else {
      $query = "SELECT
                  accounts.id
              FROM
                  `accounts`
              WHERE
                  accounts.id = $id AND accounts.password = '$currentPassword'";
      $result = $connect->query($query);

      if (mysqli_num_rows($result) != 1) {
        array_push($error, "Mật khẩu hiện tại không khớp");
      } else {
        $currentDatetime = (new DateTime('now', new DateTimeZone('+7')))->format('Y-m-d H:i:s');
        $query = "UPDATE
                      `accounts`
                  SET
                      `password` = '$new_password',
                      `updated_at` = '$currentDatetime',
                      `updated_by` = '" . reset($_SESSION)['id'] . "'
                  WHERE
                      `accounts`.`id` = $id";

        $connect->query($query);
      }
    }
  }

  return $error;
}
