<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700"> 
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='robots' content='index,follow' />
<meta name='googlebot' content='index,follow,all' />
<meta name='distribution' content='global'/>
<meta name='coverage' content='worldwide'/>
<link rel='shortcut icon' href='http://localhost/vHub/uploads/logo.jpeg' rel='icon' type='image/x-icon'/ />
<meta name='identifier-url' content='index.html'/>
<meta name='revisit-after' content='4 days'>
<meta name='description' content='Keep user’s favourite YouTube videos />
<meta name='classification' content='' />
<meta name='keywords' content='keep user’s favourite YouTube videos'/>
<meta name='alexa' content='100' />
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name="google-site-verification" content="RYO0S_PoEU6qmOhG4a_wkhm1eOXSi9oq-OhUdqml24s" />

<title>Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 

<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
body  {
  background-image: url("http://localhost/vHub/uploads/wal1.jpg"); 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
</style> 
  <SCRIPT type="text/javascript"> 
  function myfunction() { 
 
   if (navigator.geolocation) { 

        navigator.geolocation.getCurrentPosition(showLocation); 

    } else { 

        $('#location').html('Geolocation is not supported by this browser.'); 

    } 
	function showLocation(position) { 

    var latitude = position.coords.latitude; 

var longitude = position.coords.longitude; 

     

$.ajax({ 

type:'POST', 

url:'getLocation', 

data:'latitude='+latitude+'&longitude='+longitude, 

success:function(msg){ 

            if(msg){ 

               $("#gps").html(msg); 

            }else{ 

                $("#gps").html('Not Available'); 

            } 

} 

}); 

} 


  }
  
</SCRIPT>

</head>
<body> 
<div><h1 style='text-align:center;font-size: 100px;color: white;'>vHub</h1></div>
<div class="signup-form">
    <form action="doregister" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div> 
		<div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		    
        <div class="form-group">
            <input type="text" class="form-control" id='gps' name="location" placeholder="Location" required="required">
        </div>		
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login">Sign in</a></div>
	
	
</div>
</body>
</html>