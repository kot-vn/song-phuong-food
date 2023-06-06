<?php

include "../apis/env.php";

session_start();
if (getEnvironment() === "localhost") {
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "songphuongfood";
} else if (getEnvironment() === "staging") {
  $host = "localhost";
  $username = "id20856483_son56648_spf";
  $password = "Id20856483_son56648_spf";
  $database = "id20856483_son56648_spf";
} else if (getEnvironment() === "staging") {
  $host = "localhost";
  $username = "son56648_spf";
  $password = "Vu_Khac_Tiep@123";
  $database = "son56648_spf";
}

$connect = new MySQLi($host, $username, $password, $database);
mysqli_set_charset($connect, 'UTF8');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
