<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose
/*$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
*/
// Selecting Database
$db = new mysqli('localhost','root','','login');
// SQL query to fetch information of registerd users and finds user match.
$query = $db->query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");



$rows = $query->num_rows;
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile1.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
$db->close(); // Closing Connection
}
}
?>