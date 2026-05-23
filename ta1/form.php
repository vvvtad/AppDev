<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //FOR SCHOOL USE > Permission to Register
        $permission = "Yuh";
        $date = "2024-09-01";
        $studnum = 202410001;
        $entrydate = "2024-09-01";
        $entrytype = "New";
        $grade = 86;
        $oen = 123456789;
        $homeform = "10A";

        //STUDENT INFORMATION
        $fullname = "Juan Dela Cruz";
        $pname = "Juan";
        $gender = "Male";
        $birthday = "2008-01-01";
        $siblings = "Maria Dela Cruz, Pedro Dela Cruz";

        //PREVIOUS SCHOOL INFORMATION
        $prevschoolboard = "Somewhere Everywhere School Board";
        $attend = "2024-06-30";
        $prevschool = "Emergardan Elementary School";
        $prevgrade = 83;
        $reason = "Moving to a new city";
    ?>

    <div class = "container">
        <h2 class = "title">Student Registration</h2>
        <div class = "school">
            <form>
                <label>For School Use > Permission to Register: </label>
                <input type="text" name="permit" value="<?php echo $permission;?>">
                <label>Date: </label>
                <input type="date" name="date" value="<?php echo $date;?>">

                <input type="radio" id=condition name="condition" value="ESL">
                <label for="condition">ESL</label>
                <input type="radio" id=condition name="condition" value="SPED">
                <label for="condition">SPED</label>
                <input type="radio" id=condition name="condition" value="IPRC">
                <label for="condition">IPRC</label>
                <input type="radio" id=condition name="condition" value="ISA">
                <label for="condition">ISA</label>

                <label>Student Number: </label>
                <input type="number" name="studno" value="<?php echo $studnum;?>" required>
                <label>Entry Date: </label>
                <input type="date" name="entrydate" value="<?php echo $entrydate;?>" required>
                <label>Entry Type: </label>
                <input type="text" name="entrytype" value="<?php echo $entrytype;?>" required>
                <label>Grade: </label>
                <input type="number" name="grade" value="<?php echo $grade;?>" required>
                <label>OEN: </label>
                <input type="number" name="oen" value="<?php echo $oen;?>" required>
                <label>Class/Homeform: </label>
                <input type="text" name="homeform" value="<?php echo $homeform;?>" required>
            </form>
        </div>
        <div class = "expelled">
            <form>
                <label>Is the student currently expelled from any school or school board?</label>
                <input type="radio" id="reponse" name="response" value="Yes">
                <label for="response">Yes</label>

                <input type="radio" id="reponse" name="response" value="No">
                <label for="response">No</label>
            </form> 
        </div>
        <div class = "student">
            <h2 class = "title">Student Information</h2>
            <form>
                <label>Full Legal Name: </label>
                <input type="text" name="name" value="<?php echo $fullname;?>" required>
                <label>Preferred Name: (if different)</label>
                <input type="text" name="pname" value="<?php echo $pname;?>">
                <label>Gender: </label>
                <input type="radio" id="gender" name="gender" value="Male">
                <label for="gender">Male</label>
                <input type="radio" id="gender" name="gender" value="Female">
                <label for="gender">Female</label>
                <label>Date of Birth: </label>
                <input type="date" name="birthday" value="<?php echo $birthday;?>" required>

                <label>If the student has other siblings in this school, please list them:</label>
                <textarea rows="3" cols="6" name="homeform"><?php echo $siblings;?></textarea>
            </form>
            <form>
                <label>For School Use > Proof of Birth: </label>
                <input type="checkbox" id="proof1" name="proof1" value="OSR">
                <label for="proof1">Copy in OSR</label>
                <input type="checkbox" id="proof2" name="proof2" value="Baptismal Record">
                <label for="proof2">Baptismal Record</label>
                <input type="checkbox" id="proof3" name="proof3" value="Birth Registration">
                <label for="proof3">Baptismal Record</label>
                <input type="checkbox" id="proof4" name="proof4" value="Birth Certificate">
                <label for="proof4">Baptismal Record</label>
                <input type="checkbox" id="proof4" name="proof4" value="Immigration Papers/Card">
                <label for="proof4">Immigration Papers/Card</label>
                <input type="checkbox" id="proof5" name="proof5" value="Passport">
                <label for="proof5">Passport</label>
            </form>
        </div>
        <div class="previous">
            <h2 class = "title">Previous School Information</h2>
            <form>
                <label>Name of Previous School Board/Municipality: </label>
                <input type = "text" name="pschoolboard" value="<?php echo $prevschoolboard;?>">
                <label>Last date attended: </label>
                <input type = "date" name="attend" value="<?php echo $attend;?>">
                <label>Name of Previous School: </label>
                <input type = "text" name="pschool" value="<?php echo $prevschool;?>">
                <label>Grade at previous school: </label>
                <input type = "number" name="pgrade" value="<?php echo $prevgrade;?>">

                <label>Language of Instruction: </label>
                <input type="checkbox" id="lang1" name="lang1" value="English">
                <label for="lang1">English</label>
                <input type="checkbox" id="lang2" name="lang2" value="French">
                <label for="lang2">French</label>
                <input type="checkbox" id="lang3" name="lang3" value="Other">
                <label for="lang3">Other</label>

                <label>Reason for Transfer: </label>
                <input type = "text" name="transfer" value="<?php echo $reason;?>">

                <label>Did the student ever attend a Waterloo Region District School Board in the past? </label>
                <input type="radio" id="reponse" name="response" value="Yes">
                <label for="response">Yes</label>

                <input type="radio" id="reponse" name="response" value="No">
                <label for="response">No</label>

                <label>If yes, name school(s): </label>
                <input type="text" name="school1">
                <input type="text" name="school2">
                <input type="text" name="school3">
                <input type="text" name="school4">

                <input type="submit" id="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>