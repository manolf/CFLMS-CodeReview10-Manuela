<?php 

require_once 'db_connect.php';

if ($_POST) {
   
    //table author
   $firstname = $_POST['firstname'];
   $surname = $_POST['surname'];

   //table medium
   $title = $_POST['title'];
   $image = $_POST['image'];
   $description = $_POST['description'];
   $publishDate = $_POST['publishDate'];
   $type = $_POST['type'];
   $genre = $_POST['genre'];
   
   //table publisher
   $publisher =  $_POST['publisher'];

   $book_id = $_POST['book_id'];
   $author_id = $_POST['author_id'];
   $publisher_id = $_POST['publisher_id'];


   $sql = "UPDATE medium SET title = '$title', genre = '$genre', image = '$image', description = '$description', type = '$type', publishDate = '$publishDate' WHERE ISBN_EAN = $book_id" ;

   $sql2 = "UPDATE author SET firstname = '$firstname', surname = '$surname' WHERE authorID = $author_id";

   $sql3 = "UPDATE publisher SET name = '$publisher' WHERE publisherID = $publisher_id";

   if (mysqli_query($connect, $sql) && mysqli_query($connect,$sql2) && mysqli_query($connect,$sql3) ){
    echo "Successfully updated <br> <a href='../index.php'>Back to Home</a><br>";
}else {
    echo "Error while updating record : ". $connect->error;
}



//    if($connect->query($sql) === TRUE) {
//        echo  "<p>Successfully Updated</p>";
//        echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
//        echo  "<a href='../index.php'><button type='button'>Home</button></a>";
//    } else {
//         echo "Error while updating record : ". $connect->error;
//    }

   $connect->close();

}

?>