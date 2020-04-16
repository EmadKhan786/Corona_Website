<?php 

$con = mysqli_connect('localhost', 'root','');

if ($con) {
	echo "Connection sucessful";
}else{
	echo "Not Connected";
}
 mysqli_select_db($con, 'coronadb');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$symptom = $_POST['coronasymtom'];
$message = $_POST['message'];

$checkbox ="";

foreach($symptom as $checkbox){
	$checkbox .= $checkbox."," ;
}

$insertquery = "INSERT INTO coronacase(username,email,mobile,symptom,message) VALUES('$username','$email','$mobile','$checkbox','$message')";
//print_r($insertquery)
if(mysqli_query($con, $insertquery)){
	echo "comment is added";
	header('location:index.php');
}else{
	echo "problem is arised";
}


 ?>

 
