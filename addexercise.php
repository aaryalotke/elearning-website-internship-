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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

    

<div class="container bg-dark text-light p-3 rounded my-4">
    <div class="d-flex align-items-center justify-content-between">
    <h2><a href="index.php" class="text-white text-decoration-none"> NOTES </a></h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addexercise">
  Add
</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addexercise" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addexerciseLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="crud.php" method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Add Exercise</h5>
      </div>
      <div class="modal-body">
      <div class="input-group mb-3">
  <span class="input-group-text" >Name</span>
  <input type="text" class="form-control" name="name" required>
</div>

<div class="input-group mb-3">
  <label class="input-group-text" >Upload</label>
  <input type="file" class="form-control" name="exercisepdf" accept=".pdf" required>
</div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" name="add_exercise">Add</button>
      </div>
    </div>

    </form>
   
  </div>
</div>

<div class="container mt-5">
<table class="table table-hover text-center">
  <thead class="bg-dark text-light">
    <tr>
      <th width="10%" scope="col">Sr. No.</th>
      <th width="30%" scope="col">File</th>
      <th width="30%" scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody class="bg-white">
    <?php

        include('connection.php'); 
        $query="SELECT * FROM `teacher_adds_exercise`";
        $result=mysqli_query($con,$query);
        $i=1;
        $fetch_src=FETCH_SRC;

 
        while($fetch=mysqli_fetch_assoc($result))
        {
            echo<<<exercise
            <tr>
              <th scope="row">$i</th>
              <td><img src="$fetch_src$fetch[file_exercise] width="150px"</td>
              <td>$fetch[name]</td>
              
               
            </tr>
            exercise;
            $i++;
        }
    ?>
   
    
  </tbody>
</table>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>




</html>