<?php
session_start();
require_once "../controller/PersonController.php";
include_once "./LoginForm.php";
$firstName = "";
$email = "";
$passwords = "";
$userProfile = getPerson($_SESSION['userId']);

foreach ($userProfile as $row) {
    $firstName = $row["firstname"];
    $email = $row["email"];
    $passwords = $row["passwords"];
}

?>

<html>

<head>
    <title>Demo Contact</title>
    <link rel="stylesheet" href="css/styles.css">
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

    <div class="gap">
        <div class="container">
            <h1 style="color:red">About You</h1>
            <hr />
            <label>Name: <?php echo $firstName; ?></label><br>
            <label>Email: <?php echo $email; ?></label><br>
            <label>Password <?php echo $passwords; ?></label><br>
        </div>
    </div>

</body>

</html>