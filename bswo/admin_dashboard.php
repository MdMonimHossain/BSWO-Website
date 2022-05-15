<?php
include "dbConnection.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Admin Dashboard</title>
</head>

<body>

  <?php
  session_start();

  if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
  }

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user = $_SESSION['username'];
  } else {
    die("You are not logged in!");
  }
  ?>

  <div class="row">
    <nav style="padding-top: 80px;" class="col-md-2 d-none d-md-block  sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item ">
            <a style="color: black" class="nav-link bg-warning active" href="admin_dashboard.php">
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_employee.php">
              Employees
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_general.php">
              General Committee
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_executive.php">
              Executive Committee
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_notice.php">
              Notice
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_file.php">
              Download
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_image.php">
              Gallery
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="edit_borrowers.php">
              Borrowers
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="edit_members.php">
              Members
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="edit_savings.php">
              Savings
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="edit_loans.php">
              Loan Disbursement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit_loanout.php">
              Loan Outstanding
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              BSWO Home
            </a>
          </li>
          <li class="nav-item">
            <div class="container">
              <form action='admin_dashboard.php' method='post'>
                <input type='submit' name='logout' value='Logout' class="btn btn-success">
              </form>
            </div>
          </li>
        </ul>


      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
        </div>
        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
        </div>
      </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Dashboard</h1>

      </div>
      <div class="row">
        <h2>Employees</h2>
        <div style="text-align: center;" class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Employee Name</th>
                <th>Post</th>
                <th>Blood Group</th>
                <th>Joining Date</th>
                <th>NID</th>
                <th>Mobile</th>
                <th>Employee Code</th>
                <th>Image</th>

              </tr>
            </thead>
            <tbody style="margin-top:5px">

              <?php
              $rs = mysqli_query($conn, "SELECT * FROM `employee`");
              while ($row = mysqli_fetch_array($rs)) {
                echo "<tr>";
                echo "<td>";
                echo $row["E_NAME"];
                echo "</td>";
                echo "<td>";
                echo $row["E_POST"];
                echo "</td>";
                echo "<td>";
                echo $row["E_BG"];
                echo "</td>";
                echo "<td>";
                echo $row["E_SDATE"];
                echo "</td>";
                echo "<td>";
                echo $row["E_NID"];
                echo "</td>";
                echo "<td>";
                echo $row["E_MOBILE"];
                echo "</td>";
                echo "<td>";
                echo $row["E_CODE"];
                echo "</td>";
                echo "<td>";
                echo $row["E_IMAGE"];
                echo "</td>";
                echo "<td>"; ?> <a class="btnId" href="edit_employee.php?id=<?php echo $row["E_CODE"] ?>">Edit</a> Or <a class="btnId" href="delete_employee.php?id=<?php echo $row["E_CODE"] ?>">Delete</a> <?php echo "</td>";
                                                                                                                                                                                                              echo "</tr>";
                                                                                                                                                                                                            }
                                                                                                                                                                                                              ?>
            </tbody>
          </table>
        </div>

        <h2>Notice</h2>
        <div style="text-align: center;" class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Title</th>
                <th>Notice Id</th>
                <th>Details</th>
                <th>Image</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody style="margin-top:5px">

              <?php
              $rs = mysqli_query($conn, "SELECT * FROM `notice`");
              while ($row = mysqli_fetch_array($rs)) {
                echo "<tr>";
                echo "<td>";
                echo $row["title"];
                echo "</td>";
                echo "<td>";
                echo $row["notice_id"];
                echo "</td>";
                echo "<td>";
                echo $row["details"];
                echo "</td>";
                echo "<td>";
                echo $row["image"];
                echo "</td>";
                echo "<td>";
                echo $row["date"];
                echo "</td>";
                echo "<td>"; ?> <a class="btnId" href="edit_notice.php?id=<?php echo $row["notice_id"] ?>">Edit</a> Or <a class="btnId" href="delete_notice.php?id=<?php echo $row["notice_id"] ?>">Delete</a> <?php echo "</td>";
                                                                                                                                                                                                                echo "</tr>";
                                                                                                                                                                                                              }
                                                                                                                                                                                                                ?>
            </tbody>
          </table>
        </div>
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>