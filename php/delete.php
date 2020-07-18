<?php 

require_once 'actions/db_connect.php';

if ($_GET['book_id']) {
   $book_id = $_GET['book_id'];

   $sql = "SELECT * FROM medium WHERE ISBN_EAN = $book_id" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete Car</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
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

<h3>Do you really want to delete this medium?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "book_id" value="<?php echo $data['ISBN_EAN'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"><button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>