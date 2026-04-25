<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php $name = "VHEA ERIKA TATAD"; 
    $phone = "+63 912 345 6789";
    $email = "tatadv@gmail.com"; 
    $college = "Far Eastern University";
    $highschool = "Quezon City Science High School"; ?>

    <div class="grid-container">
        <div class="contact">
            <div class="info">
                <h1><?php echo $name ?></h1>
                <h3><?php echo "Phone No.: " . $phone ?></h3>
                <h3><?php echo "Email: " . $email ?></h3>
            </div>

            <img src="profile.jpg" alt="Profile Picture">
        </div>
        
        <div class="profile">
            <h2><?php echo "Profile" ?></h2>
            <hr>
            <h3><?php echo "I am a dedicated student with a passion for learning and growth." ?></h3>
        </div>

        <div class="education">
            <h2><?php echo "Education" ?></h2>
            <hr>
            <ul>
                <li>
                    <h3><?php echo $college ?></h3>
                    <p><?php echo "College 2024 - Present" ?></p>
                </li>
                <li>
                    <h3><?php echo $highschool ?></h3>
                    <p><?php echo "Senior High School 2022 - 2024" ?></p>
                </li>
                <li>
                    <h3><?php echo $highschool ?></h3>
                    <p><?php echo "Junior High School 2020 - 2023" ?></p>
                </li>
                
            </ul>
        </div>

        <div class="skills">
            <h2><?php echo "Skills" ?></h2>
            <hr>
            <ul>
                <li><?php echo "Communication" ?></li>
                <li><?php echo "Teamwork" ?></li>
                <li><?php echo "Problem Solving" ?></li>
            </ul>
        </div>

        <div class="references">
            <hr>
            <h2><?php echo "References" ?></h2>
            <ul>
                <li>
                    <h3><?php echo "Gil Faminialagao" ?></h3>
                    <p><?php echo "Classmate" ?></p>
                </li>
                <li>
                    <h3><?php echo "Chiko" ?></h3>
                    <p><?php echo "Pet Cat" ?></p>
                </li>
            </ul>
        </div>

    </div>
</body>
</html>