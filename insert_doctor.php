<?php
include 'config.php';
// escape variables for security
$doctorid = $_POST['doctorid'];
$dfirstname =  $_POST['dfirstname'];
$dlastname =  $_POST['dlastname'];
$speciality =  $_POST['speciality'];
$hospital = $_POST['hospital'];


$query="INSERT INTO doctor (Name, Surname, Speciality, Hospital, ID_Doctor)
VALUES ('$dfirstname', '$dlastname', '$speciality' ,'$hospital','$doctorid')";

$result = mysql_query($query);

if (!$result) {

	
    die('Invalid query: ' . mysql_error());
}else{
 include '../head.php'; 
		include '../header.php';
		echo "confirmed";
	include '../nav.php';
}




?>