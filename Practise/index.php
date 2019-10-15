<?php?>

<html>
	<head>
		<title>Demo Index</title>
		<link rel="stylesheet" href="style.css"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body >
		<div class="header">
			<img src="g.jpg" alt="LOGO">
			<div class="header-right">
				<a href="index.html">Home</a>
				<a href="register.html">Register</a>
				<a href="https://hedaetul-islam.github.io">About</a>
			</div>
		</div>
		<div class="gap">
			<div class="background-image">
				<img src="cupple.jpg" alt="LOGO">
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
			<div>
				<button class="open-button" onclick="openForm()">Login</button>
	
				<div class="form-popup" id="myForm">
				<form action="/php/success.html" class="form-container">
					<h1>Login</h1>
			
					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="email" required>
			
					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>
			
					<button type="submit" class="btn">Login</button>
					<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
				</form>
				</div>
			</div>
			<div class="footer">
				<h3>footer</h3>
			</div>
		</div>
		<script type="text/javascript" src="js/function.js"></script>
	</body>
</html>


