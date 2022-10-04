<?php      
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "test";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    
    define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/elearning/uploads/");

    define("FETCH_SRC","http://127.0.0.1/elearning/uploads/")
?>  