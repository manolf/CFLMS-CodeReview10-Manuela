<?php

require_once 'actions/db_connect.php';

if ($_GET['book_id']) {
    $book_id = $_GET['book_id'];

    $sql = "SELECT * FROM medium 
   inner join author on author.authorID = medium.authorID 
   inner join publisher on medium.publisherID = publisher.publisherID 
   WHERE availability = 'available' 
   AND medium.authorID = author.authorID 
   AND ISBN_EAN = $book_id";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">     
        <title>Edit Medium</title>


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
         <h1 class= "mx-auto text-success">Update medium</h1>
    </div>
        <!-- <fieldset>
            <legend>Update medium</legend> -->
            <!-- bootstrap version -->
            <form action="actions/a_update.php" method="post">
                <div class="container font-weight-bold">

                    <div class="form-group">
                        <label for="firstname">Author Firstname: </label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo $data['firstname'] ?>" />
                        <label for="surname">Author Surname: </label>
                        <input type="text" class="form-control" name="surname" value="<?php echo $data['surname'] ?>" />

                        <label for="title">Title: </label>
                        <input type="text" class="form-control" name="title" placehold rows="2"er="title" value="<?php echo $data['title'] ?>"  />

                        <label for="image">Image: </label>
                        <input type="text" class="form-control" name="image" placeholder="image" value="<?php echo $data['image'] ?>" />

                        <label for="genre">Genre: </label>
                        <input type="text" class="form-control" name="genre" placeholder="genre" value="<?php echo $data['genre'] ?>" />

                        <label for="type">Type: </label>
                        <input type="text" class="form-control" name="type" placeholder="type" value="<?php echo $data['type'] ?>" />

                        <label for="publishDate">Publish Date: </label>
                        <input type="text" class="form-control" name="publishDate" placeholder="publishDate" value="<?php echo $data['publishDate'] ?>" />

                        <label for="publisher">Publisher: </label>
                        <input type="text" class="form-control" name="publisher" placeholder="publisher" value="<?php echo $data['name'] ?>" />

                        <label for="description">Description: </label>
                        <input type="text" class="form-control" name="description" rows="6"  value="<?php echo $data['description'] ?>" />

                        <input type="hidden" name="book_id" value="<?php echo $data['ISBN_EAN'] ?>" />
                        <input type="hidden" name="author_id" value="<?php echo $data['authorID'] ?>" />
                        <input type="hidden" name="publisher_id" value="<?php echo $data['publisherID'] ?>" />

                        <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="submit" value= "Save changes" />

				        <a href="index.php" class="btn btn-block btn-outline-warning">Back</a>

                    </div>



                </div>
            </form>


        <!-- </fieldset> -->

    </body>

    </html>

<?php
}
?>