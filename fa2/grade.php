<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRADE RANKING</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $fullName = "John Doe";
    ?>

    <?php
        //GRADE RANKING
        $grade = 75;

        if ($grade >= 93 && $grade <= 100) {
            $rank = "A";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbx_kW45RPjQAz1GD2nbL7Q95LgwInWTaDig&s' alt='A Grade' width='50'>";
        } elseif ($grade >= 90 && $grade < 93) {
            $rank = "A-";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbx_kW45RPjQAz1GD2nbL7Q95LgwInWTaDig&s' alt='A- Grade' width='50'>";
        } elseif ($grade >= 87 && $grade < 90) {
            $rank = "B+";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSch8OJ8lMxHhLbR2RxUQYELbHvU60R2siX5A&s' alt='B+ Grade' width='50'>";
        } elseif ($grade >= 83 && $grade < 87) {
            $rank = "B";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSch8OJ8lMxHhLbR2RxUQYELbHvU60R2siX5A&s' alt='B Grade' width='50'>";
        } elseif ($grade >= 80 && $grade < 83) {
            $rank = "B-";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSch8OJ8lMxHhLbR2RxUQYELbHvU60R2siX5A&s' alt='B- Grade' width='50'>";
        } elseif ($grade >= 77 && $grade < 80) {
            $rank = "C+";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC8uZsGMZ7iK8y5CBUClSEhqjezxc9f40oTQ&s' alt='C+ Grade' width='50'>";
        } elseif ($grade >= 73 && $grade < 77) {
            $rank = "C";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC8uZsGMZ7iK8y5CBUClSEhqjezxc9f40oTQ&s' alt='C Grade' width='50'>";
        } elseif ($grade >= 70 && $grade < 73) {
            $rank = "C-";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC8uZsGMZ7iK8y5CBUClSEhqjezxc9f40oTQ&s' alt='C- Grade' width='50'>";
        } elseif ($grade >= 67 && $grade < 70) {
            $rank = "D+";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQNgdy-OMyCIQBT5X7IQM5QKv_e5myejXGtA&s' alt='D+ Grade' width='50'>";
        } elseif ($grade >= 63 && $grade < 67) {
            $rank = "D";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQNgdy-OMyCIQBT5X7IQM5QKv_e5myejXGtA&s' alt='D Grade' width='50'>";
        } elseif ($grade >= 60 && $grade < 63) {
            $rank = "D-";
            $image = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQNgdy-OMyCIQBT5X7IQM5QKv_e5myejXGtA&s' alt='D- Grade' width='50'>";
        } else {
            $rank = "F";
            $image = "<img src='https://media.tenor.com/-iiMZcIHkE8AAAAM/sad-emoji.gif' alt='F Grade' width='50'>";
        }
    ?>

    <table>
        <tr>
            <th colspan="3">GRADE RANKING</th>
        </tr>
        <tr>
            <th colspan="3"><?php echo $fullName; ?></th>
        </tr>
        <tr>
            <th>Grade</th>
            <th colspan="2">Rank</th>
        </tr>
        <tr>
            <td><?php echo $grade; ?></td>
            <td><?php echo $rank; ?></td>
            <td><?php echo $image; ?></td>
        </tr>
    </table>

    <a href="menu.php">< BACK TO MENU</a>
</body>
</html>