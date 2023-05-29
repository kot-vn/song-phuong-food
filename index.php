<?php include"assets/views/connectDB.php"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8" />
	<title>Song Phương Food</title>
	<meta property="og:image" content="assets/images/logo.png">
    <meta property="og:image:width" content="1280"/>
    <meta property="og:image:height" content="720"/>
	<!-- Meta Data -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=yes"/>
	<meta name="format-detection" content="address=yes"/>
	<meta name="author" content="Song Phương Food"/>
	<meta name="description" content="Được thành lập vào ngày 20/03/2019, Công ty Cổ phần SX và TM Song Phương tự hào là đơn vị sản xuất,cung cấp các sản phẩm sạch từ nông sản như: Miến mộc, Phở khô, Bún khô, Đa nem, Ruốc Nấm…có chất lượng xuất khẩu, nguyên liệu sạch, an toàn,đầy đủ các chứng nhận VSATTP, HACCP…"/>
	<!-- Open Graph data -->
	<meta property="og:title" content="Song Phương Food"/>
	<meta property="og:type" content="website"/>
	<!-- <meta property="og:url" content=""/> -->
	<meta property="og:image" content="assets/images/logo.png"/>
	<meta property="og:description" content="Được thành lập vào ngày 20/03/2019, Công ty Cổ phần SX và TM Song Phương tự hào là đơn vị sản xuất,cung cấp các sản phẩm sạch từ nông sản như: Miến mộc, Phở khô, Bún khô, Đa nem, Ruốc Nấm…có chất lượng xuất khẩu, nguyên liệu sạch, an toàn,đầy đủ các chứng nhận VSATTP, HACCP…"/>
	<meta property="og:site_name" content="Trang chủ"/>
	<meta property="og:locale" content="vi_VN">
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="assets/images/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="assets/images/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="assets/images/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css"/>
	<link rel="stylesheet" href="assets/styles/responsive.css">
	<link rel="stylesheet" href="assets/styles/custom.css">
