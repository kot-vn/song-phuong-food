<?php
include "../apis/env.php";
include "../apis/auth.php";

session_start();
authRedirect(getHost(), getFullPath());
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>cPanel - Song Phương Food</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  cpanel
</body>

</html>