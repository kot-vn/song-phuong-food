<?php
function authRedirect($path, $currentUrl)
{
  $cpanelLocation = "21232f297a57a5a743894a0e4a801fc3";

  if (empty($_SESSION['admin']) && empty($_SESSION['employee'])) {
    $location = $path . $cpanelLocation . "/auth/login.php";
  } else {
    $location = $path . $cpanelLocation . "/cpanel/";
  }

  if ($currentUrl != $location) {
    header("Location: $location", true, 301);
    exit;
  }
}
