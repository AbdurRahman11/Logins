
<!DOCTYPE html>
<html>
<head>
<title>Signup Form in PHP with Session</title>
<link href="/webstuffs/test/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" class="container-fluid">

<div id="login">
<h2>Signup Form</h2>
<form action="signup.php" method="post">
<label id="tags">UserName :</label>
<input id="name" name="user" placeholder="username" type="text">
<br />
<label id="tags">Password :</label>
<input id="password" name="pass" placeholder="**********" type="password">
<br>
<br>
<input name="submit" type="submit" value=" Sign Up" >

<br>

<br>
<span style="text-align:center;">Already have an account?</span>
<br>
</form>
<br>
<button onclick= "location.href = '/webstuffs/test';" id = "btn">Login</button>
</div>


</div>

</body>
</html>