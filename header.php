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

    <title>elearningvesit</title>
</head>
<body>
    <!--Start Navigation -->
    
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">E-Learning Platform</a>
    <span> Learn something new! </span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="courses.php " class="nav-link">Courses</a></li>
        <!-- <li class="nav-item custom-nav-item"><a href=" #" class="nav-link">My Profile</a></li> -->
        <!-- <li class="nav-item custom-nav-item"><a href=" #" class="nav-link">Logout</a></li> -->
        <li class="nav-item custom-nav-item"><a href="# " class="nav-link" data-bs-toggle="modal" data-bs-target="#stulogmodalcenter">Login</a></li>
        <li class="nav-item custom-nav-item"><a href="# " class="nav-link" data-bs-toggle="modal" data-bs-target="#sturegmodalcenter">SignUp</a></li>
        <!-- <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stulogmodalcenter">Logout</a></li> -->
        <li class="nav-item custom-nav-item"><a href="# " class="nav-link" data-bs-toggle="modal" data-bs-target="#teacherlogmodalcenter">Teacher Login</a></li>
       
      </ul>
    </div>
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