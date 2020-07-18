<?php require_once 'actions/db_connect.php'; ?>



<!DOCTYPE html>
<html>

<head>
    <title>Add Medium</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>

<body>
    <nav class="navbar sticky-top navbar-light bg-light">

        <div class="mx-auto">
            <a class="btn btn-outline-success" href="index.php" role="button">Home</a>
            <a class="btn btn-outline-success" href="create.php" role="button">Add Medium</a>
            <a class="btn btn-outline-success" href="createAuthor.php" role="button">Add Author</a>
            <a class="btn btn-outline-success" href="createPublisher.php" role="button">Add Publisher</a>
        </div>
    </nav>

    <div>
        <h1 class="text-success">Input new Media</h1>
    </div>

    <form action="actions/a_create.php" method="POST">
        <div class="container font-weight-bold">
            <!-- <label for="title">Title: </label> -->
            <input type="text" class="form-control mt-3 mb-3" name="title" placeholder="title" rows="2" />

            <!-- <label for="authorID">Author</label> -->
            <select name="authorID">

                <?php
                $sql = "select * from author";
                $result = mysqli_query($connect, $sql);


                echo "<option> ---- AUTHOR ----- </option>";
                while ($row = mysqli_fetch_array($result)) {
                    $firstname = $row['firstname'];
                    $surname = $row['surname'];
                    $authorID = $row['authorID'];

                    //echo "<option> $row[authorID] $row['firstname'] | $row ['lastname']</option>";
                    echo "<option value= $authorID name= 'authorID' class='form-control'> $firstname $surname ( $authorID)</option>";
                }
                echo "</select>";

                ?>
                <br>
                <!-- <label for="bookID">ISBN/ EAN: </label> -->
                <input type="text" class="form-control mt-3 mb-3" name="bookID" placeholder="ISBN / EAN" />

                <!-- <label for="image">Image: </label> -->
                <input type="text" class="form-control" name="image" placeholder="image" />

                <!-- <label for="genre">Genre: </label> -->
                <input type="text" class="form-control mt-3 mb-3" name="genre" placeholder="genre" />

                <!-- <label for="type">Type: </label> -->
                <input type="text" class="form-control" name="type" placeholder="type" />

                <!-- <label for="publishDate">Publish Date: </label> -->
                <input type="text" class="form-control mt-3 mb-3" name="publishDate" placeholder="publishDate" />

                <!-- <label for="publisherID">Publisher: </label> -->
                <select name="publisherID">
                    <?php
                    $sql2 = "SELECT * FROM publisher";
                    $result2 = mysqli_query($connect, $sql2);


                    echo "<option> ---- PUBLISHER ----- </option>";
                    while ($row = mysqli_fetch_array($result2)) {
                        $publisherID = $row['publisherID'];
                        $name = $row['name'];
                        $zipcode = $row['zipcode'];
                        $city = $row['city'];
                        $country = $row['country'];
                        $size = $row['size'];


                        //echo "<option> $row[authorID] $row['firstname'] | $row ['lastname']</option>";
                        echo "<option value= $publisherID name= 'publisherID' class='form-control'> $name $street $zipcode $city $country, size: $size ($publisherID) </option>";
                    }
                    echo "</select>";



                    ?>
                    <br>
                    <!-- <label for="description">Description: </label> -->
                    <input type="text" class="form-control mt-3 mb-3" name="description" placeholder="description: information about the medium, plot, author..." rows="6" />



                    <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="submit" value="Insert Medium" />

                    <a href="index.php" class="btn btn-block btn-outline-warning">Back</a>

        </div>















    </form>
    </div>

    <?php
    // }

    // Free result set
    mysqli_free_result($result);
    // Close connection
    mysqli_close($connect);
    ?>
    </div>




</body>

</html>