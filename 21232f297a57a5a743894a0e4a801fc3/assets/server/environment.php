<?php
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
