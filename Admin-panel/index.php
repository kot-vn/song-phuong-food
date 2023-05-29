<?php
	include"../assets/views/connectDB.php"; 
?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8" />
	<title>Admin Panel - Song Phương Food</title>
	<!-- Favicons -->
	<link rel="shortcut icon" href="../assets/images/favicon/favicon-16x16.png" type="image/png">
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="../assets/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="../assets/images/favicon/safari-pinned-tab.svg" color="#1d8e24">
	<meta name="msapplication-TileColor" content="#1d8e24">
	<meta name="msapplication-TileImage" content="../assets/images/favicon/mstile-144x144.png">
	<meta name="theme-color" content="#1d8e24">
	<meta name="robots" content="noindex">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="assets/styles.css"/>
	<link rel="stylesheet" href="assets/rps.css">
</head>
<body>
	<?php
        if(empty($_SESSION['admin'])){
            include"login.php";
        } else {
            include"cpanel.php";
        }
    ?>
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
	<script src="assets/scripts.js"></script>
</body>
</html>