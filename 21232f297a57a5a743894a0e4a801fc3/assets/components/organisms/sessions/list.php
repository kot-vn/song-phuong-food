<div class="col-12">
  <div class="card">
    <div class="table-responsive">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tài khoản</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Vai trò</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">IP truy cập</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên trình duyệt</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên hệ thống</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thời gian đăng nhập</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($sessions['result'] as $session) : ?>
            <tr>
              <td>
                <p class="text-xs px-3 font-weight-bold mb-0"><?= $session['id'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $session['email'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $session['name'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $session['ip'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $session['browser_name'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $session['os_platform'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $session['login_at'] ?></p>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <?php if (mysqli_num_rows($sessions['result']) == 0) : ?>
        <div class="dataTable-bottom">
          <div class="dataTable-info w-100 text-center">Không có dữ liệu</div>
        </div>
      <?php endif ?>
    </div>
    <?php if ($sessions['pages'] > 1) : ?>
      <div class="d-flex pagination-container justify-content-end p-3 pb-0">
        <ul class="pagination pagination-success">
          <?php if ($sessions['page'] > 1) : ?>
            <li class="page-item">
              <a class="page-link" href="<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $sessions['page'] - 1 ?>" aria-label="Previous">
                <span aria-hidden="true">
                  <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                </span>
              </a>
            </li>
          <?php endif ?>
          <?php if ($sessions['page'] == 4 || $sessions['page'] > 5) : ?>
            <li class="page-item <?= (empty($_GET['page'])) || (isset($_GET['page']) && $_GET['page'] == 1) ? 'active' : "" ?>">
              <a class="page-link" href='<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . "1" ?>'>1</a>
            </li>
          <?php endif; ?>
          <?php for ($i = 1; $i <= 2; $i++) : ?>
            <?php if ($sessions['page'] == 5) : ?>
              <li class="page-item <?= (empty($_GET['page']) && $i == 1) || (isset($_GET['page']) && $_GET['page'] == $i) ? 'active' : "" ?>">
                <a class="page-link" href='<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $i ?>'><?= $i ?></a>
              </li>
            <?php endif ?>
          <?php endfor; ?>
          <?php if ($sessions['page'] > 5) : ?>
            <li class="page-item">
              <a class="page-link" href='#'>...</a>
            </li>
          <?php endif ?>
          <?php for ($i = 1; $i <= $sessions['pages']; $i++) : ?>
            <?php if ($i <= $sessions['page'] + 2 && $i >= $sessions['page'] - 2) : ?>
              <li class="page-item <?= (empty($_GET['page']) && $i == 1) || (isset($_GET['page']) && $_GET['page'] == $i) ? 'active' : "" ?>">
                <a class="page-link" href='<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $i ?>'><?= $i ?></a>
              </li>
            <?php endif ?>
          <?php endfor; ?>
          <?php if ($sessions['page'] <= $sessions['pages'] - 5) : ?>
            <li class="page-item">
              <a class="page-link" href='#'>...</a>
            </li>
          <?php endif ?>
          <?php if ($sessions['page'] == $sessions['pages'] - 4) : ?>
            <li class="page-item <?= (empty($_GET['page'])) || (isset($_GET['page']) && $_GET['page'] == $sessions['pages'] - 1) ? 'active' : "" ?>">
              <a class="page-link" href='<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $sessions['pages'] - 1 ?>'><?= $sessions['pages'] - 1 ?></a>
            </li>
          <?php endif; ?>
          <?php if ($sessions['page'] <= $sessions['pages'] - 3 || $sessions['page'] < $sessions['pages'] - 4) : ?>
            <li class="page-item <?= (isset($_GET['page']) && $_GET['page'] == $sessions['pages']) ? 'active' : "" ?>">
              <a class="page-link" href='<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $sessions['pages'] ?>'><?= $sessions['pages'] ?></a>
            </li>
          <?php endif; ?>
          <?php if ($sessions['page'] < $sessions['pages']) : ?>
            <li class="page-item">
              <a class="page-link" href="<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $sessions['page'] + 1 ?>" aria-label="Next">
                <span aria-hidden="true">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </span>
              </a>
            </li>
          <?php endif ?>
        </ul>
      </div>
    <?php endif ?>
  </div>
</div>