<?php
// echo "Welcome To Our Page";
// echo "<br>";
// $first_name= $_GET["Fast_Name"];
// echo "User Name: $first_name";
// echo "<br>";
// $last_name=$_GET["Last_name"];
// echo "Last Name:  $last_name";

// $full_name=$first_name." ". $last_name;
// echo "<br>";
// echo "Full Name: $full_name";
// echo "<br>";
// $email= $_GET["email"];
// echo "Your email: $email";
// echo "<br>";
// $user=$_GET["user_name"];
// echo "Your User Name: $user";
// echo "<br>";
// $pass=$_GET["pass"];
// echo "Your Password: $pass";

echo "Welcome To Our Page";
echo "<br>";
$first_name= $_POST["Fast_Name"];
echo "User Name: $first_name";
echo "<br>";
$last_name=$_POST["Last_name"];
echo "Last Name:  $last_name";

$full_name=$first_name." ". $last_name;
echo "<br>";
echo "Full Name: $full_name";
echo "<br>";
$email= $_POST["email"];
echo "Your email: $email";
echo "<br>";
$user=$_POST["user_name"];
echo "Your User Name: $user";
echo "<br>";
$pass=$_POST["pass"];
echo "Your Password: $pass";




?>