<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="postcontainer">
    <form method="GET" action="get.php">
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
        if (empty($fname) && empty($mname) && empty($lname) && empty($birth) && empty($address)) {
            echo "Submit the form to see the data.";
        }
        
        if(isset($_GET['fname']) && isset($_GET['mname']) && isset($_GET['lname']) && isset($_GET['birth']) && isset($_GET['address'])) {
            $fname = $_GET['fname'];
            $mname = $_GET['mname'];
            $lname = $_GET['lname'];
            $birth = $_GET['birth'];
            $address = $_GET['address'];

            echo "<h2>Submitted Data</h2>";
            echo "<strong>First Name:</strong> " . $fname . "<br>";
            echo "<strong>Middle Name:</strong> " . $mname . "<br>";
            echo "<strong>Last Name:</strong> " . $lname . "<br>";
            echo "<strong>Date of Birth:</strong> " . $birth . "<br>";
            echo "<strong>Address:</strong> " . $address . "<br>";
        }
    ?>
    </div>
</body>
</html>