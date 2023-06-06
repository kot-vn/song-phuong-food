<?php
function authRedirect($path)
{
  session_start();
  $cpanelLocation = "21232f297a57a5a743894a0e4a801fc3";

  if (empty($_SESSION['admin']) && empty($_SESSION['employee'])) {
    $location = $path . $cpanelLocation . "/auth/login.php";
  } else {
    $location = $path . $cpanelLocation . "/cpanel/";
  }

  header("Location: $location", true, 301);
  exit;
}
