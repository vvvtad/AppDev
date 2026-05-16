<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>
</head>
<body>
<div class = "container">
<h2>Student Registration</h2>
<div class = "school">
<form>
<label>For School Use > Permission to Register: </label>
<input type="text" name="permit">
<label>Date: </label>
<input type="date" name="date">

<input type="radio" id=condition name="condition" value="ESL">
<label for="condition">ESL</label>
<input type="radio" id=condition name="condition" value="SPED">
<label for="condition">SPED</label>
<input type="radio" id=condition name="condition" value="IPRC">
<label for="condition">IPRC</label>
<input type="radio" id=condition name="condition" value="ISA">
<label for="condition">ISA</label>

<label>Student Number: </label>
<input type="number" name="studno" required>
<label>Entry Date: </label>
<input type="date" name="entrydate" required>
<label>Entry Type: </label>
<input type="text" name="entrytype" required>
<label>Grade: </label>
<input type="number" name="grade" required>
<label>OEN: </label>
<input type="number" name="oen" required>
<label>Class/Homeform: </label>
<input type="text" name="homeform">
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
<form>
<label>Full Legal Name: </label>
<input type="text" name="name" required>
<label>Preferred Name:<br><p>(if different)</p></label>
<input type="text" name="pname">
<label>Gender: </label>
<input type="radio" id="gender" name="gender" value="Male">
<label for="gender">Male</label>
<input type="radio" id="gender" name="gender" value="Female">
<label for="gender">Female</label>
<label>Date of Birth: </label>
<input type="date" name="birthday" required>

<label>If the student has other siblings in this school, please list them:</label>
<textarea rows="3" cols="6" name="homeform"></textarea>
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
<form>
<label>Name of Previous School Board/Municipality: </label>
<input type = "text" name="pschoolboard">
<label>Last date attended: </label>
<input type = "date" name="attend">
<label>Name of Previous School: </label>
<input type = "text" name="pschool">
<label>Grade at previous school: </label>
<input type = "number" name="pgrade">

<label>Language of Instruction: </label>
<input type="checkbox" id="lang1" name="lang1" value="English">
<label for="lang1">English</label>
<input type="checkbox" id="lang2" name="lang2" value="French">
<label for="lang2">French</label>
<input type="checkbox" id="lang3" name="lang3" value="Other">
<label for="lang3">Other</label>

<label>Reason for Transfer: </label>
<input type = "text" name="transfer">

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
</form>
</div>
<div class="health">
<form>
<label>Medical Conditions (include information on special equipment or medication, if required): </label>
</form>
<form>
<label>For School Use</label>
<label>Immunization Record provided </label>
<input type="radio" id="reponse" name="response" value="Yes">
<label for="response">Yes</label>

<input type="radio" id="reponse" name="response" value="No">
<label for="response">No</label>
</form>
</div>
<div class="citizenship">
<form>
<label>Birth Country: </label>
<input type="text" name="country" required>
<label> if Canada, Province of Birth: </label>
<input type="text" name="province">
<label>Country of Citizenship: </label>
<input type="text" name="countrycitizen" required>
<label>If student not born in Canada, provide date student entered Canada to live for the first time: </label>
<input type="date" name="livedate">
</form>
<form>
<label>For School Use > Status in Canada</label>
<input type="radio" id="status" name="status" value="Canadian Citizen">
<label for="status">Canadian Citizen</label>
<input type="radio" id="status" name="status" value="Permanent Resident/Landed Immigrant">
<label for="status">Permanent Resident/Landed Immigrant</label>
<input type="radio" id="status" name="status" value="Study Permit/Student Visa">
<label for="status">Study Permit/Student Visa</label>
<input type="radio" id="status" name="status" value="Refugee Claimant">
<label for="status">Refugee Claimant</label>
<input type="radio" id="status" name="status" value="Native Ancestry">
<label for="status">Native Ancestry</label>
<label for="status">Other(specify:)</label>
<input type="text" name="status">
<input type="radio" id="status" name="status" value="Verified in OSR">
<label for="status">Verification in OSR</label>
</form>
</div>
</body>
</html>