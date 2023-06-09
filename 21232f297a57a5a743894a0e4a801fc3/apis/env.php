<?php
function getHost()
{
  if (getEnvironment() === "localhost") {
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

function getEnvironment()
{
  if ($_SERVER['HTTP_HOST'] === "localhost") {
    return "localhost";
  } else if ($_SERVER['HTTP_HOST'] === "stg.songphuongfood.com") {
    return 'staging';
  } else if ($_SERVER['HTTP_HOST'] === "songphuongfood.com") {
    return 'production';
  }
}
