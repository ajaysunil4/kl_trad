<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$email = ""; 
$country = "";
$subject = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'signup');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);  
  

  	$query = "INSERT INTO contact (firstname, lastname, email, country, subject) 
  			  VALUES('$username','$lastname' ,'$email','$country', '$subject')";
  	mysqli_query($db, $query);
  	header('location: index.html');
  }
}
