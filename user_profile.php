<?php

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>My Profile - DigitalCovid19</title>
  <meta name="description" content="My Profile - DigitalCovid19">
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
  <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-storage.js"></script>
	
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
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
			<h2 class="fnt-green">My Profile Details</h2><br>
			<div class="loginbox">
				<form>
				<div class="form-group">
					<input required readonly type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="">
				</div>
				<div class="form-group">
					<input required readonly type="text" name="nic" id="nic" tabindex="1" class="form-control" placeholder="NIC Number" value="">
				</div>
				<div class="form-group">
					<input required readonly type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
				</div>
				<div class="form-group">
					<input required readonly type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile" value="">
				</div>
				<div class="form-group text-left">
					<button type="button" id="btn_editform" tabindex="4" class="btn btn-green">Edit</button>
					<button type="button" name="save-submit" id="btn_saveform" tabindex="5" class="btn btn-green hidden" value="save-submit">Save Details</button>
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
<script>
	
	var heroReference=firebase.database().ref().child("users");
		heroReference.on("value",function(snapshot){
		snapshot.forEach(function(childsnapshot){
			var person=childsnapshot.val();
			if(currentUser.email==person.email){
				$("#name").val(person.username);
				$("#nic").val(person.nic);
				$("#email").val(person.email);
				$("#mobile").val(person.mobile);
			}
		});
	});

	firebase.auth().onAuthStateChanged(function(user) {
		  if (user) {
			var email = user.email;
			currentUser=user;
		  } else {
			window.location.href="index.php";
		  }
	});
	$("#btn_editform").click(function()
  	{
		$("#name").removeAttr('readonly');
		$("#mobile").removeAttr('readonly');
	});

	$("#btn_saveform").click(function()
  	{
		var detail ={
				email:$("#email").val(),
				mobile:$("#mobile").val(),
				nic:$("#nic").val(),
				username:$("#name").val()
			}
  			addDetail(detail);
	});
	function addDetail(d){
		firebase.database().ref('users/' + d.nic).set(d);
		$("#name").attr('readonly','readonly');
		$("#mobile").attr('readonly','readonly');
		$("#nic").attr('readonly','readonly');
		$("#email").attr('readonly','readonly');
		window.location.href="user_profile.php";
	}
</script>
</body>
</html>
