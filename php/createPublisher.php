<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Author</title>
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
        <h1 class="text-success">Input new Publisher</h1>
    </div>

    <form action="actions/a_createpublisher.php" method="POST">
        <div class="container font-weight-bold">
            <label for="surname">Publisher: </label>
            <input type="text" class="form-control mt-3 mb-3" name="publisherName" placeholder="Publisher name" rows="2" />


            <select name="addressID">

<?php
$sql = "select * from address";
$result = mysqli_query($connect, $sql);


echo "<option> ---- ADDRESS ----- </option>";
while ($row = mysqli_fetch_array($result)) {
    $street = $row['street'];
    $zipcode = $row['zipcode'];
    $city = $row['city'];
    $country = $row['country'];
    $addressID = $row['addressID'];


    //echo "<option> $row[authorID] $row['firstname'] | $row ['lastname']</option>";
    echo "<option value=  $addressID name= 'authorID' class='form-control'> $street $zipcode $city $country </option>";
}
echo "</select>";



?>



            <input type="text" class="form-control mt-3 mb-3" name="size" placeholder="size: small / medium / big" rows="2" />
            


            <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="submit" value="Submit new Publisher" />

            <a href="index.php" class="btn btn-block btn-outline-warning">Back</a>

        </div>

    </form>
    </div>
    </div>


</body>

</html>