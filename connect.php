<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$PHONE=$_POST['PHONE'];
$conn= new mysqli('localhost','root','','hrms');
if(conn->connect_error){
	die('Connection Failed :'.$conn_error);
}
else{
	$stmt=$conn->prepare("insert into contact(firstname,lastname,gender,email,password,PHONE)values(?,?,?,?,?,?)"")
	$stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$PHONE)
	$stmt->exeute();
	echo "registered succesfully"
	stmt->close();
	$conn->close();
}