<?php
        $fname = ["Juan", "Maria", "John"];
        $mname = ["Amigo", "Isabella", "Mark"];
        $lname = ["Dela Cruz", "Santos", "Espiritu"];

        foreach ($fname as $key => $value) {
            setcookie("fname", $value, time() + 10, "/");
        }
        foreach ($mname as $key => $value) {
            setcookie("mname", $value, time() + 20, "/");
        }
        foreach ($lname as $key => $value) {
            setcookie("lname", $value, time() + 30, "/");
        }
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
        
        if (isset($_COOKIE["fname"]) && isset($_COOKIE["mname"]) && isset($_COOKIE["lname"])) {
            echo "<h2>Cookie Data</h2>";
            echo "<strong>First Name:</strong> " . $_COOKIE["fname"] . "<br>";
            echo "<strong>Middle Name:</strong> " . $_COOKIE["mname"] . "<br>";
            echo "<strong>Last Name:</strong> " . $_COOKIE["lname"] . "<br>";
        } else {
            echo "Cookie is not set.";
        }
    ?>
</body>
</html>