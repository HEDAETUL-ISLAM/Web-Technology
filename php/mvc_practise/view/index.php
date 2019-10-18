<html>

<head>
	<title>Demo Index</title>
	<link rel="stylesheet" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="header">
		<img src="images/g.jpg" alt="LOGO">
		<div class="header-right">
			<a href="index.php">Home</a>
			<a href="register.php">Register</a>
			<a href="about.php">About</a>
		</div>
	</div>
	<div>
		<?php
		include_once "./LoginForm.php"
		?>
	</div>
	<div class="gap">
		<div class="background-image">
			<img src="images/p.jpg" alt="LOGO">
		</div>
		<div class="package-header">
			<h2>Package</h2>
			<p>You can choose your package.</p>
		</div>
		<div class="row">
			<div class="column">
				<div class="card">
					<h3>1000$</h3>
					<p>Some text</p>
					<p>Some text</p>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<h3>10000$</h3>
					<p>Some text</p>
					<p>Some text</p>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<h3>5000$</h3>
					<p>Some text</p>
					<p>Some text</p>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<h3>100000$</h3>
					<p>Some text</p>
					<p>Some text</p>
				</div>
			</div>
		</div>

		<div class="footer">
			<h3>footer</h3>
		</div>
	</div>

</body>

</html>