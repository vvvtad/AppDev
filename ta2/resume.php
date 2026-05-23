<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table class="container">
        <tr>
            <td class="personal">
                <div class="imgp">
                    <img src="https://cdn.britannica.com/70/234870-050-D4D024BB/Orange-colored-cat-yawns-displaying-teeth.jpg">
                </div>
                <?php require 'personal.php'; ?>
            </td>
        </tr>
        <tr>
            <td class="career">
                <?php include 'career.php'; ?>
            </td>
        </tr>
        <tr>
            <td class="education">
                <?php include 'education.php'; ?>
            </td>
        </tr>
        <tr>
            <td class="skills">
                <?php include 'skills.php'; ?>
            </td>
        </tr>
        <tr>
            <td class="affiliation">
                <?php include 'affiliation.php'; ?>
            </td>
        </tr>
        <tr>
            <td class="experience">
                <?php include 'experience.php'; ?>
            </td>
        </tr>
        <tr>
            <td class="footer">
                <?php require 'footer.php'; ?>
            </td>
        </tr>
    </table>
</body>
</html>