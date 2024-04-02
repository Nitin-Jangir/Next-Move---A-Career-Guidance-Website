<?php 
$email=$_POST['email'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

// Database connection 
$conn = new mysqli('localhost','root','test');
if($conn->connect_error){
  die('Connection Failed:'.$conn->connect_error);
}else {
  $stmt = $conn->prepare("insert into registration(email,password)values(?,?)");
  $stmt->bind_param("ssss",$email,$pasword,$firstname,$lastname);
  $stmt->execute();
  echo"registration successful.....";
  $stmt->close();
  $stmt->close();
}

?/