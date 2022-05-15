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
						<li class="nav-item active">
							<a class="nav-link" href="home.php">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="about.php">About Us</a>
						</li>

						<li class="nav-item dropdown">
							<a href="#" style="text-decoration: none; display: inline-flex; margin-top: 0.2rem; margin-left: 1rem;">Banaful Family</a>
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
								<li><a class="dropdown-item" href="microfinance.php">Microfinance</a></li>
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

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="images\1.jpg" alt="First slide">
				<div class="carousel-caption d-none d-md-block" style="border-radius: 10px; border: 3px solid #02b321">
					<h3>Banaful Social Welfare Organization</h3>
					<p style="font-size:20px;">Helps the poor to build their own capital</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images\2.jpg" alt="Second slide">
				<div class="carousel-caption d-none d-md-block" style="border-radius: 10px; border: 3px solid #02b321">
					<h3>Banaful Social Welfare Organization</h3>
					<p style="font-size:20px;">Provides assistance in raising the awareness and knowledge of the people</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images\3.jpg" alt="Third slide">
				<div class="carousel-caption d-none d-md-block" style="border-radius: 10px; border: 3px solid #02b321">
					<h3>Banaful Social Welfare Organization</h3>
					<p style="font-size:20px;">Provides training and technical assistance for community empowerment and leadership development</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>

	<div class="row justify-content-center text-center">
		<h1 class="text-center" style="font-size:40px; letter-spacing:2px; margin-top:50px;">Dreams, Missions and Goals
		</h1>
		<hr allign="center" style="height:6px; width:15%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
	</div>

	<div class="row justify-content-center text-center">
		<div class="col-auto">
			<div class="card" style="width: 25rem;">
				<img src="images\dream.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h2 class="card-title" style="color:#02b321;"> <span style="color:#990000; font-weight:bold;"> |
						</span> &nbsp; Dream</h2>
					<p class="card-text">We dream of a society where all the men and women of our future generations
						live in a legal, social and economic environment free from all forms of discrimination.</p>
					<a href="about.php.#dreamMissionGoal" class="btn btn-success">Click to know more</a>
				</div>
			</div>
		</div>

		<div class="col-auto">
			<div class="card" style="width: 25rem;">
				<img src="images\mission.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h2 class="card-title" style="color:#02b321;"> <span style="color:#990000; font-weight:bold;"> |
						</span> &nbsp; Mission</h2>
					<p class="card-text">Based on the organization's capabilities, skills, experience, and available
						external financial and technical support among the target population and the needs of the target
						population.</p>
					<a href="about.php.#dreamMissionGoal" class="btn btn-success">Click to know more</a>
				</div>
			</div>
		</div>

		<div class="col-auto">
			<div class="card" style="width: 25rem;">
				<img src="images\goal.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h2 class="card-title" style="color:#02b321;"> <span style="color:#990000; font-weight:bold;"> |
						</span> &nbsp; Goal</h2>
					<p class="card-text">Banaful is a social welfare organization. The ultimate goal of this
						organization is to improve the quality of life of the underprivileged, disadvantaged and poor
						people, especially children and women.</p>
					<a href="about.php.#dreamMissionGoal" class="btn btn-success">Click to know more</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid py-2 mt-5 bg-light">
		<div class="container py-5 mb-2">
			<div class="row">
				<div class="col-lg-6 mb-2">
					<h2 class="text-uppercase mb-3 font-weight-bold">ABOUT US</h2>
					<hr allign="center" style="height:6px; width:8%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
					<p class="fs-5">Our founder Mahfuza Begum, a less educated woman, 41 years ago today organized training in literacy, bamboo, sewing, embroidery, etc. for the oppressed poor women of Hamzarbagh, located in the 6th Ward West Sholosahar of Chittagong City Corporation. At the end of the training, women were given ideas about different methods of health education, family planning. The journey of Banaful started on 25th July 1986 at Mahfuza Begum's residence with only 30 female trainees.
					</p>
					<br>
					<a href="about.php" class="btn btn-success">Click to know more</a>
				</div>
				<div class="col-lg-6 mb-2">
					<div class="card">
						<img src="images/founder.jpg" class="rounded" alt="...">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center text-center bg-light">
		<h1 class="text-center" style="font-size:40px; letter-spacing:2px; margin-top:50px;"> Founder and Executive Council
		</h1>
		<hr allign="center" style="height:6px; width:15%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
	</div>

	<div class="row justify-content-center text-center bg-light">
		<div class="col-auto" style="width: 18rem;">
			<div class="card border-secondary" style="width: 15rem;">
				<img src="images/committee/founder.jpg" class="card-img-top" alt="..." style="width: 15rem; height:16rem">
				<div class="card-body">
					<h4 class="card-title" style="color:#000000;"> Mahfuza Begum </h4>
					<p class="card-text" style="font-size: 20px;">Founder</p>
				</div>
			</div>
		</div>

		<div class="col-auto" style="width: 18rem;">
			<div class="card border-secondary" style="width: 15rem;">
				<img src="images/committee/president.jpg" class="card-img-top" alt="..." style="width: 15rem; height:16rem">
				<div class="card-body">
					<h4 class="card-title" style="color:#000000;"> Jahanara Begum </h4>
					<p class="card-text" style="font-size: 20px;">President</p>
				</div>
			</div>
		</div>

		<div class="col-auto" style="width: 18rem;">
			<div class="card border-secondary" style="width: 15rem;">
				<img src="images/committee/vp.jpg" class="card-img-top" alt="..." style="width: 15rem; height:16rem">
				<div class="card-body">
					<h4 class="card-title" style="color:#000000;"> Shahid Ullah </h4>
					<p class="card-text" style="font-size: 20px;">Vice President</p>
				</div>
			</div>
		</div>
		<div class="col-auto" style="width: 18rem;">
			<div class="card border-secondary" style="width: 15rem;">
				<img src="images/committee/gs.jpg" class="card-img-top" alt="..." style="width: 15rem; height:16rem">
				<div class="card-body">
					<h4 class="card-title" style="color:#000000;"> Rezia Begum </h4>
					<p class="card-text" style="font-size: 20px;">General Secretary</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center bg-light" style="height: 30px;">

	</div>

	<div class="row justify-content-center text-center bg-light">
		<div class="col-auto" style="width: 18rem; ">
			<div class="card border-secondary" style="width: 15rem;">
				<img src="images/committee/treasurer.jpg" class="card-img-top" alt="..." style="width: 15rem; height:16rem">
				<div class="card-body">
					<h4 class="card-title" style="color:#000000;"> Shamima A Jannat </h4>
					<p class="card-text" style="font-size: 20px;"> Treasurer</p>
				</div>
			</div>
		</div>

		<div class="col-auto" style="width: 18rem;">
			<div class="card border-secondary" style="width: 15rem;">
				<img src="images/committee/m1.jpg" class="card-img-top" alt="..." style="width: 15rem; height:16rem">
				<div class="card-body">
					<h4 class="card-title" style="color:#000000;"> Momtaj Begum </h4>
					<p class="card-text" style="font-size: 20px;">Member</p>
				</div>
			</div>
		</div>

		<div class="col-auto" style="width: 18rem;">
			<div class="card border-secondary" style="width: 15rem;">
				<img src="images/committee/m2.jpg" class="card-img-top" alt="..." style="width: 15rem; height:16rem">
				<div class="card-body">
					<h4 class="card-title" style="color:#000000;"> Nizam Uddin </h4>
					<p class="card-text" style="font-size: 20px;">Member</p>
				</div>
			</div>
		</div>
		<div class="col-auto" style="width: 18rem;">
			<div class="card border-secondary" style="width: 15rem;">
				<img src="images/committee/m3.jpg" class="card-img-top" alt="..." style="width: 15rem; height:16rem">
				<div class="card-body">
					<h4 class="card-title" style="color:#000000;"> Umme Salma </h4>
					<p class="card-text" style="font-size: 20px;">Member</p>
				</div>
			</div>
		</div>

	</div>

	<div class="row justify-content-center bg-light" style="height: 30px;">

	</div>

	<div class="row justify-content-center bg-light">
		<div class="col-auto">
			<a allign="center" href="executive_committee.php" class="btn btn-success" style="width:400px; height: 40px;">Click to know more</a>
		</div>
	</div>

	<div class="row justify-content-center bg-light" style="height: 50px;">

	</div>

	<div class="row justify-content-center text-center">
		<h1 class="text-center" style="font-size:40px; letter-spacing:2px; margin-top:30px;"> Microfinance activities</h1>
	</div>

	<div class="row justify-content-center text-center" style="margin-top: 30px; margin-bottom: 30px;">
		<p style="font-size: 20px; "> <i class="fa fa-arrow-right" style="color:#02b321;"></i> Team formation program with poor people &nbsp; &nbsp; <i class="fa fa-arrow-right" style="color:#02b321;"></i> Helping the poor to build their own capital &nbsp; &nbsp; <i class="fa fa-arrow-right" style="color:#02b321;"></i> Income-enhancing lending program &nbsp; &nbsp; <i class="fa fa-arrow-right" style="color:#02b321;"></i> Health care &nbsp; &nbsp; </p>
	</div>

	<div class="row justify-content-center text-center">
		<div class="col-auto" style="width: 28rem; ">
			<div class="card border-success" style="width: 25rem;">
				<div class="card-body">
					<h1 class="card-title" style="color:#990000;"> <?php echo $bfemale ?> </h1>
					<p class="card-text" style="font-size: 20px; font-weight: bold; color:gray;"> Female borrowers </p>
				</div>
			</div>
		</div>

		<div class="col-auto" style="width: 28rem;">
			<div class="card border-success" style="width: 25rem;">
				<div class="card-body">
					<h1 class="card-title" style="color:#990000;"> <?php echo $bmale ?> </h1>
					<p class="card-text" style="font-size: 20px; font-weight: bold; color:gray;"> Male borrowers</p>
				</div>
			</div>
		</div>

		<div class="col-auto" style="width: 28rem;">
			<div class="card border-success" style="width: 25rem;">
				<div class="card-body">
					<h1 class="card-title" style="color:#990000;"> <?php echo $btotal ?> </h1>
					<p class="card-text" style="font-size: 20px; font-weight: bold; color:gray;"> Total borrowers</p>
				</div>
			</div>
		</div>

	</div>

	<div class="row justify-content-center" style="height: 30px;">

	</div>

	<div class="row justify-content-center">
		<div class="col-auto">
			<a allign="center" href="microfinance.php" class="btn btn-success" style="width:400px; height: 40px;">Click to know more</a>
		</div>
	</div>

	<div class="container-fluid bg-light mt-5">
		<div class="row">
			<div class="col-sm-5 text-white" style="background-image: url(images/members.jpg); padding: 4rem;">
				<h2 class="mb-3 font-weight-bold">Other Activities</h2>
				<hr style="height:6px; width:8%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
				<p class="fs-5">
					<i class="fa fa-arrow-right" style="color:#02b321;"></i>&nbsp; In the current activities of the
					organization (microfinance activities, rights activities, social movement activities) to increase
					the quality of services and expand the activities more extensively in the current work area and in
					new areas
					<br>
					<br>
					<i class="fa fa-arrow-right" style="color:#02b321;"></i>&nbsp; Further expand the scope of
					microfinance activities based on the needs of the members
					<br>
					<br>
					<i class="fa fa-arrow-right" style="color:#02b321;"></i>&nbsp; Adoption of programs in rural areas
					<br>
				</p>
				<br>
				<a href="others.php" class="btn btn-success">Click to know more</a>
			</div>
			<div class="col-sm-7 p-5">
				<div class="row justify-content-center text-center">
					<h2 class="mb-3 font-weight-bold">Members</h2>
					<hr allign="center" style="height:6px; width:8%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
				</div>
				<div class="row justify-content-center text-center mt-5" style="font-size: 20px;">
					<div class="card bg-light border-0" style="width: 15rem;">
						<div class="card-body fw-bold">
							<h5 class="card-title" style="color:#990000; font-size: 30px;"> <?php echo $mmale ?> </h5>
							<p class="card-text" style="color:#4f4f4f;">Male Members</p>
						</div>
					</div>
					<div class="card bg-light" style="width: 15rem; height: 15rem; border-radius: 50%; border-width: 5px; border-color: #990000;">
						<div class="card-body fw-bold">
							<br>
							<br>
							<h5 class="card-title" style="color:#990000; font-size: 35px;"> <?php echo $mtotal ?> </h5>
							<p class="card-text" style="color:#4f4f4f;">Total Members</p>
						</div>
					</div>
					<div class="card bg-light border-0" style="width: 15rem;">
						<div class="card-body fw-bold">
							<h5 class="card-title" style="color:#990000; font-size: 30px;"> <?php echo $mfemale ?> </h5>
							<p class="card-text" style="color:#4f4f4f;">Female Members</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center mt-5">
					<a href="microfinance.php.#glance" class="btn btn-success" style="width: 25%;">Click to know more</a>
				</div>
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