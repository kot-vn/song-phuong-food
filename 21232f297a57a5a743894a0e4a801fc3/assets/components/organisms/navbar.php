<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <?php if (!@include "../molecules/breadcrumb.php") {
      include "../assets/components/molecules/breadcrumb.php";
    } else {
      include "../molecules/breadcrumb.php";
    } ?>
    <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
      <?php if (!@include "../atoms/toggleButton.php") {
        include "../assets/components/atoms/toggleButton.php";
      } else {
        include "../atoms/toggleButton.php";
      } ?>
    </div>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="<?= getPageFloor(1) ?>account" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none"><?= reset($_SESSION)['display_name'] ?></span>
          </a>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center" onclick="toggleSidenav()">
          <?php if (!@include "../atoms/toggleButton.php") {
            include "../assets/components/atoms/toggleButton.php";
          } else {
            include "../atoms/toggleButton.php";
          } ?>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="?logout=true" class="nav-link text-body p-0">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>