<div class="row">
  <div class="col-12">
    <div class="multisteps-form mb-5">
      <!--progress bar-->
      <div class="row">
        <div class="col-12 col-lg-8 mx-auto my-5">
          <div class="multisteps-form__progress">
            <button class="multisteps-form__progress-btn js-active" type="button" title="Thông tin cơ bản">
              <span>Thông tin cơ bản</span>
            </button>
            <button class="multisteps-form__progress-btn" type="button" title="Profile">Mật khẩu</button>
          </div>
        </div>
      </div>
      <!--form panels-->
      <div class="row">
        <div class="col-12 col-lg-8 m-auto">
          <form class="multisteps-form__form" method="POST">
            <input type="text" value="true" name="create" class="d-none">
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
              <h5 class="font-weight-bolder mb-0">Thông tin cơ bản</h5>
              <p class="mb-0 text-sm">Vui lòng nhập tất cả các mục</p>
              <div class="multisteps-form__content">
                <div class="row mt-3">
                  <div class="col-12 col-sm-6">
                    <label>Tên dầy đủ</label>
                    <input class="multisteps-form__input form-control" type="text" placeholder="Họ và tên" maxlength="50" value="<?= isset($_POST['display_name']) ? $_POST['display_name'] : '' ?>" name="display_name" />
                  </div>
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                    <label>Loại tài khoản</label>
                    <select class="multisteps-form__select form-control" name="role">
                      <?php if (reset($_SESSION)['role_id'] == 4) : ?>
                        <option value="1">Quản lý</option>
                      <?php endif ?>
                      <option value="2" selected>Nhân viên</option>
                    </select>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                    <label>Địa chỉ Email</label>
                    <input class="multisteps-form__input form-control" type="email" placeholder="Email dùng để đăng nhập" name="email" maxlength="255" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" />
                  </div>
                  <div class="col-12 col-sm-6">
                    <label>Số điện thoại</label>
                    <input class="multisteps-form__input form-control" type="tel" placeholder="Số điện thoại liên hệ" maxlength="25" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" />
                  </div>
                </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                </div>
              </div>
            </div>
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
              <h5 class="font-weight-bolder">Mật khẩu</h5>
              <p class="mb-0 text-sm">Mật khẩu phải dài ít nhất 8 ký tự, nên sử dụng chữ hoa và chữ thường, số và các ký hiệu đặc biệt</p>
              <div class="multisteps-form__content mt-3">
                <div class="row mt-3">
                  <div class="col-12 col-sm-6">
                    <label>Mật khẩu</label>
                    <input class="multisteps-form__input form-control" type="password" placeholder="******" name="password" minlength="8" maxlength="255" />
                  </div>
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                    <label>Nhập lại mật khẩu</label>
                    <input class="multisteps-form__input form-control" type="password" placeholder="******" name="re_password" minlength="8" maxlength="255" />
                  </div>
                </div>
                <div class="d-flex flex-column mt-3">
                  <?php foreach ($error as $message) : ?>
                    <span class="text-danger">- <?= $message ?></span>
                  <?php endforeach ?>
                </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                  <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Send">Send</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>