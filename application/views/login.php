<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
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

<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 

<?php 
$msg=''; 
 if (isset($_GET['message'])) { 
     $msg = $_GET['message']; 
	echo "<script>alert('$msg');</script>"; 
	
  } 
 // header('Location: http://localhost/login/registration.php');
?> 

<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
} 
body  {
  background-image: url("http://localhost/vHub/uploads/wal1.jpg"); 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
</style>
</head>
<body> 
<div><h1 style='text-align:center;font-size: 100px;color: white;'>vHub</h1></div>
<div class="login-form">
    <form action="loginin" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name='username' placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name='password' placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
              
    </form>
    <p class="text-center"><a href="register" style='color:white'>Create an Account</a></p>
</div>
</body>
</html>