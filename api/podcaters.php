<?php
$conn = new mysqli("localhost", "root", "", "podtalk");

if (isset($_POST['submit'])) {
    $name = ($_POST['name']);

    $category = ($_POST['category']);

    $image = str_replace(' ', '', $name) . ".png";
    if (is_array($_FILES['image'])) {
        move_uploaded_file($_FILES['image']['tmp_name'], "ePod/src/assets/images/" . $image);
    }



    $insertquery = "INSERT INTO `podcaters`(`name`, `image`, `category`) VALUES( '" . $name . "', '" . $image . "',  '" . $category . "')";
    $conn->query($insertquery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="sb-nav-fixed">

    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="roomtypesmodalLabel">Add PodCaters</h1>

        </div>
        <div class="modal-body">

            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8  offset-md-1">
                        <div class="form-group mb-2">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control shadow-none" value="">

                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Image:</label>
                            <input type="file" name="image" class="form-control mb-2 shadow-none" value="">

                        </div>

                        <div class="form-group mb-2">
                            <label class="form-label">category:</label>
                            <input type="text" name="category" class="form-control shadow-none" value="">

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary shadow-none" value="Submit" name="submit">
                            <input type="reset" class="btn btn-secondary ml-2 shadow-none" value="Reset">
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</body>

</html>