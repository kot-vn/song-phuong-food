<!-- Start Contact info -->
<div class="contact-imfo-box">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <i class="fas fa-phone"></i>
        <div class="overflow-hidden">
          <h4>Số điện thoại</h4>
          <?php
          $query = "select * from text where typeid = 3";
          $result = $connect->query($query);
          ?>
          <?php foreach ($result as $item) : ?>
            <p class="lead">
              <?= $item['details'] ?>
            </p>
          <?php endforeach ?>
        </div>
      </div>
      <div class="col-md-4">
        <i class="fas fa-envelope"></i>
        <div class="overflow-hidden">
          <h4>Email</h4>
          <?php
          $query = "select * from text where typeid = 4";
          $result = $connect->query($query);
          ?>
          <?php foreach ($result as $item) : ?>
            <p class="lead">
              <?= $item['details'] ?>
            </p>
          <?php endforeach ?>
        </div>
      </div>
      <div class="col-md-4">
        <i class="fas fa-map-marker"></i>
        <div class="overflow-hidden">
          <h4>Địa chỉ</h4>
          <?php
          $query = "select * from text where typeid = 5";
          $result = $connect->query($query);
          ?>
          <?php foreach ($result as $item) : ?>
            <p class="lead">
              <?= $item['details'] ?>
            </p>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact info -->
<!-- Start Footer -->
<footer class="footer-area bg-f">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <h3>Về chúng tôi</h3>
        <?php
        $query = "select * from text where typeid = 1";
        $result = $connect->query($query);
        ?>
        <?php foreach ($result as $item) : ?>
          <p><?= $item['details'] ?></p>
        <?php endforeach ?>
      </div>
      <div class="col-lg-3 col-md-6">
        <h3>Giờ hoạt động</h3>
        <p><span class="text-color">Thứ 2: </span>8AM - 17PM</p>
        <p><span class="text-color">Thứ 3: </span>8AM - 17PM</p>
        <p><span class="text-color">Thứ 4: </span>8AM - 17PM</p>
        <p><span class="text-color">Thứ 5: </span>8AM - 17PM</p>
        <p><span class="text-color">Thứ 6: </span>8AM - 17PM</p>
        <p><span class="text-color">Thứ 7: </span>8AM - 17PM</p>
        <p><span class="text-color">Chủ nhật: </span>Đóng cửa</p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h3>Thông tin liên hệ</h3>
        <?php
        $query = "select * from text where typeid = 5";
        $result = $connect->query($query);
        ?>
        <?php foreach ($result as $item) : ?>
          <p class="lead">
            <?= $item['details'] ?>
          </p>
        <?php endforeach ?>
        <?php
        $query = "select * from text where typeid = 3";
        $result = $connect->query($query);
        ?>
        <?php foreach ($result as $item) : ?>
          <p class="lead">
            <?= $item['details'] ?>
          </p>
        <?php endforeach ?>
        <?php
        $query = "select * from text where typeid = 4";
        $result = $connect->query($query);
        ?>
        <?php foreach ($result as $item) : ?>
          <p class="lead">
            <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=+<?= $item['details'] ?>" target="_blank">
              <?= $item['details'] ?>
            </a>
          </p>
        <?php endforeach ?>
      </div>
      <div class="col-lg-3 col-md-6" id="emailSubForm">
        <h3>Đăng ký nhận tin</h3>
        <div class="subscribe_form">
          <?php
          if (isset($_POST['email_footer'])) {
            $email = $_POST['email_footer'];
            $query = "select * from email_sub where email = '$email'";
            $result = $connect->query($query);
            if ($connect == null) {
              $alert = "<r style='color: red;'>Lỗi kết nối, vui lòng thử lại sau!</r>";
            } else {
              if (mysqli_num_rows($result) == 1) {
                $query = "select * from email_sub where email = '$email' and status = 1";
                $result = $connect->query($query);
                if ($connect == null) {
                  $alert = "<r style='color: red;'>Lỗi kết nối, vui lòng thử lại sau!</r>";
                } else {
                  if (mysqli_num_rows($result) == 1) {
                    $alert = "<r style='color: red;'>Bạn đã đăng ký rồi!</r>";
                  } else {
                    $query = "update email_sub set status = 1 where email = '$email'";
                    $result = $connect->query($query);
                    if ($connect == null) {
                      $alert = "<r style='color: red;'>Lỗi kết nối, vui lòng thử lại sau!</r>";
                    } else {
                      $alert = "<r style='color: green;'>Đăng ký thành công!</r>";
                    }
                  }
                }
              } else {
                $query = "insert email_sub(email_footer) values('$email')";
                $connect->query($query);
                if ($connect == null) {
                  $alert = "<r style='color: red;'>Lỗi kết nối, vui lòng thử lại sau!</r>";
                } else {
                  $alert = "<r style='color: green;'>Đăng ký thành công!</r>";
                }
              }
            }
          }
          ?>
          <form class="subscribe_form" method="post" autocomplete="off" action="#emailSubForm">
            <input name="email_footer" id="subs-email" class="form_input" placeholder="Email của bạn..." type="email" required>
            <button type="submit" class="submit">ĐĂNG KÝ</button>
            <div class="clearfix"></div>
          </form>
          <center style="padding-top: 10px; font-weight: bold;"><span><?= isset($alert) ? $alert : "" ?></span></center>
        </div>
        <ul class="list-inline f-social" style="display: flex; justify-content: center; align-items: center; align-content: center;">
          <li class="list-inline-item"><a href="https://www.facebook.com/Song-Ph%C6%B0%C6%A1ng-Food-103842751860224" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="https://www.facebook.com/messages/t/103842751860224" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="company-name">All Rights Reserved. &copy; 2021
            <a href="">Song Phuong Food</a>
            <br> Created with ❤️ by :
            <a href="https://kotvn.icu/" target="_blank">KotVN</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->
<a href="#" id="back-to-top" title="Back to top" style="display: none;">
  <i class="fas fa-chevron-up"></i>
</a>
<!-- Loading gif -->
<!-- <div class="loader-wrapper">
    <img src="../assets/images/loading.gif">
</div> -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- ALL PLUGINS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../assets/js/jquery.superslides.min.js"></script>
<script src="../assets/js/images-loded.min.js"></script>
<script src="../assets/js/isotope.min.js"></script>
<script src="../assets/js/baguetteBox.min.js"></script>
<script src="../assets/js/custom.js"></script>