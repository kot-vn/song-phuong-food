<?php
function getAccountSessionsList($connect)
{
  $id = !isset($_POST['activeAccount']) ? reset($_SESSION)['id'] : $_POST['activeAccount'];
  $query = "SELECT
              access_log.ip,
              access_log.browser_name,
              access_log.os_platform,
              access_log.login_at
            FROM
              `access_log`
            WHERE
              account_id = $id
            ORDER BY
              `id`
            DESC
            LIMIT 5";

  $result = $connect->query($query);

  return $result;
}
