<?php
function connectDatabase($environment)
{
  $host = $_ENV['DB_HOST'];
  $username = $_ENV['DB_USERNAME'];
  $password = $_ENV['DB_PASSWORD'];
  $database = $_ENV['DB_DATABASE'];
  $connect = new MySQLi($host, $username, $password, $database);

  mysqli_set_charset($connect, 'UTF8');
  if (mysqli_connect_errno()) {
    echo "Mất kết nối tới cơ sở dữ liệu: " . mysqli_connect_error();
  }

  return $connect;
}
