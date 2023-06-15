<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $query = "SELECT * FROM accounts WHERE email='$email' and password='$password' AND deleted_at IS NULL";
  $result = $connect->query($query);

  if (mysqli_num_rows($result) == 0) {
    $alert = "Thông tin đăng nhập không chính xác";
  } else {
    $result = mysqli_fetch_array($result);

    if ($result['is_active']) {
      if ($result['role_id'] == 1) {
        $_SESSION['admin'] = $result;
      } else if ($result['role_id'] == 2) {
        $_SESSION['employee'] = $result;
      }
      $_SESSION['start'] = time();
      $_SESSION['expire'] = $_SESSION['start'] + (6 * 60 * 60);

      authRedirect(getHost(getEnvironment()), getFullPath());
    } else {
      $alert = "Tài khoản của bạn đã bị vô hiệu hoá";
    }
  }
}
