<?php require_once 'actions/db_connect.php'; ?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Info Publisher</title>


</head>

<body>

    <nav class="navbar sticky-top navbar-light bg-light">

        <div class="mx-auto">
            <a class="btn btn-outline-success" href="index.php" role="button">Home</a>
            <a class="btn btn-outline-success" href="create.php" role="button">Add Medium</a>
            <a class="btn btn-outline-success" href="create.php" role="button">Add Author</a>
            <a class="btn btn-outline-success" href="create.php" role="button">Add Publisher</a>
        </div>
    </nav>

    <div class="container">
    <?php
$publisher_id = $_GET['publisher_id'];

$sql = "SELECT * from publisher where publisherId = $publisher_id";

$result = mysqli_query($connect, $sql);
// fetch the next row (as long as there are any) into $row
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];

    echo "<h2 class='text-success'>Media of $name in our library: </h2>";
}
?>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN / EAN</th>
                    <th>image</th>
                    <th>publishDate</th>
                    <th>type</th>
                    <th>genre</th>
                </tr>
            </thead>
            <tbody>
                <?php
$publisher_id = $_GET['publisher_id'];

$sql = "SELECT * 
    FROM medium 
    inner join author on author.authorID = medium.authorID 
    inner join publisher on medium.publisherID = publisher.publisherID 
    WHERE medium.publisherID = $publisher_id";


$result = mysqli_query($connect, $sql);
// fetch the next row (as long as there are any) into $row
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $author = $row['firstname'] . " " . $row['surname'];
    $image = $row['image'];
    $publishDate = $row['publishDate'];
    $bookID = $row['ISBN_EAN'];
    $type = $row['type'];
    $genre = $row['genre'];
    $publisher = $row['name'];
    $publisherID = $row['publisherID'];

    echo "<tr>";
    echo "<td>$title</td>";
    echo "<td>$author</td>";
    echo "<td>$bookID</td>";
    echo "<td><img src='$image' width='200px' height='300px'></td>";
    echo "<td>$publishDate</td>";
    echo "<td>$type</td> ";
    echo "<td>$genre</td>";
    echo "</tr> ";
}

?> 

            </tbody>
        </table>
    </div>
    <!-- <fieldset>
            <legend>Update medium</legend> -->
    <!-- bootstrap version -->



    <!-- </fieldset> -->

</body>

</html>

<?php


// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($connect);
?>