<?php

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>DigitalCovid19</title>
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
		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 pt-5">
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
					    <form action="login.php" method="post" role="form">
							<div class="form-group">
								<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username">
								</div>
							<div class="form-group">
								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
							</div>
							<div class="form-group text-left fnt-green">
								<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
								<label for="remember"> Remember Me</label>
							</div>
							<div class="form-group text-center">
								<button type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-green pl-5 pr-5" value="Log In">Log In</button>
							</div>
							<div class="form-group">
								<div class="text-center fnt-green">
									<a href="reset_pass.php" tabindex="5" class="forgot-password fnt-green">Forgot Password?</a>
								</div>
							</div>
						</form>
				    </div>
				    <div id="menu1" class="container tab-pane fade pt-5 pb-4 pl-4 pr-4">
					    <form action="register.php" method="post" role="form">
							<div class="form-group">
								<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="">
							</div>
							<div class="form-group">
								<input type="text" name="nic" id="nic" tabindex="1" class="form-control" placeholder="NIC Number" value="">
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
							</div>
							<div class="form-group">
								<input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile" value="">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
							</div>
							<div class="form-group text-center">
								<button type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-green pl-5 pr-5" value="Register Now">Register Now</button>
							</div>
						</form>
				    </div>
				  </div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 pt-5">
			<img class="img-fluid" src="img/map.jpg">
		</div>
	</div>
</div>
<div class="container-fluid bg-green">
	<div class="row pt-5 pb-3 pl-2 pr-2">
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-3">
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

<!-- Footer -->
<footer>
<?php require_once 'layout/footer.php'; ?>
</footer>
</body>
</html>
