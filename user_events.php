<?php

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>My Events - DigitalCovid19</title>
  <meta name="description" content="My Events - DigitalCovid19">
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
<div class="container-fluid mt-5 pt-5 pb-5">
	<div class="row pt-4">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 pl-4 pr-4 pb-4">
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
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 fnt-gray pl-2 pr-2">
			<h2 class="fnt-green pl-1">Attending an Event</h2>
			<div class="loginbox pl-4 pr-4 pt-2">
				<form >
				<div class="form-group">
					<input required type="text" name="eventName" id="eventName" class="form-control" placeholder="Event Name">
				</div>
				<div class="form-group">
					<input required type="text" name="location" id="location" class="form-control" placeholder="Location Name">
				</div>
				<div class="form-group">
					<label class="pl-2">Date</label>
					<input required type="date" id="eDate" name="eDate" max="3000-12-31" min="1000-01-01" class="form-control">
				</div>
				<div class="form-group text-left">
					<button type="button" name="save-submit" id="btn_saveform" class="btn btn-green" value="save-submit">Add Event</button>
				</div>
			</form>
			</div><br>
			<h2 class="fnt-green pl-1">My Events</h2><br>
			<div id="showEvent" class="container-fluid text-center">
				
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-light">
	<div class="row pt-5 pb-5 pl-2 pr-2">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fnt-green">
			<h1><b>Download our app </b></h1>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 fnt-green pt-1">
			<p class="text-justify">You can download android/iso app from follow links. Then register and update your information this will usefull for prevent the virus spreding in sri lanka</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-3">
			<a href=""><img src="img/playstore.png" alt="playstore" class="img-fluid"></a>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-3">
			<a href=""><img src="img/appstore.png" alt="appstore" class="img-fluid"></a>
		</div>
	</div>
</div>

<!-- Footer -->
<footer>
<?php require_once 'layout/footer.php'; ?>
</footer>
<script type="text/javascript">
	var nic="";
	var uid="";
	firebase.auth().onAuthStateChanged(function(user) {
		if (user) {
			var email = user.email;
			uid=user.uid;
			currentUser=user;
		} else {
			window.location.href="index.php";
		}
	});
	var userReference=firebase.database().ref().child("users");
	userReference.on("value",function(snapshot){
		snapshot.forEach(function(childsnapshot){
			var person=childsnapshot.val();
			if(currentUser.email==person.email){
				nic =person.nic;
			}
		});
	});
	$("#btn_saveform").click(function(){
		if($('#eDate').val()=="" ||$("#eventName").val()=="" ||$("#location").val()=="" ){
			window.alert("please fill out all Form field")
		}else{
			var event ={
				date:$('#eDate').val(),
				lat:"",
				long:"",
				name:$("#eventName").val(),
				place:$("#location").val()
			}
			addEvent(event);
		}
	});
	function addEvent(e){
		if(e.name==""){
			window.alert("Event are not updated please try Again")
		}else{
			firebase.database().ref('events/' + e.name).set(e);
			firebase.database().ref('eventWiseUsers/' + e.name+"/"+currentUser.uid).set(nic);
			firebase.database().ref('userWiseEvents/' + nic+"/"+currentUser.uid+Date.now()+"/").set(e.name);
			firebase.database().ref('userWiseDates/' + nic+"/"+currentUser.uid+Date.now()+"/").set(e.date);
			window.alert("Events are Updated")
		}
	}
	var EventsReference=firebase.database().ref().child("events");
	EventsReference.on("value",function(snapshot){
		$("#showEvent").empty();
		var heroHTMLItems="";
		var mess=0;
		snapshot.forEach(function(childsnapshot){
			var events=childsnapshot.val();
			heroHTMLItems+="<div class='addedItems shadow-sm p-3 text-center'><p class='fnt-green'><i class='fas fa-calendar-alt'></i></p><p><small>"+events.date+"</small><br>"+events.place+"<br>"+events.name+"<br></p></div>";
			mess=1;
		});
		if(mess==0){
				heroHTMLItems+="<p align='center'>No Event Found ,Please Update</p><br><br>";
		}
	$("#showEvent").html(heroHTMLItems);
	});
</script>
</body>
</html>
