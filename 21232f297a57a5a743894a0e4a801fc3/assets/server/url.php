<?php
function getHost($environment)
{
  if ($environment === "localhost") {
    $path = "/song-phuong-food/";
  } else {
    $path = "/";
  }
  return $path;
}

function getFullPath()
{
  $url = $_SERVER['REQUEST_URI'];
  return $url;
}

function getPath()
{
  $url = getFullPath();
  $substring = "21232f297a57a5a743894a0e4a801fc3/";
  $substringPosition = strpos($url, $substring);
  $result = substr($url, $substringPosition + strlen($substring));
  $path = parse_url($result, PHP_URL_PATH);
  $directories = array_filter(explode('/', $path));
  $lastElement = end($directories);
  $lastElement = pathinfo($lastElement, PATHINFO_FILENAME);
  $directories[count($directories) - 1] = $lastElement;
  $capitalizedParts = array_map('ucfirst', $directories);

  return $capitalizedParts;
}

function getPageFloor($jumpStep)
{
  $path = getPath();
  return str_repeat('../', count($path) - $jumpStep);
}

function isUrlActive($navLink){
  return str_contains(getFullPath(), $navLink);
}