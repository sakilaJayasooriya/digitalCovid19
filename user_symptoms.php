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
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 pt-5 fnt-gray">
			<h2 class="fnt-green">My Symptoms</h2><br>
			<p><b>Current :</b> Fever | Breathing Difficulties | Headache</p>
			<p><b>Abroad :</b> China (12/12/2019 - 22/02/2020)</p><br><br>
			<h2 class="fnt-green">Update My Symptoms</h2><br>
			<div class="loginbox">
				<form action="symptoms_editpage.php" method="post" role="form" id="">
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" value="breathing_difficulties">Breathing Difficulties
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" value="fever">Fever
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" value="headache">Headache
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" value="cough">Cough
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" value="sore_throat">Sore throat
				  </label>
				</div>
				<div class="form-group pt-3">
					<label>Are you been abroad?</label><br>
					<div class="custom-control custom-radio custom-control-inline">
					    <input type="radio" class="custom-control-input" id="abroadid" name="abroad" value="abroad">
					    <label class="custom-control-label" for="abroadid">Yes</label>
					 </div>
					<div class="custom-control custom-radio custom-control-inline">
					    <input type="radio" class="custom-control-input" id="notabroadid" name="abroad" value="notAbroad">
					    <label class="custom-control-label" for="notabroadid">No</label>
					</div>
				</div>
				<div class="form-group">
			      <label for="country">Which country?</label>
			      <select class="form-control" id="country" name="country">
			        <option value="china">China</option>
			        <option value="italy">Italy</option>
			        <option value="india">India</option>
			        <option value="uk">UK</option>
			        <option value="usa">USA</option>
			      </select>
			  	</div>
				<div class="form-group">
				 <label >From</label>
				 <input type="date" id="abroadFrom" name="abroadFrom" max="3000-12-31" min="1000-01-01" class="form-control">
				</div>
				<div class="form-group">
				 <label >To</label>
				 <input type="date" id="abroadTo" name="abroadTo" min="1000-01-01" max="3000-12-31" class="form-control">
				</div>
				<div class="form-group text-left">
					<button type="submit" name="save-submit" id="btn_saveform" tabindex="5" class="btn btn-green" value="save-submit">Update Symptoms</button>
				</div>
			</form>
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
$('#notabroadid').click(function() {
      if ($(this).is(':checked')) {
            $('#abroadFrom').prop('disabled', true);
            $('#abroadTo').prop('disabled', true);
            $('#country').prop('disabled', true);
      }
});
$('#abroadid').click(function() {
      if ($(this).is(':checked')) {
            $('#abroadFrom').prop('disabled', false);
            $('#abroadTo').prop('disabled', false);
            $('#country').prop('disabled', false);
      }
});
</script>
</body>
</html>