</head>
<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="">
					<?php 
						$query = "select * from images where typeId = 1 limit 1";
						$result = $connect -> query($query);
					?>
					<?php foreach ($result as $item): ?>
						<img src="assets/images/<?=$item['name']?>" alt="Logo Song Phương Food" />
					<?php endforeach ?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="">Trang chủ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Products">Sản phẩm</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="About">Giới thiệu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Gallery">Thư viện</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="Posts">Bài viết</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="Contact">Liên hệ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Shops">Cửa hàng</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<?php 
				$query = "select * from images where typeId = 2";
				$result = $connect -> query($query);
			?>
			<?php foreach ($result as $item): ?>
				<li class="text-center">
					<img src="assets/images/<?=$item['name']?>" alt="">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="m-b-20">
									<strong>
										Chào mừng bạn đến với
										<br>
										Song Phương Food
									</strong>
								</h1>
								<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#menu">Sản phẩm</a></p>
							</div>
						</div>
					</div>
				</li>
			<?php endforeach ?>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next">
				<i class="fas fa-angle-right" aria-hidden="true"></i>
			</a>
			<a href="#" class="prev">
				<i class="fas fa-angle-left" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<!-- End slides -->
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<?php 
						$query = "select * from images where typeId = 3";
						$result = $connect -> query($query);
					?>
					<?php foreach($result as $item): ?>
						<!-- <img src="assets/images/<?=$item['name']?>" alt="" class="img-fluid"> -->
						<video class="img-fluid" autoplay controls>
							<source src="assets/images/<?=$item['name']?>.mp4" type="video/mp4">
							<source src="assets/images/<?=$item['name']?>.ogg" type="video/ogg">
							Your browser does not support the video tag.
						</video>
					<?php endforeach ?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>
							Chào mừng bạn đến với
							<br>
							<span>Song Phương Food</span>
						</h1>
						<h4>Vắn tắt về chúng tôi</h4>
						<?php 
							$query = "select * from text where typeid = 1";
							$result = $connect -> query($query);
						?>
						<?php foreach($result as $item): ?>
							<p><?=$item['details']?></p>
						<?php endforeach ?>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="About">Giới thiệu</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	<hr class="seperate" id="menu">
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Sản phẩm nổi bật</h2>
						<p>Click vào tên sản phẩm để biết thêm chi tiết!</p>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<?php 
							$query = "select * from producttype";
							$result = $connect -> query($query);
						?>
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<?php foreach($result as $item): ?>
								<button data-filter=".<?=$item['id']?>"><?=$item['name']?></button>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div> -->
			<div class="row special-list">
				<?php 
					$query = "select * from products where status=1 order by rand() limit 3";
					$result = $connect -> query($query);
				?>
				<?php foreach($result as $item): ?>
					<div class="col-lg-4 col-md-6 special-grid <?=$item['typeId']?>">
						<div class="gallery-single fix">
							<img src="assets/images/<?=$item['image']?>" class="img-fluid" alt="Image">
							<div class="why-text">
								<center>
									<a href="Products/Detail/?id=<?=$item['id']?>">
										<h4>
											<i><?=$item['name']?></i>
										</h4>
									</a>
									<p><?=$item['shortDes']?></p>
									<h5><?=number_format($item['price'],0,',','.')?> ₫</h5>
								</center>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<center class="inner-column">
				<a class="btn btn-lg btn-circle btn-outline-new-white" href="Products">Tất cả sản phẩm</a>
			</center>
		</div>
	</div>
	<!-- End Menu -->
	<hr class="seperate">
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Thư viện ảnh</h2>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<?php 
						$query = "select * from images where typeId = 5 order by rand() limit 3";
						$result = $connect -> query($query);
					?>
					<?php foreach($result as $item): ?>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<a class="lightbox" href="assets/images/<?=$item['name']?>">
								<img class="img-fluid" src="assets/images/<?=$item['name']?>" alt="Gallery Images">
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<center class="inner-column">
				<a class="btn btn-lg btn-circle btn-outline-new-white" href="Gallery">Xem toàn bộ ảnh</a>
			</center>
		</div>
	</div>
	<!-- Start Customer Reviews -->
	<!-- <div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Đánh giá của khách hàng</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<?php 
							$query2 = "select * from customerrv";
							$result2 = $connect -> query($query2);
						?>
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="assets/images/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0">
										<strong class="text-warning text-uppercase">Tên khách hàng</strong>
								</h5>
								<h6 class="text-dark m-0">Nghề nghiệp</h6>
								<p class="m-0 pt-3">Đánh giá của khách hàng</p>
							</div>
							<?php foreach($result2 as $item2): ?>
								<div class="carousel-item text-center">
									<div class="img-box p-1 border rounded-circle m-auto">
										<img class="d-block w-100 rounded-circle" src="assets/images/<?=$item2['image']?>" alt="">
									</div>
									<h5 class="mt-4 mb-0">
										<strong class="text-warning text-uppercase"><?=$item2['name']?></strong>
									</h5>
									<h6 class="text-dark m-0"><?=$item2['job']?></h6>
									<p class="m-0 pt-3"><?=$item2['review']?></p>
								</div>
							<?php endforeach ?>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fas fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fas fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
	      			</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Customer Reviews -->
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
							$result = $connect -> query($query);
						?>
						<?php foreach($result as $item): ?>
							<p class="lead">
								<?=$item['details']?>
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
							$result = $connect -> query($query);
						?>
						<?php foreach($result as $item): ?>
							<p class="lead">
								<?=$item['details']?>
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
							$result = $connect -> query($query);
						?>
						<?php foreach($result as $item): ?>
							<p class="lead">
								<?=$item['details']?>
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
						$result = $connect -> query($query);
					?>
					<?php foreach($result as $item): ?>
						<p><?=$item['details']?></p>
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
						$result = $connect -> query($query);
					?>
					<?php foreach($result as $item): ?>
						<p class="lead">
							<?=$item['details']?>
						</p>
					<?php endforeach ?>
					<?php 
						$query = "select * from text where typeid = 3";
						$result = $connect -> query($query);
					?>
					<?php foreach($result as $item): ?>
						<p class="lead">
							<?=$item['details']?>
						</p>
					<?php endforeach ?>
					<?php 
						$query = "select * from text where typeid = 4";
						$result = $connect -> query($query);
					?>
					<?php foreach($result as $item): ?>
						<p class="lead">
							<a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=+<?=$item['details']?>" target="_blank">
								<?=$item['details']?>
							</a>
						</p>
					<?php endforeach ?>
				</div>
				<div class="col-lg-3 col-md-6" id="emailSubForm">
					<h3>Đăng ký nhận tin</h3>
					<div class="subscribe_form">
						<?php 
							if (isset($_POST['email'])) {
								$email = $_POST['email'];
								$query = "select * from email_sub where email = '$email'";
								$result = $connect -> query($query);
								if ($connect == null) {
									$alert = "<r style='color: red;'>Lỗi kết nối, vui lòng thử lại sau!</r>";	
								} else {
									if (mysqli_num_rows($result) == 1) {
										$query = "select * from email_sub where email = '$email' and status = 1";
										$result = $connect -> query($query);
										if ($connect == null) {
											$alert = "<r style='color: red;'>Lỗi kết nối, vui lòng thử lại sau!</r>";	
										} else {
											if (mysqli_num_rows($result)==1) {
												$alert = "<r style='color: red;'>Bạn đã đăng ký rồi!</r>";
											} else {
												$query = "update email_sub set status = 1 where email = '$email'";
												$result = $connect -> query($query);
												if ($connect == null) {
													$alert = "<r style='color: red;'>Lỗi kết nối, vui lòng thử lại sau!</r>";	
												} else {
													$alert = "<r style='color: green;'>Đăng ký thành công!</r>";
												}
											}
										}
									} else {
										$query="insert email_sub(email) values('$email')";
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
							<input name="email" id="subs-email" class="form_input" placeholder="Email của bạn..." type="email" required>
							<button type="submit" class="submit">ĐĂNG KÝ</button>
							<div class="clearfix"></div>
						</form>
						<center style="padding-top: 10px; font-weight: bold;"><span><?=isset($alert)?$alert:""?></span></center>
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
	    <img src="assets/images/loading.gif">
	</div> -->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- ALL PLUGINS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="assets/js/jquery.superslides.min.js"></script>
	<script src="assets/js/images-loded.min.js"></script>
	<script src="assets/js/isotope.min.js"></script>
	<script src="assets/js/baguetteBox.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>