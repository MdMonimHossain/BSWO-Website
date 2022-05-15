<?php
include "dbConnection.php";
session_start();

$query = "SELECT number FROM `borrowers` WHERE type='m'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$bmale = $temp['number'];

$query = "SELECT number FROM `borrowers` WHERE type='f'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$bfemale = $temp['number'];

$query = "SELECT number FROM `borrowers` WHERE type='t'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$btotal = $temp['number'];


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
    <title>Edit Borrowers</title>
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
                        <label for="exampleInputEmail1">Male</label>
                        <input name="male" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $bmale; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Female</label>
                        <input name="female" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $bfemale; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Total</label>
                        <input name="total" style="height: 50px;width:95%;" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $btotal; ?>">
                    </div>
                    <button name="update" style=" margin-bottom:30px ;position:relative; margin-left:87%" type="update" class="btn btn-success">Update</button>
                </form>
            </div>

        </div>


    </div>

</body>


<?php

if (isset($_POST["update"])) {
    $update_query = "UPDATE `borrowers` SET `number`='$_POST[male]' WHERE type='m'";
    $update_query2 = "UPDATE `borrowers` SET `number`='$_POST[female]' WHERE type='f'";
    $update_query3 = "UPDATE `borrowers` SET `number`='$_POST[total]' WHERE type='t'";
    if (mysqli_query($conn, $update_query) and mysqli_query($conn, $update_query2) and mysqli_query($conn, $update_query3)) {
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