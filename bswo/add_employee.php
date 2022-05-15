<?php
include "dbConnection.php";


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .form_con {
            margin: 30px;
            border-radius: 30px;
            width: 50%;
            /* margin: 0 auto; */
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
            /* width: 50px; */
        }

        .form-group {
            margin-top: 5px;
            margin-bottom: 10px;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Employee</title>
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
        <h2>Add Employee</h2><br>

        <form class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Employee Name</label>
                <input name="E_NAME" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Post</label>
                <input name="E_POST" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Blood Group</label>
                <input name="E_BG" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Starting Date</label>
                <input name="E_SDATE" style="height: 50px;width:95%;" type="date" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">NID</label>
                <input name="E_NID" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mobile</label>
                <input name="E_MOBILE" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Employee Code</label>
                <input name="E_CODE" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1">
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
        $target = "images/employee/" . basename($_FILES["image"]["name"]);
        $imageFile = $_FILES["image"]["name"];
        //echo  $imageFile;
        $E_NAME = $_POST["E_NAME"];
        $E_POST = $_POST["E_POST"];
        $E_BG = $_POST["E_BG"];
        $E_SDATE = $_POST["E_SDATE"];
        $E_NID = $_POST["E_NID"];
        $E_MOBILE = $_POST["E_MOBILE"];
        $E_CODE = $_POST["E_CODE"];
        $sql = "INSERT INTO employee (E_NAME,E_POST,E_BG,E_SDATE,E_NID,E_MOBILE,E_CODE,E_IMAGE) VALUES ('$E_NAME','$E_POST','$E_BG','$E_SDATE','$E_NID','$E_MOBILE','$E_CODE','$imageFile')";

        $cn = mysqli_query($conn, $sql);
        if ($cn) {
    ?>
            <script type="text/javascript">
                alert("Succesfully Added Employee!")
                window.location.href = "admin_dashboard.php"
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