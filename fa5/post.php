<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="postcontainer">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h2>Personal Information</h2>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" placeholder="Juan" required>
            <br><br>
            <label for="mname">Middle Name:</label>
            <input type="text" name="mname" placeholder="Amigo" required>
            <br><br>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" placeholder="Dela Cruz" required>
            <br><br>
            <label for="birth">Date of Birth:</label>
            <input type="date" name="birth" placeholder="Independence Day" required>
            <br><br>
            <label for="address">Address:</label>
            <input type="text" name="address" placeholder="Pelepens" required>
            <br><br>
            <input type="submit" value="Submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $birth = $_POST['birth'];
            $address = $_POST['address'];
            
            if (empty($fname) && empty($mname) && empty($lname) && empty($birth) && empty($address)) {
                echo "Please fill out all fields.";
            } else {
                print("<h2>Submitted Data</h2>");
                print("<strong>First Name:</strong> " . $fname . "<br>");
                print("<strong>Middle Name:</strong> " . $mname . "<br>");
                print("<strong>Last Name:</strong> " . $lname . "<br>");
                print("<strong>Date of Birth:</strong> " . $birth . "<br>");
                print("<strong>Address:</strong> " . $address . "<br>");
            }
            }
        ?>
    </div>

</body>
</html>