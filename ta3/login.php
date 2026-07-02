<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "users");
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);}

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $log_user = $_SESSION['log_user'] = $_POST['user'];
            $log_pass = $_SESSION['log_pass'] = $_POST['pass'];

        $result = $conn->query("SELECT * FROM account WHERE username = '$log_user'");
        $row = $result->fetch_assoc();

                if($row['username'] == $_SESSION['log_user'] && $row['pass'] == $_SESSION['log_pass']){
                    if (isset($_POST['remember'])) {
                                    setcookie("username", $_SESSION['log_user'], time() + 3600, "/");
                                    setcookie("password", $_SESSION['log_pass'], time() + 3600, "/");
                                }
                            header("Location: home.php");
                } else {
                    $error = "<div class='passerror'>". "Username or password is incorrect" ."</div>";
                }
        }
    ?>

    <div class="register">
        <nav>
            <a href="login.php">Log In</a>
            <a href="registration.php">Sign Up</a>
        </nav>
        <form method="POST" action="login.php">
            <h2>Log In</h2>
            <label for="loguser">Username:</label>
            <input type="text" name="user" placeholder="Chris01" required>
            <br><br>
            <label for="logpass">Password:</label>
            <input type="password" name="pass" required>
            <?php if(!empty($error)) echo $error;?>
            <br><br>
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" value="Yes">
            <br><br>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>
</html>