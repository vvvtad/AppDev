<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiplication Table</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <?php
            for($i = 0; $i <= 10; $i++){
                echo "<tr>";
                for($j = 0; $j <= 10; $j++){
                    $result = $i * $j;
                    if(($result) % 2 == 0){
                        if($i % 2 == 0 && $j % 2 == 0){
                            echo "<td class='yellow'>" . ($result) . "</td>";
                        } else {
                            echo "<td class='red'>" . ($result) . "</td>";
                        }
                    } else {
                        echo "<td class='yellow'>" . ($result) . "</td>";
                    }
                }
                echo "</tr>";
            }
?>
</table>
</body>
</html>