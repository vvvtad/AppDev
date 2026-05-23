<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
    <link rel="stylesheet" href="style.css">
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
                    <td>s = $l</td>
                    <td>V = s^3</td>
                    <td>" . pow($l, 3) . "</td>
                </tr>";
        }

        function Rectangle($l, $w, $h) {
            echo "<tr>
                    <td>l = $l, w = $w, h = $h</td>
                    <td>V = l × w × h</td>
                    <td>" . ($l * $w * $h) . "</td>
                </tr>";
        }

        function Cylinder($w, $h) {
            echo "<tr>
                    <td>r = $w, h = $h</td>
                    <td>V = π × r^2 × h</td>
                    <td>" . (pi() * pow($w, 2) * $h) . "</td>
                </tr>";
        }

        function Cone($w, $h) {
            echo "<tr>
                    <td>r = $w, h = $h</td>
                    <td>V = (1/3) × π × r^2 × h</td>
                    <td>" . (1/3 * pi() * pow($w, 2) * $h) . "</td>
                </tr>";
        }

        function Sphere($w) {
            echo "<tr>
                    <td>r = $w</td>
                    <td>V = (4/3) × π × r^3</td>
                    <td>" . (4/3 * pi() * pow($w, 3)) . "</td>
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