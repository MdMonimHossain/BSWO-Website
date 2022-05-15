<?php
include "dbConnection.php";

$query = "SELECT number FROM `members` WHERE type='m'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$mmale = $temp['number'];

$query = "SELECT number FROM `members` WHERE type='f'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$mfemale = $temp['number'];

$query = "SELECT number FROM `members` WHERE type='t'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$mtotal = $temp['number'];

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

$query = "SELECT number FROM `savings` WHERE type='compulsory'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$scompulsory = $temp['number'];

$query = "SELECT number FROM `savings` WHERE type='voluntary'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$svoluntary = $temp['number'];

$query = "SELECT number FROM `savings` WHERE type='total'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$stotal = $temp['number'];

$query = "SELECT number FROM `savings` WHERE type='term'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$sterm = $temp['number'];

$query = "SELECT number FROM `loans` WHERE type='general'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$lgeneral = $temp['number'];

$query = "SELECT number FROM `loans` WHERE type='micro'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$lmicro = $temp['number'];

$query = "SELECT number FROM `loans` WHERE type='agriculture'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$lagriculture = $temp['number'];

$query = "SELECT number FROM `loans` WHERE type='others'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$lothers = $temp['number'];

$query = "SELECT number FROM `loans` WHERE type='total'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$ltotal = $temp['number'];

$query = "SELECT number FROM `loanOut` WHERE type='general'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$logeneral = $temp['number'];

$query = "SELECT number FROM `loanOut` WHERE type='micro'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$lomicro = $temp['number'];

$query = "SELECT number FROM `loanOut` WHERE type='agriculture'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$loagriculture = $temp['number'];

$query = "SELECT number FROM `loanOut` WHERE type='others'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$loothers = $temp['number'];

$query = "SELECT number FROM `loanOut` WHERE type='total'";
$getres = mysqli_query($conn, $query);

$temp = mysqli_fetch_array($getres);
$lototal = $temp['number'];

?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		-->
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>BSWO</title>
</head>

