<?php
function getSessionsList($connect, $path, $currentUrl)
{
  $query = "SELECT
            *,
            COUNT(*) OVER() AS total_records
          FROM
            `access_log`";

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
