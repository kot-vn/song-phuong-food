<?php
function getEnvironment()
{
  if (str_contains($_SERVER['HTTP_HOST'], "192.168.") || in_array($_SERVER['HTTP_HOST'], ['127.0.0.1', 'localhost'])) {
    return "dev";
  } else if ($_SERVER['HTTP_HOST'] === "stg.songphuongfood.com") {
    return 'staging';
  } else if ($_SERVER['HTTP_HOST'] === "songphuongfood.com") {
    return 'production';
  }
}
