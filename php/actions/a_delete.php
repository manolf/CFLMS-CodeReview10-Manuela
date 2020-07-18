<?php 

require_once 'db_connect.php';

if ($_POST) {
   echo $book_id = $_POST['book_id'];

   $sql = "DELETE FROM medium WHERE ISBN_EAN = $book_id";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>