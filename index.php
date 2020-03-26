<?php


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>DigitalCovid19</title>
  <meta name="description" content="DigitalCovid19 Application - Sri lanka">
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
	
<script>
	var firebaseConfig = {
		apiKey: "AIzaSyBajmU8YO4CDBQylzFwquZBPLf4ugW3NnQ",
		authDomain: "digitalcovid19-405e6.firebaseapp.com",
		databaseURL: "https://digitalcovid19-405e6.firebaseio.com",
		projectId: "digitalcovid19-405e6",
		storageBucket: "digitalcovid19-405e6.appspot.com",
		messagingSenderId: "99655272756",
		appId: "1:99655272756:web:a2cc35420b30fc69d77d61",
		measurementId: "G-QVQHYTWGLE"
	};
  	// Initialize Firebase
  	firebase.initializeApp(firebaseConfig);
  	firebase.auth.Auth.Persistence.LOCAL;
</script>
</head>

<body>
<?php require_once 'layout/head.php'; ?>
<div class="container-fluid mt-5 pt-5 pb-5 pr-0">
	<div class="row pt-4">
		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 pl-4">
			<div class="shadow-sm border loginbox">
				<!-- Nav tabs -->
				  <ul class="nav nav-tabs pt-4 pl-3 pr-3" role="tablist">
				    <li class="nav-item">
				      <a class="nav-link active fnt-green" data-toggle="tab" href="#home">Login</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link fnt-green" data-toggle="tab" href="#menu1">Register</a>
				    </li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div id="home" class="container tab-pane active pt-5 pb-4 pl-4 pr-4">
					    <form>
							<div class="form-group">
								<input required  type="text" name="loginEmail" id="loginEmail" tabindex="1" class="form-control" placeholder="Email">
								</div>
							<div class="form-group">
								<input required type="password" name="loginpassword" id="loginpassword" tabindex="2" class="form-control" placeholder="Password">
							</div>
							<div class="form-group text-left fnt-green">
								<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
								<label for="remember"> Remember Me</label>
							</div>
							<div class="form-group text-center">
								<button type="button" id="login-submit" tabindex="4" class="btn btn-green pl-5 pr-5" value="Log In">Log In</button>
							</div>
							<div class="form-group">
								<div class="text-center fnt-green">
								<a href="reset_pass.php" tabindex="5" class="forgot-password fnt-green">Forgot Password?</a>
								</div>
							</div>
						</form>
				    </div>
				    <div id="menu1" class="container tab-pane fade pt-5 pb-4 pl-4 pr-4">
					    <form>
							<div class="form-group">
								<input required value="" type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
							</div>
							<div class="form-group">
								<input required type="text" name="nic" id="nic" tabindex="1" class="form-control" placeholder="NIC Number" value="">
							</div>
							<div class="form-group">
								<input required type="email"  id="regEmail" tabindex="1" class="form-control" placeholder="Email Address" value="">
							</div>
							<div class="form-group">
								<input required type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile" value="">
							</div>
							<div class="form-group">
								<input required type="password"  id="regPassword" tabindex="2" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<input required type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
							</div>
							<div class="form-group text-center">
								<button type="button" name="register-submit" id="register-submit" tabindex="4" class="btn btn-green pl-5 pr-5" value="Register Now">Register Now</button>
							</div>
							<div class="form-group">
								<div class="text-center fnt-green">
								Already registered ? <a id="gotologin" href="" class="fnt-green">Log in</a>
								</div>
							</div>
						</form>
				    </div>
				  </div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 text-center">
			<img class="img-fluid pt-0 mt-0" src="img/map.jpg">
		</div>
	</div>
</div>
<div class="container-fluid bg-green">
	<div class="row pt-5 pb-3 pl-2 pr-2">
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 text-center">
			<img src="img/coronavirus2.png" alt="coronavirus" class="img-fluid">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-9 fnt-white pt-2">
			<h1><b>Coronavirus disease 2019 (COVID-19) </b></h1>
			<p class="text-justify">A coronavirus is a virus that is found in animals and, rarely, can be transmitted from animals to humans and then spread person to person.COVID-19 symptoms range from mild to severe. It takes 2-14 days after exposure for symptoms to develop.Those with weakened immune systems may develop more serious symptoms, like pneumonia or bronchitis. You may never develop symptoms after being exposed to COVID-19. So far, most confirmed cases are in adults, but some children have been infected. There is no evidence that children are at greater risk for getting the virus.</p>
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
<script type="text/javascript">
	$("#gotologin").click(function(){
	    $("#home").tab('show');
	});

	$("#reset-button").click(function()
  	{
  		var auth = firebase.auth();
		var emailAddress = $("#inputEmail").val();
		auth.sendPasswordResetEmail(emailAddress).then(function() {

		}).catch(function(error) {

		});
		 window.alert("Password Reset Link send your mail cheak it")
	});
	$("#register-submit").click(function()
	{
		var email=$("#regEmail").val();
		var username=$("#username").val();
		var nic=$("#nic").val();
		var rPassword=$("#regPassword").val();
		var cpassword=$("#confirm-password").val();
		var mobileno=$("#mobile").val();
		if(email=="" ||username=="" ||nic=="" ||rPassword=="" ||cpassword=="" ||mobile==""){
			window.alert("please fill out all Form field")
		}else if(rPassword!=cpassword){
			window.alert("Confirmation password and Password are not same ")
		}else if(rPassword.toString().length<6){
			window.alert("Password should be at least 6 characters")
		}else{
			CreateNewUser(email,rPassword);
			window.alert("Your account is Created")
			var detail ={
				email:$("#regEmail").val(),
				mobile:$("#mobile").val(),
				nic:$("#nic").val(),
				username:$("#username").val()
			}
  			addDetail(detail);
		}
	});
	function addDetail(d){
		firebase.database().ref('users/' + d.nic).set(d);
	}
	function CreateNewUser(email,rPassword){
		firebase.auth().createUserWithEmailAndPassword(email, rPassword).catch(function(error) {
		  	var errorCode = error.code;
		  	var errorMessage = error.message;
		 	window.alert("Message :"+errorMessage)
		});
		
	}
	$("#login-submit").click(function()
  	{
  		var email=$("#loginEmail").val();
  		var password=$("#loginpassword").val();
  		SignIn(email,password);
	});
	function SignIn(email,password){
		firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
		  var errorCode = error.code;
		  var errorMessage = error.message;
  		  window.alert("Message :"+errorMessage)
		});
	}
	firebase.auth().onAuthStateChanged(function(user) {
		  if (user) {
			window.location.href="user.php";
		  } else {
			
		  }
	});
</script>
<!-- Footer -->
<footer>
<?php require_once 'layout/footer.php'; ?>
</footer>
</body>
</html>
