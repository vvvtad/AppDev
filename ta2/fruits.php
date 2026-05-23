<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th colspan= 4>My Fruits</th>
        </tr>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php
        $fruits = array(
            "Apple" => array(
                "Image" => "<img src='https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg'>",
                "Name" => "Apple",
                "Desc" => "Red",
                "Facts" => "They’re rich in both soluble and insoluble fiber, such as pectin, hemicellulose, and cellulose."
            ),
            "Oranges" => array(
                "Image" => "<img src='https://www.fruitsmith.com/pub/media/wysiwyg/Orange.jpg'>",
                "Name" => "Oranges",
                "Desc" => "Orange",
                "Facts" => "Oranges are a great source of vitamin C, which is important for immune function, skin health, and wound healing."
            ),
            "Dragon Fruit" => array(
                "Image" => "<img src='https://media.post.rvohealth.io/wp-content/uploads/2024/01/A-pink-pitahaya-cut-it-in-half-Dragon-Fruit-facebook.jpg'>",
                "Name" => "Dragon Fruit",
                "Desc" => "Pink",
                "Facts" => "Dragon fruit is a good source of antioxidants, which can help protect your cells from damage caused by free radicals."
            ),
            "Mango"=> array(
                "Image" => "<img src='https://www.paperandtea.com/cdn/shop/articles/Mango_6fb74c95-c9b0-4559-88e8-f542e6d6b18d.jpg'>",
                "Name" => "Mango",
                "Desc" => "Yellow",
                "Facts" => "Mangoes are a good source of vitamin A, which is important for eye health, immune function, and skin health."
            ),
            "Avocado" => array(
                "Image" => "<img src='https://cdn.britannica.com/72/170772-050-D52BF8C2/Avocado-fruits.jpg'>",
                "Name" => "Avocado",
                "Desc" => "Green",
                "Facts" => "Avocados are a good source of healthy fats, which can help improve cholesterol levels and reduce the risk of heart disease."
            ),
            "Cherries" => array(
                "Image" => "<img src='https://saberhealth.com/wp-content/uploads/2024/10/a-bunch-cherries.jpg'>",
                "Name" => "Cherries",
                "Desc" => "Red",
                "Facts" => "Cherries are a good source of antioxidants, which can help reduce inflammation and lower the risk of chronic diseases."
            ),
            "Peaches" => array(
                "Image" => "<img src='https://draxe.com/wp-content/uploads/2016/08/DrAxePeachFB.jpg'>",
                "Name" => "Peaches",
                "Desc" => "Pink",
                "Facts" => "Peaches are a good source of vitamin C, which is important for immune function, skin health, and wound healing."
            ),
            "Durian" => array(
                "Image" => "<img src='https://www.foodie.com/img/gallery/what-is-durian-and-how-do-you-eat-it/intro-1744387044.jpg'>",
                "Name" => "Durian",
                "Desc" => "Green",
                "Facts" => "Durian is a good source of carbohydrates, which can provide energy for the body."
            ),
            "Grapes" => array(
                "Image" => "<img src='https://snaped.fns.usda.gov/sites/default/files/styles/crop_ratio_7_5/public/seasonal-produce/2018-05/grapes_0.jpg.webp?itok=ZiqbgHzZ'>",
                "Name" => "Grapes",
                "Desc" => "Purple",
                "Facts" => "Grapes are a good source of antioxidants, which can help protect your cells from damage caused by free radicals."
            ),
            "Watermelon" => array(
                "Image" => "<img src='https://snaped.fns.usda.gov/sites/default/files/styles/crop_ratio_7_5/public/seasonal-produce/2018-05/watermelon.jpg.webp?itok=4TjwcpU9'>",
                "Name" => "Watermelon",
                "Desc" => "Green",
                "Facts" => "Watermelon is a good source of hydration, as it is made up of about 92% water."
            )
        );

        ksort($fruits);


        foreach($fruits as $fruit) {
            echo "<tr>
                    <td>". $fruit["Image"] ."</td>
                    <td>" . $fruit["Name"] . "</td>
                    <td>" . $fruit["Desc"] . "</td>
                    <td>" . $fruit["Facts"] . "</td>
                </tr>";
        }
    ?>
    </table>    
</body>
</html>