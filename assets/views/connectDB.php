<?php
session_start();
$connect = new MySQLi("localhost", "son56648_spf", "Vu_Khac_Tiep@123", "son56648_spf");
// $connect = new MySQLi("localhost", "root", "", "son56648_spf");
mysqli_set_charset($connect, 'UTF8');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
