<?php

require_once 'actions/db_connect.php';

if ($_GET['publisher_id']) {
    $publisher_id = $_GET['publisher_id'];

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



    $data = $result->fetch_assoc();

    $connect->close();

?>

<!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">     
        <title>Info Publisher</title>


    </head>

    <body>

    <nav class="navbar sticky-top navbar-light bg-light">
        
        <div class= "mx-auto">
                <a class="btn btn-outline-success" href="index.php" role="button">Home</a>
                <a class="btn btn-outline-success" href="create.php" role="button">Add Medium</a>
                <a class="btn btn-outline-success" href="create.php" role="button">Add Author</a>
                <a class="btn btn-outline-success" href="create.php" role="button">Add Publisher</a>
        </div>
        </nav>

        <div class= "mx-auto">
         <h1 class= "mx-auto text-success">Info Publisher</h1>
    </div>
        <!-- <fieldset>
            <legend>Update medium</legend> -->
            <!-- bootstrap version -->
           


        <!-- </fieldset> -->

    </body>

    </html>

<?php
}
?>