<?php
function getSessionsList($connect, $path, $currentUrl)
{
  $query = "SELECT
              access_log.id,
              accounts.email,
              roles.name,
              access_log.ip,
              access_log.browser_name,
              access_log.os_platform,
              access_log.login_at,
              COUNT(*) OVER() AS total_records
            FROM
              access_log
            JOIN accounts ON access_log.account_id = accounts.id
            JOIN roles ON accounts.role_id = roles.id";

  $page = 1;
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }
  $perPage = 20;
  $from = ($page - 1) * $perPage;

  $query .= " LIMIT $from, $perPage";

  $result = $connect->query($query);

  $totalPages = mysqli_num_rows($result) != 0 ? mysqli_fetch_array($result)['total_records'] / $perPage : 0;

  if (isset($_GET['page']) && mysqli_num_rows($result) == 0) redirect('accounts', $path, $currentUrl);;

  return  ['result' => $result, 'page' => $page, 'pages' => ceil($totalPages)];
}
