<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METRIC CONVERSION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        $num = 1;
    ?>

    <table>
        <tr>
            <th colspan="6">METRIC CONVERSIONS</th>
        </tr>
        <tr>
            <td><?php echo $num; ?> centimetre</td>
            <td>=</td>
            <td><?php echo $num * 10; ?> millimetre</td>

            <td><?php echo $num; ?> cm</td>
            <td>=</td>
            <td><?php echo $num * 10; ?> mm</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> decimetre</td>
            <td>=</td>
            <td><?php echo $num * 10; ?> centimetre</td>

            <td><?php echo $num; ?> dm</td>
            <td>=</td>
            <td><?php echo $num * 10; ?> cm</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> metre</td>
            <td>=</td>
            <td><?php echo $num * 100; ?> centimetre</td>

            <td><?php echo $num; ?> m</td>
            <td>=</td>
            <td><?php echo $num * 100; ?> cm</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> kilometre</td>
            <td>=</td>
            <td><?php echo $num * 1000; ?> metre</td>

            <td><?php echo $num; ?> km</td>
            <td>=</td>
            <td><?php echo $num * 1000; ?> m</td>
        </tr>
    </table>

    <table>
        <tr>
            <th colspan="6">IMPERIAL CONVERSIONS</th>
        </tr>
        <tr>
            <td><?php echo $num; ?> foot</td>
            <td>=</td>
            <td><?php echo $num * 12; ?> inch</td>

            <td><?php echo $num; ?> ft</td>
            <td>=</td>
            <td><?php echo $num * 12; ?> in</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> yard</td>
            <td>=</td>
            <td><?php echo $num * 3; ?> foot</td>

            <td><?php echo $num; ?> yd</td>
            <td>=</td>
            <td><?php echo $num * 3; ?> ft</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> chain</td>
            <td>=</td>
            <td><?php echo $num * 22; ?> yard</td>

            <td><?php echo $num; ?> ch</td>
            <td>=</td>
            <td><?php echo $num * 22; ?> yd</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> furlong</td>
            <td>=</td>
            <td><?php echo $num * 220; ?> yard (or <?php echo $num * 10; ?> chain)</td>

            <td><?php echo $num; ?> fur</td>
            <td>=</td>
            <td><?php echo $num * 220; ?> yd (or <?php echo $num * 10; ?> ch)</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> mile</td>
            <td>=</td>
            <td><?php echo $num * 1760; ?> yard (or <?php echo $num * 8; ?> furlong)</td>

            <td><?php echo $num; ?> mi</td>
            <td>=</td>
            <td><?php echo $num * 1760; ?> yd (or <?php echo $num * 8; ?> fur)</td>
        </tr>
    </table>

    <table>
        <tr>
            <th colspan="6">METRIC -> IMPERIAL CONVERSIONS</th>
        </tr>
        <tr>
            <td><?php echo $num; ?> millimetre</td>
            <td>=</td>
            <td><?php echo $num * 0.03937; ?> inch</td>

            <td><?php echo $num; ?> mm</td>
            <td>=</td>
            <td><?php echo $num * 0.03937; ?> in</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> centimetre</td>
            <td>=</td>
            <td><?php echo $num * 0.3937; ?> inch</td>

            <td><?php echo $num; ?> cm</td>
            <td>=</td>
            <td><?php echo $num * 0.3937; ?> in</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> metre</td>
            <td>=</td>
            <td><?php echo $num * 39.37008; ?> inch</td>

            <td><?php echo $num; ?> m</td>
            <td>=</td>
            <td><?php echo $num * 39.37008; ?> in</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> metre</td>
            <td>=</td>
            <td><?php echo $num * 3.28084; ?> feet</td>

            <td><?php echo $num; ?> m</td>
            <td>=</td>
            <td><?php echo $num * 3.28084; ?> ft</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> metre</td>
            <td>=</td>
            <td><?php echo $num * 1.09361; ?> yard</td>

            <td><?php echo $num; ?> m</td>
            <td>=</td>
            <td><?php echo $num * 1.09361; ?> yd</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> kilometre</td>
            <td>=</td>
            <td><?php echo $num * 1093.6133; ?> yard</td>

            <td><?php echo $num; ?> km</td>
            <td>=</td>
            <td><?php echo $num * 1093.6133; ?> yd</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> kilometre</td>
            <td>=</td>
            <td><?php echo $num * 0.621371; ?> miles</td>

            <td><?php echo $num; ?> km</td>
            <td>=</td>
            <td><?php echo $num * 0.621371; ?> mi</td>
        </tr>
    </table>

    <table>
        <tr>
            <th colspan="6">IMPERIAL -> METRIC CONVERSIONS</th>
        </tr>
        <tr>
            <td><?php echo $num; ?> inch</td>
            <td>=</td>
            <td><?php echo $num * 2.54; ?> centimetre</td>

            <td><?php echo $num; ?> in</td>
            <td>=</td>
            <td><?php echo $num * 2.54; ?> cm</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> foot</td>
            <td>=</td>
            <td><?php echo $num * 30.48; ?> centimetre</td>

            <td><?php echo $num; ?> ft</td>
            <td>=</td>
            <td><?php echo $num * 30.48; ?> cm</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> yard</td>
            <td>=</td>
            <td><?php echo $num * 91.44; ?> centimetre</td>

            <td><?php echo $num; ?> yd</td>
            <td>=</td>
            <td><?php echo $num * 91.44; ?> cm</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> yard</td>
            <td>=</td>
            <td><?php echo $num * 0.9144; ?> metres</td>

            <td><?php echo $num; ?> yd</td>
            <td>=</td>
            <td><?php echo $num * 0.9144; ?> m</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> mile</td>
            <td>=</td>
            <td><?php echo $num * 1609.344; ?> metres</td>

            <td><?php echo $num; ?> mi</td>
            <td>=</td>
            <td><?php echo $num * 1609.344; ?> m</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> mile</td>
            <td>=</td>
            <td><?php echo $num * 1.609344; ?> kilometre</td>

            <td><?php echo $num; ?> mi</td>
            <td>=</td>
            <td><?php echo $num * 1.609344; ?> km</td>
        </tr>

    </table>

    <a href="menu.php">< BACK TO MENU</a>
</body>
</html>