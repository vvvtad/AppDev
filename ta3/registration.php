<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "users");
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
            }
        $create_table = "CREATE TABLE IF NOT EXISTS account (
            email VARCHAR(244) NOT NULL,
            fname VARCHAR(100) NOT NULL,
            mname VARCHAR(100) NOT NULL,
            lname VARCHAR(100) NOT NULL,
            username VARCHAR(100) NOT NULL UNIQUE PRIMARY KEY,
            pass VARCHAR(100) NOT NULL,
            bday DATE NOT NULL,
            contact VARCHAR(15))";

            $conn->query($create_table);
        ?>
    <div class="register">
        <nav>
            <a href="login.php">Log In</a>
            <a href="registration.php">Sign Up</a>
        </nav>
        <form method="POST" action="registration.php">
            <h2>Personal Information</h2>
                <label for="fname">First Name:</label>
                <input type="text" name="fname" placeholder="Chris" required>
                <br><br>
                <label for="mname">Middle Name:</label>
                <input type="text" name="mname" placeholder="Rosales" required>
                <br><br>
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" placeholder="Tio" required>
                <br><br>
                <label for="user">Username:</label>
                <input type="text" name="user" placeholder="Chris01" required>
                <br><br>
                <label for="pass">Password:</label>
                <input type="password" name="pass" required>
                <br><br>
                <label for="confirmpass">Confirm Password:</label>
                <input type="password" name="confirmpass" required>
                <br><br>
                <label for="bday">Birthday:</label>
                <input type="date" name="bday" required>
                <br><br>
                <label for="email">Email Address:</label>
                <input type="email" name="email" placeholder="chris@gmail.com" required>
                <br><br>
                <label for="contact">Contact Number:</label>
                <input type="tel" name="contact" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="1234-123-1234" required>
                <br><br>
            <input type="submit" name="submit" value="Register">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sign_fname = $_POST['fname'];
                $sign_mname = $_POST['mname'];
                $sign_lname = $_POST['lname'];
                $sign_pass = $_POST['pass'];
                $sign_confirmpass = $_POST['confirmpass'];
                $sign_user = $_POST['user'];
                $sign_bday = $_POST['bday'];
                $sign_email = $_POST['email'];
                $sign_contact = $_POST['contact'];

                if($sign_pass != $sign_confirmpass){
                    echo "<div class='passerror'>". "Password does not match". "</div>";
                } else{
                    $sql = "INSERT INTO account (fname, mname, lname, pass, username, email, bday, contact) VALUES ('$sign_fname', '$sign_mname', '$sign_lname', '$sign_pass', '$sign_user', '$sign_email', '$sign_bday', '$sign_contact')";
                
                    if($conn->query($sql) == TRUE){
                        echo "<h2>Submitted Data</h2>";
                        echo "<strong>First Name:</strong> " . $_SESSION['sign_fname'] . "<br>";
                        echo "<strong>Middle Name:</strong> " . $_SESSION['sign_mname'] . "<br>";
                        echo "<strong>Last Name:</strong> " . $_SESSION['sign_lname'] . "<br>";
                        echo "<strong>Username:</strong> " . $_SESSION['sign_user'] . "<br>";
                        echo "<strong>Birthday:</strong> " . $_SESSION['sign_bday'] . "<br>";
                        echo "<strong>Email Address:</strong> " . $_SESSION['sign_email'] . "<br>";
                        echo "<strong>Contact Number:</strong> " . $_SESSION['sign_contact'] . "<br>";
                    }else {
                        echo "An error occured.";
                    }
                }
            }
            ?>
    </div>
</body>
</html>