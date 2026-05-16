<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPING SYSTEM</title>
</head>

<body>
    <h1>LOOPING SYSTEM</h1><br>

    <?php
        //LOOPING SYSTEM
        $i = 0;

        while ($i < 10) {
            $j = 0;
            while ($j < 10) {
                echo $i;
                echo $j . ", ";
                $j++;
            }
            $i++;
        }
        ?>

    <br><br>
    <a href="menu.php">< BACK TO MENU</a>
</body>
</html>