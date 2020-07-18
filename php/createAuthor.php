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
        <h1 class="text-success">Input new Author</h1>
    </div>

    <form action="actions/a_createauthor.php" method="POST">
        <div class="container font-weight-bold">
            <label for="surname">Author: </label>
            <input type="text" class="form-control mt-3 mb-3" name="firstname" placeholder="Author firstname" rows="2" />
            <input type="text" class="form-control mt-3 mb-3" name="surname" placeholder="Author surname" rows="2" />




            <input class="form-control btn btn-outline-success mt-3 mb-3" type="submit" name="submit" value="Submit new Author" />

            <a href="index.php" class="btn btn-block btn-outline-warning">Back</a>

        </div>

    </form>
    </div>
    </div>


</body>

</html>