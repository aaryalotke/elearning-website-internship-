<!-- start header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Font awesome css-->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!--Custom css-->
    <link rel="stylesheet" href="css/style.css">

    <title>admin panel</title>
</head>
<body>
    <!--Start Navigation -->
    
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">WELCOME TO TEACHER PANEL</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	<form method="POST">
    <button name="logout"> Logout</button>
	</form>
  </div>
</nav>

<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header("location: index.php");
}
?>

<div class="col-sm-9 mt-5">
	<div class="row mx-5 text center">
		<div class ="col-sm-4 mt-5">
			<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
		<div class="card-header">Notes</div>
		<div class ="card-body">
			
			<a class="btn text-white" href="addnotes.php">Add notes</a>
		</div>
		</div>
		</div>

		<div class ="col-sm-4 mt-5">
			<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
		<div class="card-header">Video Tutorials</div>
		<div class ="card-body">
			
			<a class="btn text-white" href="addvideo.php">Add video</a>
		</div>
		</div>
		</div>

		<div class ="col-sm-4 mt-5">
			<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
		<div class="card-header">Exercise</div>
		<div class ="card-body">
			
			<a class="btn text-white" href="addexercise.php">Add exercise</a>
		</div>
		</div>
		</div>

	</div>
</div>

<!-- active users -->

<div class="container  text-light p-3 rounded my-4">
    <div class="d-flex align-items-center justify-content-between">
    <h2><a href="index.php" class="text-black text-decoration-none"> Active Users </a></h2>
    </div>
</div>


<div class="container mt-5">
<table class="table table-hover text-center">
  <thead class="bg-dark text-light">
    <tr>
      <th width="10%" scope="col">Sr. No.</th>
      <th width="10%" scope="col">Id</th>
      <th width="30%" scope="col">Name</th>
      <th width="30%" scope="col">Email-id</th>
      
    </tr>
  </thead>
  <tbody class="bg-white">
    <?php

        include('connection.php'); 
        $query="SELECT * FROM `student`";
        $result=mysqli_query($con,$query);
        $i=1;
        $fetch_src=FETCH_SRC;

 
        while($fetch=mysqli_fetch_assoc($result))
        {
            echo<<<student
            <tr>
              <th scope="row">$i</th>
              <td>$fetch[Id]</td>
              <td>$fetch[name]</td>
              <td>$fetch[email]</td>
              
               
            </tr>
            student;
            $i++;
        }
    ?>
   
    
  </tbody>
</table>

</div>

