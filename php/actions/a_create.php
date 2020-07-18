<?php 

require_once 'db_connect.php';

if ($_POST) {
   $title = $_POST['title'];
   $image = $_POST['image'];
   $description = $_POST['description'];
   $publishDate = $_POST['publishDate'];
   $type = $_POST['type'];
   $genre = $_POST['genre'];

   $authorID = $_POST['authorID'];
   $publisherID = $_POST['publisherID'];
   $bookID = $_POST['bookID'];


   $sql = "INSERT INTO medium (ISBN_EAN, title, image, description, publishDate, type, genre, authorID, publisherID) VALUES ($bookID', $title', '$image', '$description','$publishDate', '$type', '$genre', $authorID, $publisherID)";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>