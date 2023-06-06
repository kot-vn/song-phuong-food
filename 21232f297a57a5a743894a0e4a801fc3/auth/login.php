<?php
include "../apis/databaseConnector.php";
include "../apis/auth.php";

authRedirect(getHost());
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>cPanel - Song Phương Food</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicons -->
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../assets/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="../assets/img/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="../assets/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.1.1" rel="stylesheet" />
</head>

<body class="bg-gray-100">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start pb-11 m-3 border-radius-lg">
      <span class="mask bg-gradient-success"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Chào mừng!</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mb-5">
          <div class="card z-index-0">
            <div class="card-header text-center pb-0 pt-4">
              <h5>Đăng nhập</h5>
            </div>
            <div class="card-body">
              <?php
              if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $query = "SELECT * FROM accounts WHERE  deleted_at IS NULL";
                $result = $connect->query($query);
                if (mysqli_num_rows($result) == 0) {
                  $alert = "Tài khoản không tồn tại";
                } else {
                  $result = mysqli_fetch_array($result);
                  if ($result['role_id'] == 1) {
                    $_SESSION['admin'] = $result;
                  } else if ($result['role_id'] == 2) {
                    $_SESSION['employee'] = $result;
                  }
                  $_SESSION['start'] = time();
                  $_SESSION['expire'] = $_SESSION['start'] + (6 * 60 * 60);
                  authRedirect(getHost());
                }
              } else {
                $error = "Email và password không được để trống";
              }
              ?>
              <form role="form" class="text-start" method="post">
                <div class="mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" required>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Mật khẩu" aria-label="Mật khẩu" required>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Đăng nhập</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <?php include "../components/molecules/footer.php" ?>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="../assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="../assets/js/plugins/jkanban/jkanban.js"></script>
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
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.1"></script>
</body>

</html>