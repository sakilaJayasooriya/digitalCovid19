<?php

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>My Connection - DigitalCovid19</title>
  <meta name="description" content="My Connection - DigitalCovid19">
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
<div class="container-fluid mt-5 pt-5 pb-5 pr-0">
	<div class="row pt-4">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 pl-4">
			<div class="shadow-sm border userbox">
				<a class="fnt-green" href="user.php"><i class="fas fa-poll"></i> Dashboard</a><br>
				<hr>
				<a class="fnt-green" href="user_profile.php"><i class="fas fa-user"></i> Profile</a><br>
				<hr>
				<a class="fnt-green" href="user_symptoms.php"><i class="fas fa-heartbeat"></i> My Symptoms</a><br>
				<hr>
				<a class="fnt-green" href="user_transports.php"><i class="fas fa-bus-alt"></i> My Transports</a><br>
				<hr>
				<a class="fnt-green" href="user_events.php"><i class="fas fa-calendar-alt"></i> My Events</a><br>
				<hr>
				<a class="fnt-green" href="user_network.php"><i class="fas fa-users"></i> My Network</a><br>
				
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 fnt-gray">
			<h2 class="fnt-green">Connection Requests</h2><br>
			<div class="container-fluid pb-5">
				<div class="addedContactItems shadow-sm p-3 text-center">
					<p>
						<span class="fnt-green"><i class="fas fa-user"></i></span><br>
						<small>Family</small><br>
						Nimesha Hewawasm
					</p>
					<a class="btn btn-sm btn-green" href="user_network.php?id=1&action=confirm">Accept</a>
					<a class="btn btn-sm btn-secondary" href="user_network.php?id=1&action=confirm">Reject</a>
				</div>
				<div class="addedContactItems shadow-sm p-3 text-center">
					<p>
						<span class="fnt-green"><i class="fas fa-user"></i></span><br>
						<small>Relative</small><br>
						Sakila Jayasooriy
					</p>
					<a class="btn btn-sm btn-green" href="user_network.php?id=1&action=confirm">Accept</a>
					<a class="btn btn-sm btn-secondary" href="user_network.php?id=1&action=confirm">Reject</a>
				</div>
				<div class="addedContactItems shadow-sm p-3 text-center">
					<p>
						<span class="fnt-green"><i class="fas fa-user"></i></span><br>
						<small>Friend</small><br>
						Karunharn Bavaram
					</p>
					<a class="btn btn-sm btn-green" href="user_network.php?id=1&action=confirm">Accept</a>
					<a class="btn btn-sm btn-secondary" href="user_network.php?id=1&action=confirm">Reject</a>
				</div>
			</div>
			<h2 class="fnt-green">Add Connection</h2>
			<div class="loginbox pl-4 pr-3">
				<form action="network_editpage.php" method="post" role="form">
				<div class="form-group pt-3">
					<label>He/She is my?</label><br>
					<div class="custom-control custom-radio custom-control-inline">
					    <input required type="radio" class="custom-control-input" id="family" name="relativeType" value="family">
					    <label class="custom-control-label" for="family">Family</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					    <input required type="radio" class="custom-control-input" id="relative" name="relativeType" value="relative">
					    <label class="custom-control-label" for="relative">Relative</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					    <input required type="radio" class="custom-control-input" id="friend" name="relativeType" value="friend">
					    <label class="custom-control-label" for="friend">Friend</label>
					</div>
				</div>
				<div class="form-group pt-4">
					<label>Contact By?</label><br>
					<div class="custom-control custom-radio custom-control-inline">
					    <input required type="radio" class="custom-control-input" id="rname" name="contactMethod" value="rname">
					    <label class="custom-control-label" for="rname">Name</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					    <input required type="radio" class="custom-control-input" id="nic" name="contactMethod" value="nic">
					    <label class="custom-control-label" for="nic">NIC</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					    <input required type="radio" class="custom-control-input" id="phone" name="contactMethod" value="phone">
					    <label class="custom-control-label" for="phone">Phone</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					    <input required type="radio" class="custom-control-input" id="email" name="contactMethod" value="email">
					    <label class="custom-control-label" for="email">Email</label>
					</div>
				</div>
				<div class="form-group">
					<input required type="text" name="contactDetail" id="contactDetail" class="form-control" placeholder="Contact Details">
				</div>
				<div class="form-group text-left">
					<button type="submit" name="save-submit" id="btn_saveform" class="btn btn-green" value="save-submit">Request connection</button>
				</div>
			</form>
			</div><br>
			<h2 class="fnt-green">My Network</h2><br>
			<div class="container-fluid">
				<div class="addedItems shadow-sm p-3 text-center">
					<p>
						<span class="fnt-green"><i class="fas fa-user"></i></span><br>
						<small>Family</small><br>
						Nimesha Hewawasm
					</p>
				</div>
				<div class="addedItems shadow-sm p-3 text-center">
					<p>
						<span class="fnt-green"><i class="fas fa-user"></i></span><br>
						<small>Relative</small><br>
						Sakila Jayasooriy
					</p>
				</div>
				<div class="addedItems shadow-sm p-3 text-center">
					<p>
						<span class="fnt-green"><i class="fas fa-user"></i></span><br>
						<small>Friend</small><br>
						Karunharn Bavaram
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
<script type="text/javascript">

$('#public').click(function() {
      if ($(this).is(':checked')) {
            $('#withWhom').prop('disabled', true);
            $('#train').prop('disabled', false);
            $('#bus').prop('disabled', false);
            $('#busNumber').prop('disabled', false);
            $('#route').prop('disabled', false);
      }
});
$('#private').click(function() {
      if ($(this).is(':checked')) {
            $('#train').prop('disabled', true);
            $('#bus').prop('disabled', true);
            $('#busNumber').prop('disabled', true);
            $('#route').prop('disabled', true);
            $('#withWhom').prop('disabled', false);
      }
});
$('#train').click(function() {
      if ($(this).is(':checked')) {
            $('#busNumber').prop('disabled', true);
            $('#route').prop('disabled', true);
      }
});
$('#bus').click(function() {
      if ($(this).is(':checked')) {
            $('#busNumber').prop('disabled', false);
            $('#route').prop('disabled', false);
      }
});

$('#rname').click(function() {
      if ($(this).is(':checked')) {
        $('#contactDetail').attr('placeholder','Enter Name');
      }
});
$('#nic').click(function() {
      if ($(this).is(':checked')) {
        $('#contactDetail').attr('placeholder','Enter NIC Number');
      }
});
$('#email').click(function() {
      if ($(this).is(':checked')) {
        $('#contactDetail').attr('placeholder','Enter Email Address');
      }
});
$('#phone').click(function() {
      if ($(this).is(':checked')) {
        $('#contactDetail').attr('placeholder','Enter Phone Number');
      }
});
</script>
</body>
</html>