<body class="home">
	<header class="header">
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<a class="navbar-brand ms-lg-3 ps-lg-3 pb-lg-0" href="home.php">
					<img src="images/logo1.png" style="width: 240px; height:135px" alt="logo" class="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="min-width: 1000px;">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="about.php">About Us</a>
						</li>

						<li class="nav-item dropdown">
							<a href="#" style="text-decoration: none; display: inline-flex; margin-top: 0.2rem; margin-left: 1rem;">Banaful
								Family</a>
							<a class="nav-link dropdown-toggle ps-0" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-flex;">
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="executive_committee.php">Executive Committee</a></li>
								<li><a class="dropdown-item" href="general_committee.php">General Committee</a></li>
								<li><a class="dropdown-item" href="staff.php">Officers and staff</a></li>
							</ul>
						</li>

						<li class="nav-item dropdown">
							<a href="activities.php" style="text-decoration: none; display: inline-flex; margin-top: 0.2rem; margin-left: 1rem;">Activities</a>
							<a class="nav-link dropdown-toggle ps-0" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-flex;">
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="microfinance.php" style="color: #990000;">Microfinance</a></li>
								<li><a class="dropdown-item" href="others.php">Others</a></li>
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="gallery.php">Gallery</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="download.php">Download</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="notice.php">Notice</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>

						<li class="nav-item">
							<button class="btn" type="submit" style="background-color:#990000; color:white; font-weight:bold; padding: .2rem 1rem;">Bangla</button>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto me-lg-5 pe-lg-5" style="font-size: 30px;">
						<li class="nav-item px-2">
							<a href="https://www.facebook.com/BSWO.org/" style="color:#3b5998;"> <i class="fa fa-facebook-square"></i> </a>
						</li>
						<li class="nav-item px-2">
							<a href="https://twitter.com/bswo.org" style="color:	#1DA1F2;"> <i class="fab fa-twitter"></i> </a>
						</li>
						<li class="nav-item px-2">
							<a href="https://www.linkedin.com/in/bswo" style="color:#0077b5;"> <i class="fab fa-linkedin-in"></i> </a>
						</li>
						<li class="nav-item px-2">
							<a href="login.php" style="color:	#FF0000;"> <i class="fa-solid fa-user"></i> </a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div class="container-fluid py-2 mt-1">
		<div class="container py-5 px-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
			<div class="row">
				<div class="col-lg-6">
					<h2 class="text-uppercase mb-3 font-weight-bold">Microfinance activities</h2>
					<hr allign="center" style="height:6px; width:8%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
					<p class="fs-5 pt-4">
						<i class="fa fa-angle-double-right" style="color:#02b321;"></i>&nbsp; Team formation program
						with poor people
						<br>
						<br>
						<i class="fa fa-angle-double-right" style="color:#02b321;"></i>&nbsp; Helping the poor to build
						their own capital
						<br>
						<br>
						<i class="fa fa-angle-double-right" style="color:#02b321;"></i>&nbsp; Income-enhancing lending
						program
						<br>
						<br>
						<i class="fa fa-angle-double-right" style="color:#02b321;"></i>&nbsp; Health care
					</p>
					<br>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<img src="images/IMG_0051.jpg" class="rounded" alt="...">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid py-2 mt-5">
		<div class="container py-5 px-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
			<div class="row">
				<div class="col-lg-6">
					<h2 class="text-uppercase mb-3 font-weight-bold">Aims and objectives</h2>
					<hr allign="center" style="height:6px; width:8%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
					<p class="fs-5 pt-4">
						<i class="fa fa-arrow-circle-right" style="color:#02b321;"></i>&nbsp; To make the intended
						population socially aware.
						<br>
						<i class="fa fa-arrow-circle-right" style="color:#02b321;"></i>&nbsp; Team up through
						solidarity.
						<br>
						<i class="fa fa-arrow-circle-right" style="color:#02b321;"></i>&nbsp; Encourage self-funded
						savings.
						<br>
						<i class="fa fa-arrow-circle-right" style="color:#02b321;"></i>&nbsp; To build a relationship of
						mutual cooperation and sympathy among the aspiring people.
						<br>
						<i class="fa fa-arrow-circle-right" style="color:#02b321;"></i>&nbsp; Provide loans on easy
						terms for income generating activities within the target group.
						<br>
						<i class="fa fa-arrow-circle-right" style="color:#02b321;"></i>&nbsp; Raising awareness of legal
						rights.
						<br>
						<i class="fa fa-arrow-circle-right" style="color:#02b321;"></i>&nbsp; Building public opinion
						against social oppression.
						<br>
						<i class="fa fa-arrow-circle-right" style="color:#02b321;"></i>&nbsp; Strengthening one's
						finances through the overall use of the impractical resources of the intended population.
					</p>
					<br>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<img src="images/us.jpg" class="rounded" alt="...">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center text-center" id="glance">
		<h1 class="text-center" style="font-size:40px; letter-spacing:2px; margin-top:50px;">Microfinance activities at
			a glance
		</h1>
		<hr allign="center" style="height:6px; width:15%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
	</div>

	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-4">
				<table class="table text-center" style="height:20rem; width:26rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
					<thead style="background-color: #02b321;">
						<tr>
							<th scope="col" colspan="2" style="font-size: 32px; color:white">Borrowers</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<h5 style="color: #990000;">Male Borrowers</h4>
									<p style="font-size: 18px; font-weight: bold;"> <?php echo $bmale ?> </p>
							</td>
							<td>
								<h5 style="color: #990000;">Female Borrowers</h4>
									<p style="font-size: 18px; font-weight: bold;"> <?php echo $bfemale ?> </p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<h5 style="color: #990000;">Total Borrowers</h4>
									<p style="font-size: 18px; font-weight: bold;"> <?php echo $btotal ?> </p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-lg-4">
				<table class="table text-center" style="height:20rem; width:26rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
					<thead style="background-color: #02b321;">
						<tr>
							<th scope="col" colspan="2" style="font-size: 32px; color:white">Members</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<h5 style="color: #990000;">Male members</h4>
									<p style="font-size: 18px; font-weight: bold;"> <?php echo $mmale ?> </p>
							</td>
							<td>
								<h5 style="color: #990000;">Female members</h4>
									<p style="font-size: 18px; font-weight: bold;"> <?php echo $mfemale ?> </p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<h5 style="color: #990000;">Total members</h4>
									<p style="font-size: 18px; font-weight: bold;"> <?php echo $mtotal ?> </p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-lg-4">
				<table class="table text-center" style="height:20rem; width:26rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
					<thead style="background-color: #02b321;">
						<tr>
							<th scope="col" colspan="3" style="font-size: 32px; color:white">Savings</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<h5 style="color: #990000;">Compulsory</h4>
									<p style="font-size: 18px; font-weight: bold;"> <?php echo $scompulsory ?> </p>
							</td>
							<td>
								<h5 style="color: #990000;">Voluntary</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $svoluntary ?></p>
							</td>
							<td>
								<h5 style="color: #990000;">Term</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $sterm ?></p>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<h5 style="color: #990000;">Total</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $stotal ?></p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-6">
				<table class="table text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
					<thead style="background-color: #02b321;">
						<tr>
							<th scope="col" colspan="4" style="font-size: 32px; color:white">Loan Disbursement</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<h5 style="color: #990000;">General Microcredit</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $lgeneral ?></p>
							</td>
							<td>
								<h5 style="color: #990000;">Micro Enterprise</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $lmicro ?></p>
							</td>
							<td>
								<h5 style="color: #990000;">Agriculture Loan</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $lagriculture ?></p>
							</td>
							<td>
								<h5 style="color: #990000;">Others</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $lothers ?></p>
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<h5 style="color: #990000;">Total</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $ltotal ?></p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-lg-6">
				<table class="table text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
					<thead style="background-color: #02b321;">
						<tr>
							<th scope="col" colspan="4" style="font-size: 32px; color:white">Loan Outstanding</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<h5 style="color: #990000;">General Microcredit</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $logeneral ?></p>
							</td>
							<td>
								<h5 style="color: #990000;">Micro Enterprise</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $lomicro ?></p>
							</td>
							<td>
								<h5 style="color: #990000;">Agriculture Loan</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $loagriculture ?></p>
							</td>
							<td>
								<h5 style="color: #990000;">Others</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $loothers ?></p>
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<h5 style="color: #990000;">Total</h4>
									<p style="font-size: 18px; font-weight: bold;"><?php echo $lototal ?></p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<footer class="text-white py-3 mt-5" style="background-color: #9C344A;">

		<div class="container-fluid me-lg-5 px-lg-5">

			<div class="row px-lg-5">

				<div class="col-md-5 col-lg-5 col-xl-5 mx-auto mt-3" style="padding: 0rem 4rem;">
					<h5 class="text-uppercase mb-3 font-weight-bold">ABOUT US</h5>
					<p>Banaful Social Welfare Organization (BSWO) was established in 1986. This NGO is a non-profit,
						non-political and non-partisan and women-led organization. It has a large healthcare program. It
						started a microfinance program in Chittagong City Corporation in 1997 and now serves about
						13,000 members.</p>
					<br>
					<p>
						<a href="about.php" class="text-white" style="text-decoration: none;">Click to learn more >></a>
					</p>

				</div>

				<div class="col-md-5 col-lg-5 col-xl-3 mx-auto mt-3" style="padding: 0rem 4rem;">
					<h5 class="text-uppercase mb-3 font-weight-bold">Communication</h5>
					<p>
					<h6 class="text-white">Address:</h6>
					<i class="fas fa-home mr-3"></i> 1st Floor, RFH Hosneara, Mohammadpur Chittagong - 4212, Bangladesh
					</p>
					<p>
					<h6 class="text-white">Phone:</h6>
					<i class="fas fa-phone mr-3"></i> +6023344452622
					</p>
					<p>
					<h6 class="text-white">Email:</h6>
					<i class="fas fa-envelope mr-3"></i> info@bswo.org.bd
					</p>
					<p>
					<h6 class="text-white">Social Media:</h6>

					<ul class="list-unstyled list-inline">
						<li class="list-inline-item">
							<a href="https://www.facebook.com/BSWO.org/" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://twitter.com/bswo.org" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.linkedin.com/in/bswo" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="login.php" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-solid fa-user"></i></a>
						</li>
					</ul>

					</p>
				</div>

				<div class="col-md-2 col-lg-2 col-xl-4 mx-auto mt-3" style="padding: 0rem 4rem;">
					<h5 class="text-uppercase mb-3 font-weight-bold">Menu</h5>
					<p>
						<a href="home.php" class="text-white" style="text-decoration: none;"> Home</a>
						<br>
						<a href="about.php" class="text-white" style="text-decoration: none;"> About Us</a>
						<br>
						<a href="staff.php" class="text-white" style="text-decoration: none;"> Banaful Family</a>
						<br>
						<a href="executive_committee.php" class="text-white" style="text-decoration: none;"> Executive Committee</a>
						<br>
						<a href="general_committee.php" class="text-white" style="text-decoration: none;"> General Committee</a>
						<br>
						<a href="activities.php" class="text-white" style="text-decoration: none;"> Activities</a>
						<br>
						<a href="microfinance.php" class="text-white" style="text-decoration: none;"> Microfinance</a>
						<br>
						<a href="gallery.php" class="text-white" style="text-decoration: none;"> Gallery</a>
						<br>
						<a href="download.php" class="text-white" style="text-decoration: none;"> Download</a>
						<br>
						<a href="notice.php" class="text-white" style="text-decoration: none;"> Notice</a>
						<br>
						<a href="contact.php" class="text-white" style="text-decoration: none;"> Contact</a>
					</p>
				</div>

			</div>

			<hr class="mb-4">

			<div class="row px-lg-5">

				<div class="col-md-7 col-lg-8 ps-lg-5">
					<p> ©2022 Banaful Social Welfare Organization. All Rights Reserved
					</p>

				</div>

				<div class="col-md-5 col-lg-4">
					<div class="text-center text-md-right">

					</div>

				</div>

			</div>

		</div>

	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>