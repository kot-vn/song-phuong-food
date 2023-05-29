<?php include"../assets/views/connectDB.php"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8" />
	<title>Hệ thống cửa hàng - Song Phương Food</title>
	<meta property="og:image" content="../assets/images/logo.png">
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
	<meta property="og:image" content="../assets/images/logo.png"/>
	<meta property="og:description" content="Được thành lập vào ngày 20/03/2019, Công ty Cổ phần SX và TM Song Phương tự hào là đơn vị sản xuất,cung cấp các sản phẩm sạch từ nông sản như: Miến mộc, Phở khô, Bún khô, Đa nem, Ruốc Nấm…có chất lượng xuất khẩu, nguyên liệu sạch, an toàn,đầy đủ các chứng nhận VSATTP, HACCP…"/>
	<meta property="og:site_name" content="Hệ thống cửa hàng"/>
	<meta property="og:locale" content="vi_VN">
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="../assets/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="../assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="../assets/images/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="../assets/images/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="../assets/images/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="../assets/styles/style.css"/>
	<link rel="stylesheet" href="../assets/styles/responsive.css">
	<link rel="stylesheet" href="../assets/styles/custom.css">
	<!-- Custom table -->
	<style>
		.table td, .table th{
			border: none;
			border-top: 1px solid #dee2e6;
		}
		.table-fixed tbody {
			height: 500px;
			overflow-y: auto;
			width: 100%;
		}

		.table-fixed thead,
		.table-fixed tbody,
		.table-fixed tr,
		.table-fixed td,
		.table-fixed th {
			display: block;
		}

		.table-fixed tbody td,
		.table-fixed tbody th,
		.table-fixed thead > tr > th {
			float: left;
			position: relative;

			&::after {
				content: '';
				clear: both;
				display: block;
			}
		}
	</style>
</head>
<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<?php include"../assets/views/logo.php"; ?>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="../index.php">Trang chủ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Products">Sản phẩm</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../About">Giới thiệu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Gallery">Thư viện</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="../Posts">Bài viết</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="../Contact">Liên hệ</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="../Shops">Cửa hàng</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Hệ thống cửa hàng</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	<!-- Start Map -->
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Bản đồ hệ thống phân phối</h2>
						<span>Nhấn vào địa chỉ để hiển thị trên Google Map</span>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="coming-soon">
			<img src="../assets/images/Untitled-1.png">
		</div> -->
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-12 mx-auto bg-white rounded shadow">
					<!-- Fixed header table-->
					<div class="table-responsive">
						<table class="table table-fixed">
							<thead>
								<tr>
									<th scope="col" class="col-6">Tên cửa hàng</th>
									<th scope="col" class="col-6">Địa chỉ</th>
								</tr>
							</thead>
							<?php 
								$query = "select * from shops where status=1";
								$result = $connect -> query($query);
							?>
							<tbody>
								<?php foreach($result as $item): ?>
									<tr>
										<td class="col-6"><?=$item['name']?></td>
										<td class="col-6">
											<a href="https://www.google.com/maps/search/<?=$item['name']?>+<?=$item['address']?>" target="_blank">
												<?=$item['address']?>
											</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div><!-- End -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Map -->
	<?php include"../assets/views/bottomContents.php"; ?>
</body>
</html>