<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Create Admin</title>
</head>

<body>
<?php

    $msg = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "bswo";
        $tablename = "account";

        $conn = mysqli_connect($servername, $username, $pass, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO $tablename (username, pass) VALUES ('$username', '$hashed_password')";
        try {
            mysqli_query($conn, $sql);
            $msg = "Account created successfully";
        } catch (Exception $e) {
            die("Error: " . $e);
        }

        mysqli_close($conn);
    }
    ?>

    <div style="background-image: url(2.jpg); height: 100vh">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <div class="container py-5 px-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:
                        5px; background-color: white;">
                            <div class="text-center">
                                <i class="fa-solid fa-user fa-3x"></i>
                            </div>
                            <form class="bg-white px-5 py-3" action="create_admin.php" method="post">
                                <div class="form-outline mb-4">
                                    <label class="form-label fw-bold" for="username">Username</label>
                                    <input type="text" id="username" class="form-control" name="username" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label fw-bold" for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" required />
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Create</button>
                                </div>
                                <h6 style="color: red; margin-top:10px"><?php echo $msg ?></h6>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>