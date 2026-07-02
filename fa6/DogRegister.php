<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
 
        $conn = new mysqli("localhost", "root", "", "dog_register");
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
            }
        $create_table = "CREATE TABLE IF NOT EXISTS dogs (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            breed VARCHAR(100) NOT NULL,
            age INT(6) UNSIGNED,
            address VARCHAR(255),
            color VARCHAR(100),
            height DECIMAL(5,2),
            weight DECIMAL(5,2)
        )";

        $conn->query($create_table);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $breed = $_POST['breed'];
                $age = $_POST['age'];
                $address = $_POST['address'];
                $color = $_POST['color'];
                $height = $_POST['height'];
                $weight = $_POST['weight'];

                $conn->select_db("dog_register");
                $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight) VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";
                
                if($conn->query($sql) == TRUE){
                    $message = "Registered successfully!";
                }else {
                    $message = "An error occured.";
                }
            }  
    ?>

    <div class="registercontainer">
        <form method="POST" action="DogRegister.php">
            <h2>Dog Information</h2>
            <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Chowder" required>
                <br><br>
                <label for="breed">Breed:</label>
                <input type="text" name="breed" placeholder="Chow Chow" required>
                <br><br>
                <label for="age">Age(in years):</label>
                <input type="number" name="age" placeholder="2" required>
                <br><br>
                <label for="address">Address:</label>
                <input type="text" name="address" placeholder="Quezon City" required>
                <br><br>
                <label for="color">Color:</label>
                <input type="text" name="color" placeholder="White" required>
                <br><br>
                <label for="height">Height(in feet):</label>
                <input type="number" name="height" placeholder="2 feet" required>
                <br><br>
                <label for="weight">Weight(in kilos):</label>
                <input type="number" name="weight" placeholder="20" required>
                <br><br>
            <input type="submit" name="submit" value="Register">
            <br><br>
            <?php if(!empty($message)) echo $message; ?>
        </form>

        <a href="DogView.php">Records</a>
    </div>
</body>
</html>
