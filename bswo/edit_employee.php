<?php
include "dbConnection.php";
session_start();
$id = $_GET["id"];
echo $id;
$rs = mysqli_query($conn, "Select * from employee where E_CODE = $id");
$E_NAME = "";
$E_POST = "";
$E_BG = "";
$E_SDATE = "";
$E_NID = "";
$E_MOBILE = "";
$E_CODE = "";
$E_IMAGE = "";
while ($row = mysqli_fetch_array($rs)) {
    $E_NAME = $row["E_NAME"];
    $E_POST = $row["E_POST"];
    $E_BG = $row["E_BG"];
    $E_SDATE = $row["E_SDATE"];
    $E_NID = $row["E_NID"];
    $E_MOBILE = $row["E_MOBILE"];
    $E_CODE = $row["E_CODE"];
    $E_IMAGE = $row["E_IMAGE"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="admin_course_style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Edit Employee</title>
</head>

<body>
    <?php

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $user = $_SESSION['username'];
    } else {
        die("You are not logged in!");
    }
    ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <div class="container my-4">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input name="E_NAME" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $E_NAME; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Post</label>
                        <input name="E_POST" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $E_POST; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Blood Group</label>
                        <input name="E_BG" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $E_BG; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Starting Date</label>
                        <input name="E_SDATE" style="height: 50px;width:95%;" type="date" class="form-control" id="exampleInputPassword1" value="<?php echo $E_SDATE; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">NID</label>
                        <input name="E_NID" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $E_NID; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobile</label>
                        <input name="E_MOBILE" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $E_MOBILE; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Employee Code</label>
                        <input name="E_CODE" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $E_CODE; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image Upload</label>
                        <input name="image" style="width:95%;" type="file" class="form-control" id="exampleInputPassword1" value="Choose Image">
                    </div>
                    <button name="update" style=" margin-bottom:30px ;position:relative; margin-left:87%" type="update" class="btn btn-success">Update</button>
                </form>
            </div>

        </div>


    </div>
    <a class="btn btn-success" href="add_employee.php">+</a>

</body>


<?php

if (isset($_POST["update"])) {
    $target = "images/employee/" . basename($_FILES["image"]["name"]);
    $imageFile = $_FILES["image"]["name"];
    $update_query = "UPDATE `employee` SET `E_NAME`='$_POST[E_NAME]',`E_POST`='$_POST[E_POST]',`E_BG`='$_POST[E_BG]',`E_SDATE`='$_POST[E_SDATE]',`E_NID`='$_POST[E_NID]',`E_MOBILE`='$_POST[E_MOBILE]',`E_CODE`='$_POST[E_CODE]',`E_IMAGE`='$imageFile'  WHERE E_CODE =  '$id'";
    if (mysqli_query($conn, $update_query)) {
?>
        <script type="text/javascript">
            $
            alert("Succesfully Updated");
            window.location.href = "admin_dashboard.php"
        </script>
<?php
    }
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo "Image go to target";
    } else {
        echo "Image not go to target";
    }
}

?>

</html>