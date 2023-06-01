<?php include_once 'db.php';
$controller = isset($_GET['controller'])? $_GET['controller'] : 'local';
$action = isset($_GET['action'])? $_GET['action'] : 'getHome';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Bug is Code</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
	</head>
	<body class="is-preload">
			<div id="wrapper">
					<div id="main">
						<div class="inner">
							<?php include_once 'include/sidebar/header.php'?>
							<?php include_once 'process.php'?>
						</div>
					</div>
				<?php include_once 'include/sidebar/sidebar.php'?>
			</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>