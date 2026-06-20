<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourite Color</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="colorcontainer">
        <table>
            <form method="POST" action="result.php">
                <th colspan=2><h2>Enter your favourite color</h2></th>
                <tr>
                    <td><label for="color">Favorite Color 1:</label></td>
                    <td><input type="text" name="color1" placeholder="C" required></td>
                </tr>
                <tr>
                    <td><label for="color">Favorite Color 2:</label></td>
                    <td><input type="text" name="color2" placeholder="O" required></td>
                </tr>
                <tr>
                    <td><label for="color">Favorite Color 3:</label></td>
                    <td><input type="text" name="color3" placeholder="L" required></td>
                </tr>
                <tr>
                    <td><label for="color">Favorite Color 4:</label></td>
                    <td><input type="text" name="color4" placeholder="O" required></td>
                </tr>
                <tr>
                    <td><label for="color">Favorite Color 5:</label></td>
                    <td><input type="text" name="color5" placeholder="R" required></td>
                </tr>
                <tr>
                    <td colspan=2><input type="submit" value="Submit"></td>
                </tr>
            </form>
        </table>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION["color1"] = $_POST['color1'];
            $_SESSION["color2"] = $_POST['color2'];
            $_SESSION["color3"] = $_POST['color3'];
            $_SESSION["color4"] = $_POST['color4'];
            $_SESSION["color5"] = $_POST['color5'];
        }
        ?>
    </div>
</body>
</html>