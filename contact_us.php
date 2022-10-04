


<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
include('connection.php');
include('./contactus.php');
// get the post records
try{
$txtName = $_POST['contact_name'];
$txtEmail = $_POST['contact_subject'];
$txtPhone = $_POST['contact_email'];
$txtArea=$_POST['contact_message'];

// database insert SQL code
$sql = "INSERT INTO `contact` (`Id`, `name`,`subject`, `email`, `query`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone','$txtArea')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script type="text/JavaScript"> 
	alert("Contact Records Inserted");
	window.location.href="index.php";
	</script>';
}
}
catch(mysqli_sql_exception $e){
	if($e->getCode()==1062){
	echo'<script > 
	alert("Failed");
	window.location.href="index.php";
	</script>';
}
}
?>