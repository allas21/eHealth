<?php include 'head.php'; 
		include 'header.php';
		include 'nav.php';?>

		<h1>Doctor Info</h1>
<form action="insert_doctor.php" method="post">
<input type="text" placeholder="Doctor ID" name="doctorid" />
  <input type="text" placeholder="First Name" name="dfirstname" />
  <input type="text" placeholder="Last Name" name="dlastname"/>  
  <input type="text" placeholder="Speciality" name="speciality"/>
  <input type="text" placeholder="Hospital" name="hospital" />  
    <input type="submit" class="button" />
</form>


<?php
		include 'footer.php';
?>