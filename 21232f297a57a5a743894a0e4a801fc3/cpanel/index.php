<?php
include "../assets/server/databaseConnector.php";
include "../assets/server/environment.php";
include "../assets/server/url.php";
include "../assets/server/auth.php";
include "../../env.php";

session_start();
$connect = connectDatabase(getEnvironment());
authBlock(getHost(getEnvironment()), getFullPath(), [1, 2, 4]);
permissionBlock($connect);
authBlock(getHost(getEnvironment()), getFullPath(), [1, 2, 4]);

include "../assets/server/logout.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>cPanel - Song Phương Food</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= getPageFloor(0) ?>assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= getPageFloor(0) ?>assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= getPageFloor(0) ?>assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= getPageFloor(0) ?>assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= getPageFloor(0) ?>assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?= getPageFloor(0) ?>assets/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="<?= getPageFloor(0) ?>assets/img/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="<?= getPageFloor(0) ?>assets/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= getPageFloor(0) ?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= getPageFloor(0) ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= getPageFloor(0) ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= getPageFloor(0) ?>assets/css/soft-ui-dashboard.css?v=1.1.1" rel="stylesheet" />

  <style>
    .embed-page {
      height: calc(100vh - 300px);
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <?php include getPageFloor(0) . "assets/components/organisms/sidenav.php" ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include getPageFloor(0) . "assets/components/organisms/navbar.php" ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="embed-page w-100">
        <embed type="text/html" src="https://nepcha.com/site/songphuongfood.com" width="100%" height="100%">
      </div>
      <?php include getPageFloor(0) . "assets/components/molecules/footer.php" ?>
    </div>
  </main>
  <?php if (getEnvironment() == "localhost") include "../assets/components/organisms/fixedPlugin.php" ?>
  <!--   Core JS Files   -->
  <script src="<?= getPageFloor(0) ?>assets/js/core/popper.min.js"></script>
  <script src="<?= getPageFloor(0) ?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= getPageFloor(0) ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= getPageFloor(0) ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="<?= getPageFloor(0) ?>assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="<?= getPageFloor(0) ?>assets/js/plugins/jkanban/jkanban.js"></script>
  <script src="<?= getPageFloor(0) ?>assets/js/plugins/chartjs.min.js"></script>
  <script src="<?= getPageFloor(0) ?>assets/js/plugins/threejs.js"></script>
  <script src="<?= getPageFloor(0) ?>assets/js/plugins/orbit-controls.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= getPageFloor(0) ?>assets/js/soft-ui-dashboard.min.js?v=1.1.1"></script>
</body>

</html>