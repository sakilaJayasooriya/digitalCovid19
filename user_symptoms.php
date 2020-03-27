<?php

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>My Symptoms - DigitalCovid19</title>
  <meta name="description" content="My Symptoms - DigitalCovid19">
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
		<div  class="col-xs-12 col-sm-12 col-md-8 col-lg-9 fnt-gray pl-2 pr-2">
			<div class="well" id="show-symptoms">
				
			</div>
			<h2 class="fnt-green">Update My Symptoms</h2><br>
			<div class="loginbox pl-4 pr-4">
				<form>
				<div class="form-check">
				  <label class="form-check-label">
				    <input id="breathing" type="checkbox" class="form-check-input" value="breathing_difficulties">Breathing Difficulties
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input id="ferver" type="checkbox" class="form-check-input" value="fever">Fever
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input id="headache" type="checkbox" class="form-check-input" value="headache">Headache
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input id="cough" type="checkbox" class="form-check-input" value="cough">Cough
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input id="sore_throat" type="checkbox" class="form-check-input" value="sore_throat">Sore throat
				  </label>
				</div>
				<div class="form-group pt-3">
					<label>Have you been abroad?</label><br>
					<div class="custom-control custom-radio custom-control-inline">
					    <input checked type="radio" class="custom-control-input" id="abroadid" name="abroad" value="abroad">
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
				 <input required type="date" id="abroadFrom" name="abroadFrom" max="3000-12-31" min="1000-01-01" class="form-control">
				</div>
				<div class="form-group">
				 <label >To</label>
				 <input required type="date" id="abroadTo" name="abroadTo" min="1000-01-01" max="3000-12-31" class="form-control">
				</div>
				<div class="form-group text-left">
					<button type="button" name="save-submit" id="btn_saveform" tabindex="5" class="btn btn-green" value="save-submit">Update Symptoms</button>
				</div>
			</form>
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
$("#btn_saveform").click(function(){
	var breathing =$('#breathing').prop('checked');
	var ferver =$('#ferver').prop('checked');
	var headache =$('#headache').prop('checked');
	var cough =$('#cough').prop('checked');
	var sore_throat =$('#sore_throat').prop('checked');
	var abroad =$('#abroadid').prop('checked');

	if($('#abroadid').prop('checked')){
		var country=$('#country').val();
		var abroadFrom=$('#abroadFrom').val();
		var abroadTo=$('#abroadTo').val();
	}else{
        var country="";
        var abroadFrom="";
        var abroadTo="";
	}
	var da=abroadFrom+ "<->"+ abroadTo;
	
	if((abroadFrom=="" ||abroadTo=="" ||country=="" )&& $('#abroadid').prop('checked')){
		window.alert("Please fill out all the fields")
	}else if(abroadFrom>abroadTo){
		window.alert("Date is wrongly entered")
	}else{
		var symptoms ={
			abroad:$('#abroadid').prop('checked'),
			breathin:breathing,
			cough:cough,
			country:country,
  			date:da,
  			ferver:ferver,
  			headache:headache,
  			throat:sore_throat
		  }
		  addSymptom(symptoms);
	}
});	
var nic="";
var userReference=firebase.database().ref().child("users");
userReference.on("value",function(snapshot){
	snapshot.forEach(function(childsnapshot){
		var person=childsnapshot.val();
		if(currentUser.email==person.email){
			nic =person.nic;
		}
	});
});
function addSymptom(d){
	if(nic==""){
		window.alert("Symptoms are not updated please try Again")
	}else{
		firebase.database().ref('symptoms/' + nic).set(d);
		window.alert("Symptoms are Updated")
	}
}
firebase.auth().onAuthStateChanged(function(user) {
		  if (user) {
			var email = user.email;
			currentUser=user;
		  } else {
			window.location.href="index.php";
		  }
});
var symptomsReference=firebase.database().ref().child("symptoms");

symptomsReference.on("value",function(snapshot){
	$("#show-symptoms").empty();
	var heroHTMLItems="<h2 class='fnt-green'>My Symptoms</h2><br>";
	var mess=0;
	snapshot.forEach(function(childsnapshot){
		var symptom=childsnapshot.val();
		if(childsnapshot.key==nic){
			heroHTMLItems+="<p><b>Current :</b>";
			if(symptom.breathin==true){
				heroHTMLItems+="Breathing Difficulties |";
			}if(symptom.ferver==true){
				heroHTMLItems+=" Ferver |";
			}if(symptom.headache==true){
				heroHTMLItems+="Headache |";
			}if(symptom.cough==true){
				heroHTMLItems+="Cough |";
			}if(symptom.throat==true){
				heroHTMLItems+="Sore throat |";
			}
			heroHTMLItems+="</p>";
			if(symptom.abroad==true){
				heroHTMLItems+="</p><p><b>Abroad :</b>"+symptom.country +" ("+symptom.date+")</p><br><br>";
			}else{
				heroHTMLItems+="</p><p><b>Abroad : </b>Not</p><br><br>";
			}
			mess=1;
		}
		
	});
	if(mess==0){
			heroHTMLItems+="<p align='left'>No current symptoms</p><br><br>";
	}
$("#show-symptoms").html(heroHTMLItems);
});

</script>
</body>
</html>
