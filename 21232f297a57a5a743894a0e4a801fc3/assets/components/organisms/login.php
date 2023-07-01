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
          <form role="form" class="text-start" method="post">
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Mật khẩu" aria-label="Mật khẩu" required>
            </div>
            <?= isset($alert) ? "<small class='text-danger'>$alert</small>" : "" ?>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Đăng nhập</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>