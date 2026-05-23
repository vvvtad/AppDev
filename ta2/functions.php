<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
</head>
<body>
    <table>
            <tr>
                <th colspan=3>Volume of Shapes</th>
            </tr>
            <tr>
                <th>Values</th>
                <th>Formula</th>
                <th>Answer</th>
            </tr>

    <?php
        function Cube($l) {
            echo "<tr>
                    <td>$l</td>
                    <td>V = l^3</td>
                    <td>" . pow($l, 3) . "</td>
                </tr>";
        }

        function Rectangle($l, $w, $h) {
            echo "<tr>
                    <td>$l × $w × $h</td>
                    <td>V = l × w × h</td>
                    <td>" . ($l * $w * $h) . "</td>
                </tr>";
        }

        $l = 5;
        $w = 10;
        $h = 15;

        Cube($l);
        Rectangle($l, $w, $h);
        Cylinder($w, $h);
        Cone($w, $h);
        Sphere($w);
        ?>
    
    
    </table>
</body>
</html>