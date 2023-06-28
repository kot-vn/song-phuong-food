<?php
// max 3 layers 
// nav-permission: Admin, Employee
$menuData = '[
  {
      "nav-link": "cpanel/",
      "nav-icon": "fas fa-tachometer-alt",
      "nav-link-text": "Dashboard",
      "nav-permission": ["Admin","Employee"],
      "has-child": false,
      "nav-child": []
  },
  {
    "nav-link": "accounts/",
    "nav-icon": "fas fa-user",
    "nav-link-text": "Accounts",
    "nav-permission": ["Admin"],
    "has-child": true,
    "nav-child": [
      {
        "nav-link": "accounts/",
        "nav-icon": "fa-tachometer-alt",
        "nav-link-text": "List",
        "nav-permission": ["Admin"],
        "has-child": false,
        "nav-child": []
      }
    ]
}
]';
$menuList = json_decode($menuData, true);
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main" data-color="success">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="javascript:void(0)">
      <img src="<?= getPageFloor(0) ?>assets/img/favicon/android-chrome-256x256.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">Song Phuong Food</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse pb-5 w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <?php foreach ($menuList as $navItem) : ?>
        <?php if (in_array(reset($_SESSION)['role_name'], $navItem['nav-permission'])) : ?>
          <li class="nav-item">
            <a data-bs-toggle="<?php if ($navItem['has-child']) {
                                  echo 'collapse';
                                } ?>" href="<?php if ($navItem['has-child']) {
                                              echo '#' . $navItem['nav-link-text'];
                                            } else {
                                              echo getPageFloor(0) . $navItem['nav-link'];
                                            }  ?>" class="nav-link <?php if (isUrlActive($navItem['nav-link'])) echo 'active' ?>" aria-controls="<?php if ($navItem['has-child']) {
                                                                                                                                                    echo $navItem['nav-link-text'];
                                                                                                                                                  }  ?>" role="button" aria-expanded="false">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                <i class="<?php if (isUrlActive($navItem['nav-link'])) {
                            echo 'text-white';
                          } else {
                            echo 'text-dark';
                          } ?> <?= $navItem['nav-icon'] ?>"></i>
              </div>
              <span class="nav-link-text ms-1">
                <?= $navItem['nav-link-text'] ?>
              </span>
            </a>
            <div class="collapse <?php if (isUrlActive($navItem['nav-link'])) echo 'show' ?>" id="<?php if ($navItem['has-child']) {
                                                                                                    echo $navItem['nav-link-text'];
                                                                                                  } ?>">
              <ul class="nav ms-4 ps-3">
                <?php foreach ($navItem['nav-child'] as $navChildItem) : ?>
                  <?php if (in_array(reset($_SESSION)['role_name'], $navChildItem['nav-permission'])) : ?>
                    <li class="nav-item ">
                      <a class="nav-link <?php if (isUrlActive($navChildItem['nav-link'])) echo 'active' ?>" data-bs-toggle="<?php if ($navChildItem['has-child']) {
                                                                                                                                echo 'collapse';
                                                                                                                              } ?>" aria-expanded="false" href="<?php if ($navChildItem['has-child']) {
                                                                                                                                                                  echo '#' . $navChildItem['nav-link-text'];
                                                                                                                                                                } else {
                                                                                                                                                                  echo getPageFloor(0) . $navChildItem['nav-link'];
                                                                                                                                                                }  ?>">
                        <span class="sidenav-mini-icon">
                          <?= substr($navChildItem['nav-link-text'], 0, 1) ?>
                        </span>
                        <span class="sidenav-normal">
                          <?= $navChildItem['nav-link-text'] ?>
                          <b class="caret"></b>
                        </span>
                      </a>
                      <div class="collapse <?php if (isUrlActive($navChildItem['nav-link'])) echo 'show' ?>" id="<?php if ($navChildItem['has-child']) {
                                                                                                                    echo $navChildItem['nav-link-text'];
                                                                                                                  } ?>">
                        <ul class="nav nav-sm flex-column">
                          <?php foreach ($navChildItem['nav-child'] as $navGrandChildItem) : ?>
                            <?php if (in_array(reset($_SESSION)['role_name'], $navGrandChildItem['nav-permission'])) : ?>
                              <li class="nav-item">
                                <a class="nav-link <?php if (isUrlActive($navGrandChildItem['nav-link'])) echo 'active' ?>" href="<?= getPageFloor(0) . $navGrandChildItem['nav-link'] ?>">
                                  <span class="sidenav-mini-icon text-xs">
                                    <?= substr($navGrandChildItem['nav-link-text'], 0, 1) ?>
                                  </span>
                                  <span class="sidenav-normal">
                                    <?= $navGrandChildItem['nav-link-text'] ?>
                                  </span>
                                </a>
                              </li>
                            <?php endif ?>
                          <?php endforeach ?>
                        </ul>
                      </div>
                    </li>
                  <?php endif ?>
                <?php endforeach ?>
              </ul>
            </div>
          </li>
        <?php endif ?>
      <?php endforeach ?>
    </ul>
  </div>
  <?php if (!@include "../molecules/sidenavFooter.php") {
    include "../assets/components/molecules/sidenavFooter.php";
  } else {
    include "../molecules/sidenavFooter.php";
  } ?>
</aside>