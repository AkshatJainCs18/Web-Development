<?php
if (isset($_POST['submit'])) {
    $interest = $_POST['interest'];
    if (sizeof($interest) < 3||sizeof($interest)>5) {
        echo "At least select any 3 and at max 5 Interests.";}}

    ?>
<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var x = document.forms["FORM"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var y = document.forms["FORM"]["contact"].value;
  if (y.length!=10) {
    alert("length must be 10");
    return false;
  }
  
}
</script>
</head>
<body>

<form name="FORM" action="Question1.php" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="name"><br>
  EMAIL<input type="email" name="email" required ><br>
  CONTACT<input type="text" name="contact" ><br>
  CITY<select  name="City" >
                 <option>Dehradun</option>
                 <option>Delhi</option>
                 <option>Chandigarh</option>
                 <option>London</option>
                 <option>Lahore</option>
                 <option>Others</option>
                 </select><br>
        COURSE<select name="Course" >
               <option>BTECH</option>
                 <option>BCA</option>
                 <option>MCA</option>
                 <option>BBA</option>
                 <option>MBA</option>
                 <option>Others</option>
                 </select><br>
                 INTERESTS
        Programming<input type="checkbox" name="interest[]" value="Programming">
        Cricket<input type="checkbox" name="interest[]" value="Cricket">
        Football<input type="checkbox" name="interest[]" value="Football">
        Reading<input type="checkbox" name="interest[]" value="Reading">
        Singing<input type="checkbox" name="interest[]" value="Singing">
        Painting<input type="checkbox" name="interest[]" value="Paiting">
        <br>


  <input type="submit" value="Submit">
</form>

</body>
</html>
