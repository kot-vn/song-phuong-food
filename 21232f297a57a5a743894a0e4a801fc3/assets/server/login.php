<?php
function login($connect)
{
  $alert = "";

  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT
                  accounts.id,
                  accounts.display_name,
                  accounts.is_active,
                  accounts.role_id,
                  roles.name AS role_name
              FROM
                  `accounts`
              INNER JOIN roles ON accounts.role_id = roles.id
              WHERE
                  accounts.email = '$email' AND accounts.password = '$password' AND accounts.deleted_at IS NULL";
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
        } else if ($result['role_id'] == 4) {
          $_SESSION['super-admin'] = $result;
        }
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (6 * 60 * 60);

        saveLog($connect, $result);

        authRedirect(getHost(getEnvironment()), getFullPath());
      } else {
        $alert = "Tài khoản của bạn đã bị vô hiệu hoá";
      }
    }
  }
  return $alert;
}

function saveLog($connect, $result)
{
  $account_id = $result['id'];
  $ip = getIpAddress();
  $browser_name = getBrowser();
  $os_platform = getPlatform();
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  $login_at = date("Y-m-d H:i:s");

  $query = "INSERT INTO `access_log`(`account_id`, `ip`, `browser_name`, `os_platform`, `login_at`) VALUES ('$account_id','$ip','$browser_name','$os_platform','$login_at')";
  $connect->query($query);
}
