<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile1.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" class="container-fluid">

<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label id="tags">UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<br />
<label id="tags">Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<br>
<br>
<input name="submit" type="submit" value=" Login " >
<span><?php echo $error; ?></span>
<br>

<br>
<span style="text-align:center;">New to This Website, Dont have an account?</span>
<br>
</form>
<br>
<button onclick= "location.href = '/webstuffs/test/signup';" id = "btn">Signup</button>
</div>


</div>

</body>
</html>