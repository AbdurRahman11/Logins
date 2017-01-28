<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// Selecting Database
$db = new mysqli("localhost","root","","login");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$login_session=$db->query("select * from users where username='$user_check'")->fetch_object()->username;
if(!isset($login_session)){
$db->close();  //Closing Connection
 header("Location: index.php");// Redirecting To Home Page
}
?>