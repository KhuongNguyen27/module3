<!DOCTYPE HTML>
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<?php include_once 'include/header.php'?>
							<!-- Banner -->
							<?php include_once dirname(__FILE__).'/include/content/Banner.php'?>
							<!-- Section -->
							<?php //include_once dirname(__FILE__).'/include/content/Elements.php'?>
							<?php include_once dirname(__FILE__).'/include/content/SelectionHome.php'?>
						</div>
					</div>

				<!-- Sidebar -->
				<?php include_once 'include/sidebar/sidebar.php'?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>