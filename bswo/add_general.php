<?php
include "dbConnection.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .form_con {
            margin: 30px;
            border-radius: 30px;
            width: 50%;
            background-color: rgb(223, 223, 223);
            padding-top: 50px;

        }

        .form,
        h2 {

            margin-left: 50px;
            margin-right: 50px;

        }

        label {
            font-weight: bold;
            margin: 5px;
        }

        input {
            margin: 5px;
            background-color: rgb(255, 255, 255);
        }

        .form-group {
            margin-top: 5px;
            margin-bottom: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add General Committee Member</title>
</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $user = $_SESSION['username'];
    } else {
        die("You are not logged in!");
    }
    ?>

    <div class="container form_con">
        <h2>Add General Committee Member</h2><br>

        <form class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="GC_NAME" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Post</label>
                <input name="GC_POST" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Occupation</label>
                <input name="GC_OCCUP" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Edducational Qualification</label>
                <input name="GC_EDU" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input name="GC_ADDRESS" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Code</label>
                <input name="GC_CODE" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image Upload</label>
                <input name="image" style="width:95%;" type="file" class="form-control" id="exampleInputPassword1" value="Choose Image">
            </div>
            <button name="submit" style=" margin-bottom:30px ;position:relative; margin-left:87%" type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <?php

    if (isset($_POST["submit"]) and isset($_FILES["image"])) {
        $target = "images/general/" . basename($_FILES["image"]["name"]);
        $imageFile = $_FILES["image"]["name"];
        echo  $imageFile;
        $GC_NAME = $_POST["GC_NAME"];
        $GC_POST = $_POST["GC_POST"];
        $GC_OCCUP = $_POST["GC_OCCUP"];
        $GC_EDU = $_POST["GC_EDU"];
        $GC_ADDRESS = $_POST["GC_ADDRESS"];
        $GC_CODE = $_POST["GC_CODE"];

        $sql = "INSERT INTO general_committee (GC_NAME,GC_POST,GC_OCCUP,GC_EDU,GC_ADDRESS,GC_CODE,GC_IMAGE) VALUES ('$GC_NAME','$GC_POST','$GC_OCCUP','$GC_EDU','$GC_ADDRESS','$GC_CODE','$imageFile')";
        $cn = mysqli_query($conn, $sql);
        if ($cn) {
    ?>
            <script type="text/javascript">
                alert("Succesfully Added!")
                //window.location.href = "admin_course.php"
            </script>
        <?php
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
            echo "Image go to target";
        }
    } else {
        ?>
        <script type="text/javascript">
            //alert("Please Upload Image!!");
        </script>

    <?php
    }

    ?>
</body>

</html>