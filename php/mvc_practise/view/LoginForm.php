<?php
session_start();
require_once "../model/Login.php";
require_once "../controller/PersonController.php";
$id = "";
$passwords = "";

if (isset($_POST['login'])) {
    $id = $_POST['id'];
    $passwords = $_POST['passwords'];
    $login = new Login($id, $passwords);
    $userId = loginPerson($login);
    if ($userId > 0) {
        $_SESSION['userId'] = $userId;
        include_once "./errors/success.php";
    } else {
        include_once "./errors/wrong.php";
    }
}
?>
<html>

<body>
    <div>
        <button class="open-button" onclick="openForm()">Login</button>

        <div class="form-popup" id="myForm">
            <form action="about.php" method="POST" class="form-container">
                <h1>Login</h1>

                <label for="id"><b>Id</b></label>
                <input type="text" placeholder="Enter Id" name="id" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwords" required>

                <button type="submit" class="btn" name="login">Login</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/function.js"></script>
</body>

</html>