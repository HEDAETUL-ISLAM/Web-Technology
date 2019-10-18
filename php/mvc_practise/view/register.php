<?php
require_once "../model/Person.php";
require_once "../controller/PersonController.php";
$firstName = "";
$email = "";
$passwords = "";

if (isset($_POST['insert'])) {
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $passwords = $_POST['passwords'];
    $personController = new PersonController;
    $person = new Person($firstName, $email, $passwords);
    $personController->insertPerson($person);
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
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstName" placeholder="Your name.." required>

                <label for="lname">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email address.." required>

                <label for="lname">Password</label>
                <input type="password" id="password" name="passwords" placeholder="Password.." required>

                    <!-- <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="bangladesh">Bangladesh</option>
                        <option value="india">India</option>
                        <option value="nepal">Nepal</option>
                    </select>
                
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> -->

                <input type="submit" value="Submit" name="insert">

            </form>
        </div>
        <div>
            <button class="open-button" onclick="openForm()">Login</button>

            <div class="form-popup" id="myForm">
                <form action="/action_page.php" class="form-container">
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
    </div>
    <script type="text/javascript" src="js/function.js"></script>
</body>

</html>