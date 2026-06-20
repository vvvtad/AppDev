<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cookiecontainer">
        <form method="POST" action="cookie.php">
            <label for="fname">First Name:</label>
                <input type="text" name="fname" placeholder="Juan" required>
                <br><br>
                <label for="mname">Middle Name:</label>
                <input type="text" name="mname" placeholder="Amigo" required>
                <br><br>
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" placeholder="Dela Cruz" required>
                <br><br>
            <input type="submit" name="submit" value="Set Cookie">
        </form>
        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];

                setcookie("fname", $fname, time() +10, "/");
                setcookie("mname", $mname, time() +20, "/");
                setcookie("lname", $lname, time() +30, "/");
            }

            if (isset($_COOKIE["fname"]) && isset($_COOKIE["mname"]) && isset($_COOKIE["lname"])) {
                echo "<br><br>" . "<h2>Cookie Data</h2>";
                echo "<strong>First Name:</strong> " . $_COOKIE["fname"] . "<br>";
                echo "<strong>Middle Name:</strong> " . $_COOKIE["mname"] . "<br>";
                echo "<strong>Last Name:</strong> " . $_COOKIE["lname"] . "<br>";
            } else {
                echo "<br><br>" . "Cookie is not set.";
            }
        ?>
    </div>
</body>
</html>