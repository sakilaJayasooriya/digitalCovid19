<?php

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>My Account DigitalCovid19</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:url" content=" "/>
  <meta property="og:type" content="website" />
  <meta property="og:title" content=""/>
  <meta property="og:description" content="" />
  <meta property="og:image" content="img/logo.jpg" />
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/main.js"></script>
 
</head>

<body>
<?php require_once 'layout/head.php'; ?>
<div class="container-fluid mt-5 pt-5 pb-5">
	<div class="row pt-5">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 pt-5">
			<div class="shadow-sm border userbox">
				<a class="fnt-green" href="user.php"><i class="fas fa-poll"></i> Dashboard</a><br>
				<a class="fnt-green" href="user_profile.php"><i class="fas fa-user"></i> Profile</a><br>
				<a class="fnt-green" href="user_symptoms.php"><i class="fas fa-heartbeat"></i> My Symptoms</a><br>
				<hr>
				<a class="fnt-green" href="user_transports.php"><i class="fas fa-bus-alt"></i> My Transports</a><br>
				<hr>
				<a class="fnt-green" href="user_events.php"><i class="fas fa-calendar-alt"></i> My Event</a><br>
				<hr>
				<a class="fnt-green" href="user_network.php"><i class="fas fa-users"></i> My Network</a><br>
				
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 pt-5">
			<img class="img-fluid" src="img/map.jpg">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 pt-5">
			<h2 class="fnt-green text-center">Activities</h2>
			<div class="container-fluid pt-1 pb-5">
				<div class="notif-red shadow-sm p-3 text-center">
					<p>
						<span class="fnt-red h2"><i class="fas fa-heartbeat"></i></span><br>
						<small>12/12/2019 to 03/12/2020</small><br>
						China visit<br>
						Status: Not Safe at all<br>
						Quarantine Immediately<br>
					</p>
				</div>
				<div class="notif-green shadow-sm p-3 text-center">
					<p>
						<span class="fnt-green h2"><i class="fas fa-heartbeat"></i></span><br>
						<small>12/12/2019</small><br>
						Live In concert<br>
						Status: Level 2<br>
						Quarantine Immediately<br>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-light">
	<div class="row pt-5 pb-5 pl-2 pr-2">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 fnt-green pt-2 pb-3">
			<h1><b>Download our app </b></h1>
			<p class="text-justify">You can download android/iso app from follow links. Then register and update your information this will usefull for prevent the virus spreding in sri lanka</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 pt-5">
			<a href=""><img src="img/playstore.png" alt="playstore" class="img-fluid"></a>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 pt-5">
			<a href=""><img src="img/appstore.png" alt="appstore" class="img-fluid"></a>
		</div>
	</div>
</div>

<!-- Footer -->
<footer>
<?php require_once 'layout/footer.php'; ?>
</footer>
</body>
</html>
