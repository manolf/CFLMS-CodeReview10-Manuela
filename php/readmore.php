<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Read more</title>
</head>
<body>
    


<div class="container-fluid">

<nav class="navbar navbar-light bg-light">

<div class="mx-auto">
    <a class="btn btn-outline-success" href="index.php" role="button">Home</a>
    <a class="btn btn-outline-success" href="create.php" role="button">Add Medium</a>
    <a class="btn btn-outline-success" href="createAuthor.php" role="button">Add Author</a>
    <a class="btn btn-outline-success" href="createPublisher.php" role="button">Add Publisher</a>
</div>
</nav>


<?php
$text =  $_GET['text'];
?>




<div class="parallax_section1 parallax_image">
</div><!--END PARALLAX-->

 <div class="parallax_section2 parallax_image">

<div class="row">


            <!--CARS-->


            <div class='card border-dark' >


                  
                    <div class='card-body'>


                                <p><?php echo $text?></p>



                                                  
                    </div><!--END BODY-->
        
            </div><!--END books-->

            
            <!--END showmore-->

            
    </div> 


</div><!--END PARALLAX -->

<div class="parallax_section1 parallax_image">
</div><!--END PARALLAX-->










<nav class="navbar navbar-light bg-light">

<div class="mx-auto">
    <a class="btn btn-outline-success" href="index.php" role="button">Home</a>
    <a class="btn btn-outline-success" href="create.php" role="button">Add Medium</a>
    <a class="btn btn-outline-success" href="create.php" role="button">Add Author</a>
    <a class="btn btn-outline-success" href="create.php" role="button">Add Publisher</a>
</div>
</nav> <!--END FOOTER-->



    </div><!--END CONTAINER-->

    
</script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

 </body>
