<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body>
<?php

    $error_msg = "";
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

        $sql = "SELECT * FROM $tablename WHERE username = '$username'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['pass'])) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header('Location: admin_dashboard.php');
                } else {
                    $error_msg = "*Incorrect username or password";
                }
            }
        } else {
            $error_msg = "Login Failed";
        }

        mysqli_close($conn);
    }
    ?>

    <div style="background-image: url(images/founder.jpg); height: 100vh">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <div class="container py-5 px-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:
                        5px; background-color: white;">
                            <div class="text-center">
                                <i class="fa-solid fa-user fa-3x"></i>
                            </div>
                            <form class="bg-white px-5 py-3" action="login.php" method="post">
                                <div class="form-outline mb-4">
                                    <label class="form-label fw-bold" for="username">Username</label>
                                    <input type="text" id="username" class="form-control" name="username" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label fw-bold" for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" required />
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Log in</button>
                                </div>
                                <h6 style="color: red; margin-top:10px"><?php echo $error_msg ?></h6>
                            </form>
                            <div class="text-center">
                                <a href="home.php">BSWO Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>