<?php
function logout()
{
  session_destroy();
  $cpanelLocation = "21232f297a57a5a743894a0e4a801fc3";
  $location = getHost(getEnvironment()) . $cpanelLocation . "/auth/login.php";
  header("Location: $location", true, 301);
}

if (isset($_GET['logout'])) logout();
