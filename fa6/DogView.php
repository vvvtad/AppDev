<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records of Dogs Listed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "dog_register");
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
            }
            ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Address</th>
            <th>Color</th>
            <th>Height</th>
            <th>Weight</th>
        </tr>
            <?php
                    $result = $conn->query("SELECT * FROM dogs");
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["breed"] . "</td>";
                        echo "<td>" . $row["age"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["color"] . "</td>";
                        echo "<td>" . $row["height"] . "</td>";
                        echo "<td>" . $row["weight"] . "</td>";
                        echo "</tr>";
                    }
                
            ?>
    </table>
    <a href="DogRegister.php">Register a Dog</a>
</body>
</html>