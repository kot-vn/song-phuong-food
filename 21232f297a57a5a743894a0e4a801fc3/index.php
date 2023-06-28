<?php
include "./assets/server/auth.php";
include "./assets/server/environment.php";
include "./assets/server/url.php";
include "../env.php";

session_start();
authRedirect(getHost(getEnvironment()), getFullPath());
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>c-Panel - Song Phương Food</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="./assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="./assets/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="./assets/img/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="./assets/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
</head>

</html>