<div class="row mb-5">
  <div class="col-lg-12 mt-lg-0 mt-4">
    <!-- Card Profile -->
    <div class="card card-body" id="profile">
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-auto col-4">
          <div class="avatar avatar-xl position-relative border border-success border-radius-lg shadow-sm">
            <span class="text-dark fs-1 fw-bold">
              <?= substr($accountDetail['display_name'], 0, 1) ?>
            </span>
          </div>
        </div>
        <div class="col-sm-auto col-8 my-auto">
          <div class="h-100">
            <h5 class="mb-1 font-weight-bolder">
              <?= $accountDetail['display_name'] ?>
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              <?= $accountDetail['role_name'] ?>
            </p>
          </div>
        </div>
        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
          <?php if ($accountDetail['deleted_at']) : ?>
            <span class="badge bg-gradient-danger">
              Đã bị xoá
            </span>
          <?php else : ?>
            <span class="badge bg-gradient-<?= $accountDetail['is_active'] ? "success" : "warning" ?>">
              <?= $accountDetail['is_active'] ? "Đang hoạt động" : "Đã bị vô hiệu hoá" ?>
            </span>
          <?php endif ?>
        </div>
      </div>
    </div>
    <!-- Card Basic Info -->
    <div class="card mt-4" id="basic-info">
      <div class="card-header">
        <h5>Thông tin cơ bản</h5>
      </div>
      <div class="card-body pt-0">
        <form method="POST">
          <input type="text" name="basic" value="true" class="d-none">
          <input type="text" name="activeAccount" value="<?= !isset($_POST['activeAccount']) ? reset($_SESSION)['id'] : $_POST['activeAccount'] ?>" class="d-none">
          <div class="row">
            <div class="col-12">
              <label class="form-label">Tên đầy đủ</label>
              <div class="input-group">
                <input id="name" name="name" class="form-control" type="text" placeholder="Họ và tên" value="<?= $accountDetail['display_name'] ?>" required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <label class="form-label mt-4">Email</label>
              <div class="input-group">
                <input id="email" name="email" class="form-control" type="email" value="<?= $accountDetail['email'] ?>" placeholder="example@email.com" required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label class="form-label mt-4">Số điện thoại</label>
              <div class="input-group">
                <input id="phone" name="phone" class="form-control" type="tel" value="<?= $accountDetail['phone_number'] ?>" required="required">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <label class="form-label mt-4">Loại tài khoản</label>
              <select class="form-control" name="role" id="role" required="required">
                <?php if (reset($_SESSION)['role_id'] != 2) : ?>
                  <option value="1" <?= $accountDetail['role_id'] == 1 ? "selected" : "" ?>>Quản lý</option>
                  <?php if (reset($_SESSION)['role_id'] == 4) : ?>
                    <option value="4" <?= $accountDetail['role_id'] == 4 ? "selected" : "" ?>>Super Admin</option>
                  <?php endif ?>
                <?php endif ?>
                <option value="2" <?= $accountDetail['role_id'] == 2 ? "selected" : "" ?>>Nhân viên</option>
              </select>
            </div>
          </div>
          <button class="btn bg-gradient-dark btn-sm float-end mt-4 mb-0" type="submit">Cập nhật</button>
        </form>
      </div>
    </div>
    <!-- Card Change Password -->
    <div class="card mt-4" id="password">
      <div class="card-header">
        <h5>Đổi mật khẩu</h5>
      </div>
      <div class="card-body pt-0">
        <form method="POST">
          <input type="text" name="password" value="true" class="d-none">
          <input type="text" name="activeAccount" value="<?= !isset($_POST['activeAccount']) ? reset($_SESSION)['id'] : $_POST['activeAccount'] ?>" class="d-none">
          <label class="form-label">Mật khẩu hiện tại</label>
          <div class="form-group">
            <input class="form-control" name="old_password" type="password" required placeholder="********" minlength="8">
          </div>
          <label class="form-label">Mật khẩu mới</label>
          <div class="form-group">
            <input class="form-control" name="new_password" type="password" requiredrequired placeholder="********" minlength="8">
          </div>
          <label class="form-label">Nhập lại mật khẩu</label>
          <div class="form-group">
            <input class="form-control" name="confirm_new_password" type="password" required placeholder="********" minlength="8">
          </div>
          <div class="d-flex flex-column mt-3">
            <?php foreach ($error as $message) : ?>
              <span class="text-danger">- <?= $message ?></span>
            <?php endforeach ?>
          </div>
          <p class="text-muted mb-2">
            Nên tạo một mật khẩu mạnh theo hướng dẫn dưới đây:
          </p>
          <ul class="text-muted ps-4 mb-0 float-start">
            <li>
              <span class="text-sm">Ít nhất 1 ký tự đặc biệt</span>
            </li>
            <li>
              <span class="text-sm">Ít nhất 8 ký tự</span>
            </li>
            <li>
              <span class="text-sm">Ít nhất một chữ số</span>
            </li>
            <li>
              <span class="text-sm">Nên thay đổi mật khẩu thường xuyên</span>
            </li>
          </ul>
          <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Thay đổi mật khẩu</button>
        </form>
      </div>
    </div>
    <!-- Card Sessions -->
    <div class="card mt-4" id="sessions">
      <div class="card-header pb-3">
        <h5>Phiên đăng nhập</h5>
        <p class="text-sm">Đây là danh sách các thiết bị đã đăng nhập vào tài khoản của bạn</p>
      </div>
      <div class="card-body pt-0">
        <?php foreach ($sessions as $session) : ?>
          <div class="d-flex align-items-center">
            <div class="text-center w-5">
              <?php if (in_array($session['os_platform'], ['Mobile', 'BlackBerry', 'Android', 'iPad', 'iPod', 'iPhone'])) : ?>
                <i class="fas fa-mobile-alt text-lg opacity-6"></i>
              <?php else : ?>
                <i class="fas fa-desktop text-lg opacity-6"></i>
              <?php endif ?>
            </div>
            <div class="my-auto ms-3">
              <div class="h-100">
                <p class="text-sm mb-1">
                  <?= $session['browser_name'] ?> trên <?= $session['os_platform'] ?>
                </p>
                <p class="mb-0 text-xs">
                  <?= $session['ip'] ?>
                </p>
              </div>
            </div>
            <span class="badge bg-gradient-<?= $session['ip'] == getIpAddress() ? 'success' : 'warning' ?> badge-sm my-auto ms-auto me-3"><?= $session['ip'] == getIpAddress() ? 'Đang hoạt động' : 'Đã hết hạn' ?></span>
            <p class="text-secondary text-sm my-auto me-3"><?= $session['login_at'] ?></p>
          </div>
          <hr class="horizontal dark">
        <?php endforeach ?>
      </div>
    </div>
    <?php if (!$accountDetail['deleted_at'] && !$accountDetail['is_active'] && in_array(reset($_SESSION)['role_id'], [1, 4])) : ?>
      <div class="card mt-4" id="reactive">
        <div class="card-header">
          <h5>Tái kích hoạt tài khoản</h5>
          <p class="text-sm mb-0">Tái kích hoạt tài khoản đã bị vô hiêu hoá</p>
        </div>
        <div class="card-body d-sm-flex pt-0">
          <div class="d-flex align-items-center mb-sm-0 mb-4">
            <div>
              <div class="form-check form-switch mb-0">
                <input class="form-check-input" name="reactivateConfirm" onclick="changeConfirmReactivateStatus()" type="checkbox" id="flexSwitchCheckDefault0">
              </div>
            </div>
            <div class="ms-2">
              <span class="text-dark font-weight-bold d-block text-sm">Xác nhận</span>
              <span class="text-xs d-block">Tôi muốn tái kích hoạt tài khoản này.</span>
            </div>
          </div>
          <div class="d-flex ms-auto">
            <form method="POST">
              <input type="text" class="d-none" name="activeAccount" value="<?= $accountDetail['id'] ?>">
              <input type="text" name="confirmReactivate" value="true" class="d-none">
              <button class="btn bg-gradient-success mb-0 ms-auto" disabled type="submit" id="reactivateButton">Kích hoạt</button>
            </form>
          </div>
        </div>
      </div>
    <?php endif ?>
    <!-- Card Delete Account -->
    <?php if (!$accountDetail['deleted_at']) : ?>
      <div class="card mt-4" id="delete">
        <div class="card-header">
          <h5>Xoá tài khoản</h5>
          <p class="text-sm mb-0">Một khi bạn xoá tài khoản, bạn sẽ không thể khôi phục lại. Hãy tham khảo chức năng vô hiệu hoá tài khoản</p>
        </div>
        <div class="card-body d-sm-flex pt-0">
          <div class="d-flex align-items-center mb-sm-0 mb-4">
            <div>
              <div class="form-check form-switch mb-0">
                <input class="form-check-input" name="confirm" onclick="changeConfirmStatus()" type="checkbox" id="flexSwitchCheckDefault0">
              </div>
            </div>
            <div class="ms-2">
              <span class="text-dark font-weight-bold d-block text-sm">Xác nhận</span>
              <span class="text-xs d-block">Tôi muốn xoá hoặc vô hiệu hoá tài khoản này.</span>
            </div>
          </div>
          <div class="d-flex ms-auto">
            <?php if ($accountDetail['is_active'] && !$accountDetail['deleted_at']) : ?>
              <form method="POST">
                <input type="text" class="d-none" name="activeAccount" value="<?= $accountDetail['id'] ?>">
                <input type="text" name="confirmDeactivate" value="true" class="d-none">
                <button class="btn bg-gradient-warning mb-0 ms-auto" disabled type="submit" id="deactivateButton">Vô hiệu hoá tài khoản</button>
              </form>
            <?php endif ?>
            <?php if (!$accountDetail['deleted_at']) : ?>
              <form method="POST">
                <input type="text" class="d-none" name="activeAccount" value="<?= $accountDetail['id'] ?>">
                <input type="text" name="confirmDelete" value="true" class="d-none">
                <button class="btn bg-gradient-danger mb-0 ms-2" disabled type="submit" id="deleteButton">Xoá tài khoản</button>
              </form>
            <?php endif ?>
          </div>
        </div>
      </div>
    <?php endif ?>
  </div>
</div>