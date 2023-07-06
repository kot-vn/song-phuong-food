<?php
ob_start();

function createAccount($connect, $path, $currentUrl)
{
  $error = [];

  if (isset($_POST['create'])) {

    if (empty($_POST['display_name'])) array_push($error, "Tên đầy đủ không được bỏ trống");
    if (empty($_POST['role'])) array_push($error, "Vui lòng chọn loại tài khoản");
    if (empty($_POST['email'])) array_push($error, "Email không được bỏ trống");
    if (empty($_POST['phone'])) array_push($error, "Số điện thoại không được bỏ trống");
    if (empty($_POST['password'])) {
      array_push($error, "Mật khẩu không được bỏ trống");
    } else {
      if ($_POST['password'] != $_POST['re_password']) array_push($error, "Mật khẩu không khớp");
    }

    if (empty($error)) {
      $displayName = $_POST['display_name'];
      $role = $_POST['role'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $password = md5($_POST['password']);
      date_default_timezone_set("Asia/Ho_Chi_Minh");
      $createdAt = date("Y-m-d H:i:s");
      $createdBy = reset($_SESSION)['id'];

      $query = "SELECT
                    id
                FROM
                    accounts
                WHERE
                    email = '$email'";

      $result = $connect->query($query);

      if (mysqli_num_rows($result) != 0) {
        array_push($error, "Email đã tồn tại. Nếu email này thuộc về tài khoản đã bị khoá, hãy liên hệ hỗ trợ");
      } else {
        $query = "INSERT INTO `accounts`(
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
                VALUES(
                    NULL,
                    '$email',
                    '$password',
                    '$displayName',
                    '$phone',
                    '$role',
                    '1',
                    '$createdAt',
                    '$createdBy',
                    NULL,
                    NULL,
                    NULL,
                    NULL
                )";
        $connect->query($query);
        redirect('accounts', $path, $currentUrl);
      }
    }
  }

  return $error;
}
