<?php
 include("connection.php");

function notes_upload($pdf_notes){
    $tmp_loc=$pdf_notes['tmp_name'];
    $new_name=$pdf_notes['name'];

    $new_loc= UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc)){
         //echo"file moved";
        header("location: addnotes.php?alert=file_upload");
        exit;

        }
    else{
        // echo"cannot move file";
         return $new_name;
    }
}

function video_upload($vid){
    $tmp_loc=$vid['tmp_name'];
    $new_name=$vid['name'];

    $new_loc= UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc)){
         //echo"file moved";
        header("location: addvideo.php?alert=file_upload");
        exit;

        }
    else{
        // echo"cannot move file";
         return $new_name;
    }
}

function exercise_upload($pdf_exercise){
    $tmp_loc=$pdf_exercise['tmp_name'];
    $new_name=$pdf_exercise['name'];

    $new_loc= UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc)){
         //echo"file moved";
        header("location: addexercise.php?alert=file_upload");
        exit;

        }
    else{
        // echo"cannot move file";
         return $new_name;
    }
}

if(isset($_POST['add_notes']))
{
    // print_r($_POST);
    // print_r($_FILES['notespdf']);

    foreach($_POST as $key => $value){
       $_POST[$key]= mysqli_real_escape_string($con,$value); 
    }

    $notespath=notes_upload($_FILES['notespdf']);
    $query="INSERT INTO `teacher_adds_notes`( `name`, `file_notes`) VALUES ('$_POST[name]','$notespath')";
    if(mysqli_query($con,$query)){
        header("location: addnotes.php?success=added ");
    }
    else{
        header("location: teacher_dashboard.php?alert=add_failed ");
    }
}

if(isset($_POST['add_video']))
{
    // print_r($_POST);
    // print_r($_FILES['notespdf']);

    foreach($_POST as $key => $value){
       $_POST[$key]= mysqli_real_escape_string($con,$value); 
    }

    $videopath=video_upload($_FILES['video']);
    $query="INSERT INTO `teacher_adds_video`( `name`, `file_video`) VALUES ('$_POST[name]','$videopath')";
    if(mysqli_query($con,$query)){
        header("location: addvideo.php?success=added ");
    }
    else{
        header("location: teacher_dashboard.php?alert=add_failed ");
    }
}

if(isset($_POST['add_exercise']))
{
    // print_r($_POST);
    // print_r($_FILES['notespdf']);

    foreach($_POST as $key => $value){
       $_POST[$key]= mysqli_real_escape_string($con,$value); 
    }

    $exercisepath=notes_upload($_FILES['exercisepdf']);
    $query="INSERT INTO `teacher_adds_exercise`( `name`, `file_exercise`) VALUES ('$_POST[name]','$exercisepath')";
    if(mysqli_query($con,$query)){
        header("location: addexercise.php?success=added ");
    }
    else{
        header("location: teacher_dashboard.php?alert=add_failed ");
    }
}
?>