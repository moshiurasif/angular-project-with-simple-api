<?php
$conn = new mysqli("localhost", "root", "", "podtalk");

if (isset($_POST['submit'])) {
    $name = ($_POST['name']);
    // $image = ($_FILES['image']['tmp_name']);
    $duration = ($_POST['duration']);
    $count = ($_POST['count']);
    $pname = ($_POST['pname']);
    // $pimage = ($_FILES['pimage']['tmp_name']);
    $pprof = ($_POST['pprof']);
    $desc = ($_POST['desc']);
    $image = str_replace(' ', '', $name) . ".png";
    if (is_array($_FILES['image'])) {
        move_uploaded_file($_FILES['image']['tmp_name'], "ePod/src/assets/images/" . $image);
    }
    $pimage = str_replace(' ', '', $pname) . ".png";
    if (is_array($_FILES['pimage'])) {
        move_uploaded_file($_FILES['pimage']['tmp_name'], "ePod/src/assets/images/" . $pimage);
    }


    $insertquery = "INSERT INTO `latest_episode`(`episode_name`, `episode_image`, `episode_duration`, `episode_count`, `podcaters_name`, `podcaters_image`, `podcaters_profession`, `description`) VALUES( '" . $name . "', '" . $image . "', '" . $duration . "', '" . $count . "', '" . $pname . "', '" . $pimage . "', '" . $pprof . "', '" . $desc . "')";
    $result = $conn->query($insertquery);
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
            <h1 class="modal-title fs-5" id="roomtypesmodalLabel">Add Episode</h1>

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
                            <label class="form-label">Duration:</label>
                            <input type="text" name="duration" class="form-control shadow-none" value="">

                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Count:</label>
                            <input type="text" name="count" class="form-control shadow-none" value="">

                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">PodCaters Name:</label>
                            <input type="text" name="pname" class="form-control shadow-none" value="">

                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Podcaters Image:</label>
                            <input type="file" name="pimage" class="form-control mb-2 shadow-none" value="">

                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">PodCaters Profession:</label>
                            <input type="text" name="pprof" class="form-control shadow-none" value="">

                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Description</label>
                            <textarea name="desc" id="" cols="30" rows="10"></textarea>

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