<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
include('connection.php');
// get the post records
try{
$txtName = $_POST['inputName3'];
$txtEmail = $_POST['inputEmail3'];
$txtPhone = $_POST['inputPassword3'];

// database insert SQL code
$sql = "INSERT INTO `student` (`Id`, `name`, `email`, `password`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script type="text/JavaScript"> 
	alert("Sign-up Successful");
	window.location.href="index.php";
	</script>';
}
}
catch(mysqli_sql_exception $e){
	if($e->getCode()==1062){
	echo'<script > 
	alert("E-mail already in use");
	window.location.href="index.php";
	</script>';
}
}
?>