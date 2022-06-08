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
        <li class="nav-item custom-nav-item"><a href="# " class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href=" #" class="nav-link">My Profile</a></li>
        <li class="nav-item custom-nav-item"><a href=" #" class="nav-link">Logout</a></li>
        <li class="nav-item custom-nav-item"><a href="# " class="nav-link">Login</a></li>
        <li class="nav-item custom-nav-item"><a href="# " class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">SignUp</a></li>
        <li class="nav-item custom-nav-item"><a href="# " class="nav-link">Feedback</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!--start video background-->

<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/final video.mp4 ">
        </video>
        <div class ="vid-overlay"></div>
    </div>
    <div class="vid-content"> 
        <h1 class ="my-content">Welcome to E-Learning</h1>
        <small class="my-content">Learn and Implement</small><br>
        <a href="#" class ="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started for free!</a>
        
</div>
</div>

<!--start contact us-->

<div class="container mt-4" id="Contact"> <!--contact us container-->
<h2 class ="text-center mb-4"> Contact Us </h2> <!--contact us heading-->
<div class="row"> <!--contact us row-->
<div class ="col-md-8"> <!--1st column-->
<form action="" method="post">
    <input type="text" class ="form-control" name ="name" placeholder="Name"><br>
    <input type="text" class ="form-control" name ="subject" placeholder="Subject"><br>
    <input type="email" class ="form-control" name ="email" placeholder="E-mail"><br>
    <textarea class ="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
    <input class ="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
</form>
</div>

<!-- contact us second colummn
<div class="col-md-4 stripe text-white text-center">
    <h4> E-Learning</h4>
    <p>Vesit,
        Collector's Colony,Chembur,
        Mumabi-400074<br  />
        Phone: +00000000 <br  />
        www.elearning.com</p>
</div> -->
</div>
</div>

<!-- student registeration -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form body start -->
      <form>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <!-- <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          First radio
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Second radio
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
        <label class="form-check-label" for="gridRadios3">
          Third disabled radio
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<!-- form body end -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>



</body>
</html>