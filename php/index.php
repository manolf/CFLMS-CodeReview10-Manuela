<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <title>library</title>
</head>
<body>

    <!-- bootstrap version -->
    <nav class="navbar sticky-top navbar-light bg-light">

        <div class="mx-auto">
            <a class="btn btn-outline-success" href="index.php" role="button">Home</a>
            <a class="btn btn-outline-success" href="create.php" role="button">Add Medium</a>
            <a class="btn btn-outline-success" href="createAuthor.php" role="button">Add Author</a>
            <a class="btn btn-outline-success" href="createPublisher.php" role="button">Add Publisher</a>
        </div>
    </nav>
        <div class="jumbotron jumbotron-fluid bg-dark text-white">
            <div class="container">
                <h1 class="display-4">Library</h1>
                <p class="lead">Books are uniquely portable magic [stephen king]</p>
            </div>
        </div>

        <div class="container autos row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto">

        <?php
        $sql = "SELECT * FROM medium inner join author on author.authorID = medium.authorID inner join publisher on medium.publisherID = publisher.publisherID WHERE availability = 'available' and medium.authorID = author.authorID";
          
        //nicer version
        $result = mysqli_query($connect, $sql);
		// fetch the next row (as long as there are any) into $row
		while($row = mysqli_fetch_assoc($result)) {
            $title = $row['title'];
            $author = $row['firstname']. " ".$row['surname'];
            $image = $row['image'];
            $string = $row['description'];
            $publishDate = $row['publishDate'];
            $bookID = $row['ISBN_EAN'];
            $type = $row['type'];
            $genre = $row['genre'];
            $publisher = $row['name'];
            $publisherID = $row['publisherID'];

    //https://stackoverflow.com/questions/4258557/limit-text-length-in-php-and-provide-read-more-link
    $string = strip_tags($string);
    if (strlen($string) > 300) {

    // truncate string
    $stringCut = substr($string, 0, 300);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="/this/story">Read More</a>';
}
//echo $string;
            ?>

<div class="col mb-4 ">
		<div class="card px-1 py-1 bg-light" >
			<img src=<?= $image?>" class="card-img-top foto h-40"	>
			<div class="card-body">
                <h4 class="card-text"><?= $author?> <span  ></span></h4>
                <h4 class="card-title text-success"><?= $title?></h4>
                <h4 class="card-text"><?= $genre?></h4>
                <h6 class = "card-text">published <?= $publishDate?> </></h6>
                <a href="publisherinfo.php?publisher_id=<?= $publisherID?>" class="card-text"><?= $publisher?></a>
                
			</div>
			<div class="card-footer text-center">
				<span class="">
					<p> <?= $string?></p>
                </span>
				<a href="delete.php?book_id=<?= $bookID?>" class="btn btn-outline-danger  mx-auto">Delete medium</a>
				<a href="update.php?book_id=<?= $bookID?>" class="btn btn-outline-success mx-auto">Update medium</a>
			</div>
		</div>
    </div>	

   <?php	
		}
		
		// Free result set
		mysqli_free_result($result);
		// Close connection
		mysqli_close($connect);
	?>

 </div>

</body>
</html>