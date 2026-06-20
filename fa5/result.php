<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result of Favorite Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="resultcontainer">
        <?php
        if (isset($_SESSION["color1"]) && isset($_SESSION["color2"]) && isset($_SESSION["color3"]) && isset($_SESSION["color4"]) && isset($_SESSION["color5"])) { ?>
        <table>
            <tr>
                <th colspan=2><h1>Result of Favorite Colors</h1></th>
            </tr>
            <tr>
                <td style=background-color:<?php echo $_SESSION["color1"]; ?>;>Favourite Color 1: <?php echo $_SESSION["color1"]; ?></td>
            </tr>
            <tr>
                <td style=background-color:<?php echo $_SESSION["color2"]; ?>;>Favourite Color 2: <?php echo $_SESSION["color2"]; ?></td>
            </tr>
            <tr>
                <td style=background-color:<?php echo $_SESSION["color3"]; ?>;>Favourite Color 3: <?php echo $_SESSION["color3"]; ?></td>
            </tr>
            <tr>
                <td style=background-color:<?php echo $_SESSION["color4"]; ?>;>Favourite Color 4: <?php echo $_SESSION["color4"]; ?></td>
            </tr>
            <tr>
                <td style=background-color:<?php echo $_SESSION["color5"]; ?>;>Favourite Color 5: <?php echo $_SESSION["color5"]; ?></td>
            </tr>
        </table>
        <?php } else {
            echo "No favorite colors found.";
        } ?>
    </div>
</body>
</html>