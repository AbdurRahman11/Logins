<?php


$db = new mysqli('localhost','root','','login');

if($db->connect_errno >0){
die('unable to connect to the database [' .$db.connect_error. ']');
}
else {
echo "connection successfull";
}

if(isset($_POST["submit"]))
{
 //Code goes here.

$name = $_POST["user"];
$password = $_POST["pass"];
 
$name = mysqli_real_escape_string($db, $name);
$password = mysqli_real_escape_string($db, $password);

$sql = "SELECT username FROM users WHERE username='$name'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
 echo "Sorry...This username already exist..";
 echo "<br>";
 echo "<br>";
 echo <<<HTML
<a href="/webstuffs/test/signup/">Back</a>
HTML;
 
}
else
{
 //Code goes here.
 
 $query = mysqli_query($db, "INSERT INTO users (username, password)VALUES ('$name', '$password')");
 
if($query)
{
 echo "Thank You! you are now registered.";
 echo "<br>";
 echo "<br>";
 echo "Login using your details from login page";
 echo "<br>";
 echo "<br>";
 echo <<<HTML
<a href="/webstuffs/test/">Login Page</a>
HTML;
 
 
}
}


} 
?>