<?php session_start();

    if (!isset($_SESSION['log_user'])) {
        header("Location: login.php");
        exit();
}?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="home">
        <h1>User Information Form</h1>
        <?php
            $conn = new mysqli("localhost", "root", "", "users");
            if (!$conn) {
            die("Connection failed: " . $conn->connect_error);}

            $log_user = $_SESSION['log_user'];
            $currentpass = $_SESSION['log_pass'];
            $result = $conn->query("SELECT * FROM account WHERE username = '$log_user'");
            $row = $result->fetch_assoc();

            echo "<h1>Welcome, ". $row['fname']. " ". $row['mname']. " ". $row['lname']. "!</h1>"; 
            echo "<strong>Username:</strong> " . $row['username'] . "<br>";
            echo "<strong>Birthday:</strong> " . $row['bday'] . "<br>";
            echo "<strong>Contact Details</strong><br>";
            echo "<strong>Email Address:</strong> " . $row['email'] . "<br>";
            echo "<strong>Contact Number:</strong> " . $row['contact'] . "<br>";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $current = $_POST['current'];
                $new_pass = $_POST['new'];
                $confirmnew = $_POST['confirmnew'];

                if($current != $currentpass || $new_pass != $confirmnew){
                $error = "<div class='passerror'>". "Password does not match". "</div>";
            } else {
                $sql = "UPDATE account SET pass = '$new_pass' WHERE username = '$log_user'";
                if($conn->query($sql) == TRUE) $error = "Password reset successfully!";
            }
            }
            ?>
            <br><br>
            <hr>
            <form method ="POST" action="home.php">
                <label for="current">Current Password: </label>
                <input type="password" name="current">
                <br><br>
                <label for="current">New Password: </label>
                <input type="password" name="new">
                <br><br>
                <label for="current">Confirm New Password: </label>
                <input type="password" name="confirmnew">
                <br>
                <?php if(!empty($error)) echo $error; ?>
                <br><br>
                <input type="submit" name="submit" value="Reset Password">
            </form>
            <br><br>
            <a href="logout.php">Log Out</a>
    </div>
</body>
</html>