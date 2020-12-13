<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>homePage</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="banner d-flex align-items-center justify-content-center">
	<div class="banner-overlay"></div>
	<div class="banner-content">
		<h3>Value Proposition</h3>
		<p class="text0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<button type="button" class="btn btn-lg btn-warning col-6 mt-4">Start free trial</button>
	</div>
</div>

<div class="container d-flex text-center">
	<div class="col">
		<h4>Your Best Value Proposition</h4>
		<p class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
	</div>
</div>
<div class="container">
	<?php include 'moto.php'; ?>
	<div class="space"></div>
</div>
<div class="container">
	<div class="row justify-content-center align-items-center text-left d-flex d-none">
		<div class="col-sm-5">
			<h5>Feature that is amazing</h5>
			<p class="text3">Lorem ipsum dolor sit amet,
				consectetur adipiscing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="col-sm-5">
			<img src="../Assets/moto4.png" alt="moto4" class="rounded">
		</div>
	</div>
</div>

<div class="space"></div>
<div class="sites">
	<?php include 'sites.php'; ?>
</div>
<div class="footer">
	<?php include 'footer.php' ?>
</div>
</body>
</html>
