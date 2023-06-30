<div class="col-12">
  <div class="card">
    <div class="table-responsive">
      <table class="table align-items-center mb-0">
        <form method="get">
          <div class="w-100 d-flex justify-content-end p-3">
            <div class="input-group w-25">
              <span class="input-group-text text-body">
                <i class="fas fa-search" aria-hidden="true"></i>
              </span>
              <input type="text" name="name" class="form-control" placeholder="Tìm theo tên...">
            </div>
          </div>
        </form>
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên hiển thị</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số điện thoại</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Vai trò</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Trạng thái</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($accountsList['result'] as $account) : ?>
            <tr>
              <td>
                <p class="text-xs px-3 font-weight-bold mb-0"><?= $account['id'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $account['display_name'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $account['phone_number'] ?></p>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $account['role_name'] ?></p>
              </td>
              <td>
                <?php if ($account['deleted_at']) : ?>
                  <span class="badge badge-sm bg-gradient-danger">Deleted</span>
                <?php elseif ($account['is_active']) : ?>
                  <span class="badge badge-sm bg-gradient-success">Active</span>
                <?php else : ?>
                  <span class="badge badge-sm bg-gradient-warning">Deactivated</span>
                <?php endif ?>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <?php if ($accountsList['pages'] > 1) : ?>
        <div class="d-flex pagination-container justify-content-end p-3 pb-0">
          <ul class="pagination pagination-success">
            <?php if ($accountsList['page'] > 1) : ?>
              <li class="page-item">
                <a class="page-link" href="<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $accountsList['page'] - 1 ?>" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                  </span>
                </a>
              </li>
            <?php endif ?>
            <?php for ($i = 1; $i <= $accountsList['pages']; $i++) : ?>
              <li class="page-item <?= (empty($_GET['page']) && $i == 1) || (isset($_GET['page']) && $_GET['page'] == $i) ? 'active' : "" ?>">
                <a class="page-link" href='<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $i ?>'><?= $i ?></a>
              </li>
            <?php endfor; ?>
            <?php if ($accountsList['page'] < $accountsList['pages']) : ?>
              <li class="page-item">
                <a class="page-link" href="<?= (isset($_GET['name']) ? '?name=' . $_GET['name'] . '&page=' : '?page=') . $accountsList['page'] + 1 ?>" aria-label="Next">
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
</div>