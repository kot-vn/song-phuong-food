<?php
function getAccountDetail($connect)
{
  $id = !isset($_POST['activeAccount']) ? reset($_SESSION)['id'] : $_POST['activeAccount'];
  $query = "SELECT
              accounts.id,
              accounts.email,
              accounts.display_name,
              accounts.phone_number,
              accounts.role_id,
              roles.name AS role_name,
              accounts.is_active,
              accounts.deleted_at
            FROM
              accounts
            INNER JOIN roles ON accounts.role_id = roles.id
            WHERE
              accounts.id = $id";
  $result = mysqli_fetch_array($connect->query($query));

  return $result;
}
