<?php
ob_start();
function authRedirect($path, $currentUrl)
{
  $cpanelLocation = "21232f297a57a5a743894a0e4a801fc3";

  if (empty($_SESSION)) {
    $location = $path . $cpanelLocation . "/auth/login.php";
  } else {
    $location = $path . $cpanelLocation . "/cpanel/";
  }

  if ($currentUrl != $location) {
    header("Location: $location", true, 301);
    exit;
  }
}

function authBlock($path, $currentUrl)
{
  $cpanelLocation = "21232f297a57a5a743894a0e4a801fc3";

  if (empty($_SESSION)) {
    $location = $path . $cpanelLocation . "/auth/login.php";

    if ($currentUrl != $location) {
      header("Location: $location", true, 301);
      exit;
    }
  }
}

function getIpAddress()
{
  $ipAddress = '';
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    // to get shared ISP IP address
    $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
  } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    // check for IPs passing through proxy servers
    // check if multiple IP addresses are set and take the first one
    $ipAddressList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    foreach ($ipAddressList as $ip) {
      if (!empty($ip)) {
        // if you prefer, you can check for valid IP address here
        $ipAddress = $ip;
        break;
      }
    }
  } else if (!empty($_SERVER['HTTP_X_FORWARDED'])) {
    $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
  } else if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
    $ipAddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
  } else if (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
    $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
  } else if (!empty($_SERVER['HTTP_FORWARDED'])) {
    $ipAddress = $_SERVER['HTTP_FORWARDED'];
  } else if (!empty($_SERVER['REMOTE_ADDR'])) {
    $ipAddress = $_SERVER['REMOTE_ADDR'];
  }
  return $ipAddress;
}


function getBrowser()
{
  $u_agent = $_SERVER['HTTP_USER_AGENT'];
  $bname = 'Unknown';
  $version = "";

  // Next get the name of the useragent yes seperately and for good reason
  if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  } elseif (preg_match('/Firefox/i', $u_agent)) {
    $bname = 'Mozilla Firefox';
    $ub = "Firefox";
  } elseif (preg_match('/OPR/i', $u_agent)) {
    $bname = 'Opera';
    $ub = "Opera";
  } elseif (preg_match('/Chrome/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
    $bname = 'Google Chrome';
    $ub = "Chrome";
  } elseif (preg_match('/Safari/i', $u_agent) && !preg_match('/Edge/i', $u_agent)) {
    $bname = 'Apple Safari';
    $ub = "Safari";
  } elseif (preg_match('/Netscape/i', $u_agent)) {
    $bname = 'Netscape';
    $ub = "Netscape";
  } elseif (preg_match('/Edge/i', $u_agent)) {
    $bname = 'Edge';
    $ub = "Edge";
  } elseif (preg_match('/Trident/i', $u_agent)) {
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }

  // finally get the correct version number
  $known = array('Version', $ub, 'other');
  $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
  if (!preg_match_all($pattern, $u_agent, $matches)) {
    // we have no matching number just continue
  }
  // see how many we have
  $i = count($matches['browser']);
  if ($i != 1) {
    //we will have two since we are not using 'other' argument yet
    //see if version is before or after the name
    if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
      $version = $matches['version'][0];
    } else {
      $version = $matches['version'][1];
    }
  } else {
    $version = $matches['version'][0];
  }

  // check if we have a number
  if ($version == null || $version == "") {
    $version = "?";
  }

  return $bname . " " . $version;
}

function getPlatform()
{
  $u_agent = $_SERVER['HTTP_USER_AGENT'];
  $platform = 'Unknown';

  // First get the platform
  if (preg_match('/linux/i', $u_agent)) {
    $platform = 'linux';
  } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
    $platform = 'mac';
  } elseif (preg_match('/windows|win32/i', $u_agent)) {
    $platform = 'windows';
  }

  return $platform;
}

function getDeviceName()
{
  return getenv('COMPUTERNAME') ? getenv('COMPUTERNAME') : 'Unknown';
}