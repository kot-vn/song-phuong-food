<?php
function getAccountsList($connect, $role)
{
  $query = "SELECT
              accounts.id,
              accounts.display_name,
              accounts.phone_number,
              roles.name as role_name,
              accounts.is_active,
              accounts.deleted_at,
              COUNT(*) OVER() AS total_records
            FROM
              accounts
            INNER JOIN roles ON accounts.role_id = roles.id";

  if ($role == 4) $query .= " WHERE accounts.role_id IN (1, 2)";
  if ($role == 1) $query .= " WHERE accounts.role_id = 2 AND accounts.deleted_at IS NULL";
  if (isset($_GET['name'])) $query .= " AND accounts.display_name LIKE '%" . $_GET['name'] . "%'";

  $page = 1;
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }
  $perPage = 20;
  $from = ($page - 1) * $perPage;

  $query .= " LIMIT $from, $perPage";

  $result = $connect->query($query);

  $totalPages = mysqli_num_rows($result) != 0 ? mysqli_fetch_array($result)['total_records'] / $perPage : 0;

  return  ['result' => $result, 'page' => $page, 'pages' => ceil($totalPages)];
}
