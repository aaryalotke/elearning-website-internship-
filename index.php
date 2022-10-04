
<?php
require("connection.php");
?>


<!--start header-->
<?php
include('./header.php');
?>

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
        <a href="#" class ="btn btn-danger" data-bs-toggle="modal" data-bs-target="#sturegmodalcenter">Get Started for free!</a>
        
</div>
</div>

    <main>
       
        <section>
            <br><br>
            <h2><center>Popular Courses</center></h2>
            <br><br>
                <iframe width="33%" height="315" src="https://www.youtube.com/embed/UmnCZ7-9yDY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="33%" height="315" src="https://www.youtube.com/embed/_uQrJ0TkZlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="33%" height="315" src="https://www.youtube.com/embed/vLnPwxZdW4Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
                <iframe width="33%" height="315" src="https://www.youtube.com/embed/1Rs2ND1ryYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="33%" height="315" src="https://www.youtube.com/embed/QLatPwsbDrQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="33%" height="315" src="https://www.youtube.com/embed/x0uinJvhNxI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
       
        
    </main>

    <!--start contact us-->
<?php
include('./contactus.php');
?>

<!-- start footer -->
<?php
include('./footer.php');
?>
    
</body>
</html>
