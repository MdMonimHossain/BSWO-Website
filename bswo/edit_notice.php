<?php
include "dbConnection.php";
session_start();
$id = $_GET["id"];
echo $id;
$rs = mysqli_query($conn, "Select * from notice where notice_id = $id");

$title = "";
$notice_id = "";
$details = "";

while ($row = mysqli_fetch_array($rs)) {
    $title = $row["title"];
    $notice_id = $row["notice_id"];
    $details = $row["details"];
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
    <title>Edit Notice</title>
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
                        <label for="exampleInputEmail1">Title</label>
                        <input name="title" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $title; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Details</label>
                        <input name="details" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $details; ?>">
                    </div>
                    <button name="update" style=" margin-bottom:30px ;position:relative; margin-left:87%" type="update" class="btn btn-success">Update</button>
                </form>
            </div>

        </div>


    </div>
    <a class="btn btn-success" href="add_notice.php">+</a>

</body>


<?php

if (isset($_POST["update"])) {
    $update_query = "UPDATE `notice` SET `title`='$_POST[title]',`details`='$_POST[details]' WHERE notice_id =  '$id'";
    if (mysqli_query($conn, $update_query)) {
?>
        <script type="text/javascript">
            $
            alert("Succesfully Updated");
            window.location.href = "admin_dashboard.php"
        </script>
<?php
    }
}

?>

</html>